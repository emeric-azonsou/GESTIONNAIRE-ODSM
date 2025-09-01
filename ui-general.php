<?php include 'partials/main.php'; ?>

<head>
<?php includeFileWithVariables('partials/title-meta.php', array('title' => 'General')); ?>


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
                <?php includeFileWithVariables('partials/page-title.php', array('pagetitle' => 'Base UI', 'title' => 'General')); ?>
                 

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Popovers</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <p class="text-muted">Popovers example are available with follwing options ,
                                        Directions are mirrored when using Bootstrap in RTL.</p>
                                    <div class="hstack flex-wrap gap-2">
                                        <button type="button" class="btn btn-light tooltip-primary"
                                            data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top"
                                            title="Top Popover"
                                            data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                            Popover on top
                                        </button>
                                        <button type="button" class="btn btn-light" data-bs-container="body"
                                            data-bs-toggle="popover" data-bs-placement="right" title="Right Popover"
                                            data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                            Popover on right
                                        </button>
                                        <button type="button" class="btn btn-light" data-bs-container="body"
                                            data-bs-toggle="popover" data-bs-placement="bottom" title="Bottom Popover"
                                            data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                            Popover on bottom
                                        </button>
                                        <button type="button" class="btn btn-light" data-bs-container="body"
                                            data-bs-toggle="popover" data-bs-placement="left" title="Left Popover"
                                            data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                            Popover on left
                                        </button>
                                        <button tabindex="0" class="btn  btn-success" data-bs-toggle="popover"
                                            data-bs-trigger="focus" title="Dismissible popover"
                                            data-bs-content="And here's some amazing content. It's very engaging. Right?">Dismissible
                                            popover</button>
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
                                    <h4 class="card-title mb-0">Tooltips</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <p class="text-muted">Tooltip example are available with follwing options,
                                        Directions are mirrored when using Bootstrap in RTL.</p>
                                    <div class="hstack flex-wrap gap-2">
                                        <button type="button" class="btn btn-light" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Tooltip on top">
                                            Tooltip on top
                                        </button>
                                        <button type="button" class="btn btn-light" data-bs-toggle="tooltip"
                                            data-bs-placement="right" title="Tooltip on right">
                                            Tooltip on right
                                        </button>
                                        <button type="button" class="btn btn-light" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="Tooltip on bottom">
                                            Tooltip on bottom
                                        </button>
                                        <button type="button" class="btn btn-light" data-bs-toggle="tooltip"
                                            data-bs-placement="left" title="Tooltip on left">
                                            Tooltip on left
                                        </button>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="tooltip"
                                            data-bs-html="true" title="<em>Tooltip</em> <u>with</u> <b>HTML</b>">
                                            Tooltip with HTML
                                        </button>
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
                                    <h4 class="card-title mb-0">Tooltips Custom Colors</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <p class="text-muted">Use the <code>data-bs-custom-class="*-tooltip" </code>
                                        attributes to make a custom tooltip colors.</p>
                                    <div class="hstack flex-wrap gap-2">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="tooltip"
                                            data-bs-custom-class="primary-tooltip" data-bs-placement="top"
                                            title="Tooltip primary">
                                            Primary Tooltip
                                        </button>
                                        <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip"
                                            data-bs-custom-class="secondary-tooltip" data-bs-placement="top"
                                            title="Tooltip secondary">
                                            Secondary Tooltip
                                        </button>
                                        <button type="button" class="btn btn-success" data-bs-toggle="tooltip"
                                            data-bs-custom-class="success-tooltip" data-bs-placement="top"
                                            title="Tooltip success">
                                            Success Tooltip
                                        </button>
                                        <button type="button" class="btn btn-danger" data-bs-toggle="tooltip"
                                            data-bs-custom-class="danger-tooltip" data-bs-placement="top"
                                            title="Tooltip danger">
                                            Danger Tooltip
                                        </button>
                                        <button type="button" class="btn btn-info" data-bs-toggle="tooltip"
                                            data-bs-custom-class="info-tooltip" data-bs-placement="top"
                                            title="Tooltip info">
                                            Info Tooltip
                                        </button>
                                        <button type="button" class="btn btn-warning" data-bs-toggle="tooltip"
                                            data-bs-custom-class="warning-tooltip" data-bs-placement="top"
                                            title="Tooltip warning">
                                            Warning Tooltip
                                        </button>
                                        <button type="button" class="btn btn-dark" data-bs-toggle="tooltip"
                                            data-bs-custom-class="dark-tooltip" data-bs-placement="top"
                                            title="Tooltip dark">
                                            Dark Tooltip
                                        </button>
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
                                    <h4 class="card-title mb-0">Breadcrumb</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <p class="text-muted">Indicate the current page’s location within a navigational
                                        hierarchy</p>
                                    <div>
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb p-3 py-2 bg-light">
                                                <li class="breadcrumb-item active" aria-current="page">Home</li>
                                            </ol>
                                        </nav>

                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb p-3 py-2 bg-light">
                                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Library</li>
                                            </ol>
                                        </nav>

                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb p-3 py-2 bg-light">
                                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                                <li class="breadcrumb-item"><a href="#">Base UI</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">General</li>
                                            </ol>
                                        </nav>

                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb p-3 py-2 bg-light mb-0">
                                                <li class="breadcrumb-item"><a href="#"><i
                                                            class="ri-home-5-fill"></i></a></li>
                                                <li class="breadcrumb-item"><a href="#">Base UI</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">General</li>
                                            </ol>
                                        </nav>
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
                                    <h4 class="card-title mb-0">Pagination</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <h5 class="fs-base">Default Pagination</h5>
                                                <p class="text-muted">Use <code>pagination</code> class to ul element to
                                                    indicate a series of related content exists across multiple pages.
                                                </p>

                                                <nav aria-label="Page navigation example">
                                                    <ul class="pagination">
                                                        <li class="page-item"><a class="page-link" href="#">Previous</a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">Next</a>
                                                        </li>
                                                    </ul>
                                                </nav>

                                                <nav aria-label="Page navigation example">
                                                    <ul class="pagination">
                                                        <li class="page-item">
                                                            <a class="page-link" href="#" aria-label="Previous">
                                                                ← &nbsp; Prev
                                                            </a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                        <li class="page-item">
                                                            <a class="page-link" href="#" aria-label="Next">
                                                                Next &nbsp; →
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </nav>

                                            </div>
                                            <!-- end col -->

                                            <div class="col-lg-6">
                                                <div class="mt-4 mt-lg-0">
                                                    <h5 class="fs-base">Disabled and Active states</h5>
                                                    <p class="text-muted">Use <code>disabled</code> class to links that
                                                        appear un-clickable and <code>active</code> class to indicate
                                                        the current page.</p>

                                                    <!-- Pagination Disabled & Active -->
                                                    <nav aria-label="...">
                                                        <ul class="pagination">
                                                            <li class="page-item disabled">
                                                                <a class="page-link" href="#" tabindex="-1">← &nbsp;
                                                                    Prev</a>
                                                            </li>
                                                            <li class="page-item"><a class="page-link" href="#">1</a>
                                                            </li>
                                                            <li class="page-item active">
                                                                <a class="page-link" href="#">2 <span
                                                                        class="visually-hidden">(current)</span></a>
                                                            </li>
                                                            <li class="page-item"><a class="page-link" href="#">3</a>
                                                            </li>
                                                            <li class="page-item">
                                                                <a class="page-link" href="#">Next &nbsp; →</a>
                                                            </li>
                                                        </ul>
                                                    </nav>

                                                    <nav aria-label="...">
                                                        <ul class="pagination">
                                                            <li class="page-item disabled">
                                                                <span class="page-link"><i
                                                                    class="ti ti-chevron-left"></i></span>
                                                            </li>
                                                            <li class="page-item"><a class="page-link" href="#">1</a>
                                                            </li>
                                                            <li class="page-item active">
                                                                <span class="page-link">
                                                                    2
                                                                    <span class="visually-hidden">(current)</span>
                                                                </span>
                                                            </li>
                                                            <li class="page-item"><a class="page-link" href="#">3</a>
                                                            </li>
                                                            <li class="page-item">
                                                                <a class="page-link" href="#"><i
                                                                        class="ti ti-chevron-right"></i></a>
                                                            </li>
                                                        </ul>
                                                    </nav>
                                                </div>
                                            </div>
                                            <!-- end row -->
                                        </div>
                                        <!-- end row -->
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mt-4">
                                                    <h5 class="fs-base">Sizing</h5>
                                                    <p class="text-muted">Use <code>pagination-lg</code> or
                                                        <code>pagination-sm</code> to set different pagination sizes.
                                                    </p>
                                                    <!-- Pagination Large -->
                                                    <nav aria-label="...">
                                                        <ul class="pagination pagination-lg">
                                                            <li class="page-item disabled">
                                                                <a class="page-link" href="#" tabindex="-1">← &nbsp;
                                                                    Prev</a>
                                                            </li>
                                                            <li class="page-item"><a class="page-link" href="#">1</a>
                                                            </li>
                                                            <li class="page-item"><a class="page-link" href="#">2</a>
                                                            </li>
                                                            <li class="page-item"><a class="page-link" href="#">3</a>
                                                            </li>
                                                            <li class="page-item">
                                                                <a class="page-link" href="#">Next &nbsp; →</a>
                                                            </li>
                                                        </ul>
                                                    </nav>

                                                    <!-- Pagination Small -->
                                                    <nav aria-label="...">
                                                        <ul class="pagination pagination-sm">
                                                            <li class="page-item disabled">
                                                                <a class="page-link" href="#" tabindex="-1">← &nbsp;
                                                                    Prev</a>
                                                            </li>
                                                            <li class="page-item"><a class="page-link" href="#">1</a>
                                                            </li>
                                                            <li class="page-item"><a class="page-link" href="#">2</a>
                                                            </li>
                                                            <li class="page-item"><a class="page-link" href="#">3</a>
                                                            </li>
                                                            <li class="page-item">
                                                                <a class="page-link" href="#">Next &nbsp; →</a>
                                                            </li>
                                                        </ul>
                                                    </nav>
                                                </div>

                                            </div>

                                            <div class="col-lg-6">
                                                <div class="mt-4">
                                                    <h5 class="fs-base">Alignment</h5>

                                                    <p class="text-muted">Use <code>justify-content-start</code>,
                                                        <code>justify-content-start</code>, or
                                                        <code>justify-content-start</code>, class to pagination class to
                                                        change the alignment of pagination respectively.
                                                    </p>
                                                    <!-- Pagination Alignment -->

                                                    <!-- Center Alignment -->
                                                    <nav aria-label="Page navigation example">
                                                        <ul class="pagination justify-content-center">
                                                            <li class="page-item disabled">
                                                                <a class="page-link" href="#" tabindex="-1">← &nbsp;
                                                                    Prev</a>
                                                            </li>
                                                            <li class="page-item"><a class="page-link" href="#">1</a>
                                                            </li>
                                                            <li class="page-item"><a class="page-link" href="#">2</a>
                                                            </li>
                                                            <li class="page-item"><a class="page-link" href="#">3</a>
                                                            </li>
                                                            <li class="page-item">
                                                                <a class="page-link" href="#">Next &nbsp; →</a>
                                                            </li>
                                                        </ul>
                                                    </nav>

                                                    <!-- Right Alignment -->
                                                    <nav aria-label="Page navigation example">
                                                        <ul class="pagination justify-content-end">
                                                            <li class="page-item disabled">
                                                                <a class="page-link" href="#" tabindex="-1">← &nbsp;
                                                                    Prev</a>
                                                            </li>
                                                            <li class="page-item"><a class="page-link" href="#">1</a>
                                                            </li>
                                                            <li class="page-item"><a class="page-link" href="#">2</a>
                                                            </li>
                                                            <li class="page-item"><a class="page-link" href="#">3</a>
                                                            </li>
                                                            <li class="page-item">
                                                                <a class="page-link" href="#">Next &nbsp; →</a>
                                                            </li>
                                                        </ul>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end row -->
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mt-4">
                                                    <h5 class="fs-base">Custom Separated Pagination</h5>
                                                    <p class="text-muted">Use <code>pagination-separated</code> class to
                                                        pagination class to set custom separated pagination.</p>
                                                    <!-- Custom Separated Pagination Large -->
                                                    <ul class="pagination pagination-lg pagination-separated">
                                                        <li class="page-item disabled">
                                                            <a href="#" class="page-link">←</a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a href="#" class="page-link">1</a>
                                                        </li>
                                                        <li class="page-item active">
                                                            <a href="#" class="page-link">2</a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a href="#" class="page-link">3</a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a href="#" class="page-link">4</a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a href="#" class="page-link">5</a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a href="#" class="page-link">→</a>
                                                        </li>
                                                    </ul>

                                                    <!-- Pagination rounded -->
                                                    <ul class="pagination pagination-separated">
                                                        <li class="page-item disabled">
                                                            <a href="#" class="page-link">←</a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a href="#" class="page-link">1</a>
                                                        </li>
                                                        <li class="page-item active">
                                                            <a href="#" class="page-link">2</a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a href="#" class="page-link">3</a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a href="#" class="page-link">4</a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a href="#" class="page-link">5</a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a href="#" class="page-link">→</a>
                                                        </li>
                                                    </ul>

                                                    <!-- Custom Separated Pagination Large -->
                                                    <ul class="pagination pagination-sm pagination-separated">
                                                        <li class="page-item disabled">
                                                            <a href="#" class="page-link">←</a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a href="#" class="page-link">1</a>
                                                        </li>
                                                        <li class="page-item active">
                                                            <a href="#" class="page-link">2</a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a href="#" class="page-link">3</a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a href="#" class="page-link">4</a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a href="#" class="page-link">5</a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a href="#" class="page-link">→</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="mt-4">
                                                    <h5 class="fs-base">Custom Rounded Pagination</h5>
                                                    <p class="text-muted">Use <code>pagination-rounded</code> class to
                                                        pagination class to set custom rounded pagination.</p>
                                                    <!-- Pagination rounded -->
                                                    <ul class="pagination pagination-lg pagination-rounded">
                                                        <li class="page-item disabled">
                                                            <a href="#" class="page-link">←</a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a href="#" class="page-link">1</a>
                                                        </li>
                                                        <li class="page-item active">
                                                            <a href="#" class="page-link">2</a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a href="#" class="page-link">3</a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a href="#" class="page-link">4</a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a href="#" class="page-link">5</a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a href="#" class="page-link">→</a>
                                                        </li>
                                                    </ul>

                                                    <!-- Pagination rounded -->
                                                    <ul class="pagination pagination-rounded">
                                                        <li class="page-item disabled">
                                                            <a href="#" class="page-link">←</a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a href="#" class="page-link">1</a>
                                                        </li>
                                                        <li class="page-item active">
                                                            <a href="#" class="page-link">2</a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a href="#" class="page-link">3</a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a href="#" class="page-link">4</a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a href="#" class="page-link">5</a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a href="#" class="page-link">→</a>
                                                        </li>
                                                    </ul>

                                                    <!-- Pagination rounded -->
                                                    <ul class="pagination pagination-sm pagination-rounded">
                                                        <li class="page-item disabled">
                                                            <a href="#" class="page-link">←</a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a href="#" class="page-link">1</a>
                                                        </li>
                                                        <li class="page-item active">
                                                            <a href="#" class="page-link">2</a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a href="#" class="page-link">3</a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a href="#" class="page-link">4</a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a href="#" class="page-link">5</a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a href="#" class="page-link">→</a>
                                                        </li>
                                                    </ul>
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
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Spinners</h4>
                                </div><!-- end card header -->

                                <div class="card-body">

                                    <div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div>
                                                    <h5 class="fs-base">Border spinner</h5>
                                                    <p class="text-muted">Use <code>spinner-border</code> class for a
                                                        lightweight loading indicator.</p>
                                                    <div class="d-flex flex-wrap gap-3 mb-2">
                                                        <!-- Border spinner -->
                                                        <div class="spinner-border text-primary" role="status">
                                                            <span class="visually-hidden">Loading...</span>
                                                        </div>
                                                        <div class="spinner-border text-secondary" role="status">
                                                            <span class="visually-hidden">Loading...</span>
                                                        </div>
                                                        <div class="spinner-border text-success" role="status">
                                                            <span class="visually-hidden">Loading...</span>
                                                        </div>
                                                        <div class="spinner-border text-info" role="status">
                                                            <span class="visually-hidden">Loading...</span>
                                                        </div>
                                                        <div class="spinner-border text-warning" role="status">
                                                            <span class="visually-hidden">Loading...</span>
                                                        </div>
                                                        <div class="spinner-border text-danger" role="status">
                                                            <span class="visually-hidden">Loading...</span>
                                                        </div>
                                                        <div class="spinner-border text-body" role="status">
                                                            <span class="visually-hidden">Loading...</span>
                                                        </div>
                                                        <div class="spinner-border text-light" role="status">
                                                            <span class="visually-hidden">Loading...</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col -->

                                            <div class="col-lg-6">
                                                <div>
                                                    <h5 class="fs-base">Growing spinner</h5>
                                                    <p class="text-muted">Use <code>spinner-grow</code> class for a
                                                        lightweight spinner with growing effect.</p>
                                                    <div class="d-flex flex-wrap gap-3 mb-2">
                                                        <!-- Growing spinner -->
                                                        <div class="spinner-grow text-primary" role="status">
                                                            <span class="visually-hidden">Loading...</span>
                                                        </div>
                                                        <div class="spinner-grow text-secondary" role="status">
                                                            <span class="visually-hidden">Loading...</span>
                                                        </div>
                                                        <div class="spinner-grow text-success" role="status">
                                                            <span class="visually-hidden">Loading...</span>
                                                        </div>
                                                        <div class="spinner-grow text-info" role="status">
                                                            <span class="visually-hidden">Loading...</span>
                                                        </div>
                                                        <div class="spinner-grow text-warning" role="status">
                                                            <span class="visually-hidden">Loading...</span>
                                                        </div>
                                                        <div class="spinner-grow text-danger" role="status">
                                                            <span class="visually-hidden">Loading...</span>
                                                        </div>
                                                        <div class="spinner-grow text-body" role="status">
                                                            <span class="visually-hidden">Loading...</span>
                                                        </div>
                                                        <div class="spinner-grow text-light" role="status">
                                                            <span class="visually-hidden">Loading...</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col -->
                                        </div>
                                        <!-- end row -->
                                    </div>

                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Spinners Size</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <p class="text-muted">Add <code>.spinner-border-sm</code> and
                                        <code>.spinner-grow-sm</code> to make a smaller spinner that can quickly be used
                                        within other components.
                                    </p>

                                    <div class="d-flex gap-4">
                                        <div class="spinner-border spinner-border-sm" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                        <div class="spinner-grow spinner-grow-sm" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>

                                        <div class="spinner-border" style="width: 3rem; height: 3rem;" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                        <div class="spinner-grow" style="width: 3rem; height: 3rem;" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Spinners Buttons</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <p class="text-muted">Use spinners within buttons to indicate an action is currently
                                        processing or taking place. You may also swap the text out of the spinner
                                        element and utilize button text as needed.</p>

                                    <div class="d-flex gap-2">
                                        <button class="btn btn-primary" type="button" disabled>
                                            <span class="spinner-border spinner-border-sm" role="status"
                                                aria-hidden="true"></span>
                                            <span class="visually-hidden">Loading...</span>
                                        </button>
                                        <button class="btn btn-primary" type="button" disabled>
                                            <span class="spinner-border spinner-border-sm" role="status"
                                                aria-hidden="true"></span> Loading...
                                        </button>
                                        <button class="btn btn-primary" type="button" disabled>
                                            <span class="spinner-grow spinner-grow-sm" role="status"
                                                aria-hidden="true"></span>
                                            <span class="visually-hidden">Loading...</span>
                                        </button>
                                        <button class="btn btn-primary" type="button" disabled>
                                            <span class="spinner-grow spinner-grow-sm" role="status"
                                                aria-hidden="true"></span> Loading...
                                        </button>
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