<?php
// getProduitsPrix.php
header('Content-Type: application/json');

// Simuler un délai pour le débogage
// sleep(1);

if (isset($_GET['id'])) {
    $id_produit = intval($_GET['id']);
    
    try {
        // Connexion à la base de données
        $pdo = new PDO('mysql:host=localhost;dbname=gestionnaire_odsm;charset=utf8', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // Préparer et exécuter la requête
        $stmt = $pdo->prepare("SELECT id_produit, nom, prix_vente FROM produit WHERE id_produit = ?");
        $stmt->execute([$id_produit]);
        $produit = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($produit) {
            echo json_encode([
                'success' => true,
                'id_produit' => $produit['id_produit'],
                'nom' => $produit['nom'],
                'prix_vente' => floatval($produit['prix_vente'])
            ]);
        } else {
            echo json_encode([
                'success' => false,
                'message' => 'Produit non trouvé'
            ]);
        }
        
    } catch (PDOException $e) {
        echo json_encode([
            'success' => false,
            'message' => 'Erreur de base de données: ' . $e->getMessage()
        ]);
    }
} else {
    echo json_encode([
        'success' => false,
        'message' => 'ID de produit non fourni'
    ]);
}