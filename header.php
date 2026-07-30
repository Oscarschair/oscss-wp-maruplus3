<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-W37BZVZH');</script>
    <!-- End Google Tag Manager -->
    <!-- Favicon and Apple Touch Icons -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&family=Noto+Sans+JP:wght@400;500;700;900&display=swap"
        rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W37BZVZH" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <header id="masthead"
        class="site-header sticky top-0 z-50 transition-all duration-300 bg-white/90 backdrop-blur-md border-b border-gray-100 shadow-sm">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="site-branding flex items-center">
                <?php
                if (has_custom_logo()) {
                    the_custom_logo();
                } else {
                    ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"
                        class="flex items-center space-x-3.5 group outline-none focus-visible:ring-2 focus-visible:ring-brand-400 rounded-xl p-1 -m-1 transition-all duration-300">
                        <div
                            class="logo-wrapper relative w-11 h-11 flex items-center justify-center overflow-hidden rounded-xl bg-white shadow-sm group-hover:shadow-md transition-all duration-500 ring-1 ring-black/[0.03] group-hover:ring-brand-200">
                            <!-- SVG Logo from concept -->
                            <svg class="w-9 h-9 transform group-hover:scale-110 group-hover:rotate-[5deg] transition-transform duration-500 ease-out"
                                viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <linearGradient id="maruGradHeader" x1="0%" y1="0%" x2="100%" y2="100%">
                                        <stop offset="0%" stop-color="#FDFBFE" />
                                        <stop offset="100%" stop-color="#D8BFD8" />
                                    </linearGradient>
                                </defs>
                                <circle cx="100" cy="100" r="85" fill="url(#maruGradHeader)" stroke="#D8BFD8"
                                    stroke-width="0.5" />
                                <g opacity="0.4" transform="matrix(0.9, -0.2, 0.2, 0.9, 10, 5)">
                                    <path d="M100 65 V135 M65 100 H135" stroke="#A184A3" stroke-width="18"
                                        stroke-linecap="round" />
                                </g>
                                <g opacity="0.6" transform="matrix(0.95, 0.1, -0.1, 0.95, -5, -10)">
                                    <path d="M100 65 V135 M65 100 H135" stroke="#B2AC88" stroke-width="18"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1, 0, 0, 1, 0, 0)">
                                    <path d="M100 65 V135 M65 100 H135" stroke="#544057" stroke-width="20"
                                        stroke-linecap="round" />
                                </g>
                            </svg>
                            <!-- Overlay Shine Effect -->
                            <div
                                class="absolute inset-0 bg-gradient-to-tr from-white/0 via-white/40 to-white/0 -translate-x-full group-hover:translate-x-full transition-transform duration-1000 ease-in-out pointer-events-none">
                            </div>
                        </div>
                        <div class="flex flex-col leading-none">
                            <span
                                class="text-[9px] md:text-[10px] uppercase tracking-[0.25em] font-bold text-brand-600/70 mb-1">MaruPlus
                                Cube</span>
                            <div
                                class="text-lg md:text-xl font-black tracking-tight text-brand-950 group-hover:text-brand-700 transition-colors duration-300">
                                マルプラス<span class="text-brand-500 font-extrabold px-0.5">の</span>サンジョウ
                            </div>
                        </div>
                    </a>
                    <?php
                }
                ?>
            </div>

            <nav id="site-navigation" class="main-navigation hidden md:block">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'header-menu',
                    'container' => false,
                    'menu_id' => 'primary-menu',
                    'menu_class' => 'flex items-center space-x-2 lg:space-x-4',
                    'fallback_cb' => false,
                ));
                ?>
            </nav><!-- #site-navigation -->

            <div class="flex items-center space-x-4 md:hidden">
                <button id="mobile-menu-toggle" class="flex flex-col space-y-1.5 p-2 focus:outline-none group"
                    aria-label="<?php esc_html_e('Menu', 'maruplus'); ?>">
                    <span class="block w-6 h-0.5 bg-gray-600 group-hover:bg-brand-500 transition-colors"></span>
                    <span class="block w-6 h-0.5 bg-gray-600 group-hover:bg-brand-500 transition-colors"></span>
                    <span class="block w-6 h-0.5 bg-gray-600 group-hover:bg-brand-500 transition-colors"></span>
                </button>
            </div>
        </div>
    </header>