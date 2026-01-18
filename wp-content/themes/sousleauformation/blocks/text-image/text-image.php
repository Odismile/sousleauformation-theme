<?php
$title = get_field('title');
$description = get_field('description');
$link = get_field('link');
$image = get_field('image');
$position = get_field('position_image'); // "left" ou "right"
?>

<section class="container text-image-block section-padding
">
    <div class="row align-items-center gx-4 gx-lg-5 gy-4 gy-lg-0">
        <?php if ($image && $position === 'left') : ?>
            <div class="col-md-6">
                <figure>
                    <?php echo wp_get_attachment_image($image, 'medium', false, ['class' => 'img-fluid']); ?>
                </figure>
            </div>
        <?php endif; ?>

        <div class="col-md-6">
            <?php if ($title) : ?>
                <h2 class="title-block"><?php echo esc_html($title); ?></h2>
            <?php endif; ?>

            <?php if ($description) : ?>
                <div class="description-block mb-3 wysiwyg"><?php echo $description; ?></div>
            <?php endif; ?>

            <?php if ($link && isset($link['url'])) : ?>
                <div class="button-wrapper">
                    <a href="<?php echo esc_url($link['url']); ?>"
                    class="btn btn-link btn-arrow"
                    <?php echo !empty($link['target']) ? 'target="' . esc_attr($link['target']) . '"' : ''; ?>>
                        <span class="btn-text">
                            <?php echo esc_html($link['title']); ?>
                        </span>

                        <span class="btn-icon" aria-hidden="true">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="18"
                                height="18"
                                viewBox="0 0 24 24"
                                fill="none">
                                <path
                                    d="M5 12h14M13 5l7 7-7 7"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                            </svg>
                        </span>
                    </a>
                </div>
            <?php endif; ?>
        </div>

        <?php if ($image && $position === 'right') : ?>
            <div class="col-md-6">
                <figure>
                    <?php echo wp_get_attachment_image($image, 'medium', false, ['class' => 'img-fluid']); ?>
                </figure>
            </div>
        <?php endif; ?>

    </div>
</section>
