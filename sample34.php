<html>
<form name="sample34.php" method="POST">
複数行テキスト<br>
<textarearows=3 cols=20 name="abc"></textarea>
<input type="submit" value="送信">
</form>
<?php
if (isset($_POST["abc"])) {
$abc = $_POST["abc"];
$abc = str_replace("\r \n","\n",$abc);  //WindowsのCRLF改行をLF改行に変換
$abc = str_replace("\r", "\n",$abc);    //MACのCR改行をLF改行に変換
$abc = str_replace("\n", "<br>", $abc); //LF改行を<br>に変換
print $abc;
}
?>
</html>