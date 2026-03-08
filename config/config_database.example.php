<?php
/**
 * データベース接続設定（サンプル）
 *
 * このファイルを config_database.php にコピーし、
 * 環境に合わせて接続情報を編集してください。
 * config_database.php は .gitignore に追加して Git にコミットしないでください。
 */
// 環境判定
if (!empty($_SERVER['SERVER_NAME']) && ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1')) {
  define('DB_HOST', 'localhost');
  define('DB_NAME', 'lp_template');
  define('DB_USER', 'root');
  define('DB_PASSWORD', '');
} else {
  define('DB_HOST', 'localhost');
  define('DB_NAME', 'lp_template');
  define('DB_USER', 'dbuser');
  define('DB_PASSWORD', 'dbpassword');
}

/**
 * データベースに接続する
 *
 * @return PDO
 */
function connectDB()
{
  $param = "mysql:dbname=" . DB_NAME . ";host=" . DB_HOST . ";charset=utf8mb4";
  try {
    $pdo = new PDO($param, DB_USER, DB_PASSWORD);
    $pdo->query('SET NAMES utf8mb4;');
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $pdo;
  } catch (PDOException $e) {
    echo $e->getMessage();
    exit;
  }
}
