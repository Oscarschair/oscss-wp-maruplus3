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
    <section id="hero" class="bg-gray-100 py-20">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl font-bold mb-4">何をしている会社か、一目でわかる言葉</h1>
            <p class="text-lg text-gray-600">事業内容を補足する簡潔な説明文をここに追加します。</p>
        </div>
    </section>

    <!-- 2. ニュース/お知らせ -->
    <section id="news" class="py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-8">ニュース・お知らせ</h2>
            <div class="max-w-3xl mx-auto">
                <!-- WordPressの投稿ループなどを利用して最新情報を表示します -->
                <div class="border-b py-4">
                    <span class="text-gray-500">2023.10.27</span>
                    <a href="#" class="ml-4 text-blue-600 hover:underline">お知らせのタイトルが入ります</a>
                </div>
                <div class="border-b py-4">
                    <span class="text-gray-500">2023.10.20</span>
                    <a href="#" class="ml-4 text-blue-600 hover:underline">新しいサービスを開始しました</a>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. 主要サービスへの導線 -->
    <section id="service-links" class="bg-gray-50 py-16">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-8">私たちのサービス</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- 各サービスへのリンクをここに配置します -->
                <div class="p-8 border rounded-lg shadow-sm bg-white">
                    <h3 class="text-xl font-bold mb-2">主要サービスA</h3>
                    <p>サービスの簡単な説明。顧客を迷わせずに目的の場所へ誘導します。</p>
                    <a href="/services" class="text-blue-600 hover:underline mt-4 inline-block">詳しく見る &rarr;</a>
                </div>
                <div class="p-8 border rounded-lg shadow-sm bg-white">
                    <h3 class="text-xl font-bold mb-2">主要サービスB</h3>
                    <p>サービスの簡単な説明。顧客を迷わせずに目的の場所へ誘導します。</p>
                    <a href="/services" class="text-blue-600 hover:underline mt-4 inline-block">詳しく見る &rarr;</a>
                </div>
                <div class="p-8 border rounded-lg shadow-sm bg-white">
                    <h3 class="text-xl font-bold mb-2">主要サービスC</h3>
                    <p>サービスの簡単な説明。顧客を迷わせずに目的の場所へ誘導します。</p>
                    <a href="/services" class="text-blue-600 hover:underline mt-4 inline-block">詳しく見る &rarr;</a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
