<?php

// tell the browser that this is returning an image
header('Content-Type: image/jpeg');

// generate the scaled images if the width querystring is set
if (isset($_GET['width'])) {
    $width = $_GET['width'];

    // create image
    $imgname2 = "images/art/" . $_GET['file'] . ".jpg";
    $newimg = imagecreatefromjpeg($imgname2);

    // scale image
    $newimg = imagescale($newimg, $width);

    // return image
    imagejpeg($newimg);
}

// create main image
$imgname = "images/art/" . $_GET['file'] . ".jpg";
$img = imagecreatefromjpeg($imgname);

//customize the image with Meme 1 Text
$fontFile = realpath('font/Lato-Medium.ttf');
$fontSize = $_GET['size1'];
$textColor = imagecolorallocate($img, 238, 238, 238);
imagettftext($img, $fontSize, 0, 100, 100, $textColor, $fontFile, "$_GET[text1]");

//customize the image with Meme 2 Text
$fontFile = realpath('font/Lato-Medium.ttf');
$fontSize = $_GET['size2'];
$textColor = imagecolorallocate($img, 238, 238, 238);
imagettftext($img, $fontSize, 0, 100, 450, $textColor, $fontFile, "$_GET[text2]");

// return the image
imagejpeg($img);
