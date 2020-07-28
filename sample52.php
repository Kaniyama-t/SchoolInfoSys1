<?php
$haas = array('田中', '中川', '木下', '中西', '角田');
$pairs = array_chunk($haas, 2);
echo"<pre>";
print_r($pairs);
echo "</pre>";
?>
