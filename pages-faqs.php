<?php include 'partials/main.php'; ?>

<head>
<?php includeFileWithVariables('partials/title-meta.php', array('title' => 'FAQs')); ?>


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
                <?php includeFileWithVariables('partials/page-title.php', array('pagetitle' => 'Pages', 'title' => 'FAQs')); ?>
               

                    <div class="card">
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-8">
                                    <div class="text-center mb-5">
                                        <h4 class="fw-semibold fs-3xl">Have Any Questions?</h4>
                                        <p class="text-muted mb-4 fs-md">If you're new to Vixon or looking to your business, this guide will help you learn more <br> about platform and it's features.</p>
                                        <button type="button" class="btn btn-secondary"><i class="ti ti-mail label-icon rounded-pill me-1"></i> Email Us</button>
                                    </div>
                                    <div class="text-center mb-5">
                                        <img src="assets/images/auth/faq.png" alt="" class="w-50 h-auto">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="nav nav-pills flex-column nav-pills-tab custom-verti-nav-pills text-center" role="tablist" aria-orientation="vertical">
                                        <a class="nav-link p-3 active show" id="custom-v-pills-home-tab" data-bs-toggle="pill" href="#custom-v-pills-home" role="tab" aria-controls="custom-v-pills-home" aria-selected="true">
                                            <i class="ti ti-question-mark d-block fs-5xl align-middle mb-3"></i>
                                            <h6 class="text-reset fw-medium mb-0">General Questions</h6>
                                        </a>
                                        <a class="nav-link p-3" id="custom-v-pills-profile-tab" data-bs-toggle="pill" href="#custom-v-pills-profile" role="tab" aria-controls="custom-v-pills-profile" aria-selected="false">
                                            <i class="ti ti-user-cog d-block fs-5xl align-middle mb-3"></i>
                                            <h6 class="text-reset fw-medium mb-0">Manage Account</h6>
                                        </a>
                                        <a class="nav-link p-3" id="custom-v-pills-messages-tab" data-bs-toggle="pill" href="#custom-v-pills-messages" role="tab" aria-controls="custom-v-pills-messages" aria-selected="false">
                                            <i class="ti ti-shield-chevron d-block fs-5xl align-middle mb-3"></i>
                                            <h6 class="text-reset fw-medium mb-0">Privacy & Security</h6>
                                        </a>
                                    </div>
                                </div> <!-- end col-->
                                <div class="col-lg-9">
                                    <div class="tab-content text-muted mt-3 mt-lg-0">
                                        <div class="tab-pane fade active show" id="custom-v-pills-home" role="tabpanel" aria-labelledby="custom-v-pills-home-tab">
                                            <div class="accordion accordion-border-box" id="genques-accordion">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="genques-headingOne">
                                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#genques-collapseOne" aria-expanded="true" aria-controls="genques-collapseOne">
                                                            What are FAQ questions?
                                                        </button>
                                                    </h2>
                                                    <div id="genques-collapseOne" class="accordion-collapse collapse show" aria-labelledby="genques-headingOne" data-bs-parent="#genques-accordion">
                                                        <div class="accordion-body">
                                                            An FAQ page <b>(short for Frequently Asked Question page)</b> is a part of your website that provides answers to common questions, assuages concerns, and overcomes objections. It's a space where customers away from your sales-focused landing pages and homepage.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="genques-headingTwo">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#genques-collapseTwo" aria-expanded="false" aria-controls="genques-collapseTwo">
                                                            What is FAQ process?
                                                        </button>
                                                    </h2>
                                                    <div id="genques-collapseTwo" class="accordion-collapse collapse" aria-labelledby="genques-headingTwo" data-bs-parent="#genques-accordion">
                                                        <div class="accordion-body">
                                                            FAQ stands for Frequently Asked Questions. It's <b>your opportunity to communicate with the most important visitors to your website</b> – those who have begun the decision-making process about whether to do business with you can't fit elsewhere on their website.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="genques-headingThree">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#genques-collapseThree" aria-expanded="false" aria-controls="genques-collapseThree">
                                                            What is the purpose of FAQ?
                                                        </button>
                                                    </h2>
                                                    <div id="genques-collapseThree" class="accordion-collapse collapse" aria-labelledby="genques-headingThree" data-bs-parent="#genques-accordion">
                                                        <div class="accordion-body">
                                                            The purpose of a FAQ is generally to provide information on frequent questions or concerns; however, the format is a useful means of organizing information, and text consisting of questions and their answers may thus be called a FAQ regardless.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="genques-headingFour">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#genques-collapseFour" aria-expanded="false" aria-controls="genques-collapseFour">
                                                            What is an online FAQ?
                                                        </button>
                                                    </h2>
                                                    <div id="genques-collapseFour" class="accordion-collapse collapse" aria-labelledby="genques-headingFour" data-bs-parent="#genques-accordion">
                                                        <div class="accordion-body">
                                                            FAQs stand for frequently asked questions. It is one of the many crucial pages of your website. It gives your customers answers to recurring and common questions and addresses their concerns public product documentation that is released at the same time.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="genques-headingFive">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#genques-collapseFive" aria-expanded="false" aria-controls="genques-collapseFive">
                                                            What are some design questions?
                                                        </button>
                                                    </h2>
                                                    <div id="genques-collapseFive" class="accordion-collapse collapse" aria-labelledby="genques-headingFive" data-bs-parent="#genques-accordion">
                                                        <div class="accordion-body">
                                                            These questions will help clients feel involved with the design process, and they'll also help you brainstorm ideas and fine-tune your creative output.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="genques-headingSix">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#genques-collapseSix" aria-expanded="false" aria-controls="genques-collapseSix">
                                                            What are the 4 questions of design?
                                                        </button>
                                                    </h2>
                                                    <div id="genques-collapseSix" class="accordion-collapse collapse" aria-labelledby="genques-headingSix" data-bs-parent="#genques-accordion">
                                                        <div class="accordion-body">
                                                            The methodology I've found most successful, has been introduced by prof Jeanne Liedtka from Darden Business School and identifies four stages: What is?, What if?, What wows?, and What works?
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end accordion-->
                                        </div>
                                        <!--end tab-pane-->

                                        <div class="tab-pane fade" id="custom-v-pills-profile" role="tabpanel" aria-labelledby="custom-v-pills-profile-tab">
                                            <div class="accordion accordion-border-box" id="manageaccount-accordion">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="manageaccount-headingOne">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#manageaccount-collapseOne" aria-expanded="false" aria-controls="manageaccount-collapseOne">
                                                            What is account management process?
                                                        </button>
                                                    </h2>
                                                    <div id="manageaccount-collapseOne" class="accordion-collapse collapse" aria-labelledby="manageaccount-headingOne" data-bs-parent="#manageaccount-accordion">
                                                        <div class="accordion-body">
                                                            If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. The new common language will be more simple and regular than the existing European languages. It will be as simple their most common words.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="manageaccount-headingTwo">
                                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#manageaccount-collapseTwo" aria-expanded="true" aria-controls="manageaccount-collapseTwo">
                                                            Why is account management important?
                                                        </button>
                                                    </h2>
                                                    <div id="manageaccount-collapseTwo" class="accordion-collapse collapse show" aria-labelledby="manageaccount-headingTwo" data-bs-parent="#manageaccount-accordion">
                                                        <div class="accordion-body">
                                                            The new common language will be more simple and regular than the existing European languages. It will be as simple as Occidental; in fact, it will be Occidental. To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="manageaccount-headingThree">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#manageaccount-collapseThree" aria-expanded="false" aria-controls="manageaccount-collapseThree">
                                                            What is account manager role?
                                                        </button>
                                                    </h2>
                                                    <div id="manageaccount-collapseThree" class="accordion-collapse collapse" aria-labelledby="manageaccount-headingThree" data-bs-parent="#manageaccount-accordion">
                                                        <div class="accordion-body">
                                                            he wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="manageaccount-headingFour">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#manageaccount-collapseFour" aria-expanded="false" aria-controls="manageaccount-collapseFour">
                                                            What is a key account strategy?
                                                        </button>
                                                    </h2>
                                                    <div id="manageaccount-collapseFour" class="accordion-collapse collapse" aria-labelledby="manageaccount-headingFour" data-bs-parent="#manageaccount-accordion">
                                                        <div class="accordion-body">
                                                            Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et arcu arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis aliquam ultrices mauris.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end accordion-->
                                        </div>
                                        <!--end tab-pane-->

                                        <div class="tab-pane fade" id="custom-v-pills-messages" role="tabpanel" aria-labelledby="custom-v-pills-messages-tab">
                                            <div class="accordion accordion-border-box" id="privacy-accordion">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="privacy-headingOne">
                                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#privacy-collapseOne" aria-expanded="true" aria-controls="privacy-collapseOne">
                                                            Which is important privacy or security?
                                                        </button>
                                                    </h2>
                                                    <div id="privacy-collapseOne" class="accordion-collapse collapse show" aria-labelledby="privacy-headingOne" data-bs-parent="#privacy-accordion">
                                                        <div class="accordion-body">
                                                            If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. The new common language will be more simple and regular than the existing European languages. It will be as simple their most common words.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="privacy-headingTwo">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#privacy-collapseTwo" aria-expanded="false" aria-controls="privacy-collapseTwo">
                                                            What is security and privacy?
                                                        </button>
                                                    </h2>
                                                    <div id="privacy-collapseTwo" class="accordion-collapse collapse" aria-labelledby="privacy-headingTwo" data-bs-parent="#privacy-accordion">
                                                        <div class="accordion-body">
                                                            The new common language will be more simple and regular than the existing European languages. It will be as simple as Occidental; in fact, it will be Occidental. To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="privacy-headingThree">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#privacy-collapseThree" aria-expanded="false" aria-controls="privacy-collapseThree">
                                                            How can I protect my privacy?
                                                        </button>
                                                    </h2>
                                                    <div id="privacy-collapseThree" class="accordion-collapse collapse" aria-labelledby="privacy-headingThree" data-bs-parent="#privacy-accordion">
                                                        <div class="accordion-body">
                                                            He wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="privacy-headingFour">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#privacy-collapseFour" aria-expanded="false" aria-controls="privacy-collapseFour">
                                                            Why is privacy so important?
                                                        </button>
                                                    </h2>
                                                    <div id="privacy-collapseFour" class="accordion-collapse collapse" aria-labelledby="privacy-headingFour" data-bs-parent="#privacy-accordion">
                                                        <div class="accordion-body">
                                                            Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et arcu arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis aliquam ultrices mauris.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end accordion-->
                                        </div>
                                        <!--end tab-pane-->
                                    </div>
                                </div> <!-- end col-->
                            </div> <!-- end row-->
                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card -->
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


    <!-- App js -->
    <script src="assets/js/app.js"></script>
</body>

</html>