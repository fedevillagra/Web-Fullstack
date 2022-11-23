<?php
    $base = "img/dog-4415649_1280.jpg";
    $marca = "img/marca.png";

    $img_base = imagecreatefromjpeg($base);
    $img_marca = imagecreatefrompng($marca);

    imagecopy($img_base,$img_marca,550,150,0,0,imagesx($img_marca),imagesy($img_marca));

    header("Content-type: image/jpeg");
    imagejpeg($img_base);
?>