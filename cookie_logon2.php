<?php
	$u = $_POST["user"];
	setcookie("userID",$u,time()+(60*60*24*365));
?>
<html>
	<head><title>ようこそ</title></head>
	<body>
		ようこそ！<?php echo $u; ?>さん
	</body>
</html>
