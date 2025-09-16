<?php
// functions/updateProduct.php
require_once 'config.php';
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    
    try {
        $stmt = $pdo->prepare("UPDATE produit SET nom = ?, description = ?, presentation = ?, prix_achat = ?, prix_vente = ?, quantite_minimale = ?, actif = ? WHERE id_produit = ?");
        $stmt->execute([
            $data['nom'],
            $data['description'],
            $data['presentation'],
            $data['prix_achat'],
            $data['prix_vente'],
            $data['quantite_minimale'],
            $data['actif'],
            $data['id_produit']
        ]);
        
        echo json_encode(['success' => true]);
    } catch (PDOException $e) {
        echo json_encode(['error' => $e->getMessage()]);
    }
}
?>