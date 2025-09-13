<!-- <?php
// Inclure le fichier de configuration de la base de données
require_once 'config.php';

// Définir le header pour que le navigateur sache qu'il s'agit de JSON
header('Content-Type: application/json');

try {
    // Requête pour récupérer le stock total (somme de la colonne quantite_stock de la table stock)
    $stmt_total = $pdo->prepare("SELECT SUM(quantite_stock) AS total_stock FROM stock");
    $stmt_total->execute();
    $total_stock = $stmt_total->fetch(PDO::FETCH_ASSOC)['total_stock'];

    // Pour le "Stock Restant", on peut considérer que c'est la même chose que le stock total
    // ou bien le total moins les quantités de produits dont la quantite_minimale est atteinte.
    // Ici, on va prendre le total.
    $remaining_stock = $total_stock;

    // Renvoyer les résultats au format JSON
    echo json_encode([
        'total_stock' => $total_stock,
        'remaining_stock' => $remaining_stock
    ]);

} catch (PDOException $e) {
    // Gérer les erreurs de la requête
    http_response_code(500);
    echo json_encode(['error' => "Erreur lors de la récupération des données de stock : " . $e->getMessage()]);
}
?> -->