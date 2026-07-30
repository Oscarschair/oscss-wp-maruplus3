<footer style="background-color: #3D2D3F !important; color: #FFFFFF !important; border-top: 4px solid #A184A3 !important;" class="py-16 relative overflow-hidden isolate">
    <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-12 relative z-10">
        <!-- Column 1: Brand & Description -->
        <div class="flex flex-col space-y-6">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center space-x-3.5 group outline-none">
                <div style="background-color: #544057 !important; border: 2px solid #A184A3 !important;" class="w-12 h-12 flex items-center justify-center rounded-xl shadow-lg">
                    <svg class="w-9 h-9" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="100" cy="100" r="85" fill="#3D2D3F" stroke="#D8BFD8" stroke-width="8" />
                        <path d="M100 65 V135 M65 100 H135" stroke="#FFFFFF" stroke-width="20" stroke-linecap="round" />
                    </svg>
                </div>
                <div class="flex flex-col leading-none">
                    <span style="color: #FFD700 !important;" class="text-[10px] uppercase tracking-[0.25em] font-extrabold mb-1">MaruPlus Cube</span>
                    <h3 style="color: #FFFFFF !important;" class="text-xl font-black tracking-tight">マルプラスのサンジョウ</h3>
                </div>
            </a>
            <p style="color: #F1E6F2 !important;" class="text-base leading-relaxed font-medium">
                スタートアップの初期開発・DevSecOps一気通貫対応・データ計測基盤の設計・マーケティング運用の自動化まで、技術とビジネスを共創するパートナーです。
            </p>
        </div>

        <!-- Column 2: Navigation -->
        <div>
            <h4 style="color: #FFFFFF !important; border-bottom: 3px solid #A184A3 !important;" class="text-lg font-bold mb-6 pb-2 inline-block">ナビゲーション</h4>
            <nav class="footer-navigation">
                <?php
                if (has_nav_menu('footer-menu')) {
                    wp_nav_menu(array(
                        'theme_location' => 'footer-menu',
                        'menu_id'        => 'footer-menu',
                        'depth'          => 1,
                        'container'      => false,
                        'menu_class'     => 'grid grid-cols-1 sm:grid-cols-2 gap-3 text-sm list-none p-0 m-0',
                    ));
                } else {
                    // Fallback Navigation Chips
                    ?>
                    <ul class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-sm list-none p-0 m-0">
                        <li><a style="background-color: rgba(255,255,255,0.12) !important; color: #FFFFFF !important; border: 1px solid rgba(255,255,255,0.2) !important;" class="footer-btn" href="<?php echo esc_url(home_url('/')); ?>">ホーム</a></li>
                        <li><a style="background-color: rgba(255,255,255,0.12) !important; color: #FFFFFF !important; border: 1px solid rgba(255,255,255,0.2) !important;" class="footer-btn" href="<?php echo esc_url(home_url('/services')); ?>">サービス・事業</a></li>
                        <li><a style="background-color: rgba(255,255,255,0.12) !important; color: #FFFFFF !important; border: 1px solid rgba(255,255,255,0.2) !important;" class="footer-btn" href="<?php echo esc_url(home_url('/product')); ?>">自社プロダクト</a></li>
                        <li><a style="background-color: rgba(255,255,255,0.12) !important; color: #FFFFFF !important; border: 1px solid rgba(255,255,255,0.2) !important;" class="footer-btn" href="<?php echo esc_url(home_url('/company')); ?>">会社概要・代表</a></li>
                        <li><a style="background-color: rgba(255,255,255,0.12) !important; color: #FFFFFF !important; border: 1px solid rgba(255,255,255,0.2) !important;" class="footer-btn" href="<?php echo esc_url(home_url('/news')); ?>">お知らせ・ブログ</a></li>
                        <li><a style="background-color: rgba(255,255,255,0.12) !important; color: #FFFFFF !important; border: 1px solid rgba(255,255,255,0.2) !important;" class="footer-btn" href="<?php echo esc_url(home_url('/contact')); ?>">お問い合わせ</a></li>
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
                    gap: 0.75rem !important;
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
                    padding: 10px 14px !important;
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

        <!-- Column 3: Legal & Policy -->
        <div>
            <h4 style="color: #FFFFFF !important; border-bottom: 3px solid #A184A3 !important;" class="text-lg font-bold mb-6 pb-2 inline-block">ポリシー・規約</h4>
            <div class="flex flex-col space-y-4">
                <a style="background-color: rgba(255, 255, 255, 0.12) !important; color: #FFFFFF !important; border: 1px solid rgba(255, 255, 255, 0.25) !important;" href="<?php echo esc_url(home_url('/privacy-policy')); ?>" class="footer-btn inline-flex items-center justify-between px-6 py-3.5 rounded-xl font-bold text-sm transition-all duration-300">
                    <span>プライバシーポリシー</span>
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </a>
            </div>
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
