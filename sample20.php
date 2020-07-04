<?php
    $kanri = array(
        '部屋番号'  => 502 ,
        '入居者名'  => '鈴木一郎',
        '年齢'      => 31,
        '性別'      => '男',
        '入居日'    => '2020/05/22'
    );
    while(
        list($key,$value) = each($kanri)
    ){
        print($key ."=".$value."<br>");
    }
?>