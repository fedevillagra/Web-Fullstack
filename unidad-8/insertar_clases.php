<?php
    $unidad=$_POST['unidad'];
    $fecha=$_POST['fecha'];
    include("conection.php");
    mysqli_query($base,"INSERT INTO clases VALUES(DEFAULT,'$unidad','$fecha')");
    header("Location: ver_clases.php");
?>