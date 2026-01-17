<?php
$title        = get_field('title');
$testimonials = get_field('testimonials');
?>

<div class="container py-5 testimonial-block">

    <?php if ($title) : ?>
        <div class="row mb-4">
            <div class="col text-center">
                <h2><?php echo esc_html($title); ?></h2>
            </div>
        </div>
    <?php endif; ?>

    <?php if ($testimonials) : ?>
        <div class="row">
            <?php foreach ($testimonials as $item) : ?>
                <div class="col-md-6 mb-4">

                    <div class="card h-100 shadow-sm">
                        <div class="card-body">

                            <?php if (!empty($item['testimonial'])) : ?>
                                <p class="mb-3 fst-italic">
                                    “<?php echo esc_html($item['testimonial']); ?>”
                                </p>
                            <?php endif; ?>

                            <?php if (!empty($item['author'])) : ?>
                                <p class="mb-0 fw-bold">
                                    <?php echo esc_html($item['author']); ?>
                                </p>
                            <?php endif; ?>

                        </div>
                    </div>

                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

</div>
