<?php
    $image = imagecreatetruecolor(500,500);
    
    $black = imagecolorallocate($image, 0,0,0);
    $yellow = imagecolorallocate($image, 255,255,0);
    
    imagefill($image, 0, 0, $black);
    imageellipse($image, 250, 250, 400, 400, $yellow);
    
    // $points = array(50,20,25,80,85,45,15,45,75,80);
    
    // imagepolygon($image, $points, 5, $white);
    
    header("content-type: image/png");
    imagepng($image);
    imagedestroy($image);
?>
