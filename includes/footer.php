<?php
// フッター（事務所情報・ブログ・SNS）
$copyright_year = date('Y');
$blog_url = $footer_blog_url ?? '#';
$x_url = $footer_x_url ?? '#';
$ig_url = $footer_instagram_url ?? '#';
$fb_url = $footer_facebook_url ?? '#';
?>
<footer class="footer" role="contentinfo">
  <div class="footer-inner container">
    <h2 class="footer-heading">事務所情報</h2>
    <div class="footer-body">
      <div class="footer-office">
        <p class="footer-office-name">平井社会保険労務士事務所</p>
        <dl class="footer-dl">
          <div class="footer-dl-row">
            <dt>郵便番号</dt>
            <dd><span class="footer-nobreak">061-1113</span></dd>
          </div>
          <div class="footer-dl-row">
            <dt>住所</dt>
            <dd>北海道北広島市共栄町4-3-11<span class="footer-nobreak">PRIME北広島402号室</span></dd>
          </div>
          <div class="footer-dl-row">
            <dt>電話番号</dt>
            <dd><a href="tel:09079632635" class="footer-tel">090-7963-2635</a></dd>
          </div>
          <div class="footer-dl-row">
            <dt>FAX</dt>
            <dd><span class="footer-nobreak">050-3534-8609</span></dd>
          </div>
        </dl>
      </div>
      <div class="footer-actions">
        <a href="<?php echo h($blog_url); ?>" target="_blank" rel="noopener noreferrer" class="footer-blog">ブログ</a>
        <ul class="footer-social" aria-label="公式SNS">
          <li>
            <a href="<?php echo h($x_url); ?>" class="footer-social-link footer-social-link--x" target="_blank" rel="noopener noreferrer" aria-label="X">
              <svg class="footer-social-icon" viewBox="0 0 24 24" width="22" height="22" aria-hidden="true" focusable="false"><path fill="currentColor" d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
            </a>
          </li>
          <li>
            <a href="<?php echo h($ig_url); ?>" class="footer-social-link" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
              <i class="fa-brands fa-instagram footer-social-fa" aria-hidden="true"></i>
            </a>
          </li>
          <li>
            <a href="<?php echo h($fb_url); ?>" class="footer-social-link" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
              <i class="fa-brands fa-facebook-f footer-social-fa" aria-hidden="true"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <p class="footer-copyright">&copy; <?php echo $copyright_year; ?> Hirai SR Office. All Rights Reserved.</p>
  </div>
</footer>
