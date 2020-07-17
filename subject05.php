<!-- 配列を使って５月のカレンダーを表示するプログラムを作成しなさい -->


<?php
$year = 2020;
$calender = array();
$weel = array();
for ($i = 1; $i <= 31; $i++){
	$timestamp = mktime(0, 0, 0, 6, $i, $year);
	$date = date("w", $timestamp);
	
	// --- 初日なら... ------------------------------
	if ($i == 1){
		$week = array();
		for($dd = 0;$dd < $date;$dd++)
		    array_push($week," ");
	}
	
	// --- 週初めなら... ------------------------------
	if ($date == 0){
		array_push($calender,$week);
		$week = array();
	}

	// --- 日追加 -------------------------------------
	array_push($week,(string)$i);
}
if(count($week) > 0)
	array_push($calender,$week);
 ?>
<html>
<head>
<style>
table, td, th {
border: 2px #000000 solid;
}
</style>
</head>
<body>
<table>
<tr>
	<th>日</th>
	<th>月</th>
	<th>火</th>
	<th>水</th>
	<th>木</th>
	<th>金</th>
	<th>土</th>
</tr>
<?php
foreach ($calender as $week) {
	print("<tr>\n");
	foreach ($week as $day) {
		print("	<td>".$day."</td>\n");
	}
	print("</tr>\n");
}
?>
</table>
</body>
</html>