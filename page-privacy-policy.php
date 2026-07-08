<?php
/**
 * The template for displaying the Privacy Policy page.
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
                プライバシーポリシー
            </h1>
            <p class="text-brand-700 text-lg">個人情報保護方針について</p>
        </div>
        <div class="absolute bottom-0 w-full overflow-hidden leading-none">
            <svg class="relative block w-full h-12 md:h-16" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V95.8C59.71,118,130.42,120.2,207.2,109.83,248.66,104.34,288.66,82.49,321.39,56.44Z" class="fill-brand-50"></path>
            </svg>
        </div>
    </section>

    <div class="container mx-auto px-6 relative z-10 -mt-16 md:-mt-20">
        <div class="max-w-4xl mx-auto">
            <div class="bg-white shadow-2xl rounded-3xl p-8 md:p-12 border-t-4 border-brand-500 relative overflow-hidden">
                <div class="absolute top-0 right-0 -mt-4 -mr-4 w-32 h-32 bg-brand-100 opacity-30 rounded-full blur-2xl pointer-events-none"></div>

                <div class="prose max-w-none text-gray-700 leading-relaxed space-y-8">
                    <p>
                        マルプラスのサンジョウ（以下、「当サイト」）は、本ウェブサイト上で提供するサービスにおける個人情報の取扱いについて、以下のとおりプライバシーポリシーを定めます。
                    </p>

                    <div>
                        <h2 class="text-xl font-bold text-gray-900 border-b-2 border-brand-200 pb-2 mb-4">1. 個人情報の収集目的</h2>
                        <p>
                            当サイトでは、お問い合わせの際にお名前やメールアドレス等の個人情報をご登録いただく場合がございます。これらの個人情報は、お問い合わせに対する回答や必要な情報を電子メールなどでご連絡する場合にのみ利用し、他の目的では利用いたしません。
                        </p>
                    </div>

                    <div>
                        <h2 class="text-xl font-bold text-gray-900 border-b-2 border-brand-200 pb-2 mb-4">2. 個人情報の第三者提供</h2>
                        <p>
                            当サイトは、法令に基づき開示が必要な場合、またはご本人の同意がある場合を除き、個人情報を第三者に提供することはいたしません。
                        </p>
                    </div>

                    <div>
                        <h2 class="text-xl font-bold text-gray-900 border-b-2 border-brand-200 pb-2 mb-4">3. 個人情報の安全管理措置</h2>
                        <p>
                            当サイトは、お預かりした個人情報の漏洩、紛失、改ざんを防止するため、適切なセキュリティ対策を実施し、安全管理を徹底いたします。
                        </p>
                    </div>

                    <div>
                        <h2 class="text-xl font-bold text-gray-900 border-b-2 border-brand-200 pb-2 mb-4">4. 免責事項</h2>
                        <p>
                            当サイトからリンクやバナーなどによって他のサイトに移動された場合、移動先サイトで提供される情報、サービス等について一切の責任を負いません。
                        </p>
                    </div>

                    <div>
                        <h2 class="text-xl font-bold text-gray-900 border-b-2 border-brand-200 pb-2 mb-4">5. お問い合わせ窓口</h2>
                        <p>
                            個人情報の取扱いに関するお問い合わせは、<a href="<?php echo esc_url(home_url('/contact')); ?>" class="text-brand-600 hover:text-brand-800 underline font-semibold transition-colors">お問い合わせフォーム</a>よりご連絡ください。
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
get_footer();
