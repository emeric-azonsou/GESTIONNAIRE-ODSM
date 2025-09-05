<?php include 'partials/main.php'; ?>

<head>
<?php includeFileWithVariables('partials/title-meta.php', array('title' => 'Progress')); ?>


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
                <?php includeFileWithVariables('partials/page-title.php', array('pagetitle' => 'Base UI', 'title' => 'Progress')); ?>
         

                    <div class="row">
                        <div class="col-xxl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Default Progress</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <p class="text-muted">Use <code>progress</code> class to show default progress.</p>

                                    <div>
                                        <div class="progress mb-4">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="0"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress mb-4">
                                            <div class="progress-bar" role="progressbar" style="width: 25%"
                                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress mb-4">
                                            <div class="progress-bar" role="progressbar" style="width: 50%"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress mb-4">
                                            <div class="progress-bar" role="progressbar" style="width: 75%"
                                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 100%"
                                                aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>

                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class="col-xxl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Progress with background color</h4>
                                </div><!-- end card header -->

                                <div class="card-body">

                                    <p class="text-muted">Use <code>bg-</code> class to progress bar class with the
                                        below-mentioned color variation to set the background color progress bar.</p>

                                    <div>
                                        <div class="progress mb-4">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 15%"
                                                aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress mb-4">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%"
                                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress mb-4">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress mb-4">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 75%"
                                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 100%"
                                                aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>

                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-xxl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Progress with Label</h4>
                                </div><!-- end card header -->

                                <div class="card-body">

                                    <p class="text-muted">Add labels to your progress bars by placing text within the
                                        progress-bar.</p>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 25%;"
                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class="col-xxl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Multiple Bars</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <p class="text-muted">Use <code>bg-</code> class to progress bar class with the
                                        below-mentioned color to change the appearance of individual progress bars.</p>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 15%"
                                            aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 30%"
                                            aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 20%"
                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-xxl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Height</h4>
                                </div><!-- end card header -->

                                <div class="card-body">

                                    <p class="text-muted">Use <code>progress-sm</code>, <code>progress-lg</code>, or
                                        <code>progress-xl</code> class to set the different heights of progress.
                                    </p>
                                    <div>
                                        <div class="mb-4">
                                            <h5 class="fs-sm">Small Progress</h5>
                                            <!-- Prgress sm -->
                                            <div class="progress progress-sm">
                                                <div class="progress-bar" role="progressbar" style="width: 25%;"
                                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <h5 class="fs-sm">Default Progress </h5>
                                            <!-- Prgress md -->
                                            <div class="progress">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    style="width: 40%;" aria-valuenow="40" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <h5 class="fs-sm">Large Progress</h5>
                                            <!-- Prgress lg -->
                                            <div class="progress progress-lg">
                                                <div class="progress-bar bg-warning" role="progressbar"
                                                    style="width: 50%;" aria-valuenow="50" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <h5 class="fs-sm">Extra Large Progress</h5>
                                            <!-- Prgress xl -->
                                            <div class="progress progress-xl">
                                                <div class="progress-bar bg-danger" role="progressbar"
                                                    style="width: 70%;" aria-valuenow="70" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>

                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class="col-xxl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Striped Progress</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <p class="text-muted">Use <code>progress-bar-striped</code> class to add strip to
                                        the progress.</p>
                                    <div>
                                        <div class="progress mb-4">
                                            <div class="progress-bar progress-bar-striped" role="progressbar"
                                                style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped bg-success" role="progressbar"
                                                style="width: 40%" aria-valuenow="40" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->

                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Animated Striped Progress</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <p class="text-muted">Use <code>progress-bar-striped progress-bar-animated</code>
                                        class to add strip with animation to the progress.</p>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated"
                                            role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"
                                            style="width: 75%"></div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-xxl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Gradient Progress</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <p class="text-muted">Use <code>bg-gradient</code> class to show gradient progress
                                        bar.</p>
                                    <div>
                                        <div class="progress mb-4">
                                            <div class="progress-bar bg-primary bg-gradient" role="progressbar"
                                                style="width: 15%" aria-valuenow="15" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress mb-4">
                                            <div class="progress-bar bg-success bg-gradient" role="progressbar"
                                                style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress mb-4">
                                            <div class="progress-bar bg-info bg-gradient" role="progressbar"
                                                style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress mb-4">
                                            <div class="progress-bar bg-warning bg-gradient" role="progressbar"
                                                style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-danger bg-gradient" role="progressbar"
                                                style="width: 100%" aria-valuenow="100" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                        <div class="col-xxl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Animated Progress</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <p class="text-muted">Use <code>animated-progress</code> class to show progress with
                                        animation.</p>
                                    <div>
                                        <div class="progress animated-progress mb-4">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 15%"
                                                aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress animated-progress mb-4">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%"
                                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress animated-progress mb-4">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress animated-progress mb-4">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 75%"
                                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress animated-progress">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 100%"
                                                aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>

                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-xxl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Custom Progress</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <p class="text-muted">Use <code>animated-progress custom-progess </code> class to
                                        show custom progress with animation.</p>
                                    <div>
                                        <div class="progress animated-progress custom-progress mb-4">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 15%"
                                                aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress animated-progress custom-progress mb-4">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%"
                                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress animated-progress custom-progress mb-4">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress animated-progress custom-progress mb-4">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 75%"
                                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress animated-progress custom-progress">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 100%"
                                                aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class="col-xxl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Custom Progress with Label</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <p class="text-muted">Use
                                        <code>animated-progress custom-progess progress-label</code> class to show
                                        custom progress with animation and label.
                                    </p>
                                    <div>
                                        <div class="d-flex align-items-center pb-2 mt-4">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar-xs">
                                                    <div class="avatar-title bg-light rounded-circle text-muted fs-lg">
                                                        <i class="ti ti-brand-facebook"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <div class="progress animated-progress custom-progress progress-label">
                                                    <div class="progress-bar bg-primary" role="progressbar"
                                                        style="width: 15%" aria-valuenow="15" aria-valuemin="0"
                                                        aria-valuemax="100">
                                                        <div class="label">15%</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-center py-2">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar-xs">
                                                    <div class="avatar-title bg-light rounded-circle text-muted fs-lg">
                                                        <i class="ti ti-brand-twitter"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <div class="progress animated-progress custom-progress progress-label">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                                                        aria-valuemax="100">
                                                        <div class="label">25%</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-center py-2">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar-xs">
                                                    <div class="avatar-title bg-light rounded-circle text-muted fs-lg">
                                                        <i class="ti ti-brand-github"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <div class="progress animated-progress custom-progress progress-label">
                                                    <div class="progress-bar bg-info" role="progressbar"
                                                        style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100">
                                                        <div class="label">30%</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row">

                        <div class="col-xxl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Content Progress</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <p class="text-muted pb-2">Example of progress with content wrapped in progress.</p>

                                    <div>

                                        <div class="card bg-light overflow-hidden shadow-none">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-0"><b class="text-secondary">30%</b> Update in
                                                            progress...</h6>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <h6 class="mb-0">1 min left</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="progress bg-secondary-subtle rounded-0">
                                                <div class="progress-bar bg-secondary" role="progressbar"
                                                    style="width: 30%" aria-valuenow="30" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                        <div class="card bg-light overflow-hidden shadow-none">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-0"><b class="text-success">60%</b> Update in
                                                            progress...</h6>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <h6 class="mb-0">45s left</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="progress bg-success-subtle rounded-0">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    style="width: 60%" aria-valuenow="60" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                        <div class="card bg-light overflow-hidden shadow-none">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-0"><b class="text-danger">82%</b> Update in
                                                            progress...</h6>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <h6 class="mb-0">25s left</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="progress bg-danger-subtle rounded-0">
                                                <div class="progress-bar bg-danger" role="progressbar"
                                                    style="width: 82%" aria-valuenow="82" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-xxl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Progress with Steps</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <p class="text-muted pb-2">Here is the example of progress which is represented by
                                        steps completion.</p>
                                    <div class="position-relative m-4">
                                        <div class="progress" style="height: 1px;">
                                            <div class="progress-bar" role="progressbar" style="width: 50%;"
                                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <button type="button"
                                            class="position-absolute top-0 start-0 translate-middle btn btn-sm btn-primary rounded-pill"
                                            style="width: 2rem; height:2rem;">1</button>
                                        <button type="button"
                                            class="position-absolute top-0 start-50 translate-middle btn btn-sm btn-primary rounded-pill"
                                            style="width: 2rem; height:2rem;">2</button>
                                        <button type="button"
                                            class="position-absolute top-0 start-100 translate-middle btn btn-sm btn-light rounded-pill"
                                            style="width: 2rem; height:2rem;">3</button>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->

                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Step Progress with Arrow</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <p class="text-muted pb-2">Use <code>progress-step-arrow </code>class to create step
                                        progress with an arrow.</p>
                                    <div class="progress progress-step-arrow progress-info">
                                        <div class="progress-bar active" role="progressbar" style="width: 100%"
                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">Step 1</div>
                                        <div class="progress-bar pending" role="progressbar" style="width: 100%"
                                            aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"> Step 2</div>
                                        <div class="progress-bar" role="progressbar" style="width: 100%"
                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"> Step 3</div>
                                    </div>
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


    <!-- prismjs plugin -->
    <script src="assets/libs/prismjs/prism.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>
</body>

</html>