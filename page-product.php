<?php
/**
 * Template Name: プロダクト (page-product.php)
 * 
 * URL /product で自動的に読み込まれるテンプレート
 *
 * @package oscss-wp-maruplus3
 */

get_header();
?>

<main id="primary" class="site-main font-sans">
    <!-- Hero Section -->
    <section class="bg-hero-gradient pt-32 pb-24 relative overflow-hidden">
        <div class="absolute top-0 right-0 w-1/2 h-full bg-white/20 skew-x-12 transform origin-top-right z-0 pointer-events-none"></div>
        <div class="container mx-auto px-6 relative z-10 text-center">
            <span class="inline-block py-1 px-4 rounded-full bg-brand-600 text-white text-xs font-bold uppercase tracking-widest mb-4">
                SaaS & Product Suite
            </span>
            <h1 class="text-4xl md:text-5xl font-extrabold text-brand-950 mb-6">
                マルプラスの自社プロダクト：<br class="md:hidden" />
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-600 to-brand-800">
                    技術とビジネスを加速するSaaS群
                </span>
            </h1>
            <p class="max-w-2xl mx-auto text-brand-800 text-lg md:text-xl font-medium leading-relaxed">
                生成AI時代のSEO/GEO最適化、東証株価データ分析、ソロプレナー向けCRMまで。<br />
                実務から生まれたプロダクト群が、貴社と個人の成長を強力にサポートします。
            </p>
        </div>
    </section>

    <!-- Product List Section -->
    <section class="bg-white py-24">
        <div class="container mx-auto px-6 space-y-32">

            <!-- Product 1: geomaru -->
            <div id="geomaru" class="flex flex-col lg:flex-row items-stretch gap-12 group rounded-3xl p-8 md:p-12 bg-gradient-to-br from-purple-50/50 via-white to-brand-50/30 border border-purple-100 shadow-xl transition-all duration-500 hover:shadow-2xl">
                <div class="lg:w-1/2 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center gap-3 mb-4">
                            <span class="py-1 px-3.5 rounded-full bg-purple-100 text-purple-700 font-extrabold text-xs tracking-wider uppercase">
                                GEO & SEO SaaS
                            </span>
                            <span class="text-xs text-gray-400 font-medium">geomaru.oscarchair.jp</span>
                        </div>
                        <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-3 flex items-center gap-3">
                            <span class="w-10 h-10 rounded-2xl bg-purple-600 text-white inline-flex items-center justify-center text-xl shadow-lg shadow-purple-200">G</span>
                            GEOマル <span class="text-purple-600 font-bold text-2xl">(geomaru)</span>
                        </h2>
                        <p class="text-xl font-semibold text-purple-700 mb-4">生成AI検索・SEO統合診断SaaS</p>
                        <p class="text-gray-600 leading-relaxed mb-8 text-base">
                            ChatGPTやClaudeなどのAI検索エンジン（GEO: Generative Engine Optimization）での可視性を高め、Webサイトの技術的SEOを自動監査・可視化する統合診断ツールセットです。
                        </p>

                        <!-- Features Grid -->
                        <div class="grid sm:grid-cols-2 gap-4 mb-8">
                            <div class="bg-white p-4 rounded-xl border border-purple-100/80 shadow-sm">
                                <h4 class="font-bold text-gray-900 text-sm mb-1 flex items-center gap-2">
                                    <span class="text-purple-600">🤖</span> AIクローラーアクセス判定
                                </h4>
                                <p class="text-xs text-gray-500">robots.txtやmeta属性を自動パースしGPTBot等のブロック状態を検出</p>
                            </div>
                            <div class="bg-white p-4 rounded-xl border border-purple-100/80 shadow-sm">
                                <h4 class="font-bold text-gray-900 text-sm mb-1 flex items-center gap-2">
                                    <span class="text-purple-600">🔗</span> Canonicalタグ監査
                                </h4>
                                <p class="text-xs text-gray-500">SEO評価を損ねる欠落・重複・誤設定のcanonicalタグを即座にチェック</p>
                            </div>
                            <div class="bg-white p-4 rounded-xl border border-purple-100/80 shadow-sm">
                                <h4 class="font-bold text-gray-900 text-sm mb-1 flex items-center gap-2">
                                    <span class="text-purple-600">📝</span> メタタグ & 文字数判定
                                </h4>
                                <p class="text-xs text-gray-500">日本語の全角文字数基準（タイトル/説明）やOGP・見出し階層を検証</p>
                            </div>
                            <div class="bg-white p-4 rounded-xl border border-purple-100/80 shadow-sm">
                                <h4 class="font-bold text-gray-900 text-sm mb-1 flex items-center gap-2">
                                    <span class="text-purple-600">📊</span> 構造化データ & XMLマップ
                                </h4>
                                <p class="text-xs text-gray-500">JSON-LD構文チェック、Schema.org推奨キー判定、サイトマップ重複検出</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <a href="https://geomaru.oscarchair.jp" target="_blank" rel="noopener noreferrer" 
                           class="inline-flex items-center justify-center px-6 py-3.5 rounded-xl bg-purple-600 hover:bg-purple-700 text-white font-bold text-sm shadow-lg shadow-purple-200 transition-all duration-300 transform hover:-translate-y-0.5">
                            Webサイトを開く
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                        </a>
                    </div>
                </div>

                <!-- Product Image Frame -->
                <div class="lg:w-1/2 flex items-center justify-center">
                    <div class="relative overflow-hidden rounded-2xl shadow-xl border border-purple-100/80 group-hover:scale-[1.02] transition-transform duration-500 w-full">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/geomaru.svg" alt="geomaru (GEOマル) プレビュー画像枠" class="w-full h-auto block object-cover">
                    </div>
                </div>
            </div>

            <!-- Product 2: stocksmaru -->
            <div id="stocksmaru" class="flex flex-col lg:flex-row items-stretch gap-12 group rounded-3xl p-8 md:p-12 bg-gradient-to-br from-indigo-950 via-slate-900 to-slate-950 text-white shadow-2xl transition-all duration-500 hover:shadow-indigo-900/30">
                <div class="lg:w-1/2 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center gap-3 mb-4">
                            <span class="py-1 px-3.5 rounded-full bg-indigo-500/20 text-indigo-300 border border-indigo-500/30 font-extrabold text-xs tracking-wider uppercase">
                                J-QUANTS API INTEGRATED
                            </span>
                            <span class="text-xs text-slate-400 font-medium">stocksmaru.oscarchair.jp</span>
                        </div>
                        <h2 class="text-3xl md:text-4xl font-extrabold text-white mb-3 flex items-center gap-3">
                            <span class="w-10 h-10 rounded-2xl bg-indigo-600 text-white inline-flex items-center justify-center text-xl shadow-lg shadow-indigo-500/30">S</span>
                            STOCKSマル <span class="text-indigo-400 font-bold text-2xl">(stocksmaru)</span>
                        </h2>
                        <p class="text-xl font-semibold text-emerald-400 mb-4">東証株価・日本株投資分析SaaS</p>
                        <p class="text-slate-300 leading-relaxed mb-8 text-base">
                            JPX公式の J-Quants API V2 を活用した次世代株投資分析SaaS。プロレベルの財務データ・株価四本値ランキングをブラウザ上でシームレスに可視化・分析します。
                        </p>

                        <!-- Features Grid -->
                        <div class="grid sm:grid-cols-2 gap-4 mb-8">
                            <div class="bg-slate-800/80 p-4 rounded-xl border border-slate-700/80">
                                <h4 class="font-bold text-white text-sm mb-1 flex items-center gap-2">
                                    <span class="text-emerald-400">📈</span> リアルタイム市場ランキング
                                </h4>
                                <p class="text-xs text-slate-400">売買代金・売買高・値上がり率ランキングをリアルタイムで集計表示</p>
                            </div>
                            <div class="bg-slate-800/80 p-4 rounded-xl border border-slate-700/80">
                                <h4 class="font-bold text-white text-sm mb-1 flex items-center gap-2">
                                    <span class="text-indigo-400">🔍</span> 株価四本値スクリーニング
                                </h4>
                                <p class="text-xs text-slate-400">銘柄コード別のデイリーOHLC分析・前日比率・四本値履歴の詳細追跡</p>
                            </div>
                            <div class="bg-slate-800/80 p-4 rounded-xl border border-slate-700/80">
                                <h4 class="font-bold text-white text-sm mb-1 flex items-center gap-2">
                                    <span class="text-indigo-400">🏢</span> 財務諸表 / 決算自動監査
                                </h4>
                                <p class="text-xs text-slate-400">売上高・営業利益・EPSの進捗と変化度合いを自動計算・判定</p>
                            </div>
                            <div class="bg-slate-800/80 p-4 rounded-xl border border-slate-700/80">
                                <h4 class="font-bold text-white text-sm mb-1 flex items-center gap-2">
                                    <span class="text-emerald-400">🤖</span> AIポートフォリオ監査
                                </h4>
                                <p class="text-xs text-slate-400">保有銘柄のボラティリティ評価、セクター分散度および推奨リバランス提案</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <a href="http://stocksmaru.oscarchair.jp" target="_blank" rel="noopener noreferrer" 
                           class="inline-flex items-center justify-center px-6 py-3.5 rounded-xl bg-indigo-600 hover:bg-indigo-500 text-white font-bold text-sm shadow-lg shadow-indigo-600/40 transition-all duration-300 transform hover:-translate-y-0.5">
                            Webサイトを開く
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                        </a>
                    </div>
                </div>

                <!-- Product Image Frame -->
                <div class="lg:w-1/2 flex items-center justify-center">
                    <div class="relative overflow-hidden rounded-2xl shadow-xl border border-slate-700/80 group-hover:scale-[1.02] transition-transform duration-500 w-full">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/stocksmaru.svg" alt="stocksmaru (STOCKSマル) プレビュー画像枠" class="w-full h-auto block object-cover">
                    </div>
                </div>
            </div>

            <!-- Product 3: risemaru -->
            <div id="risemaru" class="flex flex-col lg:flex-row items-stretch gap-12 group rounded-3xl p-8 md:p-12 bg-gradient-to-br from-rose-50/50 via-white to-amber-50/30 border border-rose-100 shadow-xl transition-all duration-500 hover:shadow-2xl">
                <div class="lg:w-1/2 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center gap-3 mb-4">
                            <span class="py-1 px-3.5 rounded-full bg-rose-100 text-rose-700 font-extrabold text-xs tracking-wider uppercase">
                                Solo-preneur Career & CRM
                            </span>
                            <span class="text-xs text-gray-400 font-medium">risemaru.oscarchair.jp</span>
                        </div>
                        <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-3 flex items-center gap-3">
                            <span class="w-10 h-10 rounded-2xl bg-rose-600 text-white inline-flex items-center justify-center text-xl shadow-lg shadow-rose-200">R</span>
                            RISEマル <span class="text-rose-600 font-bold text-2xl">(risemaru)</span>
                        </h2>
                        <p class="text-xl font-semibold text-rose-700 mb-4">個人・ソロプレナー向けキャリア＆SaaS CRM</p>
                        <p class="text-gray-600 leading-relaxed mb-8 text-base">
                            フリーランス・副業ワーカー・個人事業主・AI一人企業の「成長（Rise）」を丸ごと（maru）サポート。求人管理から履歴書生成、受注後の顧客管理までを一気通貫でカバーします。
                        </p>

                        <!-- Features Grid -->
                        <div class="grid sm:grid-cols-2 gap-4 mb-8">
                            <div class="bg-white p-4 rounded-xl border border-rose-100/80 shadow-sm">
                                <h4 class="font-bold text-gray-900 text-sm mb-1 flex items-center gap-2">
                                    <span class="text-emerald-600 font-extrabold text-xs px-2 py-0.5 bg-emerald-100 rounded">無料</span> 履歴書・職務経歴書 Engine
                                </h4>
                                <p class="text-xs text-gray-500">入力データからJIS規格等のきれいなPDF/Markdownを非AIで無料生成</p>
                            </div>
                            <div class="bg-white p-4 rounded-xl border border-rose-100/80 shadow-sm">
                                <h4 class="font-bold text-gray-900 text-sm mb-1 flex items-center gap-2">
                                    <span class="text-emerald-600 font-extrabold text-xs px-2 py-0.5 bg-emerald-100 rounded">無料</span> 応募ステータス & 顧客化
                                </h4>
                                <p class="text-xs text-gray-500">求人応募管理から成約時の「顧客・プロジェクト自動昇格」フロー</p>
                            </div>
                            <div class="bg-white p-4 rounded-xl border border-rose-100/80 shadow-sm">
                                <h4 class="font-bold text-gray-900 text-sm mb-1 flex items-center gap-2">
                                    <span class="text-rose-600 font-extrabold text-xs px-2 py-0.5 bg-rose-100 rounded">AI機能</span> 求人AIマッチ度診断
                                </h4>
                                <p class="text-xs text-gray-500">貼った求人URLと自身の経歴をAIが分析し適合スコア(%)と助言を出力</p>
                            </div>
                            <div class="bg-white p-4 rounded-xl border border-rose-100/80 shadow-sm">
                                <h4 class="font-bold text-gray-900 text-sm mb-1 flex items-center gap-2">
                                    <span class="text-rose-600 font-extrabold text-xs px-2 py-0.5 bg-rose-100 rounded">AI機能</span> 自己PR・経歴最適化
                                </h4>
                                <p class="text-xs text-gray-500">応募先求人の要件に合わせた自己PR・職歴アピール文のAIアドバイス</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <a href="https://risemaru.oscarchair.jp" target="_blank" rel="noopener noreferrer" 
                           class="inline-flex items-center justify-center px-6 py-3.5 rounded-xl bg-rose-600 hover:bg-rose-700 text-white font-bold text-sm shadow-lg shadow-rose-200 transition-all duration-300 transform hover:-translate-y-0.5">
                            Webサイトを開く
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                        </a>
                    </div>
                </div>

                <!-- Product Image Frame -->
                <div class="lg:w-1/2 flex items-center justify-center">
                    <div class="relative overflow-hidden rounded-2xl shadow-xl border border-rose-100/80 group-hover:scale-[1.02] transition-transform duration-500 w-full">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/risemaru.svg" alt="risemaru (RISEマル) プレビュー画像枠" class="w-full h-auto block object-cover">
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Bottom Contact CTA Section -->
    <section class="bg-gradient-to-r from-brand-900 to-brand-950 text-white py-20 relative overflow-hidden">
        <div class="container mx-auto px-6 text-center relative z-10">
            <h2 class="text-3xl md:text-4xl font-extrabold mb-4">
                自社SaaSの導入・開発カスタマイズのご相談
            </h2>
            <p class="text-brand-200 max-w-2xl mx-auto mb-8 text-base md:text-lg">
                各プロダクトのAPI連携、企業向けカスタマイズ開発、データ基盤の構築支援までお気軽にお問い合わせください。
            </p>
            <a href="<?php echo esc_url(home_url('/contact')); ?>" 
               class="inline-flex items-center justify-center px-8 py-4 rounded-xl bg-white text-brand-950 font-extrabold text-base shadow-2xl hover:bg-brand-50 transition-all duration-300 transform hover:-translate-y-1">
                お問い合わせはこちら
                <svg class="w-5 h-5 ml-2 text-brand-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7-7 7M5 12h14"></path></svg>
            </a>
        </div>
    </section>
</main>

<?php
get_footer();
