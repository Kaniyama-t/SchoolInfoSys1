<html>
    <head>
        <title>sscanf()関数の例1</title>
    </head>
    <body>
        <?php
        // Your code here!
        list($p) = sscanf("合計金額 3500円", "合計金額%d円");
        ?>
        result: <?= $p ?>
    </body>
</html>


