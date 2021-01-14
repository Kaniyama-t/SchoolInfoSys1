<?php
	$memo = $_COOKIE["memo"];
	if (!isset($memo)){
		$memo = $_POST['memo'];
	}else{
		$memo = $memo."<br />".$_POST['memo'];
	}
	setcookie("memo",$memo,time()+60);
?>
<html>
	<head><title>一分メモ</title></head>
	<body>
		一分メモ<br />
		<form action="memo.php" method="POST">
			<input type="text" name="memo" size=50>
			<input type="submit" value="登録">
		</form>
		<?php echo $memo; ?>
	</body>
</html>
