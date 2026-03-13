<?php

/**
 * Template Name: サービス・事業紹介
 *
 * @package oscss-wp-maruplus3
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="container mx-auto px-4 py-16">
        <h1 class="text-4xl font-bold text-center mb-12"><?php the_title(); ?></h1>

        <!-- 3つの要素が重なる「3乗」の価値 -->
        <section id="cubed-value" class="mb-16">
            <h2 class="text-3xl font-bold text-center mb-8">3つのコア・バリューが生む「3乗」の価値</h2>
            <div class="max-w-4xl mx-auto text-lg text-center">
                <p class="mb-4">
                    SFさんの多才なスキルを、クライアントに提供する「価値」の切り口で3つに分類しました。<br>
                    これら3つが組み合わさることで、SFさんにしか出せない独自の価値が生まれます。
                </p>
                <div class="text-2xl font-bold my-6">
                    <span class="inline-block bg-gray-200 rounded-full px-4 py-2">分析</span> <span class="mx-2">×</span>
                    <span class="inline-block bg-gray-200 rounded-full px-4 py-2">自動化</span> <span class="mx-2">×</span>
                    <span class="inline-block bg-gray-200 rounded-full px-4 py-2">グローバル</span> <span class="mx-2">＝</span>
                    <span class="text-blue-600">次世代のマーケティング基盤構築</span>
                </div>
                <p>
                    例えば、「中華圏向けのECサイトにおいて、広告からCRMまでをAPIで統合し、ROASをBigQueryで日次可視化する」といった、通常なら3社に発注が必要な業務を一人（あるいはSFさんのチーム）で完結できるのが最大の武器です。
                </p>
            </div>
        </section>

        <!-- 3つのコア・バリュー -->
        <section id="core-values">
            <div class="grid md:grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- 1. Data Enabler -->
                <div class="border rounded-lg p-6 shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">1.【Data Enabler】<br>データの実装と可視化</h3>
                    <p class="text-blue-600 font-bold mb-4">「見えないものを、意思決定できる形に変える」</p>
                    <p class="mb-2"><strong class="font-bold">内容:</strong> Web解析、データマート構築（Bronze/Silver/Gold設計）、SQL分析。</p>
                    <p><strong class="font-bold">強み:</strong> 単なるレポート作成ではなく、BigQueryやGTMを用いた「計測基盤そのもの」を設計・実装できる点。</p>
                </div>

                <!-- 2. Marketing Architect -->
                <div class="border rounded-lg p-6 shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">2.【Marketing Architect】<br>仕組みの自動化と最適化</h3>
                    <p class="text-blue-600 font-bold mb-4">「バラバラな点と点を繋ぎ、自動で回る仕組みを作る」</p>
                    <p class="mb-2"><strong class="font-bold">内容:</strong> CRM/MA導入、API連携、ワークフロー設計、広告データ統合。</p>
                    <p><strong class="font-bold">強み:</strong> マーケティングの知見とエンジニアリングのスキルの掛け合わせにより、業務効率とLTV（顧客生涯価値）を同時に高める点。</p>
                </div>

                <!-- 3. Global Tech Director -->
                <div class="border rounded-lg p-6 shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">3.【Global Tech Director】<br>越境実装とPM</h3>
                    <p class="text-blue-600 font-bold mb-4">「国境や技術の壁を越えてプロジェクトを完遂させる」</p>
                    <p class="mb-2"><strong class="font-bold">内容:</strong> 多言語ローカライズ（中・繁・日）、Webサイト制作、システム開発、PM/要件定義。</p>
                    <p><strong class="font-bold">強み:</strong> 翻訳だけでなく、システム仕様やビジネス要件を理解した上で、海外展開や複雑なWebプロジェクトをリードできる点。</p>
                </div>
            </div>
        </section>

        <div class="text-center mt-16">
             <p class="text-xl">この3つの分類（Data / Marketing / Global）をベースに、Webサイトのサービス紹介やプロフィールを整理しました。</p>
             <p class="text-xl mt-4">次は、この3つの柱を元に、クライアントに刺さる「具体的なキャッチコピー」や「サービスパッケージ案」を作成しましょう。</p>
        </div>
    </div>
</main>

<?php
get_footer();
