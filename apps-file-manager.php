<?php include 'partials/main.php'; ?>

<head>

    <?php
    $title = 'File Manager';
    include('partials/title-meta.php');
    ?>


    <!-- dropzone css -->
    <link rel="stylesheet" href="assets/libs/dropzone/dropzone.css" type="text/css">

    <?php include 'partials/head-css.php'; ?>

</head>

<body class="file-detail-show">

    <!-- Begin page -->
    <div id="layout-wrapper">

        <?php include 'partials/menu.php'; ?>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <div class="m-n2">
                        <div class="d-flex">
                            <div class="card file-manager-wrapper rounded-end-0 shadow-none pb-3">
                                <div data-simplebar class="h-100">
                                    <div class="card-body d-flex flex-column h-100">
                                        <div class="position-relative mb-4 d-flex align-items-center gap-2">
                                            <div class="flex-shrink-0 position-relative">
                                                <img src="assets/images/users/avatar-1.jpg" alt="" class="avatar-sm rounded">
                                                <span class="position-absolute top-0 start-100 translate-middle badge border border-2 border-white rounded-circle bg-success p-1"><span class="visually-hidden">unread messages</span></span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="text-muted mb-2">Welcom to file manager</p>
                                                <a href="#!" class="stretched-link">
                                                    <h6 class="fs-md mb-0">Silene Oliveira</h6>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="mb-4">

                                            <div class="dropzone file-dropzone border border-1 border-dashed border-primary text-center">
                                                <div class="fallback">
                                                    <input name="file" type="file" multiple="multiple">
                                                </div>
                                                <div class="dz-message needsclick">
                                                    <div class="mb-3 text-primary">
                                                        <i class="bi bi-file-earmark-arrow-down-fill fs-1"></i>
                                                    </div>

                                                    <h5 class="fs-md mb-0 text-primary">Drop files here or click to upload.</h5>
                                                </div>
                                            </div>

                                            <ul class="list-unstyled mb-0" id="dropzone-preview">
                                                <li class="mt-2" id="dropzone-preview-list">
                                                    <!-- This is used as the file preview template -->
                                                    <div class="border rounded">
                                                        <div class="d-flex flex-wrap gap-2 p-2">
                                                            <div class="flex-shrink-0 me-3">
                                                                <div class="avatar-sm bg-light rounded p-2">
                                                                    <img data-dz-thumbnail class="img-fluid rounded d-block" src="assets/images/new-document.png" alt="Dropzone-Image">
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <div class="pt-1">
                                                                    <h5 class="fs-md mb-1" data-dz-name>&nbsp;</h5>
                                                                    <p class="fs-sm text-muted mb-0" data-dz-size></p>
                                                                    <strong class="error text-danger" data-dz-errormessage></strong>
                                                                </div>
                                                            </div>
                                                            <div class="flex-shrink-0 ms-3">
                                                                <button data-dz-remove class="btn btn-sm btn-danger">Delete</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <!-- end dropzon-preview -->
                                        </div>
                                        <div class="mb-4">
                                            <h6>My Documents</h6>
                                            <ul class="file-manager-menu list-unstyled fs-md mb-0">
                                                <li>
                                                    <a href="#!"><i class="ti ti-folder align-baseline me-1"></i> All Folders</a>
                                                </li>
                                                <li>
                                                    <div class="custom-accordion">
                                                        <a class="text-body fw-medium py-1 d-flex align-items-center" data-bs-toggle="collapse" href="#categories-collapse" role="button" aria-expanded="true" aria-controls="categories-collapse">
                                                            <i class="ti ti-clock-hour-2 font-size-20  me-2"></i> Recent File <i class="ti ti-chevron-down accor-down-icon ms-auto"></i>
                                                        </a>
                                                        <div class="collapse show" id="categories-collapse">
                                                            <div class="card border-0 shadow-none ps-2 mb-0">
                                                                <ul class="list-unstyled mb-0">
                                                                    <li><a href="#" class="d-flex align-items-center text-muted"><i class="bi bi-circle-fill text-danger me-2" style="font-size: 6px;"></i><span class="me-auto">Analytics</span></a></li>
                                                                    <li><a href="#" class="d-flex align-items-center text-muted"><i class="bi bi-circle-fill text-warning me-2" style="font-size: 6px;"></i><span class="me-auto">Design</span></a></li>
                                                                    <li><a href="#" class="d-flex align-items-center text-muted"><i class="bi bi-circle-fill text-info me-2" style="font-size: 6px;"></i><span class="me-auto">Development</span> <i class="ti ti-flag-3-filled ms-auto"></i></a></li>
                                                                    <li><a href="#" class="d-flex align-items-center text-muted"><i class="bi bi-circle-fill text-secondary me-2" style="font-size: 6px;"></i><span class="me-auto">Project A</span></a></li>
                                                                    <li><a href="#" class="d-flex align-items-center text-muted"><i class="bi bi-circle-fill text-success me-2" style="font-size: 6px;"></i><span class="me-auto">Admin</span> <i class="ti ti-flag-3-filled ms-auto"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="#!"><i class="ti ti-brand-youtube align-baseline me-1"></i> Videos</a>
                                                </li>
                                                <li>
                                                    <a href="#!"><i class="ti ti-file-description align-baseline me-1"></i> Documents</a>
                                                </li>
                                                <li>
                                                    <a href="#!"><i class="ti ti-photo align-baseline me-1"></i> Images</a>
                                                </li>

                                                <li>
                                                    <a href="#!"><i class="ti ti-star align-baseline me-1"></i> Important</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="mb-4">
                                            <h6>Favorite Files</h6>
                                            <ul class="file-manager-menu list-unstyled">
                                                <li>
                                                    <a href="#!"><i class="ti ti-bookmark align-baseline me-1"></i> DOC - Projectbaser.word</a>
                                                </li>
                                                <li>
                                                    <a href="#!"><i class="ti ti-bookmark align-baseline me-1"></i> DOC - SkripsiOnky.word</a>
                                                </li>
                                                <li>
                                                    <a href="#!"><i class="ti ti-bookmark align-baseline me-1"></i> IMG - auth-bg.jpg</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card bg-primary-subtle file-manager-widgets mt-auto mb-0">
                                            <div class="card-body">
                                                <div class="text-center mt-n5">
                                                    <img src="assets/images/upgrade-filemanager.png" alt="" height="200">
                                                    <h6 class="mt-4">Get more space for files</h6>
                                                    <p class="text-muted fs-sm">We offer you unlimited storage space for all your needs.</p>
                                                    <button class="btn btn-primary">Upgrade to Pro</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end file-manager-wrapper-->

                            <div class="card file-manager-content-wrapper w-100 border-0 shadow-none">
                                <div class="card-body">
                                    <div class="d-flex gap-3 align-items-center mb-3">
                                        <div class="flex-shrink-0 d-block d-lg-none">
                                            <button type="button" class="btn btn-icon btn-subtle-success file-menu-btn">
                                                <i class="ri-menu-2-fill align-bottom"></i>
                                            </button>
                                        </div>
                                        <div class="search-box flex-grow-1">
                                            <input type="text" class="form-control search" placeholder="Search products, price etc...">
                                            <i class="ri-search-line search-icon"></i>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createFolder"><i class="bi bi-plus-lg align-baseline"></i> <span class="ms-1 d-none d-sm-inline-block">Create Folders</span></button>
                                        </div>
                                    </div>
                                    <div class="row row-cols-xxl-5">
                                        <div class="col">
                                            <a href="#!" class="card">
                                                <div class="card-body d-flex align-items-center gap-3 p-2">
                                                    <div class="avatar-xs flex-shrink-0">
                                                        <div class="avatar-title bg-primary-subtle text-primary-emphasis fs-md rounded">
                                                            <i class="bi bi-file-earmark-text"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <p class="flex-grow-1 mb-0 text-muted"><b>345</b> Files</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div><!--end col-->
                                        <div class="col">
                                            <a href="#!" class="card">
                                                <div class="card-body d-flex align-items-center gap-3 p-2">
                                                    <div class="avatar-xs flex-shrink-0">
                                                        <div class="avatar-title bg-danger-subtle text-danger-emphasis fs-md rounded">
                                                            <i class="bi bi-images"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <p class="flex-grow-1 mb-0 text-muted"><b>3124</b> Images</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div><!--end col-->
                                        <div class="col">
                                            <a href="#!" class="card">
                                                <div class="card-body d-flex align-items-center gap-3 p-2">
                                                    <div class="avatar-xs flex-shrink-0">
                                                        <div class="avatar-title bg-secondary-subtle text-secondary-emphasis fs-md rounded">
                                                            <i class="bi bi-camera-reels"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <p class="flex-grow-1 mb-0 text-muted"><b>213</b> Video</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div><!--end col-->
                                        <div class="col">
                                            <a href="#!" class="card">
                                                <div class="card-body d-flex align-items-center gap-3 p-2">
                                                    <div class="avatar-xs flex-shrink-0">
                                                        <div class="avatar-title bg-warning-subtle text-warning-emphasis fs-md rounded">
                                                            <i class="bi bi-filetype-doc"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <p class="flex-grow-1 mb-0 text-muted"><b>469</b> Docs Files</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div><!--end col-->
                                        <div class="col">
                                            <a href="#!" class="card">
                                                <div class="card-body d-flex align-items-center gap-3 p-2">
                                                    <div class="avatar-xs flex-shrink-0">
                                                        <div class="avatar-title bg-success-subtle text-success-emphasis fs-md rounded">
                                                            <i class="bi bi-google-play"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <p class="flex-grow-1 mb-0 text-muted"><b>18</b> Application</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div><!--end col-->
                                    </div><!--end row-->

                                    <div class="d-flex align-items-center gap-2 mb-3">
                                        <h6 class="card-title flex-grow-1 mb-0">Favorite Folders</h6>
                                        <div class="flex-shrink-0 dropdown">
                                            <button class="btn btn-subtle-secondary btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bi bi-three-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="#"><i class="bi bi-folder-plus me-1 align-baseline"></i> Add Folder</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="bi bi-cloud-arrow-down me-1 align-baseline"></i> Import</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="bi bi-cloud-arrow-up me-1 align-baseline"></i> Export</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="card border shadow-none">
                                                <div class="card-body">
                                                    <div class="d-flex gap-3 mb-4">
                                                        <div class="flex-grow-1">
                                                            <div class="avatar-xs">
                                                                <div class="avatar-title bg-transparent rounded text-primary fs-3">
                                                                    <i class="bi bi-folder2-open"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="flex-shrink-0 dropdown">
                                                            <a href="#!" class="text-reset d-inline-block" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="bi bi-three-dots-vertical"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a class="dropdown-item" href="#"><i class="bi bi-folder2-open me-1 align-baseline"></i> Open Folder</a></li>
                                                                <li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square me-1 align-baseline"></i> Edit</a></li>
                                                                <li><a class="dropdown-item" href="#"><i class="bi bi-trash3 me-1 align-baseline"></i> Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <a href="#!">
                                                        <h6 class="fs-md text-truncate">My Documents</h6>
                                                    </a>
                                                    <ul class="list-unstyled hstack gap-2 text-muted mb-0">
                                                        <li>
                                                            <b>24</b> Feb
                                                        </li>
                                                        <li>
                                                            <b>733</b> Files
                                                        </li>
                                                        <li>
                                                            <b>1.4</b> GB
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-lg-4">
                                            <div class="card border shadow-none">
                                                <div class="card-body">
                                                    <div class="d-flex gap-3 mb-4">
                                                        <div class="flex-grow-1">
                                                            <div class="avatar-xs">
                                                                <div class="avatar-title bg-transparent rounded text-primary fs-3">
                                                                    <i class="bi bi-folder2-open"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="flex-shrink-0 dropdown">
                                                            <a href="#!" class="text-reset d-inline-block" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="bi bi-three-dots-vertical"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a class="dropdown-item" href="#"><i class="bi bi-folder2-open me-1 align-baseline"></i> Open Folder</a></li>
                                                                <li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square me-1 align-baseline"></i> Edit</a></li>
                                                                <li><a class="dropdown-item" href="#"><i class="bi bi-trash3 me-1 align-baseline"></i> Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <a href="#!">
                                                        <h6 class="fs-md text-truncate">Steex - Admin & Dashboard Templates</h6>
                                                    </a>
                                                    <ul class="list-unstyled hstack gap-2 text-muted mb-0">
                                                        <li>
                                                            <b>08</b> Feb
                                                        </li>
                                                        <li>
                                                            <b>2473</b> Files
                                                        </li>
                                                        <li>
                                                            <b>1.6</b> GB
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-lg-4">
                                            <div class="card border shadow-none">
                                                <div class="card-body">
                                                    <div class="d-flex gap-3 mb-4">
                                                        <div class="flex-grow-1">
                                                            <div class="avatar-xs">
                                                                <div class="avatar-title bg-transparent rounded text-primary fs-3">
                                                                    <i class="bi bi-folder2-open"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="flex-shrink-0 dropdown">
                                                            <a href="#!" class="text-reset d-inline-block" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="bi bi-three-dots-vertical"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a class="dropdown-item" href="#"><i class="bi bi-folder2-open me-1 align-baseline"></i> Open Folder</a></li>
                                                                <li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square me-1 align-baseline"></i> Edit</a></li>
                                                                <li><a class="dropdown-item" href="#"><i class="bi bi-trash3 me-1 align-baseline"></i> Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <a href="#!">
                                                        <h6 class="fs-md text-truncate">Database</h6>
                                                    </a>
                                                    <ul class="list-unstyled hstack gap-2 text-muted mb-0">
                                                        <li>
                                                            <b>16</b> March
                                                        </li>
                                                        <li>
                                                            <b>269</b> Files
                                                        </li>
                                                        <li>
                                                            <b>716</b> MB
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->

                                    <div class="d-flex align-items-center gap-2 mb-3">
                                        <h6 class="card-title flex-grow-1 mb-0">Quick Access</h6>
                                        <div class="flex-shrink-0 dropdown">
                                            <button class="btn btn-subtle-secondary btn-sm" type="button" aria-expanded="false">
                                                View All
                                            </button>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="card border shadow-none bg-primary">
                                                <div class="card-body">
                                                    <div class="d-flex gap-3 align-items-center">
                                                        <div class="avatar-sm flex-shrink-0">
                                                            <div class="avatar-title bg-body-secondary rounded fs-5">
                                                                <i class="ti ti-file align-middle text-primary"></i>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6 class="text-white fs-md">Sprix.docs</h6>
                                                            <p class="text-white text-opacity-50 fs-sm mb-0">256 KB</p>
                                                        </div>
                                                        <div class="flex-shrink-0 dropdown">
                                                            <a href="#!" class="text-white d-inline-block" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="bi bi-three-dots-vertical"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a class="dropdown-item" href="#"><i class="bi bi-folder2-open me-1 align-baseline"></i> Open Folder</a></li>
                                                                <li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square me-1 align-baseline"></i> Edit</a></li>
                                                                <li><a class="dropdown-item" href="#"><i class="bi bi-trash3 me-1 align-baseline"></i> Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-lg-4">
                                            <div class="card border shadow-none">
                                                <div class="card-body">
                                                    <div class="d-flex gap-3 align-items-center">
                                                        <div class="avatar-sm flex-shrink-0">
                                                            <div class="avatar-title bg-success-subtle rounded fs-5">
                                                                <i class="ti ti-photo align-middle text-success"></i>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6 class="fs-md">Fotoimg.png</h6>
                                                            <p class="text-muted fs-sm mb-0">2.85 MB</p>
                                                        </div>
                                                        <div class="flex-shrink-0 dropdown">
                                                            <a href="#!" class="text-reset d-inline-block" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="bi bi-three-dots-vertical"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a class="dropdown-item" href="#"><i class="bi bi-folder2-open me-1 align-baseline"></i> Open Folder</a></li>
                                                                <li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square me-1 align-baseline"></i> Edit</a></li>
                                                                <li><a class="dropdown-item" href="#"><i class="bi bi-trash3 me-1 align-baseline"></i> Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-lg-4">
                                            <div class="card border shadow-none">
                                                <div class="card-body">
                                                    <div class="d-flex gap-3 align-items-center">
                                                        <div class="avatar-sm flex-shrink-0">
                                                            <div class="avatar-title bg-info-subtle rounded fs-5">
                                                                <i class="ti ti-file-text align-middle text-info"></i>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6 class="fs-md">Lemberen.txt</h6>
                                                            <p class="text-muted fs-sm mb-0">0.9 MB</p>
                                                        </div>
                                                        <div class="flex-shrink-0 dropdown">
                                                            <a href="#!" class="text-reset d-inline-block" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="bi bi-three-dots-vertical"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a class="dropdown-item" href="#"><i class="bi bi-folder2-open me-1 align-baseline"></i> Open Folder</a></li>
                                                                <li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square me-1 align-baseline"></i> Edit</a></li>
                                                                <li><a class="dropdown-item" href="#"><i class="bi bi-trash3 me-1 align-baseline"></i> Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->

                                    <div id="contactList" class="mt-2">
                                        <div class="d-flex align-items-center gap-2 mb-3">
                                            <h6 class="card-title flex-grow-1 mb-0">File Recent</h6>
                                            <div class="dropdown card-header-dropdown sortble-dropdown flex-shrink-0">
                                                <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="fw-semibold text-uppercase fs-sm">Sort by:
                                                    </span><span class="text-muted dropdown-title">Docs Type</span> <i class="ti ti-chevron-down ms-1"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <button class="dropdown-item sort" data-sort="docs_type">Docs Type</button>
                                                    <button class="dropdown-item sort" data-sort="size">Size</button>
                                                    <button class="dropdown-item sort" data-sort="date">Date</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-borderless table-centered align-middle table-nowrap mb-0">
                                                <thead class="text-muted table-light">
                                                    <tr>
                                                        <th>
                                                            <div class="form-check checkbox-product-list">
                                                                <input class="form-check-input" type="checkbox" value="1" id="checkbox-1">
                                                                <label class="form-check-label" for="checkbox-1"></label>
                                                            </div>
                                                        </th>
                                                        <th scope="col" class="sort cursor-pointer" data-sort="docs_type">Type</th>
                                                        <th scope="col" class="sort cursor-pointer" data-sort="document_name">Document Name</th>
                                                        <th scope="col" class="sort cursor-pointer" data-sort="file_item">File Item</th>
                                                        <th scope="col" class="sort cursor-pointer" data-sort="size">Size</th>
                                                        <th scope="col" class="sort cursor-pointer" data-sort="date">Last Modified</th>
                                                        <th scope="col" class="sort cursor-pointer">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="list" id="file-list">
                                                    <tr>
                                                        <th>
                                                            <div class="form-check checkbox-product-list">
                                                                <input class="form-check-input" type="checkbox" value="2" id="checkbox-2">
                                                                <label class="form-check-label" for="checkbox-2"></label>
                                                            </div>
                                                        </th>
                                                        <td class="docs_type">
                                                            <i class="bi bi-filetype-pdf text-danger-emphasis fs-4"></i>
                                                        </td>
                                                        <td>
                                                            <a href="#!" class="text-reset document_name">Velzon Docs File</a>
                                                        </td>
                                                        <td class="file_item">24</td>
                                                        <td class="size">
                                                            2.5 MB
                                                        </td>
                                                        <td class="date">
                                                            15 Feb, 2023
                                                        </td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <button class="btn btn-subtle-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="ri-more-fill align-middle"></i>
                                                                </button>
                                                                <ul class="dropdown-menu dropdown-menu-end">
                                                                    <li><a class="dropdown-item view-item-btn" href="javascript:void(0);"><i class="ri-eye-fill align-bottom me-2 text-muted"></i>View</a></li>
                                                                    <li><a class="dropdown-item edit-item-btn" href="#"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                                    <li><a class="dropdown-item remove-item-btn" href="#"><i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete</a></li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr><!-- end tr -->
                                                    <tr>
                                                        <th>
                                                            <div class="form-check checkbox-product-list">
                                                                <input class="form-check-input" type="checkbox" value="3" id="checkbox-3">
                                                                <label class="form-check-label" for="checkbox-3"></label>
                                                            </div>
                                                        </th>
                                                        <td class="docs_type">
                                                            <i class="bi bi-filetype-psd text-primary-emphasis fs-4"></i>
                                                        </td>
                                                        <td>
                                                            <a href="#!" class="text-reset document_name">Steex Design Kit.psd</a>
                                                        </td>
                                                        <td class="file_item">148</td>
                                                        <td class="size">
                                                            234.87 MB
                                                        </td>
                                                        <td class="date">
                                                            29 Jan, 2023
                                                        </td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <button class="btn btn-subtle-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="ri-more-fill align-middle"></i>
                                                                </button>
                                                                <ul class="dropdown-menu dropdown-menu-end">
                                                                    <li><a class="dropdown-item view-item-btn" href="javascript:void(0);"><i class="ri-eye-fill align-bottom me-2 text-muted"></i>View</a></li>
                                                                    <li><a class="dropdown-item edit-item-btn" href="#"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                                    <li><a class="dropdown-item remove-item-btn" href="#"><i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete</a></li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr><!-- end tr -->
                                                    <tr>
                                                        <th>
                                                            <div class="form-check checkbox-product-list">
                                                                <input class="form-check-input" type="checkbox" value="4" id="checkbox-4">
                                                                <label class="form-check-label" for="checkbox-4"></label>
                                                            </div>
                                                        </th>
                                                        <td class="docs_type">
                                                            <i class="bi bi-filetype-mp4 text-warning-emphasis fs-4"></i>
                                                        </td>
                                                        <td>
                                                            <a href="#!" class="text-reset document_name">Velzon Docs Video.mp4</a>
                                                        </td>
                                                        <td class="file_item">19</td>
                                                        <td class="size">
                                                            149.33 MB
                                                        </td>
                                                        <td class="date">
                                                            28 Nov, 2022
                                                        </td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <button class="btn btn-subtle-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="ri-more-fill align-middle"></i>
                                                                </button>
                                                                <ul class="dropdown-menu dropdown-menu-end">
                                                                    <li><a class="dropdown-item view-item-btn" href="javascript:void(0);"><i class="ri-eye-fill align-bottom me-2 text-muted"></i>View</a></li>
                                                                    <li><a class="dropdown-item edit-item-btn" href="#"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                                    <li><a class="dropdown-item remove-item-btn" href="#"><i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete</a></li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr><!-- end tr -->
                                                    <tr>
                                                        <th>
                                                            <div class="form-check checkbox-product-list">
                                                                <input class="form-check-input" type="checkbox" value="4" id="checkbox-5">
                                                                <label class="form-check-label" for="checkbox-5"></label>
                                                            </div>
                                                        </th>
                                                        <td class="docs_type">
                                                            <i class="bi bi-filetype-gif text-success-emphasis fs-4"></i>
                                                        </td>
                                                        <td>
                                                            <a href="#!" class="text-reset document_name">Offline Pages.gif</a>
                                                        </td>
                                                        <td class="file_item">01</td>
                                                        <td class="size">
                                                            0.987 MB
                                                        </td>
                                                        <td class="date">
                                                            12 Nov, 2022
                                                        </td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <button class="btn btn-subtle-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="ri-more-fill align-middle"></i>
                                                                </button>
                                                                <ul class="dropdown-menu dropdown-menu-end">
                                                                    <li><a class="dropdown-item view-item-btn" href="javascript:void(0);"><i class="ri-eye-fill align-bottom me-2 text-muted"></i>View</a></li>
                                                                    <li><a class="dropdown-item edit-item-btn" href="#"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                                    <li><a class="dropdown-item remove-item-btn" href="#"><i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete</a></li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr><!-- end tr -->
                                                    <tr>
                                                        <th>
                                                            <div class="form-check checkbox-product-list">
                                                                <input class="form-check-input" type="checkbox" value="4" id="checkbox-6">
                                                                <label class="form-check-label" for="checkbox-6"></label>
                                                            </div>
                                                        </th>
                                                        <td class="docs_type">
                                                            <i class="bi bi-filetype-scss text-danger fs-4"></i>
                                                        </td>
                                                        <td>
                                                            <a href="#!" class="text-reset document_name">app.scss</a>
                                                        </td>
                                                        <td class="file_item">01</td>
                                                        <td class="size">
                                                            0.234 KB
                                                        </td>
                                                        <td class="date">
                                                            07 May, 2023
                                                        </td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <button class="btn btn-subtle-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="ri-more-fill align-middle"></i>
                                                                </button>
                                                                <ul class="dropdown-menu dropdown-menu-end">
                                                                    <li><a class="dropdown-item view-item-btn" href="javascript:void(0);"><i class="ri-eye-fill align-bottom me-2 text-muted"></i>View</a></li>
                                                                    <li><a class="dropdown-item edit-item-btn" href="#"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                                    <li><a class="dropdown-item remove-item-btn" href="#"><i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete</a></li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr><!-- end tr -->
                                                    <tr>
                                                        <th>
                                                            <div class="form-check checkbox-product-list">
                                                                <input class="form-check-input" type="checkbox" value="4" id="checkbox-6">
                                                                <label class="form-check-label" for="checkbox-6"></label>
                                                            </div>
                                                        </th>
                                                        <td class="docs_type">
                                                            <i class="bi bi-filetype-svg text-secondary-emphasis fs-4"></i>
                                                        </td>
                                                        <td>
                                                            <a href="#!" class="text-reset document_name">home Pattern Wave.svg</a>
                                                        </td>
                                                        <td class="file_item">01</td>
                                                        <td class="size">
                                                            3.87 MB
                                                        </td>
                                                        <td class="date">
                                                            19 Dec, 2022
                                                        </td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <button class="btn btn-subtle-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="ri-more-fill align-middle"></i>
                                                                </button>
                                                                <ul class="dropdown-menu dropdown-menu-end">
                                                                    <li><a class="dropdown-item view-item-btn" href="javascript:void(0);"><i class="ri-eye-fill align-bottom me-2 text-muted"></i>View</a></li>
                                                                    <li><a class="dropdown-item edit-item-btn" href="#"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                                    <li><a class="dropdown-item remove-item-btn" href="#"><i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete</a></li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr><!-- end tr -->
                                                    <tr>
                                                        <th>
                                                            <div class="form-check checkbox-product-list">
                                                                <input class="form-check-input" type="checkbox" value="4" id="checkbox-4">
                                                                <label class="form-check-label" for="checkbox-4"></label>
                                                            </div>
                                                        </th>
                                                        <td class="docs_type">
                                                            <i class="bi bi-filetype-mp4 text-warning-emphasis fs-4"></i>
                                                        </td>
                                                        <td>
                                                            <a href="#!" class="text-reset document_name">Steex_customizes.mp4</a>
                                                        </td>
                                                        <td class="file_item">02</td>
                                                        <td class="size">
                                                            875 MB
                                                        </td>
                                                        <td class="date">
                                                            16 May, 2023
                                                        </td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <button class="btn btn-subtle-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="ri-more-fill align-middle"></i>
                                                                </button>
                                                                <ul class="dropdown-menu dropdown-menu-end">
                                                                    <li><a class="dropdown-item view-item-btn" href="javascript:void(0);"><i class="ri-eye-fill align-bottom me-2 text-muted"></i>View</a></li>
                                                                    <li><a class="dropdown-item edit-item-btn" href="#"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                                    <li><a class="dropdown-item remove-item-btn" href="#"><i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete</a></li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr><!-- end tr -->
                                                    <tr>
                                                        <th>
                                                            <div class="form-check checkbox-product-list">
                                                                <input class="form-check-input" type="checkbox" value="4" id="checkbox-6">
                                                                <label class="form-check-label" for="checkbox-6"></label>
                                                            </div>
                                                        </th>
                                                        <td class="docs_type">
                                                            <i class="bi bi-filetype-scss text-danger fs-4"></i>
                                                        </td>
                                                        <td>
                                                            <a href="#!" class="text-reset document_name">_variables.scss</a>
                                                        </td>
                                                        <td class="file_item">01</td>
                                                        <td class="size">
                                                            0.234 KB
                                                        </td>
                                                        <td class="date">
                                                            03 April, 2023
                                                        </td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <button class="btn btn-subtle-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="ri-more-fill align-middle"></i>
                                                                </button>
                                                                <ul class="dropdown-menu dropdown-menu-end">
                                                                    <li><a class="dropdown-item view-item-btn" href="javascript:void(0);"><i class="ri-eye-fill align-bottom me-2 text-muted"></i>View</a></li>
                                                                    <li><a class="dropdown-item edit-item-btn" href="#"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                                    <li><a class="dropdown-item remove-item-btn" href="#"><i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete</a></li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr><!-- end tr -->
                                                </tbody><!-- end tbody -->
                                            </table><!-- end table -->
                                            <div class="noresult" style="display: none">
                                                <div class="text-center">
                                                    <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#405189,secondary:#0ab39c" style="width:75px;height:75px"></lord-icon>
                                                    <h5 class="mt-2">Sorry! No Result Found</h5>
                                                    <p class="text-muted mb-0">We've searched more than 150+ transactions We did not find any transactions for you search.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center text-center text-sm-start mt-3">
                                            <div class="col-sm">
                                                <div class="text-muted">
                                                    Showing <span class="fw-semibold">8</span> of <span class="fw-semibold">15</span> Results
                                                </div>
                                            </div>
                                            <div class="col-sm-auto  mt-3 mt-sm-0">
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
                                            </div>
                                        </div>
                                    </div><!--end file tables-->
                                </div><!--end card-body-->
                            </div><!--end file-manager-content-wrapper-->

                            <div class="card file-manager-right-wrapper rounded-start-0 shadow-none">
                                <div data-simplebar class="h-100">
                                    <div class="card-header d-flex gap-2 align-items-center">
                                        <div class="flex-grow-1">
                                            <h6 class="card-title mb-0">Storage Overview <span class="badge bg-success-subtle text-success align-middle ms-1">67%</span></h6>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <button type="button" class="btn btn-sm btn-icon btn-subtle-danger close-btn-overview">
                                                <i class="ri-close-fill align-bottom"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div id="storage_chart" data-colors='["--tb-success"]' class="apex-charts" dir="ltr"></div>
                                        <div class="mt-3 mb-3">
                                            <h6 class="card-title mb-0">Folders</h6>
                                        </div>
                                        <ul class="list-unstyled">
                                            <li>
                                                <div class="card border shadow-none">
                                                    <div class="card-body">
                                                        <div class="d-flex gap-3 align-items-center mb-3">
                                                            <div class="avatar-sm flex-shrink-0">
                                                                <div class="avatar-title bg-light rounded fs-5">
                                                                    <i class="ti ti-file-description align-middle text-body"></i>
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <h6 class="fs-md">Document</h6>
                                                                <div class="d-flex mt-2">
                                                                    <p class="text-muted flex-grow-1 mb-0">1,324 Files</p>
                                                                    <div class="fw-medium flex-shrink-0">14.5GB</div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Progress sm -->
                                                        <div class="progress progress-sm">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 63%;" aria-valuenow="63" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="card border shadow-none">
                                                    <div class="card-body">
                                                        <div class="d-flex gap-3 align-items-center mb-3">
                                                            <div class="avatar-sm flex-shrink-0">
                                                                <div class="avatar-title bg-light rounded fs-5">
                                                                    <i class="ti ti-photo align-middle text-body"></i>
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <h6 class="fs-md">Image</h6>
                                                                <div class="d-flex mt-2">
                                                                    <p class="text-muted flex-grow-1 mb-0">210 Files</p>
                                                                    <div class="fw-medium flex-shrink-0">1.23 GB</div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Progress sm -->
                                                        <div class="progress progress-sm">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 46%;" aria-valuenow="46" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="card border shadow-none">
                                                    <div class="card-body">
                                                        <div class="d-flex gap-3 align-items-center mb-3">
                                                            <div class="avatar-sm flex-shrink-0">
                                                                <div class="avatar-title bg-light rounded fs-5">
                                                                    <i class="ti ti-brand-youtube align-middle text-body"></i>
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <h6 class="fs-md">Video</h6>
                                                                <div class="d-flex mt-2">
                                                                    <p class="text-muted flex-grow-1 mb-0">102 Files</p>
                                                                    <div class="fw-medium flex-shrink-0">34 GB</div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Progress sm -->
                                                        <div class="progress progress-sm">
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 79%;" aria-valuenow="79" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="card border shadow-none">
                                                    <div class="card-body">
                                                        <div class="d-flex gap-3 align-items-center mb-3">
                                                            <div class="avatar-sm flex-shrink-0">
                                                                <div class="avatar-title bg-light rounded fs-5">
                                                                    <i class="ti ti-music align-middle text-body"></i>
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <h6 class="fs-md">Music</h6>
                                                                <div class="d-flex mt-2">
                                                                    <p class="text-muted flex-grow-1 mb-0">154 Files</p>
                                                                    <div class="fw-medium flex-shrink-0">2.7 GB</div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Progress sm -->
                                                        <div class="progress progress-sm">
                                                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 87%;" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="card border shadow-none">
                                                    <div class="card-body">
                                                        <div class="d-flex gap-3 align-items-center mb-3">
                                                            <div class="avatar-sm flex-shrink-0">
                                                                <div class="avatar-title bg-light rounded fs-5">
                                                                    <i class="ti ti-gradienter align-middle text-body"></i>
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <h6 class="fs-md">Other</h6>
                                                                <div class="d-flex mt-2">
                                                                    <p class="text-muted flex-grow-1 mb-0">30 Files</p>
                                                                    <div class="fw-medium flex-shrink-0">45 GB</div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Progress sm -->
                                                        <div class="progress progress-sm">
                                                            <div class="progress-bar" role="progressbar" style="width: 71%;" aria-valuenow="71" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!--end file-manager-right-wrapper-->
                        </div>
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


    <!-- Modal -->
    <div class="modal fade" id="createFolder" tabindex="-1" aria-labelledby="createFolderLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createFolderLabel">Product</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                </div>

                <form class="tablelist-form" novalidate autocomplete="off">
                    <div class="modal-body">
                        <div id="alert-error-msg" class="d-none alert alert-danger py-2"></div>
                        <input type="hidden" id="id-field">

                        <input type="hidden" id="order-field">
                        <input type="hidden" id="rating-field">
                        <input type="hidden" id="discount-field">

                        <div class="mb-3">
                            <label for="product-title-input" class="form-label">Product title</label>
                            <input type="text" id="product-title-input" class="form-control" placeholder="Enter product title" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Product Images</label>

                            <div class="dropzone">
                                <div class="dz-message needsclick">
                                    <div class="mb-3">
                                        <i class="display-4 text-muted ri-upload-cloud-2-fill"></i>
                                    </div>

                                    <h4>Drop files here or click to upload.</h4>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="product-category-input" class="form-label">Product category</label>

                            <select class="form-select" id="product-category-input" data-choices data-choices-search-false data-choices-removeItem>
                                <option value="">Select product category</option>
                                <option value="Appliances">Appliances</option>
                                <option value="Automotive Accessories">Automotive Accessories</option>
                                <option value="Electronics">Electronics</option>
                                <option value="Fashion">Fashion</option>
                                <option value="Furniture">Furniture</option>
                                <option value="Grocery">Grocery</option>
                                <option value="Headphones">Headphones</option>
                                <option value="Kids">Kids</option>
                                <option value="Luggage">Luggage</option>
                                <option value="Sports">Sports</option>
                                <option value="Watches">Watches</option>
                            </select>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="product-stock-input" class="form-label">Stocks</label>
                                    <input type="number" id="product-stock-input" class="form-control" placeholder="Enter product stocks" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="product-price-input" class="form-label">Price</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text">$</span>
                                        <input type="number" class="form-control" id="product-price-input" placeholder="Enter product price" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="hstack gap-2 justify-content-end">
                            <button type="button" class="btn btn-ghost-danger" data-bs-dismiss="modal"><i class="bi bi-x-lg align-baseline me-1"></i> Close</button>
                            <button type="submit" class="btn btn-primary" id="add-btn">Add User</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- modal-content -->
        </div>
    </div>


    <?php include 'partials/customizer.php'; ?>

    <?php include 'partials/vendor-scripts.php'; ?>


    <!-- dropzone min -->
    <script src="assets/libs/dropzone/dropzone-min.js"></script>

    <script src="assets/libs/list.js/list.min.js"></script>

    <!-- apexcharts js -->
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

    <script src="assets/js/pages/file-manager.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>
</body>

</html>