<html>
    <head>
        <title>mb_strstr()関数の例</title>
    </head>
    <body>
        <?php
        // Your code here!
        if(mb_strstr("私の名前は○○です。","○○")){
        ?>
        result: [ <?= mb_strstr("私の名前は○○です。","○○") ?> ]
        <?php 
        }else{
        ?>
        result: not found
	<?php
	}
	?>
    </body>
</html>


