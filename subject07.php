<!--
    自分の誕生日の「曜日」と「 生存秒数」を表示するプログラムを作成しなさい。
    （午前０時０分０秒生まれとして
    
    計算）「誕生日は○曜日です。」「私は○○○秒生存しています。」
-->


<?php
// Your code here!

$day = new DateTime('2001-09-02');
$day2 = new DateTime();
$diff = $day->diff($day2);
$week = array( "日", "月", "火", "水", "木", "金", "土" );

$birthday_week_string = $week[ $day->format("w") ];
$birthday_seconds = $diff->d;
print("誕生日は".$birthday_week_string."曜日です。<br />");
print("私は".((string)60*60*24*$birthday_seconds)."秒生存しています。");
?>
