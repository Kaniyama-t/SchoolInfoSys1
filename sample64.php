<html>
<head><title>PDOデータ抽出</title></head>
<body>
<?php
	$pdo = new PDO("mysql:host=localhost; dbname=e17266_db;charset=utf8","e17266","2020php-DB");
	$sql = "select id, name from customer;";
	$rs = $pdo->query($sql);
	while($row = $rs->fetch()){
		echo("id: ".$row[0]." name: ".$row[1]."<br />\n");
	}
	$pdo = null;
?>
</body>
</html>
