<?php
    $image = imagecreatetruecolor(150,200);
    
    $black = imagecolorallocate($image, 0,0,0);
    $white = imagecolorallocate($image, 255,255,255);
    $red = imagecolorallocate($image, 255,0,0);
    
    imagefill($image, 0, 0, $white);
    imagestring($image, 1, 10,   0, "Hello 123", $red);
    imagestring($image, 2, 10,  40, "Hello 123", $red);
    imagestring($image, 3, 10,  80, "Hello 123", $red);
    imagestring($image, 4, 10, 120, "Hello 123", $red);
    imagestring($image, 5, 10, 160, "Hello 123", $red);
    
    // $points = array(50,20,25,80,85,45,15,45,75,80);
    
    // imagepolygon($image, $points, 5, $white);
    
    header("content-type: image/png");
    imagepng($image);
    imagedestroy($image);
?>
