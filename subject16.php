<html>
<head>
	<title>コンピュータ関連書籍</title>
</head>
<body>
<h1>検索結果</h1>
<p>検索結果を以下に示します．</p>
<a href="./subject16.html">検索画面に戻る</a>
<hr />
<?php
	ini_set('xdebug.var_display_max_children', -1);
	ini_set('xdebug.var_display_max_data', -1);
	ini_set('xdebug.var_display_max_depth', -1);

	$s = htmlspecialchars($_GET["s"]);
	$conn = mysql_connect("localhost","e17266","2020php-DB");
	mysql_query("set names utf8", $conn);
	mysql_select_db("e17266_db", $conn);
	$sql = "SELECT * FROM newbook WHERE title LIKE '%".$s."%';";
	$rs  = mysql_query($sql, $conn);
	//echo($rs);
	var_dump(mysql_fetch_array($rs));
	echo('<table border="1">');
	echo('<tr><th>図番号</th><th>タイトル</th><th>著者</th><th>出版者・社</th><th>発行年月</th><th>所在</th></tr>');
	//for($i=0;$i<count($src);$i++){
	while($src = mysql_fetch_array($rs)){
?>
	<tr>
		<td><?= $src['id_no'] ?></td>
		<td><?= $src['title'] ?></td>
		<td><?= $src['author'] ?></td>
		<td><?= $src['publisher'] ?></td>
		<td><?= $src['date'] ?></td>
		<td><?= $src['place'] ?></td>
	</tr>
<?php
	}
	echo('</table>');
	mysql_close($conn);
?>
</body>
</html>
