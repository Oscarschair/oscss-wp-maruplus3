<footer style="background-color: #3D2D3F !important; color: #FFFFFF !important; border-top: 4px solid #A184A3 !important;" class="pt-20 pb-12 relative overflow-hidden isolate">
    <!-- Background glow effect -->
    <div class="absolute inset-x-0 bottom-0 -z-10 transform-gpu overflow-hidden blur-3xl opacity-10 pointer-events-none" aria-hidden="true">
        <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#A184A3] to-[#D8BFD8] sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"></div>
    </div>

    <div class="container mx-auto px-6 grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 relative z-10">
        <!-- Brand Section (Left: 5 cols) -->
        <div class="lg:col-span-5 flex flex-col justify-between space-y-6">
            <div>
                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home" class="inline-flex items-center space-x-3.5 group outline-none mb-6">
                    <div class="logo-wrapper relative w-11 h-11 flex items-center justify-center overflow-hidden rounded-xl bg-white shadow-sm group-hover:shadow-md transition-all duration-500 ring-1 ring-black/[0.03]">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/logo-mark.svg" alt="マルプラスのサンジョウ Logo" class="w-9 h-9 transform group-hover:scale-110 group-hover:rotate-[5deg] transition-transform duration-500 ease-out">
                    </div>
                    <div class="flex flex-col leading-none">
                        <span style="color: #D8BFD8 !important;" class="text-[9px] md:text-[10px] uppercase tracking-[0.25em] font-bold mb-1">MaruPlus Cube</span>
                        <div style="color: #FFFFFF !important;" class="text-lg md:text-xl font-black tracking-tight">
                            マルプラス<span style="color: #D8BFD8 !important;" class="font-extrabold px-0.5">の</span>サンジョウ
                        </div>
                    </div>
                </a>
                <p style="color: #DECDE0 !important;" class="text-sm md:text-base leading-relaxed max-w-md">
                    スタートアップの初期開発・DevSecOps一気通貫対応・データ計測基盤の設計・マーケティング運用の自動化まで、技術とビジネスを共創するパートナーです。
                </p>
            </div>
        </div>

        <!-- Navigation Section (Right: 7 cols) -->
        <div class="lg:col-span-7 flex flex-col justify-start">
            <h4 style="color: #FFFFFF !important; border-bottom: 2px solid #A184A3 !important;" class="text-base font-bold tracking-wider uppercase mb-8 pb-2 inline-block w-fit">
                ナビゲーション
            </h4>
            <nav class="footer-navigation">
                <?php
                if (has_nav_menu('footer-menu')) {
                    wp_nav_menu(array(
                        'theme_location' => 'footer-menu',
                        'menu_id'        => 'footer-menu',
                        'depth'          => 1,
                        'container'      => false,
                        'menu_class'     => 'grid grid-cols-2 sm:grid-cols-3 gap-x-8 gap-y-4 text-sm list-none p-0 m-0',
                    ));
                } else {
                    // Fallback Text Anchor Links
                    ?>
                    <ul class="grid grid-cols-2 sm:grid-cols-3 gap-x-8 gap-y-4 text-sm list-none p-0 m-0">
                        <li><a href="<?php echo esc_url(home_url('/')); ?>">ホーム</a></li>
                        <li><a href="<?php echo esc_url(home_url('/services')); ?>">サービス・事業</a></li>
                        <li><a href="<?php echo esc_url(home_url('/product')); ?>">自社プロダクト</a></li>
                        <li><a href="<?php echo esc_url(home_url('/company')); ?>">会社概要・代表</a></li>
                        <li><a href="<?php echo esc_url(home_url('/news')); ?>">お知らせ・ブログ</a></li>
                        <li><a href="<?php echo esc_url(home_url('/contact')); ?>">お問い合わせ</a></li>
                        <li><a href="<?php echo esc_url(home_url('/privacy-policy')); ?>">プライバシーポリシー</a></li>
                    </ul>
                    <?php
                }
                ?>
            </nav>
            <style>
                .footer-navigation ul {
                    list-style: none !important;
                    padding: 0 !important;
                    margin: 0 !important;
                    display: grid !important;
                    grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
                    gap: 1.25rem 2rem !important;
                }
                @media (min-width: 640px) {
                    .footer-navigation ul {
                        grid-template-columns: repeat(3, minmax(0, 1fr)) !important;
                    }
                }
                .footer-navigation ul li {
                    list-style: none !important;
                    margin: 0 !important;
                }
                .footer-navigation ul li a {
                    color: #DECDE0 !important;
                    font-size: 0.9375rem !important;
                    font-weight: 500 !important;
                    transition: color 0.2s ease, opacity 0.2s ease !important;
                    display: inline-flex !important;
                    align-items: center !important;
                    text-decoration: none !important;
                    padding: 0.25rem 0 !important;
                    background: none !important;
                    border: none !important;
                    border-radius: 0 !important;
                    box-shadow: none !important;
                }
                .footer-navigation ul li a:hover {
                    color: #FFFFFF !important;
                    opacity: 1 !important;
                    text-decoration: underline !important;
                    text-underline-offset: 4px !important;
                    background: none !important;
                    transform: none !important;
                }
            </style>
        </div>
    </div>

    <!-- Bottom Copyright Divider -->
    <div style="border-top: 1px solid rgba(216, 191, 216, 0.15) !important;" class="container mx-auto px-6 mt-16 pt-8 flex flex-col sm:flex-row justify-between items-center gap-4 relative z-10">
        <p style="color: #DECDE0 !important; opacity: 0.8;" class="text-xs font-medium">
            &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.
        </p>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>
