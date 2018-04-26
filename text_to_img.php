<?php
header('Content-type: image/jpeg');
$our_image = imagecreatefromjpeg('output.jpg');
$white_color = imagecolorallocate($our_image, 255, 255, 255);
$font_path = 'font.ttf';
$text ="This is a sunset";

$size=20;
$angle=0;
$left=75;
$top=300;
imagettftext($our_image, $size,$angle,$left,$top, $white_color, $font_path, $text);
imagejpeg($our_image);
imagedestroy($our_image);

?>
