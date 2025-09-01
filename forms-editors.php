<?php include 'partials/main.php'; ?>

<head>
<?php includeFileWithVariables('partials/title-meta.php', array('title' => 'Editors')); ?>


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
                <?php includeFileWithVariables('partials/page-title.php', array('pagetitle' => 'Forms', 'title' => 'Editors')); ?>
                   

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0">Ckeditor Classic Editor</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <p class="text-muted">Use <code>ckeditor-classic</code> class to set ckeditor classic editor.</p>
                                    <div class="ckeditor-classic"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->


                  <?php include 'partials/footer.php'; ?>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- @@include("partials/right-sidebar.php") -->

        <?php include 'partials/customizer.php'; ?>

 <?php include 'partials/vendor-scripts.php'; ?>


    <!-- ckeditor -->
    <script src="assets/libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js"></script>

    <!-- init js -->
    <script src="assets/js/pages/form-editor.init.js"></script>

    <script src="assets/js/app.js"></script>

</body>

</html>