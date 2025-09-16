<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


// Connexion à la base de données
try {
    $pdo = new PDO('mysql:host=localhost;dbname=gestionnaire_odsm;charset=utf8', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Récupérer les informations de l'utilisateur connecté
    $user_id = $_SESSION['user_id'] ?? null;
    $user_data = [];
    $is_admin = false;
    $user_name = "Utilisateur";
    
    if ($user_id) {
        $stmt = $pdo->prepare("
            SELECT u.*, r.nom_role 
            FROM utilisateur u 
            JOIN role r ON u.id_role = r.id_role 
            WHERE u.id_utilisateur = ?
        ");
        $stmt->execute([$user_id]);
        $user_data = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($user_data) {
            $user_name = $user_data['prenom'] . ' ' . $user_data['nom'];
            $is_admin = ($user_data['nom_role'] === 'admin');
            
            // Générer les initiales pour l'avatar
            $initials = '';
            if (!empty($user_data['prenom']) && !empty($user_data['nom'])) {
                $initials = strtoupper(substr($user_data['prenom'], 0, 1) . substr($user_data['nom'], 0, 1));
            } elseif (!empty($user_data['prenom'])) {
                $initials = strtoupper(substr($user_data['prenom'], 0, 2));
            } elseif (!empty($user_data['nom'])) {
                $initials = strtoupper(substr($user_data['nom'], 0, 2));
            } else {
                $initials = 'US';
            }
        }
    }
    
    // Déterminer la salutation (Bonjour/Bonsoir)
    $heure_actuelle = date('H');
    if ($heure_actuelle >= 5 && $heure_actuelle < 18) {
        $salutation = "Bonjour";
    } else {
        $salutation = "Bonsoir";
    }
    
    // Statistiques des ventes du jour
    $stmt = $pdo->prepare("
        SELECT COUNT(*) as nb_ventes, COALESCE(SUM(montant_total), 0) as chiffre_affaires 
        FROM vente 
        WHERE DATE(date_vente) = CURDATE()
    ");
    $stmt->execute();
    $stats_jour = $stmt->fetch(PDO::FETCH_ASSOC);
    
    // Statistiques des ventes de la semaine
    $stmt = $pdo->prepare("
        SELECT COUNT(*) as nb_ventes, COALESCE(SUM(montant_total), 0) as chiffre_affaires 
        FROM vente 
        WHERE YEARWEEK(date_vente, 1) = YEARWEEK(CURDATE(), 1)
    ");
    $stmt->execute();
    $stats_semaine = $stmt->fetch(PDO::FETCH_ASSOC);
    
    // Produits les plus vendus ce mois-ci
    $stmt = $pdo->prepare("
        SELECT p.nom, SUM(lv.quantite_vendue) as total_vendu, p.prix_vente
        FROM ligne_vente lv
        JOIN produit p ON lv.id_produit = p.id_produit
        JOIN vente v ON lv.id_vente = v.id_vente
        WHERE MONTH(v.date_vente) = MONTH(CURDATE()) 
        AND YEAR(v.date_vente) = YEAR(CURDATE())
        GROUP BY lv.id_produit
        ORDER BY total_vendu DESC
        LIMIT 5
    ");
    $stmt->execute();
    $produits_populaires = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // Dernières ventes
    $stmt = $pdo->prepare("
        SELECT v.id_vente, v.date_vente, v.montant_total, v.mode_paiement, u.prenom, u.nom
        FROM vente v
        JOIN utilisateur u ON v.id_utilisateur = u.id_utilisateur
        ORDER BY v.date_vente DESC
        LIMIT 5
    ");
    $stmt->execute();
    $dernieres_ventes = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
} catch (PDOException $e) {
    $error_message = "Erreur de connexion à la base de données: " . $e->getMessage();
    $user_data = [];
    $is_admin = false;
    $user_name = "Utilisateur";
    $initials = 'ER';
    $salutation = (date('H') >= 5 && date('H') < 18) ? "Bonjour" : "Bonsoir";
    $stats_jour = ['nb_ventes' => 0, 'chiffre_affaires' => 0];
    $stats_semaine = ['nb_ventes' => 0, 'chiffre_affaires' => 0];
    $produits_populaires = [];
    $dernieres_ventes = [];
}