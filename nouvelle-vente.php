<?php
include 'partials/main.php';
require 'functions/authCheck.php';

// Initialisation des variables
$error_message = '';
$success_message = '';
$medicaments = [];
$prix_medicaments = [];

// Connexion à la base de données avec PDO
try {
   include "functions/config.php";
    
    // Récupérer l'ID de l'utilisateur connecté
    $id_utilisateur = $_SESSION['user_id'] ?? null;
    
    // Traitement du formulaire
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Récupération des données du formulaire
        $id_produit = $_POST['id_produit'] ?? null;
        $quantite = $_POST['quantite'] ?? null;
        $mode_paiement = $_POST['mode_paiement'] ?? null;
        
        if ($id_produit && $quantite && $mode_paiement && $id_utilisateur) {
            $date_vente = date('Y-m-d H:i:s');
            
            // Récupération du prix de vente du produit
            $stmt = $pdo->prepare("SELECT prix_vente, quantité_disponible FROM produit WHERE id_produit = ? AND actif = 1");
            $stmt->execute([$id_produit]);
            $produit = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if ($produit) {
                // Vérifier le stock disponible
                if ($produit['quantité_disponible'] < $quantite) {
                    $error_message = "Stock insuffisant. Il reste seulement " . $produit['quantité_disponible'] . " unité(s) en stock.";
                } else {
                    $prix_unitaire = $produit['prix_vente'];
                    $montant_total = $prix_unitaire * $quantite;
                    
                    $pdo->beginTransaction();
                    
                    try {
                        // 1. Créer l'enregistrement de vente
                        $stmt = $pdo->prepare("INSERT INTO vente (date_vente, montant_total, mode_paiement, id_utilisateur) VALUES (?, ?, ?, ?)");
                        $stmt->execute([$date_vente, $montant_total, $mode_paiement, $id_utilisateur]);
                        $id_vente = $pdo->lastInsertId();
                        
                        // 2. Mettre à jour le stock du produit
                        $stmt = $pdo->prepare("UPDATE produit SET quantité_disponible = quantité_disponible - ? WHERE id_produit = ?");
                        $stmt->execute([$quantite, $id_produit]);
                        
                        // 3. Ajouter la ligne de vente
                        $stmt = $pdo->prepare("INSERT INTO ligne_vente (quantite_vendue, prix_unitaire, id_vente, id_produit) VALUES (?, ?, ?, ?)");
                        $stmt->execute([$quantite, $prix_unitaire, $id_vente, $id_produit]);
                        
                        $pdo->commit();
                        
                        // Enregistrer l'action dans l'historique
                        $details = "Vente de médicament enregistrée (ID: $id_vente). Quantité: $quantite";
                        $stmt = $pdo->prepare("INSERT INTO historique_action (type_action, details, date_action, id_utilisateur) VALUES ('vente', ?, NOW(), ?)");
                        $stmt->execute([$details, $id_utilisateur]);
                        
                        $success_message = "Vente enregistrée avec succès! Stock mis à jour.";
                        
                        // Réinitialiser le formulaire après succès
                        echo '<script>document.getElementById("formVente").reset();</script>';
                        
                    } catch (Exception $e) {
                        $pdo->rollBack();
                        throw $e;
                    }
                }
            } else {
                $error_message = "Produit non trouvé ou inactif.";
            }
        } else {
            $error_message = "Veuillez remplir tous les champs obligatoires.";
        }
    }
    
    // Récupérer la liste des médicaments actifs pour l'autocomplétion
    $stmt = $pdo->prepare("SELECT id_produit, nom, presentation, prix_vente, quantité_disponible FROM produit WHERE actif = 1 ORDER BY nom");
    $stmt->execute();
    $medicaments = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // Créer un tableau des prix pour chaque médicament
    foreach ($medicaments as $medicament) {
        $prix_medicaments[$medicament['id_produit']] = $medicament['prix_vente'];
    }
    
} catch (PDOException $e) {
    $error_message = "Erreur de connexion à la base de données: " . $e->getMessage();
} catch (Exception $e) {
    $error_message = $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <?php
    $title = 'Nouvelle Vente';
    include('partials/title-meta.php');
    ?>
    <?php include 'partials/head-css.php'; ?>
    
    <style>
        .card-vente {
            border: none;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
            background: white;
        }
        
        .card-header-vente {
            background: #405189;
            border-radius: 10px 10px 0 0;
            padding: 20px;
            color: white;
        }
        
        .autocomplete-container {
            position: relative;
        }
        
        .autocomplete-items {
            position: absolute;
            border: 1px solid #dee2e6;
            border-top: none;
            z-index: 99;
            top: 100%;
            left: 0;
            right: 0;
            background-color: white;
            max-height: 200px;
            overflow-y: auto;
            display: none;
            border-radius: 0 0 5px 5px;
        }
        
        .autocomplete-items div {
            padding: 10px 15px;
            cursor: pointer;
            border-bottom: 1px solid #f1f3f4;
            transition: background-color 0.2s;
        }
        
        .autocomplete-items div:hover {
            background-color: #f8f9fa;
        }
        
        .autocomplete-active {
            background-color: #405189 !important;
            color: white;
        }

       
        
        .form-control, .form-select {
            border-radius: 5px;
            padding: 10px 15px;
            border: 1px solid #ced4da;
        }
        
        .form-control:focus, .form-select:focus {
            border-color: #405189;
            box-shadow: 0 0 0 0.2rem rgba(64, 81, 137, 0.25);
        }
        
        .btn-vente {
            background: #405189;
            border: none;
            border-radius: 5px;
            padding: 12px 30px;
            font-weight: 500;
        }
        
        .btn-vente:hover {
            background: #344767;
        }
        
        .info-badge {
            background: #e3f2fd;
            color: #1976d2;
            padding: 6px 12px;
            border-radius: 4px;
            font-size: 13px;
        }
        
        .montant-container {
            background: #f8f9fa;
            border-radius: 5px;
            padding: 15px;
            border-left: 3px solid #405189;
        }
        
        .stock-info {
            font-size: 13px;
            color: #6c757d;
            margin-top: 5px;
        }
        
        .stock-low {
            color: #dc3545;
            font-weight: 500;
        }
        
        .stock-good {
            color: #198754;
            font-weight: 500;
        }
        
        .page-title-box {
            padding: 0 0 20px 0;
        }
    </style>
</head>

<body>
    <div id="layout-wrapper">
        <?php include 'partials/menu.php'; ?>
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0">Nouvelle Vente</h4>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <?php if (!empty($error_message)): ?>
                            <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
                                <i class="ri-error-warning-line me-2"></i>
                                <?php echo htmlspecialchars($error_message); ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            <?php endif; ?>
                            
                            <?php if (!empty($success_message)): ?>
                            <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                                <i class="ri-checkbox-circle-line me-2"></i>
                                <?php echo htmlspecialchars($success_message); ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            <?php endif; ?>
                            
                            <div class="card card-vente mb-4">
                                <div class="card-header-vente">
                                    <h5 class="mb-0"><i class="ri-shopping-cart-line me-2"></i>Enregistrer une vente</h5>
                                </div>
                                
                                <div class="card-body">
                                    <form method="POST" action="nouvelle-vente.php" id="formVente">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label">Médicament <span class="text-danger">*</span></label>
                                                <div class="autocomplete-container">
                                                    <input type="text" class="form-control" id="medicament" name="medicament" required
                                                        placeholder="Rechercher un médicament..." autocomplete="off">
                                                    <input type="hidden" id="id_produit" name="id_produit">
                                                    <div id="suggestions" class="autocomplete-items"></div>
                                                </div>
                                                <div id="stock-info" class="stock-info mt-2"></div>
                                            </div>
                                            
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label">Mode de paiement <span class="text-danger">*</span></label>
                                                <select class="form-select" id="mode_paiement" name="mode_paiement" required>
                                                    <option value="">Choisir le mode de paiement</option>
                                                    <option value="Espèces">Espèces</option>
                                                    <option value="Carte bancaire">Carte bancaire</option>
                                                    <option value="Mobile Money">Mobile Money</option>
                                                    <option value="Chèque">Chèque</option>
                                                    <option value="Virement">Virement</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label">Quantité <span class="text-danger">*</span></label>
                                                <input type="number" min="1" class="form-control" id="quantite" name="quantite" required
                                                    placeholder="Quantité vendue" oninput="calculerMontantTotal()">
                                            </div>
                                            
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label">Prix unitaire</label>
                                                <div class="input-group">
                                                    <span class="input-group-text">FCFA</span>
                                                    <input type="text" class="form-control prix-u" id="prix_unitaire" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="montant-container mb-4">
                                            <div class="row align-items-center">
                                                <div class="col-md-6">
                                                    <label class="form-label fw-semibold">Montant total</label>
                                                </div>
                                                <div class="col-md-6 text-end">
                                                    <span class="fs-5 fw-semibold text-primary" id="montant_total_affichage">0 FCFA</span>
                                                    <input type="hidden" id="montant_total" name="montant_total">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-vente">
                                                <i class="ri-check-double-line me-2"></i>Valider la vente
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            
                            <div class="text-center">
                                <span class="info-badge">
                                    <i class="ri-information-line me-1"></i>
                                    Le stock sera automatiquement mis à jour après validation
                                </span>
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
        const prixMedicaments = <?php echo json_encode($prix_medicaments); ?>;
        let stockDisponible = 0;
        let selectedProductId = null;
        
        function initAutocomplete() {
            const input = document.getElementById("medicament");
            const suggestions = document.getElementById("suggestions");
            let currentFocus = -1;
            
            input.addEventListener("input", function() {
                const val = this.value.trim();
                suggestions.innerHTML = "";
                
                if (!val) {
                    suggestions.style.display = "none";
                    document.getElementById("stock-info").innerHTML = "";
                    selectedProductId = null;
                    return;
                }
                
                currentFocus = -1;
                let hasSuggestions = false;
                
                medicaments.forEach(medicament => {
                    const nomMedicament = medicament.nom.toLowerCase();
                    const presentation = medicament.presentation ? ` (${medicament.presentation})` : '';
                    const textComplet = medicament.nom + presentation;
                    
                    if (nomMedicament.includes(val.toLowerCase())) {
                        hasSuggestions = true;
                        const div = document.createElement("div");
                        div.innerHTML = `
                            <div>
                                <strong>${medicament.nom}</strong>${presentation}
                                <br>
                                <small class="text-muted">Stock: ${medicament.quantité_disponible} unités - ${medicament.prix_vente} FCFA</small>
                            </div>
                        `;
                        div.setAttribute("data-id", medicament.id_produit);
                        div.setAttribute("data-text", textComplet);
                        div.setAttribute("data-stock", medicament.quantité_disponible);
                        div.setAttribute("data-prix", medicament.prix_vente);
                        
                        div.addEventListener("click", function() {
                            input.value = this.getAttribute("data-text");
                            selectedProductId = this.getAttribute("data-id");
                            document.getElementById("id_produit").value = selectedProductId;
                            suggestions.style.display = "none";
                            
                            // Mettre à jour le prix et le stock
                            stockDisponible = parseInt(this.getAttribute("data-stock"));
                            updatePrix(this.getAttribute("data-prix"));
                            updateStockInfo(stockDisponible);
                        });
                        
                        suggestions.appendChild(div);
                    }
                });
                
                suggestions.style.display = hasSuggestions ? "block" : "none";
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
        }
        
        function highlightItem(items, index) {
            Array.from(items).forEach(item => item.classList.remove("autocomplete-active"));
            if (index >= 0 && index < items.length) {
                items[index].classList.add("autocomplete-active");
                items[index].scrollIntoView({block: "nearest"});
            }
        }
        
        function updatePrix(prix) {
            document.getElementById("prix_unitaire").value = prix ? parseFloat(prix).toFixed(2) : "";
            calculerMontantTotal();
        }
        
        function updateStockInfo(stock) {
            const stockInfo = document.getElementById("stock-info");
            const quantiteInput = document.getElementById("quantite");
            
            if (stock > 10) {
                stockInfo.innerHTML = `<span class="stock-good">✓ Stock disponible: ${stock} unités</span>`;
            } else if (stock > 0) {
                stockInfo.innerHTML = `<span class="stock-low">⚠ Stock faible: ${stock} unités</span>`;
            } else {
                stockInfo.innerHTML = `<span class="stock-low">✗ Stock épuisé</span>`;
            }
            
            // Limiter la quantité maximale au stock disponible
            quantiteInput.max = stock;
            quantiteInput.value = "";
        }
        
        function calculerMontantTotal() {
            const quantite = parseInt(document.getElementById("quantite").value) || 0;
            const prixUnitaire = parseFloat(document.getElementById("prix_unitaire").value) || 0;
            const montantTotal = quantite * prixUnitaire;
            
            document.getElementById("montant_total").value = montantTotal.toFixed(2);
            document.getElementById("montant_total_affichage").textContent = montantTotal.toLocaleString('fr-FR') + ' FCFA';
            
            // Vérifier si la quantité demandée dépasse le stock
            if (quantite > stockDisponible) {
                document.getElementById("quantite").classList.add("is-invalid");
            } else {
                document.getElementById("quantite").classList.remove("is-invalid");
            }
        }
        
        // Initialiser l'autocomplétion au chargement de la page
        document.addEventListener("DOMContentLoaded", function() {
            initAutocomplete();
            
            // Écouter les changements de quantité
            document.getElementById("quantite").addEventListener("input", calculerMontantTotal);
            
            // Valider le formulaire
            document.getElementById("formVente").addEventListener("submit", function(e) {
                const quantite = parseInt(document.getElementById("quantite").value) || 0;
                
                if (!selectedProductId) {
                    e.preventDefault();
                    alert("Veuillez sélectionner un médicament valide.");
                    return;
                }
                
                if (quantite > stockDisponible) {
                    e.preventDefault();
                    alert("Erreur: La quantité demandée dépasse le stock disponible.");
                    return;
                }
                
                if (quantite <= 0) {
                    e.preventDefault();
                    alert("Veuillez saisir une quantité valide.");
                    return;
                }
            });
        });
    </script>
</body>
</html>