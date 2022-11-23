<?php
    $name_form=$_POST['nombre'];
    $surname_form=$_POST['apellido'];
    $age_form=$_POST['edad'];
    $email_form=$_POST['correo'];
    $reason_form=$_POST['motivo'];
    $message_form=$_POST['mensaje'];

    include("conection.php");
    if(empty($age_form)){
        mysqli_query($base,"INSERT INTO consultas VALUES (DEFAULT,'$name_form','$surname_form',DEFAULT,'$email_form','$reason_form','$message_form')");
    }else{
        mysqli_query($base,"INSERT INTO consultas VALUES (DEFAULT,'$name_form','$surname_form',$age_form,'$email_form','$reason_form','$message_form')");
    }   
    header("Location: contacto.php?OK#contenido");
?>