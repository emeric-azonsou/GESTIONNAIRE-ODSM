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
    $id_produit = $data['id_produit'] ?? null;

    if (!$id_produit) {
        echo json_encode(['success' => false, 'error' => 'ID produit manquant']);
        exit;
    }

    // Vérifier si le produit existe
    $stmt = $pdo->prepare("SELECT * FROM produit WHERE id_produit = ?");
    $stmt->execute([$id_produit]);
    $produit = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$produit) {
        echo json_encode(['success' => false, 'error' => 'Produit non trouvé']);
        exit;
    }

    // Marquer le produit comme supprimé (suppression logique)
    $stmt = $pdo->prepare("UPDATE produit SET est_supprime = 1, date_suppression = NOW() WHERE id_produit = ?");
    $stmt->execute([$id_produit]);

    echo json_encode(['success' => true, 'message' => 'Produit marqué comme supprimé avec succès']);

} catch (PDOException $e) {
    echo json_encode(['success' => false, 'error' => 'Erreur base de données: ' . $e->getMessage()]);
} catch (Exception $e) {
    echo json_encode(['success' => false, 'error' => 'Erreur: ' . $e->getMessage()]);
}
?>