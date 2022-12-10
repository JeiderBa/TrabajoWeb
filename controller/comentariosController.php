<?php

if (session_status() == PHP_SESSION_NONE)
    session_start();

include_once __DIR__ . '\..\Model\comentariosModel.php';

if(isset($_POST["btnEnviar"]))
{
    $Nombre = $_POST["txtNombreC"];
    $Correo = $_POST["txtCorreoC"];
    $Comentario = $_POST["txtComentario"];

    InsertarComentariosModel($Nombre,$Correo,$Comentario);  
    header("Location: /trabajoWeb/index.php");  
}
?>