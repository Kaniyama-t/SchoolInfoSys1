<html>
<head>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<title>2chのようななにか</title>
</head>

<body>
<?php
	include 'Parsedown.php';
	error_reporting(1);
	$pdo = new PDO("mysql:host=localhost; dbname=e17266_db;charset=utf8","e17266","2020php-DB");
	$Parsedown = new Parsedown();

	if($_POST['handle'] != "" and $_POST['message'] != ""){
		setcookie("handle",$_POST['handle']);
		setcookie("editpass",$_POST['editpass']);
		$rs = $pdo->prepare("INSERT INTO message_tbl values(?, ?, ?, ?, ?);");
		$flag = $rs->execute(array(date("Y-m-d H:i:s"), $_POST['handle'], $_POST['message'], substr(strtoupper(hash("md5",$_SERVER["REMOTE_ADDR"])),0,8), $_POST['editpass']));
	}
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand" href="#">2chのようななにか</a>
</nav>

<div class="container" style="margin-top:30px">
<div class="row">
<div class="col-md-4">
<form action="subject18BBS.php" method="POST">
	<div class="card" style="width: 18rem;">
	<div class="card-body">
	<h5 class="card-title">投稿</h5>
	<table>
		<tr><td><input type="text" name="handle" class="form-control" placeholder="ハンドル名" value=<?= $_COOKIE['handle'] ?> /></td></tr>
		<tr><td><textarea cols="40" rows="5" name="message" placeholder="メッセージ" class="form-control"></textarea></td></tr>
<!--
		<tr><td><input type="text" name="editpass" class="form-control" placeholder="編集パスワード(省略可)" value=<?= $_COOKIE['editpass'] ?> /></td></tr> 
-->
		<tr><td><input type="submit" value="投稿" class="btn btn-primary" /></td></tr>
	</table>
	</div></div></form>
</div>
<div class="col-md-6">

<?php
	$sql = "SELECT * FROM message_tbl ORDER BY date DESC;";
	$rs = $pdo->query($sql);
	while($row = $rs->fetch()){
		$name = htmlspecialchars($row[1], ENT_QUOTES);
		$date = htmlspecialchars($row[0], ENT_QUOTES);
		$writer_id = htmlspecialchars($row[3], ENT_QUOTES);
		$msg = htmlspecialchars($row[2], ENT_QUOTES);
		$url = '~(?:(https?)://([^\s<]+)|(www\.[^\s<]+?\.[^\s<]+))(?<![\.,:])~i'; 
		$msg = preg_replace($url, '<a href="$0" target="_blank" title="$0">$0</a>', $msg);
		$msg = $Parsedown->text($msg);
?>
	<div class="card" style="margin-bottom: 15px">
	<div class="card-body">
		<h6 class="card-subtitle mb-2 text-muted"><?= $name ?>さん / <?= $date ?> / ID: <?= $writer_id ?></h6>
		<p class="card-text"><?= nl2br($msg) ?></p>
	</div></div>
<?php
	}
?>
</div>
</div>
</div>
<?php $pdo = null ?>
</body>
</html>
