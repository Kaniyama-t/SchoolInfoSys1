<html>

<head>
    <title>定数サンプル</title>
</head>

<body>
    <?php
        define("TAX", 5); // 定数
        $price = 1500;// 変数
        $quantity = 2;// 変数
    ?>
    <table border="1">
        <tr>
            <TH>価格（円）</TH>
            <TH>数量（個）</TH>
            <TH>税率（％）</TH>
            <TH>合計（円）</TH>
        </tr>
        <tr>
            <td><?= $price ?></td>
            <td><?= $quantity ?></td>
            <td><?= TAX ?></td>
            <td><?= $price * $quantity * (1 + (TAX / 100)) ?></td>
        </tr>
    </table>
</body>
</html>