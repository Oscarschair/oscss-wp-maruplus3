<?php wp_footer(); ?>
<footer class="bg-gradient-to-b from-brand-950 to-gray-950 text-gray-300 py-16 border-t border-brand-900 relative overflow-hidden isolate">
    <!-- Background glow effect -->
    <div class="absolute inset-x-0 bottom-0 -z-10 transform-gpu overflow-hidden blur-3xl opacity-10 pointer-events-none" aria-hidden="true">
        <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-brand-400 to-lilac sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"></div>
    </div>

    <div class="container mx-auto px-6 grid md:grid-cols-3 gap-12">
        <!-- Column 1: Brand & Description -->
        <div class="flex flex-col space-y-6">
            <div class="flex items-center space-x-3 group">
                <div class="w-10 h-10 flex items-center justify-center rounded-xl bg-white/10 ring-1 ring-white/20 group-hover:ring-brand-400 transition-all duration-500">
                    <svg class="w-8 h-8 transform group-hover:rotate-[5deg] transition-transform duration-500" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="100" cy="100" r="85" fill="none" stroke="#D8BFD8" stroke-width="1.5" />
                        <path d="M100 65 V135 M65 100 H135" stroke="#FFFFFF" stroke-width="20" stroke-linecap="round" />
                    </svg>
                </div>
                <div class="flex flex-col">
                    <span class="text-[8px] uppercase tracking-[0.25em] text-brand-400 font-bold">MaruPlus Cube</span>
                    <h3 class="text-white text-base font-black tracking-tight">マルプラスのサンジョウ</h3>
                </div>
            </div>
            <p class="text-sm text-gray-400 leading-relaxed">
                スタートアップの初期開発・DevSecOps一気通貫対応・データ計測基盤の設計・マーケティング運用の自動化まで、技術とビジネスを共創するパートナーです。
            </p>
        </div>

        <!-- Column 2: Navigation -->
        <div>
            <h4 class="text-white text-base font-bold mb-6 pb-2 border-b border-white/10 w-24">ナビゲーション</h4>
            <nav class="footer-navigation">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer-menu',
                    'menu_id'        => 'footer-menu',
                    'depth'          => 1,
                    'container'      => false,
                    'menu_class'     => 'flex flex-col space-y-3.5 text-sm',
                ));
                ?>
            </nav>
            <!-- Custom CSS for menu link hover animations in footer -->
            <style>
                .footer-navigation ul li a {
                    color: #9ca3af;
                    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
                    display: inline-block;
                }
                .footer-navigation ul li a:hover {
                    color: #d8bfd8;
                    transform: translateX(6px);
                }
            </style>
        </div>

        <!-- Column 3: Authority / Advisor Profile -->
        <div>
            <h4 class="text-white text-base font-bold mb-6 pb-2 border-b border-white/10 w-24">運営責任</h4>
            <div class="bg-white/5 rounded-2xl p-6 border border-white/10 backdrop-blur-sm">
                <p class="text-sm text-gray-300 leading-relaxed mb-4">
                    <span class="block text-xs text-brand-400 font-bold uppercase tracking-wider mb-1">監修・執筆</span>
                    <strong class="text-white font-bold text-sm">マルプラス開発局</strong><br>
                    <span class="text-xs text-gray-400">（シニアデータエンジニア、SecOpsコンサルタント監修）</span>
                </p>
                <a href="<?php echo esc_url(home_url('/privacy-policy')); ?>" class="inline-flex items-center text-xs text-brand-400 hover:text-brand-300 underline font-semibold transition-colors group/link">
                    プライバシーポリシー
                    <svg class="w-3.5 h-3.5 ml-1 transform group-hover/link:translate-x-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </a>
            </div>
        </div>
    </div>

    <!-- Copyright -->
    <div class="container mx-auto px-6 mt-16 pt-8 border-t border-white/5 text-center">
        <p class="text-xs text-gray-500">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
    </div>
</footer>
</body>

</html>
