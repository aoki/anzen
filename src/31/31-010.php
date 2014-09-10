<?php

$user = @$_SERVER['PHP_AUTH_USER'];
$pass = @$_SERVER['PHP_AUTH_PW'];

if (! $user || ! $pass) {
  header('HTTP/1.1 401 Unauthorized');
  header('Content-Type: text/html; charset=utf-8');
  header('WWW-Authenticate: Basic realm="Basic Authentication Sample"');
  echo "ユーザ名とパスワードが必要です";
  exit;
}

?>

<!doctype html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Document</title>
</head>
<body>
認証しました <br/>
ユーザ名: <?php echo htmlspecialchars($user, ENT_NOQUOTES, 'UTF-8'); ?><br/>
パスワード: <?php echo htmlspecialchars($pass, ENT_NOQUOTES, 'UTF-8'); ?><br/>
</body>
</html>
