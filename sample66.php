<?php
    $gz = imagecreatefromjpeg('tmp/ground.jpg');
    list($w, $h) = getimagesize('tmp/ground.jpg');
    
    $new_h = 200;
    $new_w = $w * (200 / $h);
    
    $thumbnails = imagecreatetruecolor($new_w, $new_h);
    imagecopyresized($thumbnails, $gz, 0,0,0,0,$new_w, $new_h, $w,$h);

    imagejpeg($gz, 'tmp/ground_thumb.jpg');
    imagedestroy($gz);
?>

<img src="tmp/ground.jpg" />
元画像<br />

<img src="tmp/ground_thumb.jpg" />
サムネイル画像<br />


