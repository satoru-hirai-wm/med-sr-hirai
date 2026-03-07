<?php
// Google Analytics (GA4) - 測定IDを config.php の $ga_id で指定
if (!isset($ga_id)) $ga_id = 'G-XXXXXXXXXX';
?>
<!-- Google Analytics (GA4) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo h($ga_id); ?>"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', '<?php echo h($ga_id); ?>');
</script>
