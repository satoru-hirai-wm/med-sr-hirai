<?php
/**
 * お問い合わせフォーム送信処理
 *
 * 送信先メールアドレスは config/config.php の $contact_mail_to で設定
 */
session_start();
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/functions/functions.php';

// 送信先（config.php で設定）
$contact_mail_to = $contact_mail_to ?? 'info@example.com';
$contact_mail_from = $contact_mail_from ?? 'noreply@example.com';

$errors = [];
$old = [];

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  header('Location: index.php');
  exit;
}

// バリデーション
$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$tel = trim($_POST['tel'] ?? '');
$message = trim($_POST['message'] ?? '');

if ($name === '') {
  $errors[] = 'お名前をご入力ください。';
}
if ($email === '') {
  $errors[] = 'メールアドレスをご入力ください。';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $errors[] = 'メールアドレスの形式が正しくありません。';
}
if ($message === '') {
  $errors[] = '相談内容をご入力ください。';
}

$return_url = $_POST['return_url'] ?? 'index.php';
if (!preg_match('#^[a-zA-Z0-9/_\-\.\?\#\=]*$#', $return_url)) {
  $return_url = 'index.php';
}

if (!empty($errors)) {
  $_SESSION['contact_form_errors'] = $errors;
  $_SESSION['contact_form_old'] = [
    'name' => $name,
    'email' => $email,
    'tel' => $tel,
    'message' => $message,
  ];
  header('Location: ' . $return_url . '#contact-form');
  exit;
}

// メール送信
$subject = '【お問い合わせ】' . mb_substr($name, 0, 20) . ' 様より';
$body = "お名前: {$name}\n";
$body .= "メールアドレス: {$email}\n";
$body .= "電話番号: {$tel}\n\n";
$body .= "相談内容:\n{$message}\n";

$headers = "From: {$contact_mail_from}\r\n";
$headers .= "Reply-To: {$email}\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

$sent = @mail($contact_mail_to, $subject, $body, $headers);

$_SESSION['contact_form_success'] = $sent;

// リダイレクト先（送信元ページ or サンクスページ）
header('Location: ' . $return_url . ($sent ? '?sent=1' : '?sent=0') . '#contact-form');
exit;
