<?php
include_once 'ConnBD.php';

function ListarComicsModel()
{
    $enlace = OpenDB();

    $procedimiento = "call ListarComics();";
    $datos = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datos;
}

?>