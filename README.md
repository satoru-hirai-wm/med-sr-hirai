# スワイプ型LPテンプレート

レスポンシブ対応・SEO対策・Googleアナリティクス対応のスワイプ型ランディングページテンプレートです。
セクションは `includes` フォルダで共通化されています。

## フォルダ構成

```
lp_templete/
├── index.php
├── .gitignore
├── README.md
├── config/
│   ├── config.php                  ← 定数・ページ設定
│   ├── config_database.php         ← DB接続（.gitignore 対象）
│   └── config_database.example.php ← DB設定サンプル
├── functions/
│   └── functions.php               ← 共通関数（h関数など）
├── includes/
│   ├── require.php    ← 共通読み込み（config・functions）
│   ├── head.php       ← head・SEO・OGP
│   ├── ga.php         ← Googleアナリティクス
│   ├── section_nav.php ← セクション移動ボタン（固定表示）
│   ├── header.php     ← ヘッダー（オプション）
│   ├── hero.php       ← Heroセクション
│   ├── features.php   ← 特徴セクション
│   ├── content.php    ← コンテンツセクション
│   ├── faq.php        ← よくある質問セクション
│   ├── cta.php        ← CTAセクション
│   └── footer.php     ← フッター（オプション）
└── assets/
    ├── css/
    │   ├── style.css  ← メインスタイル
    │   └── swipe.css  ← スワイプ・スクロール用
    └── img/           ← 画像配置
        ├── ogp.png
        ├── img_hero_bg.jpg
        ├── img_features_bg.jpg
        ├── img_content_bg.jpg
        ├── img_faq_bg.jpg
        └── img_cta_bg.jpg
```

## 使い方

このフォルダをコピーし、各プロジェクトに配置して利用します。

1. **DB利用時**: `config/config_database.example.php` をコピーして `config_database.php` を作成し、接続情報を編集
2. **共通設定**: `config/config.php` でタイトル・URL・GA測定IDを設定
3. **セクション編集**: `includes/` 内の各PHPファイルでコンテンツを編集
4. **画像**: `assets/img/` に OGP画像（ogp.png）と各セクション背景画像を配置
5. **デザイン**: `assets/css/style.css` の `:root` 内のCSS変数で色味を変更

## 主な機能

- **共通テンプレート**: セクション単位でincludeによる共通化
- **スワイプ**: スクロールコンテナ方式 + scroll-snap による縦スワイプ
- **セクション移動**: 画面右に固定の ↑↓ ボタン（Font Awesome）
- **レスポンシブ**: PC・タブレット・スマートフォン対応
- **SEO**: meta, canonical, OGP, Twitter Card, JSON-LD
- **GA4**: 計測タグ配置済み（config/config.php でID指定）
