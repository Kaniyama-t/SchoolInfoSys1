<html>
<head>
<title>radio.php</title>
</head>
<body>
<form action=sample38.php method="POST" >
    <input type="radio" name="fruit" value="apple">りんご
    <input type="radio" name="fruit" value="orange">みかん
    <input type="submit" value="送信">
</form>
<?php
if (isset($_POST["fruit"])) {
    //foreach($_POST["fruit"] as $value) {
    $value = $_POST["fruit"];
    print $value."<br>\n";
    //}
}
?>
</body>
</html>
