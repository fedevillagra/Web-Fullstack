<?php
    session_start();
    if($_POST['codigo_captcha']==$_SESSION['captcha']){

        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $email=$_POST['email'];
        $consulta=$_POST['consulta'];
        include('conection.php');
        mysqli_query($base,"INSERT INTO consultas VALUES (DEFAULT,'$nombre','$apellido','$email','$consulta')");

        header("Location: unidad5.php?OK");
    }else{
        header("Location: unidad5.php?error");
    }
?>