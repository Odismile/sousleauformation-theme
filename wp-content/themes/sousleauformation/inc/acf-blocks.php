<?php
namespace App;

add_action('acf/init', function() {
    if (function_exists('acf_register_block_type')) {

        acf_register_block_type([
            'name'              => 'text-image',
            'title'             => __('Texte + Image'),
            'description'       => __('Bloc texte avec image, CTA et couleur de fond'),
            'render_template'   => get_template_directory() . '/blocks/text-image/text-image.php',
            'category'          => 'formatting',
            'icon'              => 'align-wide',
            'mode'              => 'edit',
            'keywords'          => ['texte', 'image', 'cta'],
            'supports'          => [
                'align' => ['wide', 'full'],
                'mode'  => false,
                'jsx'   => true
            ]
        ]);

    }
});
