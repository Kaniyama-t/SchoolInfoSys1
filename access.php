<?php
	$access_before=$_COOKIE['access_time'];
	$access_current=date("Y/m/d H:i:s");
	setcookie("access_time", $access_current, time()+60);
	if (!isset($access_before)){
		$access_before = "なし";
	}
?>
<html>
	<head><title>アクセス履歴</title></head>
	<body>
		<h1>一分以内のアクセス</h1><br /><br />
		前回のアクセスは <?= $access_before ?> <br />
		今回のアクセスは <?= $access_current ?>
	</body>
</html>
