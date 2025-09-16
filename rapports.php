<?php
include 'partials/main.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Démarrer la session

// Vérifier l'authentification
require 'functions/authCheck.php';

// Connexion à la base de données
try {
   include "functions/config.php";

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

        // Vérifier si l'utilisateur est admin
        $is_admin = ($user_data['nom_role'] === 'admin');
    }
} catch (PDOException $e) {
   
    $is_admin = false;
}

// Récupérer les données pour les rapports

// Erreurs de connexion
$loginErrors = $pdo->query("
    SELECT h.*, u.identifiant, u.nom, u.prenom 
    FROM historique_action h 
    LEFT JOIN utilisateur u ON h.id_utilisateur = u.id_utilisateur 
    WHERE h.type_action = 'tentative_connexion' OR h.type_action = 'blocage_compte'
    ORDER BY h.date_action DESC
")->fetchAll(PDO::FETCH_ASSOC);

// Meilleurs vendeurs (par montant total des ventes)
$bestSellers = $pdo->query("
    SELECT u.id_utilisateur, u.identifiant, u.nom, u.prenom, 
           COUNT(v.id_vente) as nb_ventes, 
           SUM(v.montant_total) as total_ventes
    FROM vente v 
    JOIN utilisateur u ON v.id_utilisateur = u.id_utilisateur 
    GROUP BY v.id_utilisateur 
    ORDER BY total_ventes DESC
")->fetchAll(PDO::FETCH_ASSOC);

// Meilleurs produits vendus (par quantité vendue)
$bestProducts = $pdo->query("
    SELECT p.id_produit, p.nom, p.presentation, 
           SUM(lv.quantite_vendue) as total_vendu,
           SUM(lv.quantite_vendue * lv.prix_unitaire) as chiffre_affaires
    FROM ligne_vente lv 
    JOIN produit p ON lv.id_produit = p.id_produit 
    GROUP BY lv.id_produit 
    ORDER BY total_vendu DESC
")->fetchAll(PDO::FETCH_ASSOC);

// Erreurs critiques (toutes les actions de type erreur)
$criticalErrors = $pdo->query("
    SELECT h.*, u.identifiant, u.nom, u.prenom 
    FROM historique_action h 
    LEFT JOIN utilisateur u ON h.id_utilisateur = u.id_utilisateur 
    WHERE h.type_action LIKE '%erreur%' OR h.type_action LIKE '%echec%' OR h.type_action = 'blocage_compte'
    ORDER BY h.date_action DESC
")->fetchAll(PDO::FETCH_ASSOC);

// Statistiques générales
$totalSales = $pdo->query("SELECT COUNT(*) FROM vente")->fetchColumn();
$totalSalesAmount = $pdo->query("SELECT COALESCE(SUM(montant_total), 0) FROM vente")->fetchColumn();
$totalUsers = $pdo->query("SELECT COUNT(*) FROM utilisateur WHERE actif = 1")->fetchColumn();
$failedLogins = $pdo->query("SELECT COUNT(*) FROM historique_action WHERE type_action = 'tentative_connexion'")->fetchColumn();

// Récupérer les dates pour les filtres
$minDate = $pdo->query("SELECT MIN(date_action) FROM historique_action")->fetchColumn();
$maxDate = $pdo->query("SELECT MAX(date_action) FROM historique_action")->fetchColumn();

// Traitement des filtres de date
$startDate = $_GET['start_date'] ?? date('Y-m-01');
$endDate = $_GET['end_date'] ?? date('Y-m-d');

// Appliquer les filtres si des dates sont spécifiées
if (isset($_GET['start_date']) && isset($_GET['end_date'])) {
    $startDate = $_GET['start_date'];
    $endDate = $_GET['end_date'];
    
    // Requêtes filtrées par date
    $loginErrors = $pdo->prepare("
        SELECT h.*, u.identifiant, u.nom, u.prenom 
        FROM historique_action h 
        LEFT JOIN utilisateur u ON h.id_utilisateur = u.id_utilisateur 
        WHERE (h.type_action = 'tentative_connexion' OR h.type_action = 'blocage_compte')
        AND h.date_action BETWEEN ? AND ?
        ORDER BY h.date_action DESC
    ");
    $loginErrors->execute([$startDate . ' 00:00:00', $endDate . ' 23:59:59']);
    $loginErrors = $loginErrors->fetchAll(PDO::FETCH_ASSOC);
    
    $bestSellers = $pdo->prepare("
        SELECT u.id_utilisateur, u.identifiant, u.nom, u.prenom, 
               COUNT(v.id_vente) as nb_ventes, 
               SUM(v.montant_total) as total_ventes
        FROM vente v 
        JOIN utilisateur u ON v.id_utilisateur = u.id_utilisateur 
        WHERE v.date_vente BETWEEN ? AND ?
        GROUP BY v.id_utilisateur 
        ORDER BY total_ventes DESC
    ");
    $bestSellers->execute([$startDate . ' 00:00:00', $endDate . ' 23:59:59']);
    $bestSellers = $bestSellers->fetchAll(PDO::FETCH_ASSOC);
    
    $bestProducts = $pdo->prepare("
        SELECT p.id_produit, p.nom, p.presentation, 
               SUM(lv.quantite_vendue) as total_vendu,
               SUM(lv.quantite_vendue * lv.prix_unitaire) as chiffre_affaires
        FROM ligne_vente lv 
        JOIN vente v ON lv.id_vente = v.id_vente
        JOIN produit p ON lv.id_produit = p.id_produit 
        WHERE v.date_vente BETWEEN ? AND ?
        GROUP BY lv.id_produit 
        ORDER BY total_vendu DESC
    ");
    $bestProducts->execute([$startDate . ' 00:00:00', $endDate . ' 23:59:59']);
    $bestProducts = $bestProducts->fetchAll(PDO::FETCH_ASSOC);
    
    $criticalErrors = $pdo->prepare("
        SELECT h.*, u.identifiant, u.nom, u.prenom 
        FROM historique_action h 
        LEFT JOIN utilisateur u ON h.id_utilisateur = u.id_utilisateur 
        WHERE (h.type_action LIKE '%erreur%' OR h.type_action LIKE '%echec%' OR h.type_action = 'blocage_compte')
        AND h.date_action BETWEEN ? AND ?
        ORDER BY h.date_action DESC
    ");
    $criticalErrors->execute([$startDate . ' 00:00:00', $endDate . ' 23:59:59']);
    $criticalErrors = $criticalErrors->fetchAll(PDO::FETCH_ASSOC);
    
    // Statistiques filtrées
    $totalSales = $pdo->prepare("SELECT COUNT(*) FROM vente WHERE date_vente BETWEEN ? AND ?");
    $totalSales->execute([$startDate . ' 00:00:00', $endDate . ' 23:59:59']);
    $totalSales = $totalSales->fetchColumn();
    
    $totalSalesAmount = $pdo->prepare("SELECT COALESCE(SUM(montant_total), 0) FROM vente WHERE date_vente BETWEEN ? AND ?");
    $totalSalesAmount->execute([$startDate . ' 00:00:00', $endDate . ' 23:59:59']);
    $totalSalesAmount = $totalSalesAmount->fetchColumn();
    
    $failedLogins = $pdo->prepare("SELECT COUNT(*) FROM historique_action WHERE type_action = 'tentative_connexion' AND date_action BETWEEN ? AND ?");
    $failedLogins->execute([$startDate . ' 00:00:00', $endDate . ' 23:59:59']);
    $failedLogins = $failedLogins->fetchColumn();
}
?>

<head>
    <?php
    $title = 'Rapports et Statistiques';
    include('partials/title-meta.php');
    ?>
    <!-- Sweet Alert css-->
    <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css">
    <?php include 'partials/head-css.php'; ?>

    <style>
        .card-stat {
            transition: transform 0.2s ease;
        }

        .card-stat:hover {
            transform: translateY(-5px);
        }

        .nav-tabs .nav-link {
            border: none;
            border-bottom: 3px solid transparent;
            color: #6c757d;
            font-weight: 500;
        }

        .nav-tabs .nav-link.active {
            color: #405189;
            border-bottom-color: #405189;
            background: transparent;
        }

        .table-responsive {
            overflow-x: auto;
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        .table-responsive::-webkit-scrollbar {
            display: none;
        }

        .badge-error {
            background-color: #f06548;
            color: white;
        }

        .badge-warning {
            background-color: #f7b84b;
            color: white;
        }

        .badge-success {
            background-color: #0ab39c;
            color: white;
        }

        .filter-container {
            display: flex;
            gap: 10px;
            align-items: center;
            flex-wrap: wrap;
            margin-bottom: 20px;
            padding: 15px;
            background-color: #f8f9fa;
            border-radius: 8px;
        }

        .filter-container label {
            margin-bottom: 0;
            font-weight: 500;
        }

        .filter-container input,
        .filter-container button {
            padding: 8px 12px;
            border: 1px solid #ced4da;
            border-radius: 6px;
        }

        .filter-container button {
            background: #405189;
            color: white;
            border: none;
            cursor: pointer;
        }

        .filter-container button:hover {
            background: #344767;
        }

        @media (max-width: 768px) {
            .filter-container {
                flex-direction: column;
                align-items: stretch;
            }
        }
    </style>
</head>

<body>
    <!-- Begin page -->
    <div id="layout-wrapper">
        <?php include 'partials/menu.php'; ?>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <?php includeFileWithVariables('partials/page-title.php', array('pagetitle' => 'Rapports', 'title' => 'Rapports et Statistiques')); ?>

                    <!-- Filtres de date -->
                    <div class="row">
                        <div class="col-12">
                            <div class="filter-container">
                                <label for="start_date">Du:</label>
                                <input type="date" id="start_date" name="start_date" value="<?php echo $startDate; ?>" max="<?php echo $endDate; ?>">
                                
                                <label for="end_date">Au:</label>
                                <input type="date" id="end_date" name="end_date" value="<?php echo $endDate; ?>" min="<?php echo $startDate; ?>" max="<?php echo date('Y-m-d'); ?>">
                                
                                <button onclick="applyDateFilter()">Appliquer</button>
                                <button onclick="resetDateFilter()" style="background: #6c757d;">Réinitialiser</button>
                            </div>
                        </div>
                    </div>

                    <!-- Statistiques -->
                    <div class="row row-cols-4 gx-3 mb-4">
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card card-stat">
                                <div class="card-body">
                                    <div class="d-flex align-items-center gap-2 mb-3">
                                        <div class="avatar-xs flex-shrink-0">
                                            <div class="avatar-title bg-body-secondary text-primary border border-primary-subtle rounded-circle">
                                                <i class="bi bi-cart-check"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="text-muted mb-0">Total Ventes</p>
                                        </div>
                                    </div>
                                    <h4 class="mb-0"><span class="counter-value" data-target="<?php echo $totalSales; ?>"><?php echo $totalSales; ?></span></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card card-stat bg-primary">
                                <div class="card-body">
                                    <div class="d-flex align-items-center gap-2 mb-3">
                                        <div class="avatar-xs flex-shrink-0">
                                            <div class="avatar-title bg-white text-primary rounded-circle">
                                                <i class="bi bi-currency-euro"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="text-white text-opacity-75 mb-0">Chiffre d'Affaires</p>
                                        </div>
                                    </div>
                                    <h4 class="text-white mb-0"><span class="counter-value" data-target="<?php echo $totalSalesAmount; ?>"><?php echo number_format($totalSalesAmount, 2); ?></span> €</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card card-stat bg-success">
                                <div class="card-body">
                                    <div class="d-flex align-items-center gap-2 mb-3">
                                        <div class="avatar-xs flex-shrink-0">
                                            <div class="avatar-title bg-white text-success rounded-circle">
                                                <i class="bi bi-people"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="text-white text-opacity-75 mb-0">Utilisateurs Actifs</p>
                                        </div>
                                    </div>
                                    <h4 class="text-white mb-0"><span class="counter-value" data-target="<?php echo $totalUsers; ?>"><?php echo $totalUsers; ?></span></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card card-stat bg-danger">
                                <div class="card-body">
                                    <div class="d-flex align-items-center gap-2 mb-3">
                                        <div class="avatar-xs flex-shrink-0">
                                            <div class="avatar-title bg-white text-danger rounded-circle">
                                                <i class="bi bi-exclamation-triangle"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="text-white text-opacity-75 mb-0">Erreurs Connexion</p>
                                        </div>
                                    </div>
                                    <h4 class="text-white mb-0"><span class="counter-value" data-target="<?php echo $failedLogins; ?>"><?php echo $failedLogins; ?></span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end row-->

                    <!-- Navigation par onglets -->
                    <div class="row">
                        <div class="col-12">
                            <ul class="nav nav-tabs nav-tabs-custom mb-3" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#errors-tab" role="tab">
                                        Erreurs de Connexion
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#sellers-tab" role="tab">
                                        Meilleurs Vendeurs
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#products-tab" role="tab">
                                        Produits Populaires
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#critical-tab" role="tab">
                                        Erreurs Critiques
                                    </a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <!-- Onglet Erreurs de Connexion -->
                                <div class="tab-pane active" id="errors-tab" role="tabpanel">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title mb-4">Erreurs de Connexion</h5>
                                            <div class="table-responsive">
                                                <table class="table table-centered align-middle table-nowrap mb-0">
                                                    <thead class="table-light">
                                                        <tr>
                                                            <th>Date</th>
                                                            <th>Utilisateur</th>
                                                            <th>Type d'Action</th>
                                                            <th>Détails</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($loginErrors as $error): ?>
                                                            <tr>
                                                                <td><?php echo date('d/m/Y H:i', strtotime($error['date_action'])); ?></td>
                                                                <td>
                                                                    <?php if ($error['identifiant']): ?>
                                                                        <?php echo htmlspecialchars($error['prenom'] . ' ' . $error['nom'] . ' (' . $error['identifiant'] . ')'); ?>
                                                                    <?php else: ?>
                                                                        Utilisateur inconnu
                                                                    <?php endif; ?>
                                                                </td>
                                                                <td>
                                                                    <span class="badge badge-error">
                                                                        <?php echo htmlspecialchars($error['type_action']); ?>
                                                                    </span>
                                                                </td>
                                                                <td><?php echo htmlspecialchars($error['details'] ?? 'Aucun détail'); ?></td>
                                                            </tr>
                                                        <?php endforeach; ?>
                                                        <?php if (empty($loginErrors)): ?>
                                                            <tr>
                                                                <td colspan="4" class="text-center">Aucune erreur de connexion trouvée</td>
                                                            </tr>
                                                        <?php endif; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Onglet Meilleurs Vendeurs -->
                                <div class="tab-pane" id="sellers-tab" role="tabpanel">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title mb-4">Meilleurs Vendeurs</h5>
                                            <div class="table-responsive">
                                                <table class="table table-centered align-middle table-nowrap mb-0">
                                                    <thead class="table-light">
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Vendeur</th>
                                                            <th>Nombre de Ventes</th>
                                                            <th>Chiffre d'Affaires</th>
                                                            <th>Performance</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $rank = 1; ?>
                                                        <?php foreach ($bestSellers as $seller): ?>
                                                            <tr>
                                                                <td><?php echo $rank++; ?></td>
                                                                <td><?php echo htmlspecialchars($seller['prenom'] . ' ' . $seller['nom'] . ' (' . $seller['identifiant'] . ')'); ?></td>
                                                                <td><?php echo $seller['nb_ventes']; ?></td>
                                                                <td><?php echo number_format($seller['total_ventes'], 2); ?> €</td>
                                                                <td>
                                                                    <?php if ($seller['total_ventes'] > 1000): ?>
                                                                        <span class="badge badge-success">Excellent</span>
                                                                    <?php elseif ($seller['total_ventes'] > 500): ?>
                                                                        <span class="badge badge-success">Bon</span>
                                                                    <?php elseif ($seller['total_ventes'] > 100): ?>
                                                                        <span class="badge badge-warning">Moyen</span>
                                                                    <?php else: ?>
                                                                        <span class="badge badge-error">Faible</span>
                                                                    <?php endif; ?>
                                                                </td>
                                                            </tr>
                                                        <?php endforeach; ?>
                                                        <?php if (empty($bestSellers)): ?>
                                                            <tr>
                                                                <td colspan="5" class="text-center">Aucun vendeur trouvé</td>
                                                            </tr>
                                                        <?php endif; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Onglet Produits Populaires -->
                                <div class="tab-pane" id="products-tab" role="tabpanel">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title mb-4">Produits les Plus Vendus</h5>
                                            <div class="table-responsive">
                                                <table class="table table-centered align-middle table-nowrap mb-0">
                                                    <thead class="table-light">
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Produit</th>
                                                            <th>Présentation</th>
                                                            <th>Quantité Vendue</th>
                                                            <th>Chiffre d'Affaires</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $rank = 1; ?>
                                                        <?php foreach ($bestProducts as $product): ?>
                                                            <tr>
                                                                <td><?php echo $rank++; ?></td>
                                                                <td><?php echo htmlspecialchars($product['nom']); ?></td>
                                                                <td><?php echo htmlspecialchars($product['presentation'] ?? 'N/A'); ?></td>
                                                                <td><?php echo $product['total_vendu']; ?></td>
                                                                <td><?php echo number_format($product['chiffre_affaires'], 2); ?> €</td>
                                                            </tr>
                                                        <?php endforeach; ?>
                                                        <?php if (empty($bestProducts)): ?>
                                                            <tr>
                                                                <td colspan="5" class="text-center">Aucun produit vendu</td>
                                                            </tr>
                                                        <?php endif; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Onglet Erreurs Critiques -->
                                <div class="tab-pane" id="critical-tab" role="tabpanel">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title mb-4">Erreurs Critiques</h5>
                                            <div class="table-responsive">
                                                <table class="table table-centered align-middle table-nowrap mb-0">
                                                    <thead class="table-light">
                                                        <tr>
                                                            <th>Date</th>
                                                            <th>Utilisateur</th>
                                                            <th>Type d'Erreur</th>
                                                            <th>Détails</th>
                                                            <th>Niveau</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($criticalErrors as $error): ?>
                                                            <tr>
                                                                <td><?php echo date('d/m/Y H:i', strtotime($error['date_action'])); ?></td>
                                                                <td>
                                                                    <?php if ($error['identifiant']): ?>
                                                                        <?php echo htmlspecialchars($error['prenom'] . ' ' . $error['nom'] . ' (' . $error['identifiant'] . ')'); ?>
                                                                    <?php else: ?>
                                                                        Utilisateur inconnu
                                                                    <?php endif; ?>
                                                                </td>
                                                                <td>
                                                                    <span class="badge badge-error">
                                                                        <?php echo htmlspecialchars($error['type_action']); ?>
                                                                    </span>
                                                                </td>
                                                                <td><?php echo htmlspecialchars($error['details'] ?? 'Aucun détail'); ?></td>
                                                                <td>
                                                                    <?php if ($error['type_action'] == 'blocage_compte'): ?>
                                                                        <span class="badge badge-error">Critique</span>
                                                                    <?php else: ?>
                                                                        <span class="badge badge-warning">Élevé</span>
                                                                    <?php endif; ?>
                                                                </td>
                                                            </tr>
                                                        <?php endforeach; ?>
                                                        <?php if (empty($criticalErrors)): ?>
                                                            <tr>
                                                                <td colspan="5" class="text-center">Aucune erreur critique trouvée</td>
                                                            </tr>
                                                        <?php endif; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <?php include 'partials/footer.php'; ?>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <?php include 'partials/customizer.php'; ?>
    <?php include 'partials/vendor-scripts.php'; ?>

    <!-- sweetalert2 js -->
    <script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>

    <!-- Script personnalisé -->
    <script>
        // Fonction pour appliquer le filtre de date
        function applyDateFilter() {
            const startDate = document.getElementById('start_date').value;
            const endDate = document.getElementById('end_date').value;
            
            if (!startDate || !endDate) {
                Swal.fire('Erreur', 'Veuillez sélectionner une période valide', 'error');
                return;
            }
            
            if (startDate > endDate) {
                Swal.fire('Erreur', 'La date de début ne peut pas être après la date de fin', 'error');
                return;
            }
            
            window.location.href = `rapports.php?start_date=${startDate}&end_date=${endDate}`;
        }
        
        // Fonction pour réinitialiser le filtre de date
        function resetDateFilter() {
            window.location.href = 'rapports.php';
        }
        
        // Initialisation
        document.addEventListener('DOMContentLoaded', function() {
            // Activer les onglets
            const triggerTabList = [].slice.call(document.querySelectorAll('.nav-tabs a'));
            triggerTabList.forEach(function(triggerEl) {
                new bootstrap.Tab(triggerEl);
            });
        });
    </script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>
</body>

</html>