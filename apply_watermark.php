<?php

$image = imagecreatefromjpeg($argv[2]);


$addWatermark = function($image, $text, $fontSize = 14) {
    $color = imagecolorallocate($image, 0,0,0);
    imagettftext (
        $image,
        $fontSize,
        0,
        imagesx($image) - 150,
        imagesy($image) - 20,
        $color,
        'arial.ttf',
        $text
    );
};

$addWatermark($image, $argv[1]);

imagepng($image, __DIR__.'/results/'.basename($argv[2]));
imagedestroy($image);
