<html>
    <head>
        <title>str_replace()関数の例2</title>
    </head>
    <body>
        <?php
        // Your code here!
        $msg = "I really need sincerity, belief and beneficence.";
        
        $tatemae = array("sincerity", "belief", "beneficence");
        $honne   = array("Drag", "Sex", "Rock'n Roll");
        ?>
        <?= str_replace($tatemae, $honne, $msg) ?> <br />
    </body>
</html>


