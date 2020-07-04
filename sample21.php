<?php
    $array_a[0] = 0;
    $array_a[1] = 1;
    $array_a[2] = 2;
    $array_b[0] = 1;
    $array_b[1] = 2;
    $array_b[2] = 3;
    $array_b[3] = 4;
    $array_c = $array_a + $array_b;
    print_r ($array_a);
    //print_r関数：  配列の全要素を出力 (p.96)
    print_r ($array_b);
    print_r ($array_c);
?>