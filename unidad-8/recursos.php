<?php
    include('clases/Base de Datos.php');
    include('clases/productos.php');
    include('clases/carrito.php');

    define('SERVIDOR','localhost');
    define('USUARIO','root');
    define('CLAVE','');
    define('BASE','phpavanzado');
    
    $base=new Basededatos(SERVIDOR,USUARIO,CLAVE,BASE);
    $producto=new Productos($base);
    $carrito=new Carrito($base);
    
?>