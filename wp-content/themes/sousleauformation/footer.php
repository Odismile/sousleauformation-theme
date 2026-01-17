s<footer class="bg-dark text-white py-4">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <p>Sous L'Eau Formation</p>
                <p>Centre de Formation SDI 5* ITF. Saint-Raphaël, France & Nosy Be, Madagascar.</p>
            </div>

            <div class="col-4">
                <p>Sous L'Eau Formation</p>
                <?php wp_nav_menu([
                    'theme_location' => 'footer',
                    'container' => false,
                    'menu_class' => 'nav'
                ]); ?>
            </div>

            <div class="col-4">
                <p>Contact</p>
                <p>+33 (0)6 61 03 82 18 <a href="mailto:sous.leau.formation@gmail.com">sous.leau.formation@gmail.com</a></p>
            </div>
        </div>
    </div>
</footer>


<?php wp_footer(); ?>
</body>

</html>