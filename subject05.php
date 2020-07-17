<!-- 配列を使って５月のカレンダーを表示するプログラムを作成しなさい -->


<?php
$year = 2020;
$calender = [];
$weel = [];
for ($i = 1; $i <= 31; $i++){
	$timestamp = mktime(0, 0, 0, 6, $i, $year);
	$date = date('w', $timestamp);
	
	// 初日までからの値をセット
	if ($i == 1){
		$week = [];
		while (
			((count($calender)-1) >= 0) &&
			((count($calender)-1) < $date)
		){$week.array_push("");}
		$week.array_push("1");
		$calender.array_push($week);
	}else{
		if ($date == 0){
			$calender.array_push($week);
			$week = [];
		}
		$week.array_push(i);
	}	
}
 ?>
<table>
<?php
foreach ($calender as $week) {
	echo('<tr>\n')
	foreach ($week as $day){
		echo('\t<td>'.$day.'</td>\n');
	}
	echo('</tr>\n');
}
?>
</table>
