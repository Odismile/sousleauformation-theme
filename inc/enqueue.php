<?php
add_action('wp_enqueue_scripts', function () {
    $theme_uri = get_template_directory_uri();
    wp_enqueue_style('theme-css', $theme_uri . '/assets/dist/app.css', [], null);
    wp_enqueue_script('theme-js', $theme_uri . '/assets/dist/app.js', [], null, true);
});
