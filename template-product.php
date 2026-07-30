<?php
/**
 * Template Name: プロダクト
 *
 * @package oscss-wp-maruplus3
 */

get_header();
?>

<main id="primary" class="site-main product-page font-sans bg-gray-50 pb-24">
    <!-- Hero Section: Perfectly matched with Company & Services design theme -->
    <section class="product-page__hero relative overflow-hidden bg-hero-gradient text-brand-950 pt-24 pb-32">
        <div class="product-page__hero-bg absolute top-0 left-0 w-full h-full overflow-hidden z-0 pointer-events-none">
            <div class="product-page__hero-orb product-page__hero-orb--1 absolute w-64 h-64 bg-brand-600 rounded-full mix-blend-multiply filter blur-3xl opacity-40 animate-float" style="top: -10%; left: -10%;"></div>
            <div class="product-page__hero-orb product-page__hero-orb--2 absolute w-64 h-64 bg-brand-400 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse-slow" style="top: 20%; right: -10%;"></div>
            <div class="product-page__hero-orb product-page__hero-orb--3 absolute w-48 h-48 bg-lilac rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-float" style="bottom: -10%; left: 30%;"></div>
        </div>

        <div class="product-page__hero-container container mx-auto px-6 relative z-10 text-center">
            <span class="product-page__hero-badge inline-block py-1 px-4 rounded-full bg-brand-600 text-white text-xs font-bold uppercase tracking-widest mb-4 shadow-sm">
                SaaS & Product Suite
            </span>
            <h1 class="product-page__hero-title text-4xl md:text-5xl font-extrabold mb-6 tracking-tight drop-shadow-md">
                マルプラスの自社プロダクト：<br class="md:hidden" />
                <span class="product-page__hero-title-highlight text-transparent bg-clip-text bg-gradient-to-r from-brand-600 to-brand-800">
                    技術とビジネスを加速するSaaS群
                </span>
            </h1>
            <p class="product-page__hero-description max-w-2xl mx-auto text-brand-700 text-lg md:text-xl font-medium leading-relaxed">
                生成AI時代のSEO/GEO最適化、東証株価データ分析、ソロプレナー向けCRMまで。<br />
                実務から生まれたプロダクト群が、貴社と個人の成長を強力にサポートします。
            </p>
        </div>

        <!-- Wave Divider matched with Company Page -->
        <div class="product-page__hero-wave absolute bottom-0 w-full overflow-hidden leading-none z-10">
            <svg class="product-page__wave-svg relative block w-full h-12 md:h-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V95.8C59.71,118,130.42,120.2,207.2,109.83,248.66,104.34,288.66,82.49,321.39,56.44Z" class="fill-gray-50"></path>
            </svg>
        </div>
    </section>

    <!-- Main Product List Container -->
    <div class="product-page__main-container container mx-auto px-6 relative z-10 -mt-16 md:-mt-20 space-y-16">

        <!-- Product 1: GEOマル (geomaru) -->
        <section id="geomaru" class="product-card product-card--geomaru bg-white rounded-3xl shadow-xl p-8 md:p-12 border-t-4 border-purple-500 hover:shadow-2xl transition-all duration-500 border border-gray-100">
            <div class="product-card__inner flex flex-col lg:flex-row items-stretch gap-12 group">
                <!-- Content Area -->
                <div class="product-card__content lg:w-1/2 flex flex-col justify-between space-y-6">
                    <div class="product-card__header-group">
                        <div class="product-card__badge-row flex items-center gap-3 mb-4">
                            <span class="product-card__badge bg-purple-100 text-purple-700 font-extrabold text-xs px-3.5 py-1 rounded-full uppercase tracking-wider">
                                GEO & SEO SaaS
                            </span>
                            <span class="product-card__domain text-xs text-gray-400 font-medium">geomaru.oscarchair.jp</span>
                        </div>
                        <h2 class="product-card__title text-3xl md:text-4xl font-extrabold text-gray-900 mb-3 flex items-center gap-3">
                            <span class="product-card__icon w-10 h-10 rounded-2xl bg-purple-600 text-white inline-flex items-center justify-center text-xl shadow-lg shadow-purple-200 font-bold">G</span>
                            GEOマル <span class="product-card__title-sub text-purple-600 font-bold text-2xl">(geomaru)</span>
                        </h2>
                        <p class="product-card__subtitle text-xl font-bold text-purple-700 mb-4 border-l-4 border-purple-300 pl-3">
                            生成AI検索・SEO統合診断SaaS
                        </p>
                        <p class="product-card__description text-gray-600 leading-relaxed mb-8 text-base font-medium">
                            ChatGPTやClaudeなどのAI検索エンジン（GEO: Generative Engine Optimization）での可視性を高め、Webサイトの技術的SEOを自動監査・可視化する統合診断ツールセットです。
                        </p>

                        <!-- Features Grid (Matching Company / Service Theme) -->
                        <div class="product-card__features grid sm:grid-cols-2 gap-4 mb-8">
                            <div class="product-card__feature-item bg-brand-50/60 p-4 rounded-2xl border border-brand-100">
                                <h4 class="product-card__feature-title font-bold text-gray-900 text-sm mb-1 flex items-center gap-2">
                                    <span class="text-purple-600">🤖</span> AIクローラーアクセス判定
                                </h4>
                                <p class="product-card__feature-desc text-xs text-gray-600 leading-relaxed">robots.txtやmeta属性を自動パースしGPTBot等のブロック状態を検出</p>
                            </div>
                            <div class="product-card__feature-item bg-brand-50/60 p-4 rounded-2xl border border-brand-100">
                                <h4 class="product-card__feature-title font-bold text-gray-900 text-sm mb-1 flex items-center gap-2">
                                    <span class="text-purple-600">🔗</span> Canonicalタグ監査
                                </h4>
                                <p class="product-card__feature-desc text-xs text-gray-600 leading-relaxed">SEO評価を損ねる欠落・重複・誤設定のcanonicalタグを即座にチェック</p>
                            </div>
                            <div class="product-card__feature-item bg-brand-50/60 p-4 rounded-2xl border border-brand-100">
                                <h4 class="product-card__feature-title font-bold text-gray-900 text-sm mb-1 flex items-center gap-2">
                                    <span class="text-purple-600">📝</span> メタタグ & 文字数判定
                                </h4>
                                <p class="product-card__feature-desc text-xs text-gray-600 leading-relaxed">日本語の全角文字数基準（タイトル/説明）やOGP・見出し階層を検証</p>
                            </div>
                            <div class="product-card__feature-item bg-brand-50/60 p-4 rounded-2xl border border-brand-100">
                                <h4 class="product-card__feature-title font-bold text-gray-900 text-sm mb-1 flex items-center gap-2">
                                    <span class="text-purple-600">📊</span> 構造化データ & XMLマップ
                                </h4>
                                <p class="product-card__feature-desc text-xs text-gray-600 leading-relaxed">JSON-LD構文チェック、Schema.org推奨キー判定、サイトマップ重複検出</p>
                            </div>
                        </div>
                    </div>

                    <div class="product-card__action">
                        <a href="https://geomaru.oscarchair.jp" target="_blank" rel="noopener noreferrer" 
                           class="product-card__button inline-flex items-center justify-center px-7 py-3.5 rounded-xl bg-purple-600 hover:bg-purple-700 text-white font-bold text-sm shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-0.5">
                            Webサイトを開く
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                        </a>
                    </div>
                </div>

                <!-- Media Preview Frame (Real Screenshot Image) -->
                <div class="product-card__media lg:w-1/2 flex items-center justify-center">
                    <div class="product-card__media-wrapper relative overflow-hidden rounded-2xl shadow-lg border border-gray-200 group-hover:scale-[1.02] transition-transform duration-500 w-full bg-gray-100">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/geomaru-preview.png" alt="GEOマル (geomaru) ランディングページ画像" class="product-card__image w-full h-auto block object-cover">
                    </div>
                </div>
            </div>
        </section>

        <!-- Product 2: STOCKSマル (stocksmaru) -->
        <section id="stocksmaru" class="product-card product-card--stocksmaru bg-white rounded-3xl shadow-xl p-8 md:p-12 border-t-4 border-indigo-600 hover:shadow-2xl transition-all duration-500 border border-gray-100">
            <div class="product-card__inner flex flex-col lg:flex-row items-stretch gap-12 group">
                <!-- Content Area -->
                <div class="product-card__content lg:w-1/2 flex flex-col justify-between space-y-6">
                    <div class="product-card__header-group">
                        <div class="product-card__badge-row flex items-center gap-3 mb-4">
                            <span class="product-card__badge bg-indigo-100 text-indigo-700 font-extrabold text-xs px-3.5 py-1 rounded-full uppercase tracking-wider">
                                J-QUANTS API INTEGRATED
                            </span>
                            <span class="product-card__domain text-xs text-gray-400 font-medium">stocksmaru.oscarchair.jp</span>
                        </div>
                        <h2 class="product-card__title text-3xl md:text-4xl font-extrabold text-gray-900 mb-3 flex items-center gap-3">
                            <span class="product-card__icon w-10 h-10 rounded-2xl bg-indigo-600 text-white inline-flex items-center justify-center text-xl shadow-lg shadow-indigo-200 font-bold">S</span>
                            STOCKSマル <span class="product-card__title-sub text-indigo-600 font-bold text-2xl">(stocksmaru)</span>
                        </h2>
                        <p class="product-card__subtitle text-xl font-bold text-emerald-600 mb-4 border-l-4 border-emerald-400 pl-3">
                            東証株価・日本株投資分析SaaS
                        </p>
                        <p class="product-card__description text-gray-600 leading-relaxed mb-8 text-base font-medium">
                            JPX公式の J-Quants API V2 を活用した次世代株投資分析SaaS。プロレベルの財務データ・株価四本値ランキングをブラウザ上でシームレスに可視化・分析します。
                        </p>

                        <!-- Features Grid -->
                        <div class="product-card__features grid sm:grid-cols-2 gap-4 mb-8">
                            <div class="product-card__feature-item bg-brand-50/60 p-4 rounded-2xl border border-brand-100">
                                <h4 class="product-card__feature-title font-bold text-gray-900 text-sm mb-1 flex items-center gap-2">
                                    <span class="text-emerald-600">📈</span> リアルタイム市場ランキング
                                </h4>
                                <p class="product-card__feature-desc text-xs text-gray-600 leading-relaxed">売買代金・売買高・値上がり率ランキングをリアルタイムで集計表示</p>
                            </div>
                            <div class="product-card__feature-item bg-brand-50/60 p-4 rounded-2xl border border-brand-100">
                                <h4 class="product-card__feature-title font-bold text-gray-900 text-sm mb-1 flex items-center gap-2">
                                    <span class="text-indigo-600">🔍</span> 株価四本値スクリーニング
                                </h4>
                                <p class="product-card__feature-desc text-xs text-gray-600 leading-relaxed">銘柄コード別のデイリーOHLC分析・前日比率・四本値履歴の詳細追跡</p>
                            </div>
                            <div class="product-card__feature-item bg-brand-50/60 p-4 rounded-2xl border border-brand-100">
                                <h4 class="product-card__feature-title font-bold text-gray-900 text-sm mb-1 flex items-center gap-2">
                                    <span class="text-indigo-600">🏢</span> 財務諸表 / 決算自動監査
                                </h4>
                                <p class="product-card__feature-desc text-xs text-gray-600 leading-relaxed">売上高・営業利益・EPSの進捗と変化度合いを自動計算・判定</p>
                            </div>
                            <div class="product-card__feature-item bg-brand-50/60 p-4 rounded-2xl border border-brand-100">
                                <h4 class="product-card__feature-title font-bold text-gray-900 text-sm mb-1 flex items-center gap-2">
                                    <span class="text-emerald-600">🤖</span> AIポートフォリオ監査
                                </h4>
                                <p class="product-card__feature-desc text-xs text-gray-600 leading-relaxed">保有銘柄のボラティリティ評価、セクター分散度および推奨リバランス提案</p>
                            </div>
                        </div>
                    </div>

                    <div class="product-card__action">
                        <a href="https://stocksmaru.oscarchair.jp" target="_blank" rel="noopener noreferrer" 
                           class="product-card__button inline-flex items-center justify-center px-7 py-3.5 rounded-xl bg-indigo-600 hover:bg-indigo-700 text-white font-bold text-sm shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-0.5">
                            Webサイトを開く
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                        </a>
                    </div>
                </div>

                <!-- Media Preview Frame (Real Screenshot Image) -->
                <div class="product-card__media lg:w-1/2 flex items-center justify-center">
                    <div class="product-card__media-wrapper relative overflow-hidden rounded-2xl shadow-lg border border-gray-200 group-hover:scale-[1.02] transition-transform duration-500 w-full bg-gray-100">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/stocksmaru-preview.png" alt="STOCKSマル (stocksmaru) ランディングページ画像" class="product-card__image w-full h-auto block object-cover">
                    </div>
                </div>
            </div>
        </section>

        <!-- Product 3: RISEマル (risemaru) -->
        <section id="risemaru" class="product-card product-card--risemaru bg-white rounded-3xl shadow-xl p-8 md:p-12 border-t-4 border-rose-500 hover:shadow-2xl transition-all duration-500 border border-gray-100">
            <div class="product-card__inner flex flex-col lg:flex-row items-stretch gap-12 group">
                <!-- Content Area -->
                <div class="product-card__content lg:w-1/2 flex flex-col justify-between space-y-6">
                    <div class="product-card__header-group">
                        <div class="product-card__badge-row flex items-center gap-3 mb-4">
                            <span class="product-card__badge bg-rose-100 text-rose-700 font-extrabold text-xs px-3.5 py-1 rounded-full uppercase tracking-wider">
                                Solo-preneur Career & CRM
                            </span>
                            <span class="product-card__domain text-xs text-gray-400 font-medium">risemaru.oscarchair.jp</span>
                        </div>
                        <h2 class="product-card__title text-3xl md:text-4xl font-extrabold text-gray-900 mb-3 flex items-center gap-3">
                            <span class="product-card__icon w-10 h-10 rounded-2xl bg-rose-600 text-white inline-flex items-center justify-center text-xl shadow-lg shadow-rose-200 font-bold">R</span>
                            RISEマル <span class="product-card__title-sub text-rose-600 font-bold text-2xl">(risemaru)</span>
                        </h2>
                        <p class="product-card__subtitle text-xl font-bold text-rose-600 mb-4 border-l-4 border-rose-300 pl-3">
                            個人・ソロプレナー向けキャリア＆SaaS CRM
                        </p>
                        <p class="product-card__description text-gray-600 leading-relaxed mb-8 text-base font-medium">
                            フリーランス・副業ワーカー・個人事業主・AI一人企業の「成長（Rise）」を丸ごと（maru）サポート。求人管理から履歴書生成、受注後の顧客管理までを一気通貫でカバーします。
                        </p>

                        <!-- Features Grid -->
                        <div class="product-card__features grid sm:grid-cols-2 gap-4 mb-8">
                            <div class="product-card__feature-item bg-brand-50/60 p-4 rounded-2xl border border-brand-100">
                                <h4 class="product-card__feature-title font-bold text-gray-900 text-sm mb-1 flex items-center gap-2">
                                    <span class="text-emerald-700 bg-emerald-100 text-[10px] font-extrabold px-2 py-0.5 rounded">無料</span> 履歴書・職務経歴書 Engine
                                </h4>
                                <p class="product-card__feature-desc text-xs text-gray-600 leading-relaxed">入力データからJIS規格等のきれいなPDF/Markdownを非AIで無料生成</p>
                            </div>
                            <div class="product-card__feature-item bg-brand-50/60 p-4 rounded-2xl border border-brand-100">
                                <h4 class="product-card__feature-title font-bold text-gray-900 text-sm mb-1 flex items-center gap-2">
                                    <span class="text-emerald-700 bg-emerald-100 text-[10px] font-extrabold px-2 py-0.5 rounded">無料</span> 応募ステータス & 顧客化
                                </h4>
                                <p class="product-card__feature-desc text-xs text-gray-600 leading-relaxed">求人応募管理から成約時の「顧客・プロジェクト自動昇格」フロー</p>
                            </div>
                            <div class="product-card__feature-item bg-brand-50/60 p-4 rounded-2xl border border-brand-100">
                                <h4 class="product-card__feature-title font-bold text-gray-900 text-sm mb-1 flex items-center gap-2">
                                    <span class="text-rose-700 bg-rose-100 text-[10px] font-extrabold px-2 py-0.5 rounded">AI機能</span> 求人AIマッチ度診断
                                </h4>
                                <p class="product-card__feature-desc text-xs text-gray-600 leading-relaxed">貼った求人URLと自身の経歴をAIが分析し適合スコア(%)と助言を出力</p>
                            </div>
                            <div class="product-card__feature-item bg-brand-50/60 p-4 rounded-2xl border border-brand-100">
                                <h4 class="product-card__feature-title font-bold text-gray-900 text-sm mb-1 flex items-center gap-2">
                                    <span class="text-rose-700 bg-rose-100 text-[10px] font-extrabold px-2 py-0.5 rounded">AI機能</span> 自己PR・経歴最適化
                                </h4>
                                <p class="product-card__feature-desc text-xs text-gray-600 leading-relaxed">応募先求人の要件に合わせた自己PR・職歴アピール文のAIアドバイス</p>
                            </div>
                        </div>
                    </div>

                    <div class="product-card__action">
                        <a href="https://risemaru.oscarchair.jp" target="_blank" rel="noopener noreferrer" 
                           class="product-card__button inline-flex items-center justify-center px-7 py-3.5 rounded-xl bg-rose-600 hover:bg-rose-700 text-white font-bold text-sm shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-0.5">
                            Webサイトを開く
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                        </a>
                    </div>
                </div>

                <!-- Media Preview Frame (Real Screenshot Image) -->
                <div class="product-card__media lg:w-1/2 flex items-center justify-center">
                    <div class="product-card__media-wrapper relative overflow-hidden rounded-2xl shadow-lg border border-gray-200 group-hover:scale-[1.02] transition-transform duration-500 w-full bg-gray-100">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/risemaru-preview.png" alt="RISEマル (risemaru) ランディングページ画像" class="product-card__image w-full h-auto block object-cover">
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- Bottom Contact CTA Section (Matching Company & Services) -->
    <section class="product-page__cta relative overflow-hidden bg-gradient-to-br from-brand-950 via-purple-950 to-slate-900 text-white py-20 mt-24">
        <div class="product-page__cta-container container mx-auto px-6 text-center relative z-10">
            <h2 class="product-page__cta-title text-3xl md:text-4xl font-extrabold mb-4 text-white">
                自社SaaSの導入・開発カスタマイズのご相談
            </h2>
            <p class="product-page__cta-desc max-w-2xl mx-auto mb-8 text-base md:text-lg text-brand-100">
                各プロダクトのAPI連携、企業向けカスタマイズ開発、データ基盤の構築支援までお気軽にお問い合わせください。
            </p>
            <a href="<?php echo esc_url(home_url('/contact')); ?>" 
               class="product-page__cta-button inline-flex items-center justify-center px-8 py-4 rounded-xl font-extrabold text-base bg-white text-brand-950 shadow-2xl hover:bg-brand-50 transition-all duration-300 transform hover:-translate-y-1">
                お問い合わせはこちら
                <svg class="w-5 h-5 ml-2 text-brand-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7-7 7M5 12h14"></path></svg>
            </a>
        </div>
    </section>
</main>

<?php
get_footer();
