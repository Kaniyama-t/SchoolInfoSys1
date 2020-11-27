<html>
<head>
	<title>入門：コンピュータ関連書籍</title>
</head>
<body>
<?php
	$pdo = new PDO("mysql:host=localhost; dbname=e17266_db;charset=utf8","e17266","2020php-DB");
	$sql = "SELECT * FROM newbook where title like '%入門%'";
	$rs  = $pdo->query($sql);
	echo('<table border="1">');
	echo('<tr><th>図番号</th><th>タイトル</th><th>著者</th><th>出版者・社</th><th>発行年月</th><th>所在</th></tr>');
	while($row = $rs->fetch()){
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
	$pdo = null;
?>
</body>
</html>
