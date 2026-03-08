<?php
// ヘッダー・head タグ（SEO・OGP・スタイル読み込み）
$css_path = $base_path . '/assets/css/style.css';
$swipe_css_path = $base_path . '/assets/css/swipe.css';

?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <title><?php echo h($page_title); ?></title>
  <meta name="description" content="<?php echo h($page_description); ?>">
  <meta name="keywords" content="<?php echo h($page_keywords); ?>">
  <meta name="robots" content="index, follow">
  <link rel="canonical" href="<?php echo h($page_url); ?>">

  <!-- OGP -->
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?php echo h($page_title); ?>">
  <meta property="og:description" content="<?php echo h($page_description); ?>">
  <meta property="og:url" content="<?php echo h($page_url); ?>">
  <meta property="og:image" content="<?php echo h($page_url); ?>assets/img/ogp.png">
  <meta property="og:site_name" content="サンプルLP">
  <meta property="og:locale" content="ja_JP">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo h($page_title); ?>">
  <meta name="twitter:description" content="<?php echo h($page_description); ?>">

  <!-- Structured Data (JSON-LD) -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "<?php echo h($page_title); ?>",
    "description": "<?php echo h($page_description); ?>",
    "url": "<?php echo h($page_url); ?>"
  }
  </script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://unpkg.com/destyle.css@1.0.5/destyle.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo h($css_path); ?>">
  <link rel="stylesheet" href="<?php echo h($swipe_css_path); ?>">
</head>
