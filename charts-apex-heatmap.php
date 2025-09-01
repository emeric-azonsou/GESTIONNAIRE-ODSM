<?php include 'partials/main.php'; ?>

<head>
<?php includeFileWithVariables('partials/title-meta.php', array('title' => 'Apex Heatmap Charts')); ?>


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
                <?php includeFileWithVariables('partials/page-title.php', array('pagetitle' => 'Apexcharts', 'title' => 'Heatmap Charts')); ?>
    
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Basic Heatmap Chart</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div class="live-preview">
                                        <div id="basic_heatmap" data-colors='["--tb-success", "--tb-card-bg-custom"]' class="apex-charts" dir="ltr"></div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Heatmap - Multiple Series</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="multiple_heatmap" data-colors='["--tb-primary", "--tb-secondary", "--tb-success", "--tb-info", "--tb-warning", "--tb-danger", "--tb-dark", "--tb-primary", "--tb-card-bg-custom"]' class="apex-charts" dir="ltr"></div>
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
                                    <h4 class="card-title mb-0">Heatmap Color Range</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="color_heatmap" data-colors='["--tb-info", "--tb-success", "--tb-primary", "--tb-warning"]' class="apex-charts" dir="ltr"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Heatmap - Range Without Shades</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="shades_heatmap" data-colors='["--tb-info", "--tb-primary"]' class="apex-charts" dir="ltr"></div>
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

    <!-- heatmapscharts init -->
    <script src="assets/js/pages/apexcharts-heatmap.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>
</body>

</html>