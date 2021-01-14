<?php
    $image = imagecreatetruecolor(500,500);
    
    $red = imagecolorallocate($image, 255,0,0);
    imagepolygon($image, array(50,450,450,450,450,50),3,$red);
    
    header("content-type: image/png");
    imagepng($image);
    imagedestroy($image);
?>
