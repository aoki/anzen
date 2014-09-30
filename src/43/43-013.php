<?php

session_start();

function escape_js($s) {
  return mb_ereg_replace('([\\\\\'"])', '\\\1', $s);
}

?>

<!doctype html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
<script src="../js/libs/jquery-2.1.1.min.js"></script>
<a href="http://example.jp/43/43-013.php?name=%3C/script%3E%3Cscript%3Ealert(document.cookie);//">http://example.jp/43/43-013.php?name=%3C/script%3E%3Cscript%3Ealert(document.cookie);//</a><br/>
こんにちは <span id="name"></span>さん
<script>
  $('#name').text('<?php echo escape_js($_GET['name']); ?>');
</script>
</body>
</html>
