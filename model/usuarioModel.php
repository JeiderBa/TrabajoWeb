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

function ListarUsuariosModel()
{
    $enlace = OpenDB();

    $procedimiento = "call ListarUsuarios();";
    $datos = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datos;
}

function ConsultarDatosUsuarioModel($idUsuario)
{
    $enlace = OpenDB();

    $procedimiento = "call ConsultarUsuarioId($idUsuario);";
    $datos = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datos;
}

function ListarTiposUsuarioModel()
{
    $enlace = OpenDB();

    $procedimiento = "call ListarTipoUsuario();";
    $datos = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datos;
}

function ActualizarUsuarioModel($NombreUsuario,$PrimerApellido,$Contrasenna,$Telefono,$TipoUsuario,$IdUsuario)
{
    $enlace = OpenDB();

    $procedimiento = "call ActualizarUsuario('$NombreUsuario', '$PrimerApellido', '$Telefono', '$Contrasenna', $TipoUsuario,$IdUsuario);";
    $enlace -> query($procedimiento);

    CloseDB($enlace);
}

function ListarAutoresModel()
{
    $enlace = OpenDB();

    $procedimiento = "call ListarAutores();";
    $datos = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datos;
}

function InsertarUsuarioModel($TipoUsuario,$nombreUsuario,$primerApellido,$segundoApellido,$telefono,$direccion,$contrasenna,$correo)
{
    $enlace = OpenDB();
    $resultado = false;


    $procedimiento = "call InsertarUsuario($TipoUsuario,'$nombreUsuario','$primerApellido','$segundoApellido','$telefono','$direccion','$contrasenna','$correo');";
    if($enlace -> query($procedimiento))
    {
        $resultado = true; 
    }

    CloseDB($enlace);
}
