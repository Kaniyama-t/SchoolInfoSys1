<html>
<head>
<title>text.php</title>
</head>
<body>
<form name="sample33.php" method="POST"><br>
    <input type="text" name="abc">
    <input type="submit" value="送信">
</form>
<?php
//警告Undefinedindexを抑止
if (isset($_POST["abc"])) {
    print$_POST["abc"];// 値表示
}
?>
</body>
</html>