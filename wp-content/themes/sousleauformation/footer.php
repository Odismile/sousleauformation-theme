<footer>
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <p class="footer-title">Sous L'Eau Formation</p>
                    <p class="footer-p">Centre de Formation SDI 5* ITF.<br> Saint-Raphaël, France & Nosy Be, Madagascar.</p>
                </div>
    
                <div class="col-12 col-md-4">
                    <p class="footer-title">Sous L'Eau Formation</p>
                    <?php wp_nav_menu([
                        'theme_location' => 'footer',
                        'container' => false,
                        'menu_class' => 'nav'
                    ]); ?>
                </div>
    
                <div class="col-12 col-md-4">
                    <p class="footer-title">Contact</p>
                    <p class="footer-p">+33 (0)6 61 03 82 18 <br><a href="mailto:sous.leau.formation@gmail.com">sous.leau.formation@gmail.com</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <p class="copyright text-center">© 2025 Sous L'eau Formation. Tous droits réservés.</p>
    </div>
</footer>


<?php wp_footer(); ?>
</body>

</html>