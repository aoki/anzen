<?php

header('Content-Type: text/html; charset=UTF-8');
$author = $_GET['author'];
$con = pg_connect("host=localhost dbname=wasbook user=postgres password=wasbook");
$sqlstm = "SELECT id, title, author. publisher, date, price FROM books WHERE author = '$author' ORDER BY id";
$rs = pg_query($con, $sqlstm);

?>

<body>
<a href="http://example.jp/44/44-001.php?author=Shakespeare">http://example.jp/44/44-001.php?author=Shakespeare</a>
<tabel border="1">
  <tr>
    <th>蔵書ID</th>
    <th>タイトル</th>
    <th>著者名</th>
    <th>出版社</th>
    <th>出版年</th>
    <th>価格</th>
  </tr>
  <?php

  $maxRows = pg_num_rows($rs);
  for ($i = 0; $i < $maxRows; $i++) {
    $row = pg_fetch_row($rs, $i);
    echo "<tr>\n";
    for ($j = 0; $j < 6; $j++) {
      echo "<td>" . $row[$j] . "</td>\n";
    }
    echo "</tr>\n";
  }
  pg_close($con);

  ?>

</tabel>
</body>
