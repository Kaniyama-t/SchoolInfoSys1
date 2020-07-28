<?php
$haas = array('田中', '中川', '木下', '中西', '角田');
$saas = array('吉井', '玉井', '江川');
$newusr = array_merge($haas, $saas);
echo "<pre>";
print_r($newusr);
echo "</pre>";
?>
