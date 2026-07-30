<footer style="background-color: #231725 !important; color: #D1C0D4 !important;" class="py-16 border-t border-[#544057] relative overflow-hidden isolate">
    <!-- Background glow effect -->
    <div class="absolute inset-x-0 bottom-0 -z-10 transform-gpu overflow-hidden blur-3xl opacity-20 pointer-events-none" aria-hidden="true">
        <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#A184A3] to-[#D8BFD8] sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"></div>
    </div>

    <div class="container mx-auto px-6 grid md:grid-cols-3 gap-12 relative z-10">
        <!-- Column 1: Brand & Description -->
        <div class="flex flex-col space-y-6">
            <div class="flex items-center space-x-3 group">
                <div class="w-10 h-10 flex items-center justify-center rounded-xl bg-white/10 ring-1 ring-white/20 group-hover:ring-[#D8BFD8] transition-all duration-500">
                    <svg class="w-8 h-8 transform group-hover:rotate-[5deg] transition-transform duration-500" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="100" cy="100" r="85" fill="none" stroke="#D8BFD8" stroke-width="8" />
                        <path d="M100 65 V135 M65 100 H135" stroke="#FFFFFF" stroke-width="20" stroke-linecap="round" />
                    </svg>
                </div>
                <div class="flex flex-col">
                    <span style="color: #D8BFD8 !important;" class="text-[9px] uppercase tracking-[0.25em] font-bold">MaruPlus Cube</span>
                    <h3 style="color: #FFFFFF !important;" class="text-base font-black tracking-tight">マルプラスのサンジョウ</h3>
                </div>
            </div>
            <p style="color: #CBD5E1 !important;" class="text-sm leading-relaxed">
                スタートアップの初期開発・DevSecOps一気通貫対応・データ計測基盤の設計・マーケティング運用の自動化まで、技術とビジネスを共創するパートナーです。
            </p>
        </div>

        <!-- Column 2: Navigation -->
        <div>
            <h4 style="color: #FFFFFF !important; border-bottom-color: rgba(255,255,255,0.15) !important;" class="text-base font-bold mb-6 pb-2 border-b w-24">ナビゲーション</h4>
            <nav class="footer-navigation">
                <?php
                if (has_nav_menu('footer-menu')) {
                    wp_nav_menu(array(
                        'theme_location' => 'footer-menu',
                        'menu_id'        => 'footer-menu',
                        'depth'          => 1,
                        'container'      => false,
                        'menu_class'     => 'flex flex-col space-y-3 text-sm list-none p-0 m-0',
                    ));
                } else {
                    // Fallback Navigation
                    ?>
                    <ul class="flex flex-col space-y-3 text-sm list-none p-0 m-0">
                        <li><a style="color: #CBD5E1 !important;" href="<?php echo esc_url(home_url('/')); ?>">ホーム</a></li>
                        <li><a style="color: #CBD5E1 !important;" href="<?php echo esc_url(home_url('/services')); ?>">サービス・事業</a></li>
                        <li><a style="color: #CBD5E1 !important;" href="<?php echo esc_url(home_url('/product')); ?>">プロダクト</a></li>
                        <li><a style="color: #CBD5E1 !important;" href="<?php echo esc_url(home_url('/company')); ?>">会社概要・代表</a></li>
                        <li><a style="color: #CBD5E1 !important;" href="<?php echo esc_url(home_url('/news')); ?>">お知らせ・技術ブログ</a></li>
                        <li><a style="color: #CBD5E1 !important;" href="<?php echo esc_url(home_url('/contact')); ?>">お問い合わせ</a></li>
                    </ul>
                    <?php
                }
                ?>
            </nav>
            <!-- Custom CSS for menu link hover animations in footer -->
            <style>
                .footer-navigation ul {
                    list-style: none !important;
                    padding: 0 !important;
                    margin: 0 !important;
                }
                .footer-navigation ul li {
                    list-style: none !important;
                    margin: 0 !important;
                }
                .footer-navigation ul li a {
                    color: #CBD5E1 !important;
                    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
                    display: inline-block;
                    text-decoration: none;
                }
                .footer-navigation ul li a:hover {
                    color: #D8BFD8 !important;
                    transform: translateX(6px);
                }
            </style>
        </div>

        <!-- Column 3: Authority / Advisor Profile -->
        <div>
            <h4 style="color: #FFFFFF !important; border-bottom-color: rgba(255,255,255,0.15) !important;" class="text-base font-bold mb-6 pb-2 border-b w-24">運営責任</h4>
            <div style="background-color: rgba(255, 255, 255, 0.05) !important; border: 1px solid rgba(255, 255, 255, 0.12) !important;" class="rounded-2xl p-6 backdrop-blur-sm">
                <p style="color: #E2E8F0 !important;" class="text-sm leading-relaxed mb-4">
                    <span style="color: #D8BFD8 !important;" class="block text-xs font-bold uppercase tracking-wider mb-1">監修・執筆</span>
                    <strong style="color: #FFFFFF !important;" class="font-bold text-sm">マルプラス開発局</strong><br>
                    <span style="color: #94A3B8 !important;" class="text-xs">（シニアデータエンジニア、SecOpsコンサルタント監修）</span>
                </p>
                <a style="color: #D8BFD8 !important;" href="<?php echo esc_url(home_url('/privacy-policy')); ?>" class="inline-flex items-center text-xs underline font-semibold transition-colors group/link hover:text-white">
                    プライバシーポリシー
                    <svg class="w-3.5 h-3.5 ml-1 transform group-hover/link:translate-x-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </a>
            </div>
        </div>
    </div>

    <!-- Copyright -->
    <div style="border-top-color: rgba(255,255,255,0.1) !important;" class="container mx-auto px-6 mt-16 pt-8 border-t text-center">
        <p style="color: #94A3B8 !important;" class="text-xs">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>
