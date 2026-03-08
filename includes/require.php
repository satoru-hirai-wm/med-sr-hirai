<?php
/**
 * 共通読み込み
 * config・functions をまとめて読み込む
 * DB利用時は別途 config/config_database.php を require すること
 *
 * 静的ファイルのパス: 各ページで require の前に $path_depth を指定
 *   例: $path_depth = 4;  → ../../../../assets/css/... となる（4階層上）
 *   ルートの index.php は 0、areas/hokkaido/cities/chitose/ なら 4
 */
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../functions/functions.php';

$depth = isset($path_depth) ? (int)$path_depth : 0;
$base_path = ($depth === 0) ? '' : str_repeat('../', $depth);
