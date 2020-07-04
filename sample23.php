<?php
    function head($mes){
        $mes .= "def";
        echo "\$mes = $mes<br>\n";
    }
    $buf = "abc";
    head($buf);//値渡しの引数
    echo "\$buf = $buf<br>\n";
?>
