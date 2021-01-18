<?php
    $image = imagecreatetruecolor(400,400);
    $red = imagecolorallocate($image, 255,0,0);
    imageTTFtext($image, 60,0,20,70,$red,"/usr/share/fonts/vlgothic/VL-Gothic-Regular.ttf", "おはよう！");
    
    $col = imagecolorallocate($image, 255,200,100);
    imagefilledellipse($image, 200, 220, 320, 280, $col);
    
    $white = imagecolorallocate($image, 255,255,255);
    imagefilledrectangle($image, 120,120,160,200,$white);
    imagefilledrectangle($image, 240,120,280,200,$white);
    
    $gray = imagecolorallocate($image, 200,100,100);
    imagefilledarc($image, 200,240,240,200,0,180,$gray,IMG_ARC_PIE);
    
    header("content-type: image/png");
    imagepng($image);
    imagedestroy($image);
?>

