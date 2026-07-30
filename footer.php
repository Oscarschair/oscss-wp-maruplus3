<footer id="colophon" style="background-color: #3D2D3F !important; color: #FFFFFF !important; border-top: 4px solid #A184A3 !important; padding: 2rem !important;" class="site-footer site-footer--maruplus relative overflow-hidden isolate">
    <div class="site-footer__container container mx-auto relative z-10">
        <!-- 1st Layer: Brand & Main Navigation -->
        <div class="site-footer__main-grid grid grid-cols-1 lg:grid-cols-12 gap-8 pb-8">
            <!-- Brand Info (Left: 4 cols) -->
            <div class="site-footer__brand lg:col-span-4 flex flex-col justify-between space-y-4">
                <div class="site-footer__brand-inner">
                    <a href="<?php echo esc_url(home_url('/')); ?>" rel="home" class="site-footer__logo-link inline-flex items-center space-x-3.5 group outline-none mb-3">
                        <div class="site-footer__logo-icon logo-wrapper relative w-10 h-10 flex items-center justify-center overflow-hidden rounded-xl bg-white shadow-sm group-hover:shadow-md transition-all duration-500 ring-1 ring-black/[0.03]">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/logo-mark.svg" alt="マルプラスのサンジョウ Logo" class="w-8 h-8 transform group-hover:scale-110 group-hover:rotate-[5deg] transition-transform duration-500 ease-out">
                        </div>
                        <div class="site-footer__brand-text flex flex-col leading-none">
                            <span style="color: #D8BFD8 !important;" class="site-footer__brand-subtitle text-[9px] uppercase tracking-[0.25em] font-bold mb-1">MaruPlus Cube</span>
                            <div style="color: #FFFFFF !important;" class="site-footer__brand-title text-base md:text-lg font-black tracking-tight">
                                マルプラス<span style="color: #D8BFD8 !important;" class="font-extrabold px-0.5">の</span>サンジョウ
                            </div>
                        </div>
                    </a>
                    <p style="color: #F1E6F2 !important;" class="site-footer__brand-description text-xs leading-relaxed max-w-sm font-medium opacity-90">
                        スタートアップの初期開発・DevSecOps一気通貫対応・データ計測基盤の設計・マーケティング運用の自動化まで、技術とビジネスを共創するパートナーです。
                    </p>
                </div>
            </div>

            <!-- Navigation Columns (Right: 8 cols) -->
            <div class="site-footer__nav-wrapper lg:col-span-8 grid grid-cols-2 md:grid-cols-3 gap-6">
                <!-- Category 1: サービス・プロダクト -->
                <div class="site-footer__nav-category site-footer__nav-category--services">
                    <h5 style="color: #FFFFFF !important; border-bottom: 2px solid #A184A3 !important;" class="site-footer__nav-title text-xs font-bold tracking-widest uppercase mb-3 pb-1 inline-block">
                        事業・プロダクト
                    </h5>
                    <ul class="site-footer__nav-list space-y-2 text-xs list-none p-0 m-0">
                        <li class="site-footer__nav-item"><a style="color: #DECDE0 !important;" class="site-footer__nav-link hover:text-white hover:underline transition-colors flex items-center" href="<?php echo esc_url(home_url('/services')); ?>"><span class="text-xs opacity-60 mr-1.5">›</span> サービス・事業</a></li>
                        <li class="site-footer__nav-item"><a style="color: #DECDE0 !important;" class="site-footer__nav-link hover:text-white hover:underline transition-colors flex items-center" href="<?php echo esc_url(home_url('/product')); ?>"><span class="text-xs opacity-60 mr-1.5">›</span> 自社プロダクト</a></li>
                    </ul>
                </div>

                <!-- Category 2: 企業情報 -->
                <div class="site-footer__nav-category site-footer__nav-category--company">
                    <h5 style="color: #FFFFFF !important; border-bottom: 2px solid #A184A3 !important;" class="site-footer__nav-title text-xs font-bold tracking-widest uppercase mb-3 pb-1 inline-block">
                        企業情報
                    </h5>
                    <ul class="site-footer__nav-list space-y-2 text-xs list-none p-0 m-0">
                        <li class="site-footer__nav-item"><a style="color: #DECDE0 !important;" class="site-footer__nav-link hover:text-white hover:underline transition-colors flex items-center" href="<?php echo esc_url(home_url('/company')); ?>"><span class="text-xs opacity-60 mr-1.5">›</span> 会社概要・代表</a></li>
                        <li class="site-footer__nav-item"><a style="color: #DECDE0 !important;" class="site-footer__nav-link hover:text-white hover:underline transition-colors flex items-center" href="<?php echo esc_url(home_url('/news')); ?>"><span class="text-xs opacity-60 mr-1.5">›</span> お知らせ・ブログ</a></li>
                    </ul>
                </div>

                <!-- Category 3: サポート・お問い合わせ -->
                <div class="site-footer__nav-category site-footer__nav-category--contact">
                    <h5 style="color: #FFFFFF !important; border-bottom: 2px solid #A184A3 !important;" class="site-footer__nav-title text-xs font-bold tracking-widest uppercase mb-3 pb-1 inline-block">
                        お問い合わせ
                    </h5>
                    <ul class="site-footer__nav-list space-y-2 text-xs list-none p-0 m-0">
                        <li class="site-footer__nav-item"><a style="color: #DECDE0 !important;" class="site-footer__nav-link hover:text-white hover:underline transition-colors flex items-center" href="<?php echo esc_url(home_url('/contact')); ?>"><span class="text-xs opacity-60 mr-1.5">›</span> お問い合わせフォーム</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- 2nd Layer: Bottom Sub-nav & Copyright -->
        <div style="border-top: 1px solid rgba(255, 255, 255, 0.15) !important;" class="site-footer__bottom pt-4 flex flex-col md:flex-row justify-between items-center gap-4">
            <!-- Inline Sub-navigation with explicit gap -->
            <ul class="site-footer__subnav flex flex-wrap items-center gap-x-6 md:gap-x-8 gap-y-2 text-xs list-none p-0 m-0">
                <li class="site-footer__subnav-item"><a style="color: #DECDE0 !important;" class="site-footer__subnav-link hover:text-white hover:underline transition-colors" href="<?php echo esc_url(home_url('/')); ?>">ホーム</a></li>
                <li class="site-footer__subnav-item"><span style="color: rgba(255,255,255,0.3);" class="site-footer__subnav-separator">|</span></li>
                <li class="site-footer__subnav-item"><a style="color: #DECDE0 !important;" class="site-footer__subnav-link hover:text-white hover:underline transition-colors" href="<?php echo esc_url(home_url('/privacy-policy')); ?>">プライバシーポリシー</a></li>
                <li class="site-footer__subnav-item"><span style="color: rgba(255,255,255,0.3);" class="site-footer__subnav-separator">|</span></li>
                <li class="site-footer__subnav-item"><a style="color: #DECDE0 !important;" class="site-footer__subnav-link hover:text-white hover:underline transition-colors" href="<?php echo esc_url(home_url('/contact')); ?>">お問い合わせ</a></li>
            </ul>
            <style>
                .site-footer__subnav {
                    display: flex !important;
                    flex-wrap: wrap !important;
                    align-items: center !important;
                    gap: 0.5rem 1.75rem !important; /* 縦0.5rem、横1.75rem (28px) の明確なギャップ */
                }
                .site-footer__subnav-item {
                    display: inline-flex !important;
                    align-items: center !important;
                }
            </style>

            <!-- Copyright -->
            <p style="color: #DECDE0 !important; opacity: 0.85;" class="site-footer__copyright text-xs font-medium tracking-wider">
                &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.
            </p>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>
