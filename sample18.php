<?php 
    $a = 2;
    $cnt = 1;
    while ($cnt <= 10) {
        print $cnt." →".$a;
        print "<br>";
        $a *= 2; // 複合演算子*= を算術演算子に変更すると…
        $cnt++; // インクリメント++ を算術演算子に変更すると…
    }
    print "ループ完了！";
?>