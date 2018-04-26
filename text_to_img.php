<?php
header('Content-type: image/jpeg');
$image = imagecreatefromjpeg('output.jpg');
$color = imagecolorallocate($image, 255, 255, 255);
$font_path = 'font.ttf';
$text ="This is a sunset";

$size=20;
$angle=0;
$left=75;
$top=300;
imagettftext($image, $size,$angle,$left,$top, $color, $font_path, $text);
imagejpeg($image);
imagedestroy($image);

?>
