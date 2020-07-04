<html>
<head>
<title>hidden.php</title>
</head>
<body>
<form name="sample35.php" method="POST">
    <input type="hidden" name="abc" value="隠しフィールドです">
    <input type="submit" value="送信">
</form>
<?php
if (isset($_POST["abc"])) {
    print $_POST["abc"];
}
?>
</body>
</html>
