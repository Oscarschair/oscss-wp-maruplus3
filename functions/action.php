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

    // Add support for title tag (SEO)
    add_theme_support('title-tag');
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

/**
 * Output dynamic SEO Meta tags, Canonical URL, OGP, and JSON-LD structured data in wp_head
 */
function maruplus_seo_meta_tags()
{
    global $wp;
    
    // 1. Canonical URL
    $canonical_url = '';
    if (is_home() || is_front_page()) {
        $canonical_url = home_url('/');
    } elseif (is_singular()) {
        $canonical_url = get_permalink();
    } else {
        $canonical_url = home_url(add_query_arg(array(), $wp->request));
    }
    $canonical_url = user_trailingslashit($canonical_url);
    echo '<link rel="canonical" href="' . esc_url($canonical_url) . '">' . "\n";

    // 2. Meta Description
    $default_description = 'スタートアップの初期開発からDevSecOps（開発・セキュリティ・運用の一気通貫）まで、低予算から完全お任せで共創するマルプラスのサンジョウ。';
    $description = $default_description;
    if (is_singular()) {
        $post = get_post();
        if ($post) {
            if (!empty($post->post_excerpt)) {
                $description = wp_strip_all_tags($post->post_excerpt);
            } elseif (!empty($post->post_content)) {
                $description = wp_strip_all_tags(wp_trim_words($post->post_content, 120));
            }
        }
        if (empty($description)) {
            $description = $default_description;
        }
    }
    echo '<meta name="description" content="' . esc_attr($description) . '">' . "\n";

    // 3. OGP Meta Tags
    $title = wp_get_document_title();
    $type = (is_home() || is_front_page()) ? 'website' : 'article';
    $url = $canonical_url;
    
    // Default screenshot image as fall-back
    $image = get_template_directory_uri() . '/screenshot.png';
    if (is_singular() && has_post_thumbnail()) {
        $image = get_the_post_thumbnail_url(null, 'large');
    }

    echo '<meta property="og:title" content="' . esc_attr($title) . '">' . "\n";
    echo '<meta property="og:description" content="' . esc_attr($description) . '">' . "\n";
    echo '<meta property="og:url" content="' . esc_url($url) . '">' . "\n";
    echo '<meta property="og:type" content="' . esc_attr($type) . '">' . "\n";
    echo '<meta property="og:image" content="' . esc_url($image) . '">' . "\n";
    echo '<meta property="og:site_name" content="' . esc_attr(get_bloginfo('name')) . '">' . "\n";
    echo '<meta name="twitter:card" content="summary_large_image">' . "\n";

    // OGP published and modified timestamps
    if (is_singular()) {
        echo '<meta property="article:published_time" content="' . esc_attr(get_the_date('c')) . '">' . "\n";
        echo '<meta property="article:modified_time" content="' . esc_attr(get_the_modified_date('c')) . '">' . "\n";
    }

    // 4. JSON-LD Structured Data
    $json_ld = array(
        '@context' => 'https://schema.org',
        '@graph'   => array()
    );

    // Organization Structured Data
    $organization = array(
        '@type' => 'Organization',
        '@id'   => home_url('/#organization'),
        'name'  => get_bloginfo('name'),
        'url'   => home_url('/'),
        'logo'  => get_template_directory_uri() . '/screenshot.png',
    );
    
    $custom_logo_id = get_theme_mod('custom_logo');
    if ($custom_logo_id) {
        $logo_url = wp_get_attachment_image_url($custom_logo_id, 'full');
        if ($logo_url) {
            $organization['logo'] = $logo_url;
        }
    }
    $json_ld['@graph'][] = $organization;

    // WebSite Structured Data
    $website = array(
        '@type'     => 'WebSite',
        '@id'       => home_url('/#website'),
        'url'       => home_url('/'),
        'name'      => get_bloginfo('name'),
        'publisher' => array(
            '@id' => home_url('/#organization')
        )
    );
    $json_ld['@graph'][] = $website;

    // WebPage Structured Data
    $webpage = array(
        '@type'       => 'WebPage',
        '@id'         => $url . '#webpage',
        'url'         => $url,
        'name'        => $title,
        'description' => $description,
        'isPartOf'    => array(
            '@id' => home_url('/#website')
        )
    );
    if (is_singular()) {
        $webpage['datePublished'] = get_the_date('c');
        $webpage['dateModified'] = get_the_modified_date('c');
    }
    $json_ld['@graph'][] = $webpage;

    echo '<script type="application/ld+json">' . json_encode($json_ld, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) . '</script>' . "\n";
}
add_action('wp_head', 'maruplus_seo_meta_tags', 1);

/**
 * Customize document title parts for SEO optimization
 */
function maruplus_customize_title_parts($title)
{
    if (is_home() || is_front_page()) {
        $title['title'] = 'マルプラスのサンジョウ';
        $title['tagline'] = 'スタートアップ初期開発・DevSecOps一貫対応';
    }
    return $title;
}
add_filter('document_title_parts', 'maruplus_customize_title_parts');

/**
 * Automatically create the privacy-policy page in the WordPress database if it doesn't exist
 */
function maruplus_create_privacy_policy_page()
{
    $slug = 'privacy-policy';
    $page = get_page_by_path($slug);
    
    if (!$page) {
        $post_data = array(
            'post_title'   => 'プライバシーポリシー',
            'post_name'    => $slug,
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'post_content' => '<!-- handled by template file page-privacy-policy.php -->',
        );
        wp_insert_post($post_data);
    }
}
add_action('init', 'maruplus_create_privacy_policy_page');

