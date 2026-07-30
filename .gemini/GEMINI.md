# oscss-wp-maruplus3 プロジェクト個別ルール & PJ憲章

このドキュメントは、本プロジェクト（`oscss-wp-maruplus3`）固有の開発、ドキュメント運用ルール、およびプロジェクト憲章を定義します。

---

## 📜 1. プロジェクト開発・ドキュメント運用憲章 (Project Charter)

1. **第 1 条: 正本はコード (Code is Single Source of Truth)**
   ソースコード（`header.php`, `footer.php`, `template-product.php` 等）および WordPress データベース設定が常に一次情報（正本）である。コードとドキュメントに不整合が生じた場合は、実行コードを絶対正とする。
2. **第 2 条: ドキュメントは「なぜ」と「不変条件」に特化する (Document the "Why" and Invariants)**
   ドキュメントにはコード単体では表現しきれない「ビジネスの背景（なぜその設計を選んだか）」「設計思想」「セキュリティ制約」「用語の定義」「不変条件」に特化して記述する。
3. **第 3 条: PR 同梱の同時更新 ＆ 日本語記述 (Definition of Done & Japanese PR)**
   機能追加・修正時には、対応する `docs/domains/`（仕様書）および `docs/adr/`（意思決定）の更新を PR マージの必須条件 (Definition of Done) とし、コードとドキュメントの剥離（ドリフト）を 100% 遮断する。また、**PR（タイトル・概要文・対応内容）は基本的に日本語で作成する**。
4. **第 4 条: アーキテクチャ変更の ADR 記録義務 (Mandatory ADR Trail)**
   技術スタックの選定・変更、データモデルの改編、セキュリティ方針の変更などの重要な意思決定は、必ず `docs/adr/NNNN-<title>.md` として標準フォーマットで記録を残す。

---

## 2. 開発フロー & 本番デプロイ
- **ブランチ運用**: `main` ブランチを本番用として運用します。
- **コミットメッセージ**: Gitでのコミット時は、原則として**日本語**でメッセージを記述してください（例：「フッターレイアウト改修」「SEOメタタグのフォールバック修正」など）。
- **本番デプロイ方法**:
  - Python リモートデプロイスクリプト経由で、ロリポップ共有サーバー（`ssh.lolipop.jp:2222`）上で SSH git pull を実行し、PHP OPcache および LiteSpeed Cache をパージします。
  - SSH接続用の認証情報は `.env.deploy` ファイルで一元管理されています。

---

## 3. ローカル開発環境（Docker 構成・DB Setup 情報）
- **起動コマンド**: `docker compose up -d`
- **ローカルURL一覧**:
  - **トップページ**: [http://localhost:8003](http://localhost:8003)
  - **プロダクトページ**: [http://localhost:8003/product](http://localhost:8003/product)
  - **プライバシーポリシー**: [http://localhost:8003/privacy-policy](http://localhost:8003/privacy-policy)
  - **WordPress 管理画面**: [http://localhost:8003/wp-admin](http://localhost:8003/wp-admin)
- **管理画面ログイン認証情報**:
  - **ユーザー名**: `admin`
  - **パスワード**: `adminpass`
- **一般設定（本番同期済み）**:
  - サイト言語: 日本語 (`ja`)
  - タイムゾーン: 東京 (`Asia/Tokyo`)
  - 日付形式: `Y年n月j日`
  - 時刻形式: `g:i A`
  - 週の始まり: 月曜日 (`1`)
- **Dockerサービス構成**:
  - `oscss-wp-maruplus3-wordpress-1`: WordPress 本体 (Port 8003 -> 80)
  - `oscss-wp-maruplus3-db-1`: MariaDB 10.6 (Database: `wordpress`, User: `wordpress`, Pass: `wordpress`)
  - `oscss-wp-maruplus3-wp-cli-1`: WP-CLI コマンド実行用コンテナ (常駐)

---

## 4. コーディング規約
- **テーマ構造**: WordPress の標準構造に則り、各種テンプレートファイル（`front-page.php`, `template-product.php` 等）を配置しています。
- **スタイル設定**: Tailwind CSS v3 を使用し、直感的なレスポンシブデザインとハイコントラストな視認性を担保しています。
- **SEO/メタタグ**: 共通のメタタグ（Canonical、Meta Description、OGP、JSON-LD）は `functions/action.php` 内の `maruplus_seo_meta_tags()` 関数にて一元管理し、 `wp_head` にて自動出力します。
