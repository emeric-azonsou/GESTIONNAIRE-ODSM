<?php include 'partials/main.php'; ?>

<head>
    <?php
    $title = 'Calendar';
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

                    <div class="calendar-wrapper d-lg-flex gap-5">

                        <div class="card mb-4 mt-2 calendar-event-card">
                            <div class="card-body">
                                <button class="btn btn-primary w-100 mb-4" id="btn-new-event"><i class="ti ti-plus me-1"></i> Create New Event</button>
                                <div class="mb-4">
                                    <div id="external-events">
                                        <p class="text-muted">Drag and drop your event or click in the calendar</p>
                                        <div class="vstack gap-2">
                                            <div class="external-event fc-event bg-success-subtle text-success text-center" data-class="bg-success-subtle">
                                                <i class="ti ti-circle-dot-filled font-size-11 text-success me-2"></i>New Event Planning
                                            </div>
                                            <div class="external-event fc-event bg-info-subtle text-info text-center" data-class="bg-info-subtle">
                                                <i class="ti ti-circle-dot-filled font-size-11 text-info me-2"></i>Meeting
                                            </div>
                                            <div class="external-event fc-event bg-warning-subtle text-warning text-center" data-class="bg-warning-subtle">
                                                <i class="ti ti-circle-dot-filled font-size-11 text-warning me-2"></i>Generating Reports
                                            </div>
                                            <div class="external-event fc-event bg-danger-subtle text-danger text-center" data-class="bg-danger-subtle">
                                                <i class="ti ti-circle-dot-filled font-size-11 text-danger me-2"></i>Create New theme
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <h5 class="mb-2 fs-lg">Upcoming Event</h5>
                                    <p class="text-muted">Don't miss scheduled events</p>
                                    <div class="pe-2 me-n1 mb-3" data-simplebar style="height: 250px">
                                        <div class="card mb-3 border-0 border-bottom">
                                            <div class="card-body p-1 pb-3">
                                                <div class="row align-items-center">
                                                    <div class="col-2">
                                                        <div class="fw-bolder"><span class="fw-medium">16 Apr </span></div>
                                                    </div>
                                                    <div class="col-10 border-start border-4 border-info-subtle ps-3 rounded">
                                                        <h6 class="card-title fs-md">Meeting with a client</h6>
                                                        <p class="text-muted text-truncate mb-0 text-truncate">Tell how to boost website traffic</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end card-->
                                        <div class="card mb-3 border-0 border-bottom">
                                            <div class="card-body p-1 pb-3">
                                                <div class="row align-items-center">
                                                    <div class="col-2">
                                                        <div class="fw-bolder"><span class="fw-medium">16 Apr </span></div>
                                                    </div>
                                                    <div class="col-10 border-start border-4 border-danger-subtle ps-3 rounded">
                                                        <h6 class="card-title fs-md">Visit online course</h6>
                                                        <p class="text-muted text-truncate mb-0">Check updates about design course</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end card-->
                                        <div class="card mb-3 border-0 border-bottom">
                                            <div class="card-body p-1 pb-3">
                                                <div class="row align-items-center">
                                                    <div class="col-2">
                                                        <div class="fw-bolder"><span class="fw-medium">16 Apr </span></div>
                                                    </div>
                                                    <div class="col-10 border-start border-4 border-warning-subtle ps-3 rounded">
                                                        <h6 class="card-title fs-md">Design new UI and check sales</h6>
                                                        <p class="text-muted text-truncate mb-0">A first stage of project management</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end card-->
                                        <div class="card mb-3 border-0 border-bottom">
                                            <div class="card-body p-1 pb-3">
                                                <div class="row align-items-center">
                                                    <div class="col-2">
                                                        <div class="fw-bolder"><span class="fw-medium">16 Apr </span></div>
                                                    </div>
                                                    <div class="col-10 border-start border-4 border-primary-subtle ps-3 rounded">
                                                        <h6 class="card-title fs-md"> meeting with a client</h6>
                                                        <p class="text-muted text-truncate mb-0">Tell how to boost website traffic</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end card-->
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <h5 class="mb-3 fs-lg">Recent Activity</h5>
                                    <div class="px-3 mx-n3 mb-3" data-simplebar style="height: 220px">
                                        <div class="acitivity-timeline acitivity-main">
                                            <div class="acitivity-item d-flex">
                                                <div class="flex-shrink-0">
                                                    <img src="assets/images/users/avatar-2.jpg" alt="" class="avatar-xs rounded-circle acitivity-avatar">
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h6 class="mb-1 lh-base">Purchased by James Price</h6>
                                                    <p class="text-muted mb-2">Product noise evolve smartwatch </p>
                                                    <small class="mb-0 text-muted">05:57 AM Today</small>
                                                </div>
                                            </div>
                                            <div class="acitivity-item py-3 d-flex">
                                                <div class="flex-shrink-0">
                                                    <img src="assets/images/users/avatar-1.jpg" alt="" class="avatar-xs rounded-circle acitivity-avatar">
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h6 class="mb-1 lh-base">Natasha Carey have liked the products</h6>
                                                    <p class="text-muted mb-2">Allow users to like products in your WooCommerce store.</p>
                                                    <small class="mb-0 text-muted">25 Dec, 2022</small>
                                                </div>
                                            </div>
                                            <div class="acitivity-item py-3 d-flex">
                                                <div class="flex-shrink-0">
                                                    <img src="assets/images/users/avatar-3.jpg" alt="" class="avatar-xs rounded-circle acitivity-avatar">
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h6 class="mb-1 lh-base">Today offers by <a href="javascript:void(0);" class="link-secondary">Digitate Galaxy</a></h6>
                                                    <p class="text-muted mb-2">Offer is valid on orders of $230 Or above for selected products only.</p>
                                                    <small class="mb-0 text-muted">12 Dec, 2022</small>
                                                </div>
                                            </div>
                                            <div class="acitivity-item py-3 d-flex">
                                                <div class="flex-shrink-0">
                                                    <img src="assets/images/users/avatar-2.jpg" alt="" class="avatar-xs rounded-circle acitivity-avatar">
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h6 class="mb-1 lh-base">Favorites Product</h6>
                                                    <p class="text-muted mb-2">Esther James have Favorites product.</p>
                                                    <small class="mb-0 text-muted">25 Nov, 2022</small>
                                                </div>
                                            </div>
                                            <div class="acitivity-item py-3 d-flex">
                                                <div class="flex-shrink-0">
                                                    <img src="assets/images/users/avatar-2.jpg" alt="" class="avatar-xs rounded-circle acitivity-avatar">
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h6 class="mb-1 lh-base">Flash sale starting <span class="text-primary">Tomorrow.</span></h6>
                                                    <p class="text-muted mb-2">Flash sale by <a href="javascript:void(0);" class="link-secondary fw-medium">Zoetis Fashion</a></p>
                                                    <small class="mb-0 text-muted">22 Oct, 2022</small>
                                                </div>
                                            </div>
                                            <div class="acitivity-item d-flex">
                                                <div class="flex-shrink-0">
                                                    <img src="assets/images/users/avatar-5.jpg" alt="" class="avatar-xs rounded-circle acitivity-avatar">
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h6 class="mb-1 lh-base">Monthly sales report</h6>
                                                    <p class="text-muted mb-2"><span class="text-danger">2 days left</span> notification to submit the monthly sales report. <a href="javascript:void(0);" class="link-warning text-decoration-underline">Reports Builder</a></p>
                                                    <small class="mb-0 text-muted">15 Oct, 2022</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card calendar-widget bg-secondary mb-0">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <img src="assets/images/calendar.png" alt="" class="img-fluid" width="80">
                                            <div class="ms-2">
                                                <h6 class="text-white">Turn on Notifications</h6>
                                                <p class="text-white-50 fs-md mb-0">Add notifications in calendar and collect to your phone.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end card-->
                            </div>
                        </div>
                        <!-- end card-->

                        <div class="w-100">
                            <div class="alert alert-info alert-dismissible fade show mt-2" role="alert">
                                <strong>Alexandra!</strong> You should check in on some of those fields below.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>

                            <div class="card card-h-100">
                                <div class="">
                                    <div id="calendar"></div>
                                </div>
                            </div>
                            <!-- end card-->
                        </div>
                    </div>
                    <!--end calendar-wrapper-->

                    <div style='clear:both'></div>

                    <!-- Add New Event MODAL -->
                    <div class="modal fade" id="event-modal" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content border-0">
                                <div class="modal-header p-3 bg-info-subtle">
                                    <h5 class="modal-title" id="modal-title">Event</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                                </div>
                                <div class="modal-body p-4">
                                    <form class="needs-validation" name="event-form" id="form-event" novalidate>
                                        <div class="text-end">
                                            <a href="#" class="btn btn-sm btn-subtle-primary" id="edit-event-btn" data-id="edit-event" onclick="editEvent(this)" role="button">Edit</a>
                                        </div>
                                        <div class="event-details">
                                            <div class="d-flex mb-2">
                                                <div class="flex-grow-1 d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-3">
                                                        <i class="ri-calendar-event-line text-muted fs-lg"></i>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="d-block fw-semibold mb-0" id="event-start-date-tag"></h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="flex-shrink-0 me-3">
                                                    <i class="ri-time-line text-muted fs-lg"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="d-block fw-semibold mb-0"><span id="event-timepicker1-tag"></span> - <span id="event-timepicker2-tag"></span></h6>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="flex-shrink-0 me-3">
                                                    <i class="ri-map-pin-line text-muted fs-lg"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="d-block fw-semibold mb-0"> <span id="event-location-tag"></span></h6>
                                                </div>
                                            </div>
                                            <div class="d-flex mb-3">
                                                <div class="flex-shrink-0 me-3">
                                                    <i class="ri-discuss-line text-muted fs-lg"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <p class="d-block text-muted mb-0" id="event-description-tag"></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row event-form">
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Event Name</label>
                                                    <input class="form-control d-none" placeholder="Enter event name" type="text" name="title" id="event-title" required value="">
                                                    <div class="invalid-feedback">Please provide a valid event name</div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Event Date</label>
                                                    <div class="input-group d-none">
                                                        <input type="text" id="event-start-date" class="form-control flatpickr flatpickr-input" placeholder="Select date" readonly required>
                                                        <span class="input-group-text"><i class="ri-calendar-event-line"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-12" id="event-time">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Start Time</label>
                                                            <div class="input-group d-none">
                                                                <input id="timepicker1" type="text" class="form-control flatpickr flatpickr-input" placeholder="Select start time" readonly>
                                                                <span class="input-group-text"><i class="ri-time-line"></i></span>
                                                            </div>
                                                        </div>
                                                    </div><!--end col-->
                                                    <div class="col-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">End Time</label>
                                                            <div class="input-group d-none">
                                                                <input id="timepicker2" type="text" class="form-control flatpickr flatpickr-input" placeholder="Select end time" readonly>
                                                                <span class="input-group-text"><i class="ri-time-line"></i></span>
                                                            </div>
                                                        </div>
                                                    </div><!--END col-->
                                                </div><!--end row-->
                                            </div>
                                            <!--end col-->
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label for="event-location" class="form-label">Location</label>
                                                    <div>
                                                        <input type="text" class="form-control d-none" name="event-location" id="event-location" placeholder="Event location">
                                                    </div>
                                                </div>
                                            </div><!--end col-->
                                            <input type="hidden" id="eventid" name="eventid" value="">
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Description</label>
                                                    <textarea class="form-control d-none" id="event-description" placeholder="Enter a description" rows="3" spellcheck="false"></textarea>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Type</label>
                                                    <select class="form-select d-none" name="category" id="event-category" required>
                                                        <option value="bg-danger-subtle">Danger</option>
                                                        <option value="bg-success-subtle">Success</option>
                                                        <option value="bg-primary-subtle">Primary</option>
                                                        <option value="bg-info-subtle">Info</option>
                                                        <option value="bg-dark-subtle">Dark</option>
                                                        <option value="bg-warning-subtle">Warning</option>
                                                    </select>
                                                    <div class="invalid-feedback">Please select a valid event category</div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                        <div class="hstack gap-2 justify-content-end">
                                            <button type="button" class="btn btn-subtle-danger" id="btn-delete-event"><i class="ri-close-line align-bottom"></i> Delete</button>
                                            <button type="submit" class="btn btn-success" id="btn-save-event">Add Event</button>
                                        </div>
                                    </form>
                                </div>
                            </div> <!-- end modal-content-->
                        </div> <!-- end modal dialog-->
                    </div> <!-- end modal-->
                    <!-- end modal-->

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


    <!-- calendar min js -->
    <script src="assets/libs/fullcalendar/index.global.min.js"></script>

    <!-- Calendar init -->
    <script src="assets/js/pages/calendar.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>
</body>

</html>