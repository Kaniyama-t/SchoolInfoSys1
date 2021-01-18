<?php
    $image = imagecreatetruecolor(150,100);
    
    $black = imagecolorallocate($image, 0,0,0);
    $white = imagecolorallocate($image, 255,255,255);
    
    imagefill($image, 0, 0, $black);
    imagefilledellipse($image, 75, 50, 140, 90, $white);
    
    // $points = array(50,20,25,80,85,45,15,45,75,80);
    
    // imagepolygon($image, $points, 5, $white);
    
    header("content-type: image/png");
    imagepng($image);
    imagedestroy($image);
?>
