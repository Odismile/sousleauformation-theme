<?php if (have_rows('liste_formations')) : ?>
<section class="liste-formations">
    <div class="container">
        <div class="row g-4">

            <?php while (have_rows('liste_formations')) : the_row(); ?>
                <div class="col-12">
                    <div class="card">
                        <?php
                        $icon = get_sub_field('icone');
                        $title = get_sub_field('title');
                        $subtitle = get_sub_field('subtitle');
                        $text = get_sub_field('text');
                        ?>

                        <?php if ($icon): ?>
                            <div class="mb-3">
                                <?php echo wp_get_attachment_image($icon, 'medium'); ?>
                            </div>
                        <?php endif; ?>

                        <?php if ($title): ?>
                            <h3 class="h5"><?php echo esc_html($title); ?></h3>
                        <?php endif; ?>

                        <?php if ($subtitle): ?>
                            <p class="text-muted mb-2"><?php echo esc_html($subtitle); ?></p>
                        <?php endif; ?>

                        <?php if ($text): ?>
                            <p><?php echo esc_html($text); ?></p>
                        <?php endif; ?>

                        <?php if (have_rows('liste_informations')) : ?>
                            <ul class="list-unstyled">
                                <?php while (have_rows('liste_informations')) : the_row(); ?>
                                    <li>✔ <?php echo esc_html(get_sub_field('info_text')); ?></li>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>

                    </div>
                </div>
            <?php endwhile; ?>

        </div>
    </div>
</section>
<?php endif; ?>
