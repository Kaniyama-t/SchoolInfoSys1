<?php
    $gz = imagecreatefromjpeg('tmp/ground.jpg');
    imagecolorallocate($gz, 0, 0, 0);
    
    $white = imagecolorallocate($gz, 255, 255, 255);
    imagestring($gz, 5,10,10, "TAKUMA Campus", $white);
    imagejpeg($gz, 'tmp/ground_fixed.jpg');
    imagedestroy($gz);
?>

<img src="tmp/ground_fixed.jpg" />

