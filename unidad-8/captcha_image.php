<?php
    session_start();
    header("Content-type: image/jpeg");                             //la extension de este archivo
    $image=imagecreate(90,40);                                     //se crea la imagen captcha con sus dimensiones
    imagecolorallocate($image,255, 80, 80);                         //color de fondo del captcha
    $text_color=imagecolorallocate($image,255, 255, 255);               //color de letra
    imagestring($image,5,20,10,$_SESSION['captcha'],$text_color);   //meto el codigo en el fondo creado
    imagejpeg($image);
?>