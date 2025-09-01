<?php include 'partials/main.php'; ?>

<head>
    <?php
    $title = 'Contact';
    include('partials/title-meta.php');
    ?>


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
                    <?php includeFileWithVariables('partials/page-title.php', array('pagetitle' => 'Pages', 'title' => 'Contact')); ?>


                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="">
                                        <div class="row g-2 align-items-center">
                                            <div class="col-lg-3">
                                                <div class="search-box">
                                                    <input type="text" id="searchTaskList" class="form-control search" placeholder="Search contact name, number position etc...">
                                                    <i class="ri-search-line search-icon"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-auto">
                                                <select class="form-control" data-choices data-choices-search-false name="choices-select-sortlist" id="choices-select-sortlist">
                                                    <option value="">Recent</option>
                                                    <option value="By ID">By ID</option>
                                                    <option value="By Name">By Name</option>
                                                </select>
                                            </div>

                                            <div class="col-lg-auto ms-xl-auto">
                                                <button class="btn btn-primary createTask" type="button" data-bs-toggle="modal" data-bs-target="#add-new">
                                                    <i class="ri-add-fill align-bottom"></i> New Contact
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-xxl-3 col-sm-6">
                            <div class="col">
                                <div class="card">
                                    <div class="card-body p-4">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <button type="button" class="btn btn-ghost-warning btn-icon rounded-circle btn-sm favourite-btn active" data-bs-toggle="button"> <i class="ri-star-fill fs-14"></i> </button>
                                            </div>
                                            <div class="col text-end dropdown"> <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"> <i class="ri-more-fill fs-17"></i> </a>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item fs-md" href="#add-new" data-bs-toggle="modal"><i class="ri-pencil-line me-2 align-bottom text-muted"></i>Edit</a></li>
                                                    <li><a class="dropdown-item fs-md" href="#removeModal" data-bs-toggle="modal" data-remove-id="12"><i class="ri-delete-bin-5-line me-2 align-bottom text-muted"></i>Remove</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- end row -->

                                        <div class="mb-4">
                                            <div class="avatar-lg mx-auto img-thumbnail rounded-circle mb-4"><img src="assets/images/users/avatar-2.jpg" alt="" class="member-img img-fluid d-block rounded-circle"></div>
                                            <div class="text-center"> <a class="member-name" href="pages-profile.php">
                                                    <h5 class="fs-lg mb-2">Nancy Martino</h5>
                                                </a>
                                                <p class="text-muted fs-md member-designation mb-0">Team Leader & HR</p>
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item avatar-xs">
                                                    <a href="javascript:void(0);" class="avatar-title bg-info-subtle text-info fs-15 rounded">
                                                        <i class="ri-phone-line"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item avatar-xs">
                                                    <a href="javascript:void(0);" class="avatar-title bg-secondary-subtle text-secondary fs-15 rounded">
                                                        <i class="ri-calendar-2-line"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item avatar-xs">
                                                    <a href="javascript:void(0);" class="avatar-title bg-danger-subtle text-danger fs-15 rounded">
                                                        <i class="ri-mail-line"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item avatar-xs">
                                                    <a href="javascript:void(0);" class="avatar-title bg-primary-subtle text-primary fs-15 rounded">
                                                        <i class="ri-question-answer-line"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- end card-body -->
                                </div>
                                <!-- end card -->
                            </div>
                        </div>
                        <!-- end col -->

                        <div class="col-xxl-3 col-sm-6">
                            <div class="col">
                                <div class="card">
                                    <div class="card-body p-4">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <button type="button" class="btn btn-ghost-warning btn-icon rounded-circle btn-sm favourite-btn" data-bs-toggle="button"> <i class="ri-star-fill fs-14"></i> </button>
                                            </div>
                                            <div class="col text-end dropdown"> <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"> <i class="ri-more-fill fs-17"></i> </a>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item fs-md" href="#add-new" data-bs-toggle="modal"><i class="ri-pencil-line me-2 align-bottom text-muted"></i>Edit</a></li>
                                                    <li><a class="dropdown-item fs-md" href="#removeModal" data-bs-toggle="modal" data-remove-id="12"><i class="ri-delete-bin-5-line me-2 align-bottom text-muted"></i>Remove</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- end row -->

                                        <div class="mb-4">
                                            <div class="avatar-lg mx-auto img-thumbnail rounded-circle mb-4"><img src="assets/images/users/avatar-1.jpg" alt="" class="member-img img-fluid d-block rounded-circle"></div>
                                            <div class="text-center"> <a class="member-name" href="pages-profile.php">
                                                    <h5 class="fs-lg mb-2">Henry Baird</h5>
                                                </a>
                                                <p class="text-muted fs-md member-designation mb-0">Full Stack Developer</p>
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item avatar-xs">
                                                    <a href="javascript:void(0);" class="avatar-title bg-info-subtle text-info fs-15 rounded">
                                                        <i class="ri-phone-line"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item avatar-xs">
                                                    <a href="javascript:void(0);" class="avatar-title bg-secondary-subtle text-secondary fs-15 rounded">
                                                        <i class="ri-calendar-2-line"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item avatar-xs">
                                                    <a href="javascript:void(0);" class="avatar-title bg-danger-subtle text-danger fs-15 rounded">
                                                        <i class="ri-mail-line"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item avatar-xs">
                                                    <a href="javascript:void(0);" class="avatar-title bg-primary-subtle text-primary fs-15 rounded">
                                                        <i class="ri-question-answer-line"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- end card-body -->
                                </div>
                                <!-- end card -->
                            </div>
                        </div>
                        <!-- end col -->

                        <div class="col-xxl-3 col-sm-6">
                            <div class="col">
                                <div class="card">
                                    <div class="card-body p-4">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <button type="button" class="btn btn-ghost-warning btn-icon rounded-circle btn-sm favourite-btn" data-bs-toggle="button"> <i class="ri-star-fill fs-14"></i> </button>
                                            </div>
                                            <div class="col text-end dropdown"> <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"> <i class="ri-more-fill fs-17"></i> </a>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item fs-md" href="#add-new" data-bs-toggle="modal"><i class="ri-pencil-line me-2 align-bottom text-muted"></i>Edit</a></li>
                                                    <li><a class="dropdown-item fs-md" href="#removeModal" data-bs-toggle="modal" data-remove-id="12"><i class="ri-delete-bin-5-line me-2 align-bottom text-muted"></i>Remove</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- end row -->

                                        <div class="mb-4">
                                            <div class="avatar-lg mx-auto img-thumbnail rounded-circle mb-4"><img src="assets/images/users/avatar-3.jpg" alt="" class="member-img img-fluid d-block rounded-circle"></div>
                                            <div class="text-center"> <a class="member-name" href="pages-profile.php">
                                                    <h5 class="fs-lg mb-2">Frank Hook</h5>
                                                </a>
                                                <p class="text-muted fs-md member-designation mb-0">Project Manager</p>
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item avatar-xs">
                                                    <a href="javascript:void(0);" class="avatar-title bg-info-subtle text-info fs-15 rounded">
                                                        <i class="ri-phone-line"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item avatar-xs">
                                                    <a href="javascript:void(0);" class="avatar-title bg-secondary-subtle text-secondary fs-15 rounded">
                                                        <i class="ri-calendar-2-line"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item avatar-xs">
                                                    <a href="javascript:void(0);" class="avatar-title bg-danger-subtle text-danger fs-15 rounded">
                                                        <i class="ri-mail-line"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item avatar-xs">
                                                    <a href="javascript:void(0);" class="avatar-title bg-primary-subtle text-primary fs-15 rounded">
                                                        <i class="ri-question-answer-line"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- end card-body -->
                                </div>
                                <!-- end card -->
                            </div>
                        </div>
                        <!-- end col -->

                        <div class="col-xxl-3 col-sm-6">
                            <div class="col">
                                <div class="card">
                                    <div class="card-body p-4">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <button type="button" class="btn btn-ghost-warning btn-icon rounded-circle btn-sm favourite-btn active" data-bs-toggle="button"> <i class="ri-star-fill fs-14"></i> </button>
                                            </div>
                                            <div class="col text-end dropdown"> <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"> <i class="ri-more-fill fs-17"></i> </a>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item fs-md" href="#add-new" data-bs-toggle="modal"><i class="ri-pencil-line me-2 align-bottom text-muted"></i>Edit</a></li>
                                                    <li><a class="dropdown-item fs-md" href="#removeModal" data-bs-toggle="modal" data-remove-id="12"><i class="ri-delete-bin-5-line me-2 align-bottom text-muted"></i>Remove</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- end row -->

                                        <div class="mb-4">
                                            <div class="avatar-lg mx-auto img-thumbnail rounded-circle mb-4"><img src="assets/images/users/avatar-4.jpg" alt="" class="member-img img-fluid d-block rounded-circle"></div>
                                            <div class="text-center"> <a class="member-name" href="pages-profile.php">
                                                    <h5 class="fs-lg mb-2">Jennifer Carter</h5>
                                                </a>
                                                <p class="text-muted fs-md member-designation mb-0">UI/UX Designer</p>
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item avatar-xs">
                                                    <a href="javascript:void(0);" class="avatar-title bg-info-subtle text-info fs-15 rounded">
                                                        <i class="ri-phone-line"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item avatar-xs">
                                                    <a href="javascript:void(0);" class="avatar-title bg-secondary-subtle text-secondary fs-15 rounded">
                                                        <i class="ri-calendar-2-line"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item avatar-xs">
                                                    <a href="javascript:void(0);" class="avatar-title bg-danger-subtle text-danger fs-15 rounded">
                                                        <i class="ri-mail-line"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item avatar-xs">
                                                    <a href="javascript:void(0);" class="avatar-title bg-primary-subtle text-primary fs-15 rounded">
                                                        <i class="ri-question-answer-line"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- end card-body -->
                                </div>
                                <!-- end card -->
                            </div>
                        </div>
                        <!-- end col -->

                        <div class="col-xxl-3 col-sm-6">
                            <div class="col">
                                <div class="card">
                                    <div class="card-body p-4">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <button type="button" class="btn btn-ghost-warning btn-icon rounded-circle btn-sm favourite-btn" data-bs-toggle="button"> <i class="ri-star-fill fs-14"></i> </button>
                                            </div>
                                            <div class="col text-end dropdown"> <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"> <i class="ri-more-fill fs-17"></i> </a>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item fs-md" href="#add-new" data-bs-toggle="modal"><i class="ri-pencil-line me-2 align-bottom text-muted"></i>Edit</a></li>
                                                    <li><a class="dropdown-item fs-md" href="#removeModal" data-bs-toggle="modal" data-remove-id="12"><i class="ri-delete-bin-5-line me-2 align-bottom text-muted"></i>Remove</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- end row -->

                                        <div class="mb-4">
                                            <div class="avatar-lg mx-auto img-thumbnail rounded-circle mb-4">
                                                <div class="avatar-title rounded-circle bg-primary fs-4xl">
                                                    HS
                                                </div>
                                            </div>
                                            <div class="text-center"> <a class="member-name" href="pages-profile.php">
                                                    <h5 class="fs-lg mb-2">Hollis Spencer</h5>
                                                </a>
                                                <p class="text-muted fs-md member-designation mb-0">React Developer</p>
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item avatar-xs">
                                                    <a href="javascript:void(0);" class="avatar-title bg-info-subtle text-info fs-15 rounded">
                                                        <i class="ri-phone-line"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item avatar-xs">
                                                    <a href="javascript:void(0);" class="avatar-title bg-secondary-subtle text-secondary fs-15 rounded">
                                                        <i class="ri-calendar-2-line"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item avatar-xs">
                                                    <a href="javascript:void(0);" class="avatar-title bg-danger-subtle text-danger fs-15 rounded">
                                                        <i class="ri-mail-line"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item avatar-xs">
                                                    <a href="javascript:void(0);" class="avatar-title bg-primary-subtle text-primary fs-15 rounded">
                                                        <i class="ri-question-answer-line"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- end card-body -->
                                </div>
                                <!-- end card -->
                            </div>
                        </div>
                        <!-- end col -->

                        <div class="col-xxl-3 col-sm-6">
                            <div class="col">
                                <div class="card">
                                    <div class="card-body p-4">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <button type="button" class="btn btn-ghost-warning btn-icon rounded-circle btn-sm favourite-btn active" data-bs-toggle="button"> <i class="ri-star-fill fs-14"></i> </button>
                                            </div>
                                            <div class="col text-end dropdown"> <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"> <i class="ri-more-fill fs-17"></i> </a>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item fs-md" href="#add-new" data-bs-toggle="modal"><i class="ri-pencil-line me-2 align-bottom text-muted"></i>Edit</a></li>
                                                    <li><a class="dropdown-item fs-md" href="#removeModal" data-bs-toggle="modal" data-remove-id="12"><i class="ri-delete-bin-5-line me-2 align-bottom text-muted"></i>Remove</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- end row -->

                                        <div class="mb-4">
                                            <div class="avatar-lg mx-auto img-thumbnail rounded-circle mb-4"><img src="assets/images/users/avatar-5.jpg" alt="" class="member-img img-fluid d-block rounded-circle"></div>
                                            <div class="text-center"> <a class="member-name" href="pages-profile.php">
                                                    <h5 class="fs-lg mb-2">Megan Elmore</h5>
                                                </a>
                                                <p class="text-muted fs-md member-designation mb-0">Team Leader & Web Developer</p>
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item avatar-xs">
                                                    <a href="javascript:void(0);" class="avatar-title bg-info-subtle text-info fs-15 rounded">
                                                        <i class="ri-phone-line"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item avatar-xs">
                                                    <a href="javascript:void(0);" class="avatar-title bg-secondary-subtle text-secondary fs-15 rounded">
                                                        <i class="ri-calendar-2-line"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item avatar-xs">
                                                    <a href="javascript:void(0);" class="avatar-title bg-danger-subtle text-danger fs-15 rounded">
                                                        <i class="ri-mail-line"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item avatar-xs">
                                                    <a href="javascript:void(0);" class="avatar-title bg-primary-subtle text-primary fs-15 rounded">
                                                        <i class="ri-question-answer-line"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- end card-body -->
                                </div>
                                <!-- end card -->
                            </div>
                        </div>
                        <!-- end col -->

                        <div class="col-xxl-3 col-sm-6">
                            <div class="col">
                                <div class="card">
                                    <div class="card-body p-4">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <button type="button" class="btn btn-ghost-warning btn-icon rounded-circle btn-sm favourite-btn active" data-bs-toggle="button"> <i class="ri-star-fill fs-14"></i> </button>
                                            </div>
                                            <div class="col text-end dropdown"> <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"> <i class="ri-more-fill fs-17"></i> </a>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item fs-md" href="#add-new" data-bs-toggle="modal"><i class="ri-pencil-line me-2 align-bottom text-muted"></i>Edit</a></li>
                                                    <li><a class="dropdown-item fs-md" href="#removeModal" data-bs-toggle="modal" data-remove-id="12"><i class="ri-delete-bin-5-line me-2 align-bottom text-muted"></i>Remove</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- end row -->

                                        <div class="mb-4">
                                            <div class="avatar-lg mx-auto img-thumbnail rounded-circle mb-4"><img src="assets/images/users/avatar-6.jpg" alt="" class="member-img img-fluid d-block rounded-circle"></div>
                                            <div class="text-center"> <a class="member-name" href="pages-profile.php">
                                                    <h5 class="fs-lg mb-2">Alexis Clarke</h5>
                                                </a>
                                                <p class="text-muted fs-md member-designation mb-0">Backend Developer</p>
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item avatar-xs">
                                                    <a href="javascript:void(0);" class="avatar-title bg-info-subtle text-info fs-15 rounded">
                                                        <i class="ri-phone-line"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item avatar-xs">
                                                    <a href="javascript:void(0);" class="avatar-title bg-secondary-subtle text-secondary fs-15 rounded">
                                                        <i class="ri-calendar-2-line"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item avatar-xs">
                                                    <a href="javascript:void(0);" class="avatar-title bg-danger-subtle text-danger fs-15 rounded">
                                                        <i class="ri-mail-line"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item avatar-xs">
                                                    <a href="javascript:void(0);" class="avatar-title bg-primary-subtle text-primary fs-15 rounded">
                                                        <i class="ri-question-answer-line"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- end card-body -->
                                </div>
                                <!-- end card -->
                            </div>
                        </div>
                        <!-- end col -->

                        <div class="col-xxl-3 col-sm-6">
                            <div class="col">
                                <div class="card">
                                    <div class="card-body p-4">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <button type="button" class="btn btn-ghost-warning btn-icon rounded-circle btn-sm favourite-btn" data-bs-toggle="button"> <i class="ri-star-fill fs-14"></i> </button>
                                            </div>
                                            <div class="col text-end dropdown"> <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"> <i class="ri-more-fill fs-17"></i> </a>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item fs-md" href="#add-new" data-bs-toggle="modal"><i class="ri-pencil-line me-2 align-bottom text-muted"></i>Edit</a></li>
                                                    <li><a class="dropdown-item fs-md" href="#removeModal" data-bs-toggle="modal" data-remove-id="12"><i class="ri-delete-bin-5-line me-2 align-bottom text-muted"></i>Remove</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- end row -->

                                        <div class="mb-4">
                                            <div class="avatar-lg mx-auto img-thumbnail rounded-circle mb-4"><img src="assets/images/users/avatar-7.jpg" alt="" class="member-img img-fluid d-block rounded-circle"></div>
                                            <div class="text-center"> <a class="member-name" href="pages-profile.php">
                                                    <h5 class="fs-lg mb-2">Nathan Cole</h5>
                                                </a>
                                                <p class="text-muted fs-md member-designation mb-0">Front-End Developer</p>
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item avatar-xs">
                                                    <a href="javascript:void(0);" class="avatar-title bg-info-subtle text-info fs-15 rounded">
                                                        <i class="ri-phone-line"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item avatar-xs">
                                                    <a href="javascript:void(0);" class="avatar-title bg-secondary-subtle text-secondary fs-15 rounded">
                                                        <i class="ri-calendar-2-line"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item avatar-xs">
                                                    <a href="javascript:void(0);" class="avatar-title bg-danger-subtle text-danger fs-15 rounded">
                                                        <i class="ri-mail-line"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item avatar-xs">
                                                    <a href="javascript:void(0);" class="avatar-title bg-primary-subtle text-primary fs-15 rounded">
                                                        <i class="ri-question-answer-line"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- end card-body -->
                                </div>
                                <!-- end card -->
                            </div>
                        </div>
                        <!-- end col -->

                        <div class="col-xxl-3 col-sm-6">
                            <div class="col">
                                <div class="card">
                                    <div class="card-body p-4">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <button type="button" class="btn btn-ghost-warning btn-icon rounded-circle btn-sm favourite-btn active" data-bs-toggle="button"> <i class="ri-star-fill fs-14"></i> </button>
                                            </div>
                                            <div class="col text-end dropdown"> <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"> <i class="ri-more-fill fs-17"></i> </a>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item fs-md" href="#add-new" data-bs-toggle="modal"><i class="ri-pencil-line me-2 align-bottom text-muted"></i>Edit</a></li>
                                                    <li><a class="dropdown-item fs-md" href="#removeModal" data-bs-toggle="modal" data-remove-id="12"><i class="ri-delete-bin-5-line me-2 align-bottom text-muted"></i>Remove</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- end row -->

                                        <div class="mb-4">
                                            <div class="avatar-lg mx-auto img-thumbnail rounded-circle mb-4"><img src="assets/images/users/avatar-8.jpg" alt="" class="member-img img-fluid d-block rounded-circle"></div>
                                            <div class="text-center"> <a class="member-name" href="pages-profile.php">
                                                    <h5 class="fs-lg mb-2">Joseph Parker</h5>
                                                </a>
                                                <p class="text-muted fs-md member-designation mb-0">Full Stack Developer</p>
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item avatar-xs">
                                                    <a href="javascript:void(0);" class="avatar-title bg-info-subtle text-info fs-15 rounded">
                                                        <i class="ri-phone-line"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item avatar-xs">
                                                    <a href="javascript:void(0);" class="avatar-title bg-secondary-subtle text-secondary fs-15 rounded">
                                                        <i class="ri-calendar-2-line"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item avatar-xs">
                                                    <a href="javascript:void(0);" class="avatar-title bg-danger-subtle text-danger fs-15 rounded">
                                                        <i class="ri-mail-line"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item avatar-xs">
                                                    <a href="javascript:void(0);" class="avatar-title bg-primary-subtle text-primary fs-15 rounded">
                                                        <i class="ri-question-answer-line"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- end card-body -->
                                </div>
                                <!-- end card -->
                            </div>
                        </div>
                        <!-- end col -->

                        <div class="col-xxl-3 col-sm-6">
                            <div class="col">
                                <div class="card">
                                    <div class="card-body p-4">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <button type="button" class="btn btn-ghost-warning btn-icon rounded-circle btn-sm favourite-btn active" data-bs-toggle="button"> <i class="ri-star-fill fs-14"></i> </button>
                                            </div>
                                            <div class="col text-end dropdown"> <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"> <i class="ri-more-fill fs-17"></i> </a>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item fs-md" href="#add-new" data-bs-toggle="modal"><i class="ri-pencil-line me-2 align-bottom text-muted"></i>Edit</a></li>
                                                    <li><a class="dropdown-item fs-md" href="#removeModal" data-bs-toggle="modal" data-remove-id="12"><i class="ri-delete-bin-5-line me-2 align-bottom text-muted"></i>Remove</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- end row -->

                                        <div class="mb-4">
                                            <div class="avatar-lg mx-auto img-thumbnail rounded-circle mb-4"><img src="assets/images/users/avatar-10.jpg" alt="" class="member-img img-fluid d-block rounded-circle"></div>
                                            <div class="text-center"> <a class="member-name" href="pages-profile.php">
                                                    <h5 class="fs-lg mb-2">Josefa Weissnat</h5>
                                                </a>
                                                <p class="text-muted fs-md member-designation mb-0">Project Manager</p>
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item avatar-xs">
                                                    <a href="javascript:void(0);" class="avatar-title bg-info-subtle text-info fs-15 rounded">
                                                        <i class="ri-phone-line"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item avatar-xs">
                                                    <a href="javascript:void(0);" class="avatar-title bg-secondary-subtle text-secondary fs-15 rounded">
                                                        <i class="ri-calendar-2-line"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item avatar-xs">
                                                    <a href="javascript:void(0);" class="avatar-title bg-danger-subtle text-danger fs-15 rounded">
                                                        <i class="ri-mail-line"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item avatar-xs">
                                                    <a href="javascript:void(0);" class="avatar-title bg-primary-subtle text-primary fs-15 rounded">
                                                        <i class="ri-question-answer-line"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- end card-body -->
                                </div>
                                <!-- end card -->
                            </div>
                        </div>
                        <!-- end col -->

                        <div class="col-xxl-3 col-sm-6">
                            <div class="col">
                                <div class="card">
                                    <div class="card-body p-4">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <button type="button" class="btn btn-ghost-warning btn-icon rounded-circle btn-sm favourite-btn" data-bs-toggle="button"> <i class="ri-star-fill fs-14"></i> </button>
                                            </div>
                                            <div class="col text-end dropdown"> <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"> <i class="ri-more-fill fs-17"></i> </a>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item fs-md" href="#add-new" data-bs-toggle="modal"><i class="ri-pencil-line me-2 align-bottom text-muted"></i>Edit</a></li>
                                                    <li><a class="dropdown-item fs-md" href="#removeModal" data-bs-toggle="modal" data-remove-id="12"><i class="ri-delete-bin-5-line me-2 align-bottom text-muted"></i>Remove</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- end row -->

                                        <div class="mb-4">
                                            <div class="avatar-lg mx-auto img-thumbnail rounded-circle mb-4"><img src="assets/images/users/avatar-9.jpg" alt="" class="member-img img-fluid d-block rounded-circle"></div>
                                            <div class="text-center"> <a class="member-name" href="pages-profile.php">
                                                    <h5 class="fs-lg mb-2">Erica Kernan</h5>
                                                </a>
                                                <p class="text-muted fs-md member-designation mb-0">Web Designer</p>
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item avatar-xs">
                                                    <a href="javascript:void(0);" class="avatar-title bg-info-subtle text-info fs-15 rounded">
                                                        <i class="ri-phone-line"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item avatar-xs">
                                                    <a href="javascript:void(0);" class="avatar-title bg-secondary-subtle text-secondary fs-15 rounded">
                                                        <i class="ri-calendar-2-line"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item avatar-xs">
                                                    <a href="javascript:void(0);" class="avatar-title bg-danger-subtle text-danger fs-15 rounded">
                                                        <i class="ri-mail-line"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item avatar-xs">
                                                    <a href="javascript:void(0);" class="avatar-title bg-primary-subtle text-primary fs-15 rounded">
                                                        <i class="ri-question-answer-line"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- end card-body -->
                                </div>
                                <!-- end card -->
                            </div>
                        </div>
                        <!-- end col -->

                        <div class="col-xxl-3 col-sm-6">
                            <div class="col">
                                <div class="card">
                                    <div class="card-body p-4">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <button type="button" class="btn btn-ghost-warning btn-icon rounded-circle btn-sm favourite-btn" data-bs-toggle="button"> <i class="ri-star-fill fs-14"></i> </button>
                                            </div>
                                            <div class="col text-end dropdown"> <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"> <i class="ri-more-fill fs-17"></i> </a>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item fs-md" href="#add-new" data-bs-toggle="modal"><i class="ri-pencil-line me-2 align-bottom text-muted"></i>Edit</a></li>
                                                    <li><a class="dropdown-item fs-md" href="#removeModal" data-bs-toggle="modal" data-remove-id="12"><i class="ri-delete-bin-5-line me-2 align-bottom text-muted"></i>Remove</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- end row -->

                                        <div class="mb-4">
                                            <div class="avatar-lg mx-auto img-thumbnail rounded-circle mb-4">
                                                <div class="avatar-title rounded-circle bg-secondary fs-4xl">
                                                    AK
                                                </div>
                                            </div>
                                            <div class="text-center"> <a class="member-name" href="pages-profile.php">
                                                    <h5 class="fs-lg mb-2">Axel Kozey</h5>
                                                </a>
                                                <p class="text-muted fs-md member-designation mb-0">React Developer</p>
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item avatar-xs">
                                                    <a href="javascript:void(0);" class="avatar-title bg-info-subtle text-info fs-15 rounded">
                                                        <i class="ri-phone-line"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item avatar-xs">
                                                    <a href="javascript:void(0);" class="avatar-title bg-secondary-subtle text-secondary fs-15 rounded">
                                                        <i class="ri-calendar-2-line"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item avatar-xs">
                                                    <a href="javascript:void(0);" class="avatar-title bg-danger-subtle text-danger fs-15 rounded">
                                                        <i class="ri-mail-line"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item avatar-xs">
                                                    <a href="javascript:void(0);" class="avatar-title bg-primary-subtle text-primary fs-15 rounded">
                                                        <i class="ri-question-answer-line"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- end card-body -->
                                </div>
                                <!-- end card -->
                            </div>
                        </div>
                        <!-- end col -->
                    </div><!--end row-->

                    <div class="row align-items-center justify-content-between text-center text-sm-start mb-3">
                        <div class="col-sm">
                            <div class="text-muted">
                                Showing <span class="fw-semibold">12</span> of <span class="fw-semibold">20</span> Results
                            </div>
                        </div><!--end col-->
                        <div class="col-sm-auto mt-3 mt-sm-0">
                            <div class="pagination-wrap hstack justify-content-center gap-2">
                                <a class="page-item pagination-prev disabled" href="#">
                                    Previous
                                </a>
                                <ul class="pagination listjs-pagination mb-0">
                                    <li class="active"><a class="page" href="#" data-i="1" data-page="10">1</a></li>
                                    <li><a class="page" href="#" data-i="2" data-page="10">2</a></li>
                                </ul>
                                <a class="page-item pagination-next" href="#">
                                    Next
                                </a>
                            </div>
                        </div><!--end col-->
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

    <!-- removeNotificationModal -->
    <div id="removeModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="NotificationModalbtn-close"></button>
                </div>
                <div class="modal-body">
                    <div class="mt-2 text-center">
                        <i class="ti ti-trash fs-1 text-danger"></i>
                        <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                            <h5>Are you sure ?</h5>
                            <p class="text-muted mx-4 mb-0">Are you sure you want to remove this contact ?</p>
                        </div>
                    </div>
                    <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                        <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete It!</button>
                    </div>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- New contact Modal -->
    <div class="modal fade" id="add-new" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0">
                <div class="modal-body">
                    <form autocomplete="off" id="memberlist-form" class="needs-validation" novalidate>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="text-center mb-4 pt-2">
                                    <div class="position-relative d-inline-block">
                                        <div class="position-absolute bottom-0 end-0">
                                            <label for="member-image-input" class="mb-0" data-bs-toggle="tooltip" data-bs-placement="right" title="Select Member Image">
                                                <div class="avatar-xs">
                                                    <div class="avatar-title bg-light border rounded-circle text-muted cursor-pointer">
                                                        <i class="ri-image-fill"></i>
                                                    </div>
                                                </div>
                                            </label>
                                            <input class="form-control d-none" value="" id="member-image-input" type="file" accept="image/png, image/gif, image/jpeg">
                                        </div>
                                        <div class="avatar-lg">
                                            <div class="avatar-title bg-light rounded-circle">
                                                <img src="assets/images/users/user-dummy-img.jpg" id="member-img" class="avatar-md rounded-circle h-auto" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="teammembersName" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="teammembersName" placeholder="Enter name" required>
                                    <div class="invalid-feedback">Please Enter a member name.</div>
                                </div>

                                <div class="mb-4">
                                    <label for="designation" class="form-label">Designation</label>
                                    <input type="text" class="form-control" id="designation" placeholder="Enter designation" required>
                                    <div class="invalid-feedback">Please Enter a designation.</div>
                                </div>
                                <div class="hstack gap-2 justify-content-end">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success">Add Member</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!--end modal-content-->
        </div>
        <!--end modal-dialog-->
    </div>
    <!--end modal-->


    <?php include 'partials/customizer.php'; ?>

    <?php include 'partials/vendor-scripts.php'; ?>


    <!-- App js -->
    <script src="assets/js/app.js"></script>
</body>

</html>