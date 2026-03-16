<?php

/**
 * The template for displaying the front page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package oscss-wp-maruplus3
 */

get_header();
?>

<main id="primary" class="site-main font-sans">
    <!-- 1. キャッチコピー : Hero Section with dynamic aesthetics -->
    <section id="hero" class="relative overflow-hidden bg-hero-gradient text-white pt-32 pb-40">
        <!-- Abstract Background Shapes (Dynamic feel) -->
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden z-0">
            <div class="absolute w-96 h-96 bg-brand-600 rounded-full mix-blend-multiply filter blur-3xl opacity-50 animate-float" style="top: -10%; left: -10%;"></div>
            <div class="absolute w-96 h-96 bg-brand-400 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse-slow" style="top: 20%; right: -10%;"></div>
            <div class="absolute w-64 h-64 bg-lilac rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-float" style="bottom: -10%; left: 30%;"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10 text-center">
            <span class="inline-block py-1 px-3 rounded-full bg-white/10 backdrop-blur-md text-sm font-semibold tracking-wider mb-6 border border-white/20">Data × Marketing × Global</span>
            <h1 class="text-4xl md:text-6xl font-extrabold mb-8 leading-tight tracking-tight drop-shadow-lg">
                3つのコア・バリューが生む<br class="hidden md:block" />
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-lilac to-white">「3乗」の価値</span>
            </h1>
            <div class="max-w-3xl mx-auto text-lg md:text-xl text-brand-100 font-medium leading-relaxed drop-shadow-md">
                <p class="mb-6">
                    [分析] × [自動化] × [グローバル]。<br class="hidden md:block"/>これら3つの要素を掛け合わせることで、貴社のマーケティング基盤を次世代へと進化させます。
                </p>
                <p class="text-base text-brand-200 mt-8 font-normal bg-white/5 p-6 rounded-2xl backdrop-blur-sm border border-white/10" style="text-align: left;">
                    例えば「海外向けECサイトの広告からCRMまでをAPIで統合し、ROASをBigQueryで日次可視化する」といった、通常なら複数社に依頼するような複雑な業務も、私たちならワンストップで実現可能です。
                </p>
            </div>
            
            <div class="mt-12">
                <a href="#service-links" class="inline-flex items-center justify-center px-8 py-4 text-brand-900 bg-white hover:bg-brand-50 transition-all duration-300 rounded-full font-bold shadow-lg hover:shadow-brand-500/50 hover:-translate-y-1">
                    サービスを見る
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
                </a>
            </div>
        </div>
        
        <!-- Bottom Curve Divider -->
        <div class="absolute bottom-0 w-full overflow-hidden leading-none">
            <svg class="relative block w-full h-12 md:h-24" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V95.8C59.71,118,130.42,120.2,207.2,109.83,248.66,104.34,288.66,82.49,321.39,56.44Z" class="fill-brand-50"></path>
            </svg>
        </div>
    </section>

    <!-- 3. 主要サービスへの導線 (Premium Cards Design) -->
    <section id="service-links" class="bg-brand-50 pb-24 pt-8">
        <div class="container mx-auto px-6 relative z-10 -mt-24 md:-mt-32">
            
            <div class="grid md:grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- 1. Data Enabler -->
                <div class="group bg-white p-8 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border-t-4 border-gold relative overflow-hidden flex flex-col h-full">
                    <div class="absolute top-0 right-0 -mt-4 -mr-4 w-24 h-24 bg-gold opacity-10 rounded-full blur-xl group-hover:scale-150 transition-transform duration-500"></div>
                    <div class="flex-grow z-10">
                        <span class="text-sm font-bold text-brand-600 mb-2 block uppercase tracking-wider">Concept 01</span>
                        <h3 class="text-2xl font-bold mb-4 text-gray-900 group-hover:text-brand-600 transition-colors">【Data Enabler】<br/><span class="text-xl">データの実装と可視化</span></h3>
                        <p class="text-gray-600 leading-relaxed mb-6">「見えないものを、意思決定できる形に変える」領域。Web解析、データマート構築、SQL分析など。</p>
                    </div>
                    <div class="pt-4 border-t border-gray-100 mt-auto z-10">
                        <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'services' ) ) ); ?>" class="inline-flex items-center text-brand-700 font-bold hover:text-brand-900 transition-colors group/link">
                            詳しく見る 
                            <svg class="w-4 h-4 ml-2 transform group-hover/link:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                    </div>
                </div>

                <!-- 2. Marketing Architect -->
                <div class="group bg-white p-8 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border-t-4 border-silver relative overflow-hidden flex flex-col h-full">
                    <div class="absolute top-0 right-0 -mt-4 -mr-4 w-24 h-24 bg-silver opacity-20 rounded-full blur-xl group-hover:scale-150 transition-transform duration-500"></div>
                    <div class="flex-grow z-10">
                        <span class="text-sm font-bold text-brand-600 mb-2 block uppercase tracking-wider">Concept 02</span>
                        <h3 class="text-2xl font-bold mb-4 text-gray-900 group-hover:text-brand-600 transition-colors">【Marketing Architect】<br/><span class="text-xl">仕組みの自動化と最適化</span></h3>
                        <p class="text-gray-600 leading-relaxed mb-6">「バラバラな点と点を繋ぎ、自動で回る仕組みを作る」領域。CRM/MA導入、API連携、ワークフロー設計など。</p>
                    </div>
                    <div class="pt-4 border-t border-gray-100 mt-auto z-10">
                        <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'services' ) ) ); ?>" class="inline-flex items-center text-brand-700 font-bold hover:text-brand-900 transition-colors group/link">
                            詳しく見る 
                            <svg class="w-4 h-4 ml-2 transform group-hover/link:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                    </div>
                </div>

                <!-- 3. Global Tech Director -->
                <div class="group bg-white p-8 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border-t-4 border-copper relative overflow-hidden flex flex-col h-full">
                    <div class="absolute top-0 right-0 -mt-4 -mr-4 w-24 h-24 bg-copper opacity-20 rounded-full blur-xl group-hover:scale-150 transition-transform duration-500"></div>
                    <div class="flex-grow z-10">
                        <span class="text-sm font-bold text-brand-600 mb-2 block uppercase tracking-wider">Concept 03</span>
                        <h3 class="text-2xl font-bold mb-4 text-gray-900 group-hover:text-brand-600 transition-colors">【Global Tech Director】<br/><span class="text-xl">越境実装とPM</span></h3>
                        <p class="text-gray-600 leading-relaxed mb-6">「国境や技術の壁を越えてプロジェクトを完遂させる」領域。多言語ローカライズ、Webサイト制作、PMなど。</p>
                    </div>
                    <div class="pt-4 border-t border-gray-100 mt-auto z-10">
                        <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'services' ) ) ); ?>" class="inline-flex items-center text-brand-700 font-bold hover:text-brand-900 transition-colors group/link">
                            詳しく見る 
                            <svg class="w-4 h-4 ml-2 transform group-hover/link:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    <!-- 2. ニュース/お知らせ (Clean Premium List) -->
    <section id="news" class="bg-white py-24 relative isolate">
        <!-- Subtle background pattern or blob -->
        <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
            <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-lilac to-brand-400 opacity-10 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"></div>
        </div>

        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 tracking-tight">ニュース・お知らせ</h2>
                <div class="w-16 h-1 bg-brand-500 mx-auto mt-6 rounded-full"></div>
            </div>
            
            <div class="max-w-4xl mx-auto rounded-3xl p-2 sm:p-6">
                <ul class="divide-y divide-gray-100">
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 3,
                    );
                    $news_query = new WP_Query($args);
                    if ($news_query->have_posts()) :
                        while ($news_query->have_posts()) : $news_query->the_post();
                    ?>
                    <li class="py-6 group">
                        <a href="<?php the_permalink(); ?>" class="flex flex-col sm:flex-row sm:items-center gap-4 hover:bg-brand-50 p-4 -mx-4 rounded-xl transition-colors duration-300">
                            <span class="text-sm font-semibold text-brand-600 whitespace-nowrap bg-brand-100 px-4 py-1.5 rounded-full"><?php echo get_the_date('Y.m.d'); ?></span>
                            <span class="text-lg text-gray-800 font-medium group-hover:text-brand-700 transition-colors duration-300 line-clamp-2"><?php the_title(); ?></span>
                        </a>
                    </li>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    else :
                    ?>
                    <li class="py-8 text-center text-gray-500">お知らせはまだありません。</li>
                    <?php endif; ?>
                </ul>

                <div class="text-center mt-12">
                    <a href="<?php echo esc_url(home_url('/news')); ?>" class="inline-flex items-center px-8 py-3 border border-gray-200 shadow-sm text-base font-bold rounded-full text-gray-700 bg-white hover:bg-brand-50 hover:text-brand-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brand-500 transition-all duration-300 hover:shadow-md">
                        ニュース一覧を見る
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
