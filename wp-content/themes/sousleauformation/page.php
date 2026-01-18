<?php get_header(); ?>


<main>

<?php get_template_part('partials/hero-simple'); ?>
<!-- <div class="container"> -->
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
        the_content();
        endwhile;
    endif;
    ?>
<!-- </div> -->
</main>


<?php get_footer(); ?>