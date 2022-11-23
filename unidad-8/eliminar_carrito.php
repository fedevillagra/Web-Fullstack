<?php
    include('recursos.php');
    $carrito->eliminarDelCarrito($_GET['code']);
    header('Location: unidad7.php');
?>