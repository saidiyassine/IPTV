<?php
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../includes/functions.php';

// Vérifier que l'utilisateur est connecté
requireLogin();

$page_title = 'Tableau de bord';
$page_description = 'Gérez vos chaînes favorites et vos préférences';

$userId = $_SESSION['user_id'];
$userEmail = $_SESSION['user_email'];

// Récupérer les statistiques utilisateur
$stats = [
    'total_favorites' => 0,
    'total_channels' => 0,
    'last_login' => $_SESSION['login_time'] ?? time()
];

// Récupérer les chaînes favorites
$favorites = [];
if ($pdo) {
    try {
        // Compter les favoris
        $stmt = $pdo->prepare('SELECT COUNT(*) FROM favorites WHERE user_id = ?');
        $stmt->execute([$userId]);
        $stats['total_favorites'] = $stmt->fetchColumn();
        
        // Compter le total des chaînes
        $stmt = $pdo->prepare('SELECT COUNT(*) FROM channels');
        $stmt->execute();
        $stats['total_channels'] = $stmt->fetchColumn();
        
        // Récupérer les favoris avec les infos des chaînes
        $stmt = $pdo->prepare('
            SELECT c.*, f.created_at as favorite_date 
            FROM channels c 
            INNER JOIN favorites f ON c.id = f.channel_id 
            WHERE f.user_id = ? 
            ORDER BY f.created_at DESC 
            LIMIT 12
        ');
        $stmt->execute([$userId]);
        $favorites = $stmt->fetchAll();
        
    } catch (Exception $e) {
        error_log("Erreur dashboard: " . $e->getMessage());
    }
} else {
    // Mode démo
    $stats['total_favorites'] = 2;
    $stats['total_channels'] = 5;
    $favorites = [
        [
            'id' => 1,
            'name' => 'Demo HLS',
            'stream_url' => 'https://test-streams.mux.dev/x36xhzz/x36xhzz.m3u8',
            'logo_url' => getAssetUrl('img/placeholder.jpg'),
            'favorite_date' => date('Y-m-d H:i:s', time() - 3600)
        ],
        [
            'id' => 2,
            'name' => 'Big Buck Bunny',
            'stream_url' => 'https://test-streams.mux.dev/bbb-abr/bbb.m3u8',
            'logo_url' => getAssetUrl('img/placeholder.jpg'),
            'favorite_date' => date('Y-m-d H:i:s', time() - 7200)
        ]
    ];
}

// Récupérer le message flash
$flash = getFlashMessage();
?>

<?php include __DIR__ . '/../includes/header.php'; ?>

<div class="container">
    <div class="dashboard-header">
        <div class="welcome-section">
            <h1>Bonjour, <?php echo htmlspecialchars($userEmail); ?> !</h1>
            <p>Bienvenue sur votre tableau de bord personnel</p>
        </div>
        
        <div class="quick-actions">
            <a href="<?php echo getPageUrl('channels.php'); ?>" class="btn btn-outline">
                <i class="icon-tv"></i>
                Parcourir les chaînes
            </a>
            <a href="<?php echo getPageUrl('profile.php'); ?>" class="btn btn-outline">
                <i class="icon-user"></i>
                Mon profil
            </a>
        </div>
    </div>
    
    <?php if ($flash): ?>
        <div class="alert alert-<?php echo $flash['type']; ?>">
            <i class="icon-<?php echo $flash['type'] === 'success' ? 'check' : 'alert'; ?>"></i>
            <?php echo htmlspecialchars($flash['message']); ?>
        </div>
    <?php endif; ?>
    
    <!-- Statistiques -->
    <section class="stats-section">
        <h2>Vos statistiques</h2>
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="icon-heart"></i>
                </div>
                <div class="stat-content">
                    <h3><?php echo $stats['total_favorites']; ?></h3>
                    <p>Chaînes favorites</p>
                </div>
            </div>
            
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="icon-tv"></i>
                </div>
                <div class="stat-content">
                    <h3><?php echo $stats['total_channels']; ?></h3>
                    <p>Chaînes disponibles</p>
                </div>
            </div>
            
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="icon-clock"></i>
                </div>
                <div class="stat-content">
                    <h3><?php echo formatDate($stats['last_login'], 'd/m/Y'); ?></h3>
                    <p>Dernière connexion</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Chaînes favorites -->
    <section class="favorites-section">
        <div class="section-header">
            <h2>Vos chaînes favorites</h2>
            <a href="<?php echo getPageUrl('favorites.php'); ?>" class="link">Voir tout</a>
        </div>
        
        <?php if (empty($favorites)): ?>
            <div class="empty-state">
                <div class="empty-icon">
                    <i class="icon-heart"></i>
                </div>
                <h3>Aucune chaîne favorite</h3>
                <p>Commencez à ajouter des chaînes à vos favoris pour les retrouver ici.</p>
                <a href="<?php echo getPageUrl('channels.php'); ?>" class="btn btn-primary">Découvrir des chaînes</a>
            </div>
        <?php else: ?>
            <div class="channel-grid">
                <?php foreach ($favorites as $channel): ?>
                    <div class="channel-card">
                        <div class="channel-image">
                            <img src="<?php echo htmlspecialchars($channel['logo_url']); ?>" 
                                 alt="<?php echo htmlspecialchars($channel['name']); ?>"
                                 loading="lazy">
                            <div class="channel-overlay">
                                <button class="btn btn-primary btn-sm play-btn" 
                                        onclick="playChannel(<?php echo $channel['id']; ?>)">
                                    <i class="icon-play"></i>
                                    Regarder
                                </button>
                            </div>
                        </div>
                        <div class="channel-content">
                            <h3 class="channel-name"><?php echo htmlspecialchars($channel['name']); ?></h3>
                            <p class="channel-date">
                                Ajouté le <?php echo formatDate($channel['favorite_date'], 'd/m/Y'); ?>
                            </p>
                            <div class="channel-actions">
                                <button class="btn btn-outline btn-sm" 
                                        onclick="removeFavorite(<?php echo $channel['id']; ?>)">
                                    <i class="icon-heart-off"></i>
                                    Retirer
                                </button>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </section>
    
    <!-- Activité récente -->
    <section class="recent-activity">
        <h2>Activité récente</h2>
        <div class="activity-list">
            <div class="activity-item">
                <div class="activity-icon">
                    <i class="icon-login"></i>
                </div>
                <div class="activity-content">
                    <p>Connexion réussie</p>
                    <small><?php echo formatDate($stats['last_login'], 'd/m/Y à H:i'); ?></small>
                </div>
            </div>
            
            <?php if (!empty($favorites)): ?>
                <div class="activity-item">
                    <div class="activity-icon">
                        <i class="icon-heart"></i>
                    </div>
                    <div class="activity-content">
                        <p>Ajout de "<?php echo htmlspecialchars($favorites[0]['name']); ?>" aux favoris</p>
                        <small><?php echo formatDate($favorites[0]['favorite_date'], 'd/m/Y à H:i'); ?></small>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>
</div>

<script>
function playChannel(channelId) {
    window.location.href = '<?php echo getPageUrl('channel.php'); ?>?id=' + channelId;
}

function removeFavorite(channelId) {
    if (confirm('Êtes-vous sûr de vouloir retirer cette chaîne de vos favoris ?')) {
        fetch('<?php echo getApiUrl('removeFavorite.php'); ?>', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ channelId: channelId })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Recharger la page pour mettre à jour l'affichage
                location.reload();
            } else {
                alert('Erreur: ' + (data.error || 'Impossible de retirer la chaîne'));
            }
        })
        .catch(error => {
            console.error('Erreur:', error);
            alert('Erreur lors de la suppression');
        });
    }
}

// Mise à jour automatique des statistiques
setInterval(function() {
    // Ici on pourrait faire un appel AJAX pour mettre à jour les stats en temps réel
}, 30000); // Toutes les 30 secondes
</script>

<?php include __DIR__ . '/../includes/footer.php'; ?>