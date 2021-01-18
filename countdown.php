<?php
	session_start();
	if (!isset($_SESSION{'COUNT'}) || $_SESSION{'COUNT'} <= 1){
		unset($_SESSION{'COUNT'});
		$_SESSION{'COUNT'} = 11;
	}
	$_SESSION{'COUNT'}--;

?>
<html>
<head><title></title></head>
<body>
	<h1>
	あなたは<?= $_SESSION{'COUNT'} ?>回目の訪問者です。<br />
	<a href="<?= $_SERVER{'PHP_SELF'} ?>">カウントを減らす</a>
	</h1>
</body>
</html
