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

add_action('acf/init', function() {
    if (function_exists('acf_register_block_type')) {

        acf_register_block_type([
            'name'              => 'text-tag-image',
            'title'             => __('Texte + Tag + Image'),
            'description'       => __('Bloc texte avec tag, image et CTA'),
            'render_template'   => get_template_directory() . '/blocks/text-tag-image/text-tag-image.php',
            'category'          => 'formatting',
            'icon'              => 'align-wide',
            'mode'              => 'edit',
            'keywords'          => ['texte', 'tag', 'image'],
            'supports'          => [
                'align' => ['wide', 'full'],
                'mode'  => false,
                'jsx'   => true
            ]
        ]);

    }
});

add_action('acf/init', function() {
    if (function_exists('acf_register_block_type')) {

        acf_register_block_type([
            'name'              => 'hero-text',
            'title'             => __('Hero Texte Centré'),
            'description'       => __('Bloc hero avec texte centré'),
            'render_template'   => get_template_directory() . '/blocks/hero-text-center/hero-text-center.php',
            'category'          => 'formatting',
            'icon'              => 'heading',
            'mode'              => 'edit',
            'keywords'          => ['hero', 'texte', 'centré'],
            'supports'          => [
                'align' => ['full'],
                'mode'  => false,
                'jsx'   => true
            ]
        ]);

    }
});

add_action('acf/init', function() {
    if (function_exists('acf_register_block_type')) {

        acf_register_block_type([
            'name'              => 'temoignage',
            'title'             => __('Témoignage'),
            'description'       => __('Bloc de témoignage'),
            'render_template'   => get_template_directory() . '/blocks/temoignage/temoignage.php',
            'category'          => 'formatting',
            'icon'              => 'format-quote',
            'mode'              => 'edit',
            'keywords'          => ['témoignage', 'avis', 'citation'],
            'supports'          => [
                'align' => ['wide', 'full'],
                'mode'  => false,
                'jsx'   => true
            ]
        ]);

    }
});

add_action('acf/init', function() {
    if (function_exists('acf_register_block_type')) {

        acf_register_block_type([
            'name'              => 'push',
            'title'             => __('Push'),
            'description'       => __('Bloc push'),
            'render_template'   => get_template_directory() . '/blocks/push/push.php',
            'category'          => 'formatting',
            'icon'              => 'arrow-right',
            'mode'              => 'edit',
            'keywords'          => ['push', 'contact'],
            'supports'          => [
                'align' => ['wide', 'full'],
                'mode'  => false,
                'jsx'   => true
            ]
        ]);

    }
});
