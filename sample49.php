<?php
$color = array('black' =>'#000', 'blue'=>'#00F', 'red'=>'#F00','yellow'=>'#FF0', 'white'=>'#FFF');
$values = array_values($color);
$keys = array_keys($color);
$combined = array_combine($values, $keys);
echo "<PRE>";
// <pre>～</pre>で囲まれた範囲は 半角スペース・改行などがそのまま表示されるprint_r($color);
print_r($combined);
echo "</PRE>";
?>
