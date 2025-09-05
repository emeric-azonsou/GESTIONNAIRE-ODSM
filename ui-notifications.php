<?php include 'partials/main.php'; ?>

<head>
<?php includeFileWithVariables('partials/title-meta.php', array('title' => 'Notifications')); ?>


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
                <?php includeFileWithVariables('partials/page-title.php', array('pagetitle' => 'Base UI', 'title' => 'Notifications')); ?>
       

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Bootstrap Toasts</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div>
                                        <div class="row g-3">
                                            <div class="col-xxl-6">
                                                <h5 class="fs-md mb-3">Default Toast</h5>
                                                <p class="text-muted">Use <code>toast</code> class to set a default
                                                    toast.</p>
                                                <!-- Basic Toasts Example -->
                                                <div class="toast fade show" role="alert" aria-live="assertive"
                                                    data-bs-autohide="false" aria-atomic="true">
                                                    <div class="toast-header">
                                                        <img src="assets/images/logo-sm.png" class="rounded me-2"
                                                            alt="..." height="20">
                                                        <span class="fw-semibold me-auto">Vixon</span>
                                                        <small>06 mins ago</small>
                                                        <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="toast-body">
                                                        Hello, world! This is a toast message.
                                                    </div>
                                                </div>

                                                <div class="mt-4">
                                                    <h5 class="fs-md">Translucent</h5>
                                                    <p class="text-muted">Toasts are slightly translucent, too, so they
                                                        blend over whatever they might appear over.</p>
                                                    <!-- Toasts Translucent -->
                                                    <div class="p-3 bg-light">
                                                        <div class="toast fade show" role="alert" aria-live="assertive"
                                                            data-bs-autohide="false" aria-atomic="true">
                                                            <div class="toast-header">
                                                                <img src="assets/images/logo-sm.png"
                                                                    class="rounded me-2" alt="..." height="20">
                                                                <span class="fw-semibold me-auto">Vixon</span>
                                                                <small>11 mins ago</small>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="toast" aria-label="Close"></button>
                                                            </div>
                                                            <div class="toast-body">
                                                                Hello, world! This is a toast message.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->

                                            <div class="col-xxl-6">
                                                <div>
                                                    <h5 class="fs-md">Stacking</h5>
                                                    <p class="text-muted">When you have multiple toasts, we default to
                                                        vertically stacking them in a readable manner.</p>

                                                    <div class="p-3 bg-light">
                                                        <!-- Toasts Stacking -->
                                                        <div class="toast fade show" role="alert" aria-live="assertive"
                                                            data-bs-autohide="false" aria-atomic="true">
                                                            <div class="toast-header">
                                                                <img src="assets/images/logo-sm.png"
                                                                    class="rounded me-2" alt="..." height="20">
                                                                <span class="fw-semibold me-auto">Vixon</span>
                                                                <small>Just now</small>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="toast" aria-label="Close"></button>
                                                            </div>
                                                            <div class="toast-body">
                                                                See? Just like this.
                                                            </div>
                                                        </div>

                                                        <div class="toast fade show" role="alert" aria-live="assertive"
                                                            data-bs-autohide="false" aria-atomic="true">
                                                            <div class="toast-header">
                                                                <img src="assets/images/logo-sm.png"
                                                                    class="rounded me-2" alt="..." height="20">
                                                                <span class="fw-semibold me-auto">Vixon</span>
                                                                <small>2 seconds ago</small>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="toast" aria-label="Close"></button>
                                                            </div>
                                                            <div class="toast-body">
                                                                Heads up, toasts will stack automatically
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->

                                        <div class="mt-5">
                                            <h5 class="fs-md">Placement</h5>
                                            <div class="row g-3">
                                                <div class="col-xxl-6">
                                                    <div>
                                                        <p class="text-muted">Place toasts with custom CSS as you need
                                                            them.
                                                            The top right
                                                            is often used
                                                            for notifications, as is the top middle. If you’re only ever
                                                            going to show one toast
                                                            at a time, put
                                                            the positioning styles right on the <code>.toast</code>.</p>

                                                        <!-- Toasts Placement -->
                                                        <div class="bg-light" aria-live="polite" aria-atomic="true"
                                                            style="position: relative; min-height: 200px;">
                                                            <div class="toast fade show" role="alert"
                                                                aria-live="assertive" aria-atomic="true"
                                                                data-bs-toggle="toast"
                                                                style="position: absolute; top: 16px; right: 16px;">
                                                                <div class="toast-header">
                                                                    <img src="assets/images/logo-sm.png"
                                                                        class="rounded me-2" alt="..." height="20">
                                                                    <span class="fw-semibold me-auto">Vixon</span>
                                                                    <small>06 mins ago</small>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="toast"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <div class="toast-body">
                                                                    Hello, world! This is a toast message.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end col-->

                                                <div class="col-xxl-6">
                                                    <div>
                                                        <p class="text-muted">You can also get fancy with flexbox
                                                            utilities
                                                            to align toasts horizontally and/or vertically.</p>

                                                        <!-- Flexbox container for aligning the toasts -->
                                                        <div aria-live="polite" aria-atomic="true"
                                                            class="bg-light d-flex justify-content-center align-items-center"
                                                            style="height: 200px;">
                                                            <div class="toast fade show" role="alert"
                                                                aria-live="assertive" data-bs-autohide="false"
                                                                aria-atomic="true">
                                                                <div class="toast-header">
                                                                    <img src="assets/images/logo-sm.png"
                                                                        class="rounded me-2" alt="..." height="20">
                                                                    <span class="fw-semibold me-auto">Vixon</span>
                                                                    <small>11 mins ago</small>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="toast"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <div class="toast-body">
                                                                    Hello, world! This is a toast message.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Toast Placement</h4>
                                </div><!-- end card header -->

                                <div class="card-body">

                                    <p class="text-muted">Various example of <code>toast placement</code>.</p>
                                    <div>
                                        <form>
                                            <div class="mb-3">
                                                <select class="form-select mt-2" id="selectToastPlacement">
                                                    <option value="" selected>Select a position...</option>
                                                    <option value="top-0 start-0">Top left</option>
                                                    <option value="top-0 start-50 translate-middle-x">Top center
                                                    </option>
                                                    <option value="top-0 end-0">Top right</option>
                                                    <option value="top-50 start-0 translate-middle-y">Middle left
                                                    </option>
                                                    <option value="top-50 start-50 translate-middle">Middle center
                                                    </option>
                                                    <option value="top-50 end-0 translate-middle-y">Middle right
                                                    </option>
                                                    <option value="bottom-0 start-0">Bottom left</option>
                                                    <option value="bottom-0 start-50 translate-middle-x">Bottom center
                                                    </option>
                                                    <option value="bottom-0 end-0">Bottom right</option>
                                                </select>
                                            </div>
                                        </form>
                                        <div aria-live="polite" aria-atomic="true"
                                            class="bd-example bg-light position-relative" style="height: 300px;">
                                            <div class="toast-container position-absolute p-3" id="toastPlacement">
                                                <div class="toast">
                                                    <div class="toast-header">
                                                        <img src="assets/images/logo-sm.png" class="rounded me-2"
                                                            alt="..." height="20">
                                                        <strong class="me-auto">Vixon</strong>
                                                        <small>11 mins ago</small>
                                                        <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="toast-body">
                                                        Hello, world! This is a toast message.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Bordered with Icon Toast</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <p class="text-muted">Use <code>toast-border-</code> with below-mentioned color
                                        variation to set a toast with border and icon.</p>
                                    <div>

                                        <div class="position-relative">
                                            <div class="hstack flex-wrap gap-2">
                                                <button type="button" class="btn btn-primary"
                                                    id="borderedToast1Btn">Primary Toast</button>
                                                <button type="button" class="btn btn-success"
                                                    id="borderedToast2Btn">Success Toast</button>
                                                <button type="button" class="btn btn-warning"
                                                    id="borderedTost3Btn">Warning Toast</button>
                                                <button type="button" class="btn btn-danger"
                                                    id="borderedToast4Btn">Danger Toast</button>
                                            </div>

                                            <div style="z-index: 11">
                                                <div id="borderedToast1"
                                                    class="toast toast-border-primary overflow-hidden mt-3" role="alert"
                                                    aria-live="assertive" aria-atomic="true">
                                                    <div class="toast-body">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0 me-2">
                                                                <i class="ri-user-smile-line align-middle"></i>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <h6 class="mb-0">Your application was successfully sent.
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div style="z-index: 11">
                                                <div id="borderedToast2"
                                                    class="toast toast-border-success overflow-hidden mt-3" role="alert"
                                                    aria-live="assertive" aria-atomic="true">
                                                    <div class="toast-body">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0 me-2">
                                                                <i class="ri-checkbox-circle-fill align-middle"></i>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <h6 class="mb-0">Yey! Everything worked!</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div style="z-index: 11">
                                                <div id="borderedTost3"
                                                    class="toast toast-border-warning overflow-hidden mt-3" role="alert"
                                                    aria-live="assertive" aria-atomic="true">
                                                    <div class="toast-body">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0 me-2">
                                                                <i class="ri-notification-off-line align-middle"></i>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <h6 class="mb-0">Something went wrong, try again.</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div style="z-index: 11">
                                                <div id="borderedToast4"
                                                    class="toast toast-border-danger overflow-hidden mt-3" role="alert"
                                                    aria-live="assertive" aria-atomic="true">
                                                    <div class="toast-body">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0 me-2">
                                                                <i class="ri-alert-line align-middle"></i>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <h6 class="mb-0">Something is very wrong! <a
                                                                        href="javascript:void(0);"
                                                                        class="text-decoration-underline">See detailed
                                                                        report.</a></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Toastify JS</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <p class="text-muted">Use <code>data-toast</code> <code>data-toast-text=""</code>
                                        <code>data-toast-gravity=""</code> <code>data-toast-position=""</code>
                                        <code>data-toast-className=""</code> <code>data-toast-duration=""</code>
                                        <code>data-toast-close="close"</code> <code>data-toast-style="style"</code> as
                                        per your toast requirement.
                                    </p>
                                    <div class="live-preview">
                                        <div class="hstack flex-wrap gap-2">
                                            <button type="button" data-toast
                                                data-toast-text="Welcome Back! This is a Toast Notification"
                                                data-toast-gravity="top" data-toast-position="right"
                                                data-toast-className="primary" data-toast-duration="3000"
                                                data-toast-close="close" data-toast-style="style"
                                                class="btn btn-light w-xs ">Default</button>
                                            <button type="button" data-toast
                                                data-toast-text="Your application was successfully sent"
                                                data-toast-gravity="top" data-toast-position="center"
                                                data-toast-className="success" data-toast-duration="3000"
                                                class="btn btn-light w-xs">Success</button>
                                            <button type="button" data-toast
                                                data-toast-text="Warning ! Something went wrong try again"
                                                data-toast-gravity="top" data-toast-position="center"
                                                data-toast-className="warning" data-toast-duration="3000"
                                                class="btn btn-light w-xs">Warning</button>
                                            <button type="button" data-toast
                                                data-toast-text="Error ! An error occurred." data-toast-gravity="top"
                                                data-toast-position="center" data-toast-className="danger"
                                                data-toast-duration="3000" class="btn btn-light w-xs">Error</button>
                                        </div>
                                        <div class="mt-4 pt-2">
                                            <h5 class="fs-14 mb-3">Display Position</h5>
                                            <div class="hstack flex-wrap gap-2">
                                                <button type="button" data-toast
                                                    data-toast-text="Welcome Back ! This is a Toast Notification"
                                                    data-toast-gravity="top" data-toast-position="left"
                                                    data-toast-duration="3000" data-toast-close="close"
                                                    class="btn btn-light w-xs">Top Left</button>
                                                <button type="button" data-toast
                                                    data-toast-text="Welcome Back ! This is a Toast Notification"
                                                    data-toast-gravity="top" data-toast-position="center"
                                                    data-toast-duration="3000" data-toast-close="close"
                                                    class="btn btn-light w-xs">Top Center</button>
                                                <button type="button" data-toast
                                                    data-toast-text="Welcome Back ! This is a Toast Notification"
                                                    data-toast-gravity="top" data-toast-position="right"
                                                    data-toast-duration="3000" data-toast-close="close"
                                                    class="btn btn-light w-xs">Top Right</button>
                                                <button type="button" data-toast
                                                    data-toast-text="Welcome Back ! This is a Toast Notification"
                                                    data-toast-gravity="bottom" data-toast-position="left"
                                                    data-toast-duration="3000" data-toast-close="close"
                                                    class="btn btn-light w-xs">Bottom Left</button>
                                                <button type="button" data-toast
                                                    data-toast-text="Welcome Back ! This is a Toast Notification"
                                                    data-toast-gravity="bottom" data-toast-position="center"
                                                    data-toast-duration="3000" data-toast-close="close"
                                                    class="btn btn-light w-xs">Bottom Center</button>
                                                <button type="button" data-toast
                                                    data-toast-text="Welcome Back ! This is a Toast Notification"
                                                    data-toast-gravity="bottom" data-toast-position="right"
                                                    data-toast-duration="3000" data-toast-close="close"
                                                    class="btn btn-light w-xs">Bottom Right</button>
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-lg-4">
                                                <div class="mt-4">
                                                    <h5 class="fs-14 mb-3">Offset Position</h5>
                                                    <div class="d-flex align-items-center flex-wrap gap-2">
                                                        <button type="button" data-toast
                                                            data-toast-text="Welcome Back ! This is a Toast Notification"
                                                            data-toast-gravity="top" data-toast-position="right"
                                                            data-toast-duration="3000" data-toast-offset
                                                            data-toast-close="close" class="btn btn-light w-xs">Click
                                                            Me</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-4">
                                                <div class="mt-4">
                                                    <h5 class="fs-14 mb-3">Close icon Display</h5>
                                                    <div class="d-flex align-items-center flex-wrap gap-2">
                                                        <button type="button" data-toast
                                                            data-toast-text="Welcome Back ! This is a Toast Notification"
                                                            data-toast-position="right" data-toast-duration="3000"
                                                            data-toast-close="close" class="btn btn-light w-xs">Click
                                                            Me</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-4">
                                                <div class="mt-4">
                                                    <h5 class="fs-14 mb-3">Duration</h5>
                                                    <div class="d-flex align-items-center flex-wrap gap-2">
                                                        <button type="button" data-toast
                                                            data-toast-text="Toast Duration 5s" data-toast-gravity="top"
                                                            data-toast-position="right" data-toast-duration="5000"
                                                            class="btn btn-light w-xs">Click Me</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
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

    <!-- notifications init -->
    <script src="assets/js/pages/notifications.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>
</body>

</html>