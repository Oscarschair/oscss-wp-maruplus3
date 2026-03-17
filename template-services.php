<?php

/**
 * Template Name: サービス・事業紹介
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
            <div class="absolute w-64 h-64 bg-brand-400 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse-slow" style="top: 20%; right: -10%;"></div>
            <div class="absolute w-48 h-48 bg-lilac rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-float" style="bottom: -10%; left: 30%;"></div>
        </div>
        <div class="container mx-auto px-6 relative z-10 text-center">
            <span class="inline-block py-1 px-3 rounded-full bg-white/10 backdrop-blur-md text-sm font-semibold tracking-wider mb-4 border border-white/20">Data × Marketing × Global</span>
            <h1 class="text-4xl md:text-5xl font-extrabold mb-4 tracking-tight drop-shadow-lg text-transparent bg-clip-text bg-gradient-to-r from-white to-lilac">
                <?php the_title(); ?>
            </h1>
            <p class="text-brand-200 text-lg">事業成長を加速させる独自のバリュー</p>
        </div>
        <div class="absolute bottom-0 w-full overflow-hidden leading-none">
            <svg class="relative block w-full h-12 md:h-16" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V95.8C59.71,118,130.42,120.2,207.2,109.83,248.66,104.34,288.66,82.49,321.39,56.44Z" class="fill-gray-50"></path>
            </svg>
        </div>
    </section>

    <div class="container mx-auto px-6 relative z-10 -mt-16 md:-mt-20">
        
        <!-- 3つの要素が重なる「3乗」の価値 -->
        <section id="cubed-value" class="mb-24">
            <div class="bg-white rounded-3xl shadow-xl p-8 md:p-12 border-t-4 border-brand-500">
                <div class="text-center mb-10">
                    <span class="text-sm font-bold text-brand-600 mb-2 block uppercase tracking-wider">Our Values</span>
                    <h2 class="text-3xl font-extrabold text-gray-900 tracking-tight">3つのコア・バリューが生む「3乗」の価値</h2>
                    <div class="w-12 h-1 bg-brand-500 mx-auto mt-4 rounded-full"></div>
                </div>
                
                <div class="max-w-4xl mx-auto text-lg text-center leading-relaxed text-gray-700">
                    <p class="mb-8">
                        SFさんの多才なスキルを、クライアントに提供する「価値」の切り口で3つに分類しました。<br class="hidden md:block">
                        これら3つが組み合わさることで、SFさんにしか出せない独自の価値が生まれます。
                    </p>
                    
                    <div class="flex flex-col md:flex-row items-center justify-center gap-4 text-xl md:text-2xl font-bold my-10 font-sans">
                        <span class="inline-flex items-center justify-center w-full md:w-auto bg-gray-50 border border-gray-200 rounded-xl px-6 py-4 shadow-sm text-brand-900">分析</span> 
                        <span class="text-gray-400">×</span>
                        <span class="inline-flex items-center justify-center w-full md:w-auto bg-gray-50 border border-gray-200 rounded-xl px-6 py-4 shadow-sm text-brand-900">自動化</span> 
                        <span class="text-gray-400">×</span>
                        <span class="inline-flex items-center justify-center w-full md:w-auto bg-gray-50 border border-gray-200 rounded-xl px-6 py-4 shadow-sm text-brand-900">グローバル</span> 
                        <span class="text-gray-400">＝</span>
                        <span class="inline-flex items-center justify-center w-full md:w-auto bg-gradient-to-r from-brand-600 to-brand-400 text-white rounded-xl px-6 py-4 shadow-md mt-4 md:mt-0">次世代のマーケティング基盤構築</span>
                    </div>
                    
                    <p class="bg-brand-50 p-6 rounded-2xl text-left border border-brand-100 text-base md:text-lg">
                        例えば、「中華圏向けのECサイトにおいて、広告からCRMまでをAPIで統合し、ROASをBigQueryで日次可視化する」といった、通常なら3社に発注が必要な業務をワンストップで完結できるのが最大の武器です。
                    </p>
                </div>
            </div>
        </section>

        <!-- 3つのコア・バリュー (Premium Cards matching Front page) -->
        <section id="core-values">
            <div class="text-center mb-10">
                <h2 class="text-3xl font-extrabold text-gray-900 tracking-tight">Core Services</h2>
                <div class="w-12 h-1 bg-brand-500 mx-auto mt-4 rounded-full"></div>
            </div>

            <div class="grid md:grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- 1. Data Enabler -->
                <div class="group bg-white p-8 md:p-10 rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border-t-4 border-gold relative overflow-hidden flex flex-col h-full bg-opacity-95 backdrop-blur-sm">
                    <div class="absolute top-0 right-0 -mt-8 -mr-8 w-32 h-32 bg-gold opacity-10 rounded-full blur-2xl group-hover:scale-150 transition-transform duration-700 pointer-events-none"></div>
                    <div class="flex-grow z-10">
                        <span class="text-sm font-bold text-yellow-600 mb-2 block uppercase tracking-wider">Service 01</span>
                        <h3 class="text-2xl font-bold mb-4 text-gray-900 leading-tight">【Data Enabler】<br/><span class="text-xl text-gray-700 font-medium">データの実装と可視化</span></h3>
                        <div class="bg-gray-50 p-4 rounded-xl mb-6 border-l-4 border-gold">
                            <p class="font-bold text-gray-800 text-sm md:text-base">「見えないものを、意思決定できる形に変える」</p>
                        </div>
                        <div class="space-y-4 text-gray-600 text-sm md:text-base leading-relaxed">
                            <p><strong class="font-bold text-gray-900">内容:</strong> Web解析、データマート構築（Bronze/Silver/Gold設計）、SQL分析。</p>
                            <p><strong class="font-bold text-gray-900">強み:</strong> 単なるレポート作成ではなく、BigQueryやGTMを用いた「計測基盤そのもの」を設計・実装できる点。</p>
                        </div>
                    </div>
                </div>

                <!-- 2. Marketing Architect -->
                <div class="group bg-white p-8 md:p-10 rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border-t-4 border-silver relative overflow-hidden flex flex-col h-full bg-opacity-95 backdrop-blur-sm">
                    <div class="absolute top-0 right-0 -mt-8 -mr-8 w-32 h-32 bg-silver opacity-20 rounded-full blur-2xl group-hover:scale-150 transition-transform duration-700 pointer-events-none"></div>
                    <div class="flex-grow z-10">
                        <span class="text-sm font-bold text-gray-500 mb-2 block uppercase tracking-wider">Service 02</span>
                        <h3 class="text-2xl font-bold mb-4 text-gray-900 leading-tight">【Marketing Architect】<br/><span class="text-xl text-gray-700 font-medium">仕組みの自動化と最適化</span></h3>
                        <div class="bg-gray-50 p-4 rounded-xl mb-6 border-l-4 border-silver">
                            <p class="font-bold text-gray-800 text-sm md:text-base">「バラバラな点と点を繋ぎ、自動で回る仕組みを作る」</p>
                        </div>
                        <div class="space-y-4 text-gray-600 text-sm md:text-base leading-relaxed">
                            <p><strong class="font-bold text-gray-900">内容:</strong> CRM/MA導入、API連携、ワークフロー設計、広告データ統合。</p>
                            <p><strong class="font-bold text-gray-900">強み:</strong> マーケティングの知見とエンジニアリングのスキルの掛け合わせにより、業務効率とLTV（顧客生涯価値）を同時に高める点。</p>
                        </div>
                    </div>
                </div>

                <!-- 3. Global Tech Director -->
                <div class="group bg-white p-8 md:p-10 rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border-t-4 border-copper relative overflow-hidden flex flex-col h-full bg-opacity-95 backdrop-blur-sm">
                    <div class="absolute top-0 right-0 -mt-8 -mr-8 w-32 h-32 bg-copper opacity-20 rounded-full blur-2xl group-hover:scale-150 transition-transform duration-700 pointer-events-none"></div>
                    <div class="flex-grow z-10">
                        <span class="text-sm font-bold text-orange-600 mb-2 block uppercase tracking-wider">Service 03</span>
                        <h3 class="text-2xl font-bold mb-4 text-gray-900 leading-tight">【Global Tech Director】<br/><span class="text-xl text-gray-700 font-medium">越境実装とPM</span></h3>
                        <div class="bg-gray-50 p-4 rounded-xl mb-6 border-l-4 border-copper">
                            <p class="font-bold text-gray-800 text-sm md:text-base">「国境や技術の壁を越えてプロジェクトを完遂させる」</p>
                        </div>
                        <div class="space-y-4 text-gray-600 text-sm md:text-base leading-relaxed">
                            <p><strong class="font-bold text-gray-900">内容:</strong> 多言語ローカライズ（中・繁・日）、Webサイト制作、システム開発、PM/要件定義。</p>
                            <p><strong class="font-bold text-gray-900">強み:</strong> 翻訳だけでなく、システム仕様やビジネス要件を理解した上で、海外展開や複雑なWebプロジェクトをリードできる点。</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="text-center mt-20 bg-brand-50 rounded-3xl p-8 md:p-10 border border-brand-100 max-w-4xl mx-auto shadow-sm">
             <p class="text-brand-900 font-bold text-lg md:text-xl leading-relaxed">
                 この3つの分類（Data / Marketing / Global）をベースに、Webサイトのサービス紹介やプロフィールを整理しました。
             </p>
             <p class="text-gray-600 mt-4 text-base md:text-lg">
                 次は、この3つの柱を元に、クライアントに刺さる「具体的なキャッチコピー」や「サービスパッケージ案」を作成しましょう。
             </p>
             <div class="mt-8">
                 <a href="/contact" class="inline-flex items-center px-8 py-4 bg-brand-600 hover:bg-brand-700 text-white font-bold rounded-full shadow-lg hover:shadow-brand-500/50 hover:-translate-y-1 transition-all duration-300 transform">
                     お問い合わせはこちら
                     <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                 </a>
             </div>
        </div>
    </div>
</main>

<?php
get_footer();
