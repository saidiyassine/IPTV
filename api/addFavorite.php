<?php
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../includes/functions.php';

// Headers CORS et JSON
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');
header('Content-Type: application/json; charset=utf-8');

// Gestion des requêtes OPTIONS (preflight)
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit;
}

// Vérifier la méthode HTTP
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    respondError('Méthode non autorisée', 405);
}

// Vérifier que l'utilisateur est connecté
if (!isUserLoggedIn()) {
    respondError('Utilisateur non connecté', 401);
}

try {
    // Récupérer les données JSON
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);
    
    if (!$data) {
        respondError('Données JSON invalides', 400);
    }
    
    // Valider les données
    $channelId = isset($data['channelId']) ? (int)$data['channelId'] : 0;
    
    if (!$channelId) {
        respondError('ID de chaîne manquant ou invalide', 400);
    }
    
    $userId = $_SESSION['user_id'];
    
    if ($pdo) {
        // Vérifier que la chaîne existe
        $stmt = $pdo->prepare('SELECT id, name, is_public FROM channels WHERE id = ?');
        $stmt->execute([$channelId]);
        $channel = $stmt->fetch();
        
        if (!$channel) {
            respondError('Chaîne introuvable', 404);
        }
        
        // Vérifier que la chaîne est publique
        if (!$channel['is_public']) {
            respondError('Cette chaîne n\'est pas accessible publiquement', 403);
        }
        
        // Vérifier si la chaîne n'est pas déjà dans les favoris
        $stmt = $pdo->prepare('SELECT COUNT(*) FROM favorites WHERE user_id = ? AND channel_id = ?');
        $stmt->execute([$userId, $channelId]);
        
        if ($stmt->fetchColumn() > 0) {
            respondError('Cette chaîne est déjà dans vos favoris', 409);
        }
        
        // Vérifier la limite de favoris par utilisateur
        $stmt = $pdo->prepare('SELECT COUNT(*) FROM favorites WHERE user_id = ?');
        $stmt->execute([$userId]);
        $favoritesCount = $stmt->fetchColumn();
        
        if ($favoritesCount >= MAX_FAVORITES_PER_USER) {
            respondError('Vous avez atteint la limite de ' . MAX_FAVORITES_PER_USER . ' chaînes favorites', 400);
        }
        
        // Ajouter aux favoris
        $stmt = $pdo->prepare('
            INSERT INTO favorites (user_id, channel_id, created_at) 
            VALUES (?, ?, NOW())
        ');
        
        if ($stmt->execute([$userId, $channelId])) {
            // Log de l'action
            logUserAction($userId, 'add_favorite', [
                'channel_id' => $channelId,
                'channel_name' => $channel['name']
            ]);
            
            // Récupérer les informations mises à jour
            $stmt = $pdo->prepare('
                SELECT c.*, f.created_at as favorite_date 
                FROM channels c 
                INNER JOIN favorites f ON c.id = f.channel_id 
                WHERE f.user_id = ? AND f.channel_id = ?
            ');
            $stmt->execute([$userId, $channelId]);
            $favoriteChannel = $stmt->fetch();
            
            respondSuccess([
                'favorite' => $favoriteChannel,
                'total_favorites' => $favoritesCount + 1
            ], 'Chaîne ajoutée aux favoris avec succès');
            
        } else {
            respondError('Erreur lors de l\'ajout aux favoris', 500);
        }
        
    } else {
        // Mode démo sans base de données
        respondSuccess([
            'favorite' => [
                'id' => $channelId,
                'name' => 'Chaîne Démo ' . $channelId,
                'stream_url' => 'https://test-streams.mux.dev/x36xhzz/x36xhzz.m3u8',
                'logo_url' => getAssetUrl('img/placeholder.jpg'),
                'favorite_date' => date('Y-m-d H:i:s')
            ],
            'total_favorites' => 1
        ], 'Chaîne ajoutée aux favoris (mode démo)');
    }
    
} catch (Exception $e) {
    error_log("Erreur API addFavorite: " . $e->getMessage());
    respondError('Erreur interne du serveur', 500);
}
?>