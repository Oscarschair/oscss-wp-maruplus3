<?php

/**
 * Template Name: 会社情報
 *
 * @package oscss-wp-maruplus3
 */

get_header();
?>

<main id="primary" class="site-main font-sans bg-gray-50 pb-24">
    <!-- Hero Section -->
    <section class="relative overflow-hidden bg-hero-gradient text-white pt-24 pb-32">
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden z-0">
            <div class="absolute w-64 h-64 bg-brand-600 rounded-full mix-blend-multiply filter blur-3xl opacity-50 animate-float" style="top: -10%; left: -10%;"></div>
            <div class="absolute w-64 h-64 bg-brand-400 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse-slow" style="top: 20%; right: -10%;"></div>
            <div class="absolute w-48 h-48 bg-lilac rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-float" style="bottom: -10%; left: 30%;"></div>
        </div>
        <div class="container mx-auto px-6 relative z-10 text-center">
            <h1 class="text-4xl md:text-5xl font-extrabold mb-4 tracking-tight drop-shadow-lg text-transparent bg-clip-text bg-gradient-to-r from-white to-lilac">
                <?php the_title(); ?>
            </h1>
            <p class="text-brand-200 text-lg">私たちについて</p>
        </div>
        <div class="absolute bottom-0 w-full overflow-hidden leading-none">
            <svg class="relative block w-full h-12 md:h-16" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V95.8C59.71,118,130.42,120.2,207.2,109.83,248.66,104.34,288.66,82.49,321.39,56.44Z" class="fill-gray-50"></path>
            </svg>
        </div>
    </section>

    <div class="container mx-auto px-6 relative z-10 -mt-16 md:-mt-20">
        <!-- 1. 代表挨拶・ビジョン -->
        <section id="vision" class="mb-20">
            <div class="bg-white rounded-3xl shadow-xl p-8 md:p-12 border-t-4 border-brand-500 hover:shadow-2xl transition-shadow duration-300">
                <div class="text-center mb-10">
                    <span class="text-sm font-bold text-brand-600 mb-2 block uppercase tracking-wider">Vision</span>
                    <h2 class="text-3xl font-extrabold text-gray-900 tracking-tight">代表挨拶・ビジョン</h2>
                    <div class="w-12 h-1 bg-brand-500 mx-auto mt-4 rounded-full"></div>
                </div>
                <div class="flex flex-col md:flex-row items-center gap-10 max-w-4xl mx-auto">
                    <div class="md:w-1/3 text-center">
                        <div class="w-40 h-40 mx-auto rounded-full p-2 bg-gradient-to-tr from-brand-400 to-lilac shadow-lg relative">
                            <img src="https://via.placeholder.com/200" alt="代表者の写真" class="w-full h-full object-cover rounded-full border-4 border-white">
                        </div>
                        <p class="mt-4 font-bold text-gray-900">代表取締役 <br><span class="text-xl">車 浩文</span></p>
                    </div>
                    <div class="md:w-2/3">
                        <h3 class="text-xl md:text-2xl font-bold mb-4 text-brand-900 italic">「なぜこの事業をやっているのかという想いを語ります」</h3>
                        <p class="text-gray-600 leading-relaxed text-lg">
                            ここに代表者からのメッセージや、会社が目指すビジョンについての文章を記述します。企業の情熱や哲学を伝えることで、共感を呼び、信頼を深めます。私たちはデータとマーケティングとグローバルの力で、お客様のビジネスのポテンシャルを最大限に引き出します。
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- 2. 会社概要 -->
        <section id="company-profile">
            <div class="bg-white rounded-3xl shadow-xl p-8 md:p-12">
                <div class="text-center mb-10">
                    <span class="text-sm font-bold text-brand-600 mb-2 block uppercase tracking-wider">Company Profile</span>
                    <h2 class="text-3xl font-extrabold text-gray-900 tracking-tight">会社概要</h2>
                    <div class="w-12 h-1 bg-brand-500 mx-auto mt-4 rounded-full"></div>
                </div>
                <div class="max-w-3xl mx-auto">
                    <dl class="divide-y divide-gray-100">
                        <div class="flex flex-col md:flex-row py-5 md:py-6 hover:bg-gray-50 transition-colors px-4 rounded-xl">
                            <dt class="md:w-1/3 mb-1 md:mb-0 font-bold text-brand-900">会社名</dt>
                            <dd class="md:w-2/3 text-gray-700">株式会社MaruPlus</dd>
                        </div>
                        <div class="flex flex-col md:flex-row py-5 md:py-6 hover:bg-gray-50 transition-colors px-4 rounded-xl">
                            <dt class="md:w-1/3 mb-1 md:mb-0 font-bold text-brand-900">所在地</dt>
                            <dd class="md:w-2/3 text-gray-700">〒100-0000 東京都千代田区丸の内1-2-3</dd>
                        </div>
                        <div class="flex flex-col md:flex-row py-5 md:py-6 hover:bg-gray-50 transition-colors px-4 rounded-xl">
                            <dt class="md:w-1/3 mb-1 md:mb-0 font-bold text-brand-900">設立日</dt>
                            <dd class="md:w-2/3 text-gray-700">2023年10月27日</dd>
                        </div>
                        <div class="flex flex-col md:flex-row py-5 md:py-6 hover:bg-gray-50 transition-colors px-4 rounded-xl">
                            <dt class="md:w-1/3 mb-1 md:mb-0 font-bold text-brand-900">役員</dt>
                            <dd class="md:w-2/3 text-gray-700">代表取締役 車 浩文</dd>
                        </div>
                        <div class="flex flex-col md:flex-row py-5 md:py-6 hover:bg-gray-50 transition-colors px-4 rounded-xl">
                            <dt class="md:w-1/3 mb-1 md:mb-0 font-bold text-brand-900">資本金</dt>
                            <dd class="md:w-2/3 text-gray-700">1,000,000円</dd>
                        </div>
                    </dl>
                </div>
            </div>
        </section>
    </div>
</main>

<?php
get_footer();
