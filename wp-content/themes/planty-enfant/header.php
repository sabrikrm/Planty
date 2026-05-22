<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;700;800&display=swap" rel="stylesheet">
</head>

<body <?php body_class(); ?>>

<header class="site-header">
    <div class="header-container">

       
        <div class="site-logo">
    <?php
    if (has_custom_logo()) {
        the_custom_logo();
    }
    ?>
</div>

      
        <div class="header-right">
            <nav class="main-menu">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'menu-principal',
                    'container' => false
                ));
                ?>
            </nav>
        </div>

    </div>

    <div class="header-line"></div>
</header>