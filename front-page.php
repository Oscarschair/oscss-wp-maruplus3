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
    <!-- 1. キャチE��コピ�E : Hero Section with dynamic aesthetics -->
    <section id="hero" class="relative overflow-hidden bg-hero-gradient text-brand-950 pt-32 pb-40">
        <!-- Abstract Background Shapes (Dynamic feel) -->
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden z-0">
            <div class="absolute w-96 h-96 bg-white rounded-full mix-blend-screen filter blur-3xl opacity-60 animate-float" style="top: -10%; left: -10%;"></div>
            <div class="absolute w-96 h-96 bg-brand-300 rounded-full mix-blend-multiply filter blur-3xl opacity-40 animate-pulse-slow" style="top: 20%; right: -10%;"></div>
            <div class="absolute w-64 h-64 bg-lilac rounded-full mix-blend-multiply filter blur-3xl opacity-40 animate-float" style="bottom: -10%; left: 30%;"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10 text-center">
            <span class="inline-block py-1 px-3 rounded-full bg-white/60 backdrop-blur-md text-brand-800 text-sm font-semibold tracking-wider mb-6 border border-white/50">Mission</span>
            <h1 class="text-4xl md:text-6xl font-extrabold mb-8 leading-tight tracking-tight">
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-600 to-brand-800 pb-2"><ruby>未<rt class="[-webkit-text-fill-color:theme(colors.brand.600)]">ま</rt></ruby>だ<ruby>見<rt class="[-webkit-text-fill-color:theme(colors.brand.600)]">み</rt></ruby>ぬ「＋」を、</span><br class="hidden md:block" />
                <ruby>共創<rt>きょうそう</rt></ruby>する
            </h1>
            <div class="max-w-3xl mx-auto text-lg md::text-xl text-brand-800 font-medium leading-relaxed">
                <p class="mb-6">
                    私たちが共創する「＋」とは、事業の行く末を照らす道標であり、<br class="hidden md:block"/>掘り起こされた独自の価値であり、課題を突破する正解です。
                </p>
                <p class="text-base text-brand-700 mt-8 font-normal bg-white/50 p-6 rounded-2xl backdrop-blur-sm border border-white/50" style="text-align: left;">
                    クライアントの隣で、まだ見ぬ方向性や強み、最適解を形にし、確かな成長へ導きます。
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

    <!-- 3. 主要サービスへの導緁E(Premium Cards Design) -->
    <section id="service-links" class="bg-brand-50 pb-24 pt-8">
        <div class="container mx-auto px-6 relative z-10 -mt-24 md:-mt-32">
            
            <div class="grid md:grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- 1. Data Enabler -->
                <div class="group bg-white p-8 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border-t-4 border-gold relative overflow-hidden flex flex-col h-full">
                    <div class="absolute top-0 right-0 -mt-4 -mr-4 w-24 h-24 bg-gold opacity-10 rounded-full blur-xl group-hover:scale-150 transition-transform duration-500"></div>
                    <div class="flex-grow z-10">
                        <span class="text-sm font-bold text-brand-600 mb-2 block uppercase tracking-wider">Concept 01</span>
                        <h3 class="text-2xl font-bold mb-4 text-gray-900 group-hover:text-brand-600 transition-colors">【Data Enabler、Ebr/><span class="text-xl">チE�Eタの実裁E��可視化</span></h3>
                        <p class="text-gray-600 leading-relaxed mb-6">「見えなぁE��のを、意思決定できる形に変える」領域。Web解析、データマ�Eト構築、SQL刁E��など、E/p>
                    </div>
                    <div class="pt-4 border-t border-gray-100 mt-auto z-10">
                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('services'))); ?>" class="inline-flex items-center text-brand-700 font-bold hover:text-brand-900 transition-colors group/link">
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
                        <h3 class="text-2xl font-bold mb-4 text-gray-900 group-hover:text-brand-600 transition-colors">【Marketing Architect、Ebr/><span class="text-xl">仕絁E��の自動化と最適匁E/span></h3>
                        <p class="text-gray-600 leading-relaxed mb-6">「バラバラな点と点を繋ぎ、�E動で回る仕絁E��を作る」領域、ERM/MA導�E、API連携、ワークフロー設計など、E/p>
                    </div>
                    <div class="pt-4 border-t border-gray-100 mt-auto z-10">
                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('services'))); ?>" class="inline-flex items-center text-brand-700 font-bold hover:text-brand-900 transition-colors group/link">
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
                        <h3 class="text-2xl font-bold mb-4 text-gray-900 group-hover:text-brand-600 transition-colors">【Global Tech Director、Ebr/><span class="text-xl">越墁E��裁E��PM</span></h3>
                        <p class="text-gray-600 leading-relaxed mb-6">「国墁E��技術�E壁を越えてプロジェクトを完遂させる」領域。多言語ローカライズ、Webサイト制作、PMなど、E/p>
                    </div>
                    <div class="pt-4 border-t border-gray-100 mt-auto z-10">
                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('services'))); ?>" class="inline-flex items-center text-brand-700 font-bold hover:text-brand-900 transition-colors group/link">
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
if ($news_query->have_posts()):
    while ($news_query->have_posts()):
        $news_query->the_post();
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
else:
?>
                    <li class="py-8 text-center text-gray-500">お知らせはまだありません、E/li>
                    <?php
endif; ?>
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
