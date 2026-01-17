<?php if (have_rows('calendrier')) : ?>
<section class="calendrier py-5">
    <div class="container">

        <!-- Titres des colonnes -->
        <div class="row fw-bold border-bottom pb-2 mb-3">
            <div class="col-md-4">Lieu</div>
            <div class="col-md-4">Date</div>
            <div class="col-md-4">Type de session</div>
        </div>

        <?php while (have_rows('calendrier')) : the_row(); ?>
            <div class="row align-items-center border-bottom py-2">
                <div class="col-md-4">
                    <?php echo esc_html(get_sub_field('location')); ?>
                </div>

                <div class="col-md-4">
                    <?php echo esc_html(get_sub_field('date')); ?>
                </div>

                <div class="col-md-4">
                    <?php echo esc_html(get_sub_field('session_type')); ?>
                </div>
            </div>
        <?php endwhile; ?>
        <p>*Tout autre session peut être organisée à votre convenance si vous êtes au moins 6 candidats.</p>
        <div class="button-wrapper">
            <a href="" class="btn btn-primary">Réserver ma place</a>
        </div>
    </div>
</section>
<?php endif; ?>
