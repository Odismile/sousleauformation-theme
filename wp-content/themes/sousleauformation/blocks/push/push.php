<?php
$title  = get_field('title');
$button = get_field('button_cta');
?>

<div class="container py-5 push-block">
    <div class="row justify-content-center text-center">
        <div class="col-md-12 mb-3 mb-md-0">
            <?php if ($title) : ?>
                <h3 class="mb-0">
                    <?php echo esc_html($title); ?>
                </h3>
            <?php endif; ?>
        </div>

        <div class="col-md-12">
            <?php if ($button && isset($button['url'])) : ?>
                <a
                    href="<?php echo esc_url($button['url']); ?>"
                    class="btn btn-primary btn-lg"
                    <?php echo !empty($button['target']) ? 'target="' . esc_attr($button['target']) . '"' : ''; ?>
                >
                    <?php echo esc_html($button['title']); ?>
                </a>
            <?php endif; ?>
        </div>

    </div>
</div>
