<?php include 'partials/main.php'; ?>

<head>
<?php includeFileWithVariables('partials/title-meta.php', array('title' => 'Carousel')); ?>


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
                <?php includeFileWithVariables('partials/page-title.php', array('pagetitle' => 'Base UI', 'title' => 'Carousel')); ?>
         

                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Slides Only</h4>
                                </div><!-- end card header -->
                                <div class="card-body">
                                    <p class="text-muted">Use<code> slide</code> class to set carousel with slides. Note
                                        the presence of the <code>d-block</code> and <code>w-100</code> class on
                                        carousel images to prevent browser default image alignment.</p>
                                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel"
                                        data-bs-interval="3000">
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item carousel-item-next carousel-item-start">
                                                <img class="d-block img-fluid mx-auto"
                                                    src="assets/images/small/img-1.jpg" alt="First slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block img-fluid mx-auto"
                                                    src="assets/images/small/img-2.jpg" alt="Second slide">
                                            </div>
                                            <div class="carousel-item active carousel-item-start">
                                                <img class="d-block img-fluid mx-auto"
                                                    src="assets/images/small/img-3.jpg" alt="Third slide">
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>

                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">With Controls</h4>
                                </div><!-- end card header -->
                                <div class="card-body">
                                    <p class="text-muted">Use <code>carousel-control-prev</code> and
                                        <code>carousel-control-next</code> class with &lt;button&gt; or &lt;a&gt; tag
                                        element to show carousel with control navigation.
                                    </p>
                                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">
                                                <img class="d-block img-fluid mx-auto"
                                                    src="assets/images/small/img-4.jpg" alt="First slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block img-fluid mx-auto"
                                                    src="assets/images/small/img-5.jpg" alt="Second slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block img-fluid mx-auto"
                                                    src="assets/images/small/img-6.jpg" alt="Third slide">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                            data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                            data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </a>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">with Indicators</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <p class="text-muted">Use <code>carousel-indicators</code> class with &lt;ol&gt;
                                        element to show carousel with indicators.</p>

                                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <button data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"></button>
                                            <button data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></button>
                                            <button data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                                class="active" aria-current="true"></button>
                                        </ol>
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item">
                                                <img class="d-block img-fluid mx-auto"
                                                    src="assets/images/small/img-3.jpg" alt="First slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block img-fluid mx-auto"
                                                    src="assets/images/small/img-2.jpg" alt="Second slide">
                                            </div>
                                            <div class="carousel-item active">
                                                <img class="d-block img-fluid mx-auto"
                                                    src="assets/images/small/img-1.jpg" alt="Third slide">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                            data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                            data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </a>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!--end col-->

                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">with Captions</h4>
                                </div><!-- end card header -->
                                <div class="card-body">
                                    <p class="text-muted">Use <code>carousel-caption</code> class to add captions to the
                                        carousel.</p>
                                    <div id="carouselExampleCaption" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item">
                                                <img src="assets/images/small/img-7.jpg" alt=""
                                                    class="d-block img-fluid mx-auto">
                                                <div class="carousel-caption text-white-50">
                                                    <h5 class="text-white">Sunrise above a beach</h5>
                                                    <p>You've probably heard that opposites attract. The same is true
                                                        for fonts. Don't be afraid to combine font styles that are
                                                        different but complementary.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item active">
                                                <img src="assets/images/small/img-2.jpg" alt=""
                                                    class="d-block img-fluid mx-auto">
                                                <div class="carousel-caption text-white-50">
                                                    <h5 class="text-white">Working from home little spot</h5>
                                                    <p>Consistency piques people’s interest is that it has become more
                                                        and more popular over the years, which is excellent.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="assets/images/small/img-9.jpg" alt=""
                                                    class="d-block img-fluid mx-auto">
                                                <div class="carousel-caption text-white-50">
                                                    <h5 class="text-white">Dramatic clouds at the Golden Gate Bridge
                                                    </h5>
                                                    <p>Increase or decrease the letter spacing depending on the
                                                        situation and try, try again until it looks right, and each
                                                        letter.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleCaption" role="button"
                                            data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleCaption" role="button"
                                            data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </a>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Crossfade Animation</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <p class="text-muted">Use <code>carousel-fade</code> class to the carousel to
                                        animate slides with a fade transition instead of a slide.</p>
                                    <div id="carouselExampleFade" class="carousel slide carousel-fade"
                                        data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <button data-bs-target="#carouselExampleFade" data-bs-slide-to="0"
                                                class="active"></button>
                                            <button data-bs-target="#carouselExampleFade" data-bs-slide-to="1"></button>
                                            <button data-bs-target="#carouselExampleFade" data-bs-slide-to="2"></button>
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block img-fluid mx-auto"
                                                    src="assets/images/small/img-1.jpg" alt="First slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block img-fluid mx-auto"
                                                    src="assets/images/small/img-2.jpg" alt="Second slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block img-fluid mx-auto"
                                                    src="assets/images/small/img-3.jpg" alt="Third slide">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleFade" role="button"
                                            data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleFade" role="button"
                                            data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </a>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!--end col-->

                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Individual carousel-item Interval</h4>
                                </div><!-- end card header -->
                                <div class="card-body">
                                    <p class="text-muted">Use <code>data-bs-interval=" "</code> to a carousel-item to
                                        change the amount of time to delay between automatically cycling to the next
                                        item.</p>
                                    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active" data-bs-interval="10000">
                                                <img src="assets//images/small/img-12.jpg" class="d-block w-100"
                                                    alt="First slide">
                                            </div>
                                            <div class="carousel-item" data-bs-interval="2000">
                                                <img src="assets/images/small/img-11.jpg" class="d-block w-100"
                                                    alt="two slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="assets/images/small/img-10.jpg" class="d-block w-100"
                                                    alt="There slide">
                                            </div>
                                        </div>
                                        <button class="carousel-control-prev" type="button"
                                            data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button"
                                            data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Disable Touch Swiping</h4>
                                </div><!-- end card header -->
                                <div class="card-body">
                                    <p class="text-muted">Carousels support swiping left/right on touchscreen devices to
                                        move between slides.
                                        This can be disabled using the <code>data-bs-touch</code> attribute. The example
                                        below also does not include the
                                        <code>data-bs-ride attribute</code> and has
                                        <code>data-bs-interval="false"</code> so it doesn’t autoplay.
                                    </p>
                                    <div id="carouselExampleControlsNoTouching" class="carousel slide"
                                        data-bs-touch="false" data-bs-interval="false">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="assets/images/small/img-9.jpg" class="d-block w-100"
                                                    alt="One Slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="assets/images/small/img-8.jpg" class="d-block w-100"
                                                    alt="Two Slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="assets/images/small/img-7.jpg" class="d-block w-100"
                                                    alt="Three Slide">
                                            </div>
                                        </div>
                                        <button class="carousel-control-prev" type="button"
                                            data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button"
                                            data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!--end col-->

                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Dark Variant</h4>
                                </div><!-- end card header -->
                                <div class="card-body">
                                    <p class="text-muted">Use <code>carousel-dark</code> class to the carousel for
                                        darker controls, indicators, and captions.</p>
                                    <div id="carouselExampleDark" class="carousel carousel-dark slide"
                                        data-bs-ride="carousel">
                                        <div class="carousel-indicators">
                                            <button type="button" data-bs-target="#carouselExampleDark"
                                                data-bs-slide-to="0" class="active" aria-current="true"
                                                aria-label="Slide 1"></button>
                                            <button type="button" data-bs-target="#carouselExampleDark"
                                                data-bs-slide-to="1" aria-label="Slide 2"></button>
                                            <button type="button" data-bs-target="#carouselExampleDark"
                                                data-bs-slide-to="2" aria-label="Slide 3"></button>
                                        </div>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active" data-bs-interval="10000">
                                                <img src="assets/images/small/img-4.jpg" class="d-block w-100"
                                                    alt="One Slide">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5>Drawing a sketch</h5>
                                                    <p>Too much or too little spacing, as in the example below, can make
                                                        things unpleasant for the reader.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item" data-bs-interval="2000">
                                                <img src="assets/images/small/img-5.jpg" class="d-block w-100"
                                                    alt="Two Slide">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5>Blue clock on a pastel background</h5>
                                                    <p>In some designs, you might adjust your tracking to create a
                                                        certain artistic effect asked them what graphic design tips they
                                                        live.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="assets/images/small/img-6.jpg" class="d-block w-100"
                                                    alt="Three Slide">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5>Working at a coffee shop</h5>
                                                    <p>A wonderful serenity has taken possession of my entire soul, like
                                                        these sweet mornings of spring.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="carousel-control-prev" type="button"
                                            data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button"
                                            data-bs-target="#carouselExampleDark" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

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