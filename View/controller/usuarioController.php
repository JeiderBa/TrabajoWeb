<?php

 
include_once __DIR__ . '\..\model\usuarioModel.php';

if(isset($_POST["btnsesion"]))
{
    $correo = $_POST["form3Example3"];
    $contrasenna = $_POST["form3Example4"];

    $datos = ValidarUsuarioModel($correo, $contrasenna);   
        
    if($datos -> num_rows > 0)
    {
        $datosUsuario = mysqli_fetch_array($datos);
        $_SESSION["form3Example3"] = $datosUsuario["correo"];
        $_SESSION["form3Example4"] = $datosUsuario["contrasenna"];
        header("Location: ../index.php");
    }
    else
    {
        header("Location: login.php");
    }
}
?>