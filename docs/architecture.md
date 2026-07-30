# 全体構成・インフラ・セキュリティ設計書 (architecture.md)

本ドキュメントは、`oscss-wp-maruplus3` テーマの技術スタック、インフラ構成、テーマ構造、およびセキュリティ設計について記述します。

---

## 1. システム概要 & 技術スタック

| コンポーネント | 技術・選定理由 |
| :--- | :--- |
| **CMS** | WordPress 6.x / PHP 8.x |
| **フロントエンド** | Vanilla HTML / PHP / Tailwind CSS v3 |
| **インフラ (本番)** | ロリポップ！共有サーバー (LiteSpeed Web Server / PHP 8.x) |
| **インフラ (ローカル)** | Docker Compose (MariaDB 10.6 + WordPress 6.x + WP-CLI) |
| **デプロイメント** | Python Paramiko SSH 自動同期 (Git Pull + OPcache/LiteSpeed Purge) |

---

## 2. ディレクトリ & テーマ構造

```
oscss-wp-maruplus3/
├── .gemini/                    # AIエージェント個別ルール & PJ憲章
├── docs/                       # ドキュメント階層 (Architecture, Deployment, Domains, ADR)
├── assets/                     # 静的アセット (SVGロゴマーク, Favicons, Tailwind CSS, JS)
│   ├── svg/logo-mark.svg       # 共通ロゴマークSVGアセット
│   ├── favicon/                # ファビコン・マニフェストファイル群
│   └── css/tailwind.css        # スタイルシート
├── functions/                  # WordPress 機能設定群
│   └── action.php              # メタタグ・SEO・自動ページ起票フック一式
├── header.php                  # ヘッダーテンプレート (ヘッダーナビゲーション・ロゴ)
├── footer.php                  # フッターテンプレート (高コントラスト背景・プライマリメニュー・サブナビ)
├── template-product.php        # 自社プロダクト用テンプレート (GEOマル / STOCKSマル / RISEマル)
├── page-product.php            # /product 直アクセス用テンプレート
├── 404.php                     # UTF-8 404 エラーページ
├── docker-compose.yml          # ローカルDocker開発環境定義
└── README.md                   # 全体開発ガイド
```

---

## 3. セキュリティ & 情報保護設計
1. **秘密情報の無差別トラッキング防止**:
   - `*token*.json`, `*credentials*.json`, `.env.deploy`, `.env` 等の認証・トークンファイルは `.gitignore` にて除外を徹底。
2. **SEO & 動的メタタグ標準装備**:
   - `functions/action.php` の `maruplus_seo_meta_tags()` により、Canonical URL、Meta Description、OGP、JSON-LD 構造化データを安全に動的出力。
