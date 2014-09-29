<!doctype html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <script>
    function init(a) {} // ダミーの関数
  </script>
</head>
<body onload="init('<?php echo htmlspecialchars($_GET['name'], ENT_QUOTES) ?>')">
<a href="http://example.jp/43/43-012.php?name=%27);alert(document.cookie)//">http://example.jp/43/43-012.php?name=%27);alert(document.cookie)//</a>
<p><?php echo htmlspecialchars($_GET['name'], ENT_QUOTES) ?></p>
</body>
</html>
