<html>

<head>
    <title>比較演算子のサンプル</title>
</head>

<body>
    <?php $a = 1;
        $b = 2;
        $c = '2';
        echo '$aは数値の1' . "<br>";
        echo '$bは数値の2' . "<br>";
        echo '$cは文字列の2' .  "<br><br>";
        echo '$a > $b : '  . ($a > $b) . "<br>"; //比較演算子の結果が真の場合「1」
        echo '$a < $b : '  . ($a < $b) . "<br>"; //偽の場合「表示なし」
        echo '$b >= 2 : ' . ($b >= 2) . "<br>";
        echo '$c >= 2 : '  . ($c >= 2) . "<br>";
        echo '$b == $c : '  . ($b == $c) . "<br>";
        echo '$b === $c : '  . ($b === $c) . "<br>";
    ?>
</body>

</html>