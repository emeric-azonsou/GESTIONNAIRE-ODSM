<?php
session_start();
include 'config.php';

header('Content-Type: application/json');

try {
    // Vérifier les permissions
    if (!isset($_SESSION['user_id'])) {
        echo json_encode(['success' => false, 'error' => 'Non authentifié']);
        exit;
    }

    // Vérifier si l'utilisateur est admin
    $user_id = $_SESSION['user_id'];
    $stmt = $pdo->prepare("SELECT r.nom_role FROM utilisateur u JOIN role r ON u.id_role = r.id_role WHERE u.id_utilisateur = ?");
    $stmt->execute([$user_id]);
    $user_role = $stmt->fetch(PDO::FETCH_COLUMN);
    
    if ($user_role !== 'admin') {
        echo json_encode(['success' => false, 'error' => 'Permissions insuffisantes']);
        exit;
    }

    // Récupérer les données
    $data = json_decode(file_get_contents('php://input'), true);
    
    // Validation des données obligatoires
    if (empty($data['nom']) || empty($data['prix_vente']) || empty($data['prix_achat'])) {
        echo json_encode(['success' => false, 'error' => 'Tous les champs obligatoires doivent être remplis']);
        exit;
    }

    // Préparer la requête d'insertion
    $stmt = $pdo->prepare("
        INSERT INTO produit 
        (nom, description, presentation, prix_achat, prix_vente, quantité_disponible, quantite_minimale, actif, date_creation) 
        VALUES (?, ?, ?, ?, ?, ?, ?, 1, NOW())
    ");
    
    $stmt->execute([
        $data['nom'],
        $data['description'] ?? '',
        $data['presentation'] ?? '',
        $data['prix_achat'],
        $data['prix_vente'],
        $data['quantite_disponible'] ?? 0,
        $data['quantite_minimale'] ?? 0
    ]);

    echo json_encode(['success' => true, 'message' => 'Produit créé avec succès', 'id' => $pdo->lastInsertId()]);

} catch (PDOException $e) {
    echo json_encode(['success' => false, 'error' => 'Erreur base de données: ' . $e->getMessage()]);
} catch (Exception $e) {
    echo json_encode(['success' => false, 'error' => 'Erreur: ' . $e->getMessage()]);
}
?>