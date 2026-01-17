<?php
require_once get_template_directory() . '/inc/enqueue.php';
require_once get_template_directory() . '/inc/menus.php';
require_once get_template_directory() . '/inc/acf.php';
require_once get_template_directory() . '/inc/acf-blocks.php';


add_action('init', function () {
    global $wp_post_types;

    if (isset($wp_post_types['post'])) {
        $labels = &$wp_post_types['post']->labels;

        $labels->name               = 'Loisirs';
        $labels->singular_name      = 'Loisir';
        $labels->add_new            = 'Ajouter un loisir';
        $labels->add_new_item       = 'Ajouter un loisir';
        $labels->edit_item          = 'Modifier le loisir';
        $labels->new_item           = 'Nouveau loisir';
        $labels->view_item          = 'Voir le loisir';
        $labels->search_items       = 'Rechercher des loisirs';
        $labels->not_found          = 'Aucun loisir trouvé';
        $labels->not_found_in_trash = 'Aucun loisir dans la corbeille';
        $labels->all_items          = 'Tous les loisirs';
        $labels->menu_name          = 'Loisirs';
        $labels->name_admin_bar     = 'Loisir';
    }
});
