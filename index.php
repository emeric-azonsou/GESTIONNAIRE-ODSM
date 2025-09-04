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
                    <!-- Première ligne : stats + personnage -->
                    <div class="row">
                        <div class="col-xl-8">
                            <div class="row gy-4">
                                <div class="col-sm-4 border-end-sm">
                                    <div class="text-center">
                                        <p class="text-uppercase fw-medium text-muted text-truncate fs-md">Total Sessions</p>
                                        <h4 class="fw-semibold mb-3">
                                            <span class="counter-value" data-target="476.32">0</span>k
                                        </h4>
                                        <div class="d-flex align-items-center justify-content-center gap-2">
                                            <h5 class="text-success fs-xs mb-0">
                                                <i class="ri-arrow-right-up-line fs-sm align-middle"></i> +19.07 %
                                            </h5>
                                            <p class="text-muted mb-0">than last week</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 border-end-sm">
                                    <div class="text-center">
                                        <p class="text-uppercase fw-medium text-muted text-truncate fs-md">Avg. Visit Duration</p>
                                        <h4 class="fw-semibold mb-3">
                                            <span class="counter-value" data-target="1.57">0</span>s
                                        </h4>
                                        <div class="d-flex align-items-center justify-content-center gap-2">
                                            <h5 class="text-success fs-xs mb-0">
                                                <i class="ri-arrow-right-up-line fs-sm align-middle"></i> +19.07 %
                                            </h5>
                                            <p class="text-muted mb-0">than last week</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="text-center">
                                        <p class="text-uppercase fw-medium text-muted text-truncate fs-md">Impressions</p>
                                        <h4 class="fw-semibold mb-3">
                                            <span class="counter-value" data-target="2368">0</span>k
                                        </h4>
                                        <div class="d-flex align-items-center justify-content-center gap-2">
                                            <h5 class="text-success fs-xs mb-0">
                                                <i class="ri-arrow-right-up-line fs-sm align-middle"></i> +19.07 %
                                            </h5>
                                            <p class="text-muted mb-0">than last week</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <div class="mx-n4">
                                    <div id="performance_overview" data-colors='["--tb-primary", "--tb-warning"]' class="apex-charts" dir="ltr"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Personnage sur la même ligne -->
                        <div class="col-xl-4">
                            <div class="d-none d-xl-block h-100">
                                <div class="card bg-success-subtle shadow-none rounded-0 border-0 dashboard-widgets-wrapper h-100">
                                    <div class="card-body text-center mt-5 pt-5">
                                        <h5>Welcome to Alexandra</h5>
                                        <p class="text-muted fs-md">There is the latests update for the last 7 days, check now</p>
                                        <img src="assets/images/dashboard.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Seconde ligne : Campaign performance by source sur 12 colonnes -->
                    <div class="row mt-4">
                        <div class="col-12">
                            <div class="card" id="contactList">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Campaign performance by source</h4>
                                    <div class="flex-shrink-0">
                                        <div class="dropdown card-header-dropdown sortble-dropdown">
                                            <a class="text-reset dropdown-btn fs-sm" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="fw-semibold text-uppercase">Sort by:</span>
                                                <span class="text-muted dropdown-title">Source</span>
                                                <i class="ti ti-chevron-down ms-1"></i>
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
                                                    <td class="source">Facebook Ads</td>
                                                    <td class="impression">165,148,541</td>
                                                    <td class="clicks">124,587,415</td>
                                                    <td class="cost">$498,340</td>
                                                    <td class="conversation">415,260</td>
                                                </tr>
                                                <tr>
                                                    <td class="source">Instagram Ads</td>
                                                    <td class="impression">324,159,321</td>
                                                    <td class="clicks">257,951,346</td>
                                                    <td class="cost">$743,654</td>
                                                    <td class="conversation">247,254,410</td>
                                                </tr>
                                                <tr>
                                                    <td class="source">Youtube Ads</td>
                                                    <td class="impression">954,321,875</td>
                                                    <td class="clicks">738,192,465</td>
                                                    <td class="cost">$987,623,145</td>
                                                    <td class="conversation">632,184,952</td>
                                                </tr>
                                                <tr>
                                                    <td class="source">Google Ads</td>
                                                    <td class="impression">21,154,309,318</td>
                                                    <td class="clicks">12,018,992,301</td>
                                                    <td class="cost">$1,543,243,019</td>
                                                    <td class="conversation">4,309,318,287</td>
                                                </tr>
                                            </tbody>
                                        </table>
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
    <!-- Dashboard init -->
    <script src="assets/js/pages/dashboard-analytics.init.js"></script>
    <!-- App js -->
    <script src="assets/js/app.js"></script>
</body>

</html>