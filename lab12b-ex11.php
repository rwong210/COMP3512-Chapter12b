<?php

// tell browser that this is returning an image
header('Content-Type: image/png');

// create an image in with dimensions 500x500
$img = imagecreatetruecolor(500, 500);

// define the rgba color to fill the image with 
$color = imagecolorallocate($img, 238, 71, 49);

// use color to fill the image
imagefilledrectangle($img, 0, 0, 499, 499, $color);

$fontFile = realpath('font/Lato-Medium.ttf');
$fontSize = 24;
$textColor = imagecolorallocate($img, 238, 238, 238);
imagettftext($img, $fontSize, 0, 50, 230, $textColor, $fontFile, "Something Witty");

// output the image to the response stream (back to the browser)
imagepng($img);
