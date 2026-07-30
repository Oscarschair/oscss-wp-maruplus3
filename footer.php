<footer style="background: linear-gradient(180deg, #1C121E 0%, #0F0A11 100%) !important; color: #E2E8F0 !important;" class="py-16 border-t border-[#433045] relative overflow-hidden isolate">
    <!-- Background glow effect -->
    <div class="absolute inset-x-0 bottom-0 -z-10 transform-gpu overflow-hidden blur-3xl opacity-20 pointer-events-none" aria-hidden="true">
        <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#A184A3] to-[#D8BFD8] sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"></div>
    </div>

    <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-12 relative z-10">
        <!-- Column 1: Brand & Description -->
        <div class="flex flex-col space-y-6">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center space-x-3.5 group outline-none">
                <div class="w-11 h-11 flex items-center justify-center rounded-xl bg-white/10 ring-1 ring-white/20 group-hover:ring-[#D8BFD8] transition-all duration-500 shadow-md">
                    <svg class="w-8 h-8 transform group-hover:scale-105 group-hover:rotate-[5deg] transition-transform duration-500" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="100" cy="100" r="85" fill="#3D2D3F" stroke="#D8BFD8" stroke-width="6" />
                        <path d="M100 65 V135 M65 100 H135" stroke="#FFFFFF" stroke-width="18" stroke-linecap="round" />
                    </svg>
                </div>
                <div class="flex flex-col">
                    <span style="color: #D1BBD3 !important;" class="text-[9px] uppercase tracking-[0.25em] font-extrabold">MaruPlus Cube</span>
                    <h3 style="color: #FFFFFF !important;" class="text-lg font-black tracking-tight">マルプラスのサンジョウ</h3>
                </div>
            </a>
            <p style="color: #CBD5E1 !important;" class="text-sm leading-relaxed">
                スタートアップの初期開発・DevSecOps一気通貫対応・データ計測基盤の設計・マーケティング運用の自動化まで、技術とビジネスを共創するパートナーです。
            </p>
        </div>

        <!-- Column 2: Navigation -->
        <div>
            <h4 style="color: #FFFFFF !important; border-bottom-color: rgba(216, 191, 216, 0.25) !important;" class="text-base font-bold mb-6 pb-2 border-b w-28">ナビゲーション</h4>
            <nav class="footer-navigation">
                <?php
                if (has_nav_menu('footer-menu')) {
                    wp_nav_menu(array(
                        'theme_location' => 'footer-menu',
                        'menu_id'        => 'footer-menu',
                        'depth'          => 1,
                        'container'      => false,
                        'menu_class'     => 'grid grid-cols-1 sm:grid-cols-2 gap-y-3 gap-x-4 text-sm list-none p-0 m-0',
                    ));
                } else {
                    // Fallback Navigation
                    ?>
                    <ul class="grid grid-cols-1 sm:grid-cols-2 gap-y-3 gap-x-4 text-sm list-none p-0 m-0">
                        <li><a style="color: #CBD5E1 !important;" href="<?php echo esc_url(home_url('/')); ?>">ホーム</a></li>
                        <li><a style="color: #CBD5E1 !important;" href="<?php echo esc_url(home_url('/services')); ?>">サービス・事業</a></li>
                        <li><a style="color: #CBD5E1 !important;" href="<?php echo esc_url(home_url('/product')); ?>">自社プロダクト</a></li>
                        <li><a style="color: #CBD5E1 !important;" href="<?php echo esc_url(home_url('/company')); ?>">会社概要・代表</a></li>
                        <li><a style="color: #CBD5E1 !important;" href="<?php echo esc_url(home_url('/news')); ?>">お知らせ・ブログ</a></li>
                        <li><a style="color: #CBD5E1 !important;" href="<?php echo esc_url(home_url('/contact')); ?>">お問い合わせ</a></li>
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
                    gap: 0.75rem 1rem !important;
                }
                .footer-navigation ul li {
                    list-style: none !important;
                    margin: 0 !important;
                }
                .footer-navigation ul li a {
                    color: #CBD5E1 !important;
                    font-size: 0.875rem !important;
                    font-weight: 500 !important;
                    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1) !important;
                    display: inline-flex !important;
                    align-items: center !important;
                    text-decoration: none !important;
                }
                .footer-navigation ul li a:hover {
                    color: #F3E8FF !important;
                    transform: translateX(4px) !important;
                }
            </style>
        </div>

        <!-- Column 3: Authority / Advisor Profile -->
        <div>
            <h4 style="color: #FFFFFF !important; border-bottom-color: rgba(216, 191, 216, 0.25) !important;" class="text-base font-bold mb-6 pb-2 border-b w-28">運営責任</h4>
            <div style="background-color: rgba(255, 255, 255, 0.05) !important; border: 1px solid rgba(216, 191, 216, 0.2) !important;" class="rounded-2xl p-6 backdrop-blur-md shadow-inner">
                <p style="color: #E2E8F0 !important;" class="text-sm leading-relaxed mb-4">
                    <span style="color: #D8BFD8 !important;" class="block text-xs font-extrabold uppercase tracking-wider mb-1">監修・執筆</span>
                    <strong style="color: #FFFFFF !important;" class="font-bold text-sm">マルプラス開発局</strong><br>
                    <span style="color: #94A3B8 !important;" class="text-xs">（シニアデータエンジニア、SecOpsコンサルタント監修）</span>
                </p>
                <div class="pt-2">
                    <a style="color: #D8BFD8 !important;" href="<?php echo esc_url(home_url('/privacy-policy')); ?>" class="inline-flex items-center gap-1.5 text-xs font-bold underline transition-colors hover:text-white whitespace-nowrap group/link">
                        <span>プライバシーポリシー</span>
                        <svg class="w-4 h-4 transform group-hover/link:translate-x-0.5 transition-transform flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Copyright -->
    <div style="border-top-color: rgba(255, 255, 255, 0.1) !important;" class="container mx-auto px-6 mt-16 pt-8 border-t text-center relative z-10">
        <p style="color: #94A3B8 !important;" class="text-xs font-medium">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>
