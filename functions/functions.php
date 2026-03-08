<?php
/**
 * クロスサイトスクリプティング対策
 *
 * @param string|null $str
 * @return string
 */
function h($str) {
  return htmlspecialchars((string)($str ?? ''), ENT_QUOTES, 'UTF-8');
}