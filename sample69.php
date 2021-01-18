<html>
    <head>
        <title>sscanf()関数の例2</title>
    </head>
    <body>
        <?php
        // Your code here!
        list($n1, $n2, $n3) = sscanf("03-1111-2222", "%2s-%d-%d");
        ?>
        市外局番: <?= $n1 ?> <br />
        市内局番: <?= $n2 ?> <br />
        番号: <?= $n3 ?> <br />
    </body>
</html>


