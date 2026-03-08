<?php
/**
 * お問い合わせフォーム（同一ページ内に設置）
 *
 * 呼び出し前に $path_depth が定義されていること。
 * $base_path は require.php で定義される。
 */
$contact_form_action = $contact_form_action ?? ($base_path . 'form_send.php');
$form_errors = $_SESSION['contact_form_errors'] ?? [];
$form_old = $_SESSION['contact_form_old'] ?? [];
$form_success = $_SESSION['contact_form_success'] ?? null;
unset($_SESSION['contact_form_errors'], $_SESSION['contact_form_old'], $_SESSION['contact_form_success']);
if ($form_success === null && isset($_GET['sent'])) {
  $form_success = ($_GET['sent'] === '1');
}
?>
<!-- お問い合わせフォーム -->
<section id="contact-form" class="section contact-form-section">
  <div class="container">
    <h2 class="section-title">お問い合わせフォーム</h2>
    <p class="section-desc contact-form-desc">
      相談内容が具体的にある場合は、以下のフォームよりお気軽にお問い合わせください。
    </p>
    <?php if ($form_success === true): ?>
    <p class="contact-form-success">お問い合わせありがとうございます。内容を確認のうえ、ご連絡いたします。</p>
    <?php elseif ($form_success === false): ?>
    <p class="contact-form-error">送信に失敗しました。お手数ですが、時間をおいて再度お試しいただくか、LINEよりご連絡ください。</p>
    <?php endif; ?>
    <?php if (!empty($form_errors)): ?>
    <ul class="contact-form-errors">
      <?php foreach ($form_errors as $err): ?>
      <li><?php echo h($err); ?></li>
      <?php endforeach; ?>
    </ul>
    <?php endif; ?>
    <form class="contact-form" action="<?php echo h($contact_form_action); ?>" method="post">
      <input type="hidden" name="return_url" value="<?php echo h($_SERVER['REQUEST_URI'] ?? 'index.php'); ?>">
      <div class="contact-form-group">
        <label for="contact-name" class="contact-form-label">お名前 <span class="required">必須</span></label>
        <input type="text" id="contact-name" name="name" class="contact-form-input" placeholder="山田 太郎" value="<?php echo h($form_old['name'] ?? ''); ?>" required>
      </div>
      <div class="contact-form-group">
        <label for="contact-email" class="contact-form-label">メールアドレス <span class="required">必須</span></label>
        <input type="email" id="contact-email" name="email" class="contact-form-input" placeholder="example@example.com" value="<?php echo h($form_old['email'] ?? ''); ?>" required>
      </div>
      <div class="contact-form-group">
        <label for="contact-tel" class="contact-form-label">電話番号</label>
        <input type="tel" id="contact-tel" name="tel" class="contact-form-input" placeholder="090-1234-5678" value="<?php echo h($form_old['tel'] ?? ''); ?>">
      </div>
      <div class="contact-form-group">
        <label for="contact-message" class="contact-form-label">相談内容 <span class="required">必須</span></label>
        <textarea id="contact-message" name="message" class="contact-form-textarea" rows="6" placeholder="ご相談内容をご記入ください" required><?php echo h($form_old['message'] ?? ''); ?></textarea>
      </div>
      <div class="contact-form-submit">
        <button type="submit" class="btn contact-form-btn">送信する</button>
      </div>
    </form>
  </div>
</section>
