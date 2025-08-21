    </main>
    
    <footer class="site-footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3><?php echo APP_NAME; ?></h3>
                    <p>Votre plateforme IPTV personnalisée pour regarder vos chaînes préférées.</p>
                </div>
                
                <div class="footer-section">
                    <h4>Liens rapides</h4>
                    <ul class="footer-links">
                        <li><a href="<?php echo getBaseUrl(); ?>">Accueil</a></li>
                        <li><a href="<?php echo getPageUrl('channels.php'); ?>">Chaînes</a></li>
                        <li><a href="<?php echo getPageUrl('about.php'); ?>">À propos</a></li>
                        <li><a href="<?php echo getPageUrl('contact.php'); ?>">Contact</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h4>Support</h4>
                    <ul class="footer-links">
                        <li><a href="<?php echo getPageUrl('help.php'); ?>">Aide</a></li>
                        <li><a href="<?php echo getPageUrl('faq.php'); ?>">FAQ</a></li>
                        <li><a href="<?php echo getPageUrl('terms.php'); ?>">Conditions d'utilisation</a></li>
                        <li><a href="<?php echo getPageUrl('privacy.php'); ?>">Politique de confidentialité</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h4>Suivez-nous</h4>
                    <div class="social-links">
                        <a href="#" class="social-link" aria-label="Facebook">
                            <i class="icon-facebook"></i>
                        </a>
                        <a href="#" class="social-link" aria-label="Twitter">
                            <i class="icon-twitter"></i>
                        </a>
                        <a href="#" class="social-link" aria-label="Instagram">
                            <i class="icon-instagram"></i>
                        </a>
                        <a href="#" class="social-link" aria-label="YouTube">
                            <i class="icon-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <div class="footer-info">
                    <p>&copy; <?php echo date('Y'); ?> <?php echo APP_NAME; ?>. Tous droits réservés.</p>
                    <p>Version <?php echo APP_VERSION; ?></p>
                </div>
                
                <div class="footer-legal">
                    <a href="<?php echo getPageUrl('terms.php'); ?>">Conditions</a>
                    <span class="separator">|</span>
                    <a href="<?php echo getPageUrl('privacy.php'); ?>">Confidentialité</a>
                    <span class="separator">|</span>
                    <a href="<?php echo getPageUrl('cookies.php'); ?>">Cookies</a>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- Scripts JavaScript -->
    <script src="<?php echo getAssetUrl('js/main.js'); ?>"></script>
    
    <!-- Script pour le menu mobile -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
            const mobileNav = document.querySelector('.mobile-nav');
            const body = document.body;
            
            if (mobileMenuToggle && mobileNav) {
                mobileMenuToggle.addEventListener('click', function() {
                    mobileNav.classList.toggle('active');
                    mobileMenuToggle.classList.toggle('active');
                    body.classList.toggle('menu-open');
                });
                
                // Fermer le menu en cliquant sur un lien
                const mobileLinks = mobileNav.querySelectorAll('a');
                mobileLinks.forEach(link => {
                    link.addEventListener('click', function() {
                        mobileNav.classList.remove('active');
                        mobileMenuToggle.classList.remove('active');
                        body.classList.remove('menu-open');
                    });
                });
            }
            
            // Fermer le menu en cliquant à l'extérieur
            document.addEventListener('click', function(event) {
                if (!mobileMenuToggle.contains(event.target) && !mobileNav.contains(event.target)) {
                    mobileNav.classList.remove('active');
                    mobileMenuToggle.classList.remove('active');
                    body.classList.remove('menu-open');
                }
            });
        });
    </script>
    
    <!-- Script pour le dropdown utilisateur -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const userDropdownBtn = document.querySelector('.user-dropdown-btn');
            const userDropdownContent = document.querySelector('.user-dropdown-content');
            
            if (userDropdownBtn && userDropdownContent) {
                userDropdownBtn.addEventListener('click', function(e) {
                    e.stopPropagation();
                    userDropdownContent.classList.toggle('active');
                });
                
                // Fermer le dropdown en cliquant à l'extérieur
                document.addEventListener('click', function() {
                    userDropdownContent.classList.remove('active');
                });
            }
        });
    </script>
</body>
</html>