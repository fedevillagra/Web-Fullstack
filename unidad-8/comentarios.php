<?php
    //ingreso de datos
    date_default_timezone_set("America/Argentina/Buenos_Aires");
    $nombre=$_POST['name'];
    $mail=$_POST['email'];
    $comentario=$_POST['comment'];
    $f=fopen("comentarios.txt", "a");
    $fecha=date("d/m/Y",fileatime("comentarios.txt"));
    $hora=date("H:i",fileatime("comentarios.txt"));

    // Dar formato html a los datos
    $html_format=
'       <div class="list-group-item mb-3">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-3">'.$nombre.' <small style="font-size:small;">('.$mail.')</small></h5>
                <small>'.$hora.' hs </br>'.$fecha.'</small>
            </div>
            <p class="mb-3">'.$comentario.'</p>
        </div>';

    // Escribir en el archivo comentarios.txt
    fwrite($f, $html_format."\n\n");
    fclose($f);

    header("Location: unidad3.php?OK#liveAlertPlaceholder");
?>