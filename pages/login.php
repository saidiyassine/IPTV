<?php
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../includes/functions.php';

// Rediriger si déjà connecté
requireGuest();

$page_title = 'Connexion';
$page_description = 'Connectez-vous à votre compte IPTV Project';

$error = '';
$success = '';

// Traitement du formulaire de connexion
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');
    $password = trim($_POST['password'] ?? '');
    $remember = isset($_POST['remember']);
    
    // Validation des données
    if (empty($email) || empty($password)) {
        $error = 'Veuillez remplir tous les champs.';
    } elseif (!validateEmail($email)) {
        $error = 'Adresse email invalide.';
    } else {
        try {
            if ($pdo) {
                // Vérifier les identifiants en base
                $stmt = $pdo->prepare('SELECT id, email, password_hash, is_active FROM users WHERE email = ?');
                $stmt->execute([$email]);
                $user = $stmt->fetch();
                
                if ($user && verifyPassword($password, $user['password_hash'])) {
                    if ($user['is_active']) {
                        // Connexion réussie
                        $_SESSION['user_id'] = (int)$user['id'];
                        $_SESSION['user_email'] = $user['email'];
                        $_SESSION['login_time'] = time();
                        
                        // Cookie "Se souvenir de moi"
                        if ($remember) {
                            $token = bin2hex(random_bytes(32));
                            setcookie('remember_token', $token, time() + (30 * 24 * 60 * 60), '/', '', true, true);
                            
                            // Stocker le token en base (à implémenter)
                            // storeRememberToken($user['id'], $token);
                        }
                        
                        // Log de l'action
                        logUserAction($user['id'], 'login', ['ip' => getClientIP()]);
                        
                        // Redirection
                        $redirect = $_SESSION['redirect_after_login'] ?? getPageUrl('dashboard.php');
                        unset($_SESSION['redirect_after_login']);
                        header('Location: ' . $redirect);
                        exit;
                    } else {
                        $error = 'Votre compte a été désactivé. Contactez l\'administrateur.';
                    }
                } else {
                    $error = 'Email ou mot de passe incorrect.';
                }
            } else {
                // Mode démo si pas de base de données
                if ($email === 'demo@example.com' && $password === 'demo123') {
                    $_SESSION['user_id'] = 1;
                    $_SESSION['user_email'] = 'demo@example.com';
                    $_SESSION['login_time'] = time();
                    header('Location: ' . getPageUrl('dashboard.php'));
                    exit;
                } else {
                    $error = 'Mode démo : utilisez demo@example.com / demo123';
                }
            }
        } catch (Exception $e) {
            error_log("Erreur de connexion: " . $e->getMessage());
            $error = 'Une erreur est survenue. Veuillez réessayer.';
        }
    }
}

// Récupérer le message flash
$flash = getFlashMessage();
if ($flash) {
    if ($flash['type'] === 'success') {
        $success = $flash['message'];
    } else {
        $error = $flash['message'];
    }
}
?>

<?php include __DIR__ . '/../includes/header.php'; ?>

<div class="container">
    <div class="auth-container">
        <div class="auth-card">
            <div class="auth-header">
                <h1>Connexion</h1>
                <p>Connectez-vous à votre compte pour accéder à vos chaînes favorites</p>
            </div>
            
            <?php if ($error): ?>
                <div class="alert alert-error">
                    <i class="icon-alert"></i>
                    <?php echo htmlspecialchars($error); ?>
                </div>
            <?php endif; ?>
            
            <?php if ($success): ?>
                <div class="alert alert-success">
                    <i class="icon-check"></i>
                    <?php echo htmlspecialchars($success); ?>
                </div>
            <?php endif; ?>
            
            <form method="POST" class="auth-form">
                <div class="form-group">
                    <label for="email">Adresse email</label>
                    <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>" required>
                </div>
                
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <div class="password-input">
                        <input type="password" id="password" name="password" required>
                        <button type="button" class="password-toggle" aria-label="Afficher le mot de passe">
                            <i class="icon-eye"></i>
                        </button>
                    </div>
                </div>
                
                <div class="form-group form-checkbox">
                    <label>
                        <input type="checkbox" name="remember" <?php echo isset($_POST['remember']) ? 'checked' : ''; ?>>
                        <span>Se souvenir de moi</span>
                    </label>
                </div>
                
                <button type="submit" class="btn btn-primary btn-block">Se connecter</button>
            </form>
            
            <div class="auth-links">
                <a href="<?php echo getPageUrl('forgot-password.php'); ?>" class="link">Mot de passe oublié ?</a>
                <span class="separator">|</span>
                <a href="<?php echo getPageUrl('register.php'); ?>" class="link">Créer un compte</a>
            </div>
            
            <?php if (!$pdo): ?>
                <div class="demo-info">
                    <h4>Mode démo</h4>
                    <p>Utilisez ces identifiants pour tester l'application :</p>
                    <ul>
                        <li><strong>Email :</strong> demo@example.com</li>
                        <li><strong>Mot de passe :</strong> demo123</li>
                    </ul>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Gestion de l'affichage/masquage du mot de passe
    const passwordToggle = document.querySelector('.password-toggle');
    const passwordInput = document.querySelector('#password');
    
    if (passwordToggle && passwordInput) {
        passwordToggle.addEventListener('click', function() {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            
            const icon = this.querySelector('i');
            if (type === 'password') {
                icon.className = 'icon-eye';
            } else {
                icon.className = 'icon-eye-off';
            }
        });
    }
    
    // Auto-focus sur le premier champ
    const firstInput = document.querySelector('.auth-form input');
    if (firstInput) {
        firstInput.focus();
    }
});
</script>

<?php include __DIR__ . '/../includes/footer.php'; ?>