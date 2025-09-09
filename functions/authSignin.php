<?php
    session_start();
    
    include('config.php');

    // Initialiser le compteur de tentatives si non existant
    if (!isset($_SESSION['login_attempts'])) {
        $_SESSION['login_attempts'] = array();
    }

    // Vérifier si le formulaire a été soumis
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Récupérer les données du formulaire
        $username_input = $_POST['username'] ?? '';
        $password_input = $_POST['password-input'] ?? '';

        // Rechercher l'utilisateur dans la base de données
        $stmt = $pdo->prepare("SELECT id_utilisateur, identifiant, mot_de_passe, actif, nom, prenom, id_role FROM utilisateur WHERE identifiant = :identifiant");
        $stmt->execute(['identifiant' => $username_input]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            // Vérifier si le compte est actif
            if (!$user['actif']) {
                $error_message = "Votre compte est bloqué. Veuillez contacter l'administrateur.";
                $compte_bloque = true;
            } else {
                // Vérifier le mot de passe (comparaison des hashs)
                $hashed_password = hash('sha256', $password_input);

                if ($hashed_password === $user['mot_de_passe']) {
                    // Connexion réussie
                    $_SESSION['user_id'] = $user['id_utilisateur'];
                    $_SESSION['username'] = $user['identifiant'];
                    $_SESSION['nom'] = $user['nom'];
                    $_SESSION['prenom'] = $user['prenom'];
                    $_SESSION['role_id'] = $user['id_role'];

                    // Réinitialiser les tentatives de connexion
                    if (isset($_SESSION['login_attempts'][$username_input])) {
                        unset($_SESSION['login_attempts'][$username_input]);
                    }

                    // Mettre à jour la date de dernière connexion
                    $update_stmt = $pdo->prepare("UPDATE utilisateur SET date_dernier_login = NOW() WHERE id_utilisateur = :id");
                    $update_stmt->execute(['id' => $user['id_utilisateur']]);

                    // Enregistrer l'action dans l'historique
                    $history_stmt = $pdo->prepare("INSERT INTO historique_action (type_action, details, date_action, id_utilisateur) VALUES ('connexion', 'Connexion réussie', NOW(), :id)");
                    $history_stmt->execute(['id' => $user['id_utilisateur']]);

                    // Rediriger vers la page d'accueil
                    header("Location: index.php");
                    exit();
                } else {
                    // Mot de passe incorrect - Incrémenter le compteur d'échecs
                    if (!isset($_SESSION['login_attempts'][$username_input])) {
                        $_SESSION['login_attempts'][$username_input] = 1;
                    } else {
                        $_SESSION['login_attempts'][$username_input]++;
                    }

                    $tentatives_restantes = 3 - $_SESSION['login_attempts'][$username_input];

                    // Message d'erreur avec nombre de tentatives restantes
                    if ($tentatives_restantes > 0) {
                        $error_message = "Nom d'utilisateur ou mot de passe incorrect. Il vous reste " . $tentatives_restantes . " tentative(s).";
                    } else {
                        $error_message = "Votre compte a été bloqué après 3 tentatives infructueuses. Veuillez contacter l'administrateur.";
                    }

                    // Enregistrer l'échec de connexion dans l'historique
                    $history_stmt = $pdo->prepare("INSERT INTO historique_action (type_action, details, date_action, id_utilisateur) VALUES ('tentative_connexion', 'Tentative de connexion échouée', NOW(), :id)");
                    $history_stmt->execute(['id' => $user['id_utilisateur']]);

                    // Bloquer le compte après 3 tentatives
                    if ($_SESSION['login_attempts'][$username_input] >= 3) {
                        $update_stmt = $pdo->prepare("UPDATE utilisateur SET actif = 0 WHERE id_utilisateur = :id");
                        $update_stmt->execute(['id' => $user['id_utilisateur']]);
                        $compte_bloque = true;

                        // Enregistrer le blocage dans l'historique
                        $history_stmt = $pdo->prepare("INSERT INTO historique_action (type_action, details, date_action, id_utilisateur) VALUES ('blocage_compte', 'Compte bloqué après 3 tentatives infructueuses', NOW(), :id)");
                        $history_stmt->execute(['id' => $user['id_utilisateur']]);
                    }
                }
            }
        } else {
            // Utilisateur non trouvé
            $error_message = "Nom d'utilisateur ou mot de passe incorrect.";

            // Incrémenter le compteur d'échecs même pour un utilisateur inexistant
            if (!isset($_SESSION['login_attempts'][$username_input])) {
                $_SESSION['login_attempts'][$username_input] = 1;
            } else {
                $_SESSION['login_attempts'][$username_input]++;
            }
        }
    }

    // Vérifier si les champs doivent être désactivés (2 tentatives ou plus)
    $username_input = $_POST['username'] ?? '';
    $champs_desactives = isset($_SESSION['login_attempts'][$username_input]) && $_SESSION['login_attempts'][$username_input] >= 2;
    ?>