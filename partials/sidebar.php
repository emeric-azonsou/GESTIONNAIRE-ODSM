<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="index.php">
            <span class="logo">ODSM</span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-3xl header-item float-end btn-vertical-sm-hover shadow-none" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">

                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="index.php">
                        <i class="ti bi-speedometer2"></i> <span>Tableau de bord</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="apps-invoices-list.php" class="nav-link menu-link">
                        <i class="ti bi-box"></i> <span>Liste des produits</span>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="nouvelle-vente.php" class="nav-link menu-link">
                        <i class="ti bi-cart-check"></i> <span>Nouvelle vente</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="historique.php" class="nav-link menu-link">
                        <i class="ti bi-clock-history"></i> <span>Historique</span>
                    </a>
                </li>

               

                

               

                <!-- Section Admin (seulement visible pour les administrateurs) -->
                <?php if (isset($is_admin) && $is_admin): ?>
                <li class="menu-title"><span data-key="t-admin">Administration</span></li>
                <li class="nav-item">
                    <a href="gestionUtilisateur.php" class="nav-link menu-link">
                        <i class="ti bi-people"></i> <span>Gestion utilisateurs</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="rapports.php" class="nav-link menu-link">
                        <i class="ti bi-clipboard-data"></i> <span>Rapports</span>
                    </a>
                </li>
               
                <?php endif; ?>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>