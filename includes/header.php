<?php
// Démarrer la session si elle n'est pas déjà démarrée
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title . ' - ' . APP_NAME : APP_NAME; ?></title>
    <meta name="description" content="<?php echo isset($page_description) ? $page_description : 'Plateforme IPTV personnalisée'; ?>">
    
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo getAssetUrl('css/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo getAssetUrl('css/responsive.css'); ?>">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo getAssetUrl('img/favicon.ico'); ?>">
    
    <!-- Meta tags pour les réseaux sociaux -->
    <meta property="og:title" content="<?php echo isset($page_title) ? $page_title . ' - ' . APP_NAME : APP_NAME; ?>">
    <meta property="og:description" content="<?php echo isset($page_description) ? $page_description : 'Plateforme IPTV personnalisée'; ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo getBaseUrl(); ?>">
</head>
<body>
    <header class="site-header">
        <div class="container">
            <div class="header-content">
                <!-- Logo et nom du site -->
                <div class="logo">
                    <a href="<?php echo getBaseUrl(); ?>">
                        <img src="<?php echo getAssetUrl('img/logo.png'); ?>" alt="<?php echo APP_NAME; ?>" class="logo-img">
                        <span class="logo-text"><?php echo APP_NAME; ?></span>
                    </a>
                </div>
                
                <!-- Navigation principale -->
                <nav class="main-nav">
                    <ul class="nav-list">
                        <li><a href="<?php echo getBaseUrl(); ?>" class="nav-link">Accueil</a></li>
                        <li><a href="<?php echo getPageUrl('channels.php'); ?>" class="nav-link">Chaînes</a></li>
                        <?php if (isset($_SESSION['user_id'])): ?>
                            <li><a href="<?php echo getPageUrl('dashboard.php'); ?>" class="nav-link">Dashboard</a></li>
                            <li><a href="<?php echo getPageUrl('favorites.php'); ?>" class="nav-link">Favoris</a></li>
                        <?php endif; ?>
                    </ul>
                </nav>
                
                <!-- Menu utilisateur -->
                <div class="user-menu">
                    <?php if (isset($_SESSION['user_id'])): ?>
                        <div class="user-info">
                            <span class="user-email"><?php echo htmlspecialchars($_SESSION['user_email']); ?></span>
                            <div class="user-dropdown">
                                <button class="user-dropdown-btn">▼</button>
                                <div class="user-dropdown-content">
                                    <a href="<?php echo getPageUrl('profile.php'); ?>">Profil</a>
                                    <a href="<?php echo getPageUrl('settings.php'); ?>">Paramètres</a>
                                    <a href="<?php echo getPageUrl('logout.php'); ?>">Déconnexion</a>
                                </div>
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="auth-buttons">
                            <a href="<?php echo getPageUrl('login.php'); ?>" class="btn btn-outline">Connexion</a>
                            <a href="<?php echo getPageUrl('register.php'); ?>" class="btn btn-primary">Inscription</a>
                        </div>
                    <?php endif; ?>
                </div>
                
                <!-- Menu mobile -->
                <button class="mobile-menu-toggle" aria-label="Menu mobile">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </header>
    
    <!-- Navigation mobile -->
    <nav class="mobile-nav">
        <ul class="mobile-nav-list">
            <li><a href="<?php echo getBaseUrl(); ?>">Accueil</a></li>
            <li><a href="<?php echo getPageUrl('channels.php'); ?>">Chaînes</a></li>
            <?php if (isset($_SESSION['user_id'])): ?>
                <li><a href="<?php echo getPageUrl('dashboard.php'); ?>">Dashboard</a></li>
                <li><a href="<?php echo getPageUrl('favorites.php'); ?>">Favoris</a></li>
                <li><a href="<?php echo getPageUrl('profile.php'); ?>">Profil</a></li>
                <li><a href="<?php echo getPageUrl('logout.php'); ?>">Déconnexion</a></li>
            <?php else: ?>
                <li><a href="<?php echo getPageUrl('login.php'); ?>">Connexion</a></li>
                <li><a href="<?php echo getPageUrl('register.php'); ?>">Inscription</a></li>
            <?php endif; ?>
        </ul>
    </nav>
    
    <main class="main-content">