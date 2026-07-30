<?php
/**
 * Template Name: プロダクト
 *
 * @package oscss-wp-maruplus3
 */

get_header();
?>

<main id="primary" class="site-main font-sans">
    <!-- Hero Section -->
    <section style="background: linear-gradient(135deg, #F8F5FA 0%, #EFE5F0 100%) !important;" class="pt-28 pb-20 relative overflow-hidden">
        <div class="container mx-auto px-6 relative z-10 text-center">
            <span style="background-color: #3D2D3F !important; color: #FFFFFF !important;" class="inline-block py-1.5 px-4 rounded-full text-xs font-bold uppercase tracking-widest mb-4 shadow-sm">
                SaaS & Product Suite
            </span>
            <h1 style="color: #1F1122 !important;" class="text-3xl md:text-5xl font-black mb-5 tracking-tight">
                マルプラスの自社プロダクト：<br class="md:hidden" />
                <span style="color: #6B3E70 !important;" class="font-black">
                    技術とビジネスを加速するSaaS群
                </span>
            </h1>
            <p style="color: #4A354E !important;" class="max-w-2xl mx-auto text-base md:text-lg font-bold leading-relaxed">
                生成AI時代のSEO/GEO最適化、東証株価データ分析、ソロプレナー向けCRMまで。<br />
                実務から生まれたプロダクト群が、貴社と個人の成長を強力にサポートします。
            </p>
        </div>
    </section>

    <!-- Product List Section -->
    <section style="background-color: #FFFFFF !important;" class="py-16 md:py-24">
        <div class="container mx-auto px-6 space-y-20">

            <!-- Product 1: geomaru -->
            <div id="geomaru" style="background-color: #FAF5FC !important; border: 2px solid #E9D5FF !important;" class="flex flex-col lg:flex-row items-stretch gap-10 rounded-3xl p-6 md:p-10 shadow-lg">
                <div class="lg:w-1/2 flex flex-col justify-between space-y-6">
                    <div>
                        <div class="flex items-center gap-3 mb-3">
                            <span style="background-color: #7E22CE !important; color: #FFFFFF !important;" class="py-1 px-3 rounded-full font-extrabold text-xs tracking-wider uppercase shadow-sm">
                                GEO & SEO SaaS
                            </span>
                            <span style="color: #6B7280 !important;" class="text-xs font-bold">geomaru.oscarchair.jp</span>
                        </div>
                        <h2 style="color: #111827 !important;" class="text-2xl md:text-3xl font-black mb-2 flex items-center gap-3">
                            <span style="background-color: #7E22CE !important; color: #FFFFFF !important;" class="w-9 h-9 rounded-xl flex items-center justify-center text-lg font-bold shadow">G</span>
                            GEOマル <span style="color: #7E22CE !important;" class="font-bold text-xl">(geomaru)</span>
                        </h2>
                        <p style="color: #6B21A8 !important;" class="text-lg font-extrabold mb-3">生成AI検索・SEO統合診断SaaS</p>
                        <p style="color: #374151 !important;" class="leading-relaxed mb-6 text-sm md:text-base font-medium">
                            ChatGPTやClaudeなどのAI検索エンジン（GEO: Generative Engine Optimization）での可視性を高め、Webサイトの技術的SEOを自動監査・可視化する統合診断ツールセットです。
                        </p>

                        <!-- Features Grid with Explicit High Contrast Style -->
                        <div class="grid sm:grid-cols-2 gap-3.5 mb-6">
                            <div style="background-color: #FFFFFF !important; border: 1px solid #D8B4FE !important;" class="p-3.5 rounded-xl shadow-sm">
                                <h4 style="color: #111827 !important;" class="font-extrabold text-xs md:text-sm mb-1 flex items-center gap-1.5">
                                    <span>🤖</span> AIクローラーアクセス判定
                                </h4>
                                <p style="color: #4B5563 !important;" class="text-xs font-medium leading-normal">robots.txtやmeta属性を自動パースしGPTBot等のブロック状態を検出</p>
                            </div>
                            <div style="background-color: #FFFFFF !important; border: 1px solid #D8B4FE !important;" class="p-3.5 rounded-xl shadow-sm">
                                <h4 style="color: #111827 !important;" class="font-extrabold text-xs md:text-sm mb-1 flex items-center gap-1.5">
                                    <span>🔗</span> Canonicalタグ監査
                                </h4>
                                <p style="color: #4B5563 !important;" class="text-xs font-medium leading-normal">SEO評価を損ねる欠落・重複・誤設定のcanonicalタグを即座にチェック</p>
                            </div>
                            <div style="background-color: #FFFFFF !important; border: 1px solid #D8B4FE !important;" class="p-3.5 rounded-xl shadow-sm">
                                <h4 style="color: #111827 !important;" class="font-extrabold text-xs md:text-sm mb-1 flex items-center gap-1.5">
                                    <span>📝</span> メタタグ & 文字数判定
                                </h4>
                                <p style="color: #4B5563 !important;" class="text-xs font-medium leading-normal">日本語の全角文字数基準（タイトル/説明）やOGP・見出し階層を検証</p>
                            </div>
                            <div style="background-color: #FFFFFF !important; border: 1px solid #D8B4FE !important;" class="p-3.5 rounded-xl shadow-sm">
                                <h4 style="color: #111827 !important;" class="font-extrabold text-xs md:text-sm mb-1 flex items-center gap-1.5">
                                    <span>📊</span> 構造化データ & XMLマップ
                                </h4>
                                <p style="color: #4B5563 !important;" class="text-xs font-medium leading-normal">JSON-LD構文チェック、Schema.org推奨キー判定、サイトマップ重複検出</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <a href="https://geomaru.oscarchair.jp" target="_blank" rel="noopener noreferrer" 
                           style="background-color: #7E22CE !important; color: #FFFFFF !important;"
                           class="inline-flex items-center justify-center px-6 py-3 rounded-xl font-bold text-sm shadow-md hover:opacity-90 transition-all">
                            Webサイトを開く
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                        </a>
                    </div>
                </div>

                <!-- Product Image Frame -->
                <div class="lg:w-1/2 flex items-center justify-center">
                    <div style="border: 2px solid #E9D5FF !important;" class="relative overflow-hidden rounded-2xl shadow-md w-full">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/geomaru.svg" alt="geomaru (GEOマル) プレビュー画像" class="w-full h-auto block object-cover">
                    </div>
                </div>
            </div>

            <!-- Product 2: stocksmaru -->
            <div id="stocksmaru" style="background-color: #0F172A !important; border: 2px solid #334155 !important; color: #FFFFFF !important;" class="flex flex-col lg:flex-row items-stretch gap-10 rounded-3xl p-6 md:p-10 shadow-xl">
                <div class="lg:w-1/2 flex flex-col justify-between space-y-6">
                    <div>
                        <div class="flex items-center gap-3 mb-3">
                            <span style="background-color: #6366F1 !important; color: #FFFFFF !important;" class="py-1 px-3 rounded-full font-extrabold text-xs tracking-wider uppercase shadow-sm">
                                J-QUANTS API INTEGRATED
                            </span>
                            <span style="color: #94A3B8 !important;" class="text-xs font-bold">stocksmaru.oscarchair.jp</span>
                        </div>
                        <h2 style="color: #FFFFFF !important;" class="text-2xl md:text-3xl font-black mb-2 flex items-center gap-3">
                            <span style="background-color: #4F46E5 !important; color: #FFFFFF !important;" class="w-9 h-9 rounded-xl flex items-center justify-center text-lg font-bold shadow">S</span>
                            STOCKSマル <span style="color: #818CF8 !important;" class="font-bold text-xl">(stocksmaru)</span>
                        </h2>
                        <p style="color: #34D399 !important;" class="text-lg font-extrabold mb-3">東証株価・日本株投資分析SaaS</p>
                        <p style="color: #CBD5E1 !important;" class="leading-relaxed mb-6 text-sm md:text-base font-medium">
                            JPX公式の J-Quants API V2 を活用した次世代株投資分析SaaS。プロレベルの財務データ・株価四本値ランキングをブラウザ上でシームレスに可視化・分析します。
                        </p>

                        <!-- Features Grid with Explicit High Contrast Style -->
                        <div class="grid sm:grid-cols-2 gap-3.5 mb-6">
                            <div style="background-color: #1E293B !important; border: 1px solid #475569 !important;" class="p-3.5 rounded-xl shadow-sm">
                                <h4 style="color: #FFFFFF !important;" class="font-extrabold text-xs md:text-sm mb-1 flex items-center gap-1.5">
                                    <span>📈</span> リアルタイム市場ランキング
                                </h4>
                                <p style="color: #94A3B8 !important;" class="text-xs font-medium leading-normal">売買代金・売買高・値上がり率ランキングをリアルタイムで集計表示</p>
                            </div>
                            <div style="background-color: #1E293B !important; border: 1px solid #475569 !important;" class="p-3.5 rounded-xl shadow-sm">
                                <h4 style="color: #FFFFFF !important;" class="font-extrabold text-xs md:text-sm mb-1 flex items-center gap-1.5">
                                    <span>🔍</span> 株価四本値スクリーニング
                                </h4>
                                <p style="color: #94A3B8 !important;" class="text-xs font-medium leading-normal">銘柄コード別のデイリーOHLC分析・前日比率・四本値履歴の詳細追跡</p>
                            </div>
                            <div style="background-color: #1E293B !important; border: 1px solid #475569 !important;" class="p-3.5 rounded-xl shadow-sm">
                                <h4 style="color: #FFFFFF !important;" class="font-extrabold text-xs md:text-sm mb-1 flex items-center gap-1.5">
                                    <span>🏢</span> 財務諸表 / 決算自動監査
                                </h4>
                                <p style="color: #94A3B8 !important;" class="text-xs font-medium leading-normal">売上高・営業利益・EPSの進捗と変化度合いを自動計算・判定</p>
                            </div>
                            <div style="background-color: #1E293B !important; border: 1px solid #475569 !important;" class="p-3.5 rounded-xl shadow-sm">
                                <h4 style="color: #FFFFFF !important;" class="font-extrabold text-xs md:text-sm mb-1 flex items-center gap-1.5">
                                    <span>🤖</span> AIポートフォリオ監査
                                </h4>
                                <p style="color: #94A3B8 !important;" class="text-xs font-medium leading-normal">保有銘柄のボラティリティ評価、セクター分散度および推奨リバランス提案</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <a href="https://stocksmaru.oscarchair.jp" target="_blank" rel="noopener noreferrer" 
                           style="background-color: #4F46E5 !important; color: #FFFFFF !important;"
                           class="inline-flex items-center justify-center px-6 py-3 rounded-xl font-bold text-sm shadow-md hover:opacity-90 transition-all">
                            Webサイトを開く
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                        </a>
                    </div>
                </div>

                <!-- Product Image Frame -->
                <div class="lg:w-1/2 flex items-center justify-center">
                    <div style="border: 2px solid #334155 !important;" class="relative overflow-hidden rounded-2xl shadow-md w-full">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/stocksmaru.svg" alt="stocksmaru (STOCKSマル) プレビュー画像" class="w-full h-auto block object-cover">
                    </div>
                </div>
            </div>

            <!-- Product 3: risemaru -->
            <div id="risemaru" style="background-color: #FFF5F5 !important; border: 2px solid #FECDD3 !important;" class="flex flex-col lg:flex-row items-stretch gap-10 rounded-3xl p-6 md:p-10 shadow-lg">
                <div class="lg:w-1/2 flex flex-col justify-between space-y-6">
                    <div>
                        <div class="flex items-center gap-3 mb-3">
                            <span style="background-color: #E11D48 !important; color: #FFFFFF !important;" class="py-1 px-3 rounded-full font-extrabold text-xs tracking-wider uppercase shadow-sm">
                                Solo-preneur Career & CRM
                            </span>
                            <span style="color: #6B7280 !important;" class="text-xs font-bold">risemaru.oscarchair.jp</span>
                        </div>
                        <h2 style="color: #111827 !important;" class="text-2xl md:text-3xl font-black mb-2 flex items-center gap-3">
                            <span style="background-color: #E11D48 !important; color: #FFFFFF !important;" class="w-9 h-9 rounded-xl flex items-center justify-center text-lg font-bold shadow">R</span>
                            RISEマル <span style="color: #E11D48 !important;" class="font-bold text-xl">(risemaru)</span>
                        </h2>
                        <p style="color: #BE123C !important;" class="text-lg font-extrabold mb-3">個人・ソロプレナー向けキャリア＆SaaS CRM</p>
                        <p style="color: #374151 !important;" class="leading-relaxed mb-6 text-sm md:text-base font-medium">
                            フリーランス・副業ワーカー・個人事業主・AI一人企業の「成長（Rise）」を丸ごと（maru）サポート。求人管理から履歴書生成、受注後の顧客管理までを一気通貫でカバーします。
                        </p>

                        <!-- Features Grid with Explicit High Contrast Style -->
                        <div class="grid sm:grid-cols-2 gap-3.5 mb-6">
                            <div style="background-color: #FFFFFF !important; border: 1px solid #FDA4AF !important;" class="p-3.5 rounded-xl shadow-sm">
                                <h4 style="color: #111827 !important;" class="font-extrabold text-xs md:text-sm mb-1 flex items-center gap-1.5">
                                    <span style="background-color: #D1FAE5 !important; color: #047857 !important;" class="text-[10px] font-extrabold px-1.5 py-0.5 rounded">無料</span> 履歴書・職務経歴書 Engine
                                </h4>
                                <p style="color: #4B5563 !important;" class="text-xs font-medium leading-normal">入力データからJIS規格等のきれいなPDF/Markdownを非AIで無料生成</p>
                            </div>
                            <div style="background-color: #FFFFFF !important; border: 1px solid #FDA4AF !important;" class="p-3.5 rounded-xl shadow-sm">
                                <h4 style="color: #111827 !important;" class="font-extrabold text-xs md:text-sm mb-1 flex items-center gap-1.5">
                                    <span style="background-color: #D1FAE5 !important; color: #047857 !important;" class="text-[10px] font-extrabold px-1.5 py-0.5 rounded">無料</span> 応募ステータス & 顧客化
                                </h4>
                                <p style="color: #4B5563 !important;" class="text-xs font-medium leading-normal">求人応募管理から成約時の「顧客・プロジェクト自動昇格」フロー</p>
                            </div>
                            <div style="background-color: #FFFFFF !important; border: 1px solid #FDA4AF !important;" class="p-3.5 rounded-xl shadow-sm">
                                <h4 style="color: #111827 !important;" class="font-extrabold text-xs md:text-sm mb-1 flex items-center gap-1.5">
                                    <span style="background-color: #FFE4E6 !important; color: #BE123C !important;" class="text-[10px] font-extrabold px-1.5 py-0.5 rounded">AI機能</span> 求人AIマッチ度診断
                                </h4>
                                <p style="color: #4B5563 !important;" class="text-xs font-medium leading-normal">貼った求人URLと自身の経歴をAIが分析し適合スコア(%)と助言を出力</p>
                            </div>
                            <div style="background-color: #FFFFFF !important; border: 1px solid #FDA4AF !important;" class="p-3.5 rounded-xl shadow-sm">
                                <h4 style="color: #111827 !important;" class="font-extrabold text-xs md:text-sm mb-1 flex items-center gap-1.5">
                                    <span style="background-color: #FFE4E6 !important; color: #BE123C !important;" class="text-[10px] font-extrabold px-1.5 py-0.5 rounded">AI機能</span> 自己PR・経歴最適化
                                </h4>
                                <p style="color: #4B5563 !important;" class="text-xs font-medium leading-normal">応募先求人の要件に合わせた自己PR・職歴アピール文のAIアドバイス</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <a href="https://risemaru.oscarchair.jp" target="_blank" rel="noopener noreferrer" 
                           style="background-color: #E11D48 !important; color: #FFFFFF !important;"
                           class="inline-flex items-center justify-center px-6 py-3 rounded-xl font-bold text-sm shadow-md hover:opacity-90 transition-all">
                            Webサイトを開く
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                        </a>
                    </div>
                </div>

                <!-- Product Image Frame -->
                <div class="lg:w-1/2 flex items-center justify-center">
                    <div style="border: 2px solid #FECDD3 !important;" class="relative overflow-hidden rounded-2xl shadow-md w-full">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/risemaru.svg" alt="risemaru (RISEマル) プレビュー画像" class="w-full h-auto block object-cover">
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Bottom Contact CTA Section -->
    <section style="background: linear-gradient(135deg, #3D2D3F 0%, #201322 100%) !important; color: #ffffff !important;" class="py-20 relative overflow-hidden">
        <div class="container mx-auto px-6 text-center relative z-10">
            <h2 style="color: #ffffff !important;" class="text-3xl md:text-4xl font-extrabold mb-4">
                自社SaaSの導入・開発カスタマイズのご相談
            </h2>
            <p style="color: #E6D8E8 !important;" class="max-w-2xl mx-auto mb-8 text-base md:text-lg">
                各プロダクトのAPI連携、企業向けカスタマイズ開発、データ基盤の構築支援までお気軽にお問い合わせください。
            </p>
            <a href="<?php echo esc_url(home_url('/contact')); ?>" 
               style="background-color: #ffffff !important; color: #3D2D3F !important;"
               class="inline-flex items-center justify-center px-8 py-4 rounded-xl font-extrabold text-base shadow-2xl hover:bg-purple-50 transition-all duration-300 transform hover:-translate-y-1">
                お問い合わせはこちら
                <svg class="w-5 h-5 ml-2 text-purple-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7-7 7M5 12h14"></path></svg>
            </a>
        </div>
    </section>
</main>

<?php
get_footer();
