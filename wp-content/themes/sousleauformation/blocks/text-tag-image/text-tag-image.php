<?php
$subtitle    = get_field('subtitle');
$title       = get_field('title');
$description = get_field('description');
$tags        = get_field('tags'); // repeater
$link        = get_field('link');
$image       = get_field('image');
$position    = get_field('position_image'); // "left" ou "right"
?>

<section class="container text-image-block <?php if ($position === 'center') echo 'text-tag-image-block-center'; ?> section-padding">
    <div class="row align-items-center gx-4 gx-lg-5 gy-4 gy-lg-0">
        <?php if ($image && $position === 'left') : ?>
            <div class="col-md-6">
                <figure>
                    <?php echo wp_get_attachment_image($image, 'medium', false, ['class' => 'img-fluid']); ?>
                </figure>
            </div>
        <?php endif; ?>

        <div class="col-md-6">
            <?php if ($subtitle) : ?>
                <span class="subtitle"><?php echo esc_html($subtitle); ?></span>
            <?php endif; ?>
            <?php if ($title) : ?>
                <h2 class="title-block"><?php echo esc_html($title); ?></h2>
            <?php endif; ?>

            <?php if ($description) : ?>
                <div class="description-block">
                    <?php echo nl2br(esc_html($description)); ?>
                </div>
            <?php endif; ?>

            <?php if ($image && $position === 'center') : ?>
                <figure>
                    <?php echo wp_get_attachment_image($image, 'medium', false, ['class' => 'img-fluid']); ?>
                </figure>
            <?php endif; ?>

            <?php if ($tags) : ?>
                <div class="tag-list">
                    <?php foreach ($tags as $row) : ?>
                        <?php if (!empty($row['tag'])) : ?>
                            <span class="badge">
                                <?php
                                    if (!empty($row['svg_image'])) {
                                        echo get_inline_svg($row['svg_image'], 'icon me-1');
                                    }
                                    ?>
                                <?php echo esc_html($row['tag']); ?>
                            </span>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <?php if ($link && isset($link['url'])) : ?>
                <div class="button-wrapper">
                    <?php if ($image && $position === 'center') : ?>
                      <a href="<?php echo esc_url($link['url']); ?>"
                    class="btn btn-primary btn-arrow"
                        <?php echo !empty($link['target']) ? 'target="' . esc_attr($link['target']) . '"' : ''; ?>>

                        <?php echo esc_html($link['title']); ?>
                        </a> 
                    <?php else: ?>
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
                    <?php endif; ?>
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
