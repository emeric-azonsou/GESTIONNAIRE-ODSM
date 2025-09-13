/*
   Template Name: Vixon - Admin & Dashboard Template
   Author: Themesbrand
   Website: https://Themesbrand.com/
   Contact: Themesbrand@gmail.com
   File: invoice list init js
*/

var qty = 0;
var rate = 0;

// Fonction pour récupérer les produits via AJAX depuis le serveur PHP
function fetchProductsFromDatabase() {
   return fetch('/GESTIONNAIRE-ODSM/functions/fetchProduct.php')
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            // Ajoutez des données manquantes pour le front-end si nécessaire
            const formattedData = data.map(product => ({
                ...product,
                // Le statut n'est pas dans la table `produit`, vous pouvez le déterminer ici ou via SQL.
                // Ici, on le simule pour l'affichage.
                status: 'Disponible'
            }));
            return formattedData;
        })
        .catch(error => {
            console.error('Erreur lors de la récupération des produits:', error);
            // Retourner un tableau vide en cas d'erreur
            return [];
        });
}

// Fonction asynchrone pour initialiser le tableau de produits
async function initProducts() {
    try {
        var Invoices = await fetchProductsFromDatabase();

        // await updateStockCounters();

        // var Invoices = await fetchProductsFromDatabase();

        // Gestion du localStorage (logique existante)
        if (
            localStorage.getItem("invoices-list") === null &&
            localStorage.getItem("new_data_object") === null
        ) {
            // Invoices = Invoices; (ligne inutile)
        } else if (
            localStorage.getItem("invoices-list") === null &&
            localStorage.getItem("new_data_object") !== null
        ) {
            var invoice_new_obj = JSON.parse(localStorage.getItem("new_data_object"));
            Invoices.push(invoice_new_obj);
            localStorage.removeItem("new_data_object");
        } else {
            Invoices = [];
            Invoices = JSON.parse(localStorage.getItem("invoices-list"));
            if (localStorage.getItem("new_data_object") !== null) {
                var invoice_new_obj = JSON.parse(localStorage.getItem("new_data_object"));
                Invoices.push(invoice_new_obj);
                localStorage.removeItem("new_data_object");
            }
            localStorage.removeItem("invoices-list");
        }

        // Fonction pour afficher les produits dans le tableau
        function displayProducts(products) {
            document.getElementById("invoice-list-data").innerHTML = '';

            if (products.length === 0) {
                document.getElementsByClassName("noresult")[0].style.display = "block";
                return;
            }

            document.getElementsByClassName("noresult")[0].style.display = "none";

            Array.from(products).forEach(function (raw) {
                let badge;
                switch (raw.status) {
                    case "Disponible":
                        badge = "success";
                        break;
                    case "Indisponible":
                        badge = "danger";
                        break;
                    default:
                        badge = "secondary";
                }

                var tableRawData =
                    '<tr>\
                        <td class="customer_name">' +
                    raw.nom +
                    "</td>\
                        <td>" +
                    raw.description +
                    "</td>\
                        <td class='presentation'>" +
                    raw.presentation +
                    "</td>\
                        <td>" +
                    raw.prix_achat +
                    " €</td>\
                        <td>" +
                    raw.prix_vente +
                    " €</td>\
                        <td>" +
                    raw.quantite_minimale +
                    "</td>\
                        <td><span class=\"badge bg-" +
                    badge +
                    "-subtle text-" +
                    badge +
                    ' status">' +
                    raw.status +
                    '</span></td>\
                        <td>\
                            <ul class="d-flex gap-2 list-unstyled mb-0">\
                                <li>\
                                    <a href="javascript:void(0);" class="btn btn-subtle-primary btn-icon btn-sm" onclick="ViewInvoice(this);"  data-view-id="' +
                    raw.id_produit +
                    '"><i class="ph-eye"></i></a>\
                                </li>\
                                <li>\
                                    <a href="javascript:void(0);" class="btn btn-subtle-secondary btn-icon btn-sm" onclick="EditInvoice(this);" data-edit-id="' +
                    raw.id_produit +
                    '"><i class="ph-pencil"></i></a>\
                                </li>\
                                <li>\
                                    <a href="#deleteRecordModal" data-bs-toggle="modal" class="btn btn-subtle-danger btn-icon btn-sm remove-item-btn" data-product-id="' +
                    raw.id_produit +
                    '"><i class="ph-trash"></i></a>\
                                </li>\
                            </ul>\
                        </td>\
                    </tr>';

                document.getElementById("invoice-list-data").innerHTML += tableRawData;
            });

            // Mettre à jour les informations de pagination
            updatePaginationInfo();
        }

        // Fonction pour mettre à jour les cartes de stock
// async function updateStockCounters() {
//     try {
//         const response = await fetch('/GESTIONNAIRE-ODSM/functions/fetchStockData.php');
//         if (!response.ok) {
//             throw new Error('Erreur réseau lors de la récupération des données de stock');
//         }
//         const data = await response.json();

//         // Mettre à jour les compteurs
//         const totalStockCounter = document.querySelector('.counter-value[data-target="8956"]');
//         const remainingStockCounter = document.querySelector('.counter-value[data-target="4519"]');

//         if (totalStockCounter && data.total_stock !== null) {
//             totalStockCounter.textContent = data.total_stock;
//         }
//         if (remainingStockCounter && data.remaining_stock !== null) {
//             remainingStockCounter.textContent = data.remaining_stock;
//         }

//     } catch (error) {
//         console.error('Échec de la mise à jour des compteurs de stock :', error);
//     }
// }

        // Initialiser l'affichage des produits
        displayProducts(Invoices);

        // Pagination List.js
        var perPage = 10;
        var options = {
            valueNames: ["customer_name", "description", "presentation", "prix_achat", "prix_vente", "quantite_minimale", "status"],
            page: perPage,
            pagination: true,
            plugins: [
                ListPagination({
                    left: 2,
                    right: 2,
                }),
            ],
        };

        // Init list
        var invoiceList = new List("invoiceList", options).on(
            "updated",
            function (list) {
                list.matchingItems.length == 0
                    ? (document.getElementsByClassName("noresult")[0].style.display = "block")
                    : (document.getElementsByClassName("noresult")[0].style.display = "none");
                var isFirst = list.i == 1;
                var isLast = list.i > list.matchingItems.length - list.page;
                document.querySelector(".pagination-prev.disabled")
                    ? document
                        .querySelector(".pagination-prev.disabled")
                        .classList.remove("disabled")
                    : "";
                document.querySelector(".pagination-next.disabled")
                    ? document
                        .querySelector(".pagination-next.disabled")
                        .classList.remove("disabled")
                    : "";
                if (isFirst) {
                    document.querySelector(".pagination-prev").classList.add("disabled");
                }
                if (isLast) {
                    document.querySelector(".pagination-next").classList.add("disabled");
                }
                if (list.matchingItems.length <= perPage) {
                    document.getElementById("pagination-element").style.display = "none";
                } else {
                    document.getElementById("pagination-element").style.display = "flex";
                }
                
                // Mettre à jour les informations de pagination
                updatePaginationInfo();
            }
        );

        // Fonction pour mettre à jour les informations de pagination
        function updatePaginationInfo() {
            const items = document.querySelectorAll('#invoice-list-data tr');
            const totalItems = items.length;
            const startItem = totalItems > 0 ? 1 : 0;
            const endItem = totalItems;
            
            document.getElementById('total-items').textContent = totalItems;
            document.getElementById('start-item').textContent = startItem;
            document.getElementById('end-item').textContent = endItem;
        }

        // Pagination boutons
        document
            .querySelector(".pagination-next")
            .addEventListener("click", function () {
                document.querySelector(".pagination.listjs-pagination")
                    ? document
                        .querySelector(".pagination.listjs-pagination")
                        .querySelector(".active") &&
                    document
                        .querySelector(".pagination.listjs-pagination")
                        .querySelector(".active").nextElementSibling != null
                        ? document
                            .querySelector(".pagination.listjs-pagination")
                            .querySelector(".active")
                            .nextElementSibling.children[0].click()
                        : ""
                    : "";
            });

        document
            .querySelector(".pagination-prev")
            .addEventListener("click", function () {
                document.querySelector(".pagination.listjs-pagination")
                    ? document
                        .querySelector(".pagination.listjs-pagination")
                        .querySelector(".active") &&
                    document
                        .querySelector(".pagination.listjs-pagination")
                        .querySelector(".active").previousSibling != null
                        ? document
                            .querySelector(".pagination.listjs-pagination")
                            .querySelector(".active")
                            .previousSibling.children[0].click()
                        : ""
                    : "";
            });

        // Recherche
       // Définir la liste des présentations possibles
var presentations = [
    'Boîte de 16',
    'Tube de 20',
    'Flacon 200ml',
    'Boîte de 20',
    'Boîte de 12',
    'Boîte de 14',
    'Boîte de 7',
    'Boîte de 90',
    'Flacon 150ml',
    'Tube 100g',
    'Boîte de 50',
    'Boîte de 20 assortis',
    'Unité'
];

// Fonction pour peupler le filtre de présentation
// Fonction pour peupler le filtre de présentation en récupérant les données depuis la base de données
function populatePresentationFilter() {
    fetch('/GESTIONNAIRE-ODSM/functions/fetchPresentations.php')
        .then(response => {
            if (!response.ok) {
                throw new Error('Erreur réseau lors de la récupération des présentations');
            }
            return response.json();
        })
        .then(presentations => {
            const filterElement = document.getElementById('presentation-filter');
            if (filterElement) {
                // Supprimer les options précédentes
                while (filterElement.options.length > 1) {
                    filterElement.remove(1);
                }

                // Ajouter les nouvelles options
                presentations.forEach(presentation => {
                    const option = document.createElement('option');
                    option.value = presentation;
                    option.textContent = presentation;
                    filterElement.appendChild(option);
                });
            }
        })
        .catch(error => {
            console.error('Échec de la récupération des présentations:', error);
        });
}

// Appeler la fonction au chargement pour remplir le filtre
document.addEventListener('DOMContentLoaded', populatePresentationFilter);

// Appeler la fonction au chargement pour remplir le filtre
document.addEventListener('DOMContentLoaded', populatePresentationFilter);


// Fonctions pour gérer la recherche et les filtres
function applyFilters() {
    const statusFilter = document.getElementById("status-filter") ? document.getElementById("status-filter").value : "";
    const presentationFilter = document.getElementById("presentation-filter") ? document.getElementById("presentation-filter").value : "";

    invoiceList.filter(function (item) {
        let statusMatch = true;
        let presentationMatch = true;
        
        if (statusFilter) {
            statusMatch = item.values().status === statusFilter;
        }
        
        if (presentationFilter) {
            presentationMatch = item.values().presentation === presentationFilter;
        }
        
        return statusMatch && presentationMatch;
    });
    
    // Après le filtrage, mettez à jour la pagination
    updatePaginationInfo();
}

// Événements
document.getElementById("search-input").addEventListener("input", function (e) {
    var searchValue = e.target.value;
    invoiceList.search(searchValue);
});

document.getElementById("status-filter").addEventListener("change", function (e) {
    applyFilters();
});

document.getElementById("presentation-filter").addEventListener("change", function (e) {
    applyFilters();
});

document.getElementById("reset-filters").addEventListener("click", function () {
    // Réinitialiser les champs
    document.getElementById("search-input").value = "";
    document.getElementById("status-filter").value = "";
    document.getElementById("presentation-filter").value = "";
    
    // Réinitialiser les filtres de List.js
    invoiceList.search();
    invoiceList.filter();
});

        // Suppression d'un produit
        document.getElementById("delete-record").addEventListener("click", function (e) {
            e.preventDefault();
            var productId = document
                .getElementById("delete-record")
                .getAttribute("data-product-id");
            var productIndex = Invoices.findIndex(function (product) {
                return product.id_produit == productId;
            });
            if (productIndex !== -1) {
                Invoices.splice(productIndex, 1);
                localStorage.setItem("invoices-list", JSON.stringify(Invoices));
                document.getElementById("deleteRecord-close").click();
                displayProducts(Invoices);
                Swal.fire({
                    title: "Supprimé !",
                    text: "Le produit a été supprimé.",
                    icon: "success",
                    showConfirmButton: false,
                    timer: 2000,
                    timerProgressBar: true,
                });
            }
        });

        // Stocker l'ID du produit à supprimer
        document.querySelectorAll(".remove-item-btn").forEach(function (btn) {
            btn.addEventListener("click", function (e) {
                var productId = e.currentTarget.getAttribute("data-product-id");
                document
                    .getElementById("delete-record")
                    .setAttribute("data-product-id", productId);
            });
        });

        // Fonction pour visualiser un produit
        function ViewInvoice(e) {
            var invoiceId = e.getAttribute("data-view-id");
            localStorage.setItem("view_invoice_id", invoiceId);
            window.location.href = "apps-invoices-details.php";
        }

        // Fonction pour modifier un produit
        function EditInvoice(e) {
            var invoiceId = e.getAttribute("data-edit-id");
            localStorage.setItem("edit_invoice_id", invoiceId);
            window.location.href = "apps-invoices-create.php";
        }

        // Initialiser les informations de pagination au chargement
        document.addEventListener('DOMContentLoaded', function() {
            updatePaginationInfo();
        });

    } catch (error) {
        console.error("Failed to initialize products:", error);
    }
}

// Appelez la fonction asynchrone pour démarrer le processus
initProducts();