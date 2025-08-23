<?php
// Configuration de l'application IPTV Project

// Paramètres de base de données
define('DB_HOST', 'localhost');
define('DB_NAME', 'iptv_project');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_CHARSET', 'utf8mb4');

// Configuration de l'application
define('APP_NAME', 'IPTV Project');
define('APP_URL', 'http://localhost/IPTVProject');
define('APP_VERSION', '1.0.0');

// Configuration des sessions
define('SESSION_LIFETIME', 3600); // 1 heure
define('SESSION_NAME', 'iptv_session');

// Configuration des chemins
define('ROOT_PATH', __DIR__);
define('INCLUDES_PATH', ROOT_PATH . '/includes');
define('PAGES_PATH', ROOT_PATH . '/pages');
define('API_PATH', ROOT_PATH . '/api');
define('ASSETS_PATH', ROOT_PATH . '/assets');
define('PLAYER_PATH', ROOT_PATH . '/player');

// Configuration des chaînes IPTV
define('DEFAULT_STREAM_QUALITY', '720p');
define('MAX_FAVORITES_PER_USER', 100);

// Connexion à la base de données
try {
    $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET;
    $pdo = new PDO($dsn, DB_USER, DB_PASS, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ]);
} catch (PDOException $e) {
    // En mode développement, on peut afficher l'erreur
    if (defined('DEVELOPMENT_MODE') && DEVELOPMENT_MODE) {
        die("Erreur de connexion à la base de données : " . $e->getMessage());
    } else {
        // En production, on log l'erreur et on continue
        error_log("Erreur de connexion à la base de données : " . $e->getMessage());
        $pdo = null;
    }
}

// Configuration des sessions
ini_set('session.gc_maxlifetime', SESSION_LIFETIME);
ini_set('session.cookie_lifetime', SESSION_LIFETIME);
ini_set('session.name', SESSION_NAME);

// Fonctions utilitaires
function getBaseUrl() {
    return APP_URL;
}

function getAssetUrl($path) {
    return getBaseUrl() . '/assets/' . ltrim($path, '/');
}

function getPageUrl($page) {
    return getBaseUrl() . '/pages/' . ltrim($page, '/');
}

function getApiUrl($endpoint) {
    return getBaseUrl() . '/api/' . ltrim($endpoint, '/');
}

// Configuration des erreurs
if (defined('DEVELOPMENT_MODE') && DEVELOPMENT_MODE) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
} else {
    error_reporting(0);
    ini_set('display_errors', 0);
}

// Configuration du fuseau horaire
date_default_timezone_set('Europe/Paris');
?>