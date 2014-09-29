<!doctype html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
<a href="http://example.jp/43/43-010.php?url=javascript:alert(document.cookie)">http://example.jp/43/43-010.php?url=javascript:alert(document.cookie)</a><br/>
<a href="<?php echo htmlspecialchars($_GET['url']); ?>">ブックマーク</a>
</body>
</html>
