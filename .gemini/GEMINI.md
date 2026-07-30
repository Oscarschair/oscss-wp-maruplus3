# oscss-wp-maruplus3 プロジェクト運用ルール

このドキュメントは、本プロジェクト（`oscss-wp-maruplus3`）固有の開発およびデプロイルールを定義します。

---

## 1. 開発フロー
- **ブランチ運用**: `main` ブランチを本番用として運用します。
- **コミットメッセージ**: Gitでのコミット時は、原則として**日本語**でメッセージを記述してください（例：「アイコン変更」「SEOメタタグのフォールバック修正」など）。
- **デプロイ方法**:
  - `deploy.ps1` を使用して、リモートサーバー（ロリポップ環境）に `ssh` を介して SSH PULL (git pull) を実行します。
  - SSH接続用のパスワード等は、ルートの `.env.deploy` ファイルで一元管理しています。

## 2. ローカル開発環境（Docker 構成・DB Setup 情報）
- **起動コマンド**: `docker compose up -d`
- **ローカルURL一覧**:
  - **トップページ**: [http://localhost:8003](http://localhost:8003)
  - **プロダクトページ**: [http://localhost:8003/product](http://localhost:8003/product)
  - **プライバシーポリシー**: [http://localhost:8003/privacy-policy](http://localhost:8003/privacy-policy)
  - **WordPress 管理画面**: [http://localhost:8003/wp-admin](http://localhost:8003/wp-admin)
- **管理画面ログイン認証情報**:
  - **ユーザー名**: `admin`
  - **パスワード**: `adminpass`
- **Dockerサービス構成**:
  - `oscss-wp-maruplus3-wordpress-1`: WordPress 本体 (Port 8003 -> 80)
  - `oscss-wp-maruplus3-db-1`: MariaDB 10.6 (Database: `wordpress`, User: `wordpress`, Pass: `wordpress`)
  - `oscss-wp-maruplus3-wp-cli-1`: WP-CLI コマンド実行用コンテナ (常駐)

## 3. コーディング規約
- **テーマ構造**: WordPress の標準構造に則り、各種テンプレートファイル（`front-page.php`, `template-product.php` 等）を配置しています。
- **スタイル設定**: Tailwind CSS v3 を使用しており、ローカルでのビルド環境が整備されています。
- **SEO/メタタグ**: 共通のメタタグ（Canonical、Meta Description、OGP、JSON-LD）は、 `functions/action.php` 内の `maruplus_seo_meta_tags()` 関数にて一元管理し、 `wp_head` にて自動出力します。

## 4. グローバルルールとの連携
- 親階層（グローバル）で定義されている共通ルール（Google APIの管理、見積もり基準等）に準拠します。
