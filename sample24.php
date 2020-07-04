<?php
    function head(&$mes){
        $mes.= "def";
        print "\$mes= $mes<br>";
    }
    $buf = "abc";
    head($buf);//参照渡しの引数(&をつけない)
    print "\$buf = $buf<br>";
?>
