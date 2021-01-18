<?php
    for($x=0, $y=0,$z=0; $x*$y<10 ; ++$x,++$y,++$z){
        $menseki = $x * $y;
        $taiseki = $x * $y * $z;
        print("面積は".$menseki."です<br />");
        print("体積は".$taiseki."です<br />");
    }
?>