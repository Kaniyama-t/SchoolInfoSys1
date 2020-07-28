<html>
<head>
<title>var_dump関数</title>
</head>
<body>
<?php
$text = "hello";
$val= 50.3;
$i = 10.0;
$n = NULL;
$sArray = array(5, 0);
setType($i, "int");
echo "<pre>";
 // <pre>～</pre>で囲まれた範囲は半角スペース・改行などがそのまま表示  される
var_dump($text);
var_dump($val);
var_dump($i);
var_dump($n);
var_dump($sArray);
echo "</pre>";
?>
</body>
</html>
