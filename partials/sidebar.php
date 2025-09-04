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
                    <a href="#sidebarProducts" class="nav-link menu-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProducts">
                        <i class="ti bi-box"></i> <span>Produits </span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarProducts">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="apps-invoices-list.php" class="nav-link">Liste des produits</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-invoices-overview.php" class="nav-link">Vue détaillée</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-invoices-overview.php" class="nav-link">Recherche</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a href="#sidebarVentes" class="nav-link menu-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarVentes">
                        <i class="ti bi-cart-check"></i> <span>Ventes</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarVentes">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="apps-invoices-list.php" class="nav-link">Nouvelle vente</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-invoices-overview.php" class="nav-link">Écran d'encaissement</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a href="#sidebarHistory" class="nav-link menu-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarHistory">
                        <i class="ti bi-calendar-check"></i> <span>Historique des ventes</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarHistory">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="apps-invoices-list.php" class="nav-link">Liste personnelle</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-invoices-overview.php" class="nav-link">Détails d'une vente</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a href="#sidebarSuivi" class="nav-link menu-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSuivi">
                        <i class="ti bi-person-lines-fill"></i> <span>Suivi personnel</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarSuivi">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="apps-invoices-list.php" class="nav-link">Vos performances</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-invoices-overview.php" class="nav-link">Comparaisons basiques</a>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>