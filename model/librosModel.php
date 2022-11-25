<?php
include_once 'ConnBD.php';

function ListarLibrosModel()
{
    $enlace = OpenDB();

    $procedimiento = "call ListarLibros();";
    $datos = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datos;
}

?>