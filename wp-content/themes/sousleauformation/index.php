<?php get_header(); ?>

<main class="container">

    <?php get_template_part('partials/hero-simple'); ?>

    <?php
    $args = [
        'post_type'      => 'post',
        'posts_per_page' => -1,
        'post_status'    => 'publish',
    ];

    $query = new WP_Query($args);

    if ($query->have_posts()) :
        echo '<div class="row g-4">';

        while ($query->have_posts()) :
            $query->the_post();
            ?>
            <div class="col-md-4">
                <article class="card h-100">
                    <div class="card-body">
                        <h3 class="card-title">
                            <?php the_title(); ?>
                        </h3>

                        <p class="card-text">
                            <?php the_excerpt(); ?>
                        </p>

                        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Lire plus</a>
                    </div>
                </article>
            </div>
            <?php
        endwhile;

        echo '</div>';

        wp_reset_postdata();
    else :
        echo '<p>Aucun loisir trouvé.</p>';
    endif;
    ?>

</main>

<?php get_footer(); ?>
