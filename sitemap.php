<?php
$path_depth = 0;
require_once __DIR__ . '/includes/require.php';

$page_title = 'サイトマップ｜med-sr-hirai';
$page_description = '平井社会保険労務士事務所（med-sr-hirai）のサイトマップです。トップページ、地域別の医療社労士向けページ、本ページへのリンク一覧です。';
$page_keywords = 'サイトマップ,med-sr-hirai,医療社労士,社会保険労務士,北海道,千歳市,東京都,豊島区';
$page_url = rtrim($site_base_url, '/') . '/sitemap/';

require_once __DIR__ . '/includes/head.php';

// HTMLサイトマップの一覧（全ページ共通。sitemap.xml と同期して更新すること）
$sitemap_entries = [
  ['url' => '/', 'label' => 'トップページ'],
  ['url' => '/chitose/', 'label' => '北海道・千歳市（医療社労士）'],
  ['url' => '/toshima/', 'label' => '東京都・豊島区（医療社労士）'],
  ['url' => '/sitemap/', 'label' => 'サイトマップ（このページ）'],
  // 追加する場合はここに ['url' => '/パス/', 'label' => '表示名'] を追記
];
?>
<body>
  <?php require_once __DIR__ . '/includes/header.php'; ?>
  <main class="sitemap-main container" style="padding: 3rem 1rem; max-width: 800px; margin: 0 auto;">
    <h1>サイトマップ</h1>
    <p style="margin-top: 1rem; color: #4b5563; line-height: 1.75; font-size: 0.95rem;">当サイト内の主要ページへのリンク一覧です。</p>
    <ul style="margin-top: 1.5rem; padding-left: 1.5rem; line-height: 2;">
<?php
foreach ($sitemap_entries as $entry) {
  $href = rtrim($site_base_url, '/') . $entry['url'];
  echo '      <li><a href="' . h($href) . '">' . h($entry['label']) . '</a></li>' . "\n";
}
?>
    </ul>
  </main>
  <?php require_once __DIR__ . '/includes/footer.php'; ?>
</body>
</html>
