<?php
/**
 * Template Name: プロダクト
 *
 * @package oscss-wp-maruplus3
 */

get_header();
?>

<main id="primary" class="site-main product-page font-sans bg-gray-50/70">
    <!-- Hero Section: Pastel Color Palette Aligned with Company & Services Pages -->
    <section style="background: linear-gradient(135deg, #F8F0FC 0%, #E9D5FF 60%, #F3E8FF 100%) !important; color: #1F1122 !important;" class="product-page__hero relative overflow-hidden pt-20 pb-16 sm:pt-24 sm:pb-20 md:pt-32 md:pb-24">
        <!-- Floating Animated Orbs -->
        <div class="product-page__hero-bg absolute top-0 left-0 w-full h-full overflow-hidden z-0 pointer-events-none">
            <div class="product-page__hero-orb product-page__hero-orb--1 absolute w-72 h-72 md:w-96 md:h-96 rounded-full mix-blend-multiply filter blur-3xl opacity-40 animate-float" style="top: -15%; left: -10%; background-color: #D8BFD8;"></div>
            <div class="product-page__hero-orb product-page__hero-orb--2 absolute w-72 h-72 md:w-96 md:h-96 rounded-full mix-blend-multiply filter blur-3xl opacity-35 animate-pulse-slow" style="top: 10%; right: -10%; background-color: #B2AC88;"></div>
        </div>

        <div style="padding: 2rem !important;" class="product-page__hero-container container mx-auto p-8 px-4 sm:px-8 relative z-10 text-center">
            <!-- Pastel Badge -->
            <div style="background: rgba(126, 34, 206, 0.08) !important; border: 1px solid rgba(126, 34, 206, 0.2) !important;" class="inline-flex items-center space-x-2 px-4 py-1.5 rounded-full mb-6 shadow-sm">
                <span style="color: #6B21A8 !important;" class="text-xs sm:text-sm font-black uppercase tracking-widest">Flexible 3-Plus SaaS Suite</span>
                <span style="background-color: #7E22CE !important; color: #FFFFFF !important;" class="text-xs font-black px-2.5 py-0.5 rounded-full">＋ × 3</span>
            </div>

            <!-- Title: High Contrast Deep Navy Purple Text on Pastel Background -->
            <h1 style="color: #1F1122 !important;" class="product-page__hero-title text-2xl sm:text-4xl md:text-5xl lg:text-6xl font-black mb-6 tracking-tight leading-tight drop-shadow-sm">
                マルプラスの自社プロダクト：<br class="hidden sm:inline" />
                <span style="color: #6B21A8 !important;" class="font-black">
                    技術とビジネスを加速するSaaS群
                </span>
            </h1>

            <!-- Description: Guaranteed Readable Dark Text -->
            <p style="color: #3B2040 !important; opacity: 1 !important;" class="product-page__hero-description max-w-3xl mx-auto text-sm sm:text-lg md:text-xl font-bold leading-relaxed text-center">
                生成AI時代のSEO/GEO最適化、東証株価データ分析、ソロプレナー向けCRMまで。<br class="hidden sm:inline" />
                実務から生まれた3つの自社プロダクト群が、貴社と個人の成長を強力にサポートします。
            </p>
        </div>
    </section>

    <!-- Wave Divider: Ultra-Smooth Cubic Bezier Wave (Zero Angular Artifacts) -->
    <div style="background: #F3E8FF !important;" class="product-page__wave-wrapper relative w-full overflow-hidden leading-none">
        <svg class="product-page__wave-svg relative block w-full h-12 sm:h-16 md:h-24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M0,45 C200,95 400,10 600,55 C800,100 1000,20 1200,50 L1200,120 L0,120 Z" fill="#F9FAFB"></path>
        </svg>
    </div>

    <!-- Main Product List Container: Clean & Completely Unobstructed -->
    <div class="product-page__main-container container mx-auto px-4 sm:px-6 relative z-20 pt-8 sm:pt-12 pb-12 sm:pb-20 space-y-16 sm:space-y-24 md:space-y-36">

        <!-- Product 1: GEOマル (geomaru) -->
        <section id="geomaru" class="product-card product-card--geomaru bg-white rounded-2xl sm:rounded-3xl shadow-xl p-6 sm:p-8 md:p-12 border-t-8 border-purple-600 border border-gray-100 hover:shadow-2xl transition-all duration-500">
            <div class="product-card__inner flex flex-col lg:flex-row items-center gap-8 lg:gap-16 group">
                <!-- Content Area -->
                <div class="product-card__content w-full lg:w-1/2 flex flex-col justify-between space-y-6 sm:space-y-8">
                    <div class="product-card__header-group">
                        <div class="product-card__badge-row flex items-center justify-between gap-2 mb-3">
                            <div class="flex flex-wrap items-center gap-2">
                                <span class="product-card__badge bg-purple-100 text-purple-800 font-black text-[11px] sm:text-xs px-3 py-1 rounded-full uppercase tracking-wider shadow-sm">
                                    GEO & SEO SaaS
                                </span>
                                <span class="product-card__domain text-[11px] sm:text-xs text-gray-400 font-bold tracking-wide">geomaru.oscarchair.jp</span>
                            </div>
                            <span class="text-2xl sm:text-4xl font-black text-purple-200">01</span>
                        </div>

                        <h2 class="product-card__title text-2xl sm:text-4xl lg:text-5xl font-black text-gray-900 mb-3 flex items-center gap-2.5 sm:gap-3.5">
                            <span class="product-card__icon w-9 h-9 sm:w-12 sm:h-12 rounded-xl sm:rounded-2xl bg-purple-600 text-white inline-flex items-center justify-center text-lg sm:text-2xl shadow-lg shadow-purple-300 font-extrabold flex-shrink-0">G</span>
                            GEOマル <span class="product-card__title-sub text-purple-600 font-bold text-xl sm:text-2xl md:text-3xl">(geomaru)</span>
                        </h2>

                        <p class="product-card__subtitle text-base sm:text-xl md:text-2xl font-extrabold text-purple-800 mb-4 border-l-4 border-purple-500 pl-3 py-0.5">
                            生成AI検索・SEO統合診断SaaS
                        </p>

                        <p class="product-card__description text-gray-700 leading-relaxed mb-6 text-sm sm:text-base md:text-lg font-medium">
                            ChatGPTやClaudeなどのAI検索エンジン（GEO: Generative Engine Optimization）での可視性を高め、Webサイトの技術的SEOを自動監査・可視化する統合診断ツールセットです。
                        </p>

                        <!-- Features Grid -->
                        <div class="product-card__features grid grid-cols-1 sm:grid-cols-2 gap-3.5 sm:gap-4 mb-6 sm:mb-8">
                            <div class="product-card__feature-item bg-purple-50/70 p-3.5 sm:p-4 rounded-xl sm:rounded-2xl border border-purple-100/80 shadow-sm">
                                <h4 class="product-card__feature-title font-extrabold text-gray-900 text-xs sm:text-sm md:text-base mb-1 flex items-center gap-2">
                                    <span class="text-purple-600">🤖</span> AIクローラーアクセス判定
                                </h4>
                                <p class="product-card__feature-desc text-[11px] sm:text-xs md:text-sm text-gray-600 leading-relaxed">robots.txtやmeta属性を自動パースしGPTBot等のブロック状態を検出</p>
                            </div>
                            <div class="product-card__feature-item bg-purple-50/70 p-3.5 sm:p-4 rounded-xl sm:rounded-2xl border border-purple-100/80 shadow-sm">
                                <h4 class="product-card__feature-title font-extrabold text-gray-900 text-xs sm:text-sm md:text-base mb-1 flex items-center gap-2">
                                    <span class="text-purple-600">🔗</span> Canonicalタグ監査
                                </h4>
                                <p class="product-card__feature-desc text-[11px] sm:text-xs md:text-sm text-gray-600 leading-relaxed">SEO評価を損ねる欠落・重複・誤設定のcanonicalタグを即座にチェック</p>
                            </div>
                            <div class="product-card__feature-item bg-purple-50/70 p-3.5 sm:p-4 rounded-xl sm:rounded-2xl border border-purple-100/80 shadow-sm">
                                <h4 class="product-card__feature-title font-extrabold text-gray-900 text-xs sm:text-sm md:text-base mb-1 flex items-center gap-2">
                                    <span class="text-purple-600">📝</span> メタタグ & 文字数判定
                                </h4>
                                <p class="product-card__feature-desc text-[11px] sm:text-xs md:text-sm text-gray-600 leading-relaxed">日本語の全角文字数基準（タイトル/説明）やOGP・見出し階層を検証</p>
                            </div>
                            <div class="product-card__feature-item bg-purple-50/70 p-3.5 sm:p-4 rounded-xl sm:rounded-2xl border border-purple-100/80 shadow-sm">
                                <h4 class="product-card__feature-title font-extrabold text-gray-900 text-xs sm:text-sm md:text-base mb-1 flex items-center gap-2">
                                    <span class="text-purple-600">📊</span> 構造化データ & XMLマップ
                                </h4>
                                <p class="product-card__feature-desc text-[11px] sm:text-xs md:text-sm text-gray-600 leading-relaxed">JSON-LD構文チェック、Schema.org推奨キー判定、サイトマップ重複検出</p>
                            </div>
                        </div>
                    </div>

                    <!-- Enhanced Responsive CTA Button -->
                    <div class="product-card__action pt-2">
                        <a href="https://geomaru.oscarchair.jp" target="_blank" rel="noopener noreferrer" 
                           style="background: linear-gradient(135deg, #7E22CE 0%, #6B21A8 100%) !important; color: #FFFFFF !important;"
                           class="product-card__button w-full sm:w-auto inline-flex items-center justify-center px-8 sm:px-10 py-4 sm:py-5 rounded-2xl font-black text-base sm:text-lg md:text-xl shadow-xl hover:shadow-purple-700/30 transition-all duration-300 transform hover:-translate-y-1 group/btn">
                            <span>GEOマル Webサイトを開く</span>
                            <svg class="w-5 h-5 sm:w-6 sm:h-6 ml-3 transform group-hover/btn:translate-x-1.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7-7 7M5 12h14"></path></svg>
                        </a>
                    </div>
                </div>

                <!-- Media Preview Frame -->
                <div class="product-card__media w-full lg:w-1/2 flex items-center justify-center">
                    <div class="product-card__media-wrapper relative overflow-hidden rounded-xl sm:rounded-2xl shadow-lg border-2 border-purple-100 group-hover:scale-[1.02] transition-transform duration-500 w-full max-h-[280px] sm:max-h-[360px] bg-white flex items-center justify-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/geomaru.svg" alt="GEOマル (geomaru) 高精度コンセプトUI" class="product-card__image w-full h-auto block object-contain">
                    </div>
                </div>
            </div>
        </section>

        <!-- Product 2: STOCKSマル (stocksmaru) -->
        <section id="stocksmaru" class="product-card product-card--stocksmaru bg-white rounded-2xl sm:rounded-3xl shadow-xl p-6 sm:p-8 md:p-12 border-t-8 border-indigo-600 border border-gray-100 hover:shadow-2xl transition-all duration-500">
            <div class="product-card__inner flex flex-col lg:flex-row items-center gap-8 lg:gap-16 group">
                <!-- Content Area -->
                <div class="product-card__content w-full lg:w-1/2 flex flex-col justify-between space-y-6 sm:space-y-8">
                    <div class="product-card__header-group">
                        <div class="product-card__badge-row flex items-center justify-between gap-2 mb-3">
                            <div class="flex flex-wrap items-center gap-2">
                                <span class="product-card__badge bg-indigo-100 text-indigo-800 font-black text-[11px] sm:text-xs px-3 py-1 rounded-full uppercase tracking-wider shadow-sm">
                                    J-QUANTS API INTEGRATED
                                </span>
                                <span class="product-card__domain text-[11px] sm:text-xs text-gray-400 font-bold tracking-wide">stocksmaru.oscarchair.jp</span>
                            </div>
                            <span class="text-2xl sm:text-4xl font-black text-indigo-200">02</span>
                        </div>

                        <h2 class="product-card__title text-2xl sm:text-4xl lg:text-5xl font-black text-gray-900 mb-3 flex items-center gap-2.5 sm:gap-3.5">
                            <span class="product-card__icon w-9 h-9 sm:w-12 sm:h-12 rounded-xl sm:rounded-2xl bg-indigo-600 text-white inline-flex items-center justify-center text-lg sm:text-2xl shadow-lg shadow-indigo-300 font-extrabold flex-shrink-0">S</span>
                            STOCKSマル <span class="product-card__title-sub text-indigo-600 font-bold text-xl sm:text-2xl md:text-3xl">(stocksmaru)</span>
                        </h2>

                        <p class="product-card__subtitle text-base sm:text-xl md:text-2xl font-extrabold text-emerald-700 mb-4 border-l-4 border-emerald-500 pl-3 py-0.5">
                            東証株価・日本株投資分析SaaS
                        </p>

                        <p class="product-card__description text-gray-700 leading-relaxed mb-6 text-sm sm:text-base md:text-lg font-medium">
                            JPX公式の J-Quants API V2 を活用した次世代株投資分析SaaS。プロレベルの財務データ・株価四本値ランキングをブラウザ上でシームレスに可視化・分析します。
                        </p>

                        <!-- Features Grid -->
                        <div class="product-card__features grid grid-cols-1 sm:grid-cols-2 gap-3.5 sm:gap-4 mb-6 sm:mb-8">
                            <div class="product-card__feature-item bg-indigo-50/70 p-3.5 sm:p-4 rounded-xl sm:rounded-2xl border border-indigo-100/80 shadow-sm">
                                <h4 class="product-card__feature-title font-extrabold text-gray-900 text-xs sm:text-sm md:text-base mb-1 flex items-center gap-2">
                                    <span class="text-emerald-600">📈</span> リアルタイム市場ランキング
                                </h4>
                                <p class="product-card__feature-desc text-[11px] sm:text-xs md:text-sm text-gray-600 leading-relaxed">売買代金・売買高・値上がり率ランキングをリアルタイムで集計表示</p>
                            </div>
                            <div class="product-card__feature-item bg-indigo-50/70 p-3.5 sm:p-4 rounded-xl sm:rounded-2xl border border-indigo-100/80 shadow-sm">
                                <h4 class="product-card__feature-title font-extrabold text-gray-900 text-xs sm:text-sm md:text-base mb-1 flex items-center gap-2">
                                    <span class="text-indigo-600">🔍</span> 株価四本値スクリーニング
                                </h4>
                                <p class="product-card__feature-desc text-[11px] sm:text-xs md:text-sm text-gray-600 leading-relaxed">銘柄コード別のデイリーOHLC分析・前日比率・四本値履歴の詳細追跡</p>
                            </div>
                            <div class="product-card__feature-item bg-indigo-50/70 p-3.5 sm:p-4 rounded-xl sm:rounded-2xl border border-indigo-100/80 shadow-sm">
                                <h4 class="product-card__feature-title font-extrabold text-gray-900 text-xs sm:text-sm md:text-base mb-1 flex items-center gap-2">
                                    <span class="text-indigo-600">🏢</span> 財務諸表 / 決算自動監査
                                </h4>
                                <p class="product-card__feature-desc text-[11px] sm:text-xs md:text-sm text-gray-600 leading-relaxed">売上高・営業利益・EPSの進捗と変化度合いを自動計算・判定</p>
                            </div>
                            <div class="product-card__feature-item bg-indigo-50/70 p-3.5 sm:p-4 rounded-xl sm:rounded-2xl border border-indigo-100/80 shadow-sm">
                                <h4 class="product-card__feature-title font-extrabold text-gray-900 text-xs sm:text-sm md:text-base mb-1 flex items-center gap-2">
                                    <span class="text-emerald-600">🤖</span> AIポートフォリオ監査
                                </h4>
                                <p class="product-card__feature-desc text-[11px] sm:text-xs md:text-sm text-gray-600 leading-relaxed">保有銘柄のボラティリティ評価、セクター分散度および推奨リバランス提案</p>
                            </div>
                        </div>
                    </div>

                    <!-- Enhanced Responsive CTA Button -->
                    <div class="product-card__action pt-2">
                        <a href="https://stocksmaru.oscarchair.jp" target="_blank" rel="noopener noreferrer" 
                           style="background: linear-gradient(135deg, #4F46E5 0%, #3730A3 100%) !important; color: #FFFFFF !important;"
                           class="product-card__button w-full sm:w-auto inline-flex items-center justify-center px-8 sm:px-10 py-4 sm:py-5 rounded-2xl font-black text-base sm:text-lg md:text-xl shadow-xl hover:shadow-indigo-700/30 transition-all duration-300 transform hover:-translate-y-1 group/btn">
                            <span>STOCKSマル Webサイトを開く</span>
                            <svg class="w-5 h-5 sm:w-6 sm:h-6 ml-3 transform group-hover/btn:translate-x-1.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7-7 7M5 12h14"></path></svg>
                        </a>
                    </div>
                </div>

                <!-- Media Preview Frame -->
                <div class="product-card__media w-full lg:w-1/2 flex items-center justify-center">
                    <div class="product-card__media-wrapper relative overflow-hidden rounded-xl sm:rounded-2xl shadow-lg border-2 border-indigo-100 group-hover:scale-[1.02] transition-transform duration-500 w-full max-h-[280px] sm:max-h-[360px] bg-slate-950 flex items-center justify-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/stocksmaru.svg" alt="STOCKSマル (stocksmaru) 高精度コンセプトUI" class="product-card__image w-full h-auto block object-contain">
                    </div>
                </div>
            </div>
        </section>

        <!-- Product 3: RISEマル (risemaru) -->
        <section id="risemaru" class="product-card product-card--risemaru bg-white rounded-2xl sm:rounded-3xl shadow-xl p-6 sm:p-8 md:p-12 border-t-8 border-rose-600 border border-gray-100 hover:shadow-2xl transition-all duration-500">
            <div class="product-card__inner flex flex-col lg:flex-row items-center gap-8 lg:gap-16 group">
                <!-- Content Area -->
                <div class="product-card__content w-full lg:w-1/2 flex flex-col justify-between space-y-6 sm:space-y-8">
                    <div class="product-card__header-group">
                        <div class="product-card__badge-row flex items-center justify-between gap-2 mb-3">
                            <div class="flex flex-wrap items-center gap-2">
                                <span class="product-card__badge bg-rose-100 text-rose-800 font-black text-[11px] sm:text-xs px-3 py-1 rounded-full uppercase tracking-wider shadow-sm">
                                    Solo-preneur Career & CRM
                                </span>
                                <span class="product-card__domain text-[11px] sm:text-xs text-gray-400 font-bold tracking-wide">risemaru.oscarchair.jp</span>
                            </div>
                            <span class="text-2xl sm:text-4xl font-black text-rose-200">03</span>
                        </div>

                        <h2 class="product-card__title text-2xl sm:text-4xl lg:text-5xl font-black text-gray-900 mb-3 flex items-center gap-2.5 sm:gap-3.5">
                            <span class="product-card__icon w-9 h-9 sm:w-12 sm:h-12 rounded-xl sm:rounded-2xl bg-rose-600 text-white inline-flex items-center justify-center text-lg sm:text-2xl shadow-lg shadow-rose-300 font-extrabold flex-shrink-0">R</span>
                            RISEマル <span class="product-card__title-sub text-rose-600 font-bold text-xl sm:text-2xl md:text-3xl">(risemaru)</span>
                        </h2>

                        <p class="product-card__subtitle text-base sm:text-xl md:text-2xl font-extrabold text-rose-700 mb-4 border-l-4 border-rose-500 pl-3 py-0.5">
                            個人・ソロプレナー向けキャリア＆SaaS CRM
                        </p>

                        <p class="product-card__description text-gray-700 leading-relaxed mb-6 text-sm sm:text-base md:text-lg font-medium">
                            フリーランス・副業ワーカー・個人事業主・AI一人企業の「成長（Rise）」を丸ごと（maru）サポート。求人管理から履歴書生成、受注後の顧客管理までを一気通貫でカバーします。
                        </p>

                        <!-- Features Grid -->
                        <div class="product-card__features grid grid-cols-1 sm:grid-cols-2 gap-3.5 sm:gap-4 mb-6 sm:mb-8">
                            <div class="product-card__feature-item bg-rose-50/70 p-3.5 sm:p-4 rounded-xl sm:rounded-2xl border border-rose-100/80 shadow-sm">
                                <h4 class="product-card__feature-title font-extrabold text-gray-900 text-xs sm:text-sm md:text-base mb-1 flex items-center gap-2">
                                    <span class="text-emerald-700 bg-emerald-100 text-[10px] sm:text-xs font-black px-1.5 sm:px-2 py-0.5 rounded">無料</span> 履歴書・職務経歴書 Engine
                                </h4>
                                <p class="product-card__feature-desc text-[11px] sm:text-xs md:text-sm text-gray-600 leading-relaxed">入力データからJIS規格等のきれいなPDF/Markdownを非AIで無料生成</p>
                            </div>
                            <div class="product-card__feature-item bg-rose-50/70 p-3.5 sm:p-4 rounded-xl sm:rounded-2xl border border-rose-100/80 shadow-sm">
                                <h4 class="product-card__feature-title font-extrabold text-gray-900 text-xs sm:text-sm md:text-base mb-1 flex items-center gap-2">
                                    <span class="text-emerald-700 bg-emerald-100 text-[10px] sm:text-xs font-black px-1.5 sm:px-2 py-0.5 rounded">無料</span> 応募ステータス & 顧客化
                                </h4>
                                <p class="product-card__feature-desc text-[11px] sm:text-xs md:text-sm text-gray-600 leading-relaxed">求人応募管理から成約時の「顧客・プロジェクト自動昇格」フロー</p>
                            </div>
                            <div class="product-card__feature-item bg-rose-50/70 p-3.5 sm:p-4 rounded-xl sm:rounded-2xl border border-rose-100/80 shadow-sm">
                                <h4 class="product-card__feature-title font-extrabold text-gray-900 text-xs sm:text-sm md:text-base mb-1 flex items-center gap-2">
                                    <span class="text-rose-800 bg-rose-200 text-[10px] sm:text-xs font-black px-1.5 sm:px-2 py-0.5 rounded">AI機能</span> 求人AIマッチ度診断
                                </h4>
                                <p class="product-card__feature-desc text-[11px] sm:text-xs md:text-sm text-gray-600 leading-relaxed">貼った求人URLと自身の経歴をAIが分析し適合スコア(%)と助言を出力</p>
                            </div>
                            <div class="product-card__feature-item bg-rose-50/70 p-3.5 sm:p-4 rounded-xl sm:rounded-2xl border border-rose-100/80 shadow-sm">
                                <h4 class="product-card__feature-title font-extrabold text-gray-900 text-xs sm:text-sm md:text-base mb-1 flex items-center gap-2">
                                    <span class="text-rose-800 bg-rose-200 text-[10px] sm:text-xs font-black px-1.5 sm:px-2 py-0.5 rounded">AI機能</span> 自己PR・経歴最適化
                                </h4>
                                <p class="product-card__feature-desc text-[11px] sm:text-xs md:text-sm text-gray-600 leading-relaxed">応募先求人の要件に合わせた自己PR・職歴アピール文のAIアドバイス</p>
                            </div>
                        </div>
                    </div>

                    <!-- Enhanced Responsive CTA Button -->
                    <div class="product-card__action pt-2">
                        <a href="https://risemaru.oscarchair.jp" target="_blank" rel="noopener noreferrer" 
                           style="background: linear-gradient(135deg, #E11D48 0%, #BE123C 100%) !important; color: #FFFFFF !important;"
                           class="product-card__button w-full sm:w-auto inline-flex items-center justify-center px-8 sm:px-10 py-4 sm:py-5 rounded-2xl font-black text-base sm:text-lg md:text-xl shadow-xl hover:shadow-rose-700/30 transition-all duration-300 transform hover:-translate-y-1 group/btn">
                            <span>RISEマル Webサイトを開く</span>
                            <svg class="w-5 h-5 sm:w-6 sm:h-6 ml-3 transform group-hover/btn:translate-x-1.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7-7 7M5 12h14"></path></svg>
                        </a>
                    </div>
                </div>

                <!-- Media Preview Frame -->
                <div class="product-card__media w-full lg:w-1/2 flex items-center justify-center">
                    <div class="product-card__media-wrapper relative overflow-hidden rounded-xl sm:rounded-2xl shadow-lg border-2 border-rose-100 group-hover:scale-[1.02] transition-transform duration-500 w-full max-h-[280px] sm:max-h-[360px] bg-white flex items-center justify-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/risemaru.svg" alt="RISEマル (risemaru) 高精度コンセプトUI" class="product-card__image w-full h-auto block object-contain">
                    </div>
                </div>
            </div>
        </section>

    </div>

    <style>
        /* Explicit Responsive Card Spacing Guarantee */
        .product-card + .product-card {
            margin-top: 3.5rem !important;
        }
        @media (min-width: 640px) {
            .product-card + .product-card {
                margin-top: 5rem !important;
            }
        }
        @media (min-width: 768px) {
            .product-card + .product-card {
                margin-top: 7rem !important;
            }
        }
        @media (min-width: 1024px) {
            .product-card + .product-card {
                margin-top: 9rem !important;
            }
        }
    </style>

    <!-- Bottom Contact CTA Section (Pastel Aligned Theme) -->
    <section style="background: linear-gradient(135deg, #FAF5FC 0%, #F3E8FF 100%) !important; color: #1F1122 !important;" class="product-page__cta relative overflow-hidden py-24 sm:py-32 md:py-36 mt-28 sm:mt-40 md:mt-48 border-t border-purple-200">
        <div class="product-page__cta-container container max-w-4xl mx-auto px-6 sm:px-8 text-center relative z-10">
            <h2 style="color: #1F1122 !important;" class="product-page__cta-title text-2xl sm:text-4xl lg:text-5xl font-black mb-6 sm:mb-8 tracking-tight leading-tight">
                自社SaaSの導入・開発カスタマイズのご相談
            </h2>
            <p style="color: #4B2854 !important;" class="product-page__cta-desc max-w-2xl mx-auto mb-10 sm:mb-12 text-base sm:text-lg md:text-xl font-bold leading-relaxed">
                各プロダクトのAPI連携、企業向けカスタマイズ開発、データ基盤の構築支援までお気軽にお問い合わせください。
            </p>
            <div class="product-page__cta-action">
                <a href="<?php echo esc_url(home_url('/contact')); ?>" 
                   style="background: linear-gradient(135deg, #7E22CE 0%, #6B21A8 100%) !important; color: #FFFFFF !important;"
                   class="product-page__cta-button w-full sm:w-auto inline-flex items-center justify-center px-10 sm:px-12 py-4 sm:py-5 rounded-2xl font-black text-base sm:text-lg md:text-xl shadow-2xl hover:shadow-purple-700/40 transition-all duration-300 transform hover:-translate-y-1.5 group">
                    <span>お問い合わせはこちら</span>
                    <svg class="w-5 h-5 sm:w-6 sm:h-6 ml-3 text-white transform group-hover:translate-x-1.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7-7 7M5 12h14"></path></svg>
                </a>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
