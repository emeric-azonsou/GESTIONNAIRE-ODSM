<?php include 'partials/main.php'; ?>

<head>
<?php includeFileWithVariables('partials/title-meta.php', array('title' => 'Mixed Charts')); ?>


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
                <?php includeFileWithVariables('partials/page-title.php', array('pagetitle' => 'Apexcharts', 'title' => 'Mixed Charts')); ?>
               
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Line & Column Charts</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="line_column_chart" data-colors='["--tb-primary", "--tb-success"]' class="apex-charts" dir="ltr"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Multiple Y-Axis Charts</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="multi_chart" data-colors='["--tb-primary", "--tb-info", "--tb-success"]' class="apex-charts" dir="ltr"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Line & Area Charts</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="line_area_chart" data-colors='["--tb-primary", "--tb-success"]' class="apex-charts" dir="ltr"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Line, Column & Area Charts</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="line_area_charts" data-colors='["--tb-primary", "--tb-success", "--tb-danger"]' class="apex-charts" dir="ltr"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

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

    <!-- mixed charts init -->
    <script src="assets/js/pages/apexcharts-mixed.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>
</body>

</html>