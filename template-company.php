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
    <section class="relative overflow-hidden bg-hero-gradient text-brand-950 pt-24 pb-32">
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden z-0">
            <div class="absolute w-64 h-64 bg-brand-600 rounded-full mix-blend-multiply filter blur-3xl opacity-50 animate-float" style="top: -10%; left: -10%;"></div>
            <div class="absolute w-64 h-64 bg-brand-400 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse-slow" style="top: 20%; right: -10%;"></div>
            <div class="absolute w-48 h-48 bg-lilac rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-float" style="bottom: -10%; left: 30%;"></div>
        </div>
        <div class="container mx-auto px-6 relative z-10 text-center">
            <h1 class="text-4xl md:text-5xl font-extrabold mb-4 tracking-tight drop-shadow-lg text-transparent bg-clip-text bg-gradient-to-r from-brand-600 to-brand-800">
                <?php the_title(); ?>
            </h1>
            <p class="text-brand-700 text-lg">私たちについて</p>
        </div>
        <div class="absolute bottom-0 w-full overflow-hidden leading-none">
            <svg class="relative block w-full h-12 md:h-16" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V95.8C59.71,118,130.42,120.2,207.2,109.83,248.66,104.34,288.66,82.49,321.39,56.44Z" class="fill-gray-50"></path>
            </svg>
        </div>
    </section>

    <div class="container mx-auto px-6 relative z-10 -mt-16 md:-mt-20">
        <!-- 1. ミッション・ビジョン -->
        <section id="vision" class="mb-20">
            <div class="bg-white rounded-3xl shadow-xl p-8 md:p-12 border-t-4 border-brand-500 hover:shadow-2xl transition-shadow duration-300">
                <div class="text-center mb-10">
                    <span class="text-sm font-bold text-brand-600 mb-2 block uppercase tracking-wider">Mission & Vision</span>
                    <h2 class="text-3xl font-extrabold text-gray-900 tracking-tight">ミッション・ビジョン</h2>
                    <div class="w-12 h-1 bg-brand-500 mx-auto mt-4 rounded-full"></div>
                </div>
                
                <div class="max-w-4xl mx-auto space-y-12">
                    <!-- Mission -->
                    <div class="bg-gray-50 p-8 rounded-2xl relative overflow-hidden border border-gray-100">
                        <div class="absolute -right-10 -top-10 w-32 h-32 bg-brand-100 rounded-full opacity-50 blur-2xl"></div>
                        <h3 class="text-2xl font-extrabold mb-4 text-brand-900 flex items-center">
                            <span class="bg-brand-600 text-white text-xs px-3 py-1 rounded-full mr-3 uppercase tracking-wider">Mission</span>
                            <ruby>未<rt>ま</rt></ruby>だ<ruby>見<rt>み</rt></ruby>ぬ「＋」を、<ruby>共創<rt>きょうそう</rt></ruby>する
                        </h3>
                        <p class="text-gray-700 leading-relaxed text-lg">
                            私たちが共創する「＋」とは、事業の行く末を照らす道標であり、掘り起こされた独自の価値であり、課題を突破する正解です。クライアントの隣で、まだ見ぬ方向性や強み、最適解を形にし、確かな成長へ導きます。
                        </p>
                    </div>

                    <!-- Vision -->
                    <div class="bg-gray-50 p-8 rounded-2xl relative overflow-hidden border border-gray-100">
                        <div class="absolute -left-10 -bottom-10 w-32 h-32 bg-lilac/30 rounded-full opacity-50 blur-2xl"></div>
                        <h3 class="text-2xl font-extrabold mb-4 text-brand-900 flex items-center">
                            <span class="bg-brand-600 text-white text-xs px-3 py-1 rounded-full mr-3 uppercase tracking-wider">Vision</span>
                            すべての挑戦が、正しく報われる社会を創る
                        </h3>
                        <div class="space-y-4 text-gray-700 leading-relaxed">
                            <p><strong>策定の背景:</strong> ユーザーの意図を正しく汲み取り、適切な価値を届けることへの強いこだわりを大切にしています。</p>
                            <p><strong>具体的内容:</strong> 優れたサービスを持つ企業が、デジタル技術の壁に阻まれることなく、正しく市場に評価されるための架け橋となる存在を目指します。</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 2. バリュー -->
        <section id="values" class="mb-20">
            <div class="bg-white rounded-3xl shadow-xl p-8 md:p-12 border-t-4 border-lilac hover:shadow-2xl transition-shadow duration-300">
                <div class="text-center mb-10">
                    <span class="text-sm font-bold text-brand-600 mb-2 block uppercase tracking-wider">Values</span>
                    <h2 class="text-3xl font-extrabold text-gray-900 tracking-tight">3つの行動指針</h2>
                    <div class="w-12 h-1 bg-lilac mx-auto mt-4 rounded-full"></div>
                    <p class="mt-6 text-gray-600 font-medium">マルプラスが大切にする3つの行動指針です。</p>
                </div>

                <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                    <!-- Value 1 -->
                    <div class="bg-blue-50/50 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 border border-blue-100">
                        <div class="text-brand-600 font-black text-4xl mb-2 opacity-30">01</div>
                        <h4 class="text-xl font-bold mb-3 text-brand-900">ユーザーの意図を読み解く<br><span class="text-sm font-normal text-brand-600">User Insight</span></h4>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            単に数字を追うのではなく「ユーザーが何を求めているか（User Intent）」を深く理解することをすべての出発点とします。
                        </p>
                    </div>

                    <!-- Value 2 -->
                    <div class="bg-indigo-50/50 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 border border-indigo-100">
                        <div class="text-brand-600 font-black text-4xl mb-2 opacity-30">02</div>
                        <h4 class="text-xl font-bold mb-3 text-brand-900">専門性を「武器」から「価値」へ<br><span class="text-sm font-normal text-brand-600">Expertise into Value</span></h4>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            AWSやGA4、SEOといった高度な技術・知識を自分たちの誇示のためではなく、あくまで顧客の課題解決のために最適にパッケージ化して提供します。
                        </p>
                    </div>

                    <!-- Value 3 -->
                    <div class="bg-purple-50/50 p-6 rounded-2xl hover:-translate-y-1 transition-transform duration-300 border border-purple-100">
                        <div class="text-brand-600 font-black text-4xl mb-2 opacity-30">03</div>
                        <h4 class="text-xl font-bold mb-3 text-brand-900">常に「一歩先」の伴走者に<br><span class="text-sm font-normal text-brand-600">Beyond Partnership</span></h4>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            単なる作業代行ではなく、共に事業を成長させるパートナーとして、期待を超える「プラスアルファ」を提案し続けます。
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- 3. 会社概要 -->
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
                            <dd class="md:w-2/3 text-gray-700">株式会社マルプラス (MaruPlus Inc.)</dd>
                        </div>
                        <div class="flex flex-col md:flex-row py-5 md:py-6 hover:bg-gray-50 transition-colors px-4 rounded-xl">
                            <dt class="md:w-1/3 mb-1 md:mb-0 font-bold text-brand-900">所在地</dt>
                            <dd class="md:w-2/3 text-gray-700">〒100-0000 東京都千代田区丸の内</dd>
                        </div>
                        <div class="flex flex-col md:flex-row py-5 md:py-6 hover:bg-gray-50 transition-colors px-4 rounded-xl">
                            <dt class="md:w-1/3 mb-1 md:mb-0 font-bold text-brand-900">設立日</dt>
                            <dd class="md:w-2/3 text-gray-700">2023年10月7日</dd>
                        </div>
                        <div class="flex flex-col md:flex-row py-5 md:py-6 hover:bg-gray-50 transition-colors px-4 rounded-xl">
                            <dt class="md:w-1/3 mb-1 md:mb-0 font-bold text-brand-900">役員</dt>
                            <dd class="md:w-2/3 text-gray-700">代表取締役</dd>
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
