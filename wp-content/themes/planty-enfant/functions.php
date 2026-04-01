<?php

function planty_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'planty_styles');


function planty_menu() {
    register_nav_menus(array(
        'menu-principal' => 'Menu principal'
    ));
}

add_action('after_setup_theme', 'planty_menu');