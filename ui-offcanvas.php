<?php include 'partials/main.php'; ?>

<head>
<?php includeFileWithVariables('partials/title-meta.php', array('title' => 'Offcanvas')); ?>


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
                <?php includeFileWithVariables('partials/page-title.php', array('pagetitle' => 'Base UI', 'title' => 'Offcanvas')); ?>
                
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Default Offcanvas</h4>
                                </div><!-- end card header -->
                                <div class="card-body">
                                    <p class="text-muted">Use the <code>offcanvas</code> class to set a default
                                        offcanvas.</p>
                                    <div class="hstack flex-wrap gap-2">
                                        <a class="btn btn-secondary" data-bs-toggle="offcanvas" href="#offcanvasExample"
                                            role="button" aria-controls="offcanvasExample">
                                            Link with href
                                        </a>
                                        <button class="btn btn-secondary" type="button" data-bs-toggle="offcanvas"
                                            data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                                            Button with data-bs-target
                                        </button>
                                    </div>
                                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
                                        aria-labelledby="offcanvasExampleLabel">
                                        <div class="offcanvas-header border-bottom">
                                            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Recent Acitivity</h5>
                                            <button type="button" class="btn-close text-reset"
                                                data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        </div>
                                        <div class="offcanvas-body p-0 overflow-hidden">
                                            <div data-simplebar style="height: calc(100vh - 112px);">
                                                <div class="acitivity-timeline p-4">
                                                    <div class="acitivity-item d-flex">
                                                        <div class="flex-shrink-0">
                                                            <img src="assets/images/users/avatar-1.jpg" alt=""
                                                                class="avatar-xs rounded-circle acitivity-avatar">
                                                        </div>
                                                        <div class="flex-grow-1 ms-3">
                                                            <h6 class="mb-1">Oliver Phillips <span
                                                                    class="badge bg-primary-subtle text-primary align-middle">New</span>
                                                            </h6>
                                                            <p class="text-muted mb-2">We talked about a project on
                                                                linkedin.</p>
                                                            <small class="mb-0 text-muted">Today</small>
                                                        </div>
                                                    </div>
                                                    <div class="acitivity-item py-3 d-flex">
                                                        <div class="flex-shrink-0 avatar-xs acitivity-avatar rounded-circle rounded-circle">
                                                            <div
                                                                class="avatar-title bg-success-subtle text-success rounded-circle">
                                                                N
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1 ms-3">
                                                            <h6 class="mb-1">Nancy Martino <span
                                                                    class="badge bg-secondary-subtle text-secondary align-middle">In
                                                                    Progress</span></h6>
                                                            <p class="text-muted mb-2"><i
                                                                    class="ri-file-text-line align-middle ms-2"></i>
                                                                Create new project Buildng product</p>
                                                            <div class="avatar-group mb-2">
                                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="" data-bs-original-title="Christi">
                                                                    <img src="assets/images/users/avatar-4.jpg" alt=""
                                                                        class="rounded-circle avatar-xs">
                                                                </a>
                                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="" data-bs-original-title="Frank Hook">
                                                                    <img src="assets/images/users/avatar-3.jpg" alt=""
                                                                        class="rounded-circle avatar-xs">
                                                                </a>
                                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="" data-bs-original-title=" Ruby">
                                                                    <div class="avatar-xs">
                                                                        <div
                                                                            class="avatar-title rounded-circle bg-light text-primary">
                                                                            R
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="" data-bs-original-title="more">
                                                                    <div class="avatar-xs">
                                                                        <div class="avatar-title rounded-circle">
                                                                            2+
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <small class="mb-0 text-muted">Yesterday</small>
                                                        </div>
                                                    </div>
                                                    <div class="acitivity-item py-3 d-flex">
                                                        <div class="flex-shrink-0">
                                                            <img src="assets/images/users/avatar-2.jpg" alt=""
                                                                class="avatar-xs rounded-circle acitivity-avatar">
                                                        </div>
                                                        <div class="flex-grow-1 ms-3">
                                                            <h6 class="mb-1">Natasha Carey <span
                                                                    class="badge bg-success-subtle text-success align-middle">Completed</span>
                                                            </h6>
                                                            <p class="text-muted mb-2">Adding a new event with
                                                                attachments</p>
                                                            <div class="row border border-dashed gx-2 p-2 mb-2">
                                                                <div class="col-4">
                                                                    <img src="assets/images/small/img-2.jpg" alt=""
                                                                        class="img-fluid rounded">
                                                                </div>
                                                                <div class="col-4">
                                                                    <img src="assets/images/small/img-3.jpg" alt=""
                                                                        class="img-fluid rounded">
                                                                </div>
                                                                <div class="col-4">
                                                                    <img src="assets/images/small/img-4.jpg" alt=""
                                                                        class="img-fluid rounded">
                                                                </div>
                                                            </div>
                                                            <small class="mb-0 text-muted">25 Nov</small>
                                                        </div>
                                                    </div>
                                                    <div class="acitivity-item py-3 d-flex">
                                                        <div class="flex-shrink-0">
                                                            <img src="assets/images/users/avatar-6.jpg" alt=""
                                                                class="avatar-xs rounded-circle acitivity-avatar">
                                                        </div>
                                                        <div class="flex-grow-1 ms-3">
                                                            <h6 class="mb-1">Bethany Johnson</h6>
                                                            <p class="text-muted mb-2">added a new member to Hybrix
                                                                dashboard</p>
                                                            <small class="mb-0 text-muted">19 Nov</small>
                                                        </div>
                                                    </div>
                                                    <div class="acitivity-item py-3 d-flex">
                                                        <div class="flex-shrink-0">
                                                            <div class="avatar-xs acitivity-avatar rounded-circle">
                                                                <div
                                                                    class="avatar-title rounded-circle bg-danger-subtle text-danger">
                                                                    <i class="ri-shopping-bag-line"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1 ms-3">
                                                            <h6 class="mb-1">Your order is placed <span
                                                                    class="badge bg-danger-subtle text-danger align-middle ms-1">Out
                                                                    of Delivery</span></h6>
                                                            <p class="text-muted mb-2">These customers can rest assured
                                                                their order has been placed.</p>
                                                            <small class="mb-0 text-muted">16 Nov</small>
                                                        </div>
                                                    </div>
                                                    <div class="acitivity-item py-3 d-flex">
                                                        <div class="flex-shrink-0">
                                                            <img src="assets/images/users/avatar-7.jpg" alt=""
                                                                class="avatar-xs rounded-circle acitivity-avatar">
                                                        </div>
                                                        <div class="flex-grow-1 ms-3">
                                                            <h6 class="mb-1">Lewis Pratt</h6>
                                                            <p class="text-muted mb-2">They all have something to say
                                                                beyond the words on the page. They can come across as
                                                                casual or neutral, exotic or graphic. </p>
                                                            <small class="mb-0 text-muted">22 Oct</small>
                                                        </div>
                                                    </div>
                                                    <div class="acitivity-item py-3 d-flex">
                                                        <div class="flex-shrink-0">
                                                            <div class="avatar-xs acitivity-avatar rounded-circle">
                                                                <div
                                                                    class="avatar-title rounded-circle bg-info-subtle text-info">
                                                                    <i class="ri-line-chart-line"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1 ms-3">
                                                            <h6 class="mb-1">Monthly sales report</h6>
                                                            <p class="text-muted mb-2"><span class="text-danger">2 days
                                                                    left</span> notification to submit the monthly sales
                                                                report. <a href="javascript:void(0);"
                                                                    class="link-warning text-decoration-underline">Reports
                                                                    Builder</a></p>
                                                            <small class="mb-0 text-muted">15 Oct</small>
                                                        </div>
                                                    </div>
                                                    <div class="acitivity-item d-flex">
                                                        <div class="flex-shrink-0">
                                                            <img src="assets/images/users/avatar-8.jpg" alt=""
                                                                class="avatar-xs rounded-circle acitivity-avatar">
                                                        </div>
                                                        <div class="flex-grow-1 ms-3">
                                                            <h6 class="mb-1">New ticket received <span
                                                                    class="badge bg-success-subtle text-success align-middle">Completed</span>
                                                            </h6>
                                                            <p class="text-muted mb-2">User <span
                                                                    class="text-secondary">Erica245</span> submitted a
                                                                ticket.</p>
                                                            <small class="mb-0 text-muted">26 Aug</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="offcanvas-foorter border-top p-3 text-center">
                                            <a href="javascript:void(0);" class="link-success">View All Acitivity <i
                                                    class="ri-arrow-right-s-line align-middle ms-1"></i></a>
                                        </div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                    </div><!-- end row -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Placement Offcanvas</h4>
                                </div><!-- end card header -->
                                <div class="card-body">
                                    <p class="text-muted">Use <code>offcanvas-top</code>, <code>offcanvas-end</code>,
                                        <code>offcanvas-bottom</code>, or <code>offcanvas-start</code> to offcanvas
                                        class to set different Offcanvas Placement.
                                    </p>
                                    <div>
                                        <div class="d-flex flex-wrap gap-2">
                                            <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                                                data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">Toggle Top
                                                Offcanvas</button>
                                            <button class="btn btn-secondary" type="button" data-bs-toggle="offcanvas"
                                                data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Toggle
                                                Right Offcanvas</button>
                                            <button class="btn btn-success" type="button" data-bs-toggle="offcanvas"
                                                data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">Toggle
                                                Bottom Offcanvas</button>
                                            <button class="btn btn-danger" type="button" data-bs-toggle="offcanvas"
                                                data-bs-target="#offcanvasLeft" aria-controls="offcanvasLeft">Toggle
                                                Left Offcanvas</button>
                                        </div>

                                        <!-- top offcanvas -->
                                        <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop"
                                            aria-labelledby="offcanvasTopLabel" style="min-height:46vh;">
                                            <div class="offcanvas-header border-bottom">
                                                <h5 class="offcanvas-title" id="offcanvasTopLabel">Gallery</h5>
                                                <button type="button" class="btn-close text-reset"
                                                    data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                            </div>
                                            <div class="offcanvas-body">
                                                <div class="row gallery-light">
                                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                                        <div class="gallery-box card light mb-0">
                                                            <div class="gallery-container">
                                                                <a href="#" title="">
                                                                    <img class="gallery-img img-fluid mx-auto"
                                                                        src="assets/images/small/img-12.jpg" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="box-content px-3 py-2">
                                                                <div class="gallery-overlay">
                                                                    <h5 class="overlay-caption">A mix of friends and
                                                                        strangers adventure.</h5>
                                                                </div>
                                                                <div class="d-flex align-items-center mt-1">
                                                                    <div class="flex-grow-1 text-muted">by <a href=""
                                                                            class="text-body text-truncate">Erica
                                                                            Kernan</a></div>
                                                                    <div class="flex-shrink-0">
                                                                        <div class="d-flex gap-3">
                                                                            <button type="button"
                                                                                class="btn btn-sm fs-xs btn-link text-body text-decoration-none px-0">
                                                                                <i
                                                                                    class="ri-thumb-up-fill text-muted align-bottom me-1"></i>
                                                                                3.4K
                                                                            </button>
                                                                            <button type="button"
                                                                                class="btn btn-sm fs-xs btn-link text-body text-decoration-none px-0">
                                                                                <i
                                                                                    class="ri-question-answer-fill text-muted align-bottom me-1"></i>
                                                                                1.3k
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                                        <div class="gallery-box card light mb-0">
                                                            <div class="gallery-container">
                                                                <a href="#" title="">
                                                                    <img class="gallery-img img-fluid mx-auto"
                                                                        src="assets/images/small/img-9.jpg" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="box-content px-3 py-2">
                                                                <div class="gallery-overlay">
                                                                    <h5 class="overlay-caption">Dramatic clouds at the
                                                                        Golden Gate Bridge</h5>
                                                                </div>
                                                                <div class="d-flex align-items-center mt-1">
                                                                    <div class="flex-grow-1 text-muted">by <a href=""
                                                                            class="text-body text-truncate">Ron
                                                                            Mackie</a></div>
                                                                    <div class="flex-shrink-0">
                                                                        <div class="d-flex gap-3">
                                                                            <button type="button"
                                                                                class="btn btn-sm fs-xs btn-link text-body text-decoration-none px-0">
                                                                                <i
                                                                                    class="ri-thumb-up-fill text-muted align-bottom me-1"></i>
                                                                                5.1K
                                                                            </button>
                                                                            <button type="button"
                                                                                class="btn btn-sm fs-xs btn-link text-body text-decoration-none px-0">
                                                                                <i
                                                                                    class="ri-question-answer-fill text-muted align-bottom me-1"></i>
                                                                                4.7k
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                                        <div class="gallery-box card mb-0">
                                                            <div class="gallery-container">
                                                                <a href="#" title="">
                                                                    <img class="gallery-img img-fluid mx-auto"
                                                                        src="assets/images/small/img-11.jpg" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="box-content px-3 py-2">
                                                                <div class="gallery-overlay">
                                                                    <h5 class="overlay-caption">Cycling in the
                                                                        countryside</h5>
                                                                </div>


                                                                <div class="d-flex align-items-center mt-1">
                                                                    <div class="flex-grow-1 text-muted">by <a href=""
                                                                            class="text-body text-truncate">Nancy
                                                                            Martino</a></div>
                                                                    <div class="flex-shrink-0">
                                                                        <div class="d-flex gap-3">
                                                                            <button type="button"
                                                                                class="btn btn-sm fs-xs btn-link text-body text-decoration-none px-0">
                                                                                <i
                                                                                    class="ri-thumb-up-fill text-muted align-bottom me-1"></i>
                                                                                3.2K
                                                                            </button>
                                                                            <button type="button"
                                                                                class="btn btn-sm fs-xs btn-link text-body text-decoration-none px-0">
                                                                                <i
                                                                                    class="ri-question-answer-fill text-muted align-bottom me-1"></i>
                                                                                1.1K
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-xl-3 col-lg-4 col-sm-6 d-md-none d-xl-block">
                                                        <div class="gallery-box card mb-0">
                                                            <div class="gallery-container">
                                                                <a href="#" title="">
                                                                    <img class="gallery-img img-fluid mx-auto"
                                                                        src="assets/images/small/img-10.jpg" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="box-content px-3 py-2">
                                                                <div class="gallery-overlay">
                                                                    <h5 class="overlay-caption">Fun day at the Hill
                                                                        Station</h5>
                                                                </div>
                                                                <div class="d-flex align-items-center mt-1">
                                                                    <div class="flex-grow-1 text-muted">by <a href=""
                                                                            class="text-body text-truncate">Henry
                                                                            Baird</a></div>
                                                                    <div class="flex-shrink-0">
                                                                        <div class="d-flex gap-3">
                                                                            <button type="button"
                                                                                class="btn btn-sm fs-xs btn-link text-body text-decoration-none px-0">
                                                                                <i
                                                                                    class="ri-thumb-up-fill text-muted align-bottom me-1"></i>
                                                                                632
                                                                            </button>
                                                                            <button type="button"
                                                                                class="btn btn-sm fs-xs btn-link text-body text-decoration-none px-0">
                                                                                <i
                                                                                    class="ri-question-answer-fill text-muted align-bottom me-1"></i>
                                                                                95
                                                                            </button>
                                                                        </div>
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

                                        <!-- right offcanvas -->
                                        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
                                            aria-labelledby="offcanvasRightLabel">
                                            <div class="offcanvas-header border-bottom">
                                                <h5 class="offcanvas-title" id="offcanvasRightLabel">Recent Acitivity
                                                </h5>
                                                <button type="button" class="btn-close text-reset"
                                                    data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                            </div>
                                            <div class="offcanvas-body p-0 overflow-hidden">
                                                <div data-simplebar style="height: calc(100vh - 112px);">
                                                    <div class="acitivity-timeline p-4">
                                                        <div class="acitivity-item d-flex">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/users/avatar-1.jpg" alt=""
                                                                    class="avatar-xs rounded-circle acitivity-avatar">
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h6 class="mb-1">Oliver Phillips <span
                                                                        class="badge bg-primary-subtle text-primary align-middle">New</span>
                                                                </h6>
                                                                <p class="text-muted mb-2">We talked about a project on
                                                                    linkedin.</p>
                                                                <small class="mb-0 text-muted">Today</small>
                                                            </div>
                                                        </div>
                                                        <div class="acitivity-item py-3 d-flex">
                                                            <div class="flex-shrink-0 avatar-xs acitivity-avatar rounded-circle rounded-circle">
                                                                <div
                                                                    class="avatar-title bg-success-subtle text-success rounded-circle">
                                                                    N
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h6 class="mb-1">Nancy Martino <span
                                                                        class="badge bg-secondary-subtle text-secondary align-middle">In
                                                                        Progress</span></h6>
                                                                <p class="text-muted mb-2"><i
                                                                        class="ri-file-text-line align-middle ms-2"></i>
                                                                    Create new project Buildng product</p>
                                                                <div class="avatar-group mb-2">
                                                                    <a href="javascript: void(0);"
                                                                        class="avatar-group-item"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        title="" data-bs-original-title="Christi">
                                                                        <img src="assets/images/users/avatar-4.jpg"
                                                                            alt="" class="rounded-circle avatar-xs">
                                                                    </a>
                                                                    <a href="javascript: void(0);"
                                                                        class="avatar-group-item"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        title="" data-bs-original-title="Frank Hook">
                                                                        <img src="assets/images/users/avatar-3.jpg"
                                                                            alt="" class="rounded-circle avatar-xs">
                                                                    </a>
                                                                    <a href="javascript: void(0);"
                                                                        class="avatar-group-item"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        title="" data-bs-original-title=" Ruby">
                                                                        <div class="avatar-xs">
                                                                            <div
                                                                                class="avatar-title rounded-circle bg-light text-primary">
                                                                                R
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                    <a href="javascript: void(0);"
                                                                        class="avatar-group-item"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        title="" data-bs-original-title="more">
                                                                        <div class="avatar-xs">
                                                                            <div class="avatar-title rounded-circle">
                                                                                2+
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <small class="mb-0 text-muted">Yesterday</small>
                                                            </div>
                                                        </div>
                                                        <div class="acitivity-item py-3 d-flex">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/users/avatar-2.jpg" alt=""
                                                                    class="avatar-xs rounded-circle acitivity-avatar">
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h6 class="mb-1">Natasha Carey <span
                                                                        class="badge bg-success-subtle text-success align-middle">Completed</span>
                                                                </h6>
                                                                <p class="text-muted mb-2">Adding a new event with
                                                                    attachments</p>
                                                                <div class="row border border-dashed gx-2 p-2 mb-2">
                                                                    <div class="col-4">
                                                                        <img src="assets/images/small/img-2.jpg" alt=""
                                                                            class="img-fluid rounded">
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <img src="assets/images/small/img-3.jpg" alt=""
                                                                            class="img-fluid rounded">
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <img src="assets/images/small/img-4.jpg" alt=""
                                                                            class="img-fluid rounded">
                                                                    </div>
                                                                </div>
                                                                <small class="mb-0 text-muted">25 Nov</small>
                                                            </div>
                                                        </div>
                                                        <div class="acitivity-item py-3 d-flex">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/users/avatar-6.jpg" alt=""
                                                                    class="avatar-xs rounded-circle acitivity-avatar">
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h6 class="mb-1">Bethany Johnson</h6>
                                                                <p class="text-muted mb-2">added a new member to Hybrix
                                                                    dashboard</p>
                                                                <small class="mb-0 text-muted">19 Nov</small>
                                                            </div>
                                                        </div>
                                                        <div class="acitivity-item py-3 d-flex">
                                                            <div class="flex-shrink-0">
                                                                <div class="avatar-xs acitivity-avatar rounded-circle">
                                                                    <div
                                                                        class="avatar-title rounded-circle bg-danger-subtle text-danger">
                                                                        <i class="ri-shopping-bag-line"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h6 class="mb-1">Your order is placed <span
                                                                        class="badge bg-danger-subtle text-danger align-middle ms-1">Out
                                                                        of Delivery</span></h6>
                                                                <p class="text-muted mb-2">These customers can rest
                                                                    assured their order has been placed.</p>
                                                                <small class="mb-0 text-muted">16 Nov</small>
                                                            </div>
                                                        </div>
                                                        <div class="acitivity-item py-3 d-flex">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/users/avatar-7.jpg" alt=""
                                                                    class="avatar-xs rounded-circle acitivity-avatar">
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h6 class="mb-1">Lewis Pratt</h6>
                                                                <p class="text-muted mb-2">They all have something to
                                                                    say beyond the words on the page. They can come
                                                                    across as casual or neutral, exotic or graphic. </p>
                                                                <small class="mb-0 text-muted">22 Oct</small>
                                                            </div>
                                                        </div>
                                                        <div class="acitivity-item py-3 d-flex">
                                                            <div class="flex-shrink-0">
                                                                <div class="avatar-xs acitivity-avatar rounded-circle">
                                                                    <div
                                                                        class="avatar-title rounded-circle bg-info-subtle text-info">
                                                                        <i class="ri-line-chart-line"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h6 class="mb-1">Monthly sales report</h6>
                                                                <p class="text-muted mb-2"><span class="text-danger">2
                                                                        days left</span> notification to submit the
                                                                    monthly sales report. <a href="javascript:void(0);"
                                                                        class="link-warning text-decoration-underline">Reports
                                                                        Builder</a></p>
                                                                <small class="mb-0 text-muted">15 Oct</small>
                                                            </div>
                                                        </div>
                                                        <div class="acitivity-item d-flex">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/users/avatar-8.jpg" alt=""
                                                                    class="avatar-xs rounded-circle acitivity-avatar">
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h6 class="mb-1">New ticket received <span
                                                                        class="badge bg-success-subtle text-success align-middle">Completed</span>
                                                                </h6>
                                                                <p class="text-muted mb-2">User <span
                                                                        class="text-secondary">Erica245</span> submitted
                                                                    a ticket.</p>
                                                                <small class="mb-0 text-muted">26 Aug</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="offcanvas-foorter border p-3 text-center">
                                                <a href="javascript:void(0);" class="link-success">View All Acitivity <i
                                                        class="ri-arrow-right-s-line align-middle ms-1"></i></a>
                                            </div>
                                        </div>

                                        <!-- bottom offcanvas -->
                                        <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom"
                                            aria-labelledby="offcanvasBottomLabel" style="min-height:46vh;">
                                            <div class="offcanvas-header border-bottom">
                                                <h5 class="offcanvas-title" id="offcanvasBottomLabel">Gallery</h5>
                                                <button type="button" class="btn-close text-reset"
                                                    data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                            </div>
                                            <div class="offcanvas-body py-4">
                                                <div class="row gallery-light">
                                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                                        <div class="gallery-box card light mb-0">
                                                            <div class="gallery-container">
                                                                <a href="#" title="">
                                                                    <img class="gallery-img img-fluid mx-auto"
                                                                        src="assets/images/small/img-12.jpg" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="box-content px-3 py-2">
                                                                <div class="gallery-overlay">
                                                                    <h5 class="overlay-caption">A mix of friends and
                                                                        strangers adventure.</h5>
                                                                </div>
                                                                <div class="d-flex align-items-center mt-1">
                                                                    <div class="flex-grow-1 text-muted">by <a href=""
                                                                            class="text-body text-truncate">Erica
                                                                            Kernan</a></div>
                                                                    <div class="flex-shrink-0">
                                                                        <div class="d-flex gap-3">
                                                                            <button type="button"
                                                                                class="btn btn-sm fs-xs btn-link text-body text-decoration-none px-0">
                                                                                <i
                                                                                    class="ri-thumb-up-fill text-muted align-bottom me-1"></i>
                                                                                3.4K
                                                                            </button>
                                                                            <button type="button"
                                                                                class="btn btn-sm fs-xs btn-link text-body text-decoration-none px-0">
                                                                                <i
                                                                                    class="ri-question-answer-fill text-muted align-bottom me-1"></i>
                                                                                1.3k
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                                        <div class="gallery-box card light mb-0">
                                                            <div class="gallery-container">
                                                                <a href="#" title="">
                                                                    <img class="gallery-img img-fluid mx-auto"
                                                                        src="assets/images/small/img-9.jpg" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="box-content px-3 py-2">
                                                                <div class="gallery-overlay">
                                                                    <h5 class="overlay-caption">Dramatic clouds at the
                                                                        Golden Gate Bridge</h5>
                                                                </div>
                                                                <div class="d-flex align-items-center mt-1">
                                                                    <div class="flex-grow-1 text-muted">by <a href=""
                                                                            class="text-body text-truncate">Ron
                                                                            Mackie</a></div>
                                                                    <div class="flex-shrink-0">
                                                                        <div class="d-flex gap-3">
                                                                            <button type="button"
                                                                                class="btn btn-sm fs-xs btn-link text-body text-decoration-none px-0">
                                                                                <i
                                                                                    class="ri-thumb-up-fill text-muted align-bottom me-1"></i>
                                                                                5.1K
                                                                            </button>
                                                                            <button type="button"
                                                                                class="btn btn-sm fs-xs btn-link text-body text-decoration-none px-0">
                                                                                <i
                                                                                    class="ri-question-answer-fill text-muted align-bottom me-1"></i>
                                                                                4.7k
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                                        <div class="gallery-box card mb-0">
                                                            <div class="gallery-container">
                                                                <a href="#" title="">
                                                                    <img class="gallery-img img-fluid mx-auto"
                                                                        src="assets/images/small/img-11.jpg" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="box-content px-3 py-2">
                                                                <div class="gallery-overlay">
                                                                    <h5 class="overlay-caption">Cycling in the
                                                                        countryside</h5>
                                                                </div>


                                                                <div class="d-flex align-items-center mt-1">
                                                                    <div class="flex-grow-1 text-muted">by <a href=""
                                                                            class="text-body text-truncate">Nancy
                                                                            Martino</a></div>
                                                                    <div class="flex-shrink-0">
                                                                        <div class="d-flex gap-3">
                                                                            <button type="button"
                                                                                class="btn btn-sm fs-xs btn-link text-body text-decoration-none px-0">
                                                                                <i
                                                                                    class="ri-thumb-up-fill text-muted align-bottom me-1"></i>
                                                                                3.2K
                                                                            </button>
                                                                            <button type="button"
                                                                                class="btn btn-sm fs-xs btn-link text-body text-decoration-none px-0">
                                                                                <i
                                                                                    class="ri-question-answer-fill text-muted align-bottom me-1"></i>
                                                                                1.1K
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-xl-3 col-lg-4 col-sm-6 d-md-none d-xl-block">
                                                        <div class="gallery-box card mb-0">
                                                            <div class="gallery-container">
                                                                <a href="#" title="">
                                                                    <img class="gallery-img img-fluid mx-auto"
                                                                        src="assets/images/small/img-10.jpg" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="box-content px-3 py-2">
                                                                <div class="gallery-overlay">
                                                                    <h5 class="overlay-caption">Fun day at the Hill
                                                                        Station</h5>
                                                                </div>
                                                                <div class="d-flex align-items-center mt-1">
                                                                    <div class="flex-grow-1 text-muted">by <a href=""
                                                                            class="text-body text-truncate">Henry
                                                                            Baird</a></div>
                                                                    <div class="flex-shrink-0">
                                                                        <div class="d-flex gap-3">
                                                                            <button type="button"
                                                                                class="btn btn-sm fs-xs btn-link text-body text-decoration-none px-0">
                                                                                <i
                                                                                    class="ri-thumb-up-fill text-muted align-bottom me-1"></i>
                                                                                632
                                                                            </button>
                                                                            <button type="button"
                                                                                class="btn btn-sm fs-xs btn-link text-body text-decoration-none px-0">
                                                                                <i
                                                                                    class="ri-question-answer-fill text-muted align-bottom me-1"></i>
                                                                                95
                                                                            </button>
                                                                        </div>
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

                                        <!-- left offcanvas -->
                                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasLeft"
                                            aria-labelledby="offcanvasLeftLabel">
                                            <div class="offcanvas-header border-bottom">
                                                <h5 class="offcanvas-title" id="offcanvasLeftLabel">Recent Acitivity
                                                </h5>
                                                <button type="button" class="btn-close text-reset"
                                                    data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                            </div>
                                            <div class="offcanvas-body p-0 overflow-hidden">
                                                <div data-simplebar style="height: calc(100vh - 112px);">
                                                    <div class="acitivity-timeline p-4">
                                                        <div class="acitivity-item d-flex">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/users/avatar-1.jpg" alt=""
                                                                    class="avatar-xs rounded-circle acitivity-avatar">
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h6 class="mb-1">Oliver Phillips <span
                                                                        class="badge bg-primary-subtle text-primary align-middle">New</span>
                                                                </h6>
                                                                <p class="text-muted mb-2">We talked about a project on
                                                                    linkedin.</p>
                                                                <small class="mb-0 text-muted">Today</small>
                                                            </div>
                                                        </div>
                                                        <div class="acitivity-item py-3 d-flex">
                                                            <div class="flex-shrink-0 avatar-xs acitivity-avatar rounded-circle rounded-circle">
                                                                <div
                                                                    class="avatar-title bg-success-subtle text-success rounded-circle">
                                                                    N
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h6 class="mb-1">Nancy Martino <span
                                                                        class="badge bg-secondary-subtle text-secondary align-middle">In
                                                                        Progress</span></h6>
                                                                <p class="text-muted mb-2"><i
                                                                        class="ri-file-text-line align-middle ms-2"></i>
                                                                    Create new project Buildng product</p>
                                                                <div class="avatar-group mb-2">
                                                                    <a href="javascript: void(0);"
                                                                        class="avatar-group-item"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        title="" data-bs-original-title="Christi">
                                                                        <img src="assets/images/users/avatar-4.jpg"
                                                                            alt="" class="rounded-circle avatar-xs">
                                                                    </a>
                                                                    <a href="javascript: void(0);"
                                                                        class="avatar-group-item"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        title="" data-bs-original-title="Frank Hook">
                                                                        <img src="assets/images/users/avatar-3.jpg"
                                                                            alt="" class="rounded-circle avatar-xs">
                                                                    </a>
                                                                    <a href="javascript: void(0);"
                                                                        class="avatar-group-item"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        title="" data-bs-original-title=" Ruby">
                                                                        <div class="avatar-xs">
                                                                            <div
                                                                                class="avatar-title rounded-circle bg-light text-primary">
                                                                                R
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                    <a href="javascript: void(0);"
                                                                        class="avatar-group-item"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        title="" data-bs-original-title="more">
                                                                        <div class="avatar-xs">
                                                                            <div class="avatar-title rounded-circle">
                                                                                2+
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <small class="mb-0 text-muted">Yesterday</small>
                                                            </div>
                                                        </div>
                                                        <div class="acitivity-item py-3 d-flex">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/users/avatar-2.jpg" alt=""
                                                                    class="avatar-xs rounded-circle acitivity-avatar">
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h6 class="mb-1">Natasha Carey <span
                                                                        class="badge bg-success-subtle text-success align-middle">Completed</span>
                                                                </h6>
                                                                <p class="text-muted mb-2">Adding a new event with
                                                                    attachments</p>
                                                                <div class="row border border-dashed gx-2 p-2 mb-2">
                                                                    <div class="col-4">
                                                                        <img src="assets/images/small/img-2.jpg" alt=""
                                                                            class="img-fluid rounded">
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <img src="assets/images/small/img-3.jpg" alt=""
                                                                            class="img-fluid rounded">
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <img src="assets/images/small/img-4.jpg" alt=""
                                                                            class="img-fluid rounded">
                                                                    </div>
                                                                </div>
                                                                <small class="mb-0 text-muted">25 Nov</small>
                                                            </div>
                                                        </div>
                                                        <div class="acitivity-item py-3 d-flex">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/users/avatar-6.jpg" alt=""
                                                                    class="avatar-xs rounded-circle acitivity-avatar">
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h6 class="mb-1">Bethany Johnson</h6>
                                                                <p class="text-muted mb-2">added a new member to Hybrix
                                                                    dashboard</p>
                                                                <small class="mb-0 text-muted">19 Nov</small>
                                                            </div>
                                                        </div>
                                                        <div class="acitivity-item py-3 d-flex">
                                                            <div class="flex-shrink-0">
                                                                <div class="avatar-xs acitivity-avatar rounded-circle">
                                                                    <div
                                                                        class="avatar-title rounded-circle bg-danger-subtle text-danger">
                                                                        <i class="ri-shopping-bag-line"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h6 class="mb-1">Your order is placed <span
                                                                        class="badge bg-danger-subtle text-danger align-middle ms-1">Out
                                                                        of Delivery</span></h6>
                                                                <p class="text-muted mb-2">These customers can rest
                                                                    assured their order has been placed.</p>
                                                                <small class="mb-0 text-muted">16 Nov</small>
                                                            </div>
                                                        </div>
                                                        <div class="acitivity-item py-3 d-flex">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/users/avatar-7.jpg" alt=""
                                                                    class="avatar-xs rounded-circle acitivity-avatar">
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h6 class="mb-1">Lewis Pratt</h6>
                                                                <p class="text-muted mb-2">They all have something to
                                                                    say beyond the words on the page. They can come
                                                                    across as casual or neutral, exotic or graphic. </p>
                                                                <small class="mb-0 text-muted">22 Oct</small>
                                                            </div>
                                                        </div>
                                                        <div class="acitivity-item py-3 d-flex">
                                                            <div class="flex-shrink-0">
                                                                <div class="avatar-xs acitivity-avatar rounded-circle">
                                                                    <div
                                                                        class="avatar-title rounded-circle bg-info-subtle text-info">
                                                                        <i class="ri-line-chart-line"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h6 class="mb-1">Monthly sales report</h6>
                                                                <p class="text-muted mb-2"><span class="text-danger">2
                                                                        days left</span> notification to submit the
                                                                    monthly sales report. <a href="javascript:void(0);"
                                                                        class="link-warning text-decoration-underline">Reports
                                                                        Builder</a></p>
                                                                <small class="mb-0 text-muted">15 Oct</small>
                                                            </div>
                                                        </div>
                                                        <div class="acitivity-item d-flex">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/users/avatar-8.jpg" alt=""
                                                                    class="avatar-xs rounded-circle acitivity-avatar">
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h6 class="mb-1">New ticket received <span
                                                                        class="badge bg-success-subtle text-success align-middle">Completed</span>
                                                                </h6>
                                                                <p class="text-muted mb-2">User <span
                                                                        class="text-secondary">Erica245</span> submitted
                                                                    a ticket.</p>
                                                                <small class="mb-0 text-muted">26 Aug</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="offcanvas-foorter border-top p-3 text-center">
                                                <a href="javascript:void(0);" class="link-success">View All Acitivity <i
                                                        class="ri-arrow-right-s-line align-middle ms-1"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                    </div><!-- end row -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Backdrop Offcanvas</h4>
                                </div><!-- end card header -->
                                <div class="card-body">
                                    <p class="text-muted">Here are the example of offcanvas with scrolling active and
                                        backdrop visible.</p>
                                    <div>
                                        <div class="d-flex flex-wrap gap-2">
                                            <button class="btn btn-light" type="button" data-bs-toggle="offcanvas"
                                                data-bs-target="#offcanvasScrolling"
                                                aria-controls="offcanvasScrolling">Enable Body Scrolling</button>
                                            <button class="btn btn-light" type="button" data-bs-toggle="offcanvas"
                                                data-bs-target="#offcanvasWithBackdrop"
                                                aria-controls="offcanvasWithBackdrop">Enable Backdrop (Default)</button>
                                            <button class="btn btn-light" type="button" data-bs-toggle="offcanvas"
                                                data-bs-target="#offcanvasWithBothOptions"
                                                aria-controls="offcanvasWithBothOptions">Enable Both Scrolling &
                                                Backdrop</button>
                                        </div>

                                        <div class="offcanvas offcanvas-start" data-bs-scroll="true"
                                            data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling"
                                            aria-labelledby="offcanvasScrollingLabel">
                                            <div class="offcanvas-header border-bottom">
                                                <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Customer
                                                    Activity</h5>
                                                <button type="button" class="btn-close text-reset"
                                                    data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                            </div>
                                            <div class="offcanvas-body p-0 overflow-hidden">
                                                <div data-simplebar style="height: calc(100vh - 112px);">
                                                    <div class="acitivity-timeline p-4">
                                                        <div class="acitivity-item d-flex">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/users/avatar-1.jpg" alt=""
                                                                    class="avatar-xs rounded-circle acitivity-avatar">
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h6 class="mb-1">Oliver Phillips <span
                                                                        class="badge bg-primary-subtle text-primary align-middle">New</span>
                                                                </h6>
                                                                <p class="text-muted mb-2">We talked about a project on
                                                                    linkedin.</p>
                                                                <small class="mb-0 text-muted">Today</small>
                                                            </div>
                                                        </div>
                                                        <div class="acitivity-item py-3 d-flex">
                                                            <div class="flex-shrink-0 avatar-xs acitivity-avatar rounded-circle rounded-circle">
                                                                <div
                                                                    class="avatar-title bg-success-subtle text-success rounded-circle">
                                                                    N
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h6 class="mb-1">Nancy Martino <span
                                                                        class="badge bg-secondary-subtle text-secondary align-middle">In
                                                                        Progress</span></h6>
                                                                <p class="text-muted mb-2"><i
                                                                        class="ri-file-text-line align-middle ms-2"></i>
                                                                    Create new project Buildng product</p>
                                                                <div class="avatar-group mb-2">
                                                                    <a href="javascript: void(0);"
                                                                        class="avatar-group-item"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        title="" data-bs-original-title="Christi">
                                                                        <img src="assets/images/users/avatar-4.jpg"
                                                                            alt="" class="rounded-circle avatar-xs">
                                                                    </a>
                                                                    <a href="javascript: void(0);"
                                                                        class="avatar-group-item"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        title="" data-bs-original-title="Frank Hook">
                                                                        <img src="assets/images/users/avatar-3.jpg"
                                                                            alt="" class="rounded-circle avatar-xs">
                                                                    </a>
                                                                    <a href="javascript: void(0);"
                                                                        class="avatar-group-item"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        title="" data-bs-original-title=" Ruby">
                                                                        <div class="avatar-xs">
                                                                            <div
                                                                                class="avatar-title rounded-circle bg-light text-primary">
                                                                                R
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                    <a href="javascript: void(0);"
                                                                        class="avatar-group-item"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        title="" data-bs-original-title="more">
                                                                        <div class="avatar-xs">
                                                                            <div class="avatar-title rounded-circle">
                                                                                2+
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <small class="mb-0 text-muted">Yesterday</small>
                                                            </div>
                                                        </div>
                                                        <div class="acitivity-item py-3 d-flex">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/users/avatar-2.jpg" alt=""
                                                                    class="avatar-xs rounded-circle acitivity-avatar">
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h6 class="mb-1">Natasha Carey <span
                                                                        class="badge bg-success-subtle text-success align-middle">Completed</span>
                                                                </h6>
                                                                <p class="text-muted mb-2">Adding a new event with
                                                                    attachments</p>
                                                                <div class="row border border-dashed gx-2 p-2 mb-2">
                                                                    <div class="col-4">
                                                                        <img src="assets/images/small/img-2.jpg" alt=""
                                                                            class="img-fluid rounded">
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <img src="assets/images/small/img-3.jpg" alt=""
                                                                            class="img-fluid rounded">
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <img src="assets/images/small/img-4.jpg" alt=""
                                                                            class="img-fluid rounded">
                                                                    </div>
                                                                </div>
                                                                <small class="mb-0 text-muted">25 Nov</small>
                                                            </div>
                                                        </div>
                                                        <div class="acitivity-item py-3 d-flex">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/users/avatar-6.jpg" alt=""
                                                                    class="avatar-xs rounded-circle acitivity-avatar">
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h6 class="mb-1">Bethany Johnson</h6>
                                                                <p class="text-muted mb-2">added a new member to Hybrix
                                                                    dashboard</p>
                                                                <small class="mb-0 text-muted">19 Nov</small>
                                                            </div>
                                                        </div>
                                                        <div class="acitivity-item py-3 d-flex">
                                                            <div class="flex-shrink-0">
                                                                <div class="avatar-xs acitivity-avatar rounded-circle">
                                                                    <div
                                                                        class="avatar-title rounded-circle bg-danger-subtle text-danger">
                                                                        <i class="ri-shopping-bag-line"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h6 class="mb-1">Your order is placed <span
                                                                        class="badge bg-danger-subtle text-danger align-middle ms-1">Out
                                                                        of Delivery</span></h6>
                                                                <p class="text-muted mb-2">These customers can rest
                                                                    assured their order has been placed.</p>
                                                                <small class="mb-0 text-muted">16 Nov</small>
                                                            </div>
                                                        </div>
                                                        <div class="acitivity-item py-3 d-flex">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/users/avatar-7.jpg" alt=""
                                                                    class="avatar-xs rounded-circle acitivity-avatar">
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h6 class="mb-1">Lewis Pratt</h6>
                                                                <p class="text-muted mb-2">They all have something to
                                                                    say beyond the words on the page. They can come
                                                                    across as casual or neutral, exotic or graphic. </p>
                                                                <small class="mb-0 text-muted">22 Oct</small>
                                                            </div>
                                                        </div>
                                                        <div class="acitivity-item py-3 d-flex">
                                                            <div class="flex-shrink-0">
                                                                <div class="avatar-xs acitivity-avatar rounded-circle">
                                                                    <div
                                                                        class="avatar-title rounded-circle bg-info-subtle text-info">
                                                                        <i class="ri-line-chart-line"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h6 class="mb-1">Monthly sales report</h6>
                                                                <p class="text-muted mb-2"><span class="text-danger">2
                                                                        days left</span> notification to submit the
                                                                    monthly sales report. <a href="javascript:void(0);"
                                                                        class="link-warning text-decoration-underline">Reports
                                                                        Builder</a></p>
                                                                <small class="mb-0 text-muted">15 Oct</small>
                                                            </div>
                                                        </div>
                                                        <div class="acitivity-item d-flex">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/users/avatar-8.jpg" alt=""
                                                                    class="avatar-xs rounded-circle acitivity-avatar">
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h6 class="mb-1">New ticket received <span
                                                                        class="badge bg-success-subtle text-success align-middle">Completed</span>
                                                                </h6>
                                                                <p class="text-muted mb-2">User <span
                                                                        class="text-secondary">Erica245</span> submitted
                                                                    a ticket.</p>
                                                                <small class="mb-0 text-muted">26 Aug</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="offcanvas-foorter border-top p-3 text-center">
                                                <a href="javascript:void(0);" class="link-success">View All Acitivity <i
                                                        class="ri-arrow-right-s-line align-middle ms-1"></i></a>
                                            </div>
                                        </div>

                                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasWithBackdrop"
                                            aria-labelledby="offcanvasWithBackdropLabel">
                                            <div class="offcanvas-header border-bottom">
                                                <h5 class="offcanvas-title" id="offcanvasWithBackdropLabel">Customer
                                                    Activity</h5>
                                                <button type="button" class="btn-close text-reset"
                                                    data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                            </div>
                                            <div class="offcanvas-body p-0 overflow-hidden">
                                                <div data-simplebar style="height: calc(100vh - 112px);">
                                                    <div class="acitivity-timeline p-4">
                                                        <div class="acitivity-item d-flex">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/users/avatar-1.jpg" alt=""
                                                                    class="avatar-xs rounded-circle acitivity-avatar">
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h6 class="mb-1">Oliver Phillips <span
                                                                        class="badge bg-primary-subtle text-primary align-middle">New</span>
                                                                </h6>
                                                                <p class="text-muted mb-2">We talked about a project on
                                                                    linkedin.</p>
                                                                <small class="mb-0 text-muted">Today</small>
                                                            </div>
                                                        </div>
                                                        <div class="acitivity-item py-3 d-flex">
                                                            <div class="flex-shrink-0 avatar-xs acitivity-avatar rounded-circle rounded-circle">
                                                                <div
                                                                    class="avatar-title bg-success-subtle text-success rounded-circle">
                                                                    N
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h6 class="mb-1">Nancy Martino <span
                                                                        class="badge bg-secondary-subtle text-secondary align-middle">In
                                                                        Progress</span></h6>
                                                                <p class="text-muted mb-2"><i
                                                                        class="ri-file-text-line align-middle ms-2"></i>
                                                                    Create new project Buildng product</p>
                                                                <div class="avatar-group mb-2">
                                                                    <a href="javascript: void(0);"
                                                                        class="avatar-group-item"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        title="" data-bs-original-title="Christi">
                                                                        <img src="assets/images/users/avatar-4.jpg"
                                                                            alt="" class="rounded-circle avatar-xs">
                                                                    </a>
                                                                    <a href="javascript: void(0);"
                                                                        class="avatar-group-item"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        title="" data-bs-original-title="Frank Hook">
                                                                        <img src="assets/images/users/avatar-3.jpg"
                                                                            alt="" class="rounded-circle avatar-xs">
                                                                    </a>
                                                                    <a href="javascript: void(0);"
                                                                        class="avatar-group-item"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        title="" data-bs-original-title=" Ruby">
                                                                        <div class="avatar-xs">
                                                                            <div
                                                                                class="avatar-title rounded-circle bg-light text-primary">
                                                                                R
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                    <a href="javascript: void(0);"
                                                                        class="avatar-group-item"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        title="" data-bs-original-title="more">
                                                                        <div class="avatar-xs">
                                                                            <div class="avatar-title rounded-circle">
                                                                                2+
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <small class="mb-0 text-muted">Yesterday</small>
                                                            </div>
                                                        </div>
                                                        <div class="acitivity-item py-3 d-flex">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/users/avatar-2.jpg" alt=""
                                                                    class="avatar-xs rounded-circle acitivity-avatar">
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h6 class="mb-1">Natasha Carey <span
                                                                        class="badge bg-success-subtle text-success align-middle">Completed</span>
                                                                </h6>
                                                                <p class="text-muted mb-2">Adding a new event with
                                                                    attachments</p>
                                                                <div class="row border border-dashed gx-2 p-2 mb-2">
                                                                    <div class="col-4">
                                                                        <img src="assets/images/small/img-2.jpg" alt=""
                                                                            class="img-fluid rounded">
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <img src="assets/images/small/img-3.jpg" alt=""
                                                                            class="img-fluid rounded">
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <img src="assets/images/small/img-4.jpg" alt=""
                                                                            class="img-fluid rounded">
                                                                    </div>
                                                                </div>
                                                                <small class="mb-0 text-muted">25 Nov</small>
                                                            </div>
                                                        </div>
                                                        <div class="acitivity-item py-3 d-flex">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/users/avatar-6.jpg" alt=""
                                                                    class="avatar-xs rounded-circle acitivity-avatar">
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h6 class="mb-1">Bethany Johnson</h6>
                                                                <p class="text-muted mb-2">added a new member to Hybrix
                                                                    dashboard</p>
                                                                <small class="mb-0 text-muted">19 Nov</small>
                                                            </div>
                                                        </div>
                                                        <div class="acitivity-item py-3 d-flex">
                                                            <div class="flex-shrink-0">
                                                                <div class="avatar-xs acitivity-avatar rounded-circle">
                                                                    <div
                                                                        class="avatar-title rounded-circle bg-danger-subtle text-danger">
                                                                        <i class="ri-shopping-bag-line"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h6 class="mb-1">Your order is placed <span
                                                                        class="badge bg-danger-subtle text-danger align-middle ms-1">Out
                                                                        of Delivery</span></h6>
                                                                <p class="text-muted mb-2">These customers can rest
                                                                    assured their order has been placed.</p>
                                                                <small class="mb-0 text-muted">16 Nov</small>
                                                            </div>
                                                        </div>
                                                        <div class="acitivity-item py-3 d-flex">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/users/avatar-7.jpg" alt=""
                                                                    class="avatar-xs rounded-circle acitivity-avatar">
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h6 class="mb-1">Lewis Pratt</h6>
                                                                <p class="text-muted mb-2">They all have something to
                                                                    say beyond the words on the page. They can come
                                                                    across as casual or neutral, exotic or graphic. </p>
                                                                <small class="mb-0 text-muted">22 Oct</small>
                                                            </div>
                                                        </div>
                                                        <div class="acitivity-item py-3 d-flex">
                                                            <div class="flex-shrink-0">
                                                                <div class="avatar-xs acitivity-avatar rounded-circle">
                                                                    <div
                                                                        class="avatar-title rounded-circle bg-info-subtle text-info">
                                                                        <i class="ri-line-chart-line"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h6 class="mb-1">Monthly sales report</h6>
                                                                <p class="text-muted mb-2"><span class="text-danger">2
                                                                        days left</span> notification to submit the
                                                                    monthly sales report. <a href="javascript:void(0);"
                                                                        class="link-warning text-decoration-underline">Reports
                                                                        Builder</a></p>
                                                                <small class="mb-0 text-muted">15 Oct</small>
                                                            </div>
                                                        </div>
                                                        <div class="acitivity-item d-flex">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/users/avatar-8.jpg" alt=""
                                                                    class="avatar-xs rounded-circle acitivity-avatar">
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h6 class="mb-1">New ticket received <span
                                                                        class="badge bg-success-subtle text-success align-middle">Completed</span>
                                                                </h6>
                                                                <p class="text-muted mb-2">User <span
                                                                        class="text-secondary">Erica245</span> submitted
                                                                    a ticket.</p>
                                                                <small class="mb-0 text-muted">26 Aug</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="offcanvas-foorter border-top p-3 text-center">
                                                <a href="javascript:void(0);" class="link-success">View All Acitivity <i
                                                        class="ri-arrow-right-s-line align-middle ms-1"></i></a>
                                            </div>
                                        </div>

                                        <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1"
                                            id="offcanvasWithBothOptions"
                                            aria-labelledby="offcanvasWithBothOptionsLabel">
                                            <div class="offcanvas-header border-bottom">
                                                <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Customer
                                                    Activity</h5>
                                                <button type="button" class="btn-close text-reset"
                                                    data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                            </div>
                                            <div class="offcanvas-body p-0 overflow-hidden">
                                                <div data-simplebar style="height: calc(100vh - 112px);">
                                                    <div class="acitivity-timeline p-4">
                                                        <div class="acitivity-item d-flex">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/users/avatar-1.jpg" alt=""
                                                                    class="avatar-xs rounded-circle acitivity-avatar">
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h6 class="mb-1">Oliver Phillips <span
                                                                        class="badge bg-primary-subtle text-primary align-middle">New</span>
                                                                </h6>
                                                                <p class="text-muted mb-2">We talked about a project on
                                                                    linkedin.</p>
                                                                <small class="mb-0 text-muted">Today</small>
                                                            </div>
                                                        </div>
                                                        <div class="acitivity-item py-3 d-flex">
                                                            <div class="flex-shrink-0 avatar-xs acitivity-avatar rounded-circle rounded-circle">
                                                                <div
                                                                    class="avatar-title bg-success-subtle text-success rounded-circle">
                                                                    N
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h6 class="mb-1">Nancy Martino <span
                                                                        class="badge bg-secondary-subtle text-secondary align-middle">In
                                                                        Progress</span></h6>
                                                                <p class="text-muted mb-2"><i
                                                                        class="ri-file-text-line align-middle ms-2"></i>
                                                                    Create new project Buildng product</p>
                                                                <div class="avatar-group mb-2">
                                                                    <a href="javascript: void(0);"
                                                                        class="avatar-group-item"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        title="" data-bs-original-title="Christi">
                                                                        <img src="assets/images/users/avatar-4.jpg"
                                                                            alt="" class="rounded-circle avatar-xs">
                                                                    </a>
                                                                    <a href="javascript: void(0);"
                                                                        class="avatar-group-item"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        title="" data-bs-original-title="Frank Hook">
                                                                        <img src="assets/images/users/avatar-3.jpg"
                                                                            alt="" class="rounded-circle avatar-xs">
                                                                    </a>
                                                                    <a href="javascript: void(0);"
                                                                        class="avatar-group-item"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        title="" data-bs-original-title=" Ruby">
                                                                        <div class="avatar-xs">
                                                                            <div
                                                                                class="avatar-title rounded-circle bg-light text-primary">
                                                                                R
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                    <a href="javascript: void(0);"
                                                                        class="avatar-group-item"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        title="" data-bs-original-title="more">
                                                                        <div class="avatar-xs">
                                                                            <div class="avatar-title rounded-circle">
                                                                                2+
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <small class="mb-0 text-muted">Yesterday</small>
                                                            </div>
                                                        </div>
                                                        <div class="acitivity-item py-3 d-flex">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/users/avatar-2.jpg" alt=""
                                                                    class="avatar-xs rounded-circle acitivity-avatar">
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h6 class="mb-1">Natasha Carey <span
                                                                        class="badge bg-success-subtle text-success align-middle">Completed</span>
                                                                </h6>
                                                                <p class="text-muted mb-2">Adding a new event with
                                                                    attachments</p>
                                                                <div class="row border border-dashed gx-2 p-2 mb-2">
                                                                    <div class="col-4">
                                                                        <img src="assets/images/small/img-2.jpg" alt=""
                                                                            class="img-fluid rounded">
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <img src="assets/images/small/img-3.jpg" alt=""
                                                                            class="img-fluid rounded">
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <img src="assets/images/small/img-4.jpg" alt=""
                                                                            class="img-fluid rounded">
                                                                    </div>
                                                                </div>
                                                                <small class="mb-0 text-muted">25 Nov</small>
                                                            </div>
                                                        </div>
                                                        <div class="acitivity-item py-3 d-flex">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/users/avatar-6.jpg" alt=""
                                                                    class="avatar-xs rounded-circle acitivity-avatar">
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h6 class="mb-1">Bethany Johnson</h6>
                                                                <p class="text-muted mb-2">added a new member to Hybrix
                                                                    dashboard</p>
                                                                <small class="mb-0 text-muted">19 Nov</small>
                                                            </div>
                                                        </div>
                                                        <div class="acitivity-item py-3 d-flex">
                                                            <div class="flex-shrink-0">
                                                                <div class="avatar-xs acitivity-avatar rounded-circle">
                                                                    <div
                                                                        class="avatar-title rounded-circle bg-danger-subtle text-danger">
                                                                        <i class="ri-shopping-bag-line"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h6 class="mb-1">Your order is placed <span
                                                                        class="badge bg-danger-subtle text-danger align-middle ms-1">Out
                                                                        of Delivery</span></h6>
                                                                <p class="text-muted mb-2">These customers can rest
                                                                    assured their order has been placed.</p>
                                                                <small class="mb-0 text-muted">16 Nov</small>
                                                            </div>
                                                        </div>
                                                        <div class="acitivity-item py-3 d-flex">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/users/avatar-7.jpg" alt=""
                                                                    class="avatar-xs rounded-circle acitivity-avatar">
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h6 class="mb-1">Lewis Pratt</h6>
                                                                <p class="text-muted mb-2">They all have something to
                                                                    say beyond the words on the page. They can come
                                                                    across as casual or neutral, exotic or graphic. </p>
                                                                <small class="mb-0 text-muted">22 Oct</small>
                                                            </div>
                                                        </div>
                                                        <div class="acitivity-item py-3 d-flex">
                                                            <div class="flex-shrink-0">
                                                                <div class="avatar-xs acitivity-avatar rounded-circle">
                                                                    <div
                                                                        class="avatar-title rounded-circle bg-info-subtle text-info">
                                                                        <i class="ri-line-chart-line"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h6 class="mb-1">Monthly sales report</h6>
                                                                <p class="text-muted mb-2"><span class="text-danger">2
                                                                        days left</span> notification to submit the
                                                                    monthly sales report. <a href="javascript:void(0);"
                                                                        class="link-warning text-decoration-underline">Reports
                                                                        Builder</a></p>
                                                                <small class="mb-0 text-muted">15 Oct</small>
                                                            </div>
                                                        </div>
                                                        <div class="acitivity-item d-flex">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/users/avatar-8.jpg" alt=""
                                                                    class="avatar-xs rounded-circle acitivity-avatar">
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h6 class="mb-1">New ticket received <span
                                                                        class="badge bg-success-subtle text-success align-middle">Completed</span>
                                                                </h6>
                                                                <p class="text-muted mb-2">User <span
                                                                        class="text-secondary">Erica245</span> submitted
                                                                    a ticket.</p>
                                                                <small class="mb-0 text-muted">26 Aug</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="offcanvas-foorter border-top p-3 text-center">
                                                <a href="javascript:void(0);" class="link-success">View All Acitivity <i
                                                        class="ri-arrow-right-s-line align-middle ms-1"></i></a>
                                            </div>
                                        </div>
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