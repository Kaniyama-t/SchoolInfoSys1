<?php 
$a = 123 ;
$b = 101 ;
if ($a > 100 and $a > $b) {
print "aは100より大きく，かつbより大きい<br>";
}
if ($a > 100 or $b > 100) {
print "aとbのいずれかは100より大きい<br>";
}
if (!($a == 100)) {
print "aは100ではない<br>";
}
if (($a >= 100 and $b >= 100) or ($a <= 100 and $b <= 100)) {
print "aとbともに100以上，またはaとbともに100以下<br>";
}
?>