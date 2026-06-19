<?php

add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');

    register_nav_menus([
        'primary' => 'Navigation principale',
        'footer'  => 'Pied de page',
    ]);
});

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style(
        'tommadon-fonts',
        'https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,700;1,400;1,500&family=Inter:wght@300;400;500;600&display=swap',
        [],
        null
    );
    wp_enqueue_style('tommadon-style', get_stylesheet_uri(), ['tommadon-fonts'], '1.0');
    wp_enqueue_script('tommadon-js', get_template_directory_uri() . '/js/main.js', [], '1.0', true);
});

// Ajoute la classe CSS "menu-item-cta" au dernier item du menu primaire
add_filter('nav_menu_css_class', function ($classes, $item, $args) {
    if ($args->theme_location === 'primary') {
        $menu = wp_get_nav_menu_object($args->menu);
        if (!$menu) {
            $locations = get_nav_menu_locations();
            if (isset($locations[$args->theme_location])) {
                $menu = wp_get_nav_menu_object($locations[$args->theme_location]);
            }
        }
        if ($menu) {
            $items = wp_get_nav_menu_items($menu->term_id);
            if ($items && end($items)->ID === $item->ID) {
                $classes[] = 'menu-item-cta';
            }
        }
    }
    return $classes;
}, 10, 3);
