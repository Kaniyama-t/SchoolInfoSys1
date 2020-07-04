<html>
<head>
<title>foreachループのサンプル(キー利用)</title>
</head>
<body>
<?php
    $arr = array(100, 101, 102, 103, 104, 105, 106, 107, 108, 109);
    foreach ($arr as $key => $val) {
        echo "キー" .$key ."の値は" .$val ."です<br>";
    }
?>
</body>
</html>
