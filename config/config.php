<?php
/**
 * LP共通設定
 *
 * DB 利用時は config_database.php を別途 require してください。
 * $page_title, $page_description, $page_url は各エリアの config_area.php で定義してください。
 */

// サイトのベースURL（ファビコン・OGP画像など絶対パス用）
$site_base_url = 'https://med-sr-hirai.jp/';

// Google Analytics
$ga_id = 'G-G0QF2BB1ES';

// お問い合わせフォーム送信先（受信するメールアドレス）
$contact_mail_to = $contact_mail_to ?? 'info@example.com';

// フッター：ブログ・SNS（公開URLに差し替えてください。未公開の場合は # のままでも可）
$footer_blog_url = $footer_blog_url ?? 'https://med-sr-hirai.jp/blog/';
$footer_x_url = $footer_x_url ?? 'https://x.com/srworksmart';
$footer_instagram_url = $footer_instagram_url ?? 'https://www.instagram.com/satoru_hirai11/';
$footer_facebook_url = $footer_facebook_url ?? 'https://www.facebook.com/satoruhirai11';
