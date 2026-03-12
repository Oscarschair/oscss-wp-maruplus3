<?php

/**
 * Template Name: サービス・事業紹介
 *
 * @package oscss-wp-maruplus3
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="container mx-auto px-4 py-16">
        <h1 class="text-4xl font-bold text-center mb-12"><?php the_title(); ?></h1>

        <!-- 1. 提供価値 -->
        <section id="value-proposition" class="mb-16">
            <h2 class="text-3xl font-bold text-center mb-8">私たちの提供価値</h2>
            <div class="max-w-3xl mx-auto text-lg">
                <p class="mb-4">
                    単なる機能説明ではなく、「顧客の悩みがどう解決するか」を重視した説明をここに記述します。
                    お客様が抱える課題と、それを私たちのサービスがどのように解決に導くかを具体的に示します。
                </p>
            </div>
        </section>

        <!-- 2. 実績・事例 -->
        <section id="portfolio">
            <h2 class="text-3xl font-bold text-center mb-8">実績・事例</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- 事例をループで表示します -->
                <div class="border rounded-lg overflow-hidden shadow-sm">
                    <img src="https://via.placeholder.com/400x250" alt="事例の画像" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">事例タイトル</h3>
                        <p class="text-gray-600">「これなら任せられそう」という信頼の根拠となる事例の概要を記述します。</p>
                        <a href="#" class="text-blue-600 hover:underline mt-4 inline-block">詳細を見る &rarr;</a>
                    </div>
                </div>
                <!-- 他の事例も同様に配置 -->
            </div>
        </section>
    </div>
</main>

<?php
get_footer();
