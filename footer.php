<?php wp_footer(); ?>
<footer class="bg-brand-950 text-gray-300 py-16 border-t border-brand-900">
    <div class="container mx-auto px-6 grid md:grid-cols-3 gap-12">
        <!-- Column 1: Agency Description -->
        <div>
            <h3 class="text-white text-lg font-bold mb-4">マルプラスのサンジョウ</h3>
            <p class="text-sm text-gray-400 leading-relaxed">
                スタートアップの初期開発・DevSecOps一気通貫対応・データ計測基盤の設計・マーケティング運用の自動化まで、技術とビジネスを共創するパートナーです。
            </p>
        </div>
        <!-- Column 2: Navigation -->
        <div>
            <h3 class="text-white text-lg font-bold mb-4">ナビゲーション</h3>
            <nav class="footer-navigation">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer-menu',
                    'menu_id'        => 'footer-menu',
                    'depth'          => 1,
                    'menu_class'     => 'flex flex-col space-y-2 text-sm text-gray-400 hover:text-white',
                ));
                ?>
            </nav>
        </div>
        <!-- Column 3: Authority / Author profile -->
        <div>
            <h3 class="text-white text-lg font-bold mb-4">運営責任</h3>
            <p class="text-sm text-gray-400 leading-relaxed mb-4">
                監修・執筆：マルプラス開発局<br>
                （シニアデータエンジニア、SecOpsコンサルタント監修）
            </p>
            <a href="<?php echo esc_url(home_url('/privacy-policy')); ?>" class="text-sm text-brand-400 hover:text-brand-300 underline transition-colors">プライバシーポリシー</a>
        </div>
    </div>
    <!-- Bottom line -->
    <div class="container mx-auto px-6 mt-12 pt-8 border-t border-brand-900 text-center">
        <p class="text-sm text-gray-500">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
    </div>
</footer>
</body>

</html>
