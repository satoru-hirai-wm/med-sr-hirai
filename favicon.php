<?php
/**
 * ファビコン配信
 * /favicon.ico へのアクセスで lg_favicon 画像を返す
 */
// 出力バッファをクリア（BOMや空白で 500 が出ないように）
if (ob_get_level()) {
    ob_end_clean();
}

$base = __DIR__ . DIRECTORY_SEPARATOR;
$candidates = [
    'favicon.ico',
    'assets/img/lg_favicon.png',
    'assets/img/lg_favicon.jpg',
];

$file = null;
$contentType = 'image/x-icon';

foreach ($candidates as $rel) {
    $path = $base . $rel;
    if (is_file($path) && is_readable($path)) {
        $file = $path;
        $ext = strtolower(pathinfo($path, PATHINFO_EXTENSION));
        $contentType = $ext === 'png' ? 'image/png' : ($ext === 'jpg' || $ext === 'jpeg' ? 'image/jpeg' : 'image/x-icon');
        break;
    }
}

if ($file === null) {
    header('HTTP/1.0 404 Not Found');
    header('Content-Type: text/plain; charset=UTF-8');
    echo '404 Not Found';
    exit;
}

$size = filesize($file);
header('Content-Type: ' . $contentType);
header('Content-Length: ' . $size);
header('Cache-Control: public, max-age=86400');
header('Expires: ' . gmdate('D, d M Y H:i:s', time() + 86400) . ' GMT');

readfile($file);
exit;
