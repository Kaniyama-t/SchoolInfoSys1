<?php
//乱数ジェネレータを初期化
srand(((int)microtime()) * 1000000);    //現在時刻をマイクロ秒で出力×1000000

//1～6の範囲の乱数を4つ 出力
print rand(1, 6)."<BR>";
print rand(1, 6)."<BR>";
print rand(1, 6)."<BR>";
print rand(1, 6)."<BR>";
?>
