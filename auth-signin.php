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
        
        /* Styles simplifiés pour un formulaire épuré */
        .auth-container {
            max-width: 450px;
            margin: 0 auto;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            background: white;
        }
        
        .auth-header {
            text-align: center;
            margin-bottom: 2rem;
        }
        
        .auth-logo {
            margin-bottom: 1.5rem;
            font-size: 2rem;
            font-weight: 700;
            color: #3b5de7;
        }
        
        .form-control:focus {
            border-color: #3b5de7;
            box-shadow: 0 0 0 0.2rem rgba(59, 93, 231, 0.25);
        }
        
        .btn-primary {
            background-color: #3b5de7;
            border-color: #3b5de7;
            padding: 0.75rem;
            font-weight: 500;
        }
        
        .btn-primary:hover {
            background-color: #2a4acb;
            border-color: #2a4acb;
        }
        
        .auth-footer {
            text-align: center;
            margin-top: 2rem;
            color: #6c757d;
            font-size: 0.9rem;
        }
    </style>

</head>

<body>
    <section class="auth-page-wrapper py-5 position-relative bg-light d-flex align-items-center justify-content-center min-vh-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="auth-container">
                        <div class="auth-header">
                            <div class="auth-logo">GESTIONNAIRE-ODSM</div>
                            <h5 class="mb-1">Bienvenue</h5>
                            <p class="text-muted">Connectez-vous à votre compte</p>
                        </div>
                        
                        <form action="" method="POST" id="login-form">
                            <div class="mb-3">
                                <label for="username" class="form-label">Nom d'utilisateur</label>
                                <div class="input-group <?php echo $champs_desactives ? 'champs-desactives' : ''; ?>">
                                    <span class="input-group-text" id="basic-addon"><i class="ri-user-3-line"></i></span>
                                    <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" required
                                        value="<?php echo isset($_POST['username']) ? htmlspecialchars($_POST['username']) : ''; ?>"
                                        <?php echo $champs_desactives ? 'readonly' : ''; ?>>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="password-input" class="form-label">Mot de passe</label>
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

                            
                            
                            <div class="mb-3">
                                <button class="btn btn-primary w-100" type="submit" id="submit-btn"
                                    <?php echo $champs_desactives ? 'disabled' : ''; ?>>Se connecter</button>
                            </div>
                            
                            <?php if ($champs_desactives): ?>
                                <div class="alert alert-danger text-center">
                                    <p class="mb-0">Veuillez contacter l'administrateur pour débloquer votre compte.</p>
                                </div>
                            <?php endif; ?>
                        </form>
                        
                        
                    </div>
                </div>
            </div>
        </div>
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

</body>

</html>