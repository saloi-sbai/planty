<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <div id="container">
        <header>
            <div class="logo"><?php
                                the_custom_logo();
                                ?></div>
            <nav>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary_menu',
                ))
                ?>
            </nav>

        </header>
        <main>