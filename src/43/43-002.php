<!doctype html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>○○市粗大ごみ受付センター</title>
</head>
<body>

<form method="POST" action="">
  <label>
    氏名
    <input size="20" name="name" value="<?php echo @$_POST['name']; ?>"/>
  </label><br/>
  <label>
    住所
    <input size="20" name="addr" value="<?php echo @$_POST['addr']; ?>"/>
  </label><br/>
  <label>
    電話番号
    <input size="20" name="tel" value="<?php echo @$_POST['tel']; ?>"/>
  </label><br/>
  <label>
    品目
    <input size="10" name="kind" value="<?php echo @$_POST['kind']; ?>"/>
  </label><br/>
  <label>
    数量
    <input size="5" name="num" value="<?php echo @$_POST['num']; ?>"/>
  </label><br/>
  <input value="Submit" type="submit"/>

</form>

</body>
</html>
<?php


?>
