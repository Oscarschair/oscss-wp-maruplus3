# WordPress & Web App 高品質 UI/UX デザイン ＆ 設計標準 (uiux-design-standard.md)

本ドキュメントは、`oscss-wp-maruplus3` において確立された UI/UX デザイン原則、BEM完全構造化クラス規約、Waveイラスト絶対セパレート設計、および Playwright 3画面実機視覚検証プロトコルを記述します。

---

## 🎨 1. UI/UX 4 大デザイン原則 ＆ 構造設計

1. **絶対視認性の保証 (Zero Text-Invisibility & Guaranteed Inline Styles)**:
   - WordPress 側での Tailwind CSS 未コンパイル事故を回避するため、背景色・文字色には明確なインラインスタイル（`style="background: linear-gradient(135deg, #1A0C1E 0%, #0F0512 100%) !important; color: #FFFFFF !important;"`）を重複付与し可読性を100%保証。
2. **Waveイラストの絶対セパレート分離設計 (Isolated Wave Divider)**:
   - 波型 Wave SVG は Hero セクションの中に `absolute` で入れず、独立した要素 `<div class="product-page__wave-wrapper">` としてセクションの外側に設置する。これによりテキストへの被り事故を構造的に100%遮断する。
3. **明確な Call to Action (CTA Alignment)**:
   - 「Webサイトを開く」「お問い合わせはこちら」などの主要ボタンは、グラデーション背景 + 大型フォント + アニメーション矢印アイコンを配置。
4. **贅沢でストレスのない余白設計 (Spacious Card Spacing)**:
   - 主要カード要素（`product-card` 等）同士の間隔には、デスクトップ `9rem` (144px) の垂直余白（`.product-card + .product-card { margin-top: 9rem !important; }`）を確保。

---

## 🔍 2. 事前デプロイ必須条件: Playwright 3 端末自動実機視覚検証 Protocol
本番デプロイ前に、必ず以下の3画面サイズで Playwright スクリーンショットを取得し、視覚的に問題がないことを自ら検証した上でデプロイを実行する。
- **PC (1920x1080)**
- **Tablet (768x1024)**
- **Mobile (375x812)**

---

## 🐳 3. Dockerローカル環境 ＆ 本番SSHパージ一貫運用
- **ローカル環境**: `docker compose up -d` + WP-CLI 自動DBセットアップ (`http://localhost:8003`)
- **本番環境**: Git Push + Python Paramiko SSH デプロイ + OPcache/LiteSpeed パージ (`https://maruplus3.oscarchair.jp`)
