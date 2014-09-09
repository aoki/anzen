<?php
    $name = @$_POST['name'];
    $mail = @$_POST['mail'];
    $gender = @$_POST['gender'];
?>

<html>
<head>
    <titile>確認</titile>
</head>
<form action="31-004.php" method="POST">
    氏名: <?php echo htmlspecialchars($name, ENT_NOQUOTES, 'UTF-8'); ?><br/>
    メールアドレス: <?php echo htmlspecialchars($mail, ENT_NOQUOTES, 'UTF-8'); ?><br/>
    性別: <?php echo htmlspecialchars($gender, ENT_NOQUOTES, 'UTF-8'); ?><br/>
    <input name="name" type="hidden" value="<?php echo htmlspecialchars($name, ENT_COMPAT, 'UTF-8'); ?>"/>
    <input name="mail" type="hidden" value="<?php echo htmlspecialchars($mail, ENT_COMPAT, 'UTF-8'); ?>"/>
    <input name="gender" type="hidden" value="<?php echo htmlspecialchars($gender, ENT_COMPAT, 'UTF-8'); ?>"/>
    <input value="登録" type="submit"/>
</form>
</html>
