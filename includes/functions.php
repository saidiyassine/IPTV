<?php
/**
 * Fichier des fonctions utilitaires pour IPTV Project
 */

/**
 * Vérifie si l'utilisateur est connecté
 */
function isUserLoggedIn(): bool {
    return isset($_SESSION['user_id']) && !empty($_SESSION['user_id']);
}

/**
 * Redirige vers la page de connexion si l'utilisateur n'est pas connecté
 */
function requireLogin(): void {
    if (!isUserLoggedIn()) {
        $_SESSION['redirect_after_login'] = $_SERVER['REQUEST_URI'];
        header('Location: ' . getPageUrl('login.php'));
        exit;
    }
}

/**
 * Redirige vers la page d'accueil si l'utilisateur est déjà connecté
 */
function requireGuest(): void {
    if (isUserLoggedIn()) {
        header('Location: ' . getBaseUrl());
        exit;
    }
}

/**
 * Génère une réponse JSON
 */
function respondJson(array $data, int $statusCode = 200): void {
    http_response_code($statusCode);
    header('Content-Type: application/json');
    echo json_encode($data, JSON_UNESCAPED_UNICODE);
    exit;
}

/**
 * Génère une réponse d'erreur JSON
 */
function respondError(string $message, int $statusCode = 400): void {
    respondJson(['success' => false, 'error' => $message], $statusCode);
}

/**
 * Génère une réponse de succès JSON
 */
function respondSuccess(array $data = [], string $message = 'Opération réussie'): void {
    respondJson(['success' => true, 'message' => $message, 'data' => $data]);
}

/**
 * Valide et nettoie une adresse email
 */
function validateEmail(string $email): string|false {
    $email = trim($email);
    return filter_var($email, FILTER_VALIDATE_EMAIL) ? $email : false;
}

/**
 * Valide un mot de passe
 */
function validatePassword(string $password): bool {
    // Au moins 8 caractères, avec lettres, chiffres et caractères spéciaux
    return strlen($password) >= 8 && 
           preg_match('/[A-Za-z]/', $password) && 
           preg_match('/[0-9]/', $password);
}

/**
 * Hash un mot de passe
 */
function hashPassword(string $password): string {
    return password_hash($password, PASSWORD_DEFAULT);
}

/**
 * Vérifie un mot de passe
 */
function verifyPassword(string $password, string $hash): bool {
    return password_verify($password, $hash);
}

/**
 * Génère un token CSRF
 */
function generateCSRFToken(): string {
    if (!isset($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

/**
 * Vérifie un token CSRF
 */
function verifyCSRFToken(string $token): bool {
    return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
}

/**
 * Nettoie et sécurise une chaîne de caractères
 */
function sanitizeString(string $string): string {
    return htmlspecialchars(trim($string), ENT_QUOTES, 'UTF-8');
}

/**
 * Formate une date pour l'affichage
 */
function formatDate(string $date, string $format = 'd/m/Y H:i'): string {
    $timestamp = strtotime($date);
    return $timestamp ? date($format, $timestamp) : $date;
}

/**
 * Formate la durée en secondes
 */
function formatDuration(int $seconds): string {
    $hours = floor($seconds / 3600);
    $minutes = floor(($seconds % 3600) / 60);
    $secs = $seconds % 60;
    
    if ($hours > 0) {
        return sprintf('%02d:%02d:%02d', $hours, $minutes, $secs);
    }
    return sprintf('%02d:%02d', $minutes, $secs);
}

/**
 * Vérifie si une chaîne est en ligne
 */
function isChannelOnline(string $streamUrl): bool {
    $context = stream_context_create([
        'http' => [
            'timeout' => 5,
            'method' => 'HEAD'
        ]
    ]);
    
    $headers = @get_headers($streamUrl, 1, $context);
    return $headers && strpos($headers[0], '200') !== false;
}

/**
 * Récupère les informations d'une chaîne IPTV
 */
function getChannelInfo(string $streamUrl): array {
    $info = [
        'online' => false,
        'type' => 'unknown',
        'quality' => 'unknown'
    ];
    
    if (isChannelOnline($streamUrl)) {
        $info['online'] = true;
        
        // Détecter le type de stream
        if (strpos($streamUrl, '.m3u8') !== false) {
            $info['type'] = 'HLS';
        } elseif (strpos($streamUrl, '.mpd') !== false) {
            $info['type'] = 'DASH';
        } elseif (strpos($streamUrl, 'rtmp://') !== false) {
            $info['type'] = 'RTMP';
        } elseif (strpos($streamUrl, 'rtp://') !== false) {
            $info['type'] = 'RTP';
        }
    }
    
    return $info;
}

/**
 * Ajoute une chaîne aux favoris d'un utilisateur
 */
function addToFavorites(int $userId, int $channelId): bool {
    global $pdo;
    
    if (!$pdo) return false;
    
    try {
        $stmt = $pdo->prepare('INSERT IGNORE INTO favorites (user_id, channel_id, created_at) VALUES (?, ?, NOW())');
        return $stmt->execute([$userId, $channelId]);
    } catch (PDOException $e) {
        error_log("Erreur lors de l'ajout aux favoris: " . $e->getMessage());
        return false;
    }
}

/**
 * Supprime une chaîne des favoris d'un utilisateur
 */
function removeFromFavorites(int $userId, int $channelId): bool {
    global $pdo;
    
    if (!$pdo) return false;
    
    try {
        $stmt = $pdo->prepare('DELETE FROM favorites WHERE user_id = ? AND channel_id = ?');
        return $stmt->execute([$userId, $channelId]);
    } catch (PDOException $e) {
        error_log("Erreur lors de la suppression des favoris: " . $e->getMessage());
        return false;
    }
}

/**
 * Vérifie si une chaîne est dans les favoris d'un utilisateur
 */
function isChannelFavorite(int $userId, int $channelId): bool {
    global $pdo;
    
    if (!$pdo) return false;
    
    try {
        $stmt = $pdo->prepare('SELECT COUNT(*) FROM favorites WHERE user_id = ? AND channel_id = ?');
        $stmt->execute([$userId, $channelId]);
        return $stmt->fetchColumn() > 0;
    } catch (PDOException $e) {
        error_log("Erreur lors de la vérification des favoris: " . $e->getMessage());
        return false;
    }
}

/**
 * Récupère les chaînes favorites d'un utilisateur
 */
function getUserFavorites(int $userId): array {
    global $pdo;
    
    if (!$pdo) return [];
    
    try {
        $stmt = $pdo->prepare('
            SELECT c.*, f.created_at as favorite_date 
            FROM channels c 
            INNER JOIN favorites f ON c.id = f.channel_id 
            WHERE f.user_id = ? 
            ORDER BY f.created_at DESC
        ');
        $stmt->execute([$userId]);
        return $stmt->fetchAll();
    } catch (PDOException $e) {
        error_log("Erreur lors de la récupération des favoris: " . $e->getMessage());
        return [];
    }
}

/**
 * Log une action utilisateur
 */
function logUserAction(int $userId, string $action, array $details = []): void {
    global $pdo;
    
    if (!$pdo) return;
    
    try {
        $stmt = $pdo->prepare('
            INSERT INTO user_logs (user_id, action, details, ip_address, user_agent, created_at) 
            VALUES (?, ?, ?, ?, ?, NOW())
        ');
        $stmt->execute([
            $userId,
            $action,
            json_encode($details),
            $_SERVER['REMOTE_ADDR'] ?? 'unknown',
            $_SERVER['HTTP_USER_AGENT'] ?? 'unknown'
        ]);
    } catch (PDOException $e) {
        error_log("Erreur lors du log utilisateur: " . $e->getMessage());
    }
}

/**
 * Récupère l'adresse IP réelle du client
 */
function getClientIP(): string {
    $ipKeys = ['HTTP_X_FORWARDED_FOR', 'HTTP_X_REAL_IP', 'HTTP_CLIENT_IP', 'REMOTE_ADDR'];
    
    foreach ($ipKeys as $key) {
        if (array_key_exists($key, $_SERVER) === true) {
            foreach (explode(',', $_SERVER[$key]) as $ip) {
                $ip = trim($ip);
                if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false) {
                    return $ip;
                }
            }
        }
    }
    
    return $_SERVER['REMOTE_ADDR'] ?? 'unknown';
}

/**
 * Génère un nom de fichier sécurisé
 */
function generateSecureFilename(string $originalName): string {
    $extension = pathinfo($originalName, PATHINFO_EXTENSION);
    $filename = bin2hex(random_bytes(16));
    return $filename . '.' . $extension;
}

/**
 * Vérifie si la requête est en AJAX
 */
function isAjaxRequest(): bool {
    return !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && 
           strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest';
}

/**
 * Redirige avec un message flash
 */
function redirectWithMessage(string $url, string $message, string $type = 'info'): void {
    $_SESSION['flash_message'] = $message;
    $_SESSION['flash_type'] = $type;
    header('Location: ' . $url);
    exit;
}

/**
 * Récupère et supprime le message flash
 */
function getFlashMessage(): ?array {
    if (isset($_SESSION['flash_message'])) {
        $message = $_SESSION['flash_message'];
        $type = $_SESSION['flash_type'] ?? 'info';
        unset($_SESSION['flash_message'], $_SESSION['flash_type']);
        return ['message' => $message, 'type' => $type];
    }
    return null;
}
?>