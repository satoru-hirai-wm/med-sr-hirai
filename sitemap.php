<?php
$path_depth = 0;
require_once __DIR__ . '/includes/require.php';

$page_title = 'サイトマップ｜med-sr-hirai';
$page_description = 'med-sr-hiraiのサイトマップ。トップページ、千歳市の医療社労士などのページ一覧です。';
$page_keywords = 'サイトマップ,med-sr-hirai,医療社労士,千歳市';
$page_url = 'https://med-sr-hirai.jp/sitemap/';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/ga.php';
?>
<body>
  <?php require_once __DIR__ . '/includes/header.php'; ?>
  <main class="sitemap-main container" style="padding: 3rem 1rem; max-width: 800px; margin: 0 auto;">
    <h1>サイトマップ</h1>
    <ul style="margin-top: 1.5rem; padding-left: 1.5rem; line-height: 2;">
<?php
$sitemap_entries = [
  ['url' => '/', 'label' => 'トップページ'],
  ['url' => '/chitose/', 'label' => '千歳市の医療社労士（北海道）'],
  // 追加する場合は以下に ['url' => '/パス/', 'label' => '表示名'] を追記
];
foreach ($sitemap_entries as $entry) {
  echo '      <li><a href="' . h($entry['url']) . '">' . h($entry['label']) . '</a></li>' . "\n";
}
?>
    </ul>
  </main>
  <?php require_once __DIR__ . '/includes/footer.php'; ?>
</body>
</html>
