<?php

    header('Content-Type: image/jpeg');

    $imgname = "images/art/0.jpg";
    $img = imagecreatefromjpeg($imgname);

    imagejpeg($img);

?>