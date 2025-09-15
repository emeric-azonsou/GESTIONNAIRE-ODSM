<?php
include 'partials/main.php';
require 'functions/authCheck.php';
include 'functions/nouvelleVente.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <?php
    $title = 'Nouvelle Vente Médicament';
    include('partials/title-meta.php');
    ?>
    <?php include 'partials/head-css.php'; ?>
    
    <style>
        .autocomplete-container {
            position: relative;
        }
        .autocomplete-items {
            position: absolute;
            border: 1px solid #d4d4d4;
            border-top: none;
            z-index: 99;
            top: 100%;
            left: 0;
            right: 0;
            background-color: white;
            max-height: 200px;
            overflow-y: auto;
            display: none;
        }
        .autocomplete-items div {
            padding: 10px;
            cursor: pointer;
            border-bottom: 1px solid #d4d4d4;
        }
        .autocomplete-items div:hover {
            background-color: #e9e9e9;
        }
        .autocomplete-active {
            background-color: #007bff !important;
            color: #ffffff;
        }
    </style>
</head>

<body>
    <div id="layout-wrapper">
        <?php include 'partials/sidebar.php'; ?>
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <?php if (!empty($error_message)): ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Erreur:</strong> <?php echo htmlspecialchars($error_message); ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php endif; ?>
                    
                    <?php if (!empty($success_message)): ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Succès:</strong> <?php echo htmlspecialchars($success_message); ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php endif; ?>
                    
                    <div class="row justify-content-center mt-5">
                        <div class="col-lg-7">
                            <div class="card shadow">
                                <div class="card-header bg-primary text-white text-center py-3">
                                    <h5 class="mb-0 fw-bold">Enregistrer une vente de médicament</h5>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="nouvelle-vente.php" id="formVente">
                                        <div class="mb-3">
                                            <label for="date_vente" class="form-label">Date de vente</label>
                                            <input type="text" class="form-control" id="date_vente" 
                                                value="<?php echo date('d/m/Y H:i'); ?>" readonly>
                                        </div>
                                        
                                        <div class="mb-3 autocomplete-container">
                                            <label for="medicament" class="form-label">Médicament <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="medicament" name="medicament" required
                                                placeholder="Commencez à taper le nom d'un médicament..." autocomplete="off">
                                            <input type="hidden" id="id_produit" name="id_produit">
                                            <div id="suggestions" class="autocomplete-items"></div>
                                            <small class="form-text text-muted">Les suggestions apparaîtront lors de la saisie</small>
                                        </div>
                                        
                                        <div class="mb-3">
                                            <label for="quantite" class="form-label">Quantité vendue <span class="text-danger">*</span></label>
                                            <input type="number" min="1" class="form-control" id="quantite" name="quantite" required>
                                        </div>
                                        
                                        <div class="mb-3">
                                            <label for="prix_unitaire" class="form-label">Prix unitaire (FCFA)</label>
                                            <input type="text" class="form-control" id="prix_unitaire" readonly>
                                        </div>
                                        
                                        <div class="mb-3">
                                            <label for="montant_total" class="form-label">Montant total (FCFA)</label>
                                            <input type="text" class="form-control" id="montant_total" readonly>
                                        </div>
                                                                                
                                        <div class="mb-3">
                                            <label for="mode_paiement" class="form-label">Mode de paiement <span class="text-danger">*</span></label>
                                            <select class="form-select" id="mode_paiement" name="mode_paiement" required>
                                                <option value="">Sélectionner</option>
                                                <option value="Espèces">Espèces</option>
                                                <option value="Carte bancaire">Carte bancaire</option>
                                                <option value="Mobile Money">Mobile Money</option>
                                                <option value="Chèque">Chèque</option>
                                            </select>
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
    <?php include 'partials/vendor-scripts.php'; ?>
    
    <script>
        // Données des médicaments pour l'autocomplétion
        const medicaments = <?php echo json_encode($medicaments); ?>;
        
        // Données des prix (préchargés pour éviter l'appel AJAX)
        const prixMedicaments = <?php echo json_encode($prix_medicaments); ?>;
        
        // Fonction d'autocomplétion
        function initAutocomplete() {
            const input = document.getElementById("medicament");
            const suggestions = document.getElementById("suggestions");
            let currentFocus = -1;
            
            input.addEventListener("input", function() {
                const val = this.value.trim();
                suggestions.innerHTML = "";
                
                if (!val) {
                    suggestions.style.display = "none";
                    return;
                }
                
                currentFocus = -1;
                let hasSuggestions = false;
                
                for (let i = 0; i < medicaments.length; i++) {
                    const nomMedicament = medicaments[i].nom.toLowerCase();
                    const presentation = medicaments[i].presentation ? ` (${medicaments[i].presentation})` : '';
                    const textComplet = medicaments[i].nom + presentation;
                    
                    if (nomMedicament.includes(val.toLowerCase())) {
                        hasSuggestions = true;
                        const div = document.createElement("div");
                        div.innerHTML = `<strong>${medicaments[i].nom}</strong>${presentation}`;
                        div.setAttribute("data-id", medicaments[i].id_produit);
                        div.setAttribute("data-text", textComplet);
                        
                        div.addEventListener("click", function() {
                            input.value = this.getAttribute("data-text");
                            document.getElementById("id_produit").value = this.getAttribute("data-id");
                            suggestions.style.display = "none";
                            
                            // Mettre à jour le prix (sans appel AJAX)
                            updatePrix(this.getAttribute("data-id"));
                        });
                        
                        suggestions.appendChild(div);
                    }
                }
                
                if (hasSuggestions) {
                    suggestions.style.display = "block";
                } else {
                    suggestions.style.display = "none";
                }
            });
            
            input.addEventListener("keydown", function(e) {
                const items = suggestions.getElementsByTagName("div");
                
                if (e.key === "ArrowDown") {
                    e.preventDefault();
                    currentFocus = Math.min(currentFocus + 1, items.length - 1);
                    highlightItem(items, currentFocus);
                } else if (e.key === "ArrowUp") {
                    e.preventDefault();
                    currentFocus = Math.max(currentFocus - 1, -1);
                    highlightItem(items, currentFocus);
                } else if (e.key === "Enter") {
                    e.preventDefault();
                    if (currentFocus > -1 && items[currentFocus]) {
                        items[currentFocus].click();
                    }
                }
            });
            
            document.addEventListener("click", function(e) {
                if (e.target !== input && !suggestions.contains(e.target)) {
                    suggestions.style.display = "none";
                }
            });
            
            function highlightItem(items, index) {
                for (let i = 0; i < items.length; i++) {
                    items[i].classList.remove("autocomplete-active");
                }
                if (index >= 0 && index < items.length) {
                    items[index].classList.add("autocomplete-active");
                    items[index].scrollIntoView({block: "nearest"});
                }
            }
        }
        
        // Mettre à jour le prix sans appel AJAX
        function updatePrix(idProduit) {
            const prix = prixMedicaments[idProduit];
            if (prix) {
                document.getElementById("prix_unitaire").value = prix;
                calculerMontantTotal();
            } else {
                document.getElementById("prix_unitaire").value = "";
                alert('Prix non trouvé pour ce médicament');
            }
        }
        
        // Calculer le montant total
        function calculerMontantTotal() {
            const quantite = parseInt(document.getElementById("quantite").value) || 0;
            const prixUnitaire = parseFloat(document.getElementById("prix_unitaire").value) || 0;
            const montantTotal = quantite * prixUnitaire;
            
            document.getElementById("montant_total").value = montantTotal.toFixed(2);
        }
        
        // Écouter les changements de quantité
        document.getElementById("quantite").addEventListener("input", calculerMontantTotal);
        
        // Initialiser l'autocomplétion au chargement de la page
        document.addEventListener("DOMContentLoaded", function() {
            initAutocomplete();
        });
    </script>
</body>
</html>