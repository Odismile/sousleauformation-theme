<?php
// Récupération des champs ACF
$subtitle    = get_field('subtitle');
$title       = get_field('title');
$description = get_field('description');
$link        = get_field('link');
?>

<section class="hero-text-block py-5">
    <div class="container text-center">
        <?php if ($subtitle) : ?>
            <p class="text-uppercase text-muted mb-2"><?php echo esc_html($subtitle); ?></p>
        <?php endif; ?>

        <?php if ($title) : ?>
            <h1 class="display-4 mb-3"><?php echo esc_html($title); ?></h1>
        <?php endif; ?>

        <?php if ($description) : ?>
            <p class="lead mb-4"><?php echo esc_html($description); ?></p>
        <?php endif; ?>

        <?php if ($link && isset($link['url'])) : ?>
            <a href="<?php echo esc_url($link['url']); ?>"
               class="btn btn-primary btn-lg"
               <?php echo $link['target'] ? 'target="' . esc_attr($link['target']) . '"' : ''; ?>>
                <?php echo esc_html($link['title']); ?>
            </a>
        <?php endif; ?>
    </div>
</section>
