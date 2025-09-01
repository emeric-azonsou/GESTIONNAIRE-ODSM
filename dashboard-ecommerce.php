<?php include 'partials/main.php'; ?>

<head>

<?php includeFileWithVariables('partials/title-meta.php', array('title' => 'Ecommerce')); ?>


    <!--Swiper slider css-->
    <link href="assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css">

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
                <?php includeFileWithVariables('partials/page-title.php', array('pagetitle' => 'Dashboards', 'title' => 'Ecommerce')); ?>


                    <div class="row">
                        <div class="col-xxl-5">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="avatar-sm float-end">
                                                <div class="avatar-title bg-primary-subtle text-primary fs-3xl rounded"><i class="ti ti-wallet"></i></div>
                                            </div>
                                            <p class="fs-md text-uppercase text-muted mb-0">Total Revenue</p>

                                            <h4 class="my-4"><span class="counter-value" data-target="368.24">0</span>k </h4>
                                            <p class="text-success fs-sm mb-0"><i class="bi bi-arrow-up me-1"></i> 06.41% Last Month</p>
                                        </div>
                                    </div>
                                </div><!--end col-->
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="avatar-sm float-end">
                                                <div class="avatar-title bg-warning-subtle text-warning fs-3xl rounded"><i class="ti ti-building-store"></i></div>
                                            </div>
                                            <p class="fs-md text-uppercase text-muted mb-0">Total Orders</p>

                                            <h4 class="my-4"><span class="counter-value" data-target="01.47">0</span>sec </h4>
                                            <p class="text-success fs-sm mb-0"><i class="bi bi-arrow-up me-1"></i> 13% Last Month</p>
                                        </div>
                                    </div>
                                </div><!--end col-->
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="avatar-sm float-end">
                                                <div class="avatar-title bg-success-subtle text-success fs-3xl rounded"><i class="ti ti-users-group"></i></div>
                                            </div>
                                            <p class="fs-md text-uppercase text-muted mb-0">Total Customers</p>

                                            <h4 class="my-4"><span class="counter-value" data-target="1647">0</span></h4>
                                            <p class="text-danger fs-sm mb-0"><i class="bi bi-arrow-down me-1"></i> 07.26% Last Week</p>
                                        </div>
                                    </div>
                                </div><!--end col-->
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="avatar-sm float-end">
                                                <div class="avatar-title bg-secondary-subtle text-secondary fs-3xl rounded"><i class="ti ti-box-seam"></i></div>
                                            </div>
                                            <p class="fs-md text-uppercase text-muted mb-0">Products</p>

                                            <h4 class="my-4"><span class="counter-value" data-target="291.32">0</span>k </h4>
                                            <p class="text-success fs-sm mb-0"><i class="bi bi-arrow-up me-1"></i> 13% Last Month</p>
                                        </div>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div>

                        <div class="col-xxl-7">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header d-flex align-items-center">
                                            <h6 class="card-title flex-grow-1 mb-0">Monthly Profit</h6>
                                            <div class="flex-shrink-0">
                                                <button type="button" class="btn btn-subtle-info btn-sm"><i class="bi bi-file-earmark-text me-1 align-baseline"></i> Generate Reports</button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div id="monthly_profit" data-colors='["--tb-primary", "--tb-info", "--tb-warning", "--tb-success"]' class="apex-charts" dir="ltr"></div>
                                        </div>
                                    </div><!--end col-->
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header d-flex align-items-center">
                                            <h6 class="card-title flex-grow-1 mb-0">Product Overview</h6>
                                            <div class="dropdown flex-shrink-0">
                                                <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="text-muted fs-lg"><i class="ti ti-dots align-middle"></i></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Today</a>
                                                    <a class="dropdown-item" href="#">Last Week</a>
                                                    <a class="dropdown-item" href="#">Last Month</a>
                                                    <a class="dropdown-item" href="#">Current Year</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div id="column_stacked_chart" data-colors='["--tb-primary", "--tb-success"]' class="apex-charts" dir="ltr"></div>
                                        </div>
                                    </div><!--end col-->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-7">
                            <div class="card">
                                <div class="card-header d-flex align-items-center flex-wrap gap-3">
                                    <h5 class="card-title mb-0 flex-grow-1">Revenue Overview</h5>
                                    <div>
                                        <button type="button" class="btn btn-subtle-secondary btn-sm">
                                            ALL
                                        </button>
                                        <button type="button" class="btn btn-subtle-secondary btn-sm">
                                            1M
                                        </button>
                                        <button type="button" class="btn btn-subtle-secondary btn-sm">
                                            6M
                                        </button>
                                        <button type="button" class="btn btn-subtle-primary btn-sm">
                                            1Y
                                        </button>
                                    </div>
                                </div><!--end card-header-->
                                <div class="card-body ps-0">
                                    <div id="customer_impression_charts" data-colors='["--tb-secondary", "--tb-success", "--tb-danger"]' class="apex-charts" dir="ltr"></div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col-xl-5">
                            <div class="d-flex align-items-center mb-3">
                                <h6 class="card-title flex-grow-1 mb-0">Top Selling Products</h6>
                                <a href="#!" class="fs-sm flex-shrink-0">View All <i class="ti ti-arrow-narrow-right"></i></a>
                            </div>
                            <!-- Swiper -->
                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="card bg-body-secondary border-0">
                                            <div class="card-body p-2">
                                                <div class="p-3 bg-body">
                                                    <img src="assets/images/products/img-3.png" alt="" class="img-fluid px-3">
                                                </div>
                                                <div class="mt-2">
                                                    <span class="float-end fw-semibold clearfix">$25.65</span>
                                                    <h6><a href="#!">Smart Watch for Man's</a></h6>
                                                    <p class="text-muted fs-md mb-0"><a href="#!" class="text-reset text-decoration-underline">Watches</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card bg-body-secondary border-0">
                                            <div class="card-body p-2">
                                                <div class="p-3 bg-body">
                                                    <img src="assets/images/products/img-1.png" alt="" class="img-fluid px-3">
                                                </div>
                                                <div class="mt-2">
                                                    <span class="float-end fw-semibold clearfix">$97.62</span>
                                                    <h6 class="text-truncate"><a href="#!">World's most expensive t shirt</a></h6>
                                                    <p class="text-muted fs-md mb-0"><a href="#!" class="text-reset text-decoration-underline">Fashion & Clothing</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card bg-body-secondary border-0">
                                            <div class="card-body p-2">
                                                <div class="p-3 bg-body">
                                                    <img src="assets/images/products/img-10.png" alt="" class="img-fluid px-3">
                                                </div>
                                                <div class="mt-2">
                                                    <span class="float-end fw-semibold clearfix">$149.99</span>
                                                    <h6 class="text-truncate"><a href="#!">Like Style Women pink Fashion</a></h6>
                                                    <p class="text-muted fs-md mb-0"><a href="#!" class="text-reset text-decoration-underline">Fashion & Clothing</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card bg-body-secondary border-0">
                                            <div class="card-body p-2">
                                                <div class="p-3 bg-body">
                                                    <img src="assets/images/products/img-8.png" alt="" class="img-fluid px-3">
                                                </div>
                                                <div class="mt-2">
                                                    <span class="float-end fw-semibold clearfix">$164.74</span>
                                                    <h6 class="text-truncate"><a href="#!">Striped High Neck Casual Men Orange Sweater</a></h6>
                                                    <p class="text-muted fs-md mb-0"><a href="#!" class="text-reset text-decoration-underline">Fashion & Clothing</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Recent Orders</h4>
                                    <div class="flex-shrink-0">
                                        <div class="dropdown card-header-dropdown">
                                            <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="fw-semibold text-uppercase fs-sm">Sort by: </span><span class="text-muted">Today<i class="ti ti-chevron-down ms-1"></i></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Today</a>
                                                <a class="dropdown-item" href="#">Yesterday</a>
                                                <a class="dropdown-item" href="#">Last 7 Days</a>
                                                <a class="dropdown-item" href="#">Last 30 Days</a>
                                                <a class="dropdown-item" href="#">This Month</a>
                                                <a class="dropdown-item" href="#">Last Month</a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end card header -->
                            
                                <div class="card-body">
                                    <div class="table-responsive table-card mt-0">
                                        <table class="table table-centered align-middle table-nowrap mb-0" id="customerTable">
                                            <thead class="text-muted table-active">
                                                <tr>
                                                    <th scope="col" data-sort="orderId">Order ID</th>
                                                    <th scope="col" data-sort="product_name">Product Name</th>
                                                    <th scope="col">Customer Name</th>
                                                    <th scope="col">Amount</th>
                                                    <th scope="col">Order Date</th>
                                                    <th scope="col">Delivery Date</th>
                                                    <th scope="col">Vendor</th>
                                                    <th scope="col">Ratings</th>
                                                    <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <a href="#!" class="fw-medium link-primary">#TB010331</a>
                                                    </td>
                                                    <td>
                                                        <a href="#!" class="text-reset">Daybook Pro</a>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0 me-2">
                                                                <img src="assets/images/users/avatar-2.jpg" alt="" class="avatar-xxs rounded-circle">
                                                            </div>
                                                            <div class="flex-grow-1">Terry White</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        $658.00
                                                    </td>
                                                    <td>17 Dec, 2022</td>
                                                    <td>26 Jan, 2023</td>
                                                    <td>Brazil</td>
                                                    <td>4.5 <i class="bi bi-star-half ms-1 text-warning fs-12"></i></td>
                                                    <td>
                                                        <span class="badge bg-info-subtle text-info">New</span>
                                                    </td>
                                                </tr><!-- end tr -->
                                                <tr>
                                                    <td>
                                                        <a href="#!" class="fw-medium link-primary">#TB010332</a>
                                                    </td>
                                                    <td>
                                                        <a href="#!" class="text-reset">Borosil Paper Cup</a>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0 me-2">
                                                                <img src="assets/images/users/avatar-4.jpg" alt="" class="avatar-xxs rounded-circle">
                                                            </div>
                                                            <div class="flex-grow-1">Daniel Gonzalez</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        $345.00
                                                    </td>
                                                    <td>02 Jan, 2023</td>
                                                    <td>26 Jan, 2023</td>
                                                    <td>Namibia</td>
                                                    <td>4.8<i class="bi bi-star-half ms-1 text-warning fs-12"></i></td>
                                                    <td>
                                                        <span class="badge bg-danger-subtle text-danger">Out Of Delivery</span>
                                                    </td>
                                                </tr><!-- end tr -->
                                                <tr>
                                                    <td>
                                                        <a href="#!" class="fw-medium link-primary">#TB010333</a>
                                                    </td>
                                                    <td>
                                                        <a href="#!" class="text-reset">Stillbirth Helmet</a>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0 me-2">
                                                                <img src="assets/images/users/avatar-3.jpg" alt="" class="avatar-xxs rounded-circle">
                                                            </div>
                                                            <div class="flex-grow-1">Stephen Bird</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        $80.00
                                                    </td>
                                                    <td>20 Dec, 2022</td>
                                                    <td>29 Dec, 2022</td>
                                                    <td>USA</td>
                                                    <td>4.3 <i class="bi bi-star-half ms-1 text-warning fs-12"></i></td>
                                                    <td>
                                                        <span class="badge bg-success-subtle text-success">Delivered</span>
                                                    </td>
                                                </tr><!-- end tr -->
                                                <tr>
                                                    <td>
                                                        <a href="#!" class="fw-medium link-primary">#TB010334</a>
                                                    </td>
                                                    <td>
                                                        <a href="#!" class="text-reset">Bentwood Chair</a>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0 me-2">
                                                                <img src="assets/images/users/avatar-10.jpg" alt="" class="avatar-xxs rounded-circle">
                                                            </div>
                                                            <div class="flex-grow-1">Ashley Silva</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        $349.99
                                                    </td>
                                                    <td>31 Nov, 2022</td>
                                                    <td>13 Dec, 2022</td>
                                                    <td>Argentina</td>
                                                    <td>3.9 <i class="bi bi-star-half ms-1 text-warning fs-12"></i></td>
                                                    <td>
                                                        <span class="badge bg-warning-subtle text-warning">Pending</span>
                                                    </td>
                                                </tr><!-- end tr -->
                                                <tr>
                                                    <td>
                                                        <a href="#!" class="fw-medium link-primary">#TB010335</a>
                                                    </td>
                                                    <td>
                                                        <a href="#!" class="text-reset">Apple Headphone</a>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0 me-2">
                                                                <img src="assets/images/users/avatar-9.jpg" alt="" class="avatar-xxs rounded-circle">
                                                            </div>
                                                            <div class="flex-grow-1">Scott Wilson</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        $264.37
                                                    </td>
                                                    <td>23 Nov, 2022</td>
                                                    <td>03 Dec, 2022</td>
                                                    <td>Jersey</td>
                                                    <td>4.7 <i class="bi bi-star-half ms-1 text-warning fs-12"></i></td>
                                                    <td>
                                                        <span class="badge bg-primary-subtle text-primary">Shipping</span>
                                                    </td>
                                                </tr><!-- end tr -->
                                                <tr>
                                                    <td>
                                                        <a href="#!" class="fw-medium link-primary">#TB010336</a>
                                                    </td>
                                                    <td>
                                                        <a href="#!" class="text-reset">Smart Watch for Man's</a>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0 me-2">
                                                                <img src="assets/images/users/avatar-8.jpg" alt="" class="avatar-xxs rounded-circle">
                                                            </div>
                                                            <div class="flex-grow-1">Heather Jimenez</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        $741.98
                                                    </td>
                                                    <td>02 Nov, 2022</td>
                                                    <td>12 Nov, 2022</td>
                                                    <td>Spain</td>
                                                    <td>4.4 <i class="bi bi-star-half ms-1 text-warning fs-12"></i></td>
                                                    <td>
                                                        <span class="badge bg-success-subtle text-success">Delivered</span>
                                                    </td>
                                                </tr><!-- end tr -->
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="align-items-center mt-4 pt-2 justify-content-between d-flex">
                                        <div class="flex-shrink-0">
                                            <div class="text-muted">
                                                Showing <span class="fw-semibold">6</span> of <span class="fw-semibold">25</span> Results
                                            </div>
                                        </div>
                                        <ul class="pagination pagination-separated pagination-sm mb-0">
                                            <li class="page-item disabled">
                                                <a href="#" class="page-link">←</a>
                                            </li>
                                            <li class="page-item">
                                                <a href="#" class="page-link">1</a>
                                            </li>
                                            <li class="page-item active">
                                                <a href="#" class="page-link">2</a>
                                            </li>
                                            <li class="page-item">
                                                <a href="#" class="page-link">3</a>
                                            </li>
                                            <li class="page-item">
                                                <a href="#" class="page-link">→</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xxl-3 col-lg-6">
                            <div class="card card-height-100">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">New Customers</h4>
                                    <a href="#!" class="flex-shrink-0 fs-md">View All <i class="ri-arrow-right-line align-bottom ms-1"></i></a>
                                </div><!-- end card header -->
                        
                                <div data-simplebar style="max-height: 380px;">
                                    <div class="p-3 border-bottom border-bottom-dashed">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="flex-shrink-0">
                                                <img src="assets/images/users/avatar-2.jpg" alt="" class="rounded avatar-sm">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Tommy Carey</h6>
                                                <p class="fs-13 text-muted mb-0">02 Jan, 2023</p>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <a href="mailto:careytommy@toner.com" class="btn btn-icon btn-sm btn-subtle-info"><i class="ph-envelope"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3 border-bottom border-bottom-dashed">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="flex-shrink-0">
                                                <img src="assets/images/users/avatar-1.jpg" alt="" class="rounded avatar-sm">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Cassius Brock</h6>
                                                <p class="fs-13 text-muted mb-0">24 Nov, 2022</p>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <a href="mailto:brock@toner.com" class="btn btn-icon btn-sm btn-subtle-info"><i class="ph-envelope"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3 border-bottom border-bottom-dashed">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="flex-shrink-0">
                                                <img src="assets/images/users/avatar-3.jpg" alt="" class="rounded avatar-sm">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Gabrielle Holden</h6>
                                                <p class="fs-13 text-muted mb-0">17 Nav, 2022</p>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <a href="mailto:gabrielle@toner.com" class="btn btn-icon btn-sm btn-subtle-info"><i class="ph-envelope"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3 border-bottom border-bottom-dashed">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="flex-shrink-0">
                                                <img src="assets/images/users/avatar-5.jpg" alt="" class="rounded avatar-sm">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Alfred Hurst</h6>
                                                <p class="fs-13 text-muted mb-0">18 Dec, 2021</p>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <a href="mailto:" class="btn btn-icon btn-sm btn-subtle-info"><i class="ph-envelope"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3 border-bottom border-bottom-dashed">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="flex-shrink-0">
                                                <img src="assets/images/users/avatar-6.jpg" alt="" class="rounded avatar-sm">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Kristina Hooper</h6>
                                                <p class="fs-13 text-muted mb-0">04 Oct, 2022</p>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <a href="mailto:alfredH@toner.com" class="btn btn-icon btn-sm btn-subtle-info"><i class="ph-envelope"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3 border-bottom border-bottom-dashed">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="flex-shrink-0">
                                                <img src="assets/images/users/avatar-8.jpg" alt="" class="rounded avatar-sm">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Jacques Leon</h6>
                                                <p class="fs-13 text-muted mb-0">02 Jan, 2023</p>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <a href="mailto:jacques@toner.com" class="btn btn-icon btn-sm btn-subtle-info"><i class="ph-envelope"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3 border-bottom border-bottom-dashed">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="flex-shrink-0">
                                                <img src="assets/images/users/avatar-7.jpg" alt="" class="rounded avatar-sm">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Edward Rogers</h6>
                                                <p class="fs-13 mb-0">25 Nov, 2022</p>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <a href="mailto:edwardro@toner.com" class="btn btn-icon btn-sm btn-subtle-info"><i class="ph-envelope"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3 border-bottom border-bottom-dashed">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="flex-shrink-0">
                                                <img src="assets/images/users/avatar-10.jpg" alt="" class="rounded avatar-sm">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Alina Holland</h6>
                                                <p class="fs-13 mb-0">11 Jan, 2023</p>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <a href="mailto:hollandalina@toner.com" class="btn btn-icon btn-sm btn-subtle-info"><i class="ph-envelope"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- .card-->
                        </div> <!-- .col-->
                        <div class="col-xxl-3 col-lg-6">
                            <div class="card card-height-100">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Top Products</h4>
                                    <div class="flex-shrink-0">
                                        <div class="dropdown card-header-dropdown">
                                            <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="text-muted">Report<i class="ti ti-chevron-down ms-1"></i></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Download Report</a>
                                                <a class="dropdown-item" href="#">Export</a>
                                                <a class="dropdown-item" href="#">Import</a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end card header -->
                        
                                <div class="card-body">
                                    <div class="mb-4">
                                        <span class="badge bg-dark-subtle text-body float-end">90%</span>
                                        <h6 class="mb-2">Fashion & Clothing</h6>
                                        <div class="progress progress-sm" role="progressbar" aria-label="Success example" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg-success bg-opacity-50 progress-bar-striped progress-bar-animated" style="width: 90%"></div>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <span class="badge bg-dark-subtle text-body float-end">64%</span>
                                        <h6 class="mb-2">Lighting</h6>
                                        <div class="progress progress-sm" role="progressbar" aria-label="Success example" aria-valuenow="64" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg-warning bg-opacity-50 progress-bar-striped progress-bar-animated" style="width: 64%"></div>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <span class="badge bg-dark-subtle text-body float-end">77%</span>
                                        <h6 class="mb-2">Footwear</h6>
                                        <div class="progress progress-sm" role="progressbar" aria-label="Success example" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg-danger bg-opacity-50 progress-bar-striped progress-bar-animated" style="width: 77%"></div>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <span class="badge bg-dark-subtle text-body float-end">53%</span>
                                        <h6 class="mb-2">Electronics</h6>
                                        <div class="progress progress-sm" role="progressbar" aria-label="Success example" aria-valuenow="53" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg-info bg-opacity-50 progress-bar-striped progress-bar-animated" style="width: 53%"></div>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <span class="badge bg-dark-subtle text-body float-end">81%</span>
                                        <h6 class="mb-2">Beauty & Personal Care</h6>
                                        <div class="progress progress-sm" role="progressbar" aria-label="Success example" aria-valuenow="81" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg-primary bg-opacity-50 progress-bar-striped progress-bar-animated" style="width: 81%"></div>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <span class="badge bg-dark-subtle text-body float-end">96%</span>
                                        <h6 class="mb-2">Books</h6>
                                        <div class="progress progress-sm" role="progressbar" aria-label="Success example" aria-valuenow="96" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg-secondary bg-opacity-50 progress-bar-striped progress-bar-animated" style="width: 96%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="badge bg-dark-subtle text-body float-end">69%</span>
                                        <h6 class="mb-2">Furniture</h6>
                                        <div class="progress progress-sm" role="progressbar" aria-label="Success example" aria-valuenow="69" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg-success bg-opacity-50 progress-bar-striped progress-bar-animated" style="width: 69%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- .card-->
                        </div> <!-- .col-->
                        <div class="col-xxl-6">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Stock Report</h4>
                                    <div class="flex-shrink-0"> 
                                        <a href="#!" class="btn btn-subtle-info btn-sm">
                                            <i class="ri-file-list-3-line align-middle"></i> Generate Report
                                        </a>
                                    </div>
                                </div><!-- end card header -->
                            
                                <div class="card-body">
                                    <div class="table-responsive table-card mt-0">
                                        <table class="table table-borderless table-centered align-middle table-nowrap mb-0">
                                            <thead class="text-muted table-active">
                                                <tr>
                                                    <th scope="col">Product ID</th>
                                                    <th scope="col">Product Name</th>
                                                    <th scope="col">Updated Date</th>
                                                    <th scope="col">Amount</th>
                                                    <th scope="col">Stock Status</th>
                                                    <th scope="col">Quantity</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <a href="#!" class="fw-medium link-primary">#00541</a>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0 me-2">
                                                                <img src="assets/images/products/img-1.png" alt="" class="avatar-xs rounded-circle">
                                                            </div>
                                                            <div class="flex-grow-1"><a href="#!" class="text-reset">Rockerz Ear Bluetooth Headphones</a></div>
                                                        </div>
                                                    </td>
                                                    <td>16 Aug, 2022</td>
                                                    <td>
                                                        <span class="text-secondary">$658.00</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success-subtle text-success">In Stock</span>
                                                    </td>
                                                    <td>15 PCS</td>
                                                </tr><!-- end tr -->
                                                <tr>
                                                    <td>
                                                        <a href="#!" class="fw-medium link-primary">#07484</a>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0 me-2">
                                                                <img src="assets/images/products/img-5.png" alt="" class="avatar-xs rounded-circle">
                                                            </div>
                                                            <div class="flex-grow-1"><a href="#!" class="text-reset">United Colors Of Benetton</a></div>
                                                        </div>
                                                    </td>
                                                    <td>05 Sep, 2022</td>
                                                    <td>
                                                        <span class="text-secondary">$145.00</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-warning-subtle text-warning">Low Stock</span>
                                                    </td>
                                                    <td>05 PCS</td>
                                                </tr><!-- end tr -->
                                                <tr>
                                                    <td>
                                                        <a href="#!" class="fw-medium link-primary">#01641</a>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0 me-2">
                                                                <img src="assets/images/products/img-4.png" alt="" class="avatar-xs rounded-circle">
                                                            </div>
                                                            <div class="flex-grow-1"><a href="#!" class="text-reset">Striped Baseball Cap</a></div>
                                                        </div>
                                                    </td>
                                                    <td>28 Sep, 2022</td>
                                                    <td>
                                                        <span class="text-secondary">$215.00</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-danger-subtle text-danger">Out of Stock</span>
                                                    </td>
                                                    <td>0 PCS</td>
                                                </tr><!-- end tr -->
                                                <tr>
                                                    <td>
                                                        <a href="#!" class="fw-medium link-primary">#00065</a>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0 me-2">
                                                                <img src="assets/images/products/img-3.png" alt="" class="avatar-xs rounded-circle">
                                                            </div>
                                                            <div class="flex-grow-1"><a href="#!" class="text-reset">350 ml Glass Grocery Container</a></div>
                                                        </div>
                                                    </td>
                                                    <td>02 Oct, 2022</td>
                                                    <td>
                                                        <span class="text-secondary">$79.99</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success-subtle text-success">In Stock</span>
                                                    </td>
                                                    <td>37 PCS</td>
                                                </tr><!-- end tr -->
                                                <tr>
                                                    <td>
                                                        <a href="#!" class="fw-medium link-primary">#00156</a>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0 me-2">
                                                                <img src="assets/images/products/img-2.png" alt="" class="avatar-xs rounded-circle">
                                                            </div>
                                                            <div class="flex-grow-1"><a href="#!" class="text-reset">One Seater Sofa</a></div>
                                                        </div>
                                                    </td>
                                                    <td>11 Oct, 2022</td>
                                                    <td>
                                                        <span class="text-secondary">$264.99</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success-subtle text-success">In Stock</span>
                                                    </td>
                                                    <td>23 PCS</td>
                                                </tr><!-- end tr -->
                                                <tr>
                                                    <td>
                                                        <a href="#!" class="fw-medium link-primary">#09102</a>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0 me-2">
                                                                <img src="assets/images/products/img-8.png" alt="" class="avatar-xs rounded-circle">
                                                            </div>
                                                            <div class="flex-grow-1"><a href="#!" class="text-reset">Men's Running Shoes Active Grip</a></div>
                                                        </div>
                                                    </td>
                                                    <td>19 Nov, 2022</td>
                                                    <td>
                                                        <span class="text-secondary">$264.99</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-warning-subtle text-warning">Low Stock</span>
                                                    </td>
                                                    <td>23 PCS</td>
                                                </tr><!-- end tr -->
                                            </tbody><!-- end tbody -->
                                        </table><!-- end table -->
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



        <?php include 'partials/customizer.php'; ?>

 <?php include 'partials/vendor-scripts.php'; ?>


    <!-- apexcharts -->
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

    <script src="assets/libs/list.js/list.min.js"></script>

    <!--Swiper slider js-->
    <script src="assets/libs/swiper/swiper-bundle.min.js"></script>

    <!-- dashboard-ecommerce init js -->
    <script src="assets/js/pages/dashboard-ecommerce.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>
</body>

</html>