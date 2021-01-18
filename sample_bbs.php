<html>
<head><title>DBで作るBBS</title></head>

<body>
<?php error_reporting(1);?>
<form action="sample_bbs.php" method="POST">
	<table>
		<tr><td><font color="blue">ハンドル名とメッセージを入力して投稿ボタンを押す</font></td></tr>
		<tr><td>ハンドル名: <input type="text" name="handle" /></td></tr>
		<tr><td>以下にメッセージを入力してください。</td></tr>
		<tr><td><textarea cols="60" rows="5" name="message"></textarea></td></tr>
		<tr><td><input type="submit" value="投稿" /></td></tr>
	</table>

<?php
	$pdo = new PDO("mysql:host=localhost; dbname=e17266_db;charset=utf8","e17266","2020php-DB");

	if($_POST['handle'] != "" and $_POST['message'] != ""){
		$rs = $pdo->prepare("INSERT INTO message_tbl values(?, ?, ?);");
		$flag = $rs->execute(array(date("Y-m-d H:i:s"), $_POST['handle'], $_POST['message']));
	}
?>

<table border="1">
	<tr><th>日時</th><th>ハンドル名</th><th>メッセージ</th></tr>
<?php
	$sql = "SELECT * FROM message_tbl;";
	$rs = $pdo->query($sql);
	while($row = $rs->fetch()){
?>
	<tr>
		<td><?= $row[0] ?></td>
		<td><?= $row[1] ?></td>
		<td width="500"><?= $row[2] ?></td>
	</tr>
<?php
	}
?>
</table>
<?php $pdo = null ?>
</body>
</html>
