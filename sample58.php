<?php
$link = mysql_connect('localhost','e17266','2020php-DB');
if(!$link){
	die("接続失敗".mysql_error());
}
echo('接続成功');
mysql_close($link);
echo('切断');
