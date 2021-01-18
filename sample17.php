<?php 
$a = 2;
for ($cnt = 1 ; $cnt <= 10 ; $cnt++) {
    print $cnt . " →" . $a ;
    print "<br>" ;
    $a *= 2 ; // 複合演算子*= を算術演算子に変更すると…
}
print "ループ完了！";
?>