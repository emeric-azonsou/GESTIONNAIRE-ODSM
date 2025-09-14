<?php


// Initialisation des variables
$error_message = '';
$success_message = '';
$medicaments = [];
$prix_medicaments = []; // Pour stocker tous les prix

// Connexion à la base de données avec PDO
try {
    $pdo = new PDO('mysql:host=localhost;dbname=gestionnaire_odsm;charset=utf8', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Récupérer l'ID de l'utilisateur connecté
    $id_utilisateur = $_SESSION['user_id'] ?? null;
    
    // Traitement du formulaire
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Récupération des données du formulaire
        $id_produit = $_POST['id_produit'] ?? null;
        $quantite = $_POST['quantite'] ?? null;
        $mode_paiement = $_POST['mode_paiement'] ?? null;
        
        if ($id_produit && $quantite && $mode_paiement && $id_utilisateur) {
            $date_vente = date('Y-m-d H:i:s');
            
            // Récupération du prix de vente du produit
            $stmt = $pdo->prepare("SELECT prix_vente FROM produit WHERE id_produit = ?");
            $stmt->execute([$id_produit]);
            $produit = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if ($produit) {
                $prix_unitaire = $produit['prix_vente'];
                $montant_total = $prix_unitaire * $quantite;
                
                $pdo->beginTransaction();
                
                // 1. Créer l'enregistrement de vente
                $stmt = $pdo->prepare("INSERT INTO vente (date_vente, montant_total, mode_paiement, id_utilisateur) VALUES (?, ?, ?, ?)");
                $stmt->execute([$date_vente, $montant_total, $mode_paiement, $id_utilisateur]);
                $id_vente = $pdo->lastInsertId();
                
                // 2. Trouver le lot approprié (FIFO ou selon la date de péremption)
                $stmt = $pdo->prepare("
                    SELECT s.id_stock, s.id_lot, s.quantite_actuelle, l.date_peremption 
                    FROM stock s 
                    JOIN lot l ON s.id_lot = l.id_lot 
                    WHERE s.id_produit = ? AND s.quantite_actuelle > 0 
                    ORDER BY l.date_peremption ASC
                ");
                $stmt->execute([$id_produit]);
                $lots = $stmt->fetchAll(PDO::FETCH_ASSOC);
                
                $quantite_restante = $quantite;
                $lots_utilises = [];
                
                // 3. Prélever des lots jusqu'à satisfaction de la quantité demandée
                foreach ($lots as $lot) {
                    if ($quantite_restante <= 0) break;
                    
                    $quantite_a_prelever = min($quantite_restante, $lot['quantite_actuelle']);
                    
                    // Ajouter la ligne de vente
                    $stmt = $pdo->prepare("
                        INSERT INTO ligne_vente (quantite_vendue, prix_unitaire, id_vente, id_produit, id_lot) 
                        VALUES (?, ?, ?, ?, ?)
                    ");
                    $stmt->execute([$quantite_a_prelever, $prix_unitaire, $id_vente, $id_produit, $lot['id_lot']]);
                    
                    // Mettre à jour le stock
                    $stmt = $pdo->prepare("
                        UPDATE stock 
                        SET quantite_actuelle = quantite_actuelle - ?, quantite_sortie = quantite_sortie + ? 
                        WHERE id_stock = ?
                    ");
                    $stmt->execute([$quantite_a_prelever, $quantite_a_prelever, $lot['id_stock']]);
                    
                    $quantite_restante -= $quantite_a_prelever;
                    $lots_utilises[] = $lot['id_lot'] . ':' . $quantite_a_prelever;
                }
                
                // Vérifier si toute la quantité a été satisfaite
                if ($quantite_restante > 0) {
                    throw new Exception("Stock insuffisant pour satisfaire la commande. Il manque $quantite_restante unité(s).");
                }
                
                $pdo->commit();
                
                // Enregistrer l'action dans l'historique
                $details = "Vente de médicament enregistrée (ID: $id_vente). Lots utilisés: " . implode(', ', $lots_utilises);
                $stmt = $pdo->prepare("
                    INSERT INTO historique_action (type_action, details, date_action, id_utilisateur) 
                    VALUES ('vente', ?, NOW(), ?)
                ");
                $stmt->execute([$details, $id_utilisateur]);
                
                $success_message = "Vente enregistrée avec succès!";
                
            } else {
                $error_message = "Produit non trouvé.";
            }
        } else {
            $error_message = "Veuillez remplir tous les champs obligatoires.";
        }
    }
    
    // Récupérer la liste des médicaments pour l'autocomplétion
    $stmt = $pdo->prepare("SELECT id_produit, nom, presentation, prix_vente FROM produit WHERE actif = 1 ORDER BY nom");
    $stmt->execute();
    $medicaments = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // Créer un tableau des prix pour chaque médicament
    foreach ($medicaments as $medicament) {
        $prix_medicaments[$medicament['id_produit']] = $medicament['prix_vente'];
    }
    
} catch (PDOException $e) {
    $error_message = "Erreur de connexion à la base de données: " . $e->getMessage();
} catch (Exception $e) {
    $error_message = $e->getMessage();
    if (isset($pdo) && $pdo->inTransaction()) {
        $pdo->rollBack();
    }
}