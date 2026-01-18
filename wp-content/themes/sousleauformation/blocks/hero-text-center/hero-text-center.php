<?php
// Récupération des champs ACF
$subtitle    = get_field('subtitle');
$title       = get_field('title');
$description = get_field('description');
$link        = get_field('link');
$background_image = get_field('background_image');
// var_dump($background_image);

$style = '';
if ($background_image) {
    $style = 'style="background-image:url(' . esc_url(wp_get_attachment_image_url($background_image, 'full')) . ');"';
}
?>

<section class="hero-text-block section-padding" <?php echo $style; ?>>
    <div class="container">
        <div class="inner-content">
            <?php if ($subtitle) : ?>
                <span class="subtitle"><?php echo esc_html($subtitle); ?></span>
            <?php endif; ?>

            <?php if ($title) : ?>
                <h1 class="title"><?php echo esc_html($title); ?></h1>
            <?php endif; ?>

            <?php if ($description) : ?>
                <p class="description"><?php echo esc_html($description); ?></p>
            <?php endif; ?>

            <?php if ($link && isset($link['url'])) : ?>
                <div class="button-wrapper">
                    <a href="<?php echo esc_url($link['url']); ?>"
                    class="btn btn-primary btn-lg"
                    <?php echo $link['target'] ? 'target="' . esc_attr($link['target']) . '"' : ''; ?>>
                        <?php echo esc_html($link['title']); ?>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
