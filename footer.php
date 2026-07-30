<footer style="background-color: #3D2D3F !important; color: #FFFFFF !important; border-top: 4px solid #A184A3 !important;" class="py-16 md:py-20 relative overflow-hidden isolate">
    <div class="container mx-auto px-6 grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 relative z-10">
        <!-- Column 1: Brand & Description (5 cols) -->
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
                <p style="color: #F1E6F2 !important;" class="text-sm md:text-base leading-relaxed max-w-md font-medium">
                    スタートアップの初期開発・DevSecOps一気通貫対応・データ計測基盤の設計・マーケティング運用の自動化まで、技術とビジネスを共創するパートナーです。
                </p>
            </div>
        </div>

        <!-- Column 2: Navigation Chips (7 cols) -->
        <div class="lg:col-span-7 flex flex-col justify-start">
            <h4 style="color: #FFFFFF !important; border-bottom: 3px solid #A184A3 !important;" class="text-base font-bold tracking-wider uppercase mb-8 pb-2 inline-block w-fit">
                ナビゲーション
            </h4>
            <nav class="footer-navigation">
                <ul class="grid grid-cols-2 sm:grid-cols-3 gap-3.5 text-sm list-none p-0 m-0">
                    <li><a style="background-color: rgba(255,255,255,0.12) !important; color: #FFFFFF !important; border: 1px solid rgba(255,255,255,0.25) !important;" class="footer-btn" href="<?php echo esc_url(home_url('/')); ?>">ホーム</a></li>
                    <li><a style="background-color: rgba(255,255,255,0.12) !important; color: #FFFFFF !important; border: 1px solid rgba(255,255,255,0.25) !important;" class="footer-btn" href="<?php echo esc_url(home_url('/services')); ?>">サービス・事業</a></li>
                    <li><a style="background-color: rgba(255,255,255,0.12) !important; color: #FFFFFF !important; border: 1px solid rgba(255,255,255,0.25) !important;" class="footer-btn" href="<?php echo esc_url(home_url('/product')); ?>">自社プロダクト</a></li>
                    <li><a style="background-color: rgba(255,255,255,0.12) !important; color: #FFFFFF !important; border: 1px solid rgba(255,255,255,0.25) !important;" class="footer-btn" href="<?php echo esc_url(home_url('/company')); ?>">会社概要・代表</a></li>
                    <li><a style="background-color: rgba(255,255,255,0.12) !important; color: #FFFFFF !important; border: 1px solid rgba(255,255,255,0.25) !important;" class="footer-btn" href="<?php echo esc_url(home_url('/news')); ?>">お知らせ・ブログ</a></li>
                    <li><a style="background-color: rgba(255,255,255,0.12) !important; color: #FFFFFF !important; border: 1px solid rgba(255,255,255,0.25) !important;" class="footer-btn" href="<?php echo esc_url(home_url('/contact')); ?>">お問い合わせ</a></li>
                    <li><a style="background-color: rgba(255,255,255,0.12) !important; color: #FFFFFF !important; border: 1px solid rgba(255,255,255,0.25) !important;" class="footer-btn" href="<?php echo esc_url(home_url('/privacy-policy')); ?>">プライバシーポリシー</a></li>
                </ul>
            </nav>
            <style>
                .footer-navigation ul {
                    list-style: none !important;
                    padding: 0 !important;
                    margin: 0 !important;
                    display: grid !important;
                    grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
                    gap: 0.875rem !important;
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
                .footer-navigation ul li a,
                .footer-btn {
                    background-color: rgba(255, 255, 255, 0.12) !important;
                    color: #FFFFFF !important;
                    border: 1px solid rgba(255, 255, 255, 0.25) !important;
                    padding: 10px 16px !important;
                    border-radius: 10px !important;
                    font-size: 0.875rem !important;
                    font-weight: 700 !important;
                    transition: all 0.25s ease !important;
                    display: flex !important;
                    align-items: center !important;
                    justify-content: center !important;
                    text-decoration: none !important;
                    box-shadow: 0 2px 4px rgba(0,0,0,0.1) !important;
                }
                .footer-navigation ul li a:hover,
                .footer-btn:hover {
                    background-color: #A184A3 !important;
                    color: #FFFFFF !important;
                    border-color: #FFFFFF !important;
                    transform: translateY(-2px) !important;
                    box-shadow: 0 4px 12px rgba(0,0,0,0.25) !important;
                }
            </style>
        </div>
    </div>

    <!-- Copyright -->
    <div style="border-top: 1px solid rgba(255, 255, 255, 0.15) !important;" class="container mx-auto px-6 mt-16 pt-8 text-center relative z-10">
        <p style="color: #DECDE0 !important;" class="text-xs font-bold">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>
