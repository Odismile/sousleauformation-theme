<?php
/**
 * Hero Simple Block
 * 
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param WP_Block $wp_block The block instance.
 */

$title = get_field('title') ?: '';
$description = get_field('description') ?: '';
$block_id = 'hero-simple-' . uniqid();
?>

<section id="<?php echo esc_attr($block_id); ?>" class="hero-simple py-5">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col text-center">
                <?php if ($title) : ?>
                    <h1><?php echo esc_html($title); ?></h1>
                <?php endif; ?>

                <?php if ($description) : ?>
                    <p><?php echo esc_html($description); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>