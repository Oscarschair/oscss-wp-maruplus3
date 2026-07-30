# マルプラスのサンジョウ プロジェクトドキュメント (docs)

本ディレクトリは、`oscss-wp-maruplus3` プロジェクトの仕様書、アーキテクチャ設計書、環境構築手順書、および Architecture Decision Records (ADR) を一括管理する正本ドキュメント階層です。

---

## 📜 プロジェクト開発・ドキュメント運用憲章 (Project Charter)

1. **第 1 条: 正本はコード (Code is Single Source of Truth)**
   ソースコード（`header.php`, `footer.php`, `template-product.php` 等）および WordPress データベース設定が常に一次情報（正本）である。コードとドキュメントに不整合が生じた場合は、実行コードを絶対正とする。
2. **第 2 条: ドキュメントは「なぜ」と「不変条件」に特化する (Document the "Why" and Invariants)**
   ドキュメントにはコード単体では表現しきれない「ビジネスの背景（なぜその設計を選んだか）」「設計思想」「セキュリティ制約」「用語の定義」「不変条件」に特化して記述する。
3. **第 3 条: PR 同梱の同時更新 ＆ 日本語記述 (Definition of Done & Japanese PR)**
   機能追加・修正時には、対応する `docs/domains/`（仕様書）および `docs/adr/`（意思決定）の更新を PR マージの必須条件 (Definition of Done) とし、コードとドキュメントの剥離（ドリフト）を 100% 遮断する。また、**PR（タイトル・概要文・対応内容）は基本的に日本語で作成する**。
4. **第 4 条: アーキテクチャ変更の ADR 記録義務 (Mandatory ADR Trail)**
   技術スタックの選定・変更、データモデルの改編、セキュリティ方針の変更などの重要な意思決定は、必ず `docs/adr/NNNN-<title>.md` として標準フォーマットで記録を残す。

---

## 📂 ドキュメント目次 (Navigation)

### 1. 全体設計 & 環境構築
- [全体構成・インフラ・セキュリティ設計書 (architecture.md)](file:///c:/Users/user/git/oscss-wp-maruplus3/docs/architecture.md)
- [デプロイ・CI/CD・環境構築手順書 (deployment.md)](file:///c:/Users/user/git/oscss-wp-maruplus3/docs/deployment.md)

### 2. 生きたドメイン・機能仕様書 (`docs/domains/`)
- [自社プロダクトページ仕様書 (domains/product.md)](file:///c:/Users/user/git/oscss-wp-maruplus3/docs/domains/product.md)
- [フッター・ナビゲーション仕様書 (domains/footer-navigation.md)](file:///c:/Users/user/git/oscss-wp-maruplus3/docs/domains/footer-navigation.md)

### 3. アーキテクチャ意思決定ログ (`docs/adr/`)
- [ADR起票テンプレート (_TEMPLATE.md)](file:///c:/Users/user/git/oscss-wp-maruplus3/docs/adr/_TEMPLATE.md)
- [0001: WordPress カスタムテーマと Docker・ロリポップSSHデプロイ構成 (0001-wordpress-lolipop-docker-architecture.md)](file:///c:/Users/user/git/oscss-wp-maruplus3/docs/adr/0001-wordpress-lolipop-docker-architecture.md)
