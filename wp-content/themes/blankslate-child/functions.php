<?php
//require 'C:\xampp\htdocs\planty\wp-load.php';
// Exit if accessed directly
if (!defined('ABSPATH')) exit;
if (!function_exists('child_theme_configurator_css')) :
    function child_theme_configurator_css()
    {
        wp_enqueue_style('chld_thm_cfg_parent', trailingslashit(get_template_directory_uri()) . 'style.css', array());
        wp_enqueue_style('chld_thm_cfg_separate', trailingslashit(get_stylesheet_directory_uri()) . 'ctc-style.css', array('chld_thm_cfg_parent', 'blankslate-style'));
    }
endif;
add_action('wp_enqueue_scripts', 'child_theme_configurator_css', 10);

// END ENQUEUE PARENT ACTION


add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}


if (!function_exists('mytheme_register_nav_menu')) {

    function mytheme_register_nav_menu()
    {
        register_nav_menus(array(
            'primary_menu' => "menu-principale",
            'footer_menu'  => "Footer Menu",
        ));
        add_theme_support('custom-logo');
    }
    add_action('after_setup_theme', 'mytheme_register_nav_menu', 0);
}



// hook

add_filter('wp_nav_menu_items', 'add_extra_item_to_nav_menu', 10, 2);
function add_extra_item_to_nav_menu($items, $args)
{
    if (is_user_logged_in() && $args->theme_location === 'primary_menu') {
        $items .= '<li><a href="' . get_admin_url() . '">admin</a></li>';
    } 
    return $items;
}
