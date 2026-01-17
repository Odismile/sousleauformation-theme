<?php
$title = get_field('title');
$description = get_field('description');
$link = get_field('link');
$image = get_field('image');
$position = get_field('position_image'); // "left" ou "right"
?>

<div class="container py-5 text-image-block">
    <div class="row align-items-center">

        <?php if ($image && $position === 'left') : ?>
            <div class="col-md-6">
                <?php echo wp_get_attachment_image($image, 'medium', false, ['class' => 'img-fluid']); ?>
            </div>
        <?php endif; ?>

        <div class="col-md-6">
            <?php if ($title) : ?>
                <h2><?php echo esc_html($title); ?></h2>
            <?php endif; ?>

            <?php if ($description) : ?>
                <div class="text-image-description mb-3"><?php echo $description; ?></div>
            <?php endif; ?>

            <?php if ($link && isset($link['url'])) : ?>
                <a href="<?php echo esc_url($link['url']); ?>" 
                   class="btn btn-primary"
                   <?php echo $link['target'] ? 'target="' . esc_attr($link['target']) . '"' : ''; ?>>
                    <?php echo esc_html($link['title']); ?>
                </a>
            <?php endif; ?>
        </div>

        <?php if ($image && $position === 'right') : ?>
            <div class="col-md-6">
                <?php echo wp_get_attachment_image($image, 'medium', false, ['class' => 'img-fluid']); ?>
            </div>
        <?php endif; ?>

    </div>
</div>
