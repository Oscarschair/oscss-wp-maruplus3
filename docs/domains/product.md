# 自社プロダクトページ仕様書 (domains/product.md)

本ドキュメントは、自社プロダクトページ (`/product`) の仕様および掲載プロダクト概要を記述します。

---

## 1. 概要
マルプラスの自社SaaSプロダクト群（GEOマル、STOCKSマル、RISEマル）のプレゼンテーション・機能一覧・導入メリットを掲載する固定ページ。

## 2. 掲載プロダクト
1. **GEOマル (oscss-geomaru)**: 位置情報・ジオマーケティング分析ソリューション
2. **STOCKSマル (oscss-stocksmaru)**: 在庫・資産管理運用自動化SaaS
3. **RISEマル (oscss-risemaru)**: パフォーマンス・成長支援アナリティクス

## 3. 実装テンプレート
- テンプレートファイル: `template-product.php`
- 固定ページルーティング: `page-product.php` (スラッグ `product`)
- 自動起票フック: `functions/action.php` 内の `maruplus_create_product_page()`
