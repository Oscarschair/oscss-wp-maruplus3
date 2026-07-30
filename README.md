# マルプラスのサンジョウ (oscss-wp-maruplus3)

スタートアップ初期開発・DevSecOps一気通貫対応・データ計測基盤の設計・マーケティング運用の自動化を行うマルプラスのコーポレートWordPressテーマ。

---

## 🚀 ローカル開発環境 (Docker) 情報

### 1. 起動方法
```bash
docker compose up -d
```

### 2. ローカルアクセス URL
- **トップページ**: [http://localhost:8003](http://localhost:8003)
- **自社プロダクトページ**: [http://localhost:8003/product](http://localhost:8003/product)
- **プライバシーポリシー**: [http://localhost:8003/privacy-policy](http://localhost:8003/privacy-policy)
- **WordPress 管理画面**: [http://localhost:8003/wp-admin](http://localhost:8003/wp-admin)

### 3. 管理画面ログイン情報
- **ユーザー名**: `admin`
- **パスワード**: `adminpass`

### 4. データベース & サービス構成
- **DB名**: `wordpress`
- **DBユーザー**: `wordpress`
- **DBパスワード**: `wordpress`
- **WP-CLI実行**: `docker compose exec -T wp-cli wp <command>`

---

## 🌐 本番環境情報
- **本番URL**: [https://maruplus3.oscarchair.jp](https://maruplus3.oscarchair.jp)
- **本番デプロイコマンド**:
  ```powershell
  python C:\Users\user\.gemini\antigravity-ide\brain\19b0fd42-fa02-4db6-94a2-bb8101c5494a\scratch\test_ssh.py
  ```
