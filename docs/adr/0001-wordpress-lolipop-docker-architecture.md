# 0001: WordPress カスタムテーマと Docker・ロリポップSSHデプロイ構成

- **ステータス**: Accepted
- **日付**: 2026-07-30
- **意思決定者**: マルプラス開発局

## コンテキストと課題 (Context & Problem)
マルプラスのサンジョウのコーポレートサイトにおいて、ローカル開発環境の再現性・可搬性と、共有サーバー（ロリポップ）本番環境への高速かつ安全なデプロイ・キャッシュ同期を両立する必要があった。

## 検討した選択肢 (Options Considered)
1. **FTP / 手動アップロード**: 変更漏れやキャッシュ残存、環境不整合のリスクが高い。
2. **Git SSH 自動デプロイ + Docker Compose ローカル構築 + Python Paramiko**: コードとDB環境の完全再現が可能。

## 決定事項 (Decision)
**選択肢 2 を採用**。
- ローカル環境: `docker compose` により MariaDB + WordPress + WP-CLI (Port 8003) を統一構築。
- デプロイ: Python `paramiko` によりロリポップ SSH 経由で Git Pull および OPcache / LiteSpeed Cache パージを実行。

## 帰結・影響 (Consequences)
- **メリット**: ローカルと本番環境の100%同一動作が保証され、キャッシュ事故が排除される。
- **制限事項**: リモートデプロイ時は `.env.deploy` のパスワード認証管理が必要。
