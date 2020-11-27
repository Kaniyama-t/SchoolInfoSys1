<html>
<head>
	<title>コンピュータ関連書籍</title>
</head>
<body>
<?php
	$conn = mysql_connect("localhost","e17266","2020php-DB");
	mysql_query("set names utf8", $conn);
	mysql_select_db("e17266_db", $conn);
	$sql = "SELECT * FROM newbook;";
	$rs  = mysql_query($sql, $conn);
	echo('<table border="1">');
	echo('<tr><th>図番号</th><th>タイトル</th><th>著者</th><th>出版者・社</th><th>発行年月</th><th>所在</th></tr>');
	while($row = mysql_fetch_assoc($rs)){
?>
	<tr>
		<td><?= $row['id_no'] ?></td>
		<td><?= $row['title'] ?></td>
		<td><?= $row['author'] ?></td>
		<td><?= $row['publisher'] ?></td>
		<td><?= $row['date'] ?></td>
		<td><?= $row['place'] ?></td>
	</tr>
<?php
	}
	echo('</table>');
	mysql_close($conn);
?>
</body>
</html>
