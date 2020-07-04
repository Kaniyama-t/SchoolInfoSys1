<?php
function get_youbi($ ymd){
    $week = array('日'，'月'，'火'，'水'，'木'，'金'，'土');
    $youbi= date("w",  strtotime($ ymd));   //date関数(p.316)
    return $week[$youbi];                   //strtotime関数(p.318)
}
$ymd= "2020/05/29";                         //引数に日付をセット
$youbi= get_youbi($ ymd);                   //曜日関数をコール
print($ymd."は" .$youbi."曜日です。");       // 日付と曜日を表示
?>
