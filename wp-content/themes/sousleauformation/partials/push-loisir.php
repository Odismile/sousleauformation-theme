<?php
$post_id = get_option('page_for_posts');
$title       = get_field('title_push', $post_id);
$description = get_field('description_push', $post_id);
$button      = get_field('button_cta', $post_id);

// Ne rien afficher si tout est vide
if (!$title && !$description && !$button) {
    return;
}
?>

<section class="push-loisir">
    <div class="container"> 
        <div class="row">
            
            <div class="col-md-8">
                <?php if ($title): ?>
                    <h2 class=""><?php echo esc_html($title); ?></h2>
                <?php endif; ?>

                <?php if ($description): ?>
                    <p class=""><?php echo nl2br(esc_html($description)); ?></p>
                <?php endif; ?>
            </div>

            <div class="col-md-4 text-md-end">
                <?php if ($button): ?>
                    <a
                        href="<?php echo esc_url($button['url']); ?>"
                        class="btn btn-primary"
                        target="<?php echo esc_attr($button['target'] ?: '_self'); ?>"
                    >
                        <?php echo esc_html($button['title']); ?>
                    </a>
                <?php endif; ?>
            </div>

        </div>
    </div>
</section>
