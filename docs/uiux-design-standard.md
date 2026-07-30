# WordPress & Web App 高品質 UI/UX デザイン ＆ 設計標準 (uiux-design-standard.md)

本ドキュメントは、`oscss-wp-maruplus3` において確立された UI/UX デザイン原則、BEM完全構造化クラス規約、画像プレビュー裁断、および Docker/本番デプロイ一貫運用標準を記述します。

---

## 🎨 1. UI/UX 4 大デザイン原則

1. **絶対視認性の保証 (Zero Text-Invisibility)**:
   - 明るい背景上のテキストには `color: #111827 !important;` (ダークネイビー/ブラック) や `color: #374151 !important;` を明示設定。
   - 暗い背景上では `#FFFFFF` または高輝度な淡色（`#E9D5FF`）を100%保証。
2. **明確な Call to Action (CTA Alignment)**:
   - 「Webサイトを開く」「お問い合わせはこちら」などの主要ボタンは、グラデーション背景 (`linear-gradient`) + 大型フォント + アラートスライド矢印アイコンを配置。
3. **贅沢でストレスのない余白設計 (160px Spacing)**:
   - 主要カード要素（`product-card` 等）同士の間隔には、デスクトップ `10rem` (160px) の垂直余白（`.product-card + .product-card { margin-top: 10rem !important; }`）を確保。
4. **アセット・画像領域のコンパクト裁断 (Compact Crop)**:
   - 画像領域はアッパーファーストビュー（`1920x960` / `16:10`）にトリミングし、`max-h-[360px]` + `object-top` で縦長長大化を防止。

---

## 🏷️ 2. BEM構造化クラス付与規約
- フッター: `site-footer__container`, `site-footer__brand`, `site-footer__subnav`
- プロダクトページ: `product-page__hero`, `product-card`, `product-card__inner`, `product-card__content`, `product-card__features`, `product-card__media`

---

## 🐳 3. Dockerローカル環境 ＆ 本番SSHパージ一貫運用
- **ローカル環境**: `docker compose up -d` + WP-CLI 自動DBセットアップ (`http://localhost:8003`)
- **本番環境**: Git Push + Python Paramiko SSH デプロイ + OPcache/LiteSpeed パージ (`https://maruplus3.oscarchair.jp`)
