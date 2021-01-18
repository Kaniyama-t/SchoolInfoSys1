
<?php
$link = mysql_connect('localhost','e17266','2020php-DB');
if(!$link){
    die("接続失敗".mysql_error());
}
echo('接続成功');
mysql_select_db("e17266_db",$link);
$sql='select * from customer;';
mysql_query("SET NAMES utf8;", $link);
$retval = mysql_query($sql, $link);
echo('<table border="1">');
while($row = mysql_fetch_assoc($retval)){
    echo('<tr>');
    foreach ($row as $key => $val){
        echo('<td>'.$key.' = <b>'.$val.'</b></td>');
    }
    echo('</tr>');
}
echo('</table>');
mysql_close($link);
echo('切断');
?>
