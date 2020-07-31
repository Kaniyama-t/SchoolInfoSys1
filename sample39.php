<html>
<head>
<title>check.php</title>
</head>
<body>
<form action=sample39.php method=POST>
<input type="checkbox" name="fruit1" value="apple">りんご
<input type="checkbox" name="fruit2" value="orange">みかん
<input type="checkbox" name="fruit3" value="grape">ぶどう
<input type="submit" value="送信"></form>
<?php
foreach ($_POST as $key => $value) {
print $key."=".$value."<br>\n";
}
?>
</body>
 </html>
