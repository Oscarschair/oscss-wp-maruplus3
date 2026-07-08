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
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-600 to-brand-800 pb-2"><ruby>未<rt class="text-transparent bg-clip-text bg-gradient-to-r from-brand-600 to-brand-800 pb-2">ま</rt></ruby>だ<ruby>見<rt class="text-transparent bg-clip-text bg-gradient-to-r from-brand-600 to-brand-800 pb-2">み</rt></ruby>ぬ「<ruby>＋<rt class="text-transparent bg-clip-text bg-gradient-to-r from-brand-600 to-brand-800 pb-2">ぷらす</rt></ruby>」を、</span><br class="hidden md:block" />
                <ruby>共創<rt>きょうそう</rt></ruby>する
            </h1>
            <div class="max-w-3xl mx-auto text-lg md:text-xl text-brand-800 font-medium leading-relaxed">
                <p class="mb-6">
                    私たちが共創する「＋」とは、事業の行く末を照らす道標であり、<br class="hidden md:block"/>掘り起こされた独自の価値であり、課題を突破する正解です。
                </p>
                <p class="text-base text-brand-700 mt-8 font-normal bg-white/50 p-6 rounded-2xl backdrop-blur-sm border border-white/50" style="text-align: left;">
                    「大手に依頼するのは予算面で心細い」「初期開発から運用まで完全にお任せしたい」「セキュリティやインフラ運用までDevSecOpsで一貫して任せたい」— 起業直後のスタートアップや新規事業立ち上げにおけるあらゆる不安に寄り添い、確かな技術で形にします。
                </p>
            </div>
            
            <div class="mt-12">
                <a href="#for-startups" class="inline-flex items-center justify-center px-8 py-4 text-brand-900 bg-white hover:bg-brand-50 transition-all duration-300 rounded-full font-bold shadow-lg hover:shadow-brand-500/50 hover:-translate-y-1">
                    マルプラスの強みを見る
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

    <!-- Startups & Budget Friendly Section (New) -->
    <section id="for-startups" class="bg-brand-50 py-16">
        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-3xl mx-auto text-center mb-12">
                <span class="text-sm font-bold text-brand-600 mb-2 block uppercase tracking-wider">For Startups & Entrepreneurs</span>
                <h2 class="text-3xl font-extrabold text-gray-900 mb-4">
                    こんなお悩み、ありませんか？
                </h2>
                <div class="w-12 h-1 bg-brand-500 mx-auto rounded-full"></div>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <div class="bg-white p-8 rounded-2xl shadow-md border border-gray-100 hover:shadow-lg transition-shadow duration-300">
                    <div class="w-12 h-12 bg-brand-100 rounded-xl flex items-center justify-center mb-6 text-brand-700 font-bold text-xl">01</div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3">大手に頼むのは予算が心細い</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        大手開発会社の見積もりに不安を感じていませんか？少数精鋭の柔軟な体制だからこそ、中間マージンをカットした納得のコスト感で、高品質な開発をご提案します。
                    </p>
                </div>
                
                <div class="bg-white p-8 rounded-2xl shadow-md border border-gray-100 hover:shadow-lg transition-shadow duration-300">
                    <div class="w-12 h-12 bg-brand-100 rounded-xl flex items-center justify-center mb-6 text-brand-700 font-bold text-xl">02</div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3">初期開発を完全にお任せしたい</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        要件定義からデザイン、実装、インフラ構築、リリースまで「完全お任せ」いただけます。技術的な専門知識がなくても、ビジネスのアイデアを最短で形にします。
                    </p>
                </div>
                
                <div class="bg-white p-8 rounded-2xl shadow-md border border-gray-100 hover:shadow-lg transition-shadow duration-300">
                    <div class="w-12 h-12 bg-brand-100 rounded-xl flex items-center justify-center mb-6 text-brand-700 font-bold text-xl">03</div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3">DevSecOpsまで一貫して任せたい</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        単なるシステム実装だけでなく、セキュリティ（Sec）の担保やインフラ運用（Ops）を見据えた開発（DevSecOps）に一貫対応。安全かつ安定したサービス稼働を実現します。
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. 主要サービスへの導緁E(Premium Cards Design) -->
    <section id="service-links" class="bg-brand-50 pb-24 pt-8">
        <div class="container mx-auto px-6 relative z-10 pt-8">
            
            <div class="grid md:grid-cols-1 lg:grid-cols-3 gap-8">
                   <!-- 1. Data Strategy Engineer -->
                <div class="group bg-white p-8 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border-t-4 border-[#D4AF37] relative overflow-hidden flex flex-col h-full">
                    <div class="absolute top-0 right-0 -mt-4 -mr-4 w-24 h-24 bg-[#D4AF37] opacity-10 rounded-full blur-xl group-hover:scale-150 transition-transform duration-500"></div>
                    <div class="flex-grow z-10">
                        <span class="text-sm font-bold text-brand-600 mb-2 block uppercase tracking-wider">01. Data Strategy</span>
                        <h2 class="text-2xl font-bold mb-4 text-gray-900 group-hover:text-brand-600 transition-colors">Data Strategy Engineer<br/><span class="text-lg font-medium">データ計測基盤の設計・実装</span></h2>
                        <p class="text-gray-600 leading-relaxed mb-6 italic">「見えない行動を、意思決定の根拠に変える」</p>
                        <p class="text-gray-500 text-sm leading-relaxed mb-6">GA4やBigQueryを駆使し、信頼できるデータが蓄積される基盤そのものを設計・実装します。</p>
                    </div>
                    <div class="pt-4 border-t border-gray-100 mt-auto z-10">
                        <a href="<?php echo esc_url(home_url('/services')); ?>" class="inline-flex items-center text-brand-700 font-bold hover:text-brand-900 transition-colors group/link">
                            詳しく見る 
                            <svg class="w-4 h-4 ml-2 transform group-hover/link:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                    </div>
                </div>

                <!-- 2. Marketing Ops Architect -->
                <div class="group bg-white p-8 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border-t-4 border-[#A8A9AD] relative overflow-hidden flex flex-col h-full">
                    <div class="absolute top-0 right-0 -mt-4 -mr-4 w-24 h-24 bg-[#A8A9AD] opacity-20 rounded-full blur-xl group-hover:scale-150 transition-transform duration-500"></div>
                    <div class="flex-grow z-10">
                        <span class="text-sm font-bold text-brand-600 mb-2 block uppercase tracking-wider">02. Marketing Ops</span>
                        <h2 class="text-2xl font-bold mb-4 text-gray-900 group-hover:text-brand-600 transition-colors">Marketing Ops Architect<br/><span class="text-lg font-medium">マーケティング運用の自動化</span></h2>
                        <p class="text-gray-600 leading-relaxed mb-6 italic">「点在するデータとツールを繋ぎ、収益を自動最大化する」</p>
                        <p class="text-gray-500 text-sm leading-relaxed mb-6">HubSpotや各種APIを組み合わせ、業務フローを一つの「勝手に回る仕組み」へと再構築します。</p>
                    </div>
                    <div class="pt-4 border-t border-gray-100 mt-auto z-10">
                        <a href="<?php echo esc_url(home_url('/services')); ?>" class="inline-flex items-center text-brand-700 font-bold hover:text-brand-900 transition-colors group/link">
                            詳しく見る 
                            <svg class="w-4 h-4 ml-2 transform group-hover/link:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                    </div>
                </div>

                <!-- 3. Global Project Controller -->
                <div class="group bg-white p-8 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border-t-4 border-[#B87333] relative overflow-hidden flex flex-col h-full">
                    <div class="absolute top-0 right-0 -mt-4 -mr-4 w-24 h-24 bg-[#B87333] opacity-20 rounded-full blur-xl group-hover:scale-150 transition-transform duration-500"></div>
                    <div class="flex-grow z-10">
                        <span class="text-sm font-bold text-brand-600 mb-2 block uppercase tracking-wider">03. Global Project</span>
                        <h2 class="text-2xl font-bold mb-4 text-gray-900 group-hover:text-brand-600 transition-colors">Global Project Controller<br/><span class="text-lg font-medium">越境プロジェクトの技術統括</span></h2>
                        <p class="text-gray-600 leading-relaxed mb-6 italic">「言葉と技術の壁を越え、プロジェクトを完遂させる」</p>
                        <p class="text-gray-500 text-sm leading-relaxed mb-6">多言語対応とシステム開発、PMスキルの三位一体で、複雑なプロジェクトをリードします。</p>
                    </div>
                    <div class="pt-4 border-t border-gray-100 mt-auto z-10">
                        <a href="<?php echo esc_url(home_url('/services')); ?>" class="inline-flex items-center text-brand-700 font-bold hover:text-brand-900 transition-colors group/link">
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
