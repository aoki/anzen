<?php

session_start();  // セッションの開始
$id = @$_POST['ID'];
$pwd = @$_POST['PWD'];
// IDとパスワードのどちらかが空の場合はログイン失敗
if ($id == '' || $pwd == '') {
  die('ログイン失敗');
}
$_SESSION['ID'] = $id;

?>

<!doctype html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
ログイン成功しました
<a href="31-022.php">プロフィール</a>
</body>
</html>
