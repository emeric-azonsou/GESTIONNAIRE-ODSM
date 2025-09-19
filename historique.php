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
    
    // Traitement de la suppression de l'historique
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['vider_historique'])) {
        if ($is_admin) {
            // L'admin peut vider tout l'historique ou seulement le sien
            if (isset($_POST['tout_historique']) && $_POST['tout_historique'] === '1') {
                // Vider tout l'historique
                $stmt = $pdo->prepare("DELETE FROM historique_action");
                $stmt->execute();
                $message_success = "Tout l'historique a été vidé avec succès.";
            } else {
                // Vider seulement l'historique de l'admin
                $stmt = $pdo->prepare("DELETE FROM historique_action WHERE id_utilisateur = ?");
                $stmt->execute([$user_id]);
                $message_success = "Votre historique personnel a été vidé avec succès.";
            }
        } else {
            // Utilisateur normal vide seulement son historique
            $stmt = $pdo->prepare("DELETE FROM historique_action WHERE id_utilisateur = ?");
            $stmt->execute([$user_id]);
            $message_success = "Votre historique a été vidé avec succès.";
        }
    }
    
    // Récupérer les types d'actions disponibles pour les filtres
    $stmt_types = $pdo->prepare("SELECT DISTINCT type_action FROM historique_action ORDER BY type_action");
    $stmt_types->execute();
    $types_actions = $stmt_types->fetchAll(PDO::FETCH_COLUMN);
    
    // Déterminer le filtre actif
    $filtre_actif = $_GET['filtre'] ?? 'tous';
    
    // Construire la requête avec filtres
    $query_historique = "
        SELECT ha.*, u.prenom, u.nom 
        FROM historique_action ha 
        LEFT JOIN utilisateur u ON ha.id_utilisateur = u.id_utilisateur
    ";
    
    $params_historique = [];
    $conditions = [];
    
    // Filtre par utilisateur (pour les non-admins)
    if (!$is_admin) {
        $conditions[] = "ha.id_utilisateur = ?";
        $params_historique[] = $user_id;
    }
    
    // Filtre par type d'action
    if ($filtre_actif !== 'tous' && in_array($filtre_actif, $types_actions)) {
        $conditions[] = "ha.type_action = ?";
        $params_historique[] = $filtre_actif;
    }
    
    // Ajouter les conditions à la requête
    if (!empty($conditions)) {
        $query_historique .= " WHERE " . implode(" AND ", $conditions);
    }
    
    $query_historique .= " ORDER BY ha.date_action DESC";
    
    $stmt = $pdo->prepare($query_historique);
    $stmt->execute($params_historique);
    $historique = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
} catch (PDOException $e) {
    $historique = [];
    $is_admin = false;
    $user_name = "Utilisateur";
    $initials = 'ER';
    $types_actions = [];
    $filtre_actif = 'tous';
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <?php includeFileWithVariables('partials/title-meta.php', array('title' => 'Historique des Actions')); ?>
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
        
        .section-title {
            font-size: 20px;
            font-weight: 600;
            color: #2d3748;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #f1f3f4;
        }
        
        .filtres-container {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
            flex-wrap: wrap;
        }
        
        .filtre-btn {
            padding: 8px 16px;
            border-radius: 20px;
            border: 2px solid #405189;
            background: white;
            color: #405189;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.2s;
            text-decoration: none;
            display: inline-block;
        }
        
        .filtre-btn:hover {
            background: #405189;
            color: white;
        }
        
        .filtre-btn.active {
            background: #405189;
            color: white;
        }
        
        .table-container {
            overflow-x: auto;
            margin-bottom: 20px;
        }
        
        .modern-table {
            width: 100%;
            border-collapse: collapse;
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
        
        .badge-warning {
            background: #fef3c7;
            color: #92400e;
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
        
        .btn-danger {
            background: #dc3545;
            color: white;
        }
        
        .btn-danger:hover {
            background: #bb2d3b;
            color: white;
        }
        
        .btn-secondary {
            background: #6c757d;
            color: white;
        }
        
        .btn-secondary:hover {
            background: #5a6268;
            color: white;
        }
        
        .admin-options {
            background: #f8f9fa;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
        }
        
        .form-check {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 15px;
        }
        
        .form-check-input {
            width: 18px;
            height: 18px;
        }
        
        .form-check-label {
            font-weight: 500;
        }
        
        .empty-state {
            text-align: center;
            padding: 40px;
            color: #718096;
        }
        
        .empty-state i {
            font-size: 48px;
            margin-bottom: 15px;
            display: block;
        }
        
        .stats-filtres {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            flex-wrap: wrap;
            gap: 15px;
        }
        
        .resultats-count {
            font-weight: 500;
            color: #405189;
        }
        
        @media (max-width: 768px) {
            .dashboard-container {
                padding: 10px;
            }
            
            .dashboard-card {
                padding: 20px;
            }
            
            .action-buttons {
                flex-direction: column;
                align-items: center;
            }
            
            .modern-table {
                font-size: 14px;
            }
            
            .modern-table th,
            .modern-table td {
                padding: 10px;
            }
            
            .filtres-container {
                justify-content: center;
            }
            
            .stats-filtres {
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
                    <?php includeFileWithVariables('partials/page-title.php', array('pagetitle' => 'Historique des Actions', 'title' => 'Historique des Actions')); ?>
                    
                    <?php if (!empty($error_message)): ?>
                    <div class="alert alert-danger"><?php echo htmlspecialchars($error_message); ?></div>
                    <?php endif; ?>
                    
                    <?php if (!empty($message_success)): ?>
                    <div class="alert alert-success"><?php echo htmlspecialchars($message_success); ?></div>
                    <?php endif; ?>

                    <div class="dashboard-container">
                        <!-- Section de bienvenue -->
                        <div class="dashboard-card">
                            <div class="welcome-section">
                                <div class="avatar">
                                    <?php echo htmlspecialchars($initials); ?>
                                </div>
                                <h1 class="welcome-greeting">
                                    Historique des Actions, <?php echo htmlspecialchars($user_name); ?> !
                                </h1>
                                <p class="welcome-message">
                                    Consultez l'historique de toutes les actions effectuées dans le système
                                </p>
                            </div>

                            <!-- Options d'administration pour l'admin -->
                            <?php if ($is_admin): ?>
                            <div class="admin-options">
                                <h3 class="section-title">Options Administrateur</h3>
                                <form method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir vider l\'historique ? Cette action est irréversible.');">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="tout_historique" id="tout_historique" value="1">
                                        <label class="form-check-label" for="tout_historique">
                                            Vider tout l'historique (tous les utilisateurs)
                                        </label>
                                    </div>
                                    <div class="action-buttons">
                                        <button type="submit" name="vider_historique" class="btn btn-danger">
                                            <i class="ri-delete-bin-line"></i> Vider l'historique
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <?php else: ?>
                            <!-- Option pour les utilisateurs normaux -->
                            <div class="action-buttons">
                                <form method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir vider votre historique ? Cette action est irréversible.');">
                                    <button type="submit" name="vider_historique" class="btn btn-danger">
                                        <i class="ri-delete-bin-line"></i> Vider mon historique
                                    </button>
                                </form>
                            </div>
                            <?php endif; ?>

                            <!-- Filtres par type d'action -->
                            <div class="stats-filtres">
                                <h3 class="section-title">Filtrer par type d'action</h3>
                                <span class="resultats-count">
                                    <?php echo count($historique); ?> résultat(s) trouvé(s)
                                </span>
                            </div>
                            
                            <div class="filtres-container">
                                <a href="historique.php?filtre=tous" class="filtre-btn <?php echo $filtre_actif === 'tous' ? 'active' : ''; ?>">
                                    Tous les types
                                </a>
                                
                                <?php foreach ($types_actions as $type): ?>
                                    <a href="historique.php?filtre=<?php echo urlencode($type); ?>" class="filtre-btn <?php echo $filtre_actif === $type ? 'active' : ''; ?>">
                                        <?php echo htmlspecialchars($type); ?>
                                    </a>
                                <?php endforeach; ?>
                            </div>

                            <!-- Tableau d'historique -->
                            <div class="table-container">
                                <h3 class="section-title">Liste des Actions</h3>
                                <?php if (!empty($historique)): ?>
                                    <table class="modern-table">
                                        <thead>
                                            <tr>
                                                <th>Date & Heure</th>
                                                <th>Type d'Action</th>
                                                <th>Détails</th>
                                                <?php if ($is_admin): ?>
                                                <th>Utilisateur</th>
                                                <?php endif; ?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($historique as $action): ?>
                                                <tr>
                                                    <td><?php echo date('d/m/Y H:i', strtotime($action['date_action'])); ?></td>
                                                    <td>
                                                        <?php 
                                                        $type = htmlspecialchars($action['type_action']);
                                                        $badge_class = 'badge-info';
                                                        
                                                        if (strpos($type, 'connexion') !== false) {
                                                            $badge_class = 'badge-success';
                                                        } elseif (strpos($type, 'tentative') !== false) {
                                                            $badge_class = 'badge-danger';
                                                        } elseif (strpos($type, 'vente') !== false) {
                                                            $badge_class = 'badge-info';
                                                        } elseif (strpos($type, 'blocage') !== false) {
                                                            $badge_class = 'badge-warning';
                                                        }
                                                        ?>
                                                        <span class="badge <?php echo $badge_class; ?>">
                                                            <?php echo $type; ?>
                                                        </span>
                                                    </td>
                                                    <td><?php echo htmlspecialchars($action['details']); ?></td>
                                                    <?php if ($is_admin): ?>
                                                    <td>
                                                        <?php 
                                                        if ($action['id_utilisateur']) {
                                                            echo htmlspecialchars($action['prenom'] . ' ' . $action['nom']);
                                                        } else {
                                                            echo 'Système';
                                                        }
                                                        ?>
                                                    </td>
                                                    <?php endif; ?>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                <?php else: ?>
                                    <div class="empty-state">
                                        <i class="ri-history-line"></i>
                                        <p>Aucune action enregistrée dans l'historique</p>
                                        <?php if ($filtre_actif !== 'tous'): ?>
                                        <p>Essayez de modifier vos filtres de recherche</p>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
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