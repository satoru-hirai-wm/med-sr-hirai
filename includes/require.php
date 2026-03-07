<?php
/**
 * 共通読み込み
 * config・functions をまとめて読み込む
 * DB利用時は別途 config/config_database.php を require すること
 */
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../functions/functions.php';