<?php
    include('recursos.php');
    $listar_datos=$producto->seleccionarUnProducto($_GET['code']);
    $carrito->introducirAlCarrito($listar_datos[0]['producto'],$listar_datos[0]['descripcion'],$listar_datos[0]['precio']);
    header('Location: unidad7.php');
?>