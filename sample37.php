<html>
<form action="sample37.php" method="POST">
    <select name="fruit[]" size=3 multiple>
        <option value="apple">りんご</option>
        <option value="orange">みかん</option>
        <option value="grape">ぶどう</option>
    </select>
    <input type="submit" value="送信">
</form>
<?php
if (isset($_POST["fruit"])) {
foreach($_POST['fruit'] as $value) {
print$value."<br>\n";
//配列の内容を表示
}
}
?>
</html>