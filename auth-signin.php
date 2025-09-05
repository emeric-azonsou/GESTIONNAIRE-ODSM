<!doctype html>
<html lang="en" data-layout="vertical" data-sidebar="dark" data-sidebar-size="lg" data-preloader="disable" data-bs-theme="light">

<head>
    
    <?php 
    include 'partials/head-css.php';
    include "functions/authSignin.php";
    $title = 'Sign In';
    include('partials/title-meta.php');
    ?>

    <style>
        .champs-desactives {
            opacity: 0.6;
            pointer-events: none;
            background-color: #f8f9fa;
        }
    </style>

</head>

<body>
    <section class="auth-page-wrapper py-5 position-relative bg-light d-flex align-items-center justify-content-center min-vh-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <div class="card mb-0">
                        <div class="card-body">
                            <div class="row g-0 align-items-center">
                                <div class="col-xxl-6 mx-auto">
                                    <div class="card mb-0 border-0 shadow-none mb-0">
                                        <div class="card-body p-sm-5 m-lg-4">
                                            <div class="text-center mt-5">
                                                <h5 class="fs-3xl">Welcome Back</h5>
                                                <p class="text-muted">Sign in to continue to Vixon.</p>
                                            </div>
                                            <div class="p-2 mt-5">
                                                <form action="" method="POST" id="login-form">
                                                    <div class="mb-3">
                                                        <div class="input-group <?php echo $champs_desactives ? 'champs-desactives' : ''; ?>">
                                                            <span class="input-group-text" id="basic-addon"><i class="ri-user-3-line"></i></span>
                                                            <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" required
                                                                value="<?php echo isset($_POST['username']) ? htmlspecialchars($_POST['username']) : ''; ?>"
                                                                <?php echo $champs_desactives ? 'readonly' : ''; ?>>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="position-relative auth-pass-inputgroup overflow-hidden <?php echo $champs_desactives ? 'champs-desactives' : ''; ?>">
                                                            <div class="input-group">
                                                                <span class="input-group-text" id="basic-addon1"><i class="ri-lock-2-line"></i></span>
                                                                <input type="password" class="form-control pe-5 password-input" placeholder="Enter password" id="password-input" name="password-input" required
                                                                    <?php echo $champs_desactives ? 'readonly' : ''; ?>>
                                                            </div>
                                                            <?php if (!$champs_desactives): ?>
                                                                <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon">
                                                                    <i class="ri-eye-fill align-middle"></i>
                                                                </button>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>

                                                    <!-- Affichage du message d'erreur -->
                                                    <?php if (isset($error_message)): ?>
                                                        <div class="alert alert-<?php echo isset($compte_bloque) && $compte_bloque ? 'danger' : 'warning'; ?> mt-3" role="alert">
                                                            <?php echo htmlspecialchars($error_message); ?>
                                                        </div>
                                                    <?php endif; ?>

                                                    <div class="float-end">
                                                        <a href="auth-pass-reset.php" class="text-muted">Forgot password?</a>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="auth-remember-check">
                                                        <label class="form-check-label" for="auth-remember-check">Remember me</label>
                                                    </div>
                                                    <div class="mt-4">
                                                        <button class="btn btn-primary w-100" type="submit" id="submit-btn"
                                                            <?php echo $champs_desactives ? 'disabled' : ''; ?>>Sign In</button>
                                                    </div>
                                                    <?php if ($champs_desactives): ?>
                                                        <div class="mt-3 text-center">
                                                            <p class="text-danger">Veuillez contacter l'administrateur pour débloquer votre compte.</p>
                                                        </div>
                                                    <?php endif; ?>
                                                    <div class="mt-4 pt-2 text-center">
                                                        <div class="signin-other-title position-relative">
                                                            <h5 class="fs-sm mb-4 title">Sign In with</h5>
                                                        </div>
                                                        <div class="pt-2 hstack gap-2 justify-content-center">
                                                            <button type="button" class="btn btn-subtle-primary btn-icon"><i class="ri-facebook-fill fs-lg"></i></button>
                                                            <button type="button" class="btn btn-subtle-danger btn-icon"><i class="ri-google-fill fs-lg"></i></button>
                                                            <button type="button" class="btn btn-subtle-dark btn-icon"><i class="ri-github-fill fs-lg"></i></button>
                                                            <button type="button" class="btn btn-subtle-info btn-icon"><i class="ri-twitter-fill fs-lg"></i></button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <div class="text-center mt-5">
                                                    <p class="mb-1">Don't have an account yet?</p>
                                                    <a href="auth-signup.php" class="text-secondary text-decoration-underline"> Create an account</a>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div>
                                <!--end col-->
                                <div class="col-xxl-5">
                                    <div class="card auth-card h-100 border-0 shadow-none d-none d-sm-block mb-0">
                                        <div class="card-body py-5 d-flex justify-content-between flex-column">
                                            <div class="text-center">
                                                <h5 class="text-white">Nice to see you again</h5>
                                                <p class="text-white opacity-75">Enter your details and start your journey with us.</p>
                                            </div>
                                            <div class="auth-effect-main my-5 position-relative rounded-circle d-flex align-items-center justify-content-center mx-auto">
                                                <div class="auth-user-list list-unstyled">
                                                    <img src="assets/images/auth/signin.png" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <p class="text-white opacity-75 mb-0 mt-3">
                                                    &copy;
                                                    <script>
                                                        document.write(new Date().getFullYear())
                                                    </script> Vixon. Crafted with <i class="ti ti-heart-filled text-danger"></i> by Themesbrand
                                                </p>
                                            </div>
                                        </div>
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
        </div>
        <!--end container-->
    </section>

    <?php include 'partials/vendor-scripts.php'; ?>

    <script>
        // Fonctionnalité pour afficher/masquer le mot de passe
        document.getElementById('password-addon')?.addEventListener('click', function() {
            const passwordInput = document.getElementById('password-input');
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            this.querySelector('i').classList.toggle('ri-eye-fill');
            this.querySelector('i').classList.toggle('ri-eye-off-fill');
        });

        // Empêcher la soumission du formulaire si les champs sont désactivés
        document.getElementById('login-form').addEventListener('submit', function(e) {
            const submitBtn = document.getElementById('submit-btn');
            if (submitBtn.disabled) {
                e.preventDefault();
                alert('Votre compte est temporairement bloqué. Veuillez contacter l\'administrateur.');
            }
        });
    </script>

    <script src="assets/js/pages/password-addon.init.js"></script>

    <!--Swiper slider js-->
    <script src="assets/libs/swiper/swiper-bundle.min.js"></script>

    <!-- swiper.init js -->
    <script src="assets/js/pages/swiper.init.js"></script>

</body>

</html>