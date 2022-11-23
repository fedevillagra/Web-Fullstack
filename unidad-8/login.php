<?php
session_start();
include('conection.php');
include("password.php");
include ('clases/clsFiltroSql.php');
$filtro = new clsFiltroSql($base);
$_POST = $filtro->filtrar($_POST);
$mail = $_POST['mail'];
$clave = $_POST['clave'];
$mail = $filtro->filtrar($mail);
$clave = $filtro->filtrar($clave);

$consulta=mysqli_query($base, "SELECT * FROM registrar WHERE correo='$mail'");

//verifico correo
if (mysqli_num_rows($consulta) !=0){
    //verifico clave codificada
    $codificado = mysqli_fetch_assoc($consulta);
    $verificar = password_verify($clave, $codificado['clave']);
    if ($verificar) {
        $_SESSION['correo'] = $mail;
        $_SESSION['nombre']=$codificado['nombre'];
        $_SESSION['apellido']=$codificado['apellido'];
        $_SESSION['sexo']=$codificado['sexo'];
        $_SESSION['nacimiento']=$codificado['nacimiento'];
        header("Location: sesion_iniciada.php");
        
    } else {
        header("Location: unidad8.php?error_clave");
    }
}else{
    header("Location: unidad8.php?error_correo");
}

?>