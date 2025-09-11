<?php include 'partials/main.php'; ?>

<head>
    <?php
    $title = 'Recherche Produit Pharmacie';
    include('partials/title-meta.php');
    ?>
    <!-- Sweet Alert css-->
    <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css">
    <?php include 'partials/head-css.php'; ?>
</head>

<body>
    <!-- Begin page -->
    <div id="layout-wrapper">
        <?php include 'partials/sidebar.php'; ?>
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row justify-content-center mt-5">
                        <div class="col-lg-6">
                            <div class="card shadow">
                                <div class="card-header bg-primary text-white text-center py-3">
                                    <h5 class="mb-0 fw-bold" style="font-size:1.3rem;">Recherche de médicaments</h5>
                                </div>
                                <div class="card-body">
                                    <form method="GET" action="search.php">
                                        <div class="mb-3">
                                            <label for="nomProduit" class="form-label">Nom du produit</label>
                                            <input type="text" class="form-control" id="nomProduit" name="nomProduit"
                                                placeholder="Ex: Paracétamol">
                                        </div>
                                        <div class="mb-3">
                                            <label for="presentation" class="form-label">Présentation</label>
                                            <select class="form-select" id="presentation" name="presentation">
                                                <option value="">Toutes</option>
                                                <option value="comprime">Comprimé</option>
                                                <option value="sirop">Sirop</option>
                                                <option value="gelule">Gélule</option>
                                                <option value="pommade">Pommade</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="dateArrivee" class="form-label">Date d'arrivée</label>
                                            <input type="date" class="form-control" id="dateArrivee" name="dateArrivee">
                                        </div>
                                        <div class="mb-3">
                                            <label for="datePeremption" class="form-label">Date de péremption</label>
                                            <input type="date" class="form-control" id="datePeremption" name="datePeremption">
                                        </div>
                                        <div class="d-grid gap-2">
                                            <button type="submit" class="btn btn-primary">
                                                <i class="bi bi-search"></i> Rechercher
                                            </button>
                                        </div>
                                    </form>
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

    <!-- App js -->
    <script src="assets/js/app.js"></script>
</body>

</html>