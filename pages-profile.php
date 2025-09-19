<?php 
include 'partials/main.php';

// Démarrer la session
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Vérifier l'authentification
require 'functions/authCheck.php';

// Traitement de la déconnexion
if (isset($_POST['deconnecter'])) {
    session_destroy();
    header('Location: login.php');
    exit();
}

// Connexion à la base de données
try {
    $pdo = new PDO('mysql:host=localhost;dbname=gestionnaire_odsm;charset=utf8', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Récupérer les informations de l'utilisateur connecté
    $user_id = $_SESSION['user_id'] ?? null;
    $user_data = [];
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
    
} catch (PDOException $e) {
    $error_message = "Erreur de connexion à la base de données: " . $e->getMessage();
    $user_data = [];
    $is_admin = false;
    $initials = 'ER';
}
?>

<head>
    <?php includeFileWithVariables('partials/title-meta.php', array('title' => 'Profil')); ?>
    <?php include 'partials/head-css.php'; ?>
    
    <style>
        .profile-container {
            max-width: 800px;
            margin: 0 auto;
        }
        
        .profile-card {
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin-bottom: 20px;
        }
        
        .profile-header {
            text-align: center;
            margin-bottom: 30px;
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
        
        .profile-name {
            font-size: 24px;
            font-weight: 600;
            color: #2d3748;
            margin-bottom: 5px;
        }
        
        .profile-role {
            font-size: 16px;
            color: #718096;
        }
        
        .info-section {
            margin-bottom: 25px;
        }
        
        .info-title {
            font-size: 18px;
            font-weight: 600;
            color: #2d3748;
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 2px solid #f1f3f4;
        }
        
        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 15px;
        }
        
        .info-item {
            display: flex;
            align-items: center;
            padding: 12px;
            background: #f8f9fa;
            border-radius: 6px;
        }
        
        .info-icon {
            width: 36px;
            height: 36px;
            background: #405189;
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 12px;
            color: white;
        }
        
        .info-content {
            flex: 1;
        }
        
        .info-label {
            font-size: 14px;
            color: #718096;
            margin-bottom: 2px;
        }
        
        .info-value {
            font-size: 16px;
            color: #2d3748;
            font-weight: 500;
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
        }
        
        .btn {
            padding: 10px 20px;
            border-radius: 6px;
            font-weight: 500;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.2s;
        }
        
        .btn-logout {
            background: #dc3545;
            color: white;
            border: none;
        }
        
        .btn-logout:hover {
            background: #bb2d3b;
            color: white;
        }
        
        .btn-edit {
            background: #405189;
            color: white;
            border: none;
        }
        
        .btn-edit:hover {
            background: #344767;
            color: white;
        }
        
        .admin-section {
            margin-top: 30px;
        }
        
        .admin-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 15px;
            margin-top: 20px;
        }
        
        .admin-card {
            background: white;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border: 1px solid #e9ecef;
        }
        
        .admin-icon {
            font-size: 24px;
            color: #405189;
            margin-bottom: 10px;
        }
        
        .admin-title {
            font-size: 16px;
            font-weight: 600;
            color: #2d3748;
            margin-bottom: 5px;
        }
        
        .admin-desc {
            font-size: 14px;
            color: #718096;
            margin-bottom: 10px;
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
                    <?php includeFileWithVariables('partials/page-title.php', array('pagetitle' => 'Profil', 'title' => 'Mon Profil')); ?>
                    
                    <?php if (!empty($error_message)): ?>
                    <div class="alert alert-danger"><?php echo htmlspecialchars($error_message); ?></div>
                    <?php endif; ?>

                    <div class="profile-container">
                        <!-- Carte de profil principale -->
                        <div class="profile-card">
                            <div class="profile-header">
                                <div class="avatar">
                                    <?php echo htmlspecialchars($initials); ?>
                                </div>
                                <h2 class="profile-name">
                                    <?php 
                                    if (!empty($user_data['prenom']) && !empty($user_data['nom'])) {
                                        echo htmlspecialchars($user_data['prenom'] . ' ' . $user_data['nom']);
                                    } elseif (!empty($user_data['prenom'])) {
                                        echo htmlspecialchars($user_data['prenom']);
                                    } elseif (!empty($user_data['nom'])) {
                                        echo htmlspecialchars($user_data['nom']);
                                    } else {
                                        echo 'Utilisateur';
                                    }
                                    ?>
                                </h2>
                                <p class="profile-role">
                                    <?php echo !empty($user_data['nom_role']) ? htmlspecialchars(ucfirst($user_data['nom_role'])) : 'Utilisateur'; ?>
                                </p>
                            </div>

                            <!-- Informations personnelles -->
                            <div class="info-section">
                                <h3 class="info-title">Informations Personnelles</h3>
                                <div class="info-grid">
                                    <div class="info-item">
                                        <div class="info-icon">
                                            <i class="ri-user-line"></i>
                                        </div>
                                        <div class="info-content">
                                            <div class="info-label">Identifiant</div>
                                            <div class="info-value">
                                                <?php echo !empty($user_data['identifiant']) ? htmlspecialchars($user_data['identifiant']) : 'Non spécifié'; ?>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="info-item">
                                        <div class="info-icon">
                                            <i class="ri-mail-line"></i>
                                        </div>
                                        <div class="info-content">
                                            <div class="info-label">Email</div>
                                            <div class="info-value">
                                                <?php echo !empty($user_data['email']) ? htmlspecialchars($user_data['email']) : 'Non spécifié'; ?>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="info-item">
                                        <div class="info-icon">
                                            <i class="ri-phone-line"></i>
                                        </div>
                                        <div class="info-content">
                                            <div class="info-label">Téléphone</div>
                                            <div class="info-value">
                                                <?php echo !empty($user_data['telephone']) ? htmlspecialchars($user_data['telephone']) : 'Non spécifié'; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Informations du compte -->
                            <div class="info-section">
                                <h3 class="info-title">Informations du Compte</h3>
                                <div class="info-grid">
                                    <div class="info-item">
                                        <div class="info-icon">
                                            <i class="ri-shield-check-line"></i>
                                        </div>
                                        <div class="info-content">
                                            <div class="info-label">Rôle</div>
                                            <div class="info-value">
                                                <span class="badge badge-info">
                                                    <?php echo !empty($user_data['nom_role']) ? htmlspecialchars(ucfirst($user_data['nom_role'])) : 'Utilisateur'; ?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="info-item">
                                        <div class="info-icon">
                                            <i class="ri-record-circle-line"></i>
                                        </div>
                                        <div class="info-content">
                                            <div class="info-label">Statut</div>
                                            <div class="info-value">
                                                <span class="badge <?php echo (!empty($user_data['actif']) && $user_data['actif'] == 1) ? 'badge-success' : 'badge-danger'; ?>">
                                                    <?php echo (!empty($user_data['actif']) && $user_data['actif'] == 1) ? 'Actif' : 'Inactif'; ?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="info-item">
                                        <div class="info-icon">
                                            <i class="ri-calendar-event-line"></i>
                                        </div>
                                        <div class="info-content">
                                            <div class="info-label">Date de création</div>
                                            <div class="info-value">
                                                <?php echo !empty($user_data['date_creation']) ? date('d/m/Y H:i', strtotime($user_data['date_creation'])) : 'Non spécifié'; ?>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="info-item">
                                        <div class="info-icon">
                                            <i class="ri-login-circle-line"></i>
                                        </div>
                                        <div class="info-content">
                                            <div class="info-label">Dernière connexion</div>
                                            <div class="info-value">
                                                <?php echo !empty($user_data['date_dernier_login']) ? date('d/m/Y H:i', strtotime($user_data['date_dernier_login'])) : 'Jamais'; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Boutons d'action -->
                            
                                
                               
                            </div>
                        </div>

                        <?php if ($is_admin): ?>
                        <!-- Section Administrateur -->
                        <div class="profile-card admin-section">
                            <h3 class="info-title">Actions Administrateur</h3>
                            <div class="admin-grid">
                                <div class="admin-card">
                                    <div class="admin-icon">
                                        <i class="ri-user-settings-line"></i>
                                    </div>
                                    <div class="admin-title">Gestion Utilisateurs</div>
                                    <div class="admin-desc">Gérer tous les utilisateurs</div>
                                    <a href="gestionUtilisateur.php" class="admin-link">Accéder</a>
                                </div>
                                
                                <div class="admin-card">
                                    <div class="admin-icon">
                                        <i class="ri-line-chart-line"></i>
                                    </div>
                                    <div class="admin-title">Rapports</div>
                                    <div class="admin-desc">Consulter les statistiques</div>
                                    <a href="rapports.php" class="admin-link">Accéder</a>
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
