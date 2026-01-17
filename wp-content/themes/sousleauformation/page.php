<?php get_header(); ?>


<main class="container">

<?php get_template_part('partials/hero-simple'); ?>

    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
        the_content();
        endwhile;
    endif;
    ?>
</main>


<?php get_footer(); ?>