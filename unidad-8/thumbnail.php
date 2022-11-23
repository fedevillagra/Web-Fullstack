<?php
    $ruta="img/unidad4.jpg";
    $fuente=imagecreatefromjpeg($ruta);

    $ancho=250;
    $alto=250;
    $imgAncho = imagesx ($fuente);
    $imgAlto =imagesy($fuente);

    $imagen=imagecreatetruecolor($ancho,$alto);
    imagecopyresized($imagen,$fuente,0,0,0,0,$ancho,$alto,$imgAncho,$imgAlto);

    imagejpeg($imagen,'img/unidad4_thumbnail.jpg');
?>