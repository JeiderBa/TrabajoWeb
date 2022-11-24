<?php
include_once 'ConnBD.php';

function ListarAutoresModel()
{
    $enlace = OpenDB();

    $procedimiento = "call ListarAutores();";
    $datos = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datos;
}

?>