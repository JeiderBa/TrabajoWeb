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

function ListarUsuarios()
{
    $datos = ListarUsuariosModel();   

    if($datos -> num_rows > 0)
    {
        while($fila = mysqli_fetch_array($datos))
        {
            echo '<tr>';
            echo '<td>' . $fila["nombreUsuario"] . '</td>';
            echo '<td>' . $fila["primerApellido"] . '</td>';
            echo '<td>' . $fila["correo"] . '</td>';
            echo '<td>' . $fila["telefono"] . '</td>';
            echo '<td>' . $fila["descripcion"] . '</td>';    
            echo '<td><a href="mantUsuarioEditar.php?q=' . $fila["idUsuario"] . '">Editar<a/></td>';
            echo '</tr>';
        }
    }
}

function ConsultarDatosUsuario($id)
{
    $datos = ConsultarDatosUsuarioModel($id);   
    return mysqli_fetch_array($datos);
}

function ListarTiposUsuario($tipo)
{
    $datos = ListarTiposUsuarioModel();   

    if($datos -> num_rows > 0)
    {
        while($fila = mysqli_fetch_array($datos))
        {
            if($tipo == $fila["tipoUsuario"])
                echo '<option selected value="' . $fila["tipoUsuario"] . '">' . $fila["descripcion"] . '</option>';
            else
                echo '<option value="' . $fila["tipoUsuario"] . '">' . $fila["descripcion"] . '</option>';
        }
    }
}

if(isset($_POST["btnActualizar"]))
{
    $Nombre = $_POST["txtNombre"];
    $PrimerApellido = $_POST["txtPrimerApellido"];
    $Contrasenna = $_POST["txtContrasenna"];
    $Telefono = $_POST["txtTelefono"];
    $TipoUsuario = $_POST["cboTipoUsuario"];
    $IdUsuario = $_POST["txtIdUsuario"];

    ActualizarUsuarioModel($NombreUsuario,$PrimerApellido,$Contrasenna,$Telefono,$TipoUsuario,$IdUsuario);  
    header("Location: mantUsuario.php");  
}

?>