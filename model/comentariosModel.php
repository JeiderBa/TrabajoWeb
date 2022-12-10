<?php
include_once 'ConnBD.php';

function InsertarComentariosModel($Nombre,$Correo,$Comentario)
{
    $enlace = OpenDB();
    $resultado = false;


    $procedimiento = "call InsertarComentarios('$Nombre','$Correo','$Comentario');";
    if($enlace -> query($procedimiento))
    {
        $resultado = true; 
    }

    CloseDB($enlace);
}