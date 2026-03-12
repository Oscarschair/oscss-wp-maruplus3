<?php
// Add your action hooks here

// Enqueue Tailwind CSS
function enqueue_tailwind_css()
{
    wp_enqueue_style('tailwind', get_template_directory_uri() . '/assets/css/tailwind.css');
}
add_action('wp_enqueue_scripts', 'enqueue_tailwind_css');
