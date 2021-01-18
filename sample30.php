<?php
//現在日時を取得
$now = getdate();
//日時の各要素を表示
print($now["year"]."年<br>");
print($now["mon"]."月<br>");
print($now["mday"]."日<br>");
print($now["hours"]."時<br>");
print($now["minutes"]."分<br>");
print($now["seconds"]."秒<br>");
?>
