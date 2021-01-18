<html>
    <head>
        <title>住所展開</title>
    </head>
    <body>
        <?php
        // Your code here!
        $address = "香川県三豊市詫間町551番地";
        
        $addressPrefix = ["県","市","町","番地"];
        $addressParts = [];
        
        $startCursor = 0;
        foreach ($addressPrefix as $prefix){
            $endCursor = mb_strpos($address, $prefix, $startCursor);
            $extractedText =  mb_substr($address, $startCursor, $endCursor - $startCursor);
            array_push($addressParts,$extractedText);
            $startCursor = $endCursor + mb_strlen($prefix);
        }
        ?>
        県名: <?= $addressParts[0] ?>県 <br />
        市名: <?= $addressParts[1] ?>市 <br />
        町名: <?= $addressParts[2] ?>町 <br />
        番地: <?= $addressParts[3] ?>番地 <br />
        <!--建物名:  <br />-->
    </body>
</html>


