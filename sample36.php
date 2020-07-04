<html>
<head>
<title>select.php</title>
</head>
<body>
<form action="sample36.php" method="POST">
    <select name= "fruit">
        <option value="apple">りんご</option>
        <option value="orange">みかん</option>
        <option value="grape">ぶどう</option>
    </select>
    <input type="submit" value="送信">
</form>
<?php
if (isset($_POST["fruit"])) {
    // Undefinedindexを抑止
    print $_POST["fruit"];
}
?>
</body>
</html>
