<?php
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../includes/functions.php';

// Rediriger si déjà connecté
requireGuest();

$page_title = 'Inscription';
$page_description = 'Créez votre compte IPTV Project';

$error = '';
$success = '';
$formData = [
    'email' => '',
    'password' => '',
    'confirm_password' => '',
    'terms' => false
];

// Traitement du formulaire d'inscription
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $formData = [
        'email' => trim($_POST['email'] ?? ''),
        'password' => trim($_POST['password'] ?? ''),
        'confirm_password' => trim($_POST['confirm_password'] ?? ''),
        'terms' => isset($_POST['terms'])
    ];
    
    // Validation des données
    if (empty($formData['email']) || empty($formData['password']) || empty($formData['confirm_password'])) {
        $error = 'Veuillez remplir tous les champs.';
    } elseif (!validateEmail($formData['email'])) {
        $error = 'Adresse email invalide.';
    } elseif (!validatePassword($formData['password'])) {
        $error = 'Le mot de passe doit contenir au moins 8 caractères avec des lettres et des chiffres.';
    } elseif ($formData['password'] !== $formData['confirm_password']) {
        $error = 'Les mots de passe ne correspondent pas.';
    } elseif (!$formData['terms']) {
        $error = 'Vous devez accepter les conditions d\'utilisation.';
    } else {
        try {
            if ($pdo) {
                // Vérifier si l'email existe déjà
                $stmt = $pdo->prepare('SELECT id FROM users WHERE email = ?');
                $stmt->execute([$formData['email']]);
                
                if ($stmt->fetch()) {
                    $error = 'Cette adresse email est déjà utilisée.';
                } else {
                    // Créer le compte
                    $stmt = $pdo->prepare('
                        INSERT INTO users (email, password_hash, is_active, created_at, updated_at) 
                        VALUES (?, ?, 1, NOW(), NOW())
                    ');
                    
                    if ($stmt->execute([$formData['email'], hashPassword($formData['password'])])) {
                        $userId = $pdo->lastInsertId();
                        
                        // Log de l'action
                        logUserAction($userId, 'register', ['ip' => getClientIP()]);
                        
                        // Rediriger vers la connexion avec un message de succès
                        redirectWithMessage(
                            getPageUrl('login.php'),
                            'Votre compte a été créé avec succès ! Vous pouvez maintenant vous connecter.',
                            'success'
                        );
                    } else {
                        $error = 'Erreur lors de la création du compte. Veuillez réessayer.';
                    }
                }
            } else {
                // Mode démo
                $error = 'L\'inscription n\'est pas disponible en mode démo. Utilisez le compte de démonstration.';
            }
        } catch (Exception $e) {
            error_log("Erreur d'inscription: " . $e->getMessage());
            $error = 'Une erreur est survenue. Veuillez réessayer.';
        }
    }
}
?>

<?php include __DIR__ . '/../includes/header.php'; ?>

<div class="container">
    <div class="auth-container">
        <div class="auth-card">
            <div class="auth-header">
                <h1>Créer un compte</h1>
                <p>Rejoignez IPTV Project et accédez à vos chaînes préférées</p>
            </div>
            
            <?php if ($error): ?>
                <div class="alert alert-error">
                    <i class="icon-alert"></i>
                    <?php echo htmlspecialchars($error); ?>
                </div>
            <?php endif; ?>
            
            <form method="POST" class="auth-form">
                <div class="form-group">
                    <label for="email">Adresse email</label>
                    <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($formData['email']); ?>" required>
                    <small>Nous ne partagerons jamais votre email avec des tiers.</small>
                </div>
                
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <div class="password-input">
                        <input type="password" id="password" name="password" value="<?php echo htmlspecialchars($formData['password']); ?>" required>
                        <button type="button" class="password-toggle" aria-label="Afficher le mot de passe">
                            <i class="icon-eye"></i>
                        </button>
                    </div>
                    <small>Au moins 8 caractères avec des lettres et des chiffres.</small>
                </div>
                
                <div class="form-group">
                    <label for="confirm_password">Confirmer le mot de passe</label>
                    <div class="password-input">
                        <input type="password" id="confirm_password" name="confirm_password" value="<?php echo htmlspecialchars($formData['confirm_password']); ?>" required>
                        <button type="button" class="password-toggle" aria-label="Afficher le mot de passe">
                            <i class="icon-eye"></i>
                        </button>
                    </div>
                </div>
                
                <div class="form-group form-checkbox">
                    <label>
                        <input type="checkbox" name="terms" <?php echo $formData['terms'] ? 'checked' : ''; ?> required>
                        <span>J'accepte les <a href="<?php echo getPageUrl('terms.php'); ?>" target="_blank">conditions d'utilisation</a> et la <a href="<?php echo getPageUrl('privacy.php'); ?>" target="_blank">politique de confidentialité</a></span>
                    </label>
                </div>
                
                <button type="submit" class="btn btn-primary btn-block">Créer mon compte</button>
            </form>
            
            <div class="auth-links">
                <p>Vous avez déjà un compte ? <a href="<?php echo getPageUrl('login.php'); ?>" class="link">Se connecter</a></p>
            </div>
            
            <?php if (!$pdo): ?>
                <div class="demo-info">
                    <h4>Mode démo</h4>
                    <p>L'inscription n'est pas disponible en mode démo. Utilisez le compte de démonstration :</p>
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
    // Gestion de l'affichage/masquage des mots de passe
    const passwordToggles = document.querySelectorAll('.password-toggle');
    
    passwordToggles.forEach(toggle => {
        toggle.addEventListener('click', function() {
            const input = this.previousElementSibling;
            const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
            input.setAttribute('type', type);
            
            const icon = this.querySelector('i');
            if (type === 'password') {
                icon.className = 'icon-eye';
            } else {
                icon.className = 'icon-eye-off';
            }
        });
    });
    
    // Validation en temps réel du mot de passe
    const passwordInput = document.querySelector('#password');
    const confirmPasswordInput = document.querySelector('#confirm_password');
    
    function validatePasswordMatch() {
        if (passwordInput.value && confirmPasswordInput.value) {
            if (passwordInput.value === confirmPasswordInput.value) {
                confirmPasswordInput.classList.remove('error');
                confirmPasswordInput.classList.add('success');
            } else {
                confirmPasswordInput.classList.remove('success');
                confirmPasswordInput.classList.add('error');
            }
        }
    }
    
    if (passwordInput && confirmPasswordInput) {
        passwordInput.addEventListener('input', validatePasswordMatch);
        confirmPasswordInput.addEventListener('input', validatePasswordMatch);
    }
    
    // Auto-focus sur le premier champ
    const firstInput = document.querySelector('.auth-form input');
    if (firstInput) {
        firstInput.focus();
    }
});
</script>

<?php include __DIR__ . '/../includes/footer.php'; ?>