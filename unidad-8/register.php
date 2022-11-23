<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$mail = $_POST['mail'];
$password = password_hash($_POST['clave'], PASSWORD_DEFAULT, array('cost'=> 5));
$sexo = $_POST['sexo'];
$nac = $_POST['nac'];

date_default_timezone_set("America/Argentina/Buenos_Aires");
$fecha_actual=date("Y-m-d"); 

include('conection.php');
//si la fecha de nacimiento es menor a la actual y el mail no esta registrado cargo los datos
if($nac<$fecha_actual){
        $consulta_mail_existe=mysqli_query($base, "SELECT correo FROM registrar WHERE correo='$mail'");
    if(mysqli_num_rows($consulta_mail_existe) == 0){
        mysqli_query($base, "INSERT INTO registrar VALUES (DEFAULT,'$nombre','$apellido','$mail','$password','$sexo','$nac')");
        header("Location: unidad8.php?ok");
    }else{
        header("Location: unidad8.php?mail_ya_registrado");
    }
}else{
    header("Location: unidad8.php?fecha_invalida");
}

?>