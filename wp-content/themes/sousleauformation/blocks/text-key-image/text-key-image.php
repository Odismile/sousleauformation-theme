<?php
$text = get_field('text'); // WYSIWYG
$keys = get_field('keys'); // Répéteur avec key et key_text
$image = get_field('image');
$position = get_field('position_image'); // "left" ou "right"
?>

<section class="container text-image-block section-padding">
    <div class="row align-items-center">

        <?php if ($image && $position === 'left') : ?>
            <div class="col-md-6">
                <?php echo wp_get_attachment_image($image, 'medium', false, ['class' => 'img-fluid']); ?>
            </div>
        <?php endif; ?>

        <div class="col-md-6">
            <?php if ($text) : ?>
                <div class="description-block mb-3"><?php echo $text; ?></div>
            <?php endif; ?>

            <?php if ($keys) : ?>
                <div class="row g-3 mb-3 keys-list">
                    <?php foreach ($keys as $key_item) : ?>
                        <div class="col-6 col-md-4">
                            <?php if (!empty($key_item['key'])) : ?>
                                <strong><?php echo esc_html($key_item['key']); ?></strong>
                            <?php endif; ?>
                            <?php if (!empty($key_item['key_text'])) : ?>
                                <div><?php echo esc_html($key_item['key_text']); ?></div>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>

        <?php if ($image && $position === 'right') : ?>
            <div class="col-md-6">
                <?php echo wp_get_attachment_image($image, 'medium', false, ['class' => 'img-fluid']); ?>
            </div>
        <?php endif; ?>

    </div>
</section>
