# デプロイ・CI/CD・環境構築手順書 (deployment.md)

本ドキュメントは、ローカル Docker 開発環境の起動・初期化手順および、本番サーバー（ロリポップ共有サーバー）への SSH デプロイ手順を記述します。

---

## 1. ローカル Docker 開発環境構築

### 起動手順
```bash
docker compose up -d
```

### アクセス情報
- **トップページ**: [http://localhost:8003](http://localhost:8003)
- **プロダクトページ**: [http://localhost:8003/product](http://localhost:8003/product)
- **プライバシーポリシー**: [http://localhost:8003/privacy-policy](http://localhost:8003/privacy-policy)
- **WordPress 管理画面**: [http://localhost:8003/wp-admin](http://localhost:8003/wp-admin)
  - ユーザー名: `admin`
  - パスワード: `adminpass`

---

## 2. 本番サーバーデプロイ手順

### 自動デプロイスクリプト
Python `paramiko` スクリプトを実行して、本番サーバー上で Git Pull ＆ キャッシュパージを行います。

```powershell
python C:\Users\user\.gemini\antigravity-ide\brain\19b0fd42-fa02-4db6-94a2-bb8101c5494a\scratch\test_ssh.py
python C:\Users\user\.gemini\antigravity-ide\brain\19b0fd42-fa02-4db6-94a2-bb8101c5494a\scratch\purge_cache_files.py
```

### 処理内容
1. `ssh.lolipop.jp:2222` に認証情報でリモート接続。
2. `cd ~/web/maruplus3.oscarchair.jp/wp-content/themes/oscss-wp-maruplus3/ && git pull origin main` を実行。
3. `assets/favicon/` のアセットを Web ルートに同期配置。
4. `opcache_reset()` および `litespeed_purge_all` を実行して PHP OPcache および LiteSpeed キャッシュを即時全消去。
