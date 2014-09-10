<?php

session_start();
$id = $_SESSION['ID'];
if ($id == '') {
  die('ログインしてください');
}

?>

<!doctype html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Profile</title>
</head>
<body>
User ID: <?php echo htmlspecialchars($id, ENT_NOQUOTES, 'UTF-8'); ?>
</body>
</html>
