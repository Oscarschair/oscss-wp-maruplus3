<footer style="background-color: #3D2D3F !important; color: #FFFFFF !important; border-top: 4px solid #A184A3 !important; padding-top: 5rem !important; padding-bottom: 4rem !important;" class="relative overflow-hidden isolate">
    <div class="container mx-auto px-6 md:px-12 relative z-10">
        <!-- 1st Layer: Brand & Main Navigation (IDOM style multi-column layout) -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 pb-16">
            <!-- Brand Info (Left: 4 cols) -->
            <div class="lg:col-span-4 flex flex-col justify-between space-y-6">
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
                    <p style="color: #F1E6F2 !important;" class="text-sm leading-relaxed max-w-sm font-medium opacity-90">
                        スタートアップの初期開発・DevSecOps一気通貫対応・データ計測基盤の設計・マーケティング運用の自動化まで、技術とビジネスを共創するパートナーです。
                    </p>
                </div>
            </div>

            <!-- Navigation Columns (Right: 8 cols, 3 Category Columns like IDOM) -->
            <div class="lg:col-span-8 grid grid-cols-2 md:grid-cols-3 gap-8">
                <!-- Category 1: サービス・プロダクト -->
                <div>
                    <h5 style="color: #FFFFFF !important; border-bottom: 2px solid #A184A3 !important;" class="text-xs font-bold tracking-widest uppercase mb-5 pb-2 inline-block">
                        事業・プロダクト
                    </h5>
                    <ul class="space-y-3 text-sm list-none p-0 m-0">
                        <li><a style="color: #DECDE0 !important;" class="hover:text-white hover:underline transition-colors flex items-center" href="<?php echo esc_url(home_url('/services')); ?>"><span class="text-xs opacity-60 mr-1.5">›</span> サービス・事業</a></li>
                        <li><a style="color: #DECDE0 !important;" class="hover:text-white hover:underline transition-colors flex items-center" href="<?php echo esc_url(home_url('/product')); ?>"><span class="text-xs opacity-60 mr-1.5">›</span> 自社プロダクト</a></li>
                    </ul>
                </div>

                <!-- Category 2: 企業情報 -->
                <div>
                    <h5 style="color: #FFFFFF !important; border-bottom: 2px solid #A184A3 !important;" class="text-xs font-bold tracking-widest uppercase mb-5 pb-2 inline-block">
                        企業情報
                    </h5>
                    <ul class="space-y-3 text-sm list-none p-0 m-0">
                        <li><a style="color: #DECDE0 !important;" class="hover:text-white hover:underline transition-colors flex items-center" href="<?php echo esc_url(home_url('/company')); ?>"><span class="text-xs opacity-60 mr-1.5">›</span> 会社概要・代表</a></li>
                        <li><a style="color: #DECDE0 !important;" class="hover:text-white hover:underline transition-colors flex items-center" href="<?php echo esc_url(home_url('/news')); ?>"><span class="text-xs opacity-60 mr-1.5">›</span> お知らせ・ブログ</a></li>
                    </ul>
                </div>

                <!-- Category 3: サポート・お問い合わせ -->
                <div>
                    <h5 style="color: #FFFFFF !important; border-bottom: 2px solid #A184A3 !important;" class="text-xs font-bold tracking-widest uppercase mb-5 pb-2 inline-block">
                        お問い合わせ
                    </h5>
                    <ul class="space-y-3 text-sm list-none p-0 m-0">
                        <li><a style="color: #DECDE0 !important;" class="hover:text-white hover:underline transition-colors flex items-center" href="<?php echo esc_url(home_url('/contact')); ?>"><span class="text-xs opacity-60 mr-1.5">›</span> お問い合わせフォーム</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- 2nd Layer: Bottom Sub-nav & Copyright (IDOM style bottom bar) -->
        <div style="border-top: 1px solid rgba(255, 255, 255, 0.15) !important;" class="pt-8 flex flex-col md:flex-row justify-between items-center gap-6">
            <!-- Inline Sub-navigation (Privacy policy integrated seamlessly) -->
            <ul class="flex flex-wrap items-center gap-x-6 gap-y-2 text-xs list-none p-0 m-0">
                <li><a style="color: #DECDE0 !important;" class="hover:text-white hover:underline transition-colors" href="<?php echo esc_url(home_url('/')); ?>">ホーム</a></li>
                <li><span style="color: rgba(255,255,255,0.3);">|</span></li>
                <li><a style="color: #DECDE0 !important;" class="hover:text-white hover:underline transition-colors" href="<?php echo esc_url(home_url('/privacy-policy')); ?>">プライバシーポリシー</a></li>
                <li><span style="color: rgba(255,255,255,0.3);">|</span></li>
                <li><a style="color: #DECDE0 !important;" class="hover:text-white hover:underline transition-colors" href="<?php echo esc_url(home_url('/contact')); ?>">お問い合わせ</a></li>
            </ul>

            <!-- Copyright -->
            <p style="color: #DECDE0 !important; opacity: 0.85;" class="text-xs font-medium tracking-wider">
                &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.
            </p>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>
