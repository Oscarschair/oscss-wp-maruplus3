<?php

/**
 * Template Name: お問い合わせ
 *
 * @package oscss-wp-maruplus3
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="container mx-auto px-4 py-16">
        <h1 class="text-4xl font-bold text-center mb-12"><?php the_title(); ?></h1>

        <div class="max-w-2xl mx-auto">
            <!-- 1. 入力フォーム -->
            <!-- Contact Form 7などのプラグインのショートコードをここに貼り付けます -->
            <div class="bg-white shadow-md rounded-lg p-8 border">
                <p class="text-center mb-6">
                    お問い合わせは以下のフォームよりお願いいたします。<br>
                    項目を絞り、ユーザーの心理的ハードルを下げています。
                </p>

                <?php
                // Contact Form 7 のショートコードを想定
                // echo do_shortcode('[contact-form-7 id="YOUR_FORM_ID" title="Contact form 1"]');
                ?>

                <!-- 以下はショートコードを使わない場合のフォームの例です -->
                <form action="#" method="POST" class="space-y-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">お名前 <span class="text-red-500">*</span></label>
                        <input type="text" name="name" id="name" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">メールアドレス <span class="text-red-500">*</span></label>
                        <input type="email" name="email" id="email" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700">お問い合わせ内容 <span class="text-red-500">*</span></label>
                        <textarea name="message" id="message" rows="4" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"></textarea>
                    </div>
                    <div class="text-center">
                        <p class="text-xs text-gray-500 mb-4">ご入力いただいた個人情報は、<a href="/privacy-policy" class="underline">プライバシーポリシー</a>に基づき、適切に取り扱います。</p>
                        <button type="submit" class="w-full bg-blue-600 text-white px-6 py-3 rounded-md hover:bg-blue-700 text-lg">送信する</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

<?php
get_footer();
