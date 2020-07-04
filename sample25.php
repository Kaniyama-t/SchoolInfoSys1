<?php
$a = "SATO ICHIRO";
print substr($a, 3, 3)."<br>";
 //４文字目から３文字分を取り出す
print substr($a, 0, 7)."<br>";
 //先頭から７文字分を取り出す
print substr($a, 8)."<br>";
 //９文字目から後ろすべてを取り出す
print substr($a, strlen($a) - 5)."<br>";
 //後ろから５文字分を取り出す
$b = strpos($a, "");
//１文字目からスペースの前までを取り出す
print substr($a, 0, $b)."<br>";
?>