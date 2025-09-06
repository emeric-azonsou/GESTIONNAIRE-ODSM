/*
   Template Name: Vixon - Admin & Dashboard Template
   Author: Themesbrand
   Website: https://Themesbrand.com/
   Contact: Themesbrand@gmail.com
   File: invoice list init js
*/

var qty = 0;
var rate = 0;
var Invoices = [
    {
        invoice_no: '24301901',
        customer: 'Themesbrand',
        email: "themesbrand@vixon.com",
        createDate: "28 Mar, 2023",
        dueDate: "06 Apr, 2023",
        invoice_amount: 381.76,
        status: 'Paid',
    }
];

// Gestion du localStorage pour récupérer les données
if ((localStorage.getItem("invoices-list") === null) && (localStorage.getItem("new_data_object") === null)) {
    Invoices = Invoices;
} else if ((localStorage.getItem("invoices-list") === null) && (localStorage.getItem("new_data_object") !== null)) {
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

// Affichage des lignes du tableau
Array.from(Invoices).forEach(function (raw) {
    let badge;
    switch (raw.status) {
        case 'Paid':
            badge = "success";
            break;
        case 'Pending':
            badge = "warning";
            break;
        case 'Unpaid':
        case 'Refund':
            badge = "danger";
            break;
    }

    var tableRawData = '<tr>\
        <td class="customer_name">'+raw.customer+'</td>\
        <td class="create_date">'+raw.createDate+'</td>\
        <td class="due_date">'+raw.dueDate+'</td>\
        <td class="amount">$'+(raw.invoice_amount)+'</td>\
        <td class="status"><span class="badge bg-'+badge+'-subtle text-'+badge+'">'+raw.status+'</span></td>\
        <td>\
            <ul class="d-flex gap-2 list-unstyled mb-0">\
                <li>\
                    <a href="javascript:void(0);" class="btn btn-subtle-primary btn-icon btn-sm" onclick="ViewInvoice(this);"  data-view-id="'+raw.invoice_no+'"><i class="ph-eye"></i></a>\
                </li>\
                <li>\
                    <a href="javascript:void(0);" class="btn btn-subtle-secondary btn-icon btn-sm" onclick="EditInvoice(this);" data-edit-id="'+raw.invoice_no+'"><i class="ph-pencil"></i></a>\
                </li>\
                <li>\
                    <a href="#deleteRecordModal" data-bs-toggle="modal" class="btn btn-subtle-danger btn-icon btn-sm remove-item-btn"><i class="ph-trash"></i></a>\
                </li>\
            </ul>\
        </td>\
    </tr>';

    document.getElementById('invoice-list-data').innerHTML += tableRawData;
});

// Pagination List.js
var perPage = 10;
var options = {
    valueNames: [
        "customer_name",
        "create_date",
        "due_date",
        "amount",
        "status"
    ],
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
var invoiceList = new List("invoiceList", options).on("updated", function (list) {
    list.matchingItems.length == 0 ?
        (document.getElementsByClassName("noresult")[0].style.display = "block") :
        (document.getElementsByClassName("noresult")[0].style.display = "none");
    var isFirst = list.i == 1;
    var isLast = list.i > list.matchingItems.length - list.page;
    document.querySelector(".pagination-prev.disabled") ?
        document.querySelector(".pagination-prev.disabled").classList.remove("disabled") : "";
    document.querySelector(".pagination-next.disabled") ?
        document.querySelector(".pagination-next.disabled").classList.remove("disabled") : "";
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
});

// Pagination boutons
document.querySelector(".pagination-next").addEventListener("click", function () {
    document.querySelector(".pagination.listjs-pagination") ?
        document.querySelector(".pagination.listjs-pagination").querySelector(".active") && document.querySelector(".pagination.listjs-pagination").querySelector(".active").nextElementSibling != null ?
            document.querySelector(".pagination.listjs-pagination").querySelector(".active").nextElementSibling.children[0].click() : "" : "";
});

document.querySelector(".pagination-prev").addEventListener("click", function () {
    document.querySelector(".pagination.listjs-pagination") ?
        document.querySelector(".pagination.listjs-pagination").querySelector(".active") && document.querySelector(".pagination.listjs-pagination").querySelector(".active").previousSibling != null ?
            document.querySelector(".pagination.listjs-pagination").querySelector(".active").previousSibling.children[0].click() : "" : "";
});

// Actions
function ViewInvoice(data) {
    var invoice_no = data.getAttribute('data-view-id');
    localStorage.setItem("invoices-list", JSON.stringify(Invoices));
    localStorage.setItem("option", "view-invoice");
    localStorage.setItem("invoice_no", invoice_no);
    window.location.assign("apps-invoices-overview.php")
}

function EditInvoice(data) {
    var invoice_no = data.getAttribute('data-edit-id');
    localStorage.setItem("invoices-list", JSON.stringify(Invoices));
    localStorage.setItem("option", "edit-invoice");
    localStorage.setItem("invoice_no", invoice_no);
    window.location.assign("apps-invoices-create.php")
}

// Suppression individuelle
var removeBtns = document.getElementsByClassName("remove-item-btn");
Array.from(removeBtns).forEach(function (btn) {
    btn.addEventListener("click", function (e) {
        var itemId = e.target.closest("tr").children[1].innerText;
        var itemValues = invoiceList.get({
            customer_name: itemId,
        });

        Array.from(itemValues).forEach(function (x) {
            var deleteId = new DOMParser().parseFromString(x._values.customer_name, "text/html");
            var isElem = deleteId.body.firstElementChild;
            var isDeleteId = deleteId.body.firstElementChild.innerHTML;
            if (isDeleteId == itemId) {
                document.getElementById("delete-record").addEventListener("click", function () {
                    invoiceList.remove("customer_name", isElem.outerHTML);
                    document.getElementById("deleteRecord-close").click();
                });
            }
        });
    });
});

// Delete Multiple Records
function deleteMultiple() {
    ids_array = [];
    var items = document.getElementsByName('chk_child');
    for (i = 0; i < items.length; i++) {
        if (items[i].checked == true) {
            ids_array.push(items[i].value);
        }
    }
    
    if (typeof ids_array !== 'undefined' && ids_array.length > 0) {
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonClass: 'btn btn-primary w-xs me-2 mt-2',
            cancelButtonClass: 'btn btn-danger w-xs mt-2',
            confirmButtonText: "Yes, delete it!",
            buttonsStyling: false,
            showCloseButton: true
        }).then(function (result) {
            if (result.value) {
                for (i = 0; i < ids_array.length; i++) {
                    invoiceList.remove("customer_name", `<a href="apps-invoices-overview.php">${ids_array[i]}</a>`);
                }
                document.getElementById("remove-actions").classList.add("d-none");
                document.getElementById("checkAll").checked = false;
                Swal.fire({
                    title: 'Deleted!',
                    text: 'Your data has been deleted.',
                    icon: 'success',
                    confirmButtonClass: 'btn btn-info w-xs mt-2',
                    buttonsStyling: false
                });
            }
        });
    } else {
        Swal.fire({
            title: 'Please select at least one checkbox',
            confirmButtonClass: 'btn btn-info',
            buttonsStyling: false,
            showCloseButton: true
        });
    }
}