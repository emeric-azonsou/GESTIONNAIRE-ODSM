<?php
// Inclure le fichier de configuration de la base de données
require_once 'config.php';

// Définir le header pour que le navigateur sache qu'il s'agit de JSON
header('Content-Type: application/json');

try {
    // Préparer la requête SQL
    $stmt = $pdo->prepare("SELECT * FROM produit");

    // Exécuter la requête
    $stmt->execute();

    // Récupérer tous les résultats
    $products = $stmt->fetchAll();

    // Renvoyer les résultats au format JSON
    echo json_encode($products);

} catch (PDOException $e) {
    // Gérer les erreurs de la requête
    http_response_code(500); // Définir le statut HTTP à 500 (Internal Server Error)
    echo json_encode(['error' => "Erreur lors de la récupération des produits : " . $e->getMessage()]);
}
?>