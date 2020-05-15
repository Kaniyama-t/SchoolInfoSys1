<?php
    // 問題文から，月末を考えるプログラムだと仮定する
    // 同様に．平年での月末を求めるものとする．
    for($i=1;$i<=12;$i++){
        if($i==1|$i==3|$i==5|$i==7|$i==8|$i==10|$i==12)
            print($i."月31日");
        elseif($i==4|$i==6|$i==9|$i==11)
            print($i."月30日");
        elseif($i==2)
            print($i."月28日");
        else
            print("ERROR: length over");
        print("<br />");
    }
?>