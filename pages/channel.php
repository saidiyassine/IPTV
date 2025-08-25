<?php
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../includes/functions.php';

$page_title = 'Lecture de chaîne';
$page_description = 'Regardez votre chaîne IPTV préférée';

// Récupérer l'ID de la chaîne
$channelId = isset($_GET['id']) ? (int)$_GET['id'] : 0;

if (!$channelId) {
    header('Location: /iptv/pages/channel.php');
    exit;
}

// Récupérer les informations de la chaîne
$channel = null;
$isFavorite = false;

if ($pdo) {
    try {
        $stmt = $pdo->prepare('SELECT * FROM channels WHERE id = ?');
        $stmt->execute([$channelId]);
        $channel = $stmt->fetch();
        
        if ($channel && isUserLoggedIn()) {
            $stmt = $pdo->prepare('SELECT COUNT(*) FROM favorites WHERE user_id = ? AND channel_id = ?');
            $stmt->execute([$_SESSION['user_id'], $channelId]);
            $isFavorite = $stmt->fetchColumn() > 0;
        }
    } catch (Exception $e) {
        error_log("Erreur récupération chaîne: " . $e->getMessage());
    }
}

// Si la chaîne n'existe pas en base, utiliser les données de démo
if (!$channel) {
    $channel = [
        'id' => $channelId,
        'name' => 'Chaîne Démo ' . $channelId,
        'stream_url' => 'https://test-streams.mux.dev/x36xhzz/x36xhzz.m3u8',
        'logo_url' => getAssetUrl('img/placeholder.jpg'),
        'description' => 'Chaîne de démonstration pour tester le lecteur IPTV',
        'category' => 'Démo',
        'language' => 'Français',
        'is_public' => 1
    ];
}

$page_title = $channel['name'] . ' - IPTV Project';
$page_description = 'Regardez ' . $channel['name'] . ' en direct';

// Récupérer les chaînes similaires
$similarChannels = [];
if ($pdo && isset($channel['category'])) {
    try {
        $stmt = $pdo->prepare('
            SELECT * FROM channels 
            WHERE category = ? AND id != ? AND is_public = 1 
            LIMIT 6
        ');
        $stmt->execute([$channel['category'], $channelId]);
        $similarChannels = $stmt->fetchAll();
    } catch (Exception $e) {
        error_log("Erreur chaînes similaires: " . $e->getMessage());
    }
}

// Si pas de chaînes similaires, utiliser des chaînes de démo
if (empty($similarChannels)) {
    $similarChannels = [
        [
            'id' => 1,
            'name' => 'Demo HLS',
            'logo_url' => getAssetUrl('img/placeholder.jpg')
        ],
        [
            'id' => 2,
            'name' => 'Big Buck Bunny',
            'logo_url' => getAssetUrl('img/placeholder.jpg')
        ]
    ];
}
?>

<?php
// Include the head section
include_once '../includes/head.php';
?>

<body class="primary-bg-color" data-phone-cc-input="1">

<?php
// Include the header
include_once '../includes/header.php';
?>

<div class="container">
    <!-- En-tête de la chaîne -->
    <div class="channel-header">
        <div class="channel-info">
            <div class="channel-logo">
                <img src="<?php echo htmlspecialchars($channel['logo_url']); ?>" 
                     alt="<?php echo htmlspecialchars($channel['name']); ?>">
            </div>
            <div class="channel-details">
                <h1><?php echo htmlspecialchars($channel['name']); ?></h1>
                <?php if (isset($channel['category'])): ?>
                    <span class="channel-category"><?php echo htmlspecialchars($channel['category']); ?></span>
                <?php endif; ?>
                <?php if (isset($channel['language'])): ?>
                    <span class="channel-language"><?php echo htmlspecialchars($channel['language']); ?></span>
                <?php endif; ?>
            </div>
        </div>
        
        <div class="channel-actions">
            <?php if (isUserLoggedIn()): ?>
                <button id="favorite-btn" class="btn <?php echo $isFavorite ? 'btn-primary' : 'btn-outline'; ?>" 
                        onclick="toggleFavorite(<?php echo $channelId; ?>)">
                    <i class="icon-heart<?php echo $isFavorite ? '' : '-off'; ?>"></i>
                    <?php echo $isFavorite ? 'Retirer des favoris' : 'Ajouter aux favoris'; ?>
                </button>
            <?php else: ?>
                <a href="<?php echo getPageUrl('login.php'); ?>" class="btn btn-outline">
                    <i class="icon-heart"></i>
                    Se connecter pour ajouter aux favoris
                </a>
            <?php endif; ?>
            
            <button class="btn btn-outline" onclick="shareChannel()">
                <i class="icon-share"></i>
                Partager
            </button>
        </div>
    </div>
    
    <!-- Lecteur vidéo -->
    <div class="player-section">
        <div class="player-wrapper">
            <video id="iptv-player" class="video-player" controls playsinline>
                <source src="<?php echo htmlspecialchars($channel['stream_url']); ?>" type="application/x-mpegURL">
                Votre navigateur ne supporte pas la lecture de vidéos HLS.
            </video>
            
            <!-- Contrôles personnalisés -->
            <div class="player-controls">
                <div class="control-group">
                    <button class="control-btn" onclick="toggleFullscreen()">
                        <i class="icon-fullscreen"></i>
                    </button>
                    <button class="control-btn" onclick="toggleMute()">
                        <i class="icon-volume"></i>
                    </button>
                </div>
                
                <div class="control-group">
                    <button class="control-btn" onclick="decreaseVolume()">
                        <i class="icon-volume-down"></i>
                    </button>
                    <button class="control-btn" onclick="increaseVolume()">
                        <i class="icon-volume-up"></i>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Informations de la chaîne -->
        <div class="channel-description">
            <h3>À propos de cette chaîne</h3>
            <p><?php echo htmlspecialchars($channel['description'] ?? 'Aucune description disponible pour cette chaîne.'); ?></p>
            
            <div class="channel-meta">
                <?php if (isset($channel['created_at'])): ?>
                    <div class="meta-item">
                        <i class="icon-calendar"></i>
                        <span>Ajoutée le <?php echo formatDate($channel['created_at']); ?></span>
                    </div>
                <?php endif; ?>
                
                <?php if (isset($channel['viewers'])): ?>
                    <div class="meta-item">
                        <i class="icon-users"></i>
                        <span><?php echo $channel['viewers']; ?> spectateurs</span>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    
    <!-- Chaînes similaires -->
    <section class="similar-channels">
        <h2>Chaînes similaires</h2>
        <div class="channel-grid">
            <?php foreach ($similarChannels as $similar): ?>
                <div class="channel-card">
                    <div class="channel-image">
                        <img src="<?php echo htmlspecialchars($similar['logo_url']); ?>" 
                             alt="<?php echo htmlspecialchars($similar['name']); ?>"
                             loading="lazy">
                        <div class="channel-overlay">
                            <a href="<?php echo getPageUrl('channel.php'); ?>?id=<?php echo $similar['id']; ?>" 
                               class="btn btn-primary btn-sm">
                                <i class="icon-play"></i>
                                Regarder
                            </a>
                        </div>
                    </div>
                    <div class="channel-content">
                        <h3 class="channel-name"><?php echo htmlspecialchars($similar['name']); ?></h3>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</div>

<!-- Scripts du lecteur -->
<script src="<?php echo getAssetUrl('js/player.js'); ?>"></script>
<script>
// Initialisation du lecteur
document.addEventListener('DOMContentLoaded', function() {
    const player = document.getElementById('iptv-player');
    
    // Initialiser HLS si supporté
    if (typeof Hls !== 'undefined' && Hls.isSupported()) {
        const hls = new Hls({
            debug: false,
            enableWorker: true,
            lowLatencyMode: true
        });
        
        hls.loadSource('<?php echo $channel['stream_url']; ?>');
        hls.attachMedia(player);
        
        hls.on(Hls.Events.MANIFEST_PARSED, function() {
            console.log('HLS manifest chargé');
        });
        
        hls.on(Hls.Events.ERROR, function(event, data) {
            console.error('Erreur HLS:', data);
        });
    } else if (player.canPlayType('application/vnd.apple.mpegurl')) {
        // Support natif Safari
        player.src = '<?php echo $channel['stream_url']; ?>';
    } else {
        console.warn('HLS non supporté dans ce navigateur');
    }
    
    // Gestion des erreurs de lecture
    player.addEventListener('error', function(e) {
        console.error('Erreur de lecture:', e);
        showErrorMessage('Erreur lors de la lecture de la chaîne. Veuillez réessayer.');
    });
});

// Fonction pour ajouter/retirer des favoris
function toggleFavorite(channelId) {
    <?php if (isUserLoggedIn()): ?>
        const isFavorite = <?php echo $isFavorite ? 'true' : 'false'; ?>;
        const action = isFavorite ? 'removeFavorite' : 'addFavorite';
        
        fetch('<?php echo getApiUrl(''); ?>' + action + '.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ channelId: channelId })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                const btn = document.getElementById('favorite-btn');
                if (isFavorite) {
                    btn.className = 'btn btn-outline';
                    btn.innerHTML = '<i class="icon-heart-off"></i> Ajouter aux favoris';
                    btn.onclick = function() { toggleFavorite(channelId); };
                } else {
                    btn.className = 'btn btn-primary';
                    btn.innerHTML = '<i class="icon-heart"></i> Retirer des favoris';
                    btn.onclick = function() { toggleFavorite(channelId); };
                }
                
                showMessage(isFavorite ? 'Chaîne retirée des favoris' : 'Chaîne ajoutée aux favoris', 'success');
            } else {
                showMessage('Erreur: ' + (data.error || 'Action impossible'), 'error');
            }
        })
        .catch(error => {
            console.error('Erreur:', error);
            showMessage('Erreur lors de l\'action', 'error');
        });
    <?php else: ?>
        window.location.href = '<?php echo getPageUrl('login.php'); ?>';
    <?php endif; ?>
}

// Fonction de partage
function shareChannel() {
    const url = window.location.href;
    const title = '<?php echo addslashes($channel['name']); ?>';
    
    if (navigator.share) {
        navigator.share({
            title: title,
            url: url
        });
    } else {
        // Fallback pour les navigateurs sans API de partage
        navigator.clipboard.writeText(url).then(function() {
            showMessage('Lien copié dans le presse-papiers', 'success');
        });
    }
}

// Contrôles du lecteur
function toggleFullscreen() {
    const player = document.getElementById('iptv-player');
    if (document.fullscreenElement) {
        document.exitFullscreen();
    } else {
        player.requestFullscreen();
    }
}

function toggleMute() {
    const player = document.getElementById('iptv-player');
    player.muted = !player.muted;
}

function decreaseVolume() {
    const player = document.getElementById('iptv-player');
    player.volume = Math.max(0, player.volume - 0.1);
}

function increaseVolume() {
    const player = document.getElementById('iptv-player');
    player.volume = Math.min(1, player.volume + 0.1);
}

// Affichage des messages
function showMessage(message, type = 'info') {
    const alertDiv = document.createElement('div');
    alertDiv.className = `alert alert-${type}`;
    alertDiv.innerHTML = `<i class="icon-${type === 'success' ? 'check' : 'alert'}"></i> ${message}`;
    
    document.querySelector('.container').insertBefore(alertDiv, document.querySelector('.channel-header'));
    
    setTimeout(() => {
        alertDiv.remove();
    }, 5000);
}

function showErrorMessage(message) {
    showMessage(message, 'error');
}
</script>

<?php include __DIR__ . '/../includes/footer.php'; ?>