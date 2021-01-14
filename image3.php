<?php
    $image = imagecreatetruecolor(100,100);
    
    $blue = imagecolorallocate($image, 0,0,255);

    imagefill($image, 0, 0, $blue);
    
    // $points = array(50,20,25,80,85,45,15,45,75,80);
    
    // imagepolygon($image, $points, 5, $white);
    
    header("content-type: image/png");
    imagepng($image);
    imagedestroy($image);
?>
