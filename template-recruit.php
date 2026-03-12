<?php

/**
 * Template Name: 採用情報
 *
 * @package oscss-wp-maruplus3
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="container mx-auto px-4 py-16">
        <h1 class="text-4xl font-bold text-center mb-12"><?php the_title(); ?></h1>

        <!-- 1. 働く環境・メンバー -->
        <section id="environment" class="mb-16">
            <h2 class="text-3xl font-bold text-center mb-8">働く環境・メンバー</h2>
            <div class="max-w-4xl mx-auto">
                <p class="text-lg text-center mb-8">
                    社内の雰囲気や文化が伝わるような写真や文章を配置します。
                </p>
                <div class="grid md:grid-cols-3 gap-4">
                    <img src="https://via.placeholder.com/400x300" alt="オフィスの風景" class="rounded-lg shadow-md">
                    <img src="https://via.placeholder.com/400x300" alt="チームメンバー" class="rounded-lg shadow-md">
                    <img src="https://via.placeholder.com/400x300" alt="社内イベント" class="rounded-lg shadow-md">
                </div>
            </div>
        </section>

        <!-- 2. 募集要項 -->
        <section id="job-listings">
            <h2 class="text-3xl font-bold text-center mb-8">募集要項</h2>
            <div class="max-w-3xl mx-auto space-y-8">
                <!-- 募集職種ごとに繰り返し -->
                <div class="border rounded-lg p-6 shadow-sm">
                    <h3 class="text-2xl font-bold mb-2">Webエンジニア</h3>
                    <p class="text-gray-600 mb-4">求める人物像や仕事内容をここに記述します。</p>
                    <a href="#" class="bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-700">応募する</a>
                </div>
                <!-- 他の職種も同様に -->
            </div>
        </section>
    </div>
</main>

<?php
get_footer();
