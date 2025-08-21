<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/functions.php';
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IPTV Project - Accueil</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    
    <main class="container">
        <section class="hero">
            <h1>Bienvenue sur IPTV Project</h1>
            <p>Votre plateforme de streaming IPTV personnalisée</p>
            
            <?php if (isset($_SESSION['user_id'])): ?>
                <div class="user-welcome">
                    <p>Bonjour, <?php echo htmlspecialchars($_SESSION['user_email']); ?> !</p>
                    <a href="pages/dashboard.php" class="btn btn-primary">Accéder au Dashboard</a>
                </div>
            <?php else: ?>
                <div class="auth-buttons">
                    <a href="pages/login.php" class="btn btn-primary">Se connecter</a>
                    <a href="pages/register.php" class="btn btn-secondary">Créer un compte</a>
                </div>
            <?php endif; ?>
        </section>

        <section class="channels-preview">
            <h2>Chaînes populaires</h2>
            <div id="public-channels" class="channel-grid">
                <!-- Les chaînes seront chargées via JavaScript -->
            </div>
        </section>
    </main>

    <?php include 'includes/footer.php'; ?>
    
    <script src="assets/js/main.js"></script>
    <script>
        // Charger les chaînes publiques au chargement de la page
        document.addEventListener('DOMContentLoaded', function() {
            fetch('api/getChannels.php')
                .then(response => response.json())
                .then(data => {
                    if (data.success && data.channels) {
                        const publicChannels = data.channels.filter(channel => channel.is_public);
                        renderChannels('public-channels', publicChannels);
                    }
                })
                .catch(error => {
                    console.error('Erreur lors du chargement des chaînes:', error);
                });
        });
    </script>
</body>
</html>