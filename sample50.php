<?php
$haas= array('田中', '中川', '木下', '中西', '角田');
$paas = array('吉井', '田中', '玉木', '中西');
echo "<PRE>";
print_r(array_intersect($haas, $paas));
echo "</PRE>";
 ?>
