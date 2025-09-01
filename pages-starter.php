<?php include 'partials/main.php'; ?>

    <head>
    <?php includeFileWithVariables('partials/title-meta.php', array('title' => 'Starter')); ?>

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
                    <?php includeFileWithVariables('partials/page-title.php', array('pagetitle' => 'Pages', 'title' => 'Starter ')); ?>
                 

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

        

        <!-- App js -->
        <script src="assets/js/app.js"></script>
    </body>

</html>