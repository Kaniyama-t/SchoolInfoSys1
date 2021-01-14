<?php
	session_start();
	if (!isset($_SESSION{'COUNT'})){
		$_SESSION{'COUNT'} = 1;
	}else{
		$_SESSION{'COUNT'}++;
	}
?>
<html>
<head><title></title></head>
<body>
	<h1>
	あなたは<?= $_SESSION{'COUNT'} ?>回目の訪問者です。<br />
	<a href="<?= $_SERVER{'PHP_SELF'} ?>">カウントを増やす</a>
	</h1>
</body>
</html
