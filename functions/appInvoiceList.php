<?
try {
    $pdo = new PDO('mysql:host=localhost;dbname=gestionnaire_odsm;charset=utf8', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Récupérer les informations de l'utilisateur connecté
    $user_id = $_SESSION['user_id'] ?? null;
    $is_admin = false;

    if ($user_id) {
        $stmt = $pdo->prepare("
            SELECT u.*, r.nom_role 
            FROM utilisateur u 
            JOIN role r ON u.id_role = r.id_role 
            WHERE u.id_utilisateur = ?
        ");
        $stmt->execute([$user_id]);
        $user_data = $stmt->fetch(PDO::FETCH_ASSOC);

        // Vérifier si l'utilisateur est admin (comme dans le profil)
        $is_admin = ($user_data['nom_role'] === 'admin');
    }
} catch (PDOException $e) {
    $error_message = "Erreur de connexion à la base de données: " . $e->getMessage();
    $is_admin = false;
}

// Récupérer les statistiques réelles
$totalProducts = $pdo->query("SELECT COUNT(*) FROM produit WHERE actif = 1")->fetchColumn();
$availableProducts = $pdo->query("SELECT COUNT(*) FROM produit WHERE actif = 1 AND quantité_disponible > 0")->fetchColumn();
$unavailableProducts = $totalProducts - $availableProducts;

// Seul l'admin peut voir les stocks faibles et les ventes
$lowStockCount = 0;
$monthlySales = 0;
if ($is_admin) {
    $lowStockCount = $pdo->query("SELECT COUNT(*) FROM produit WHERE quantité_disponible <= quantite_minimale AND actif = 1")->fetchColumn();

    $firstDayMonth = date('Y-m-01');
    $lastDayMonth = date('Y-m-t');
    $monthlySales = $pdo->query("SELECT COALESCE(SUM(montant_total), 0) FROM vente WHERE date_vente BETWEEN '$firstDayMonth' AND '$lastDayMonth 23:59:59'")->fetchColumn();
}

// Récupérer les présentations distinctes pour le filtre
$presentations = $pdo->query("SELECT DISTINCT presentation FROM produit WHERE presentation IS NOT NULL AND presentation != '' ORDER BY presentation")->fetchAll(PDO::FETCH_COLUMN);

?>