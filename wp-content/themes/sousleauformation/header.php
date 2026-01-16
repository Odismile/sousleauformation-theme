<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>


<header class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container">
<a class="navbar-brand" href="<?php echo home_url(); ?>">MonSite</a>
<?php wp_nav_menu([
'theme_location' => 'primary',
'container' => false,
'menu_class' => 'navbar-nav ms-auto'
]); ?>
</div>
</header>