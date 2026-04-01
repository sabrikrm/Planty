<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="site-header">
    <div class="header-container">

        <div class="site-logo">
    <a href="<?php echo home_url('/'); ?>">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Logo.png" alt="Logo Planty">
    </a>
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

            <?php if (is_user_logged_in()) : ?>
                <a class="admin-link" href="<?php echo admin_url(); ?>">Admin</a>
            <?php endif; ?>

            <a class="commander-link" href="<?php echo home_url('/commander'); ?>">Commander</a>
        </div>

    </div>

    <div class="header-line"></div>
</header>