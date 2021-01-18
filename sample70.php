<html>
    <head>
        <title>sscanf()関数の例3</title>
    </head>
    <body>
        <?php
        // Your code here!
        list($s, $f) = sscanf("NHK-FM 82.5MHz", "%s %f MHz");
        ?>
        局名: <?= $s ?> <br />
        周波数: <?= $f ?> <br />
    </body>
</html>


