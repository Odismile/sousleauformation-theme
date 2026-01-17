<?php
$subtitle    = get_field('subtitle');
$title       = get_field('title');
$description = get_field('description');
$tags        = get_field('tags'); // repeater
$link        = get_field('link');
$image       = get_field('image');
$position    = get_field('position_image'); // "left" ou "right"
?>

<div class="container py-5 text-tag-image-block <?php if ($position === 'center') echo 'text-tag-image-block-center'; ?>">
    <div class="row align-items-center">
        <?php if ($image && $position === 'left') : ?>
            <div class="col-md-6 mb-4 mb-md-0">
                <?php echo wp_get_attachment_image($image, 'medium', false, ['class' => 'img-fluid']); ?>
            </div>
        <?php endif; ?>

        <div class="col-md-6">
            <?php if ($subtitle) : ?>
                <span class="text-uppercase text-muted mb-2"><?php echo esc_html($subtitle); ?></span>
            <?php endif; ?>
            <?php if ($title) : ?>
                <h2 class="mb-3"><?php echo esc_html($title); ?></h2>
            <?php endif; ?>

            <?php if ($description) : ?>
                <div class="mb-3">
                    <?php echo nl2br(esc_html($description)); ?>
                </div>
            <?php endif; ?>

            <?php if ($image && $position === 'center') : ?>
                <div class="mb-4 mb-md-0">
                    <?php echo wp_get_attachment_image($image, 'medium', false, ['class' => 'img-fluid']); ?>
                </div>
            <?php endif; ?>

            <?php if ($tags) : ?>
                <div class="mb-4">
                    <?php foreach ($tags as $row) : ?>
                        <?php if (!empty($row['tag'])) : ?>
                            <span class="badge bg-secondary me-2 mb-2">
                                <?php if (!empty($row['svg_image'])) : ?>
                                    <?php echo wp_get_attachment_image($row['svg_image'], 'thumbnail', false, ['class' => 'me-1']); ?>
                                <?php endif; ?>
                                <?php echo esc_html($row['tag']); ?>
                            </span>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <?php if ($link && isset($link['url'])) : ?>
                <a href="<?php echo esc_url($link['url']); ?>"
                   class="btn btn-primary"
                   <?php echo !empty($link['target']) ? 'target="' . esc_attr($link['target']) . '"' : ''; ?>>
                    <?php echo esc_html($link['title']); ?>
                </a>
            <?php endif; ?>

        </div>

        <?php if ($image && $position === 'right') : ?>
            <div class="col-md-6 mt-4 mt-md-0">
                <?php echo wp_get_attachment_image($image, 'medium', false, ['class' => 'img-fluid']); ?>
            </div>
        <?php endif; ?>

    </div>
</div>
