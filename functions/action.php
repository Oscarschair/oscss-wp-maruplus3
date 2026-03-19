<?php
// Add your action hooks here

// Enqueue Assets
function maruplus_enqueue_assets()
{
    wp_enqueue_style('tailwind', get_template_directory_uri() . '/assets/css/tailwind.css');
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'maruplus_enqueue_assets');

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

    // Add support for custom logo
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array('site-title', 'site-description'),
    ));
}
add_action('after_setup_theme', 'maruplus_theme_setup');

/**
 * Register Custom Post Type: Service
 */
function maruplus_register_cpt_service()
{
    $labels = array(
        'name'               => 'サービス',
        'singular_name'      => 'サービス',
        'menu_name'          => 'サービス',
        'name_admin_bar'     => 'サービス',
        'add_new'            => '新規追加',
        'add_new_item'       => '新しいサービスを追加',
        'new_item'           => '新しいサービス',
        'edit_item'          => 'サービスを編集',
        'view_item'          => 'サービスを表示',
        'all_items'          => 'すべてのサービス',
        'search_items'       => 'サービスを検索',
        'not_found'          => 'サービスが見つかりませんでした',
        'not_found_in_trash' => 'ゴミ箱にサービスは見つかりませんでした',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        // サービスページ（例：/services/）の配下に配置するため slug を services に設定
        'rewrite'            => array('slug' => 'services', 'with_front' => false),
        'capability_type'    => 'post',
        // 固定ページの /services/ と競合させないために archive を false にする
        'has_archive'        => false, 
        'hierarchical'       => false,
        'menu_position'      => 5,
        // 適切な管理画面アイコンを設定
        'menu_icon'          => 'dashicons-portfolio', 
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'show_in_rest'       => true, // ブロックエディタ(Gutenberg)を有効化
    );

    register_post_type('service', $args);
}
add_action('init', 'maruplus_register_cpt_service');
