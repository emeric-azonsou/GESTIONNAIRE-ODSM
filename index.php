<?php include 'partials/main.php'; ?>

<head>
<?php includeFileWithVariables('partials/title-meta.php', array('title' => 'Dashboard')); ?>

    <?php include 'partials/head-css.php'; ?>


</head>

<body class="dashboard-topbar-wrapper">

    <!-- Begin page -->
    <div id="layout-wrapper">
    <?php include 'partials/menu.php'; ?>
  

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-xl-8">
                            <div>
                                <div class="row gy-4">
                                    <div class="col-sm-4 border-end-sm">
                                        <div class="text-center">
                                            <p class="text-uppercase fw-medium text-muted text-truncate fs-md">Total Sessions</p>
                                            <h4 class="fw-semibold mb-3"><span class="counter-value" data-target="476.32">0</span>k </h4>
                                            <div class="d-flex align-items-center justify-content-center gap-2">
                                                <h5 class="text-success fs-xs mb-0">
                                                    <i class="ri-arrow-right-up-line fs-sm align-middle"></i> +19.07 %
                                                </h5>
                                                <p class="text-muted mb-0">than last week</p>
                                            </div>
                                        </div><!-- end card -->
                                    </div>
                                    <div class="col-sm-4 border-end-sm">
                                        <div class="text-center">
                                            <p class="text-uppercase fw-medium text-muted text-truncate fs-md">Avg. Visit Duration</p>
                                            <h4 class="fw-semibold mb-3"><span class="counter-value" data-target="1.57">0</span>s </h4>
                                            <div class="d-flex align-items-center justify-content-center gap-2">
                                                <h5 class="text-success fs-xs mb-0">
                                                    <i class="ri-arrow-right-up-line fs-sm align-middle"></i> +19.07 %
                                                </h5>
                                                <p class="text-muted mb-0">than last week</p>
                                            </div>
                                        </div><!-- end card -->
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <p class="text-uppercase fw-medium text-muted text-truncate fs-md">Impressions</p>
                                            <h4 class="fw-semibold mb-3"><span class="counter-value" data-target="2368">0</span>k </h4>
                                            <div class="d-flex align-items-center justify-content-center gap-2">
                                                <h5 class="text-success fs-xs mb-0">
                                                    <i class="ri-arrow-right-up-line fs-sm align-middle"></i> +19.07 %
                                                </h5>
                                                <p class="text-muted mb-0">than last week</p>
                                            </div>
                                        </div><!-- end card -->
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <div class="mx-n4">
                                        <div id="performance_overview" data-colors='["--tb-primary", "--tb-warning"]' class="apex-charts" dir="ltr"></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="card">
                                            <div class="card-body p-3 d-flex gap-3">
                                                <div class="flex-shrink-0">
                                                    <div class="avatar-sm">
                                                        <div class="avatar-title bg-body-secondary text-secondary rounded fs-3xl">
                                                            <i class="ti ti-brand-facebook"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <p class="text-muted mb-2">Facebook <span class="badge bg-success-subtle text-success"><i class="ti ti-arrow-up-right"></i> 2.59%</span></p>
                                                    <h6 class="fw-semibold mb-0"><span class="counter-value" data-target="354620">0</span>k <small class="text-muted fw-normal">Visitors</small></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="card">
                                            <div class="card-body p-3 d-flex gap-3">
                                                <div class="flex-shrink-0">
                                                    <div class="avatar-sm">
                                                        <div class="avatar-title bg-body-secondary text-danger rounded fs-3xl">
                                                            <i class="ti ti-brand-instagram"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <p class="text-muted mb-2">Instagram <span class="badge bg-success-subtle text-success"><i class="ti ti-arrow-up-right"></i> 4.05%</span></p>
                                                    <h6 class="fw-semibold mb-0"><span class="counter-value" data-target="245631">0</span>k <small class="text-muted fw-normal">Visitors</small></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="card">
                                            <div class="card-body p-3 d-flex gap-3">
                                                <div class="flex-shrink-0">
                                                    <div class="avatar-sm">
                                                        <div class="avatar-title bg-body-secondary text-info rounded fs-3xl">
                                                            <i class="ti ti-brand-twitter"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <p class="text-muted mb-2">Twitter <span class="badge bg-danger-subtle text-danger"><i class="ti ti-arrow-down-right"></i> 1.67%</span></p>
                                                    <h6 class="fw-semibold mb-0"><span class="counter-value" data-target="154832">0</span>k <small class="text-muted fw-normal">Visitors</small></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="card">
                                            <div class="card-body p-3 d-flex gap-3">
                                                <div class="flex-shrink-0">
                                                    <div class="avatar-sm">
                                                        <div class="avatar-title bg-body-secondary text-body rounded fs-3xl">
                                                            <i class="ti ti-world"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <p class="text-muted mb-2">Website <span class="badge bg-success-subtle text-success"><i class="ti ti-arrow-up-right"></i> 3.12%</span></p>
                                                    <h6 class="fw-semibold mb-0"><span class="counter-value" data-target="489012">0</span>k <small class="text-muted fw-normal">Visitors</small></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card" id="contactList">
                                            <div class="card-header align-items-center d-flex">
                                                <h4 class="card-title mb-0 flex-grow-1">Campaign performance by source</h4>
                                                <div class="flex-shrink-0">
                                                    <div class="dropdown card-header-dropdown sortble-dropdown">
                                                        <a class="text-reset dropdown-btn fs-sm" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <span class="fw-semibold text-uppercase">Sort by:
                                                            </span><span class="text-muted dropdown-title">Source</span> <i class="ti ti-chevron-down ms-1"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <button class="dropdown-item sort" data-sort="source">Source</button>
                                                            <button class="dropdown-item sort" data-sort="impression">Impression</button>
                                                            <button class="dropdown-item sort" data-sort="cost">Cost</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="table-responsive table-card mt-0">
                                                    <table class="table table-borderless table-centered align-middle table-nowrap mb-0">
                                                        <thead class="text-muted table-light">
                                                            <tr>
                                                                <th scope="col" class="sort cursor-pointer" data-sort="source">Source</th>
                                                                <th scope="col" class="sort cursor-pointer" data-sort="impression">Impression</th>
                                                                <th scope="col" class="sort cursor-pointer" data-sort="clicks">Clicks</th>
                                                                <th scope="col" class="sort cursor-pointer" data-sort="cost">Cost</th>
                                                                <th scope="col" class="sort cursor-pointer" data-sort="conversation">Conversion</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="list">
                                                            <tr>
                                                                <td class="source">
                                                                    Facebook Ads
                                                                </td>
                                                                <td class="impression">
                                                                    165,148,541
                                                                </td>
                                                                <td class="clicks">
                                                                    124,587,415
                                                                </td>
                                                                <td class="cost">$498,340</td>
                                                                <td class="conversation">
                                                                    415,260
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="source">
                                                                    Instagram Ads
                                                                </td>
                                                                <td class="impression">
                                                                    324,159,321
                                                                </td>
                                                                <td class="clicks">
                                                                    257,951,346
                                                                </td>
                                                                <td class="cost">$743,654</td>
                                                                <td class="conversation">
                                                                    247,254,410
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="source">
                                                                    Youtube Ads
                                                                </td>
                                                                <td class="impression">
                                                                    954,321,875
                                                                </td>
                                                                <td class="clicks">
                                                                    738,192,465
                                                                </td>
                                                                <td class="cost">$987,623,145</td>
                                                                <td class="conversation">
                                                                    632,184,952
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="source">
                                                                    Google Ads
                                                                </td>
                                                                <td class="impression">
                                                                    21,154,309,318
                                                                </td>
                                                                <td class="clicks">
                                                                    12,018,992,301
                                                                </td>
                                                                <td class="cost">$1,543,243,019</td>
                                                                <td class="conversation">
                                                                    4,309,318,287
                                                                </td>
                                                            </tr>
                                                        </tbody><!-- end tbody -->
                                                    </table><!-- end table -->
                                                    <div class="noresult" style="display: none">
                                                        <div class="text-center">
                                                            <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#405189,secondary:#0ab39c" style="width:75px;height:75px"></lord-icon>
                                                            <h5 class="mt-2">Sorry! No Result Found</h5>
                                                            <p class="text-muted mb-0">We've searched more than 150+ transactions We did not find any transactions for you search.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--end row-->

                                <div class="row">
                                    <div class="col-xxl-3">
                                        <div class="card card-height-100">
                                            <div class="card-header">
                                                <h6 class="card-title mb-0">Top Session</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="mx-n3" data-simplebar style="max-height: 478px;">
                                                    <div class="d-flex gap-2 mb-3">
                                                        <div class="avatar-sm flex-shrink-0">
                                                            <div class="avatar-title bg-body-secondary rounded">
                                                                <img src="assets/images/brands/chrome.png" alt="" class="avatar-xxs">
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6>12.74k <small class="text-muted fw-normal">/Session</small></h6>
                                                            <p class="text-muted fs-md mb-0">Chrome</p>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <div class="dropdown">
                                                                <button class="btn shadow-none btn-sm btn-icon" type="button" data-bs-toggle="dropdown">
                                                                    <i class="ti ti-dots fs-md"></i>
                                                                </button>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex gap-2 mb-3">
                                                        <div class="avatar-sm flex-shrink-0">
                                                            <div class="avatar-title bg-body-secondary rounded">
                                                                <img src="assets/images/brands/firefox.png" alt="" class="avatar-xxs">
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6>9.04k <small class="text-muted fw-normal">/Session</small></h6>
                                                            <p class="text-muted fs-md mb-0">Firefox</p>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <div class="dropdown">
                                                                <button class="btn shadow-none btn-sm btn-icon" type="button" data-bs-toggle="dropdown">
                                                                    <i class="ti ti-dots fs-md"></i>
                                                                </button>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex gap-2 mb-3">
                                                        <div class="avatar-sm flex-shrink-0">
                                                            <div class="avatar-title bg-body-secondary rounded">
                                                                <img src="assets/images/brands/cloud-computing.png" alt="" class="avatar-xxs">
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6>6.3k <small class="text-muted fw-normal">/Session</small></h6>
                                                            <p class="text-muted fs-md mb-0">Google Cloud</p>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <div class="dropdown">
                                                                <button class="btn shadow-none btn-sm btn-icon" type="button" data-bs-toggle="dropdown">
                                                                    <i class="ti ti-dots fs-md"></i>
                                                                </button>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex gap-2 mb-3">
                                                        <div class="avatar-sm flex-shrink-0">
                                                            <div class="avatar-title bg-body-secondary rounded">
                                                                <img src="assets/images/brands/safari.png" alt="" class="avatar-xxs">
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6>9.36k <small class="text-muted fw-normal">/Session</small></h6>
                                                            <p class="text-muted fs-md mb-0">Safari</p>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <div class="dropdown">
                                                                <button class="btn shadow-none btn-sm btn-icon" type="button" data-bs-toggle="dropdown">
                                                                    <i class="ti ti-dots fs-md"></i>
                                                                </button>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex gap-2 mb-3">
                                                        <div class="avatar-sm flex-shrink-0">
                                                            <div class="avatar-title bg-body-secondary rounded">
                                                                <img src="assets/images/brands/opera.png" alt="" class="avatar-xxs">
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6>9.14k <small class="text-muted fw-normal">/Session</small></h6>
                                                            <p class="text-muted fs-md mb-0">Opera</p>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <div class="dropdown">
                                                                <button class="btn shadow-none btn-sm btn-icon" type="button" data-bs-toggle="dropdown">
                                                                    <i class="ti ti-dots fs-md"></i>
                                                                </button>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex gap-2 mb-3">
                                                        <div class="avatar-sm flex-shrink-0">
                                                            <div class="avatar-title bg-body-secondary rounded">
                                                                <img src="assets/images/brands/microsoft.png" alt="" class="avatar-xxs">
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6>7.48k <small class="text-muted fw-normal">/Session</small></h6>
                                                            <p class="text-muted fs-md mb-0">Microsoft Edge</p>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <div class="dropdown">
                                                                <button class="btn shadow-none btn-sm btn-icon" type="button" data-bs-toggle="dropdown">
                                                                    <i class="ti ti-dots fs-md"></i>
                                                                </button>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex gap-2">
                                                        <div class="avatar-sm flex-shrink-0">
                                                            <div class="avatar-title bg-body-secondary rounded">
                                                                <img src="assets/images/brands/chromium.png" alt="" class="avatar-xxs">
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6>11.63k <small class="text-muted fw-normal">/Session</small></h6>
                                                            <p class="text-muted fs-md mb-0">Chromium</p>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <div class="dropdown">
                                                                <button class="btn shadow-none btn-sm btn-icon" type="button" data-bs-toggle="dropdown">
                                                                    <i class="ti ti-dots fs-md"></i>
                                                                </button>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-xxl-9">
                                        <div class="card">
                                            <div class="card-header d-flex align-items-center">
                                                <h6 class="card-title mb-0 flex-grow-1">Session Overview</h6>
                                                <div class="flex-shrink-0">
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
                                            </div>
                                            <div class="card-body">
                                                <div id="balance_overview" data-colors='["--tb-primary", "--tb-success","--tb-info"]' class="apex-charts ms-n3" dir="ltr"></div>
                                                <div class="table-responsive table-card mb-0 mt-3">
                                                    <table class="table table-sm table-borderless align-middle text-center mb-0 table-nowrap">
                                                        <tbody>
                                                            <tr>
                                                                <td class="text-start"><i class="ti ti-point-filled align-baseline me-1 text-primary"></i> Total Revenue</td>
                                                                <th>$795.69k</th>
                                                                <td class="text-muted"><span class="text-success"><i class="bi bi-caret-up-fill align-baseline me-1"></i> 6.19%</span> than last years</td>
                                                                <td class="text-end" style="width: 150px;"><a href="#!" class="icon-link icon-link-hover text-decoration-underline link-underline link-underline-opacity-0 link-underline-opacity-75-hover">View All <i class="bi bi-arrow-right"></i></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-start"><i class="ti ti-point-filled align-baseline me-1 text-success"></i> Total Expenses</td>
                                                                <th>$415.37k</th>
                                                                <td class="text-muted"><span class="text-success"><i class="bi bi-caret-up-fill align-baseline me-1"></i> 3.62%</span> than last years</td>
                                                                <td class="text-end" style="width: 150px;"><a href="#!" class="icon-link icon-link-hover text-decoration-underline link-underline link-underline-opacity-0 link-underline-opacity-75-hover">View All <i class="bi bi-arrow-right"></i></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-start"><i class="ti ti-point-filled align-baseline me-1 text-info"></i> Profit Ratio </td>
                                                                <th>3.6%</th>
                                                                <td class="text-muted"><span class="text-danger"><i class="bi bi-caret-down-fill align-baseline me-1"></i> 1.47%</span> than last years</td>
                                                                <td class="text-end" style="width: 150px;"><a href="#!" class="icon-link icon-link-hover text-decoration-underline link-underline link-underline-opacity-0 link-underline-opacity-75-hover">View All <i class="bi bi-arrow-right"></i></a></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col-xl-4">
                            <div class="d-none d-xl-block">
                                <div class="card bg-success-subtle shadow-none rounded-0 border-0 dashboard-widgets-wrapper">
                                    <div class="card-body text-center mt-5 pt-5">
                                        <h5>Welcome to Alexandra</h5>
                                        <p class="text-muted fs-md  ">There is the latests update for the last 7 days, check now</p>
                                        <img src="assets/images/dashboard.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="mt-xl-5 pt-xl-4">
                                <div class="card card-height-100">
                                    <div class="card-header align-items-center d-flex">
                                        <h6 class="card-title mb-0 flex-grow-1">Realized Rate</h6>
                                        <div class="dropdown card-header-dropdown flex-shrink-0">
                                            <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="bi bi-three-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Current Years</a>
                                                <a class="dropdown-item" href="#">Last Years</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div id="realized_rate" data-colors='["--tb-warning", "--tb-success", "--tb-danger"]' class="apex-charts" dir="ltr"></div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header d-flex">
                                        <h5 class="card-title flex-grow-1 mb-0">Upcoming Schedule</h5>
                                        <div class="flex-shrink-0">
                                            <a href="#!" class="btn btn-subtle-info btn-sm">View More <i class="ph-caret-right align-middle"></i></a>
                                        </div>
                                    </div>
                                    <div class="card-body vstack gap-2">
                                        <div class="d-flex bg-body-secondary rounded">
                                            <div class="flex-shrink-0 w-md py-2 px-3 text-center border-end">
                                                <p class="mb-1 text-muted fs-sm">Tue, 20 Feb</p>
                                                <h6 class="mb-0">09:19 PM</h6>
                                            </div>
                                            <div class="flex-grow-1 px-3 py-2 overflow-hidden">
                                                <h6>Marketing Policy Meetings</h6>
                                                <p class="text-muted fs-sm text-truncate mb-0">This is a periodic meeting between sales and marketing aimed at ensuring initial and ongoing alignment between the two groups.</p>
                                            </div>
                                        </div>
                                        <div class="d-flex bg-body-secondary rounded">
                                            <div class="flex-shrink-0 w-md py-2 px-3 text-center border-end">
                                                <p class="mb-1 text-muted fs-sm">Wed, 18 Jan</p>
                                                <h6 class="mb-0">11:37 PM</h6>
                                            </div>
                                            <div class="flex-grow-1 px-3 py-2 overflow-hidden">
                                                <h6>Design new UI and check sales</h6>
                                                <p class="text-muted fs-sm text-truncate mb-0">Designers aim to create interfaces which users find easy to use and pleasurable.</p>
                                            </div>
                                        </div>
                                        <div class="d-flex bg-body-secondary rounded">
                                            <div class="flex-shrink-0 w-md py-2 px-3 text-center border-end">
                                                <p class="mb-1 text-muted fs-sm">Tue, 16 Jan</p>
                                                <h6 class="mb-0">07:00 AM</h6>
                                            </div>
                                            <div class="flex-grow-1 px-3 py-2 overflow-hidden">
                                                <h6>Design Event banner</h6>
                                                <p class="text-muted fs-sm text-truncate mb-0">Event banners are one of the many ways to use print marketing for your business.</p>
                                            </div>
                                        </div>
                                        <div class="d-flex bg-body-secondary rounded">
                                            <div class="flex-shrink-0 w-md py-2 px-3 text-center border-end">
                                                <p class="mb-1 text-muted fs-sm">Tue, 12 Dec</p>
                                                <h6 class="mb-0">10:57 PM</h6>
                                            </div>
                                            <div class="flex-grow-1 px-3 py-2 overflow-hidden">
                                                <h6>Update Review from Client</h6>
                                                <p class="text-muted fs-sm text-truncate mb-0">Contact your unhappy customer and be personable. Use their first name and apologize as necessary.</p>
                                            </div>
                                        </div>
                                        <div class="d-flex bg-body-secondary rounded">
                                            <div class="flex-shrink-0 w-md py-2 px-3 text-center border-end">
                                                <p class="mb-1 text-muted fs-sm">Tue, 08 Nov</p>
                                                <h6 class="mb-0">11:32 AM</h6>
                                            </div>
                                            <div class="flex-grow-1 px-3 py-2 overflow-hidden">
                                                <h6>Ecommerce Menu Dashboard</h6>
                                                <p class="text-muted fs-sm text-truncate mb-0">Ecommerce dashboards aggregate the most important performance metrics, so online sellers can track their progress and quickly respond to any changes.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-xl-3">
                            <div class="card card-height-100">
                                <div class="card-header d-flex align-items-center">
                                    <h6 class="card-title flex-grow-1 mb-0">Total Leads</h6>
                                    <div class="dropdown card-header-dropdown flex-shrink-0">
                                        <a class="text-reset dropdown-btn fs-md" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="text-muted">This Month<i class="ti ti-chevron-down ms-1"></i></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">This Month</a>
                                            <a class="dropdown-item" href="#">Last Month</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="usersActivity" data-colors='["--tb-primary", "--tb-primary-rgb, 0.75"]' class="apex-charts" dir="ltr"></div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col-xl-3">
                            <div class="card card-height-100">
                                <div class="card-header d-flex align-items-center">
                                    <h6 class="card-title flex-grow-1 mb-0">Session by Device Type</h6>
                                    <div class="flex-shrink-0">
                                        <a class="btn btn-primary btn-sm" href="#!">
                                            View More <i class="ti ti-arrow-narrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h4><span class="counter-value" data-target="5634">0</span>k </h4>
                                    <p class="text-muted">Total Device website visitor</p>
                                    <div class="progress mb-4" style="height: 34px;">
                                        <div class="progress-bar" data-bs-toggle="tooltip" data-bs-title="Mobile" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar bg-success" data-bs-toggle="tooltip" data-bs-title="Tables" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar bg-info" data-bs-toggle="tooltip" data-bs-title="Laptop" role="progressbar" style="width: 37%" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar bg-warning" data-bs-toggle="tooltip" data-bs-title="Others" role="progressbar" style="width: 8%" aria-valuenow="8" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                    <div class="row g-4">
                                        <div class="col-sm-6">
                                            <div class="card border-4 border-bottom border-primary mb-0">
                                                <div class="card-body text-center">
                                                    <h6 class="fs-lg mb-2"><span class="counter-value" data-target="1523">0</span>k</h6>
                                                    <p class="mb-0 fs-md text-muted">Mobile</p>
                                                </div>
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-sm-6">
                                            <div class="card border-4 border-bottom border-success mb-0">
                                                <div class="card-body text-center">
                                                    <h6 class="fs-lg mb-2"><span class="counter-value" data-target="1279">0</span>k</h6>
                                                    <p class="mb-0 fs-md text-muted">Tables</p>
                                                </div>
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-sm-6">
                                            <div class="card border-4 border-bottom border-info mb-0">
                                                <div class="card-body text-center">
                                                    <h6 class="fs-lg mb-2"><span class="counter-value" data-target="1895">0</span>k</h6>
                                                    <p class="mb-0 fs-md text-muted">Laptop</p>
                                                </div>
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-sm-6">
                                            <div class="card border-4 border-bottom border-warning mb-0">
                                                <div class="card-body text-center">
                                                    <h6 class="fs-lg mb-2"><span class="counter-value" data-target="873">0</span>k</h6>
                                                    <p class="mb-0 fs-md text-muted">Others</p>
                                                </div>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col-xl-3">
                            <div class="card card-height-100">
                                <div class="card-header d-flex align-items-center">
                                    <h6 class="card-title flex-grow-1 mb-0">Sales Per Week</h6>
                                    <div class="flex-shrink-0">
                                        <a class="btn btn-subtle-secondary btn-sm" href="#!">
                                            View More <i class="ti ti-arrow-narrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="shades_heatmap" data-colors='["--tb-info-rgb, 0.7", "--tb-info-rgb, 0.35"]' class="apex-charts ms-n3" dir="ltr"></div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col-xl-3">
                            <div class="card">
                                <div class="card-header d-flex align-items-center">
                                    <h6 class="card-title flex-grow-1 mb-0">Satisfaction Rate</h6>
                                    <div class="flex-shrink-0">
                                        <div class="dropdown">
                                            <button class="btn shadow-none btn-sm btn-icon" type="button" data-bs-toggle="dropdown">
                                                <i class="ti ti-dots fs-md"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="semi_radialbar" data-colors='["--tb-secondary"]' class="apex-charts" dir="ltr"></div>
                                </div>  
                            </div>
                            <div class="card">
                                <div class="card-header d-flex align-items-center">
                                    <h6 class="card-title flex-grow-1 mb-0">Returning Customer Rate</h6>
                                    <div class="flex-shrink-0">
                                        <div class="dropdown">
                                            <button class="btn shadow-none btn-sm btn-icon" type="button" data-bs-toggle="dropdown">
                                                <i class="ti ti-dots fs-md"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5><span class="counter-value" data-target="2816">0</span>k </h5>
                                    <div class="progress bg-light">
                                        <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" style="width: 69%" aria-valuenow="69" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar progress-bar-animated bg-success progress-bar-striped" role="progressbar" style="width: 31%" aria-valuenow="31" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="d-flex mt-2 align-items-center fs-md">
                                        <p class="mb-0 flex-grow-1"><i class="ti ti-rotate-rectangle fs-xs text-primary"></i> Returning</p>
                                        <p class="mb-0"><i class="ti ti-rotate-rectangle fs-xs text-success"></i> New</p>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->

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

    <!-- Dashboard init -->
    <script src="assets/js/pages/dashboard-analytics.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>
</body>

</html>