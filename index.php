<?php 
include 'partials/main.php';

// Démarrer la session
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Vérifier l'authentification
require 'functions/authCheck.php';

// Connexion à la base de données
try {
    include "functions/config.php";
    
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
    
    // Préparer les conditions pour filtrer par utilisateur si nécessaire
    $user_condition = "";
    $params = [];
    $params_stats = [];
    
    if (!$is_admin) {
        $user_condition = " WHERE v.id_utilisateur = ?";
        $params = [$user_id];
        $params_stats = [$user_id];
    }
    
    // Statistiques des ventes du jour
    $query_jour = "
        SELECT COUNT(*) as nb_ventes, COALESCE(SUM(montant_total), 0) as chiffre_affaires 
        FROM vente v
        WHERE DATE(v.date_vente) = CURDATE()
    ";
    
    if (!$is_admin) {
        $query_jour .= " AND v.id_utilisateur = ?";
    }
    
    $stmt = $pdo->prepare($query_jour);
    $stmt->execute($params_stats);
    $stats_jour = $stmt->fetch(PDO::FETCH_ASSOC);
    
    // Statistiques des ventes de la semaine
    $query_semaine = "
        SELECT COUNT(*) as nb_ventes, COALESCE(SUM(montant_total), 0) as chiffre_affaires 
        FROM vente v
        WHERE YEARWEEK(v.date_vente, 1) = YEARWEEK(CURDATE(), 1)
    ";
    
    if (!$is_admin) {
        $query_semaine .= " AND v.id_utilisateur = ?";
    }
    
    $stmt = $pdo->prepare($query_semaine);
    $stmt->execute($params_stats);
    $stats_semaine = $stmt->fetch(PDO::FETCH_ASSOC);
    
    // Produits les plus vendus ce mois-ci
    $query_produits = "
        SELECT p.nom, SUM(lv.quantite_vendue) as total_vendu, p.prix_vente
        FROM ligne_vente lv
        JOIN produit p ON lv.id_produit = p.id_produit
        JOIN vente v ON lv.id_vente = v.id_vente
        WHERE MONTH(v.date_vente) = MONTH(CURDATE()) 
        AND YEAR(v.date_vente) = YEAR(CURDATE())
    ";
    
    if (!$is_admin) {
        $query_produits .= " AND v.id_utilisateur = ?";
    }
    
    $query_produits .= " GROUP BY lv.id_produit ORDER BY total_vendu DESC LIMIT 5";
    
    $stmt = $pdo->prepare($query_produits);
    $stmt->execute($params_stats);
    $produits_populaires = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // Dernières ventes
    $query_ventes = "
        SELECT v.id_vente, v.date_vente, v.montant_total, v.mode_paiement, u.prenom, u.nom
        FROM vente v
        JOIN utilisateur u ON v.id_utilisateur = u.id_utilisateur
    ";
    
    if (!$is_admin) {
        $query_ventes .= " WHERE v.id_utilisateur = ?";
    }
    
    $query_ventes .= " ORDER BY v.date_vente DESC LIMIT 5";
    
    $stmt = $pdo->prepare($query_ventes);
    $stmt->execute($params);
    $dernieres_ventes = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
} catch (PDOException $e) {
    
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
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <?php includeFileWithVariables('partials/title-meta.php', array('title' => 'Tableau de Bord')); ?>
    <?php include 'partials/head-css.php'; ?>
    
    <style>
        .dashboard-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        
        .dashboard-card {
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin-bottom: 20px;
        }
        
        .welcome-section {
            text-align: center;
            margin-bottom: 40px;
        }
        
        .avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: linear-gradient(45deg, #405189, #0ab39c);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            font-weight: bold;
            color: white;
            margin: 0 auto 15px;
        }
        
        .welcome-greeting {
            font-size: 28px;
            font-weight: 600;
            color: #2d3748;
            margin-bottom: 5px;
        }
        
        .welcome-message {
            font-size: 16px;
            color: #718096;
            margin-bottom: 30px;
        }
        
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }
        
        .stat-card {
            background: #f8f9fa;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
        }
        
        .stat-icon {
            width: 48px;
            height: 48px;
            background: #405189;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
            color: white;
            font-size: 20px;
        }
        
        .stat-value {
            font-size: 24px;
            font-weight: 600;
            color: #2d3748;
            margin-bottom: 5px;
        }
        
        .stat-label {
            font-size: 14px;
            color: #718096;
        }
        
        .section-title {
            font-size: 20px;
            font-weight: 600;
            color: #2d3748;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #f1f3f4;
        }
        
        .table-container {
            overflow-x: auto;
        }
        
        .modern-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        
        .modern-table th {
            background: #f8f9fa;
            padding: 15px;
            text-align: left;
            font-weight: 600;
            color: #2d3748;
            border-bottom: 2px solid #e9ecef;
        }
        
        .modern-table td {
            padding: 15px;
            border-bottom: 1px solid #e9ecef;
            color: #4a5568;
        }
        
        .modern-table tbody tr:hover {
            background: #f8f9fa;
        }
        
        .badge {
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: 500;
        }
        
        .badge-success {
            background: #d1fae5;
            color: #065f46;
        }
        
        .badge-danger {
            background: #fee2e2;
            color: #b91c1c;
        }
        
        .badge-info {
            background: #dbeafe;
            color: #1e40af;
        }
        
        .action-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
            margin-top: 30px;
            flex-wrap: wrap;
        }
        
        .btn {
            padding: 12px 24px;
            border-radius: 6px;
            font-weight: 500;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.2s;
            border: none;
            cursor: pointer;
        }
        
        .btn-primary {
            background: #405189;
            color: white;
        }
        
        .btn-primary:hover {
            background: #344767;
            color: white;
        }
        
        .btn-logout {
            background: #dc3545;
            color: white;
        }
        
        .btn-logout:hover {
            background: #bb2d3b;
            color: white;
        }
        
        .admin-section {
            margin-top: 30px;
        }
        
        .admin-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }
        
        .admin-card {
            background: white;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border: 1px solid #e9ecef;
            transition: all 0.2s;
        }
        
        .admin-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
        }
        
        .admin-icon {
            font-size: 32px;
            color: #405189;
            margin-bottom: 15px;
        }
        
        .admin-title {
            font-size: 16px;
            font-weight: 600;
            color: #2d3748;
            margin-bottom: 8px;
        }
        
        .admin-desc {
            font-size: 14px;
            color: #718096;
            margin-bottom: 15px;
        }
        
        .admin-link {
            color: #405189;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
        }
        
        .admin-link:hover {
            text-decoration: underline;
        }
        
        .grid-2 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(500px, 1fr));
            gap: 20px;
        }
        
        @media (max-width: 768px) {
            .dashboard-container {
                padding: 10px;
            }
            
            .dashboard-card {
                padding: 20px;
            }
            
            .stats-grid {
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
                gap: 15px;
            }
            
            .grid-2 {
                grid-template-columns: 1fr;
            }
            
            .action-buttons {
                flex-direction: column;
                align-items: center;
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
                    <?php includeFileWithVariables('partials/page-title.php', array('pagetitle' => 'Tableau de Bord', 'title' => 'Tableau de Bord')); ?>
                    
                    <?php if (!empty($error_message)): ?>
                    <div class="alert alert-danger"><?php echo htmlspecialchars($error_message); ?></div>
                    <?php endif; ?>

                    <div class="dashboard-container">
                        <!-- Section de bienvenue -->
                        <div class="dashboard-card">
                            <div class="welcome-section">
                                <div class="avatar">
                                    <?php echo htmlspecialchars($initials); ?>
                                </div>
                                <h1 class="welcome-greeting">
                                    <?php echo $salutation; ?>, <?php echo htmlspecialchars($user_name); ?> !
                                </h1>
                                <p class="welcome-message">
                                    Bienvenue dans votre espace de gestion pharmaceutique
                                </p>
                            </div>

                            <!-- Statistiques -->
                            <div class="stats-grid">
                                <div class="stat-card">
                                    <div class="stat-icon">
                                        <i class="ri-shopping-cart-line"></i>
                                    </div>
                                    <div class="stat-value">
                                        <?php echo $stats_jour['nb_ventes']; ?>
                                    </div>
                                    <div class="stat-label">Ventes Aujourd'hui</div>
                                </div>
                                
                                <div class="stat-card">
                                    <div class="stat-icon">
                                        <i class="ri-money-dollar-circle-line"></i>
                                    </div>
                                    <div class="stat-value">
                                        <?php echo number_format($stats_jour['chiffre_affaires'], 0, ',', ' '); ?> FCFA
                                    </div>
                                    <div class="stat-label">Chiffre d'Affaires Aujourd'hui</div>
                                </div>
                                
                                <div class="stat-card">
                                    <div class="stat-icon">
                                        <i class="ri-shopping-cart-line"></i>
                                    </div>
                                    <div class="stat-value">
                                        <?php echo $stats_semaine['nb_ventes']; ?>
                                    </div>
                                    <div class="stat-label">Ventes cette Semaine</div>
                                </div>
                                
                                <div class="stat-card">
                                    <div class="stat-icon">
                                        <i class="ri-line-chart-line"></i>
                                    </div>
                                    <div class="stat-value">
                                        <?php echo number_format($stats_semaine['chiffre_affaires'], 0, ',', ' '); ?> FCFA
                                    </div>
                                    <div class="stat-label">CA Hebdomadaire</div>
                                </div>
                            </div>

                            <!-- Boutons d'action -->
                            <div class="action-buttons">
                                <a href="nouvelle-vente.php" class="btn btn-primary">
                                    <i class="ri-add-line"></i> Nouvelle Vente
                                </a>
                               
                            </div>
                        </div>

                        <!-- Produits populaires et Dernières ventes -->
                        <div class="grid-2">
                            <!-- Produits populaires -->
                            <div class="dashboard-card">
                                <h3 class="section-title">Produits Populaires</h3>
                                <?php if (!empty($produits_populaires)): ?>
                                    <div class="table-container">
                                        <table class="modern-table">
                                            <thead>
                                                <tr>
                                                    <th>Produit</th>
                                                    <th>Quantité</th>
                                                    <th>Prix</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($produits_populaires as $produit): ?>
                                                    <tr>
                                                        <td><?php echo htmlspecialchars($produit['nom']); ?></td>
                                                        <td><?php echo $produit['total_vendu']; ?></td>
                                                        <td><?php echo number_format($produit['prix_vente'], 0, ',', ' '); ?> FCFA</td>
                                                        <td><?php echo number_format($produit['total_vendu'] * $produit['prix_vente'], 0, ',', ' '); ?> FCFA</td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                <?php else: ?>
                                    <div style="text-align: center; padding: 40px; color: #718096;">
                                        <i class="ri-information-line" style="font-size: 48px; margin-bottom: 15px;"></i>
                                        <p>Aucune vente ce mois-ci</p>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <!-- Dernières ventes -->
                            <div class="dashboard-card">
                                <h3 class="section-title">Dernières Ventes</h3>
                                <?php if (!empty($dernieres_ventes)): ?>
                                    <div class="table-container">
                                        <table class="modern-table">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Date</th>
                                                    <th>Montant</th>
                                                    <th>Paiement</th>
                                                    <th>Vendeur</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($dernieres_ventes as $vente): ?>
                                                    <tr>
                                                        <td>#<?php echo $vente['id_vente']; ?></td>
                                                        <td><?php echo date('d/m/Y H:i', strtotime($vente['date_vente'])); ?></td>
                                                        <td><?php echo number_format($vente['montant_total'], 0, ',', ' '); ?> FCFA</td>
                                                        <td><?php echo htmlspecialchars($vente['mode_paiement']); ?></td>
                                                        <td><?php echo htmlspecialchars($vente['prenom'] . ' ' . $vente['nom']); ?></td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div style="text-align: center; margin-top: 15px;">
                                        <a href="historique.php?filtre=vente" class="admin-link">Voir toutes les ventes</a>
                                    </div>
                                <?php else: ?>
                                    <div style="text-align: center; padding: 40px; color: #718096;">
                                        <i class="ri-shopping-cart-line" style="font-size: 48px; margin-bottom: 15px;"></i>
                                        <p>Aucune vente récente</p>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>

                        <?php if ($is_admin): ?>
                        <!-- Actions Administrateur -->
                        <div class="dashboard-card">
                            <div class="admin-section">
                                <h3 class="section-title">Actions Administrateur</h3>
                                <div class="admin-grid">
                                    <div class="admin-card">
                                        <div class="admin-icon">
                                            <i class="ri-user-settings-line"></i>
                                        </div>
                                        <div class="admin-title">Utilisateurs</div>
                                        <div class="admin-desc">Gérer les utilisateurs du système</div>
                                        <a href="gestionUtilisateur.php" class="admin-link">Accéder</a>
                                    </div>
                                    
                                    <div class="admin-card">
                                        <div class="admin-icon">
                                            <i class="ri-line-chart-line"></i>
                                        </div>
                                        <div class="admin-title">Rapports</div>
                                        <div class="admin-desc">Consulter les statistiques détaillées</div>
                                        <a href="rapports.php" class="admin-link">Accéder</a>
                                    </div>
                                    
                                    
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>

                    </div>
                </div><!-- container-fluid -->
            </div><!-- End Page-content -->

            <?php include 'partials/footer.php'; ?>
        </div><!-- end main content-->
    </div>
    <!-- END layout-wrapper -->

    <?php include 'partials/customizer.php'; ?>
    <?php include 'partials/vendor-scripts.php'; ?>

    <!-- App js -->
    <script src="assets/js/app.js"></script>
</body>

</html>