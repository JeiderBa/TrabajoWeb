<?php
include_once __DIR__ . '\..\model\usuarioModel.php';

if(isset($_POST["btnsesion"]))
{
    $correo = $_POST["txtCorreoL"];
    $contrasenna = $_POST["txtContrasennaL"];

    $datos = ValidarUsuarioModel($correo, $contrasenna);   
        
    if($datos -> num_rows > 0)
    {
        $datosUsuario = mysqli_fetch_array($datos);
        $_SESSION["txtCorreoL"] = $datosUsuario["correo"];
        $_SESSION["txtContrasennaL"] = $datosUsuario["contrasenna"];
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
    $NombreUsuario = $_POST["txtnombre"];
    $PrimerApellido = $_POST["txtApellido"];
    $Contrasenna = $_POST["txtContrasenna"];
    $Telefono = $_POST["txtTelefono"];
    $TipoUsuario = $_POST["cboTipoUsuario"];
    $IdUsuario = $_POST["txtIdUsuario"];

    ActualizarUsuarioModel($NombreUsuario,$PrimerApellido,$Contrasenna,$Telefono,$TipoUsuario,$IdUsuario);  
    header("Location: mantUsuario.php");  
}


function ListarAutores()
{
    $datos = ListarAutoresModel();   

    if($datos -> num_rows > 0)
    {
        while($fila = mysqli_fetch_array($datos))
        {
            echo '
            <div class="card mx-auto" style="width: 50%;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h3 class="card-title">Autor</h3>
                <p class="card-text">Aquí podrás encontrar la información principal de nuestros distintos autores.</p>

                <h6 class="card-title">Nombre</h6>
                 <input type="text" class="form-control" id="txtNombre" name="txtNombre" value="'. $fila["nombreAutor"] . '">
                 <h6 class="card-title">Apellido</h6>
                 <input type="text" class="form-control" id="txtNombre" name="txtNombre" value="'. $fila["primerApellido"] . '">
                 <h6 class="card-title">Reconocimientos</h6>
                <input type="text" class="form-control" id="txtNombre" name="txtNombre" value="'. $fila["reconocimientos"] . '">
                <h6 class="card-title">Categoria en que trabaja</h6>
                 <input type="text" class="form-control" id="txtNombre" name="txtNombre" value="'. $fila["obras"] . '">


            </div>
        </div>';

           
        }
    }
}


if(isset($_POST["btnguardar"]))
{

    $TipoUsuario = $_POST["cboTipoUsuario"];
    $nombreUsuario = $_POST["txtNombreR"];
    $primerApellido = $_POST["txtPApellidoR"];
    $segundoApellido = $_POST["txtSApellidoR"];
    $telefono = $_POST["txtTelefonoR"];
    $direccion = $_POST["txtDireccionR"];
    $contrasenna = $_POST["txtContrasennaR"];
    $correo = $_POST["txtCorreoR"];

    $resultado = InsertarUsuarioModel($TipoUsuario,$nombreUsuario,$primerApellido,$segundoApellido,$telefono,$direccion,$contrasenna,$correo); 
    
    
    if($resultado == true)
    {
        EnviarCorreo($Correo, 'Gracias por registrarte a El Asilo del Libro', 'Accede a todas nuestras opciones para leer');
        header("Location: /trabajoWeb/index.php");      
    }
    else
    {
        //Que pasa si algo sale mal??
        header("Location: /trabajoWeb/index.php");  
    } 
}
?>