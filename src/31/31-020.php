<?php

session_start(); // セッションの開始

?>

<!doctype html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>ログインしてください</title>
</head>
<body>

<form method="POST" action="31-021.php">
  <label>
    ユーザ名
    <input name="ID" type="text"/>
  </label><br/>
  <label>
    パスワード
    <input name="PWD" type="password"/>
  </label><br/>
  <input value="login" type="submit"/>
</form>

</body>
</html>
