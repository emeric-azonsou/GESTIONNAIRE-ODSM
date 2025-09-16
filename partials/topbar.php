<?php
// include "../functions/config.php";
include __DIR__ . '/../functions/config.php';

session_start();

$user_id = $_SESSION['user_id'] ?? null;
$user_data = [];
$initials = 'US';

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
        if (!empty($user_data['prenom']) && !empty($user_data['nom'])) {
            $initials = strtoupper(substr($user_data['prenom'], 0, 1) . substr($user_data['nom'], 0, 1));
        } elseif (!empty($user_data['prenom'])) {
            $initials = strtoupper(substr($user_data['prenom'], 0, 2));
        } elseif (!empty($user_data['nom'])) {
            $initials = strtoupper(substr($user_data['nom'], 0, 2));
        }
    }
}
?>

<header id="page-topbar" class="navbar-custom">
    <div class="layout-width">
        <div class="navbar-header d-flex justify-content-between align-items-center">
            
            <!-- Partie gauche -->
            <div class="d-flex align-items-center">
                <div class="navbar-brand fw-bold text-white me-3">
                    <i class="ri-dashboard-line me-1"></i> Tableau de Bord
                </div>
                
                <!-- Bouton hamburger -->
                <button type="button" 
                        class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger shadow-none text-white" 
                        id="topnav-hamburger-icon">
                    <span class="hamburger-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>
            </div>

            <!-- Partie droite -->
            <div class="d-flex align-items-center">
                <!-- Dropdown utilisateur -->
                <div class="dropdown ms-sm-3 topbar-head-dropdown dropdown-hover-end header-item topbar-user">
                    <button type="button" 
                            class="btn shadow-none btn-icon p-0" 
                            id="page-header-user-dropdown" 
                            data-bs-toggle="dropdown" 
                            aria-haspopup="true" 
                            aria-expanded="false">
                        <div class="avatar-initials-topbar">
                            <?php echo $initials; ?>
                        </div>
                    </button>
                    
                    <div class="dropdown-menu dropdown-menu-end py-2">
                        <div class="p-3 border-bottom">
                            <h6 class="mb-1 fw-semibold text-dark">
                                <?php 
                                    echo !empty($user_data['prenom']) || !empty($user_data['nom'])
                                        ? htmlspecialchars(trim($user_data['prenom'] . ' ' . $user_data['nom']))
                                        : 'Utilisateur';
                                ?>
                            </h6>
                            <p class="text-muted fs-12 mb-0">
                                <?php echo !empty($user_data['nom_role']) ? htmlspecialchars($user_data['nom_role']) : 'Rôle non défini'; ?>
                            </p>
                        </div>
                        <div class="p-2">
                            <a href="pages-profile.php" class="dropdown-item d-flex align-items-center">
                                <i class="ri-user-line fs-16 align-middle me-2 text-primary"></i> Mon Profil
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="functions/logout.php" class="dropdown-item d-flex align-items-center text-danger fw-semibold">
                                <i class="ri-logout-box-r-line fs-16 align-middle me-2"></i> Déconnexion
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</header>

<style>
    /* Navbar avec petit background */
    .navbar-custom {
        background: linear-gradient(135deg, #405189 0%, #2a365f 100%);
        padding: 0.3rem 1rem;
        box-shadow: 0 2px 10px rgba(0,0,0,0.15);
    }

    .navbar-brand {
        font-size: 16px;
        letter-spacing: 0.5px;
    }

    .avatar-initials-topbar {
        width: 38px;
        height: 38px;
        border-radius: 50%;
        background: linear-gradient(135deg, #0ab39c 0%, #17a2b8 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 14px;
        font-weight: 600;
        color: #fff;
        border: 2px solid #fff;
        box-shadow: 0 2px 6px rgba(0,0,0,0.15);
        transition: all 0.3s ease;
    }
    .avatar-initials-topbar:hover {
        transform: scale(1.07);
        box-shadow: 0 4px 14px rgba(0,0,0,0.25);
    }

    .dropdown-menu {
        border: none;
        border-radius: 12px;
        box-shadow: 0 6px 25px rgba(0,0,0,0.15);
    }

    .dropdown-item {
        font-size: 14px;
        padding: 8px 14px;
        border-radius: 6px;
        transition: background 0.2s ease;
    }

    .dropdown-item:hover {
        background: #f5f6f8;
    }
</style>
