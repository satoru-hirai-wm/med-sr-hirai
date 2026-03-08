<?php
// CTA セクション（共通）
$cta_form_url = $cta_form_url ?? '#contact-form';
$cta_timerex_url = $cta_timerex_url ?? 'https://timerex.net/s/hs_24f4_fac3/3f80eedd';
$cta_line_url = $cta_line_url ?? 'https://lin.ee/uOPQpwe';
?>
<!-- CTA -->
<section id="cta" class="section cta">
  <div class="container">
    <h2>
      <?= h($area_name) ?>のクリニックの<br>
      無料相談はこちら
    </h2>
    <p class="cta-desc">
      ご興味をお持ちいただいた方は、お気軽にご連絡ください。<br>
      ご希望に合わせてお選びください。
    </p>
    <div class="cta-options">
      <a href="<?php echo h($cta_form_url); ?>" class="cta-option">
        <span class="cta-option-title">お問い合わせフォーム</span>
        <span class="cta-option-desc">相談内容が具体的にある場合</span>
        <span class="cta-option-btn">フォームへ</span>
      </a>
      <a href="<?php echo h($cta_timerex_url); ?>" class="cta-option cta-option--timerex" target="_blank" rel="noopener">
        <span class="cta-option-title">日程調整（TimeRex）</span>
        <span class="cta-option-desc">面談の予定を先に決める場合</span>
        <span class="cta-option-btn">日程を選ぶ</span>
      </a>
      <a href="<?php echo h($cta_line_url); ?>" class="cta-option cta-option--line" target="_blank" rel="noopener">
        <span class="cta-option-title">公式LINE</span>
        <span class="cta-option-desc">メッセージに沿って相談内容を決める場合</span>
        <span class="cta-option-btn">
          <img src="https://scdn.line-apps.com/n/line_add_friends/btn/ja.png" alt="友だち追加" height="36" style="vertical-align: middle;">
        </span>
      </a>
    </div>
  </div>
</section>