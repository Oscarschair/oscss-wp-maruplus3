<?php
/**
 * Template Name: サービス・事業
 *
 * @package oscss-wp-maruplus3
 */

get_header();
?>

<main id="primary" class="site-main font-sans">
    <!-- Hero Section -->
    <section class="bg-hero-gradient pt-32 pb-24 relative overflow-hidden">
        <div class="absolute top-0 right-0 w-1/2 h-full bg-white/20 skew-x-12 transform origin-top-right z-0"></div>
        <div class="container mx-auto px-6 relative z-10 text-center">
            <span
                class="inline-block py-1 px-4 rounded-full bg-brand-600 text-white text-xs font-bold uppercase tracking-widest mb-4">Values
                & Expertise</span>
            <h1 class="text-4xl md:text-5xl font-extrabold text-brand-950 mb-6">
                マルプラスのサンジョウ：<br class="md:hidden" />
                <span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-brand-600 to-brand-800">3つのコア・バリュー</span>
            </h1>
            <p class="max-w-2xl mx-auto text-brand-800 text-lg md:text-xl font-medium leading-relaxed">
                多才なスキルを、クライアントに提供する「価値」の切り口で3つに分類しました。<br />
                これらが掛け合わさることで、独自の価値が生まれます。
            </p>
        </div>
    </section>

    <!-- Services Detailed Section -->
    <section class="bg-white py-24">
        <div class="container mx-auto px-6">

            <!-- Value 1: Data Strategy Engineer -->
            <div class="mb-32 flex flex-col lg:flex-row items-center gap-12 group">
                <div class="lg:w-1/2 order-2 lg:order-1">
                    <div class="flex items-center gap-4 mb-6">
                        <span
                            class="text-5xl font-black text-brand-100 group-hover:text-brand-200 transition-colors">01</span>
                        <div class="h-1 w-12 bg-[#D4AF37]"></div>
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-2">Data Strategy Engineer</h2>
                    <p class="text-xl font-semibold text-[#D4AF37] mb-6">データ計測基盤の設計・実装</p>
                    <p class="text-2xl font-bold text-brand-800 mb-8 italic border-l-4 border-brand-200 pl-4">
                        「見えない行動を、意思決定の根拠に変える」</p>
                    <p class="text-gray-600 leading-relaxed mb-8 text-lg">
                        単なるレポート作成にとどまらず、GA4やBigQuery、GTMを駆使して「信頼できるデータが蓄積される基盤」そのものを設計・実装します。特にエンジニアリング視点でのデータマート構築（Bronze/Silver/Gold設計）により、高度なビジネス分析を可能にします。
                    </p>

                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="bg-brand-50 p-6 rounded-2xl border border-brand-100">
                            <h4 class="font-bold text-brand-900 mb-3 flex items-center">
                                <svg class="w-5 h-5 mr-2 text-brand-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                                    </path>
                                </svg>
                                Web解析・データ分析
                            </h4>
                            <ul class="text-gray-600 text-sm space-y-2">
                                <li>・GA4/GTMの高度な設計・実装</li>
                                <li>・ユーザー行動・広告流入分析</li>
                                <li>・Looker Studioダッシュボード作成</li>
                                <li>・SQLによるデータ分析</li>
                            </ul>
                        </div>
                        <div class="bg-brand-50 p-6 rounded-2xl border border-brand-100">
                            <h4 class="font-bold text-brand-900 mb-3 flex items-center">
                                <svg class="w-5 h-5 mr-2 text-brand-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                                    </path>
                                </svg>
                                データ基盤構築
                            </h4>
                            <ul class="text-gray-600 text-sm space-y-2">
                                <li>・GCP（BigQuery, Dataform）構築</li>
                                <li>・SQLによるデータマート作成</li>
                                <li>・広告データの統合・VIEW作成</li>
                                <li>・GA4 raw data処理の自動化</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/2 order-1 lg:order-2">
                    <div
                        class="relative overflow-hidden rounded-3xl shadow-2xl transform hover:scale-[1.02] transition-transform duration-500">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data-strategy.svg"
                            alt="Data Strategy Engineer" class="w-full h-auto block">
                    </div>
                </div>
            </div>

            <!-- Value 2: Marketing Ops Architect -->
            <div class="mb-32 flex flex-col lg:flex-row items-center gap-12 group">
                <div class="lg:w-1/2">
                    <div
                        class="relative overflow-hidden rounded-3xl shadow-2xl transform hover:scale-[1.02] transition-transform duration-500">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/marketing-ops.svg"
                            alt="Marketing Ops Architect" class="w-full h-auto block">
                    </div>
                </div>
                <div class="lg:w-1/2">
                    <div class="flex items-center gap-4 mb-6">
                        <span
                            class="text-5xl font-black text-brand-100 group-hover:text-brand-200 transition-colors">02</span>
                        <div class="h-1 w-12 bg-[#A8A9AD]"></div>
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-2">Marketing Ops Architect</h2>
                    <p class="text-xl font-semibold text-[#8a8b8d] mb-6">マーケティング運用の自動化・最適化</p>
                    <p class="text-2xl font-bold text-brand-800 mb-8 italic border-l-4 border-brand-200 pl-4">
                        「点在するデータとツールを繋ぎ、収益を自動最大化する仕組みを作る」</p>
                    <p class="text-gray-600 leading-relaxed mb-8 text-lg">
                        HubSpotや各種API、GASを組み合わせ、バラバラな業務フローを一つの「勝手に回る仕組み」へと再構築します。マーケティングの知見と技術力を掛け合わせることで、現場の工数削減とLTV（顧客生涯価値）の向上を同時に実現します。
                    </p>

                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="bg-brand-50 p-6 rounded-2xl border border-brand-100">
                            <h4 class="font-bold text-brand-900 mb-3 flex items-center">
                                <svg class="w-5 h-5 mr-2 text-brand-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 4.354a4 4 0 110 15.292M15 21H3v-1a6 6 0 0112 0v1zm0-6a3.375 3.375 0 100-6.75 3.375 3.375 0 000 6.75z">
                                    </path>
                                </svg>
                                マーケティングテクノロジー
                            </h4>
                            <ul class="text-gray-600 text-sm space-y-2">
                                <li>・HubSpotの導入支援・運用</li>
                                <li>・ワークフロー設計・自動化</li>
                                <li>・UTAGE, Shopify等の活用</li>
                                <li>・顧客管理（CRM/MA）の最適化</li>
                            </ul>
                        </div>
                        <div class="bg-brand-50 p-6 rounded-2xl border border-brand-100">
                            <h4 class="font-bold text-brand-900 mb-3 flex items-center">
                                <svg class="w-5 h-5 mr-2 text-brand-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                                </svg>
                                Web実装・業務自動化
                            </h4>
                            <ul class="text-gray-600 text-sm space-y-2">
                                <li>・WordPress/Shopify構築・運用</li>
                                <li>・PHP/Liquid/JSによるカスタム改修</li>
                                <li>・GASを活用したAPI連携</li>
                                <li>・レポート取得・作成の完全自動化</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Value 3: Global Project Controller -->
            <div class="mb-24 flex flex-col lg:flex-row items-center gap-12 group">
                <div class="lg:w-1/2 order-2 lg:order-1">
                    <div class="flex items-center gap-4 mb-6">
                        <span
                            class="text-5xl font-black text-brand-100 group-hover:text-brand-200 transition-colors">03</span>
                        <div class="h-1 w-12 bg-[#B87333]"></div>
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-2">Global Project Controller</h2>
                    <p class="text-xl font-semibold text-[#B87333] mb-6">越境プロジェクトの技術統括・PM</p>
                    <p class="text-2xl font-bold text-brand-800 mb-8 italic border-l-4 border-brand-200 pl-4">
                        「言葉と技術の壁を越え、グローバル・プロジェクトを完遂させる」</p>
                    <p class="text-gray-600 leading-relaxed mb-8 text-lg">
                        多言語対応（日・中・繁）とシステム開発、PMスキルの三位一体で、海外展開や複雑な技術要件が絡むプロジェクトをリードします。単なる翻訳者ではなく、ビジネス要件とシステム仕様を深く理解した上で、技術的な「橋渡し」役としてプロジェクトを成功に導きます。
                    </p>

                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="bg-brand-50 p-6 rounded-2xl border border-brand-100">
                            <h4 class="font-bold text-brand-900 mb-3 flex items-center">
                                <svg class="w-5 h-5 mr-2 text-brand-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 002 2 2 2 0 012 2v.65M15 3.1a9 9 0 11-11.8 11.8">
                                    </path>
                                </svg>
                                グローバル・ローカライズ
                            </h4>
                            <ul class="text-gray-600 text-sm space-y-2">
                                <li>・中華圏（簡・繁）向けサイト構築</li>
                                <li>・システム・法務文書の多言語翻訳</li>
                                <li>・Auth0等の認証システムのグローバル展開</li>
                                <li>・SAML/OAuthなどの高度な認証実装</li>
                            </ul>
                        </div>
                        <div class="bg-brand-50 p-6 rounded-2xl border border-brand-100">
                            <h4 class="font-bold text-brand-900 mb-3 flex items-center">
                                <svg class="w-5 h-5 mr-2 text-brand-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.156-2.049-.446-2.998z">
                                    </path>
                                </svg>
                                PM・要件定義
                            </h4>
                            <ul class="text-gray-600 text-sm space-y-2">
                                <li>・クライアント折衝・交渉</li>
                                <li>・要件定義・技術選定</li>
                                <li>・開発ディレクション・管理</li>
                                <li>・高度なセキュリティ・認証実装</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/2 order-1 lg:order-2">
                    <div
                        class="relative overflow-hidden rounded-3xl shadow-2xl transform hover:scale-[1.02] transition-transform duration-500">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/global-project.svg"
                            alt="Global Project Controller" class="w-full h-auto block">
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Cubed Value Section -->
    <section class="bg-brand-950 py-32 relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <svg class="w-full h-full" viewBox="0 0 100 100">
                <defs>
                    <pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse">
                        <path d="M 10 0 L 0 0 0 10" fill="none" stroke="white" stroke-width="0.5" />
                    </pattern>
                </defs>
                <rect width="100" height="100" fill="url(#grid)" />
            </svg>
        </div>

        <div class="container mx-auto px-6 relative z-10 text-center">
            <h3 class="text-white text-2xl md:text-3xl font-bold mb-12">3つの要素が重なる<span
                    class="text-[#D4AF37]">「3乗」</span>の価値</h3>

            <div
                class="flex flex-col md:flex-row items-center justify-center gap-8 mb-16 text-white text-3xl md:text-5xl font-black">
                <div class="bg-white/10 px-8 py-6 rounded-3xl backdrop-blur-md border border-white/20">分析</div>
                <div class="text-[#D4AF37]">×</div>
                <div class="bg-white/10 px-8 py-6 rounded-3xl backdrop-blur-md border border-white/20">自動化</div>
                <div class="text-[#D4AF37]">×</div>
                <div class="bg-white/10 px-8 py-6 rounded-3xl backdrop-blur-md border border-white/20">グローバル</div>
            </div>

            <div
                class="bg-white p-12 rounded-[3rem] shadow-2xl max-w-4xl mx-auto -mb-16 transform hover:scale-[1.02] transition-transform">
                <h4
                    class="text-2xl md:text-3xl font-bold text-brand-950 mb-8 underline decoration-[#D4AF37] decoration-4 underline-offset-8">
                    次世代のマーケティング基盤構築</h4>
                <p class="text-gray-700 text-lg leading-relaxed mb-8">
                    通常なら3社に発注が必要な高度な要件を、一貫した技術思想で完結できます。
                </p>
                <div class="bg-brand-50 p-8 rounded-2xl text-left border-l-8 border-[#D4AF37]">
                    <p class="text-brand-900 font-bold mb-2">例えば...</p>
                    <p class="text-gray-700 leading-relaxed italic">
                        「中華圏向けのECサイトにおいて、広告からCRMまでをAPIで統合し、ROASをBigQueryで日次可視化する」といったプロジェクトを成功へ導きます。
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Bottom CTA -->
    <section class="bg-white pt-40 pb-24">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-8">お客様のビジネスの「＋」を、共に。</h2>
            <a href="<?php echo esc_url(home_url('/contact')); ?>"
                class="inline-flex items-center justify-center px-10 py-5 text-lg font-bold text-white bg-brand-600 rounded-full hover:bg-brand-700 transition-all duration-300 shadow-xl hover:shadow-brand-500/50 hover:-translate-y-1">
                お問い合わせはこちら
                <svg class="w-6 h-6 ml-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3">
                    </path>
                </svg>
            </a>
        </div>
    </section>
</main>

<?php
get_footer();
