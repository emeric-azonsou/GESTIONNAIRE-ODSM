<?php
include 'partials/main.php';

// Démarrer la session
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Vérifier l'authentification et les permissions admin
require 'functions/authCheck.php';

// Connexion à la base de données
include "functions/config.php";

// Récupérer les informations de l'utilisateur connecté
$user_id = $_SESSION['user_id'] ?? null;
$is_admin = false;

if ($user_id) {
    $stmt = $pdo->prepare("
        SELECT u.*, r.nom_role 
        FROM utilisateur u 
        JOIN role r ON u.id_role = r.id_role 
        WHERE u.id_utilisateur = ?
    ");
    $stmt->execute([$user_id]);
    $user_data = $stmt->fetch(PDO::FETCH_ASSOC);

    // Vérifier si l'utilisateur est admin
    $is_admin = ($user_data['nom_role'] === 'admin');
    
    if (!$is_admin) {
        header('Location: index.php');
        exit();
    }
} else {
    header('Location: login.php');
    exit();
}

// Récupérer les rôles pour le formulaire
$roles = $pdo->query("SELECT * FROM role ORDER BY nom_role")->fetchAll(PDO::FETCH_ASSOC);

// Traitement des actions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action'])) {
        try {
            switch ($_POST['action']) {
                case 'add_user':
                    // Validation des données
                    $required_fields = ['identifiant', 'mot_de_passe', 'nom', 'prenom', 'email', 'id_role'];
                    foreach ($required_fields as $field) {
                        if (empty($_POST[$field])) {
                            throw new Exception("Le champ $field est requis");
                        }
                    }

                    // Vérifier si l'identifiant existe déjà
                    $stmt = $pdo->prepare("SELECT COUNT(*) FROM utilisateur WHERE identifiant = ?");
                    $stmt->execute([$_POST['identifiant']]);
                    if ($stmt->fetchColumn() > 0) {
                        throw new Exception("Cet identifiant est déjà utilisé");
                    }

                    // Hasher le mot de passe
                    $hashed_password = password_hash($_POST['mot_de_passe'], PASSWORD_DEFAULT);

                    // Insérer le nouvel utilisateur
                    $stmt = $pdo->prepare("
                        INSERT INTO utilisateur 
                        (identifiant, mot_de_passe, nom, prenom, email, telephone, id_role, actif) 
                        VALUES (?, ?, ?, ?, ?, ?, ?, ?)
                    ");
                    $stmt->execute([
                        $_POST['identifiant'],
                        $hashed_password,
                        $_POST['nom'],
                        $_POST['prenom'],
                        $_POST['email'],
                        $_POST['telephone'] ?? null,
                        $_POST['id_role'],
                        isset($_POST['actif']) ? 1 : 0
                    ]);

                    $message_success = "Utilisateur créé avec succès";
                    break;

                case 'edit_user':
                    if (empty($_POST['id_utilisateur'])) {
                        throw new Exception("ID utilisateur manquant");
                    }

                    $required_fields = ['identifiant', 'nom', 'prenom', 'email', 'id_role'];
                    foreach ($required_fields as $field) {
                        if (empty($_POST[$field])) {
                            throw new Exception("Le champ $field est requis");
                        }
                    }

                    // Préparer la requête de mise à jour
                    $update_fields = [
                        'identifiant' => $_POST['identifiant'],
                        'nom' => $_POST['nom'],
                        'prenom' => $_POST['prenom'],
                        'email' => $_POST['email'],
                        'telephone' => $_POST['telephone'] ?? null,
                        'id_role' => $_POST['id_role'],
                        'actif' => isset($_POST['actif']) ? 1 : 0
                    ];

                    // Si un nouveau mot de passe est fourni
                    if (!empty($_POST['mot_de_passe'])) {
                        $update_fields['mot_de_passe'] = password_hash($_POST['mot_de_passe'], PASSWORD_DEFAULT);
                    }

                    $set_clause = implode(', ', array_map(fn($field) => "$field = ?", array_keys($update_fields)));
                    $values = array_values($update_fields);
                    $values[] = $_POST['id_utilisateur'];

                    $stmt = $pdo->prepare("
                        UPDATE utilisateur 
                        SET $set_clause, date_modification = CURRENT_TIMESTAMP 
                        WHERE id_utilisateur = ?
                    ");
                    $stmt->execute($values);

                    $message_success = "Utilisateur modifié avec succès";
                    break;

                case 'delete_user':
                    if (empty($_POST['id_utilisateur'])) {
                        throw new Exception("ID utilisateur manquant");
                    }

                    if ($_POST['id_utilisateur'] == $user_id) {
                        throw new Exception("Vous ne pouvez pas désactiver votre propre compte");
                    }

                    // Désactiver l'utilisateur au lieu de le supprimer
                    $stmt = $pdo->prepare("UPDATE utilisateur SET actif = 0 WHERE id_utilisateur = ?");
                    $stmt->execute([$_POST['id_utilisateur']]);

                    $message_success = "Utilisateur désactivé avec succès";
                    break;
            }
        } catch (Exception $e) {
            $error_message = $e->getMessage();
        }
    }
}

// Récupérer tous les utilisateurs avec leurs rôles
$users = $pdo->query("
    SELECT u.*, r.nom_role 
    FROM utilisateur u 
    JOIN role r ON u.id_role = r.id_role 
    ORDER BY u.nom, u.prenom
")->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <?php
    $title = 'Gestion des Utilisateurs';
    include('partials/title-meta.php');
    ?>
    <?php include 'partials/head-css.php'; ?>

    <style>
        .user-table {
            width: 100%;
            border-collapse: collapse;
        }
        
        .user-table th,
        .user-table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #dee2e6;
        }
        
        .user-table th {
            background-color: #f8f9fa;
            font-weight: 600;
        }
        
        .badge {
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: 500;
        }
        
        .badge-success {
            background-color: #d1fae5;
            color: #065f46;
        }
        
        .badge-danger {
            background-color: #fee2e2;
            color: #b91c1c;
        }
        
        .badge-primary {
            background-color: #405189;
            color: white;
        }
        
        .action-buttons {
            display: flex;
            gap: 5px;
        }
        
        .btn-sm {
            padding: 4px 8px;
            font-size: 12px;
        }
        
        .user-details {
            background: #f8f9fa;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
        }
        
        .user-details-row {
            display: flex;
            margin-bottom: 10px;
        }
        
        .user-details-label {
            font-weight: 600;
            width: 150px;
            color: #2d3748;
        }
        
        .user-details-value {
            flex: 1;
            color: #4a5568;
        }
        
        .password-toggle {
            cursor: pointer;
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: #6c757d;
        }
        
        .password-container {
            position: relative;
        }
        
        .alert-info {
            background-color: #d1ecf1;
            border-color: #bee5eb;
            color: #0c5460;
        }
    </style>
</head>

<body>
    <?php include 'partials/menu.php'; ?>

    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Gestion des Utilisateurs</h4>
                                
                                <?php if (!empty($error_message)): ?>
                                <div class="alert alert-danger"><?php echo htmlspecialchars($error_message); ?></div>
                                <?php endif; ?>
                                
                                <?php if (!empty($message_success)): ?>
                                <div class="alert alert-success"><?php echo htmlspecialchars($message_success); ?></div>
                                <?php endif; ?>

                                <div class="alert alert-info">
                                    <strong>Information:</strong> La "suppression" d'un utilisateur le désactive simplement. Il ne pourra plus se connecter mais ses données (y compris ses commandes) seront conservées.
                                </div>

                                <div class="mb-3">
                                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addUserModal">
                                        <i class="ri-user-add-line"></i> Nouvel Utilisateur
                                    </button>
                                </div>

                                <div class="table-responsive">
                                    <table class="user-table">
                                        <thead>
                                            <tr>
                                                <th>Nom & Prénom</th>
                                                <th>Identifiant</th>
                                                <th>Email</th>
                                                <th>Rôle</th>
                                                <th>Statut</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($users as $user): ?>
                                                <tr>
                                                    <td><?php echo htmlspecialchars($user['prenom'] . ' ' . $user['nom']); ?></td>
                                                    <td><?php echo htmlspecialchars($user['identifiant']); ?></td>
                                                    <td><?php echo htmlspecialchars($user['email']); ?></td>
                                                    <td>
                                                        <span class="badge badge-primary">
                                                            <?php echo htmlspecialchars($user['nom_role']); ?>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="badge <?php echo $user['actif'] ? 'badge-success' : 'badge-danger'; ?>">
                                                            <?php echo $user['actif'] ? 'Actif' : 'Inactif'; ?>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <div class="action-buttons">
                                                            <button class="btn btn-sm btn-info" onclick="viewUser(<?php echo $user['id_utilisateur']; ?>)">
                                                                <i class="ri-eye-line"></i>
                                                            </button>
                                                            <button class="btn btn-sm btn-warning" onclick="editUser(<?php echo $user['id_utilisateur']; ?>)">
                                                                <i class="ri-edit-line"></i>
                                                            </button>
                                                            <?php if ($user['id_utilisateur'] != $user_id): ?>
                                                            <button class="btn btn-sm btn-danger" onclick="confirmDelete(<?php echo $user['id_utilisateur']; ?>, '<?php echo htmlspecialchars($user['prenom'] . ' ' . $user['nom']); ?>')">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </button>
                                                            <?php endif; ?>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal d'ajout -->
    <div class="modal fade" id="addUserModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Nouvel Utilisateur</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST">
                    <input type="hidden" name="action" value="add_user">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Nom *</label>
                            <input type="text" class="form-control" name="nom" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Prénom *</label>
                            <input type="text" class="form-control" name="prenom" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Identifiant *</label>
                            <input type="text" class="form-control" name="identifiant" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email *</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Mot de passe *</label>
                            <div class="password-container">
                                <input type="password" class="form-control" name="mot_de_passe" id="addPassword" required>
                                <span class="password-toggle" onclick="togglePassword('addPassword')">
                                    <i class="ri-eye-line"></i>
                                </span>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Téléphone</label>
                            <input type="tel" class="form-control" name="telephone">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Rôle *</label>
                            <select class="form-control" name="id_role" required>
                                <?php foreach ($roles as $role): ?>
                                    <option value="<?php echo $role['id_role']; ?>"><?php echo htmlspecialchars($role['nom_role']); ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="actif" id="addActif" checked>
                                <label class="form-check-label" for="addActif">Actif</label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-primary">Créer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal de visualisation -->
    <div class="modal fade" id="viewUserModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Détails de l'Utilisateur</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="viewUserContent">
                    <!-- Contenu chargé dynamiquement -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal d'édition -->
    <div class="modal fade" id="editUserModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modifier l'Utilisateur</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" id="editUserForm">
                    <input type="hidden" name="action" value="edit_user">
                    <input type="hidden" name="id_utilisateur" id="editUserId">
                    <div class="modal-body" id="editUserContent">
                        <!-- Contenu chargé dynamiquement -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal de suppression (désactivation) -->
    <div class="modal fade" id="deleteUserModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Confirmation de désactivation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" id="deleteForm">
                    <input type="hidden" name="action" value="delete_user">
                    <input type="hidden" name="id_utilisateur" id="deleteUserId">
                    <div class="modal-body">
                        <p>Êtes-vous sûr de vouloir désactiver l'utilisateur : <strong id="deleteUserName"></strong> ?</p>
                        <div class="alert alert-info">
                            <strong>Information:</strong> L'utilisateur ne pourra plus se connecter mais toutes ses données (y compris ses commandes) seront conservées.
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-danger">Désactiver</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Fonction pour basculer la visibilité du mot de passe
        function togglePassword(inputId) {
            const input = document.getElementById(inputId);
            const toggle = input.nextElementSibling;
            if (input.type === 'password') {
                input.type = 'text';
                toggle.innerHTML = '<i class="ri-eye-off-line"></i>';
            } else {
                input.type = 'password';
                toggle.innerHTML = '<i class="ri-eye-line"></i>';
            }
        }

        // Fonction pour confirmer la suppression (désactivation)
        function confirmDelete(userId, userName) {
            document.getElementById('deleteUserId').value = userId;
            document.getElementById('deleteUserName').textContent = userName;
            new bootstrap.Modal(document.getElementById('deleteUserModal')).show();
        }

        // Fonction pour afficher les détails d'un utilisateur
        function viewUser(userId) {
            const users = <?php echo json_encode($users); ?>;
            const user = users.find(u => u.id_utilisateur == userId);
            
            if (!user) {
                alert('Utilisateur non trouvé');
                return;
            }

            const formatDate = (dateString) => {
                if (!dateString) return 'N/A';
                const date = new Date(dateString);
                return date.toLocaleDateString('fr-FR');
            };

            const content = `
                <div class="user-details">
                    <div class="user-details-row">
                        <span class="user-details-label">Nom complet:</span>
                        <span class="user-details-value">${user.prenom} ${user.nom}</span>
                    </div>
                    <div class="user-details-row">
                        <span class="user-details-label">Identifiant:</span>
                        <span class="user-details-value">${user.identifiant}</span>
                    </div>
                    <div class="user-details-row">
                        <span class="user-details-label">Email:</span>
                        <span class="user-details-value">${user.email}</span>
                    </div>
                    <div class="user-details-row">
                        <span class="user-details-label">Téléphone:</span>
                        <span class="user-details-value">${user.telephone || 'N/A'}</span>
                    </div>
                    <div class="user-details-row">
                        <span class="user-details-label">Rôle:</span>
                        <span class="user-details-value">
                            <span class="badge badge-primary">${user.nom_role}</span>
                        </span>
                    </div>
                    <div class="user-details-row">
                        <span class="user-details-label">Statut:</span>
                        <span class="user-details-value">
                            <span class="badge ${user.actif ? 'badge-success' : 'badge-danger'}">
                                ${user.actif ? 'Actif' : 'Inactif'}
                            </span>
                        </span>
                    </div>
                    <div class="user-details-row">
                        <span class="user-details-label">Date création:</span>
                        <span class="user-details-value">${formatDate(user.date_creation)}</span>
                    </div>
                    <div class="user-details-row">
                        <span class="user-details-label">Dernière modification:</span>
                        <span class="user-details-value">${formatDate(user.date_modification)}</span>
                    </div>
                </div>
            `;
            
            document.getElementById('viewUserContent').innerHTML = content;
            new bootstrap.Modal(document.getElementById('viewUserModal')).show();
        }

        // Fonction pour modifier un utilisateur
        function editUser(userId) {
            const users = <?php echo json_encode($users); ?>;
            const user = users.find(u => u.id_utilisateur == userId);
            
            if (!user) {
                alert('Utilisateur non trouvé');
                return;
            }

            const roles = <?php echo json_encode($roles); ?>;
            
            let rolesOptions = '';
            roles.forEach(role => {
                rolesOptions += `<option value="${role.id_role}" ${user.id_role == role.id_role ? 'selected' : ''}>${role.nom_role}</option>`;
            });

            const content = `
                <div class="mb-3">
                    <label class="form-label">Nom *</label>
                    <input type="text" class="form-control" name="nom" value="${user.nom}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Prénom *</label>
                    <input type="text" class="form-control" name="prenom" value="${user.prenom}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Identifiant *</label>
                    <input type="text" class="form-control" name="identifiant" value="${user.identifiant}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email *</label>
                    <input type="email" class="form-control" name="email" value="${user.email}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nouveau mot de passe</label>
                    <div class="password-container">
                        <input type="password" class="form-control" name="mot_de_passe" id="editPassword">
                        <span class="password-toggle" onclick="togglePassword('editPassword')">
                            <i class="ri-eye-line"></i>
                        </span>
                    </div>
                    <small class="text-muted">Laisser vide pour ne pas modifier</small>
                </div>
                <div class="mb-3">
                    <label class="form-label">Téléphone</label>
                    <input type="tel" class="form-control" name="telephone" value="${user.telephone || ''}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Rôle *</label>
                    <select class="form-control" name="id_role" required>
                        ${rolesOptions}
                    </select>
                </div>
                <div class="mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="actif" id="editActif" ${user.actif ? 'checked' : ''}>
                        <label class="form-check-label" for="editActif">Actif</label>
                    </div>
                </div>
            `;
            
            document.getElementById('editUserId').value = userId;
            document.getElementById('editUserContent').innerHTML = content;
            new bootstrap.Modal(document.getElementById('editUserModal')).show();
        }
    </script>

    <?php include 'partials/vendor-scripts.php'; ?>
</body>
</html>
