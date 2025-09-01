<?php include 'partials/main.php'; ?>

<head>
<?php includeFileWithVariables('partials/title-meta.php', array('title' => 'Dropdowns')); ?>

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
                <?php includeFileWithVariables('partials/page-title.php', array('pagetitle' => 'Base UI', 'title' => 'Dropdowns')); ?>
        

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Single Button Dropdown</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <p class="text-muted">Use <code>btn</code> class at to create a dropdown
                                        toggle with &lt;button&gt; element.
                                    </p>
                                    <div class="d-flex flex-wrap gap-3">
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                                id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                Dropdown button
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>

                                        <div class="dropdown">
                                            <a href="#" class="btn btn-secondary dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Dropdown link
                                            </a>

                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Dropdown Color Variant</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <p class="text-muted">Use <code>btn-</code> class with below mentioned variation to
                                        color dropdown toggle.</p>
                                    <div class="d-flex flex-wrap gap-3">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">Primary</button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div><!-- /btn-group -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-success dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">Success</button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div><!-- /btn-group -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-light dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">Light</button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div><!-- /btn-group -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">Info</button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div><!-- /btn-group -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-secondary dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">Secondary</button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div><!-- /btn-group -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-warning dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">Warning</button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div><!-- /btn-group -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-danger dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">Danger</button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div><!-- /btn-group -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-dark dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">Dark</button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div><!-- /btn-group -->
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Split Button Dropdown</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <p class="text-muted">Use <code>dropdown-toggle-split</code> to create split button
                                        dropdowns as a single button dropdown. </p>
                                    <div class="d-flex flex-wrap gap-3">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary">Primary</button>
                                            <button type="button"
                                                class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false"></button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div><!-- /btn-group -->

                                        <div class="btn-group">
                                            <button type="button" class="btn btn-success">Success</button>
                                            <button type="button"
                                                class="btn btn-success dropdown-toggle dropdown-toggle-split"
                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false"></button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div><!-- /btn-group -->

                                        <div class="btn-group">
                                            <button type="button" class="btn btn-light">Light</button>
                                            <button type="button"
                                                class="btn btn-light dropdown-toggle dropdown-toggle-split"
                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false"></button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div><!-- /btn-group -->

                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info">Info</button>
                                            <button type="button"
                                                class="btn btn-info dropdown-toggle dropdown-toggle-split"
                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false"></button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div><!-- /btn-group -->

                                        <div class="btn-group">
                                            <button type="button" class="btn btn-secondary">Secondary</button>
                                            <button type="button"
                                                class="btn btn-secondary dropdown-toggle dropdown-toggle-split"
                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false"></button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div><!-- /btn-group -->

                                        <div class="btn-group">
                                            <button type="button" class="btn btn-warning">Warning</button>
                                            <button type="button"
                                                class="btn btn-warning dropdown-toggle dropdown-toggle-split"
                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false"></button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div><!-- /btn-group -->

                                        <div class="btn-group">
                                            <button type="button" class="btn btn-danger">Danger</button>
                                            <button type="button"
                                                class="btn btn-danger dropdown-toggle dropdown-toggle-split"
                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false"></button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div><!-- /btn-group -->

                                        <div class="btn-group">
                                            <button type="button" class="btn btn-dark">Dark</button>
                                            <button type="button"
                                                class="btn btn-dark dropdown-toggle dropdown-toggle-split"
                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false"></button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div><!-- /btn-group -->
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Dropdown Sizing</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <p class="text-muted">Use <code>btn-lg</code> class to create a large size dropdown
                                        button and <code>btn-sm</code> to create a small size dropdown button.</p>
                                    <div class="d-flex flex-wrap gap-3 align-items-center">
                                        <!-- Large button groups (default and split) -->
                                        <div class="btn-group">
                                            <button class="btn btn-primary btn-lg dropdown-toggle" type="button"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Large button
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>

                                        <div class="btn-group">
                                            <button class="btn btn-light btn-lg" type="button">
                                                Large split button
                                            </button>
                                            <button type="button"
                                                class="btn btn-lg btn-light dropdown-toggle dropdown-toggle-split"
                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false"></button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>

                                        <!-- Small button groups (default and split) -->
                                        <div class="btn-group">
                                            <button class="btn btn-primary btn-sm dropdown-toggle" type="button"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Small button
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>

                                        <div class="btn-group">
                                            <button class="btn btn-light btn-sm" type="button">
                                                Small split button
                                            </button>
                                            <button type="button"
                                                class="btn btn-sm btn-light dropdown-toggle dropdown-toggle-split"
                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false"></button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Dark Dropdowns</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <p class="text-muted">Use <code>dropdown-menu-dark</code> class onto an existing
                                        dropdown-menu to create dropdown items dark.</p>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button"
                                            id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                            Dropdown button
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-dark"
                                            aria-labelledby="dropdownMenuButton2">
                                            <li><a class="dropdown-item active" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                                        </ul>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Alignment options</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <p class="text-muted">Dropdown demo with various <code>dropdown alignment</code>
                                        options.</p>
                                    <div class="d-flex flex-wrap gap-3">
                                        <div class="btn-group">
                                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                                id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                Dropdown
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                                            </ul>
                                        </div>

                                        <div class="btn-group">
                                            <button type="button" class="btn btn-secondary dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Right-aligned menu
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                                            </ul>
                                        </div>

                                        <div class="btn-group">
                                            <button type="button" class="btn btn-secondary dropdown-toggle"
                                                data-bs-toggle="dropdown" data-bs-display="static"
                                                aria-expanded="false">
                                                Left-aligned, right-aligned lg
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-lg-end">
                                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                                            </ul>
                                        </div>

                                        <div class="btn-group">
                                            <button type="button" class="btn btn-secondary dropdown-toggle"
                                                data-bs-toggle="dropdown" data-bs-display="static"
                                                aria-expanded="false">
                                                Right-aligned, left-aligned lg
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
                                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                                            </ul>
                                        </div>

                                        <div class="btn-group dropstart">
                                            <button type="button" class="btn btn-secondary dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Dropstart
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                                            </ul>
                                        </div>

                                        <div class="btn-group dropend">
                                            <button type="button" class="btn btn-secondary dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Dropend
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                                            </ul>
                                        </div>

                                        <div class="btn-group dropup">
                                            <button type="button" class="btn btn-secondary dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Dropup
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Dropdown Options</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <p class="text-muted">Use <code>data-bs-offset</code> or
                                        <code>data-bs-reference</code> to change the position of the dropdown.
                                    </p>

                                    <div class="d-flex flex-wrap gap-3">
                                        <div class="dropdown me-1">
                                            <button type="button" class="btn btn-secondary dropdown-toggle"
                                                id="dropdownMenuOffset" data-bs-toggle="dropdown" aria-expanded="false"
                                                data-bs-offset="10,20">
                                                Offset
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            </ul>
                                        </div>

                                        <div class="btn-group">
                                            <button type="button" class="btn btn-secondary">Reference</button>
                                            <button type="button"
                                                class="btn btn-secondary dropdown-toggle dropdown-toggle-split"
                                                id="dropdownMenuReference" data-bs-toggle="dropdown"
                                                aria-expanded="false" data-bs-reference="parent">
                                                <span class="visually-hidden">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Auto Close Behavior</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <p class="text-muted">By default, the dropdown menu is closed when clicking inside
                                        or outside the dropdown menu. You can use the <code>autoClose</code> option to
                                        change this behavior of the dropdown.</p>
                                    <div class="d-flex flex-wrap gap-3">
                                        <div class="btn-group">
                                            <button class="btn btn-light dropdown-toggle" type="button"
                                                id="defaultDropdown" data-bs-toggle="dropdown" data-bs-auto-close="true"
                                                aria-expanded="false">
                                                Default dropdown
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="defaultDropdown">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Menu item</a>
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Menu item</a>
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Menu item</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="btn-group">
                                            <button class="btn btn-light dropdown-toggle" type="button"
                                                id="dropdownMenuClickableOutside" data-bs-toggle="dropdown"
                                                data-bs-auto-close="inside" aria-expanded="false">
                                                Clickable outside
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableOutside">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Menu item</a>
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Menu item</a>
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Menu item</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="btn-group">
                                            <button class="btn btn-light dropdown-toggle" type="button"
                                                id="dropdownMenuClickableInside" data-bs-toggle="dropdown"
                                                data-bs-auto-close="outside" aria-expanded="false">
                                                Clickable inside
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableInside">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Menu item</a>
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Menu item</a>
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Menu item</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="btn-group">
                                            <button class="btn btn-light dropdown-toggle" type="button"
                                                id="dropdownMenuClickable" data-bs-toggle="dropdown"
                                                data-bs-auto-close="false" aria-expanded="false">
                                                Manual close
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickable">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Menu item</a>
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Menu item</a>
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Menu item</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Dropdown Menu Item Color</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <p class="text-muted">Example of dropdown menu and dropdown item color.</p>
                                    <div class="row">
                                        <div class="col-xxl-3">
                                            <div>
                                                <h6 class="font-size-13 mb-3">Dropdown Menu Success link example
                                                </h6>
                                                <div class="clearfix">
                                                    <div class="dropdown-menu d-inline-block position-relative dropdownmenu-success"
                                                        style="z-index: 1;">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item active" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->

                                        <div class="col-lg-9">
                                            <div class="mt-lg-0 mt-3">
                                                <h6 class="font-size-13 mb-0">Dropdown Menu link Color example</h6>
                                                <div>
                                                    <div class="row">
                                                        <div class="col-lg-4 col-sm-6">
                                                            <div class="mt-3">
                                                                <p class="font-size-13 mb-2">Dropdown menu Primary link
                                                                </p>
                                                                <div class="btn-group">
                                                                    <button type="button"
                                                                        class="btn btn-primary dropdown-toggle"
                                                                        data-bs-toggle="dropdown"
                                                                        aria-expanded="false">Primary</button>
                                                                    <div class="dropdown-menu dropdownmenu-primary">
                                                                        <a class="dropdown-item" href="#">Action</a>
                                                                        <a class="dropdown-item" href="#">Another
                                                                            action</a>
                                                                        <a class="dropdown-item" href="#">Something else
                                                                            here</a>
                                                                        <div class="dropdown-divider"></div>
                                                                        <a class="dropdown-item" href="#">Separated
                                                                            link</a>
                                                                    </div>
                                                                </div><!-- btn-group -->
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-4 col-sm-6">
                                                            <div class="mt-3">
                                                                <p class="font-size-13 mb-2">Dropdown menu Secondary
                                                                    link</p>
                                                                <div class="btn-group">
                                                                    <button type="button"
                                                                        class="btn btn-secondary dropdown-toggle"
                                                                        data-bs-toggle="dropdown"
                                                                        aria-expanded="false">Secondary</button>
                                                                    <div class="dropdown-menu dropdownmenu-secondary">
                                                                        <a class="dropdown-item" href="#">Action</a>
                                                                        <a class="dropdown-item" href="#">Another
                                                                            action</a>
                                                                        <a class="dropdown-item" href="#">Something else
                                                                            here</a>
                                                                        <div class="dropdown-divider"></div>
                                                                        <a class="dropdown-item" href="#">Separated
                                                                            link</a>
                                                                    </div>
                                                                </div><!-- btn-group -->
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-4 col-sm-6">
                                                            <div class="mt-3">
                                                                <p class="font-size-13 mb-2">Dropdown menu Success link
                                                                </p>
                                                                <div class="btn-group">
                                                                    <button type="button"
                                                                        class="btn btn-success dropdown-toggle"
                                                                        data-bs-toggle="dropdown"
                                                                        aria-expanded="false">Success</button>
                                                                    <div class="dropdown-menu dropdownmenu-success">
                                                                        <a class="dropdown-item" href="#">Action</a>
                                                                        <a class="dropdown-item" href="#">Another
                                                                            action</a>
                                                                        <a class="dropdown-item" href="#">Something else
                                                                            here</a>
                                                                        <div class="dropdown-divider"></div>
                                                                        <a class="dropdown-item" href="#">Separated
                                                                            link</a>
                                                                    </div>
                                                                </div><!-- btn-group -->
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-4 col-sm-6">
                                                            <div class="mt-3">
                                                                <p class="font-size-13 mb-2">Dropdown menu Warning link
                                                                </p>
                                                                <div class="btn-group">
                                                                    <button type="button"
                                                                        class="btn btn-warning dropdown-toggle"
                                                                        data-bs-toggle="dropdown"
                                                                        aria-expanded="false">Warning</button>
                                                                    <div class="dropdown-menu dropdownmenu-warning">
                                                                        <a class="dropdown-item" href="#">Action</a>
                                                                        <a class="dropdown-item" href="#">Another
                                                                            action</a>
                                                                        <a class="dropdown-item" href="#">Something else
                                                                            here</a>
                                                                        <div class="dropdown-divider"></div>
                                                                        <a class="dropdown-item" href="#">Separated
                                                                            link</a>
                                                                    </div>
                                                                </div><!-- btn-group -->
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-4 col-sm-6">
                                                            <div class="mt-3">
                                                                <p class="font-size-13 mb-2">Dropdown menu Info link</p>
                                                                <div class="btn-group">
                                                                    <button type="button"
                                                                        class="btn btn-info dropdown-toggle"
                                                                        data-bs-toggle="dropdown"
                                                                        aria-expanded="false">Info</button>
                                                                    <div class="dropdown-menu dropdownmenu-info">
                                                                        <a class="dropdown-item" href="#">Action</a>
                                                                        <a class="dropdown-item" href="#">Another
                                                                            action</a>
                                                                        <a class="dropdown-item" href="#">Something else
                                                                            here</a>
                                                                        <div class="dropdown-divider"></div>
                                                                        <a class="dropdown-item" href="#">Separated
                                                                            link</a>
                                                                    </div>
                                                                </div><!-- btn-group -->
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-4 col-sm-6">
                                                            <div class="mt-3">
                                                                <p class="font-size-13 mb-2">Dropdown menu Danger link
                                                                </p>
                                                                <div class="btn-group">
                                                                    <button type="button"
                                                                        class="btn btn-danger dropdown-toggle"
                                                                        data-bs-toggle="dropdown"
                                                                        aria-expanded="false">Danger</button>
                                                                    <div class="dropdown-menu dropdownmenu-danger">
                                                                        <a class="dropdown-item" href="#">Action</a>
                                                                        <a class="dropdown-item" href="#">Another
                                                                            action</a>
                                                                        <a class="dropdown-item" href="#">Something else
                                                                            here</a>
                                                                        <div class="dropdown-divider"></div>
                                                                        <a class="dropdown-item" href="#">Separated
                                                                            link</a>
                                                                    </div>
                                                                </div><!-- btn-group -->
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->

                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Menu Content</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <p class="text-muted">Example of dropdown menu containing
                                        <code>Headers, Text and Forms</code> content.
                                    </p>
                                    <div class="d-flex flex-wrap gap-2">
                                        <!-- Header -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Header
                                            </button>
                                            <div class="dropdown-menu">
                                                <div class="dropdown-header noti-title">
                                                    <h5 class="font-size-13 text-muted text-truncate mb-0">Welcome
                                                        Jessie!</h5>
                                                </div>
                                                <!-- item-->
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>

                                        <!-- Text -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-success dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Text
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-md p-3">
                                                <p>
                                                    Some example text that's free-flowing within the dropdown menu.
                                                </p>
                                                <p class="mb-0">
                                                    And this is more example text.
                                                </p>
                                            </div>
                                        </div>

                                        <!-- Forms -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-light dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Forms
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-md p-4">
                                                <form>
                                                    <div class="mb-2">
                                                        <label class="form-label" for="exampleDropdownFormEmail">Email
                                                            address</label>
                                                        <input type="email" class="form-control"
                                                            id="exampleDropdownFormEmail"
                                                            placeholder="email@example.com">
                                                    </div>
                                                    <div class="mb-2">
                                                        <label class="form-label"
                                                            for="exampleDropdownFormPassword">Password</label>
                                                        <input type="password" class="form-control"
                                                            id="exampleDropdownFormPassword" placeholder="Password">
                                                    </div>
                                                    <div class="mb-2">
                                                        <div class="form-check custom-checkbox">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="rememberdropdownCheck">
                                                            <label class="form-check-label"
                                                                for="rememberdropdownCheck">Remember me</label>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Sign in</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

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

    <script src="assets/js/app.js"></script>

</body>

</html>