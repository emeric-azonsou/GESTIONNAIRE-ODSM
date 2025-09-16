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
    include 'functions/config.php';

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

<head>
    <?php
    $title = 'Gestion des Produits';
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

        .search-box {
            position: relative;
        }

        .search-icon {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #6c757d;
            pointer-events: none;
        }

        .filter-container {
            display: flex;
            gap: 10px;
            align-items: center;
            justify-content: flex-end;
            flex-wrap: wrap;
        }

        .filter-container select,
        .filter-container input {
            padding: 8px 12px;
            border: 1px solid #ced4da;
            border-radius: 6px;
            background: white;
        }

        .filter-container button {
            padding: 8px 16px;
            background: #405189;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        .filter-container button:hover {
            background: #344767;
        }

        .action-buttons {
            display: flex;
            gap: 8px;
        }

        .btn-action {
            padding: 6px 12px;
            border-radius: 4px;
            font-size: 12px;
            border: none;
            cursor: pointer;
        }

        .btn-view {
            background: #0ab39c;
            color: white;
        }

        .btn-edit {
            background: #f7b84b;
            color: white;
        }

        .btn-delete {
            background: #f06548;
            color: white;
        }

        .btn-view:hover {
            background: #099885;
        }

        .btn-edit:hover {
            background: #e6a63c;
        }

        .btn-delete:hover {
            background: #e45a3d;
        }

        .status-badge {
            padding: 4px 8px;
            border-radius: 12px;
            font-size: 12px;
            font-weight: 500;
        }

        .status-available {
            background: #d1fae5;
            color: #065f46;
        }

        .status-unavailable {
            background: #fee2e2;
            color: #b91c1c;
        }

        .status-lowstock {
            background: #fef3c7;
            color: #92400e;
        }

        .table-responsive {
            overflow-x: auto;
            -ms-overflow-style: none;
            /* IE and Edge */
            scrollbar-width: none;
            /* Firefox */
        }

        .table-responsive::-webkit-scrollbar {
            display: none;
            /* Chrome, Safari and Opera */
        }

        /* Limiter la largeur des cellules */
        .table-custom-effect td {
            max-width: 200px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        @media (max-width: 768px) {
            .filter-container {
                justify-content: flex-start;
                margin-top: 10px;
            }

            .table-responsive {
                overflow-x: visible;
            }

            .table-custom-effect td {
                max-width: 150px;
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
                    <?php includeFileWithVariables('partials/page-title.php', array('pagetitle' => 'Produits', 'title' => 'Gestion des Produits')); ?>

                    <!-- Statistiques -->
                    <div class="row row-cols-5 gx-3 mb-4">
                        <div class="col-lg col-sm-6 col-12">
                            <div class="card card-stat">
                                <div class="card-body">
                                    <div class="d-flex align-items-center gap-2 mb-3">
                                        <div class="avatar-xs flex-shrink-0">
                                            <div class="avatar-title bg-body-secondary text-primary border border-primary-subtle rounded-circle">
                                                <i class="bi bi-capsule"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="text-muted mb-0">Total Produits</p>
                                        </div>
                                    </div>
                                    <h4 class="mb-0"><span class="counter-value" data-target="<?php echo $totalProducts; ?>"><?php echo $totalProducts; ?></span></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg col-sm-6 col-12">
                            <div class="card card-stat bg-primary">
                                <div class="card-body">
                                    <div class="d-flex align-items-center gap-2 mb-3">
                                        <div class="avatar-xs flex-shrink-0">
                                            <div class="avatar-title bg-white text-primary rounded-circle">
                                                <i class="bi bi-check-circle"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="text-white text-opacity-75 mb-0">Disponibles</p>
                                        </div>
                                    </div>
                                    <h4 class="text-white mb-0"><span class="counter-value" data-target="<?php echo $availableProducts; ?>"><?php echo $availableProducts; ?></span></h4>
                                </div>
                            </div>
                        </div>
                        <?php if ($is_admin): ?>
                            <div class="col-lg col-sm-6 col-12">
                                <div class="card card-stat bg-warning">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center gap-2 mb-3">
                                            <div class="avatar-xs flex-shrink-0">
                                                <div class="avatar-title bg-white text-warning rounded-circle">
                                                    <i class="bi bi-exclamation-circle"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="text-white text-opacity-75 mb-0">Stock Faible</p>
                                            </div>
                                        </div>
                                        <h4 class="text-white mb-0"><span class="counter-value" data-target="<?php echo $lowStockCount; ?>"><?php echo $lowStockCount; ?></span></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg col-sm-6 col-12">
                                <div class="card card-stat bg-danger">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center gap-2 mb-3">
                                            <div class="avatar-xs flex-shrink-0">
                                                <div class="avatar-title bg-white text-danger rounded-circle">
                                                    <i class="bi bi-x-circle"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="text-white text-opacity-75 mb-0">Indisponibles</p>
                                            </div>
                                        </div>
                                        <h4 class="text-white mb-0"><span class="counter-value" data-target="<?php echo $unavailableProducts; ?>"><?php echo $unavailableProducts; ?></span></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg col-sm-6 col-12">
                                <div class="card card-stat bg-success">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center gap-2 mb-3">
                                            <div class="avatar-xs flex-shrink-0">
                                                <div class="avatar-title bg-white text-success rounded-circle">
                                                    <i class="bi bi-arrow-up-circle"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="text-white text-opacity-75 mb-0">Ventes ce mois</p>
                                            </div>
                                        </div>
                                        <h4 class="text-white mb-0"><span class="counter-value" data-target="<?php echo $monthlySales; ?>"><?php echo $monthlySales; ?></span> €</h4>
                                    </div>
                                </div>
                            </div>
                        <?php else: ?>
                            <!-- Statistiques alternatives pour les non-admins -->
                            <div class="col-lg col-sm-6 col-12">
                                <div class="card card-stat bg-info">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center gap-2 mb-3">
                                            <div class="avatar-xs flex-shrink-0">
                                                <div class="avatar-title bg-white text-info rounded-circle">
                                                    <i class="bi bi-info-circle"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="text-white text-opacity-75 mb-0">Mes Commandes</p>
                                            </div>
                                        </div>
                                        <h4 class="text-white mb-0">-</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg col-sm-6 col-12">
                                <div class="card card-stat bg-secondary">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center gap-2 mb-3">
                                            <div class="avatar-xs flex-shrink-0">
                                                <div class="avatar-title bg-white text-secondary rounded-circle">
                                                    <i class="bi bi-clock-history"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="text-white text-opacity-75 mb-0">En Attente</p>
                                            </div>
                                        </div>
                                        <h4 class="text-white mb-0">-</h4>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                    <!--end row-->

                    <!-- Filtres et recherche -->
                    <!-- Filtres et recherche -->
                    <div class="row mb-3">
                        <div class="col-sm-6">
                            <div class="search-box">
                                <input type="search" id="search-input" class="form-control" placeholder="Rechercher un produit..." onkeyup="filterProducts()">
                                <i class="ri-search-line search-icon"></i>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="filter-container">
                                <select id="status-filter" onchange="filterProducts()">
                                    <option value="">Tous les statuts</option>
                                    <option value="disponible">Disponible</option>
                                    <option value="indisponible">Indisponible</option>
                                    <?php if ($is_admin): ?>
                                        <option value="stock_faible">Stock faible</option>
                                    <?php endif; ?>
                                </select>
                                <select id="presentation-filter" onchange="filterProducts()">
                                    <option value="">Toutes les présentations</option>
                                    <?php foreach ($presentations as $presentation): ?>
                                        <option value="<?php echo htmlspecialchars($presentation); ?>"><?php echo htmlspecialchars($presentation); ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <button id="reset-filters" onclick="resetFilters()">Réinitialiser</button>
                                <?php if ($is_admin): ?>
                                    <button id="add-product" onclick="showAddProductModal()" style="background: #0ab39c;">
                                        <i class="ri-add-line"></i> Nouveau Produit
                                    </button>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <!-- Tableau des produits -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive table-card">
                                        <table class="table table-centered align-middle table-custom-effect table-nowrap mb-0">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>Nom produit</th>
                                                    <th>Présentation</th>
                                                    <th>Prix d'achat</th>
                                                    <th>Prix de vente</th>
                                                    <?php if ($is_admin): ?>
                                                        <th>Stock actuel</th>
                                                        <th>Stock min</th>
                                                    <?php endif; ?>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody id="products-table-body">
                                                <!-- Les données seront chargées via PHP/JavaScript -->
                                            </tbody>
                                        </table>
                                        <div class="noresult" style="display: none" id="no-results">
                                            <div class="text-center py-4">
                                                <i class="ph-magnifying-glass fs-1 text-primary"></i>
                                                <h5 class="mt-2">Aucun résultat trouvé</h5>
                                                <p class="text-muted mb-0">Aucun produit ne correspond à votre recherche.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-center mt-4 pt-3">
                                        <div class="col-sm">
                                            <div class="text-muted text-center text-sm-start">
                                                Affichage de <span class="fw-semibold" id="start-item">0</span> à <span class="fw-semibold" id="end-item">0</span> sur <span class="fw-semibold" id="total-items">0</span> résultats
                                            </div>
                                        </div>
                                        <div class="col-sm-auto mt-3 mt-sm-0">
                                            <nav>
                                                <ul class="pagination pagination-separated mb-0" id="pagination">
                                                    <!-- La pagination sera générée dynamiquement -->
                                                </ul>
                                            </nav>
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

    <!-- Modal de suppression -->
    <div id="deleteRecordModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Confirmation de suppression</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-md-5">
                    <div class="text-center">
                        <div class="text-danger">
                            <i class="bi bi-trash display-5"></i>
                        </div>
                        <div class="mt-4">
                            <h4 class="mb-2">Êtes-vous sûr ?</h4>
                            <p class="text-muted mx-3 mb-0">Voulez-vous vraiment supprimer ce produit ?</p>
                        </div>
                    </div>
                    <div class="d-flex gap-2 justify-content-center mt-4 pt-2 mb-2">
                        <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Annuler</button>
                        <button type="button" class="btn w-sm btn-danger" id="delete-record">Oui, supprimer</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de visualisation -->
    <div id="viewProductModal" class="modal fade" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Détails du produit</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="view-product-content">
                    <!-- Contenu chargé dynamiquement -->
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de création -->
<div id="addProductModal" class="modal fade" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Nouveau Produit</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addProductForm">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Nom *</label>
                            <input type="text" class="form-control" name="nom" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Prix de vente *</label>
                            <input type="number" class="form-control" name="prix_vente" step="0.01" min="0" required>
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" name="description" rows="3"></textarea>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Présentation</label>
                            <input type="text" class="form-control" name="presentation">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Prix d'achat *</label>
                            <input type="number" class="form-control" name="prix_achat" step="0.01" min="0" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Stock initial</label>
                            <input type="number" class="form-control" name="quantite_disponible" value="0" min="0">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Stock minimum</label>
                            <input type="number" class="form-control" name="quantite_minimale" value="0" min="0">
                        </div>
                    </div>
                </form>
                <div class="d-flex justify-content-end gap-2 mt-3">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-success" onclick="submitAddForm()">Créer le produit</button>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Modal d'édition -->
    <div id="editProductModal" class="modal fade" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modifier le produit</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="edit-product-content">
                    <!-- Formulaire chargé dynamiquement -->
                </div>
            </div>
        </div>
    </div>

    <?php include 'partials/customizer.php'; ?>
    <?php include 'partials/vendor-scripts.php'; ?>

    <!-- sweetalert2 js -->
    <script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>

    <!-- Script personnalisé -->
    <script>
        // Variables globales
        let allProducts = [];
        let filteredProducts = [];
        let currentPage = 1;
        const itemsPerPage = 10;
        const isAdmin = <?php echo $is_admin ? 'true' : 'false'; ?>;
        let currentProductId = null;

        // Fonction pour récupérer les produits
        async function fetchProducts() {
            try {
                const response = await fetch('functions/fetchProduct.php');
                if (!response.ok) throw new Error('Erreur réseau: ' + response.status);

                const data = await response.json();
                console.log('Produits reçus:', data);

                allProducts = data;
                filteredProducts = [...allProducts];
                displayProducts();
                updatePagination();
            } catch (error) {
                console.error('Erreur:', error);
                showError('Erreur lors du chargement des produits');
            }
        }

        // Fonction pour afficher les produits
        function displayProducts() {
            const tbody = document.getElementById('products-table-body');
            tbody.innerHTML = '';

            if (filteredProducts.length === 0) {
                document.getElementById('no-results').style.display = 'block';
                updatePaginationInfo(0, 0, 0);
                return;
            }

            document.getElementById('no-results').style.display = 'none';

            // Calculer les indices pour la pagination
            const startIndex = (currentPage - 1) * itemsPerPage;
            const endIndex = Math.min(startIndex + itemsPerPage, filteredProducts.length);
            const currentProducts = filteredProducts.slice(startIndex, endIndex);

            currentProducts.forEach(product => {
                let status, statusClass;

                if (product.quantité_disponible <= 0) {
                    status = 'Indisponible';
                    statusClass = 'status-unavailable';
                } else if (isAdmin && product.quantité_disponible <= product.quantite_minimale) {
                    status = 'Stock faible';
                    statusClass = 'status-lowstock';
                } else {
                    status = 'Disponible';
                    statusClass = 'status-available';
                }

                const row = `
                    <tr>
                        <td>${escapeHtml(product.nom || 'N/A')}</td>
                        <td>${escapeHtml(product.presentation || 'N/A')}</td>
                        <td>${product.prix_achat || '0'} €</td>
                        <td>${product.prix_vente || '0'} €</td>
                        ${isAdmin ? `
                        <td>${product.quantité_disponible || '0'}</td>
                        <td>${product.quantite_minimale || '0'}</td>
                        ` : ''}
                        <td><span class="status-badge ${statusClass}">${status}</span></td>
                        <td>
                            <div class="action-buttons">
                                <button class="btn-action btn-view" onclick="viewProduct(${product.id_produit})" title="Voir les détails">
                                    <i class="ri-eye-line"></i>
                                </button>
                                ${isAdmin ? `
                                <button class="btn-action btn-edit" onclick="editProduct(${product.id_produit})" title="Modifier">
                                    <i class="ri-edit-line"></i>
                                </button>
                                <button class="btn-action btn-delete" onclick="confirmDelete(${product.id_produit})" title="Supprimer">
                                    <i class="ri-delete-bin-line"></i>
                                </button>
                                ` : ''}
                            </div>
                        </td>
                    </tr>
                `;
                tbody.innerHTML += row;
            });

            updatePaginationInfo(startIndex + 1, endIndex, filteredProducts.length);
        }

        // Fonction pour afficher la modal d'ajout
function showAddProductModal() {
    if (!isAdmin) {
        Swal.fire('Erreur', 'Vous n\'avez pas les permissions pour créer un produit.', 'error');
        return;
    }
    
    // Réinitialiser le formulaire
    document.getElementById('addProductForm').reset();
    new bootstrap.Modal(document.getElementById('addProductModal')).show();
}

// Fonction pour soumettre le formulaire d'ajout
async function submitAddForm() {
    const form = document.getElementById('addProductForm');
    const formData = new FormData(form);
    const data = Object.fromEntries(formData.entries());
    
    // Validation basique
    if (!data.nom || !data.prix_vente || !data.prix_achat) {
        Swal.fire('Erreur', 'Veuillez remplir tous les champs obligatoires.', 'error');
        return;
    }

    try {
        const response = await fetch('functions/addProduct.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(data)
        });

        const result = await response.json();
        
        if (response.ok && result.success) {
            Swal.fire({
                icon: 'success',
                title: 'Succès',
                text: 'Produit créé avec succès',
                timer: 2000,
                showConfirmButton: false
            });
            
            bootstrap.Modal.getInstance(document.getElementById('addProductModal')).hide();
            await fetchProducts(); // Recharger la liste
        } else {
            throw new Error(result.error || 'Erreur lors de la création');
        }
    } catch (error) {
        Swal.fire({
            icon: 'error',
            title: 'Erreur',
            text: 'Erreur lors de la création du produit: ' + error.message
        });
    }
}

        // Fonction pour filtrer les produits
        function filterProducts() {
            const searchText = document.getElementById('search-input').value.toLowerCase();
            const statusFilter = document.getElementById('status-filter').value;
            const presentationFilter = document.getElementById('presentation-filter').value;

            filteredProducts = allProducts.filter(product => {
                // Filtre par texte de recherche
                const matchesSearch = searchText === '' ||
                    (product.nom && product.nom.toLowerCase().includes(searchText)) ||
                    (product.description && product.description.toLowerCase().includes(searchText)) ||
                    (product.presentation && product.presentation.toLowerCase().includes(searchText));

                // Filtre par statut
                let matchesStatus = true;
                if (statusFilter) {
                    if (statusFilter === 'disponible') {
                        matchesStatus = product.quantité_disponible > 0;
                    } else if (statusFilter === 'indisponible') {
                        matchesStatus = product.quantité_disponible <= 0;
                    } else if (statusFilter === 'stock_faible' && isAdmin) {
                        matchesStatus = product.quantité_disponible > 0 && product.quantité_disponible <= product.quantite_minimale;
                    }
                }

                // Filtre par présentation
                const matchesPresentation = presentationFilter === '' ||
                    (product.presentation && product.presentation === presentationFilter);

                return matchesSearch && matchesStatus && matchesPresentation;
            });

            currentPage = 1;
            displayProducts();
            updatePagination();
        }

        // Fonction pour réinitialiser les filtres
        function resetFilters() {
            document.getElementById('search-input').value = '';
            document.getElementById('status-filter').value = '';
            document.getElementById('presentation-filter').value = '';
            filteredProducts = [...allProducts];
            currentPage = 1;
            displayProducts();
            updatePagination();
        }

        // Fonctions des modals
        function viewProduct(id) {
            const product = allProducts.find(p => p.id_produit == id);
            if (product) {
                let status, statusClass;

                if (product.quantité_disponible <= 0) {
                    status = 'Indisponible';
                    statusClass = 'status-unavailable';
                } else if (isAdmin && product.quantité_disponible <= product.quantite_minimale) {
                    status = 'Stock faible';
                    statusClass = 'status-lowstock';
                } else {
                    status = 'Disponible';
                    statusClass = 'status-available';
                }

                const modalContent = `
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Informations du produit</h6>
                            <p><strong>Nom:</strong> ${escapeHtml(product.nom)}</p>
                            <p><strong>Présentation:</strong> ${escapeHtml(product.presentation || 'N/A')}</p>
                            <p><strong>Statut:</strong> <span class="status-badge ${statusClass}">${status}</span></p>
                            ${product.description ? `<p><strong>Description:</strong> ${escapeHtml(product.description)}</p>` : ''}
                        </div>
                        <div class="col-md-6">
                            <h6>Détails financiers et stock</h6>
                            <p><strong>Prix d'achat:</strong> ${product.prix_achat || '0'} €</p>
                            <p><strong>Prix de vente:</strong> ${product.prix_vente || '0'} €</p>
                            ${isAdmin ? `
                            <p><strong>Stock actuel:</strong> ${product.quantité_disponible || '0'}</p>
                            <p><strong>Stock minimum:</strong> ${product.quantite_minimale || '0'}</p>
                            ` : ''}
                        </div>
                    </div>
                `;
                document.getElementById('view-product-content').innerHTML = modalContent;
                new bootstrap.Modal(document.getElementById('viewProductModal')).show();
            }
        }

        function editProduct(id) {
            if (!isAdmin) {
                Swal.fire('Erreur', 'Vous n\'avez pas les permissions pour modifier un produit.', 'error');
                return;
            }

            const product = allProducts.find(p => p.id_produit == id);
            if (product) {
                const formContent = `
                    <form id="editProductForm">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Nom *</label>
                                <input type="text" class="form-control" name="nom" value="${escapeHtml(product.nom)}" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Prix de vente *</label>
                                <input type="number" class="form-control" name="prix_vente" value="${product.prix_vente}" step="0.01" min="0" required>
                            </div>
                            <div class="col-12 mb-3">
                                <label class="form-label">Description</label>
                                <textarea class="form-control" name="description" rows="3">${escapeHtml(product.description || '')}</textarea>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Présentation</label>
                                <input type="text" class="form-control" name="presentation" value="${escapeHtml(product.presentation || '')}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Prix d'achat *</label>
                                <input type="number" class="form-control" name="prix_achat" value="${product.prix_achat}" step="0.01" min="0" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Stock minimum</label>
                                <input type="number" class="form-control" name="quantite_minimale" value="${product.quantite_minimale || 0}" min="0">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Statut</label>
                                <select class="form-control" name="actif">
                                    <option value="1" ${product.actif ? 'selected' : ''}>Actif</option>
                                    <option value="0" ${!product.actif ? 'selected' : ''}>Inactif</option>
                                </select>
                            </div>
                        </div>
                        <input type="hidden" name="id_produit" value="${product.id_produit}">
                    </form>
                    <div class="d-flex justify-content-end gap-2 mt-3">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Annuler</button>
                        <button type="button" class="btn btn-primary" onclick="submitEditForm()">Enregistrer</button>
                    </div>
                `;
                document.getElementById('edit-product-content').innerHTML = formContent;
                new bootstrap.Modal(document.getElementById('editProductModal')).show();
            }
        }

        async function submitEditForm() {
            const form = document.getElementById('editProductForm');
            const formData = new FormData(form);
            const data = Object.fromEntries(formData.entries());

            try {
                const response = await fetch('functions/updateProduct.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify(data)
                });

                const result = await response.json();

                if (response.ok && result.success) {
                    Swal.fire('Succès', 'Produit modifié avec succès', 'success');
                    bootstrap.Modal.getInstance(document.getElementById('editProductModal')).hide();
                    await fetchProducts();
                } else {
                    throw new Error(result.error || 'Erreur lors de la modification');
                }
            } catch (error) {
                Swal.fire('Erreur', 'Erreur lors de la modification du produit: ' + error.message, 'error');
            }
        }

        function confirmDelete(id) {
            if (!isAdmin) {
                Swal.fire('Erreur', 'Vous n\'avez pas les permissions pour supprimer un produit.', 'error');
                return;
            }

            currentProductId = id;
            document.getElementById('delete-record').onclick = () => deleteProduct(currentProductId);
            new bootstrap.Modal(document.getElementById('deleteRecordModal')).show();
        }

        async function deleteProduct(id) {
            try {
                const response = await fetch('functions/deleteProduct.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({
                        id_produit: id
                    })
                });

                const result = await response.json();

                if (response.ok && result.success) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Succès',
                        text: 'Produit supprimé avec succès',
                        timer: 2000,
                        showConfirmButton: false
                    });

                    await fetchProducts();
                    bootstrap.Modal.getInstance(document.getElementById('deleteRecordModal')).hide();
                } else {
                    throw new Error(result.error || 'Erreur lors de la suppression');
                }
            } catch (error) {
                Swal.fire({
                    icon: 'error',
                    title: 'Erreur',
                    text: 'Erreur lors de la suppression du produit: ' + error.message
                });
            }
        }

        // Fonctions utilitaires
        function escapeHtml(text) {
            const div = document.createElement('div');
            div.textContent = text;
            return div.innerHTML;
        }

        function truncateText(text, maxLength) {
            if (text.length <= maxLength) return text;
            return text.substring(0, maxLength) + '...';
        }

        function showError(message) {
            Swal.fire('Erreur', message, 'error');
        }

        // Pagination functions
        function updatePagination() {
            const totalPages = Math.ceil(filteredProducts.length / itemsPerPage);
            const paginationElement = document.getElementById('pagination');
            paginationElement.innerHTML = '';

            if (totalPages <= 1) return;

            // Previous button
            const prevLi = document.createElement('li');
            prevLi.className = `page-item ${currentPage === 1 ? 'disabled' : ''}`;
            prevLi.innerHTML = `<a class="page-link" href="#" onclick="changePage(${currentPage - 1})">Précédent</a>`;
            paginationElement.appendChild(prevLi);

            // Page numbers
            for (let i = 1; i <= totalPages; i++) {
                const li = document.createElement('li');
                li.className = `page-item ${currentPage === i ? 'active' : ''}`;
                li.innerHTML = `<a class="page-link" href="#" onclick="changePage(${i})">${i}</a>`;
                paginationElement.appendChild(li);
            }

            // Next button
            const nextLi = document.createElement('li');
            nextLi.className = `page-item ${currentPage === totalPages ? 'disabled' : ''}`;
            nextLi.innerHTML = `<a class="page-link" href="#" onclick="changePage(${currentPage + 1})">Suivant</a>`;
            paginationElement.appendChild(nextLi);
        }

        function changePage(page) {
            const totalPages = Math.ceil(filteredProducts.length / itemsPerPage);
            if (page < 1 || page > totalPages) return;
            currentPage = page;
            displayProducts();
            updatePagination();
            window.scrollTo(0, 0);
        }

        function updatePaginationInfo(start, end, total) {
            document.getElementById('start-item').textContent = start;
            document.getElementById('end-item').textContent = end;
            document.getElementById('total-items').textContent = total;
        }

        // Initialisation
        document.addEventListener('DOMContentLoaded', function() {
            fetchProducts();

            // Ajouter l'écouteur d'événement pour la recherche
            const searchInput = document.getElementById('search-input');
            if (searchInput) {
                searchInput.addEventListener('input', filterProducts);
            }
        });
    </script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>
</body>

</html>