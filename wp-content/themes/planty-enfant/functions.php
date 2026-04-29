<?php

// Enqueue styles
function planty_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_uri(), array('parent-style'));
}
add_action('wp_enqueue_scripts', 'planty_enqueue_styles');



function planty_menu() {
    register_nav_menus(array(
        'menu-principal' => 'Menu principal'
    ));
}
add_action('after_setup_theme', 'planty_menu');


function planty_add_admin_link($items, $args) {
    if ($args->theme_location === 'menu-principal' && is_user_logged_in()) {

        $admin_link = '<li class="menu-item menu-admin">
            <a href="' . admin_url() . '">Admin</a>
        </li>';

        $items = str_replace(
            'menu-commander',
            'menu-admin-temp">' . $admin_link . '<li class="menu-item menu-commander',
            $items
        );
    }

    return $items;
}
add_filter('wp_nav_menu_items', 'planty_add_admin_link', 10, 2);