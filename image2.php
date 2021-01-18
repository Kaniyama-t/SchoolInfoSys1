<?php
    $image = imagecreatetruecolor(100,100);
    
    $red = imagecolorallocate($image, 255,0,0);
    $white = imagecolorallocate($image, 255,255,255);
    
    imagefilledrectangle($image, 0, 0, 100, 100, $red);
    
    $points = array(50,20,25,80,85,45,15,45,75,80);
    
    imagepolygon($image, $points, 5, $white);
    
    header("content-type: image/png");
    imagepng($image);
    imagedestroy($image);
?>
