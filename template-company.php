<?php

/**
 * Template Name: 会社情報
 *
 * @package oscss-wp-maruplus3
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="container mx-auto px-4 py-16">
        <h1 class="text-4xl font-bold text-center mb-12"><?php the_title(); ?></h1>

        <!-- 1. 代表挨拶・ビジョン -->
        <section id="vision" class="mb-16">
            <h2 class="text-3xl font-bold text-center mb-8">代表挨拶・ビジョン</h2>
            <div class="max-w-3xl mx-auto">
                <img src="https://via.placeholder.com/150" alt="代表者の写真" class="w-32 h-32 rounded-full mx-auto mb-6">
                <p class="text-lg text-center mb-4">
                    なぜこの事業をやっているのかという「想い」を語ります。
                </p>
                <p class="text-gray-600">
                    ここに代表者からのメッセージや、会社が目指すビジョンについての文章を記述します。
                    企業の情熱や哲学を伝えることで、共感を呼び、信頼を深めます。
                </p>
            </div>
        </section>

        <!-- 2. 会社概要 -->
        <section id="company-profile">
            <h2 class="text-3xl font-bold text-center mb-8">会社概要</h2>
            <div class="max-w-2xl mx-auto bg-white shadow-md rounded-lg p-8 border">
                <dl class="grid grid-cols-1 md:grid-cols-3 gap-x-8 gap-y-4">
                    <dt class="md:col-span-1 font-semibold text-gray-700">会社名</dt>
                    <dd class="md:col-span-2">株式会社MaruPlus</dd>
                    <dt class="md:col-span-1 font-semibold text-gray-700">所在地</dt>
                    <dd class="md:col-span-2">〒100-0000 東京都千代田区丸の内1-2-3</dd>
                    <dt class="md:col-span-1 font-semibold text-gray-700">設立日</dt>
                    <dd class="md:col-span-2">2023年10月27日</dd>
                    <dt class="md:col-span-1 font-semibold text-gray-700">役員</dt>
                    <dd class="md:col-span-2">代表取締役 山田 太郎</dd>
                    <dt class="md:col-span-1 font-semibold text-gray-700">資本金</dt>
                    <dd class="md:col-span-2">1,000,000円</dd>
                </dl>
            </div>
        </section>
    </div>
</main>

<?php
get_footer();
