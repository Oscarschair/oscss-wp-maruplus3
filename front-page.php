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

<main id="primary" class="site-main">

    <!-- 1. キャッチコピー -->
    <section id="hero" class="bg-lilac py-20">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl font-bold mb-4">3つのコア・バリューが生む「3乗」の価値</h1>
            <div class="max-w-4xl mx-auto text-lg">
                <p class="mb-6">
                    [分析] × [自動化] × [グローバル]。これら3つの要素を掛け合わせることで、貴社のマーケティング基盤を次世代へと進化させます。
                </p>
                <p class="text-gray-800">
                    例えば「海外向けECサイトの広告からCRMまでをAPIで統合し、ROASをBigQueryで日次可視化する」といった、通常なら複数社に依頼するような複雑な業務も、私たちならワンストップで実現可能です。
                </p>
            </div>
        </div>
    </section>

    <!-- 3. 主要サービスへの導線 (Updated) -->
    <section id="service-links" class="py-16">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-12">3つのコア・バリュー</h2>
            <div class="grid md:grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- 1. Data Enabler -->
                <div class="p-8 border rounded-lg bg-gold hover:shadow-lg transition-shadow">
                    <h3 class="text-xl font-bold mb-2">【Data Enabler】<br>データの実装と可視化</h3>
                    <p class="text-gray-800 h-16">「見えないものを、意思決定できる形に変える」領域。Web解析、データマート構築、SQL分析など。</p>
                    <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'services' ) ) ); ?>" class="text-black hover:underline mt-4 inline-block font-bold">詳しく見る &rarr;</a>
                </div>

                <!-- 2. Marketing Architect -->
                <div class="p-8 border rounded-lg bg-silver hover:shadow-lg transition-shadow">
                    <h3 class="text-xl font-bold mb-2">【Marketing Architect】<br>仕組みの自動化と最適化</h3>
                    <p class="text-gray-800 h-16">「バラバラな点と点を繋ぎ、自動で回る仕組みを作る」領域。CRM/MA導入、API連携、ワークフロー設計など。</p>
                    <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'services' ) ) ); ?>" class="text-black hover:underline mt-4 inline-block font-bold">詳しく見る &rarr;</a>
                </div>

                <!-- 3. Global Tech Director -->
                <div class="p-8 border rounded-lg bg-copper hover:shadow-lg transition-shadow">
                    <h3 class="text-xl font-bold mb-2">【Global Tech Director】<br>越境実装とPM</h3>
                    <p class="text-gray-800 h-16">「国境や技術の壁を越えてプロジェクトを完遂させる」領域。多言語ローカライズ、Webサイト制作、PMなど。</p>
                    <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'services' ) ) ); ?>" class="text-black hover:underline mt-4 inline-block font-bold">詳しく見る &rarr;</a>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. ニュース/お知らせ -->
    <section id="news" class="bg-gray-50 py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-8">ニュース・お知らせ</h2>
            <div class="max-w-3xl mx-auto">
                <!-- WordPressの投稿ループなどを利用して最新情報を表示します -->
                <div class="border-b py-4">
                    <span class="text-gray-500">2023.10.27</span>
                    <a href="#" class="ml-4 text-gray-800 hover:underline">お知らせのタイトルが入ります</a>
                </div>
                <div class="border-b py-4">
                    <span class="text-gray-500">2023.10.20</span>
                    <a href="#" class="ml-4 text-gray-800 hover:underline">新しいサービスを開始しました</a>
                </div>
                <div class="text-center mt-8">
                    <a href="#" class="text-gray-800 hover:underline font-bold">もっと見る &rarr;</a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
