<html>
<head>
<title>数値のソート</title>
</head>
<body>
<?php
$a = array(10, 8, 35,100, 66, -1);  // 数値データ
echo '<pre>';                       // 改行 をそのまま表示
print_r($a);                        // ソート前
echo '</pre>';
sort($a);
echo '<pre>';
print_r($a);                        // ソート後
echo '</pre>';
rsort($a);
echo '<pre>';
print_r($a);                        // 逆順ソート後
echo '</pre>';
?>
</body>
</html>
