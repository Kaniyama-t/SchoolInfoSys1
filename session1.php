<?php
	session_start();
	$_SESSION['word'] = "香川高等専門学校";
?>
<html>
<head><title></title></head>
<body>
	<p>セッションが開始されました</p>
	<p><code>$_SESSION['word']</code>に代入した値は「<?= $_SESSION['word'] ?>」です。</p>
	<p> <a href="session2.php">session2.php</a> </p>
</body>
</html
