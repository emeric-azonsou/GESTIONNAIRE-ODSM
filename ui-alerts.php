<?php include 'partials/main.php'; ?>

<head>
<?php includeFileWithVariables('partials/title-meta.php', array('title' => 'Alerts')); ?>


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
                <?php includeFileWithVariables('partials/page-title.php', array('pagetitle' => 'Base UI', 'title' => 'Alerts')); ?>
      

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Default Alerts</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <p class="text-muted">Use the <code>alert </code>class to show a default alert.</p>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <h6>Primary Alert</h6>
                                            <div class="alert alert-primary" role="alert">
                                                <strong> Hi! </strong> A simple <b>Primary alert</b> —check it out!
                                            </div>

                                            <h6>Secondary Alert</h6>
                                            <div class="alert alert-secondary" role="alert">
                                                <strong> How are you! </strong> A simple <b>secondary alert</b> —check
                                                it out!
                                            </div>

                                            <h6>Success Alert</h6>
                                            <div class="alert alert-success" role="alert">
                                                <strong> Yey! Everything worked! </strong> A simple <b>success alert</b>
                                                —check it out!
                                            </div>

                                            <h6>Danger Alert</h6>
                                            <div class="alert alert-danger mb-xl-0" role="alert">
                                                <strong> Something is very wrong! </strong> A simple <b>danger alert</b>
                                                —check it out!
                                            </div>
                                        </div>

                                        <div class="col-xl-6">
                                            <h6>Warning Alert</h6>
                                            <div class="alert alert-warning" role="alert">
                                                <strong> Uh oh, something went wrong </strong> A simple <b>warning
                                                    alert</b> —check it out!
                                            </div>

                                            <h6>Info Alert</h6>
                                            <div class="alert alert-info" role="alert">
                                                <strong>Don't forget' it !</strong> A simple <b>info alert</b> —check it
                                                out!
                                            </div>

                                            <h6>Light Alert</h6>
                                            <div class="alert alert-light text-body" role="alert">
                                                <strong>Mind Your Step!</strong> A simple <b>light alert</b> —check it
                                                out!
                                            </div>

                                            <h6>Dark Alert</h6>
                                            <div class="alert alert-dark text-body mb-0" role="alert">
                                                <strong>Did you know?</strong> A simple <b>dark alert</b> —check it out!
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div><!--end col-->
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Borderless Alerts</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <p class="text-muted">Use the <code>border-0</code> class to set alert without
                                        border.</p>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <h6>Primary Alert</h6>
                                            <div class="alert alert-primary border-0" role="alert">
                                                <strong> Hi! </strong> A simple <b>Primary alert</b> —check it out!
                                            </div>

                                            <h6>Secondary Alert</h6>
                                            <div class="alert alert-secondary border-0" role="alert">
                                                <strong> How are you! </strong> A simple <b>secondary alert</b> —check
                                                it out!
                                            </div>

                                            <h6>Success Alert</h6>
                                            <div class="alert alert-success border-0" role="alert">
                                                <strong> Yey! Everything worked! </strong> A simple <b>success alert</b>
                                                —check it out!
                                            </div>

                                            <h6>Danger Alert</h6>
                                            <div class="alert alert-danger border-0 mb-xl-0" role="alert">
                                                <strong> Something is very wrong! </strong> A simple danger alert—check
                                                it out!
                                            </div>
                                        </div>

                                        <div class="col-xl-6">
                                            <h6>Warning Alert</h6>
                                            <div class="alert alert-warning border-0" role="alert">
                                                <strong> Uh oh, something went wrong </strong> A simple <b>warning
                                                    alert</b> —check it out!
                                            </div>

                                            <h6>Info Alert</h6>
                                            <div class="alert alert-info border-0" role="alert">
                                                <strong>Don't forget' it !</strong> A simple <b>info alert</b> —check it
                                                out!
                                            </div>

                                            <h6>Light Alert</h6>
                                            <div class="alert alert-light text-body border-0 bg-light" role="alert">
                                                <strong>Mind Your Step!</strong> A simple <b>light alert</b> —check it
                                                out!
                                            </div>

                                            <h6>Dark Alert</h6>
                                            <div class="alert alert-dark text-body border-0 mb-0" role="alert">
                                                <strong>Did you know?</strong> A simple <b>dark alert</b> —check it out!
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div><!--end col-->
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Dismissing Alerts</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <p class="text-muted">Use the <code>alert-dismissible</code> class to add dismissing
                                        button to the alert.</p>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <h6>Primary Alert</h6>
                                            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                                <strong> Hi! </strong> A simple <b>Dismissible primary Alert </b> —
                                                check it out!
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>

                                            <h6>Secondary Alert</h6>
                                            <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                                                <strong> How are you! </strong> A simple <b>Dismissible secondary
                                                    alert</b>
                                                —check it out!
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>

                                            <h6>Success Alert</h6>
                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <strong>Right Way !</strong> A simple <b>Dismissible success alert</b>
                                                —check
                                                it out!
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>

                                            <h6>Danger Alert</h6>
                                            <div class="alert alert-danger alert-dismissible fade show mb-xl-0"
                                                role="alert">
                                                <strong> Something is very wrong! </strong> A simple <b>Dismissible
                                                    danger alert</b> —check
                                                it out!
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                        </div>

                                        <div class="col-xl-6">
                                            <h6>Warning Alert</h6>
                                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                <strong>Welcome Back!</strong> A simple <b>Dismissible warning alert</b>
                                                —check it out!
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>

                                            <h6>Info Alert</h6>
                                            <div class="alert alert-info alert-dismissible fade show" role="alert">
                                                <strong>Don't forget' it !</strong> A simple <b>Dismissible info
                                                    alert</b>
                                                —check it out!
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>

                                            <h6>Light Alert</h6>
                                            <div class="alert alert-light text-body alert-dismissible fade show" role="alert">
                                                <strong>Mind Your Step!</strong> A simple <b>Dismissible light alert</b>
                                                —check it out!
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>

                                            <h6>Dark Alert</h6>
                                            <div class="alert alert-dark text-body alert-dismissible fade show mb-0" role="alert">
                                                <strong>Did you know?</strong> A simple <b>Dismissible dark alert</b>
                                                —check it out!
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div><!--end col-->
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Link Color Alerts</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <p class="text-muted">Use the <code>alert-link</code> class at &lt;a&gt; tag to show
                                        matching colored links within the given alert.</p>

                                    <div class="row">
                                        <div class="col-xl-6">
                                            <h6>Primary Alert</h6>
                                            <div class="alert alert-primary" role="alert">
                                                A simple Primary alert with <a href="#" class="alert-link">an example
                                                    link</a>. Give it a click if you like.
                                            </div>

                                            <h6>Secondary Alert</h6>
                                            <div class="alert alert-secondary" role="alert">
                                                A simple Secondary alert with <a href="#" class="alert-link">an example
                                                    link</a>. Give it a click if you like.
                                            </div>

                                            <h6>Success Alert</h6>
                                            <div class="alert alert-success" role="alert">
                                                A simple Success alert with <a href="#" class="alert-link">an example
                                                    link</a>. Give it a click if you like.
                                            </div>

                                            <h6>Danger Alert</h6>
                                            <div class="alert alert-danger mb-xl-0" role="alert">
                                                A simple Danger alert with <a href="#" class="alert-link">an example
                                                    link</a>. Give it a click if you like.
                                            </div>
                                        </div>

                                        <div class="col-xl-6">
                                            <h6>Warning Alert</h6>
                                            <div class="alert alert-warning" role="alert">
                                                A simple Warning alert with <a href="#" class="alert-link">an example
                                                    link</a>. Give it a click if you like.
                                            </div>

                                            <h6>Info Alert</h6>
                                            <div class="alert alert-info" role="alert">
                                                A simple Info alert with <a href="#" class="alert-link">an example
                                                    link</a>. Give it a click if you like.
                                            </div>

                                            <h6>Light Alert</h6>
                                            <div class="alert alert-light text-body" role="alert">
                                                A simple Light alert with <a href="#" class="alert-link text-body">an example
                                                    link</a>. Give it a click if you like.
                                            </div>

                                            <h6>Dark Alert</h6>
                                            <div class="alert alert-dark text-body mb-0" role="alert">
                                                A simple Dark alert with <a href="#" class="alert-link text-body">an example
                                                    link</a>. Give it a click if you like.
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Live Alert Example</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <p class="text-muted">Click the Show live alert button to show an alert on button
                                        click.</p>
                                    <div id="liveAlertPlaceholder"></div>
                                    <button type="button" class="btn btn-primary" id="liveAlertBtn">Show live
                                        alert</button>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div><!--end col-->
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Outline Alerts</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <p class="text-muted">Use the <code>bg-body-secondary</code> class to set an alert
                                        with outline.</p>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <h6>Primary Outline Alert</h6>
                                            <div class="alert alert-primary alert-dismissible bg-body-secondary fade show"
                                                role="alert">
                                                <strong> Hi! </strong> - Outline <b>primary alert</b> example
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>

                                            <h6>Secondary Outline Alert</h6>
                                            <div class="alert alert-secondary  alert-dismissible bg-body-secondary fade show"
                                                role="alert">
                                                <strong> How are you! </strong> - Outline <b>secondary alert</b> example
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>

                                            <h6>Success Outline Alert</h6>
                                            <div class="alert alert-success alert-dismissible bg-body-secondary fade show"
                                                role="alert">
                                                <strong> Yey! Everything worked! </strong> - Outline <b>success
                                                    alert</b> example
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>

                                            <h6>Danger Outline Alert</h6>
                                            <div class="alert alert-danger alert-dismissible bg-body-secondary fade show mb-xl-0"
                                                role="alert">
                                                <strong> Something is very wrong! </strong> - Outline <b>danger
                                                    alert</b> example
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                        </div>

                                        <div class="col-xl-6">
                                            <h6>Warning Outline Alert</h6>
                                            <div class="alert alert-warning alert-dismissible bg-body-secondary fade show"
                                                role="alert">
                                                <strong> Uh oh, something went wrong! </strong> - Outline <b>warning
                                                    alert</b> example
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>

                                            <h6>Info Outline Alert</h6>
                                            <div class="alert alert-info alert-dismissible bg-body-secondary fade show"
                                                role="alert">
                                                <strong>Don't forget' it !</strong> - Outline <b>info alert</b> example
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>

                                            <h6>Dark Alert</h6>
                                            <div class="alert alert-dark alert-dismissible bg-body-secondary  text-body fade show mb-0"
                                                role="alert">
                                                <strong>Did you know?</strong> - Outline <b>dark alert</b> example
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div><!--end col-->
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Left Border Alerts</h4>
                                </div><!-- end card header -->
                                <div class="card-body">
                                    <p class="text-muted">Use the <code>alert-border-left </code> class to set an alert
                                        with the left border & outline.</p>

                                    <div class="row">
                                        <div class="col-xl-6">
                                            <h6>Primary Alert</h6>
                                            <div class="alert alert-primary alert-border-left alert-dismissible fade show"
                                                role="alert">
                                                <i
                                                    class="ri-user-smile-line me-3 align-middle fs-lg"></i><strong>Primary</strong>
                                                - Left border alert
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>

                                            <h6>Secondary Alert</h6>
                                            <div class="alert alert-secondary alert-border-left alert-dismissible fade show"
                                                role="alert">
                                                <i
                                                    class="ri-check-double-line me-3 align-middle fs-lg"></i><strong>Secondary</strong>
                                                - Left border alert
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>

                                            <h6>Success Alert</h6>
                                            <div class="alert alert-success alert-border-left alert-dismissible fade show"
                                                role="alert">
                                                <i
                                                    class="ri-notification-off-line me-3 align-middle fs-lg"></i><strong>Success</strong>
                                                - Left border alert
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>

                                            <h6>Danger Alert</h6>
                                            <div class="alert alert-danger alert-border-left alert-dismissible fade show mb-xl-0"
                                                role="alert">
                                                <i
                                                    class="ri-error-warning-line me-3 align-middle fs-lg"></i><strong>Danger</strong>
                                                - Left border alert
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                        </div>

                                        <div class="col-xl-6">
                                            <h6>Warning Alert</h6>
                                            <div class="alert alert-warning alert-border-left alert-dismissible fade show"
                                                role="alert">
                                                <i
                                                    class="ri-alert-line me-3 align-middle fs-lg"></i><strong>Warning</strong>
                                                - Left border alert
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>

                                            <h6>Info Alert</h6>
                                            <div class="alert alert-info alert-border-left alert-dismissible fade show"
                                                role="alert">
                                                <i
                                                    class="ri-airplay-line me-3 align-middle fs-lg"></i><strong>Info</strong>
                                                - Left border alert
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>

                                            <h6>Light Alert</h6>
                                            <div class="alert alert-light text-body alert-border-left alert-dismissible fade show"
                                                role="alert">
                                                <i
                                                    class="ri-mail-line me-3 align-middle fs-lg"></i><strong>Light</strong>
                                                - Left border alert
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>

                                            <h6>Dark Alert</h6>
                                            <div class="alert alert-dark text-body alert-border-left alert-dismissible fade show mb-0"
                                                role="alert">
                                                <i
                                                    class="ri-refresh-line me-3  align-middle fs-lg"></i><strong>Dark</strong>
                                                - Left border alert
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                        </div>
                                    </div>

                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Label Icon Alerts</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <p class="text-muted">Use the <code>alert-label-icon</code> class to set an alert
                                        with a label icon.</p>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <h6>Primary Alert</h6>
                                            <div class="alert alert-primary alert-dismissible text-white bg-primary alert-label-icon fade show"
                                                role="alert">
                                                <i class="ri-user-smile-line label-icon"></i><strong>Primary</strong> -
                                                Label icon alert
                                                <button type="button" class="btn-close btn-close-white"
                                                    data-bs-dismiss="alert" aria-label="Close"></button>
                                            </div>

                                            <h6>Secondary Alert</h6>
                                            <div class="alert alert-secondary alert-dismissible text-white bg-secondary alert-label-icon fade show"
                                                role="alert">
                                                <i
                                                    class="ri-check-double-line label-icon"></i><strong>Secondary</strong>
                                                - Label icon alert
                                                <button type="button" class="btn-close btn-close-white"
                                                    data-bs-dismiss="alert" aria-label="Close"></button>
                                            </div>

                                            <h6>Success Alert</h6>
                                            <div class="alert alert-success alert-dismissible text-white bg-success alert-label-icon fade show"
                                                role="alert">
                                                <i
                                                    class="ri-notification-off-line label-icon"></i><strong>Success</strong>
                                                - Label icon alert
                                                <button type="button" class="btn-close btn-close-white"
                                                    data-bs-dismiss="alert" aria-label="Close"></button>
                                            </div>

                                            <h6>Danger Alert</h6>
                                            <div class="alert alert-danger alert-dismissible text-white bg-danger alert-label-icon fade show mb-xl-0"
                                                role="alert">
                                                <i class="ri-error-warning-line label-icon"></i><strong>Danger</strong>
                                                - Label
                                                icon alert
                                                <button type="button" class="btn-close btn-close-white"
                                                    data-bs-dismiss="alert" aria-label="Close"></button>
                                            </div>
                                        </div>

                                        <div class="col-xl-6">
                                            <h6>Warning Alert</h6>
                                            <div class="alert alert-warning alert-dismissible text-white bg-warning alert-label-icon fade show"
                                                role="alert">
                                                <i class="ri-alert-line label-icon"></i><strong>Warning</strong> - Label
                                                icon alert
                                                <button type="button" class="btn-close btn-close-white"
                                                    data-bs-dismiss="alert" aria-label="Close"></button>
                                            </div>

                                            <h6>Info Alert</h6>
                                            <div class="alert alert-info alert-dismissible text-white bg-info alert-label-icon fade show"
                                                role="alert">
                                                <i class="ri-airplay-line label-icon"></i><strong>Info</strong> - Label
                                                icon alert
                                                <button type="button" class="btn-close btn-close-white"
                                                    data-bs-dismiss="alert" aria-label="Close"></button>
                                            </div>

                                            <h6>Light Alert</h6>
                                            <div class="alert alert-light alert-dismissible text-body bg-light alert-label-icon fade show"
                                                role="alert">
                                                <i class="ri-mail-line label-icon"></i><strong>Light</strong> -
                                                Label icon alert
                                                <button type="button" class="btn-close btn-close-white"
                                                    data-bs-dismiss="alert" aria-label="Close"></button>
                                            </div>

                                            <h6>Dark Alert</h6>
                                            <div class="alert alert-dark alert-dismissible text-white bg-dark alert-label-icon fade show mb-0"
                                                role="alert">
                                                <i class="ri-refresh-line label-icon"></i><strong>Dark</strong> -
                                                Label icon alert
                                                <button type="button" class="btn-close btn-close-white"
                                                    data-bs-dismiss="alert" aria-label="Close"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div><!--end col-->
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Additional Content Alerts</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <p class="text-muted">Use the <code>alert-additional</code> class and Use the
                                        <code>alert-</code> class to HTML elements like headings, paragraphs, dividers
                                        etc.
                                    </p>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <h6>Primary Alert</h6>
                                            <div class="alert alert-primary alert-dismissible alert-additional fade show"
                                                role="alert">
                                                <div class="alert-body">
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                        aria-label="Close"></button>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 me-3">
                                                            <i class="ri-error-warning-line fs-lg align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h5 class="alert-heading">Well done !</h5>
                                                            <p class="mb-0">Aww yeah, you successfully read this
                                                                important alert message. </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="alert-content">
                                                    <p class="mb-0">Whenever you need to, be sure to use margin
                                                        utilities to keep things nice and tidy.</p>
                                                </div>
                                            </div>

                                            <h6>Danger Alert</h6>
                                            <div class="alert alert-danger alert-dismissible alert-additional fade show mb-xl-0"
                                                role="alert">
                                                <div class="alert-body">
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                        aria-label="Close"></button>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 me-3">
                                                            <i class="ri-alert-line fs-lg align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h5 class="alert-heading">Something is very wrong!</h5>
                                                            <p class="mb-0">Change a few things up and try submitting
                                                                again.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="alert-content">
                                                    <p class="mb-0">Whenever you need to, be sure to use margin
                                                        utilities to keep things nice and tidy.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-6">

                                            <h6>Success Alert</h6>
                                            <div class="alert alert-success alert-dismissible alert-additional fade show"
                                                role="alert">
                                                <div class="alert-body">
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                        aria-label="Close"></button>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 me-3">
                                                            <i class="ri-notification-off-line fs-lg align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h5 class="alert-heading">Yey! Everything worked!</h5>
                                                            <p class="mb-0">This alert needs your attention, but it's
                                                                not super important.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="alert-content">
                                                    <p class="mb-0">Whenever you need to, be sure to use margin
                                                        utilities to keep things nice and tidy.</p>
                                                </div>
                                            </div>

                                            <h6>Warning Alert</h6>
                                            <div class="alert alert-warning alert-dismissible alert-additional fade show mb-0"
                                                role="alert">
                                                <div class="alert-body">
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                        aria-label="Close"></button>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 me-3">
                                                            <i class="ri-alert-line fs-lg align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h5 class="alert-heading">Uh oh, something went wrong!</h5>
                                                            <p class="mb-0">Better check yourself, you're not looking
                                                                too good.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="alert-content">
                                                    <p class="mb-0">Whenever you need to, be sure to use margin
                                                        utilities to keep things nice and tidy.</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Top Border with Outline Alerts</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <p class="text-muted">Use the <code>alert-top-border</code> class to set an alert
                                        with the top border and outline.</p>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <h6>Primary Alert</h6>
                                            <div class="alert alert-primary alert-top-border alert-dismissible fade show"
                                                role="alert">
                                                <i
                                                    class="ri-user-smile-line me-3 align-middle fs-lg text-primary"></i><strong>Primary</strong>
                                                - Top border alert
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>


                                            <h6>Secondary Alert</h6>
                                            <div class="alert alert-secondary alert-top-border alert-dismissible fade show"
                                                role="alert">
                                                <i
                                                    class="ri-check-double-line me-3 align-middle fs-lg text-secondary"></i><strong>Secondary</strong>
                                                - Top border alert
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>

                                            <h6>Success Alert</h6>
                                            <div class="alert alert-success alert-top-border alert-dismissible fade show"
                                                role="alert">
                                                <i
                                                    class="ri-notification-off-line me-3 align-middle fs-lg text-success"></i><strong>Success</strong>
                                                - Top border alert
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>

                                            <h6>Danger Alert</h6>
                                            <div class="alert alert-danger alert-top-border alert-dismissible fade show mb-xl-0"
                                                role="alert">
                                                <i
                                                    class="ri-error-warning-line me-3 align-middle fs-lg text-danger "></i><strong>Danger</strong>
                                                - Top border alert
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                        </div>

                                        <div class="col-xl-6">
                                            <h6>Warning Alert</h6>
                                            <div class="alert alert-warning alert-top-border alert-dismissible fade show"
                                                role="alert">
                                                <i
                                                    class="ri-alert-line me-3 align-middle fs-lg text-warning"></i><strong>Warning</strong>
                                                - Top border alert
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>

                                            <h6>Info Alert</h6>
                                            <div class="alert alert-info alert-top-border alert-dismissible fade show"
                                                role="alert">
                                                <i
                                                    class="ri-airplay-line me-3 align-middle fs-lg text-info"></i><strong>Info</strong>
                                                - Top border alert
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>

                                            <h6>Light Alert</h6>
                                            <div class="alert alert-light alert-top-border alert-dismissible fade show"
                                                role="alert">
                                                <i
                                                    class="ri-mail-line me-3 align-middle fs-lg text-body"></i><strong>Light</strong>
                                                - Top border alert
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>

                                            <h6>Dark Alert</h6>
                                            <div class="alert alert-dark alert-top-border alert-dismissible fade show mb-0"
                                                role="alert">
                                                <i
                                                    class="ri-refresh-line me-3 align-middle fs-lg text-body"></i><strong>Dark</strong>
                                                - Top border alert
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Label Icon Arrow Alerts</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <p class="text-muted">Use the <code>alert-label-icon label-arrow</code> class to
                                        show an alert with label icon and arrow.</p>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <h6>Primary Alert</h6>
                                            <div class="alert alert-primary alert-dismissible alert-label-icon label-arrow fade show"
                                                role="alert">
                                                <i class="ri-user-smile-line label-icon"></i><strong>Primary</strong> -
                                                Label icon arrow alert
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>

                                            <h6>Secondary Alert</h6>
                                            <div class="alert alert-secondary alert-dismissible alert-label-icon label-arrow fade show"
                                                role="alert">
                                                <i
                                                    class="ri-check-double-line label-icon"></i><strong>Secondary</strong>
                                                -
                                                Label icon
                                                arrow alert
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>

                                            <h6>Success Alert</h6>
                                            <div class="alert alert-success alert-dismissible alert-label-icon label-arrow fade show"
                                                role="alert">
                                                <i
                                                    class="ri-notification-off-line label-icon"></i><strong>Success</strong>
                                                - Label
                                                icon arrow alert
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>

                                            <h6>Danger Alert</h6>
                                            <div class="alert alert-danger alert-dismissible alert-label-icon label-arrow fade show mb-xl-0"
                                                role="alert">
                                                <i class="ri-error-warning-line label-icon"></i><strong>Danger</strong>
                                                - Label
                                                icon arrow alert
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                        </div>

                                        <div class="col-xl-6">
                                            <h6>Warning Alert</h6>
                                            <div class="alert alert-warning alert-dismissible alert-label-icon label-arrow fade show"
                                                role="alert">
                                                <i class="ri-alert-line label-icon"></i><strong>Warning</strong> -
                                                Label icon arrow alert
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>

                                            <h6>info Alert</h6>
                                            <div class="alert alert-info alert-dismissible alert-label-icon label-arrow fade show"
                                                role="alert">
                                                <i class="ri-airplay-line label-icon"></i><strong>Info</strong> -
                                                Label icon arrow alert
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>

                                            <h6>Light Alert</h6>
                                            <div class="alert alert-light text-body alert-dismissible alert-label-icon label-arrow fade show"
                                                role="alert">
                                                <i class="ri-mail-line label-icon"></i><strong>Light</strong>
                                                - Label icon arrow alert
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>

                                            <h6>Dark Alert</h6>
                                            <div class="alert alert-dark text-body alert-dismissible alert-label-icon label-arrow fade show mb-0"
                                                role="alert">
                                                <i class="ri-refresh-line label-icon"></i><strong>Dark</strong>
                                                - Label icon arrow alert
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Rounded Label Icon Alerts</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <p class="text-muted">Use the <code>alert-label-icon rounded-label</code> class to
                                        set an alert with a rounded label icon.</p>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <h6>Primary Alert</h6>
                                            <div class="alert alert-primary alert-dismissible alert-label-icon rounded-label fade show"
                                                role="alert">
                                                <i class="ri-user-smile-line label-icon"></i><strong>Primary</strong> -
                                                Rounded label alert
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>

                                            <h6>Secondary Alert</h6>
                                            <div class="alert alert-secondary alert-dismissible alert-label-icon rounded-label fade show"
                                                role="alert">
                                                <i
                                                    class="ri-check-double-line label-icon"></i><strong>Secondary</strong>
                                                - Rounded
                                                label alert
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>

                                            <h6>Success Alert</h6>
                                            <div class="alert alert-success alert-dismissible alert-label-icon rounded-label fade show"
                                                role="alert">
                                                <i
                                                    class="ri-notification-off-line label-icon"></i><strong>Success</strong>
                                                - Rounded
                                                label alert
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>

                                            <h6>Danger Alert</h6>
                                            <div class="alert alert-danger alert-dismissible alert-label-icon rounded-label fade show mb-xl-0"
                                                role="alert">
                                                <i class="ri-error-warning-line label-icon"></i><strong>Danger</strong>
                                                - Rounded
                                                label alert
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                        </div>

                                        <div class="col-xl-6">
                                            <h6>Warning Alert</h6>
                                            <div class="alert alert-warning alert-dismissible alert-label-icon rounded-label fade show"
                                                role="alert">
                                                <i class="ri-alert-line label-icon"></i><strong>Warning</strong> -
                                                Rounded
                                                label alert
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>

                                            <h6>Info Alert</h6>
                                            <div class="alert alert-info alert-dismissible alert-label-icon rounded-label fade show"
                                                role="alert">
                                                <i class="ri-airplay-line label-icon"></i><strong>Info</strong> -
                                                Rounded label
                                                alert
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>

                                            <h6>Light Alert</h6>
                                            <div class="alert alert-light text-body alert-dismissible alert-label-icon rounded-label fade show"
                                                role="alert">
                                                <i class="ri-mail-line label-icon"></i><strong>Light</strong> -
                                                Rounded label
                                                alert
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>

                                            <h6>Dark Alert</h6>
                                            <div class="alert alert-dark text-body alert-dismissible alert-label-icon rounded-label fade show mb-0"
                                                role="alert">
                                                <i class="ri-refresh-line label-icon"></i><strong>Dark</strong> -
                                                Rounded label
                                                alert
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                        </div>

                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Solid Alerts</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <p class="text-muted">Use the <code>border-*</code>, <code>bg-*</code>,
                                        <code>text-white</code> class to set an alert with solid style.
                                    </p>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <h6>Primary Solid Alert</h6>
                                            <div class="alert alert-primary border-primary bg-primary text-white"
                                                role="alert">
                                                <strong>Hi!</strong> - Solid <b>primary alert</b> example
                                            </div>

                                            <h6>Secondary Solid Alert</h6>
                                            <div class="alert alert-secondary border-secondary bg-secondary text-white"
                                                role="alert">
                                                <strong>How are you!</strong> - Solid <b>secondary alert</b> example
                                            </div>

                                            <h6>Success Solid Alert</h6>
                                            <div class="alert alert-success border-success bg-success text-white"
                                                role="alert">
                                                <strong>Yey! Everything worked! </strong> - Solid <b>success alert</b>
                                                example
                                            </div>

                                            <h6>Danger Solid Alert</h6>
                                            <div class="alert alert-danger border-danger bg-danger text-white mb-xl-0"
                                                role="alert">
                                                <strong>Something is very wrong!</strong> - Solid <b>danger alert</b>
                                                example
                                            </div>
                                        </div>

                                        <div class="col-xl-6">
                                            <h6>Warning Solid Alert</h6>
                                            <div class="alert alert-warning border-warning bg-warning text-white"
                                                role="alert">
                                                <strong>Uh oh, something went wrong!</strong> - Solid <b>warning
                                                    alert</b> example
                                            </div>

                                            <h6>Info Solid Alert</h6>
                                            <div class="alert alert-info border-info bg-info text-white" role="alert">
                                                <strong>Don't forget' it !</strong> - Solid <b>info alert</b> example
                                            </div>


                                            <h6>Light Solid Alert</h6>
                                            <div class="alert alert-light border-light bg-light text-body" role="alert">
                                                <strong>Mind Your Step!</strong> - Solid <b>secondary alert</b> example
                                            </div>

                                            <h6>Dark Solid Alert</h6>
                                            <div class="alert alert-dark border-dark bg-dark text-white mb-0"
                                                role="alert">
                                                <strong>Did you know?</strong> - Solid <b>dark alert</b> example
                                            </div>

                                        </div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                    </div><!--end row-->

                </div> <!-- container-fluid -->
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

    <script>
        var alertPlaceholder = document.getElementById('liveAlertPlaceholder')
        var alertTrigger = document.getElementById('liveAlertBtn')

        function alert(message, type) {
            var wrapper = document.createElement('div')
            wrapper.innerHTML = '<div class="alert alert-' + type + ' alert-dismissible" role="alert">' + message + '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'

            alertPlaceholder.append(wrapper)
        }

        if (alertTrigger) {
            alertTrigger.addEventListener('click', function () {
                alert('Nice, you triggered this alert message!', 'success')
            })
        }
    </script>

    <script src="assets/js/app.js"></script>

</body>

</html>