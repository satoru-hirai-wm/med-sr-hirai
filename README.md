# クリニック専門の組織設計社労士 LP（med-sr-hirai）

クリニック向け組織設計・採用定着支援のランディングページです。  
レスポンシブ対応・スワイプ型・SEO対策・Googleアナリティクス対応。  
セクションは `includes` フォルダで共通化され、エリア別に差し替え可能です。


## フォルダ構成

```

med-sr-hirai/
├── index.php                    ← トップページ（簡易版構成）
├── form_send.php                ← お問い合わせフォーム送信処理
├── favicon.php                  ← ファビコン配信（/favicon.ico で参照）
├── sitemap.php                  ← HTMLサイトマップ（/sitemap/ で表示）
├── sitemap.xml                  ← XMLサイトマップ（検索エンジン用）
├── .htaccess                    ← リライトルール（ホスト名でローカル/本番を自動切り替え）
├── .htaccess.local              ← ローカル用（htaccess_switch.bat で切り替え用）
├── .htaccess.production         ← 本番用（htaccess_switch.bat で切り替え用）
├── htaccess_switch.bat          ← .htaccess を local / production に切り替えるスクリプト
├── .gitignore
├── README.md
├── config/
│   ├── config.php               ← 共通設定（GA・メール送信先）
│   ├── config_database.example.php
│   └── config_database.php      ← DB接続（.gitignore 対象・オプション）
├── functions/
│   └── functions.php            ← 共通関数（h関数など）
├── includes/
│   ├── require.php              ← 共通読み込み（config・functions・session）
│   ├── head.php                 ← head・SEO・OGP・GA4（config の $ga_id）
│   ├── section_nav.php          ← セクション移動ボタン（↑↓固定表示）
│   ├── hero.php                 ← Heroセクション
│   ├── problem.php              ← 問題提起セクション（エリア用）
│   ├── content.php              ← コンテンツ（原因）
│   ├── content2.php             ← 解決策
│   ├── content3.php             ← 専門性（オプション）
│   ├── content4.php             ← パートナーシップ
│   ├── content5.php             ← サービス内容①
│   ├── content6.php             ← サービス内容②
│   ├── content7.php             ← 相談内容
│   ├── message.php             ← 代表メッセージ
│   ├── faq.php                  ← よくある質問
│   ├── cta.php                  ← CTA（3つの問い合わせ方法）
│   ├── contact_form.php         ← お問い合わせフォーム
│   ├── header.php
│   └── footer.php
├── areas/
│   ├── hokkaido/
│   │   └── cities/
│   │       └── chitose/
│   │           ├── index.php        ← 千歳市エリアページ（/chitose/）
│   │           └── config_area.php  ← エリア別設定（タイトル・URL等）
│   └── tokyo/
│       └── cities/
│           └── toshima/
│               ├── index.php        ← 豊島区エリアページ（/toshima/）
│               └── config_area.php  ← エリア別設定（タイトル・URL等）
└── assets/
    ├── css/
    │   ├── style.css            ← メインスタイル
    │   └── swipe.css            ← スワイプ・スクロール用
    └── img/
        ├── img_hero_bg.jpg
        ├── img_problem_bg.jpg
        ├── img_content_bg.jpg
        ├── img_cta_bg.jpg
        └── img_faq_bg.jpg

```

## 使い方


### 1. 共通設定

- **config/config.php**  
  - `$ga_id`: Google Analytics 測定ID  
  - `$contact_mail_to`: お問い合わせフォームの受信メールアドレス  

### 2. エリアページの追加

1. `areas/{都道府県}/cities/{市区町村}/` にフォルダを作成（例: 東京都豊島区 → `areas/tokyo/cities/toshima/`）
2. 既存エリア（`chitose` または `toshima`）の `index.php` と `config_area.php` をコピーして配置
3. `config_area.php` で以下を設定
   - `$prefecture_name`, `$area_name`
   - `$page_title`, `$page_description`, `$page_keywords`, `$page_url`（公開URL 例: `https://med-sr-hirai.jp/〇〇/`）
   - その他エリア固有の文言
4. **URL の有効化**: `.htaccess`（および `.htaccess.local` / `.htaccess.production`）にリライトルールを追加  
   - 例: `RewriteRule ^toshima/?$ areas/tokyo/cities/toshima/ [L]`
5. **サイトマップ**: `sitemap.php` の `$sitemap_entries` と `sitemap.xml` に新規ページの URL を追加

### 3. CTA セクション

`cta.php` では次の3種類の問い合わせ方法を表示します。

| オプション | 説明 | 設定変数 |
|-----------|------|----------|
| お問い合わせフォーム | 同一ページ内フォームへスクロール | `$cta_form_url`（デフォルト: `#contact-form`） |
| TimeRex | 日程調整 | `$cta_timerex_url` |
| 公式LINE | 友だち追加 | `$cta_line_url` |

エリアごとに変数を上書き可能です（`config_area.php` で定義）。

### 4. お問い合わせフォーム

- 同一ページ内の `#contact-form` にフォームを配置
- 送信先は `form_send.php`（PHP `mail()` を使用）
- バリデーション・成功・エラー表示に対応

### 5. .htaccess の環境切り替え

- **通常**: 同じ `.htaccess` のまま、アクセスするホスト名で自動切り替え  
  - ローカル（`localhost` / `127.0.0.1`）→ HTTPS リダイレクトなし  
  - 本番（`med-sr-hirai.jp`）→ http→https と www 正規化を適用
- **手動で切り替える場合**  
  - `htaccess_switch.bat local` … ローカル用に `.htaccess` を上書き  
  - `htaccess_switch.bat production` … 本番用に `.htaccess` を上書き  
  - または `.htaccess.local` / `.htaccess.production` を `.htaccess` にコピー

### 6. サイトマップ

- **HTMLサイトマップ**: `/sitemap/` → `sitemap.php`（.htaccess でリライト）
- **XMLサイトマップ**: `sitemap.xml`（検索エンジン用）。ページ追加時は `sitemap.php` の `$sitemap_entries` と `sitemap.xml` の `<url>` を両方更新すること。

## 主な機能

- **共通テンプレート**: セクション単位で include による共通化
- **エリア別ページ**: `areas/` 配下で都道府県・市区町村ごとに展開
- **スワイプ型**: スクロールコンテナ + scroll-snap
- **セクション移動**: 画面右に固定の ↑↓ ボタン
- **3種類の問い合わせ**: フォーム / TimeRex / LINE
- **同一ページ内フォーム**: CTA からフォームへスクロール
- **レスポンシブ**: PC・タブレット・スマートフォン対応
- **SEO**: meta, canonical, OGP, Twitter Card
- **GA4**: 計測タグ配置済み
- **サイトマップ**: HTML（/sitemap/）・XML（sitemap.xml）
- **.htaccess**: 環境に応じた自動切り替え、または local/production の手動切り替え