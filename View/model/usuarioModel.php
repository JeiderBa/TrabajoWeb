<?php
include_once 'ConnBD.php';
function ValidarUsuarioModel($correo, $contrasenna)
{
    $enlace = OpenDB();

    $procedimiento = "call consultarUsuario('$correo', '$contrasenna');";
    $datos = $enlace ->query($procedimiento);

    CloseDB($enlace);
    return $datos;
}
?>