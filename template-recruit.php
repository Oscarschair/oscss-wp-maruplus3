<?php

/**
 * Template Name: 採用情報
 *
 * @package oscss-wp-maruplus3
 */

get_header();
?>

<main id="primary" class="site-main font-sans bg-gray-50 pb-24">
    <!-- Hero Section -->
    <section class="relative overflow-hidden bg-hero-gradient text-white pt-24 pb-32">
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden z-0">
            <div class="absolute w-64 h-64 bg-brand-600 rounded-full mix-blend-multiply filter blur-3xl opacity-50 animate-float" style="top: -10%; left: -10%;"></div>
            <div class="absolute w-48 h-48 bg-lilac rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-pulse-slow" style="top: 20%; right: -10%;"></div>
        </div>
        <div class="container mx-auto px-6 relative z-10 text-center">
            <h1 class="text-4xl md:text-5xl font-extrabold mb-4 tracking-tight drop-shadow-lg text-transparent bg-clip-text bg-gradient-to-r from-white to-lilac">
                <?php the_title(); ?>
            </h1>
            <p class="text-brand-200 text-lg">ともに次のステージへ</p>
        </div>
        <div class="absolute bottom-0 w-full overflow-hidden leading-none">
            <svg class="relative block w-full h-12 md:h-16" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V95.8C59.71,118,130.42,120.2,207.2,109.83,248.66,104.34,288.66,82.49,321.39,56.44Z" class="fill-gray-50"></path>
            </svg>
        </div>
    </section>

    <div class="container mx-auto px-6 relative z-10 -mt-16 md:-mt-20">
        
        <!-- 1. 働く環境・メンバー -->
        <section id="environment" class="mb-20">
            <div class="bg-white rounded-3xl shadow-xl p-8 md:p-12">
                <div class="text-center mb-10">
                    <span class="text-sm font-bold text-brand-600 mb-2 block uppercase tracking-wider">Culture & Environment</span>
                    <h2 class="text-3xl font-extrabold text-gray-900 tracking-tight">働く環境・メンバー</h2>
                    <div class="w-12 h-1 bg-brand-500 mx-auto mt-4 rounded-full"></div>
                </div>
                <div class="max-w-4xl mx-auto">
                    <p class="text-lg text-center mb-10 text-gray-600 leading-relaxed">
                        社内の雰囲気や文化が伝わるような写真や文章を配置します。多様なバックグラウンドを持つメンバーが集まり、切磋琢磨しながら価値を創造しています。
                    </p>
                    <div class="grid md:grid-cols-3 gap-6">
                        <div class="group overflow-hidden rounded-2xl shadow-lg border border-gray-100">
                            <img src="https://via.placeholder.com/400x300" alt="オフィスの風景" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <div class="group overflow-hidden rounded-2xl shadow-lg border border-gray-100">
                            <img src="https://via.placeholder.com/400x300" alt="チームメンバー" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <div class="group overflow-hidden rounded-2xl shadow-lg border border-gray-100">
                            <img src="https://via.placeholder.com/400x300" alt="社内イベント" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 2. 募集要項 -->
        <section id="job-listings">
            <div class="text-center mb-10">
                <span class="text-sm font-bold text-brand-600 mb-2 block uppercase tracking-wider">Jobs</span>
                <h2 class="text-3xl font-extrabold text-gray-900 tracking-tight">募集要項</h2>
                <div class="w-12 h-1 bg-brand-500 mx-auto mt-4 rounded-full"></div>
            </div>
            
            <div class="max-w-3xl mx-auto space-y-6">
                <!-- 募集職種 -->
                <div class="bg-white rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border-l-8 border-brand-500 flex flex-col md:flex-row md:items-center md:justify-between gap-6">
                    <div>
                        <span class="text-xs font-bold bg-brand-100 text-brand-700 px-3 py-1 rounded-full mb-3 inline-block">エンジニア</span>
                        <h3 class="text-2xl font-bold mb-2 text-gray-900">Webエンジニア</h3>
                        <p class="text-gray-600 text-sm md:text-base leading-relaxed">
                            求める人物像や仕事内容をここに記述します。モダンなスタックでの開発経験者を歓迎します。
                        </p>
                    </div>
                    <div class="shrink-0 flex justify-start md:justify-end">
                        <a href="#apply" class="inline-flex items-center px-6 py-3 bg-brand-600 hover:bg-brand-700 text-white font-bold rounded-full shadow-lg hover:shadow-brand-500/50 transition-all duration-300">
                            応募する
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </a>
                    </div>
                </div>
                
                <div class="bg-white rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border-l-8 border-gold flex flex-col md:flex-row md:items-center md:justify-between gap-6">
                    <div>
                        <span class="text-xs font-bold bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full mb-3 inline-block">マーケティング</span>
                        <h3 class="text-2xl font-bold mb-2 text-gray-900">データアナリスト</h3>
                        <p class="text-gray-600 text-sm md:text-base leading-relaxed">
                            BigQueryやGTMを活用した計測基盤の設計やデータ分析業務をお任せします。
                        </p>
                    </div>
                    <div class="shrink-0 flex justify-start md:justify-end">
                        <a href="#apply" class="inline-flex items-center px-6 py-3 bg-brand-600 hover:bg-brand-700 text-white font-bold rounded-full shadow-lg hover:shadow-brand-500/50 transition-all duration-300">
                            応募する
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </a>
                    </div>
                </div>

            </div>
        </section>
    </div>
</main>

<?php
get_footer();
