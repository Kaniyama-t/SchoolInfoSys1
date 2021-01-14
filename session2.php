<?php
	session_start();
?>
<html>
<head><title></title></head>
<body>
	<p>session01.phpから飛んできました。再びセッションを開始しました。</p>
	<p>受け取ったセッション変数の値はは「<?= $_SESSION['word'] ?>」です。</p>
	<p> <a href="session1.php">session1.php</a> </p>
</body>
</html
