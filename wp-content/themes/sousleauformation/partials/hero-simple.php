<?php
/**
 * Hero simple – universel
 */

$post_id = null;

// Page Articles (blog)
if (is_home()) {
    $post_id = get_option('page_for_posts');
}
// Page normale
elseif (is_singular()) {
    $post_id = get_the_ID();
}

$title = $post_id ? get_field('title_hero', $post_id) : null;
$description = $post_id ? get_field('description_hero', $post_id) : null;

// Fallback si champs vides
if (!$title) {
    if (is_home()) {
        $title = get_the_title($post_id);
    } elseif (is_archive()) {
        $title = single_term_title('', false);
    }
}
?>

<?php if ($title || $description) : ?>
<section class="hero-simple">
    <div class="container text-center">
        <?php if ($title) : ?>
            <h1 class="title"><?php echo esc_html($title); ?></h1>
        <?php endif; ?>

        <?php if ($description) : ?>
            <p class="description"><?php echo nl2br(esc_html($description)); ?></p>
        <?php endif; ?>

    </div>
</section>
<?php endif; ?>
