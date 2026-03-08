<?php
/**
 * LP共通設定
 *
 * DB 利用時は config_database.php を別途 require してください。
 * $page_title, $page_description, $page_url は各エリアの config_area.php で定義してください。
 */

// Google Analytics
$ga_id = 'G-XXXXXXXXXX';

// お問い合わせフォーム送信先（受信するメールアドレス）
$contact_mail_to = $contact_mail_to ?? 'info@example.com';
