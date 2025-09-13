<?php include 'partials/main.php'; ?>

<head>
    <?php
    $title = 'Nouvelle Vente Médicament';
    include('partials/title-meta.php');
    ?>
    <?php include 'partials/head-css.php'; ?>
</head>

<body>
    <!-- Begin page -->
    <div id="layout-wrapper">
        <?php include 'partials/sidebar.php'; ?>
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row justify-content-center mt-5">
                        <div class="col-lg-7">
                            <div class="card shadow">
                                <div class="card-header bg-primary text-white text-center py-3">
                                    <h5 class="mb-0 fw-bold" style="font-size:1.3rem;">Enregistrer une vente de médicament
                                    </h5>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="nouvelle-vente.php">
                                        <div class="mb-3">
                                            <label for="date_vente" class="form-label">Date et heure de la vente</label>
                                            <input type="datetime-local" class="form-control" id="date_vente" name="date_vente"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="medicament" class="form-label">Médicament</label>
                                            <input type="text" class="form-control" id="medicament" name="medicament" required
                                                placeholder="Nom du médicament">
                                        </div>
                                        <div class="mb-3">
                                            <label for="quantite" class="form-label">Quantité vendue</label>
                                            <input type="number" min="1" class="form-control" id="quantite" name="quantite"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="prix_unitaire" class="form-label">Prix unitaire (€)</label>
                                            <input type="number" step="0.01" min="0" class="form-control" id="prix_unitaire"
                                                name="prix_unitaire" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="montant_total" class="form-label">Montant total (€)</label>
                                            <input type="number" step="0.01" min="0" class="form-control" id="montant_total"
                                                name="montant_total" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="mode_paiement" class="form-label">Mode de paiement</label>
                                            <select class="form-select" id="mode_paiement" name="mode_paiement" required>
                                                <option value="">Sélectionner</option>
                                                <option value="Espèces">Espèces</option>
                                                <option value="Carte bancaire">Carte bancaire</option>
                                                <option value="Mobile Money">Mobile Money</option>
                                                <option value="Chèque">Chèque</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="id_utilisateur" class="form-label">Vendu par (ID utilisateur)</label>
                                            <input type="number" class="form-control" id="id_utilisateur" name="id_utilisateur"
                                                required placeholder="ID utilisateur">
                                        </div>
                                        <div class="d-grid gap-2">
                                            <button type="submit" class="btn btn-success">
                                                <i class="bi bi-check-circle"></i> Valider la vente
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include 'partials/footer.php'; ?>
        </div>
    </div>
    <?php include 'partials/customizer.php'; ?>
    <?php include 'partials/vendor-scripts.php'; ?>
    <script src="assets/js/app.js"></script>
    
</body>

</html>