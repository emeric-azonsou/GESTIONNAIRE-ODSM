<?php include 'partials/main.php'; ?>

<head>

    <?php
    $title = 'Create Invoice';
    include('partials/title-meta.php');
    ?>



    <!-- dropzone css -->
    <link rel="stylesheet" href="assets/libs/dropzone/dropzone.css" type="text/css">

    <!-- Sweet Alert css-->
    <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css">

    <?php include 'partials/head-css.php'; ?>

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
                    <?php includeFileWithVariables('partials/page-title.php', array('pagetitle' => 'Invoice', 'title' => 'Create Invoice')); ?>


                    <div class="row justify-content-center">
                        <div class="col-xxl-9">
                            <form class="needs-validation" novalidate id="invoice_form" autocomplete="off">
                                <div class="card overflow-hidden">
                                    <div class="invoice-effect-top position-absolute start-0">
                                        <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 764 182" width="764" height="182">
                                            <title>&lt;Group&gt;</title>
                                            <g id="&lt;Group&gt;">
                                                <g id="&lt;Group&gt;">
                                                    <path id="&lt;Path&gt;" style="fill: var(--tb-secondary-bg);" d="m-6.6 177.4c17.5 0.1 35.1 0 52.8-0.4 286.8-6.6 537.6-77.8 700.3-184.6h-753.1z" />
                                                </g>
                                                <g id="&lt;Group&gt;" style="opacity: .4">
                                                    <path id="&lt;Path&gt;" style="fill: var(--tb-light);" d="m-6.6 132.8c43.5 2.1 87.9 2.7 132.9 1.7 246.9-5.6 467.1-59.2 627.4-142.1h-760.3z" />
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="card-body card-body z-1 position-relative">
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <div class="mx-auto mb-3">
                                                    <input id="logo-img-file-input" type="file" class="logo-img-file-input d-none">
                                                    <label for="logo-img-file-input" class="d-block" tabindex="0">
                                                        <span class="">
                                                            <img src="assets/images/logo-dark.png" class="card-logo card-logo-image" alt="logo dark" height="28">
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-4 ms-auto">
                                                <div class="mb-2">
                                                    <input type="text" class="form-control" id="registrationNumber" maxlength="12" placeholder="Legal Registration No" required>
                                                    <div class="invalid-feedback">
                                                        Please enter a registration no, Ex., 012345678912
                                                    </div>
                                                </div>
                                                <div class="mb-2">
                                                    <input type="email" class="form-control" id="companyEmail" placeholder="Email Address" required>
                                                    <div class="invalid-feedback">
                                                        Please enter a valid email, Ex., example@gamil.com
                                                    </div>
                                                </div>
                                                <div class="mb-2">
                                                    <input type="text" class="form-control" id="companyWebsite" placeholder="Website" required>
                                                    <div class="invalid-feedback">
                                                        Please enter a website, Ex., www.example.com
                                                    </div>
                                                </div>
                                                <div class="mb-2">
                                                    <input type="text" class="form-control" data-plugin="cleave-phone" id="compnayContactno" placeholder="Contact No" required>
                                                    <div class="invalid-feedback">
                                                        Please enter a contact number
                                                    </div>
                                                </div>
                                                <div>
                                                    <input type="text" class="form-control" id="date-field" placeholder="Create Date">
                                                </div>
                                            </div>
                                        </div>
                                        <!--end row-->
                                        <div class="mt-4">
                                            <div class="row g-3">
                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="invoicenoInput">Invoice No</label>
                                                        <input type="text" class="form-control" id="invoicenoInput" placeholder="Invoice No" value="#TBS24301915" readonly="readonly">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="due-date-field">Date</label>
                                                        <input type="text" class="form-control" id="due-date-field" placeholder="Select due date">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="choices-payment-status">Payment Status</label>
                                                        <select class="form-control" data-choices data-choices-search-false id="choices-payment-status" required>
                                                            <option value="">Select Status</option>
                                                            <option value="Paid">Paid</option>
                                                            <option value="Pending">Pending</option>
                                                            <option value="Unpaid">Unpaid</option>
                                                            <option value="Refund">Refund</option>
                                                        </select>
                                                    </div>
                                                    <div>
                                                        <label class="form-label" for="totalamountInput">Total Amount</label>
                                                        <input type="text" class="form-control" id="totalamountInput" placeholder="$0.00" readonly>
                                                    </div>
                                                </div><!--end col-->

                                                <div class="col-lg-4">
                                                    <div>
                                                        <div>
                                                            <label for="billingName" class="form-label text-muted text-uppercase fw-semibold">Billing Address</label>
                                                        </div>
                                                        <div class="mb-2">
                                                            <input type="text" class="form-control" id="billingName" placeholder="Full Name" required>
                                                            <div class="invalid-feedback">
                                                                Please enter a full name
                                                            </div>
                                                        </div>
                                                        <div class="mb-2">
                                                            <textarea class="form-control" id="billingAddress" rows="3" placeholder="Address" required></textarea>
                                                            <div class="invalid-feedback">
                                                                Please enter a address
                                                            </div>
                                                        </div>
                                                        <div class="mb-2">
                                                            <input type="text" class="form-control" data-plugin="cleave-phone" id="billingPhoneno" placeholder="(123)456-7890" required>
                                                            <div class="invalid-feedback">
                                                                Please enter a phone number
                                                            </div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <input type="text" class="form-control" id="billingTaxno" placeholder="Tax Number" required>
                                                            <div class="invalid-feedback">
                                                                Please enter a tax number
                                                            </div>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="same" name="same" onchange="billingFunction()">
                                                            <label class="form-check-label" for="same">
                                                                Will your Billing and Shipping address same?
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div><!--end col-->

                                                <div class="col-lg-4">
                                                    <div>
                                                        <div>
                                                            <label for="shippingName" class="form-label text-muted text-uppercase fw-semibold">Shipping Address</label>
                                                        </div>
                                                        <div class="mb-2">
                                                            <input type="text" class="form-control" id="shippingName" placeholder="Full Name" required>
                                                            <div class="invalid-feedback">
                                                                Please enter a full name
                                                            </div>
                                                        </div>
                                                        <div class="mb-2">
                                                            <textarea class="form-control" id="shippingAddress" rows="3" placeholder="Address" required></textarea>
                                                            <div class="invalid-feedback">
                                                                Please enter a address
                                                            </div>
                                                        </div>
                                                        <div class="mb-2">
                                                            <input type="text" class="form-control" data-plugin="cleave-phone" id="shippingPhoneno" placeholder="(123)456-7890" required>
                                                            <div class="invalid-feedback">
                                                                Please enter a phone number
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <input type="text" class="form-control" id="shippingTaxno" placeholder="Tax Number" required>
                                                            <div class="invalid-feedback">
                                                                Please enter a tax number
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                        <div class="mt-4 pt-2">
                                            <div class="row">
                                                <div class="col-lg-4 col-sm-6">

                                                </div>
                                                <!--end col-->
                                                <div class="col-sm-6 ms-auto">
                                                    <div class="row">
                                                        <div class="col-lg-8">

                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                        </div>
                                        <!--end row-->
                                        <div class="table-responsive mt-4">
                                            <table class="invoice-table table table-borderless table-nowrap mb-0">
                                                <thead class="align-middle">
                                                    <tr class="table-light">
                                                        <th scope="col" style="width: 50px;">#</th>
                                                        <th scope="col">
                                                            Product Details
                                                        </th>
                                                        <th scope="col" style="width: 120px;">
                                                            <div class="d-flex currency-select input-light align-items-center">
                                                                Rate
                                                                <select class="form-selectborder-0 bg-light" data-choices data-choices-search-false id="choices-payment-currency" onchange="otherPayment()">
                                                                    <option value="$">($)</option>
                                                                    <option value="£">(£)</option>
                                                                    <option value="₹">(₹)</option>
                                                                    <option value="€">(€)</option>
                                                                </select>
                                                            </div>
                                                        </th>
                                                        <th scope="col" style="width: 120px;">Quantity</th>
                                                        <th scope="col" class="text-end" style="width: 150px;">Amount</th>
                                                        <th scope="col" class="text-end" style="width: 105px;"></th>
                                                    </tr>
                                                </thead>
                                                <tbody id="newlink">
                                                    <tr id="1" class="product-elem">
                                                        <th scope="row" class="product-id">1</th>
                                                        <td class="text-start">
                                                            <div class="mb-2">
                                                                <input type="text" class="form-control" id="productName-1" placeholder="Product Name" required>
                                                                <div class="invalid-feedback">
                                                                    Please enter a product name
                                                                </div>
                                                            </div>
                                                            <textarea class="form-control" id="productDetails-1" rows="2" placeholder="Product Details"></textarea>
                                                        </td>
                                                        <td>
                                                            <input type="number" class="form-control product-price" id="productRate-1" step="0.01" placeholder="0.00" required>
                                                            <div class="invalid-feedback">
                                                                Please enter a rate
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-step">
                                                                <button type="button" class='minus-btn'>–</button>
                                                                <input type="number" class="invoice-product-quantity" id="product-qty-1" value="0" readonly>
                                                                <button type="button" class='plus-btn'>+</button>
                                                            </div>
                                                        </td>
                                                        <td class="text-end">
                                                            <div>
                                                                <input type="text" class="form-control invoice-product-line-price" id="productPrice-1" placeholder="$0.00" readonly>
                                                            </div>
                                                        </td>
                                                        <td class="product-removal">
                                                            <a href="javascript:void(0)" class="btn btn-danger">Delete</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <tbody>
                                                    <tr id="newForm" style="display: none;">
                                                        <td class="d-none" colspan="5">
                                                            <p>Add New Form</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="5">
                                                            <a href="javascript:new_link()" id="add-item" class="btn btn-subtle-secondary fw-medium"><i class="ri-add-fill me-1 align-bottom"></i> Add Item</a>
                                                        </td>
                                                    </tr>
                                                    <tr class="border-top border-top-dashed mt-2">
                                                        <td colspan="3"></td>
                                                        <td colspan="2" class="p-0">
                                                            <table class="table table-borderless table-sm table-nowrap align-middle mb-0">
                                                                <tbody>
                                                                    <tr>
                                                                        <th scope="row">Sub Total</th>
                                                                        <td style="width:150px;">
                                                                            <input type="text" class="form-control" id="cart-subtotal" placeholder="$0.00" readonly>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Estimated Tax (18%)</th>
                                                                        <td>
                                                                            <input type="text" class="form-control" id="cart-tax" placeholder="$0.00" readonly>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Discount <small class="text-muted">(VIXON30)</small></th>
                                                                        <td>
                                                                            <input type="text" class="form-control" id="cart-discount" placeholder="$0.00" readonly>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Shipping Charge</th>
                                                                        <td>
                                                                            <input type="text" class="form-control" id="cart-shipping" placeholder="$0.00" readonly>
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="border-top border-top-dashed">
                                                                        <th scope="row">Total Amount</th>
                                                                        <td>
                                                                            <input type="text" class="form-control" id="cart-total" placeholder="$0.00" readonly>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <!--end table-->
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <!--end table-->
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-lg-4">
                                                <div class="mb-2">
                                                    <label for="choices-payment-type" class="form-label text-muted text-uppercase fw-semibold">Payment Details</label>
                                                    <select class="form-control" data-choices data-choices-search-false data-choices-removeItem id="choices-payment-type">
                                                        <option value="">Payment Method</option>
                                                        <option value="Mastercard">Mastercard</option>
                                                        <option value="Credit Card">Credit Card</option>
                                                        <option value="Visa">Visa</option>
                                                        <option value="Paypal">Paypal</option>
                                                    </select>
                                                </div>
                                                <div class="mb-2">
                                                    <input class="form-control" type="text" id="cardholderName" placeholder="Card Holder Name">
                                                </div>
                                                <div class="mb-2">
                                                    <input class="form-control" type="text" id="cardNumber" placeholder="xxxx xxxx xxxx xxxx">
                                                </div>
                                                <div>
                                                    <input class="form-control" type="text" id="amountTotalPay" placeholder="$0.00" readonly>
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                        <div class="mt-4 mb-4">
                                            <label for="exampleFormControlTextarea1" class="form-label text-muted text-uppercase fw-semibold">NOTES</label>
                                            <textarea class="form-control alert alert-danger" id="exampleFormControlTextarea1" placeholder="Notes" rows="2" required>All accounts are to be paid within 7 days from receipt of invoice. To be paid by cheque or credit card or direct payment online. If account is not paid within 7 days the credits details supplied as confirmation of work undertaken will be charged the agreed quoted fee noted above.</textarea>
                                        </div>
                                        <div>
                                            <div class="pt-2">
                                                <input type="text" class="form-control" id="successMsg" placeholder="Enter Postal Code" value="Congratulations on your recent purchase! It has been our pleasure to serve you, and we hope we see you again soon." required>
                                            </div>
                                            <div class="invoice-signature text-center">
                                                <div class="mb-3 mt-4">
                                                    <input id="sign-img-file-input" type="file" class="sign-img-file-input d-none">
                                                    <label for="sign-img-file-input" class="d-block" tabindex="0">
                                                        <span class="overflow-hidden mx-auto border border-dashed d-flex align-items-center justify-content-center rounded" style="height: 40px; width: 150px;">
                                                            <img src="assets/images/invoice-signature.svg" class="card-logo card-sign-image img-fluid" alt="logo light">
                                                        </span>
                                                    </label>
                                                </div>
                                                <h6 class="mb-0 mt-3">Authorized Sign</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="invoice-effect-top position-absolute end-0" style="transform: rotate(180deg); bottom: -80px;">
                                        <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 764 182" width="764" height="182">
                                            <title>&lt;Group&gt;</title>
                                            <g id="&lt;Group&gt;">
                                                <g id="&lt;Group&gt;">
                                                    <path id="&lt;Path&gt;" style="fill: var(--tb-secondary-bg);" d="m-6.6 177.4c17.5 0.1 35.1 0 52.8-0.4 286.8-6.6 537.6-77.8 700.3-184.6h-753.1z" />
                                                </g>
                                                <g id="&lt;Group&gt;" style="opacity: .4">
                                                    <path id="&lt;Path&gt;" style="fill: var(--tb-light);" d="m-6.6 132.8c43.5 2.1 87.9 2.7 132.9 1.7 246.9-5.6 467.1-59.2 627.4-142.1h-760.3z" />
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                                <div class="hstack gap-2 flex-wrap d-print-none my-4">
                                    <button type="submit" class="btn btn-success"><i class="ri-printer-line align-bottom me-1"></i> Save</button>
                                    <a href="javascript:void(0);" class="btn btn-primary"><i class="ri-download-2-line align-bottom me-1"></i> Download Invoice</a>
                                    <a href="javascript:void(0);" class="btn btn-danger"><i class="ri-send-plane-fill align-bottom me-1"></i> Send Invoice</a>
                                </div>
                            </form>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

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


    <!-- dropzone min -->
    <script src="assets/libs/dropzone/dropzone-min.js"></script>

    <!-- cleave.js -->
    <script src="assets/libs/cleave.js/cleave.min.js"></script>

    <!-- Sweet Alerts js -->
    <script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>

    <!--Invoice create init js-->
    <script src="assets/js/pages/invoice-create.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>
</body>

</html>