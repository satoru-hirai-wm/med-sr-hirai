<?php
$path_depth = 4; // areas/hokkaido/cities/chitose
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

    <!-- ご挨拶 -->
    <section id="greeting" class="section greeting">
      <div class="container">
        <h2 class="section-title">
          千歳市のクリニック経営者の方へ
        </h2>
        <p class="section-desc">
          院長先生は今日も、診療をしながら採用・スタッフ管理・組織のことを同時に考えていませんか。
          私は社労士として、その「一人で抱えすぎている状態」を何とかしたいと思い、クリニック専門の組織設計に特化しました。
          守りの労務管理だけでなく、人が辞めない組織をつくる。それが、この事務所にしかできないことだと考えています。
        </p>
      </div>
    </section>

    <!-- 問題提起 -->
    <?php require_once __DIR__ . '/../../../../includes/problem.php'; ?>

    <!-- 原因 -->
    <?php require_once __DIR__ . '/../../../../includes/content.php'; ?>

    <!-- 解決策 -->
    <?php require_once __DIR__ . '/../../../../includes/content2.php'; ?>

    <!-- 専門性 -->
    <?php //require_once __DIR__ . '/../../../../includes/content3.php'; 
    ?>

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
    <?php //require_once __DIR__ . '/../../../../includes/faq.php'; 
    ?>

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
            container.scrollTo({
              top: target.offsetTop,
              behavior: 'smooth'
            });
          }
        });
      });
    })();
  </script>
</body>

</html>