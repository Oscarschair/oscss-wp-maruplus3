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
    echo '<link rel="canonical" href="' . esc_url($canonical_url) . '" />' . "\n";

    // 2. Meta Description & Title & OGP
    $title = '';
    $description = '';

    if (is_home() || is_front_page()) {
        $title = get_bloginfo('name') . ' - ' . get_bloginfo('description');
        $description = 'マルプラスのサンジョウは、スタートアップの初期開発・DevSecOps一気通貫対応・データ計測基盤の設計・マーケティング運用自動化まで、技術とビジネスを共創するパートナーです。';
    } elseif (is_page('services') || is_page('service')) {
        $title = 'サービス・事業 | ' . get_bloginfo('name');
        $description = 'マルプラスのサンジョウが提供する3つのコア・バリュー（Data Strategy Engineer, Marketing Ops Architect, DevSecOps Engineer）と事業内容のご紹介。';
    } elseif (is_page('product') || is_page('products')) {
        $title = 'プロダクト | ' . get_bloginfo('name');
        $description = 'マルプラスが提供する自社SaaSプロダクト群（geomaru, stocksmaru, risemaru）のご紹介。';
    } elseif (is_page('company')) {
        $title = '会社概要・代表 | ' . get_bloginfo('name');
        $description = 'マルプラスのサンジョウの会社概要、ビジョン、代表プロフィールのご紹介。';
    } elseif (is_page('contact')) {
        $title = 'お問い合わせ | ' . get_bloginfo('name');
        $description = 'マルプラスのサンジョウへのお問い合わせ・無料相談フォーム。Web開発、データ基盤構築、マーケティング自動化のご相談を受け付けております。';
    } elseif (is_page('privacy-policy')) {
        $title = 'プライバシーポリシー | ' . get_bloginfo('name');
        $description = 'マルプラスのサンジョウのプライバシーポリシー（個人情報保護方針）に関する記述。';
    } elseif (is_singular('service')) {
        $title = get_the_title() . ' | サービス | ' . get_bloginfo('name');
        $description = wp_strip_all_tags(get_the_excerpt());
        if (empty($description)) {
            $description = mb_substr(wp_strip_all_tags(get_the_content()), 0, 120) . '...';
        }
    } elseif (is_singular('post')) {
        $title = get_the_title() . ' | 技術ブログ | ' . get_bloginfo('name');
        $description = wp_strip_all_tags(get_the_excerpt());
        if (empty($description)) {
            $description = mb_substr(wp_strip_all_tags(get_the_content()), 0, 120) . '...';
        }
    } else {
        $title = wp_get_document_title();
        $description = 'マルプラスのサンジョウ - 技術とビジネスを加速する開発・基盤・マーケティングパートナー';
    }

    echo '<meta name="description" content="' . esc_attr($description) . '" />' . "\n";
    echo '<meta property="og:title" content="' . esc_attr($title) . '" />' . "\n";
    echo '<meta property="og:description" content="' . esc_attr($description) . '" />' . "\n";
    echo '<meta property="og:url" content="' . esc_url($canonical_url) . '" />' . "\n";
    echo '<meta property="og:type" content="' . (is_singular() ? 'article' : 'website') . '" />' . "\n";
    echo '<meta property="og:site_name" content="' . esc_attr(get_bloginfo('name')) . '" />' . "\n";

    // 3. JSON-LD Structured Data
    $url = esc_url($canonical_url);
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
        flush_rewrite_rules();
    } elseif ($page->post_status !== 'publish') {
        $post_data = array(
            'ID'          => $page->ID,
            'post_status' => 'publish',
        );
        wp_update_post($post_data);
        flush_rewrite_rules();
    }

    // Force flush rules via query parameter for deployment verification
    if (isset($_GET['flush_rules'])) {
        flush_rewrite_rules();
    }
}
add_action('init', 'maruplus_create_privacy_policy_page');

/**
 * Automatically create the product page in the WordPress database if it doesn't exist
 */
function maruplus_create_product_page()
{
    $slug = 'product';
    $page = get_page_by_path($slug);
    
    if (!$page) {
        $post_data = array(
            'post_title'   => 'プロダクト',
            'post_name'    => $slug,
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'post_content' => '<!-- handled by template file page-product.php -->',
        );
        $page_id = wp_insert_post($post_data);
        if ($page_id && !is_wp_error($page_id)) {
            update_post_meta($page_id, '_wp_page_template', 'template-product.php');
        }
        flush_rewrite_rules();
    } elseif ($page->post_status !== 'publish') {
        $post_data = array(
            'ID'          => $page->ID,
            'post_status' => 'publish',
        );
        wp_update_post($post_data);
        update_post_meta($page->ID, '_wp_page_template', 'template-product.php');
        flush_rewrite_rules();
    }
}
add_action('init', 'maruplus_create_product_page');
