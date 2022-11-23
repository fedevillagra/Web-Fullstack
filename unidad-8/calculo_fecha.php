<?php
    $dia=$_POST['day'];
    $mes=$_POST['month'];
    $anio=$_POST['year'];
    if(checkdate($mes, $dia, $anio)){
        
        $fecha_final=date("$anio/$mes/$dia");

        date_default_timezone_set("America/Argentina/Buenos_Aires");
        $fecha_actual=date("Y-m-d");
               
        $s=strtotime($fecha_final)-strtotime($fecha_actual);
        $d=intval($s/86400);

        $f=date("$dia/$mes/$anio");
        header("Location: unidad2.php?dias=$d&fecha=$f");
    }else{
        header("Location: unidad2.php?fecha_invalida");
    }

?>