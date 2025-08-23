<?php
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../includes/functions.php';

// Headers CORS et JSON
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');
header('Content-Type: application/json; charset=utf-8');

// Gestion des requêtes OPTIONS (preflight)
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit;
}

// Vérifier la méthode HTTP
if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    respondError('Méthode non autorisée', 405);
}

try {
    // Paramètres de filtrage et pagination
    $category = trim($_GET['category'] ?? '');
    $language = trim($_GET['language'] ?? '');
    $search = trim($_GET['search'] ?? '');
    $publicOnly = isset($_GET['public_only']) ? (bool)$_GET['public_only'] : true;
    $page = max(1, (int)($_GET['page'] ?? 1));
    $limit = min(50, max(1, (int)($_GET['limit'] ?? 20)));
    $offset = ($page - 1) * $limit;
    
    // Construction de la requête SQL
    $whereConditions = [];
    $params = [];
    
    if ($publicOnly) {
        $whereConditions[] = 'c.is_public = 1';
    }
    
    if ($category) {
        $whereConditions[] = 'c.category = ?';
        $params[] = $category;
    }
    
    if ($language) {
        $whereConditions[] = 'c.language = ?';
        $params[] = $language;
    }
    
    if ($search) {
        $whereConditions[] = '(c.name LIKE ? OR c.description LIKE ?)';
        $searchTerm = '%' . $search . '%';
        $params[] = $searchTerm;
        $params[] = $searchTerm;
    }
    
    $whereClause = !empty($whereConditions) ? 'WHERE ' . implode(' AND ', $whereConditions) : '';
    
    if ($pdo) {
        // Compter le total des résultats
        $countSql = "SELECT COUNT(*) FROM channels c $whereClause";
        $countStmt = $pdo->prepare($countSql);
        $countStmt->execute($params);
        $totalCount = $countStmt->fetchColumn();
        
        // Récupérer les chaînes avec pagination
        $sql = "
            SELECT 
                c.id,
                c.name,
                c.description,
                c.stream_url,
                c.logo_url,
                c.category,
                c.language,
                c.is_public,
                c.created_at,
                c.updated_at,
                c.viewers,
                c.epg_id
            FROM channels c 
            $whereClause
            ORDER BY c.name ASC
            LIMIT ? OFFSET ?
        ";
        
        $params[] = $limit;
        $params[] = $offset;
        
        $stmt = $pdo->prepare($sql);
        $stmt->execute($params);
        $channels = $stmt->fetchAll();
        
        // Ajouter les informations de statut pour chaque chaîne
        foreach ($channels as &$channel) {
            $channel['status'] = getChannelInfo($channel['stream_url']);
            $channel['is_favorite'] = false;
            
            // Vérifier si la chaîne est dans les favoris de l'utilisateur connecté
            if (isUserLoggedIn()) {
                $channel['is_favorite'] = isChannelFavorite($_SESSION['user_id'], $channel['id']);
            }
        }
        
        // Récupérer les catégories disponibles
        $catStmt = $pdo->prepare('SELECT DISTINCT category FROM channels WHERE category IS NOT NULL AND category != "" ORDER BY category');
        $catStmt->execute();
        $categories = $catStmt->fetchAll(PDO::FETCH_COLUMN);
        
        // Récupérer les langues disponibles
        $langStmt = $pdo->prepare('SELECT DISTINCT language FROM channels WHERE language IS NOT NULL AND language != "" ORDER BY language');
        $langStmt->execute();
        $languages = $langStmt->fetchAll(PDO::FETCH_COLUMN);
        
        $response = [
            'success' => true,
            'data' => [
                'channels' => $channels,
                'pagination' => [
                    'page' => $page,
                    'limit' => $limit,
                    'total' => $totalCount,
                    'pages' => ceil($totalCount / $limit)
                ],
                'filters' => [
                    'categories' => $categories,
                    'languages' => $languages
                ]
            ]
        ];
        
    } else {
        // Mode démo sans base de données
        $demoChannels = [
            [
                'id' => 1,
                'name' => 'Demo HLS',
                'description' => 'Chaîne de démonstration HLS pour tester le lecteur',
                'stream_url' => 'https://test-streams.mux.dev/x36xhzz/x36xhzz.m3u8',
                'logo_url' => getAssetUrl('img/placeholder.jpg'),
                'category' => 'Démo',
                'language' => 'Français',
                'is_public' => 1,
                'created_at' => date('Y-m-d H:i:s', time() - 86400),
                'updated_at' => date('Y-m-d H:i:s', time() - 3600),
                'viewers' => 42,
                'epg_id' => 'demo1',
                'status' => getChannelInfo('https://test-streams.mux.dev/x36xhzz/x36xhzz.m3u8'),
                'is_favorite' => false
            ],
            [
                'id' => 2,
                'name' => 'Big Buck Bunny',
                'description' => 'Film d\'animation open source en streaming HLS',
                'stream_url' => 'https://test-streams.mux.dev/bbb-abr/bbb.m3u8',
                'logo_url' => getAssetUrl('img/placeholder.jpg'),
                'category' => 'Film',
                'language' => 'Anglais',
                'is_public' => 1,
                'created_at' => date('Y-m-d H:i:s', time() - 172800),
                'updated_at' => date('Y-m-d H:i:s', time() - 7200),
                'viewers' => 28,
                'epg_id' => 'demo2',
                'status' => getChannelInfo('https://test-streams.mux.dev/bbb-abr/bbb.m3u8'),
                'is_favorite' => false
            ],
            [
                'id' => 3,
                'name' => 'Sintel',
                'description' => 'Court métrage d\'animation en streaming HLS',
                'stream_url' => 'https://test-streams.mux.dev/sintel/sintel.m3u8',
                'logo_url' => getAssetUrl('img/placeholder.jpg'),
                'category' => 'Film',
                'language' => 'Anglais',
                'is_public' => 1,
                'created_at' => date('Y-m-d H:i:s', time() - 259200),
                'updated_at' => date('Y-m-d H:i:s', time() - 10800),
                'viewers' => 15,
                'epg_id' => 'demo3',
                'status' => getChannelInfo('https://test-streams.mux.dev/sintel/sintel.m3u8'),
                'is_favorite' => false
            ]
        ];
        
        // Appliquer les filtres en mode démo
        if ($category) {
            $demoChannels = array_filter($demoChannels, function($ch) use ($category) {
                return $ch['category'] === $category;
            });
        }
        
        if ($language) {
            $demoChannels = array_filter($demoChannels, function($ch) use ($language) {
                return $ch['language'] === $language;
            });
        }
        
        if ($search) {
            $demoChannels = array_filter($demoChannels, function($ch) use ($search) {
                return stripos($ch['name'], $search) !== false || 
                       stripos($ch['description'], $search) !== false;
            });
        }
        
        // Pagination en mode démo
        $totalCount = count($demoChannels);
        $demoChannels = array_slice($demoChannels, $offset, $limit);
        
        $response = [
            'success' => true,
            'data' => [
                'channels' => array_values($demoChannels),
                'pagination' => [
                    'page' => $page,
                    'limit' => $limit,
                    'total' => $totalCount,
                    'pages' => ceil($totalCount / $limit)
                ],
                'filters' => [
                    'categories' => ['Démo', 'Film', 'Série', 'Sport', 'News'],
                    'languages' => ['Français', 'Anglais', 'Espagnol', 'Allemand']
                ]
            ]
        ];
    }
    
    // Log de l'action si l'utilisateur est connecté
    if (isUserLoggedIn()) {
        logUserAction($_SESSION['user_id'], 'get_channels', [
            'filters' => ['category' => $category, 'language' => $language, 'search' => $search],
            'page' => $page,
            'limit' => $limit
        ]);
    }
    
    echo json_encode($response, JSON_UNESCAPED_UNICODE);
    
} catch (Exception $e) {
    error_log("Erreur API getChannels: " . $e->getMessage());
    respondError('Erreur interne du serveur', 500);
}
?>