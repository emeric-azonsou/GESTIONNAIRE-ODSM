<?php
// Inclure le fichier de configuration de la base de données
require_once 'config.php';

// Définir le header pour que le navigateur sache qu'il s'agit de JSON
header('Content-Type: application/json');

try {
    // Préparer la requête SQL pour récupérer les présentations uniques
    $stmt = $pdo->prepare("SELECT DISTINCT presentation FROM produit ORDER BY presentation ASC");

    // Exécuter la requête
    $stmt->execute();

    // Récupérer tous les résultats
    $presentations = $stmt->fetchAll(PDO::FETCH_COLUMN, 0);

    // Renvoyer les résultats au format JSON
    echo json_encode($presentations);

} catch (PDOException $e) {
    // Gérer les erreurs de la requête
    http_response_code(500); // Définir le statut HTTP à 500
    echo json_encode(['error' => "Erreur lors de la récupération des présentations : " . $e->getMessage()]);
}
?>