<?php

// 文字列を全て\uXXXX形式に変換する
function unicode_escape($matches) {
  $u16 = mb_convert_encoding($matches[0], 'UTF-16');
  return preg_replace('/[0-9a-f]{4}/', '\u$0', bin2hex($u16));
}

// 英数字とマイナス、ピリオド以外を\uXXXX形式でエスケープする
function escape_js_string($s) {
  return preg_replace_callback('/[^-\.0-9a-zA-Z]+/u', 'unicode_escape', $s);
}

?>

<!doctype html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
Example
<script>
  alert('<?php echo escape_js_string('吉and吉')?>');
</script>
</body>
</html>
