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
                        <h3 class="text-2xl font-extrabold mb-5 text-brand-900 leading-loose">
                            <span class="inline-block bg-brand-600 text-white text-xs px-3 py-1 rounded-full mr-3 uppercase tracking-wider align-middle -mt-1">Mission</span>
                            <span class="align-middle"><ruby>未<rt>ま</rt></ruby>だ<ruby>見<rt>み</rt></ruby>ぬ「＋」を、<ruby>共創<rt>きょうそう</rt></ruby>する</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed text-lg">
                            私たちが共創する「＋」とは、事業の行く末を照らす道標であり、掘り起こされた独自の価値であり、課題を突破する正解です。クライアントの隣で、まだ見ぬ方向性や強み、最適解を形にし、確かな成長へ導きます。
                        </p>
                    </div>

                    <!-- Vision -->
                    <div class="bg-gray-50 p-8 rounded-2xl relative overflow-hidden border border-gray-100">
                        <div class="absolute -left-10 -bottom-10 w-32 h-32 bg-lilac/30 rounded-full opacity-50 blur-2xl"></div>
                        <h3 class="text-2xl font-extrabold mb-4 text-brand-900 leading-loose">
                            <span class="inline-block bg-brand-600 text-white text-xs px-3 py-1 rounded-full mr-3 uppercase tracking-wider align-middle -mt-1">Vision</span>
                            <span class="align-middle">「潜在的な価値を、市場の『正解』へと変換する共創エンジン」</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed text-lg">
                            私たちは、クライアントの中に眠る「強み」を共に掘り起こし、それを確かな価値として磨き上げます。進むべき道標を示すことで視界をひらき、複雑な課題に対する正解を導き出すことで、事業の歩みを加速させる「共創の動力源」であり続けます。
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- 2. バリュー -->
        <section id="values" class="mb-20">
            <div class="bg-white rounded-3xl shadow-xl p-8 md:p-12 border-t-4 border-lilac hover:shadow-2xl transition-shadow duration-300">
                <div class="text-center mb-10">
                    <span class="text-sm font-bold text-brand-600 mb-2 block uppercase tracking-wider">Values</span>
                    <h2 class="text-3xl font-extrabold text-gray-900 tracking-tight">4つの行動指針</h2>
                    <div class="w-12 h-1 bg-lilac mx-auto mt-4 rounded-full"></div>
                    <p class="mt-6 text-gray-600 font-medium text-lg">マルプラスが大切にする4つの行動指針です。</p>
                </div>

                <div class="grid md:grid-cols-2 gap-8 max-w-6xl mx-auto">
                    <!-- Value 1: Guiding Light -->
                    <div class="bg-blue-50/50 p-8 rounded-2xl hover:-translate-y-1 transition-transform duration-300 border border-blue-100 flex flex-col h-full">
                        <div class="flex justify-between items-start mb-4">
                            <div class="text-brand-600 font-black text-4xl opacity-20">01</div>
                            <span class="text-xs font-bold text-brand-500 uppercase tracking-widest bg-white px-2 py-1 rounded shadow-sm">Guiding Light</span>
                        </div>
                        <h4 class="text-xl font-bold mb-4 text-brand-900">一歩先の光を灯す</h4>
                        <p class="text-gray-700 leading-relaxed">
                            現状のデータや課題を整理し、進むべき「方向性」をいち早く提示します。クライアントの不安という霧を晴らし、未来がクリアに<strong class="text-brand-700 text-lg">「見える」</strong>状態を常に作り出すことが、私たちの最初の仕事です。
                        </p>
                    </div>

                    <!-- Value 2: Value Excavation -->
                    <div class="bg-indigo-50/50 p-8 rounded-2xl hover:-translate-y-1 transition-transform duration-300 border border-indigo-100 flex flex-col h-full">
                        <div class="flex justify-between items-start mb-4">
                            <div class="text-brand-600 font-black text-4xl opacity-20">02</div>
                            <span class="text-xs font-bold text-brand-500 uppercase tracking-widest bg-white px-2 py-1 rounded shadow-sm">Value Excavation</span>
                        </div>
                        <h4 class="text-xl font-bold mb-4 text-brand-900">潜在する強みを掘り起こす</h4>
                        <p class="text-gray-700 leading-relaxed">
                            クライアントさえ気づいていない独自の「価値」を見出し、磨き上げます。自分たちの武器を確信することで、どんな困難な道でも力強く<strong class="text-brand-700 text-lg">「歩める」</strong>自信と原動力を提供します。
                        </p>
                    </div>

                    <!-- Value 3: Optimal Path -->
                    <div class="bg-purple-50/50 p-8 rounded-2xl hover:-translate-y-1 transition-transform duration-300 border border-purple-100 flex flex-col h-full">
                        <div class="flex justify-between items-start mb-4">
                            <div class="text-brand-600 font-black text-4xl opacity-20">03</div>
                            <span class="text-xs font-bold text-brand-500 uppercase tracking-widest bg-white px-2 py-1 rounded shadow-sm">Optimal Path</span>
                        </div>
                        <h4 class="text-xl font-bold mb-4 text-brand-900">最短の正解を導き出す</h4>
                        <p class="text-gray-700 leading-relaxed">
                            高度な専門性と分析力を駆使し、迷いを断ち切る「最適解」を提示します。遠回りをせず、最小のコストで目的地に<strong class="text-brand-700 text-lg">「たどり着ける」</strong>よう、論理に基づいた最短距離の航路を描き続けます。
                        </p>
                    </div>

                    <!-- Value 4: Co-Creation Engine -->
                    <div class="bg-amber-50/50 p-8 rounded-2xl hover:-translate-y-1 transition-transform duration-300 border border-amber-100 flex flex-col h-full">
                        <div class="flex justify-between items-start mb-4">
                            <div class="text-brand-600 font-black text-4xl opacity-20">04</div>
                            <span class="text-xs font-bold text-brand-500 uppercase tracking-widest bg-white px-2 py-1 rounded shadow-sm">Co-Creation Engine</span>
                        </div>
                        <h4 class="text-xl font-bold mb-4 text-brand-900">共創の熱を絶やさない</h4>
                        <p class="text-gray-700 leading-relaxed">
                            私たちは外部の支援者ではなく、共に走るエンジンの核となります。お互いの想いを掛け合わせることで、一人では到達できない高みへと事業を加速させ、期待を超える成果を<strong class="text-brand-700 text-lg">「共創」</strong>します。
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
