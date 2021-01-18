<?php
$createSB = <<< DDL
CREATE TABLE seibetu
(
	id int PRIMARY KEY,
	sex varchar(10)
)
DDL;

$link = mysql_connect('localhost','e17266','2020php-DB');
if(!$link){
	die("接続失敗".mysql_error());
}
echo('接続成功');
mysql_query("SET NAMES utf8;", $link);
mysql_select_db("e17266_db", $link);
mysql_query($createSB,$link);
mysql_query('INSERT INTO seibetu VALUES(1, "男性");', $link);
mysql_query('INSERT INTO seibetu VALUES(2, "女性");', $link);
mysql_close($link);
echo('切断');
