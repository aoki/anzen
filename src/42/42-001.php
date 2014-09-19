<?php

$name = isset($_GET['name']) ? $_GET['name'] : '';
// Check character encoding(shift_jis)
if (! mb_check_encoding($name, 'Shift_JIS')) {
  die('文字エンコーディングが不正です');
}

// 文字エンコーディングの変換(Shift_JIS => UTF-8)
$name = mb_convert_encoding($name, 'UTF-8', 'Shift_JIS');

?>

<!doctype html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
Name is <?php echo htmlspecialchars($name, ENT_NOQUOTES, 'UTF-8'); ?>
</body>
</html>
