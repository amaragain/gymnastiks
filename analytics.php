<?php
  // Analytics should run only in production
  // Pass "dev_test" as a queryparam to test in production, so that analytics won't run
  if( ( $_SERVER['SERVER_NAME'] == 'www.viswajitnikhathgymnastiks.in' ||  $_SERVER['SERVER_NAME'] == 'viswajitnikhathgymnastiks.in' ) && !(strpos($_SERVER['QUERY_STRING'], 'dev_test') > -1) )
  {
?>


<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-8TQEG03W8V"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-8TQEG03W8V');
</script>

<?php
  }
?>
