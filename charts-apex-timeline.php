<?php include 'partials/main.php'; ?>

<head>
<?php includeFileWithVariables('partials/title-meta.php', array('title' => 'Apex Timeline Charts')); ?>


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
                <?php includeFileWithVariables('partials/page-title.php', array('pagetitle' => 'Apexcharts', 'title' => 'Timeline Charts')); ?>
                    

                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Basic TimeLine Charts</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="basic_timeline" data-colors='["--tb-primary"]' class="apex-charts" dir="ltr"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Different Color For Each Bar</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="color_timeline" data-colors='["--tb-primary", "--tb-danger", "--tb-success", "--tb-warning", "--tb-info"]' class="apex-charts" dir="ltr"></div>
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
                                    <h4 class="card-title mb-0">Multi Series Timeline</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="multi_series" data-colors='["--tb-primary","--tb-success"]' class="apex-charts" dir="ltr"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Advanced Timeline (Multiple Range)</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="advanced_timeline" data-colors='["--tb-primary", "--tb-success", "--tb-warning"]' class="apex-charts" dir="ltr"></div>
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
                                    <h4 class="card-title mb-0">Multiple series � Group rows</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="multi_series_group" data-colors='["--tb-primary", "--tb-success", "--tb-warning", "--tb-danger", "--tb-info","--tb-gray","--tb-pink","--tb-purple","--tb-secondary", "--tb-dark"]' class="apex-charts" dir="ltr"></div>
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

    <script src="assets/libs/moment/min/moment.min.js"></script>

    <!-- timeline charts init -->
    <script src="assets/js/pages/apexcharts-timeline.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>
</body>

</html>