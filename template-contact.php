<?php

/**
 * Template Name: お問い合わせ
 *
 * @package oscss-wp-maruplus3
 */

get_header();
?>

<main id="primary" class="site-main font-sans bg-brand-50 pb-24 relative isolate">
    <!-- Abstract subtle background pattern -->
    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
        <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-lilac to-brand-400 opacity-20 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"></div>
    </div>

    <!-- Hero Section -->
    <section class="relative overflow-hidden bg-hero-gradient text-brand-950 pt-24 pb-32">
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden z-0">
            <div class="absolute w-64 h-64 bg-brand-600 rounded-full mix-blend-multiply filter blur-3xl opacity-50 animate-float" style="top: -10%; left: -10%;"></div>
            <div class="absolute w-64 h-64 bg-brand-400 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse-slow" style="top: 20%; right: -10%;"></div>
        </div>
        <div class="container mx-auto px-6 relative z-10 text-center">
            <h1 class="text-4xl md:text-5xl font-extrabold mb-4 tracking-tight drop-shadow-lg text-transparent bg-clip-text bg-gradient-to-r from-brand-600 to-brand-800">
                <?php the_title(); ?>
            </h1>
            <p class="text-brand-700 text-lg">お気軽にご相談ください</p>
        </div>
        <div class="absolute bottom-0 w-full overflow-hidden leading-none">
            <svg class="relative block w-full h-12 md:h-16" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V95.8C59.71,118,130.42,120.2,207.2,109.83,248.66,104.34,288.66,82.49,321.39,56.44Z" class="fill-brand-50"></path>
            </svg>
        </div>
    </section>

    <div class="container mx-auto px-6 relative z-10 -mt-16 md:-mt-20">
        <div class="max-w-3xl mx-auto">
            <div class="bg-white shadow-2xl rounded-3xl p-8 md:p-12 border-t-4 border-brand-500 relative overflow-hidden group">
                <div class="absolute top-0 right-0 -mt-4 -mr-4 w-32 h-32 bg-brand-100 opacity-50 rounded-full blur-2xl group-hover:scale-150 transition-transform duration-500 pointer-events-none"></div>
                
                <div class="text-center mb-8 relative z-10">
                    <p class="text-gray-600 leading-relaxed text-lg">
                        初期開発の完全お任せやDevSecOpsに関するご相談、ご予算に合わせたご提案まで、お気軽にお問い合わせください。<br class="hidden md:block">
                        項目を絞り、スムーズに入力できるよう設計しております。
                    </p>
                </div>

                <?php
                // Contact Form 7 のショートコードを想定
                // echo do_shortcode('[contact-form-7 id="YOUR_FORM_ID" title="Contact form 1"]');
                ?>

                <!-- フォーム例 -->
                <form action="#" method="POST" class="space-y-6 relative z-10">
                    <div>
                        <label for="name" class="block text-sm font-bold text-gray-700 mb-1">お名前 <span class="text-red-500 ml-1">*</span></label>
                        <input type="text" name="name" id="name" required class="block w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl shadow-inner focus:outline-none focus:ring-2 focus:ring-brand-500 focus:border-transparent transition-all duration-200">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-bold text-gray-700 mb-1">メールアドレス <span class="text-red-500 ml-1">*</span></label>
                        <input type="email" name="email" id="email" required class="block w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl shadow-inner focus:outline-none focus:ring-2 focus:ring-brand-500 focus:border-transparent transition-all duration-200">
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-bold text-gray-700 mb-1">お問い合わせ内容 <span class="text-red-500 ml-1">*</span></label>
                        <textarea name="message" id="message" rows="5" required class="block w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl shadow-inner focus:outline-none focus:ring-2 focus:ring-brand-500 focus:border-transparent transition-all duration-200"></textarea>
                    </div>
                    <div class="text-center pt-4">
                        <p class="text-sm text-gray-500 mb-6">ご入力いただいた個人情報は、<a href="/privacy-policy" class="text-brand-600 hover:text-brand-800 underline transition-colors">プライバシーポリシー</a>に基づき、適切に取り扱います。</p>
                        <button type="submit" class="w-full md:w-auto px-10 py-4 bg-brand-600 hover:bg-brand-700 text-white font-bold rounded-full shadow-lg hover:shadow-brand-500/50 hover:-translate-y-1 transition-all duration-300 transform text-lg">
                            送信する
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

<?php
get_footer();
