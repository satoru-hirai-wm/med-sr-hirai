<?php
$path_depth = 4; // areas/tokyo/cities/toshima
require_once __DIR__ . '/../../../../includes/require.php';
if (file_exists(__DIR__ . '/config_area.php')) {
  require_once __DIR__ . '/config_area.php';
}
?>
<?php require_once __DIR__ . '/../../../../includes/head.php'; ?>

<body>
  <main class="scroll-container">
    <!-- ヒーロー -->
    <?php require_once __DIR__ . '/../../../../includes/hero.php'; ?>

    <!-- 問題提起 -->
    <?php require_once __DIR__ . '/../../../../includes/problem.php'; ?>

    <!-- 原因 -->
    <?php require_once __DIR__ . '/../../../../includes/content.php'; ?>

    <!-- 解決策 -->
    <?php require_once __DIR__ . '/../../../../includes/content2.php'; ?>

    <!-- 専門性 -->
    <?php //require_once __DIR__ . '/../../../../includes/content3.php'; ?>

    <!-- パートナーシップ -->
    <?php require_once __DIR__ . '/../../../../includes/content4.php'; ?>

    <!-- サービス内容① -->
    <?php require_once __DIR__ . '/../../../../includes/content5.php'; ?>

    <!-- サービス内容② -->
    <?php require_once __DIR__ . '/../../../../includes/content6.php'; ?>

    <!-- 相談内容 -->
    <?php require_once __DIR__ . '/../../../../includes/content7.php'; ?>

    <!-- 代表メッセージ -->
    <?php require_once __DIR__ . '/../../../../includes/message.php'; ?>

    <!-- よくある質問 -->
    <?php //require_once __DIR__ . '/../../../../includes/faq.php'; ?>

    <!-- CTA -->
    <?php require_once __DIR__ . '/../../../../includes/cta.php'; ?>
    
    <!-- お問い合わせフォーム -->
    <?php require_once __DIR__ . '/../../../../includes/contact_form.php'; ?>
    
    <!-- フッダー -->
    <?php require_once __DIR__ . '/../../../../includes/footer.php'; ?>
  </main>
  <?php require_once __DIR__ . '/../../../../includes/section_nav.php'; ?>
  <script>
  (function() {
    var container = document.querySelector('.scroll-container');
    if (!container) return;
    var sections = container.querySelectorAll('.section, .footer');
    function getCurrentIndex() {
      var scrollTop = container.scrollTop;
      var vh = container.clientHeight / 2;
      var idx = 0;
      for (var i = 0; i < sections.length; i++) {
        if (sections[i].offsetTop <= scrollTop + vh) idx = i;
      }
      return idx;
    }
    document.querySelectorAll('.section-nav-btn').forEach(function(btn) {
      btn.addEventListener('click', function(e) {
        e.preventDefault();
        var idx = getCurrentIndex();
        var target = this.dataset.dir === 'prev' ? sections[idx - 1] : sections[idx + 1];
        if (target) {
          container.scrollTo({ top: target.offsetTop, behavior: 'smooth' });
        }
      });
    });
  })();
  </script>
</body>

</html>
