<?php
$path_depth = 0; // ルート
require_once __DIR__ . '/includes/require.php'; ?>
<?php require_once __DIR__ . '/includes/head.php'; ?>

<body>
  <main class="scroll-container">
    <!-- ヒーロー -->
    <?php require_once __DIR__ . '/includes/hero.php'; ?>
    <!-- 特徴 -->
    <?php require_once __DIR__ . '/includes/features.php'; ?>
    <!-- コンテンツ -->
    <?php require_once __DIR__ . '/includes/content.php'; ?>
    <!-- よくある質問 -->
    <?php require_once __DIR__ . '/includes/faq.php'; ?>
    <!-- CTA -->
    <?php require_once __DIR__ . '/includes/cta.php'; ?>
    <!-- お問い合わせフォーム -->
    <?php require_once __DIR__ . '/includes/contact_form.php'; ?>
  </main>
  <?php require_once __DIR__ . '/includes/section_nav.php'; ?>
  <footer>
    <a href="/chitose/">千歳市の医療社労士</a>
  </footer>
  <script>
    (function() {
      var container = document.querySelector('.scroll-container');
      if (!container) return;
      var sections = container.querySelectorAll('.section');

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