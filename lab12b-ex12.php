<?php

    header('Content-Type: image/jpeg');

    $imgname = "images/art/0.jpg";
    $img = imagecreatefromjpeg($imgname);
    $newimg = imagescale($img, 600, 600);

    $fontFile = realpath('font/Lato-Medium.ttf');
    $fontSize = 16;
    $textColor = imagecolorallocate($newimg, 238, 238, 238);
    imagettftext($newimg, $fontSize, 0, 250, 160, $textColor, $fontFile, "Anyone want a drink of this?");


    imagejpeg($newimg);

?>