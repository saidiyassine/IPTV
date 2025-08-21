<?php
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../includes/functions.php';

// Démarrer la session si elle n'est pas déjà démarrée
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Log de la déconnexion si l'utilisateur était connecté
if (isUserLoggedIn()) {
    try {
        if ($pdo) {
            logUserAction($_SESSION['user_id'], 'logout', ['ip' => getClientIP()]);
        }
    } catch (Exception $e) {
        error_log("Erreur lors du log de déconnexion: " . $e->getMessage());
    }
}

// Supprimer le cookie "Se souvenir de moi" s'il existe
if (isset($_COOKIE['remember_token'])) {
    setcookie('remember_token', '', time() - 3600, '/', '', true, true);
    
    // Supprimer le token de la base de données si possible
    if ($pdo && isset($_SESSION['user_id'])) {
        try {
            $stmt = $pdo->prepare('DELETE FROM remember_tokens WHERE user_id = ? AND token = ?');
            $stmt->execute([$_SESSION['user_id'], $_COOKIE['remember_token']]);
        } catch (Exception $e) {
            error_log("Erreur lors de la suppression du token: " . $e->getMessage());
        }
    }
}

// Nettoyer toutes les variables de session
$_SESSION = array();

// Détruire le cookie de session
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Détruire la session
session_destroy();

// Rediriger vers la page d'accueil avec un message de succès
$redirectUrl = getBaseUrl() . '?logout=success';
header('Location: ' . $redirectUrl);
exit;
?>