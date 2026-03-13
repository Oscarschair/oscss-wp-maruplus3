<?php
// Add your action hooks here

// Enqueue Tailwind CSS
// function enqueue_tailwind_css()
// {
//     wp_enqueue_style('tailwind', get_template_directory_uri() . '/assets/css/tailwind.css');
// }
// add_action('wp_enqueue_scripts', 'enqueue_tailwind_css');

/**
 * Theme setup
 */
function maruplus_theme_setup()
{
    // Add support for menus
    add_theme_support('menus');

    // Register nav menus
    register_nav_menus(array(
        'header-menu' => esc_html__('Header Menu', 'maruplus'),
        'footer-menu' => esc_html__('Footer Menu', 'maruplus'),
    ));
}
add_action('after_setup_theme', 'maruplus_theme_setup');
