<?php

include_once __DIR__ . '\generales.php';
include_once __DIR__ . '\Controller\UsuarioController.php';

$datos = ConsultarDatosUsuario($_GET["q"]);

?>

<!DOCTYPE html>

<head>
    <title>Editar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <form role="form" action="" method="post">

        <?php
        secondNav();
    ?>

        <div class="templatemo-content-wrapper">
            <div class="templatemo-content">


                <div class="templatemo-panels">

                    <br /><br />

                    <input type="hidden" value="<?php echo $datos["idUsuario"] ?>" id="txtIdUsuario" name="txtIdUsuario">

                    <div class="col-md-12">

                        <div class="row form-group">
                            <div class="col-md-1 margin-bottom-15">
                            </div>

                            <div class="col-md-3 margin-bottom-15">
                                <label class="control-label">Nombre</label>
                                <input type="text" class="form-control" id="txtNombre" name="txtNombre"
                                    value="<?php echo $datos["nombreUsuario"] ?>">
                            </div>

                            <div class="col-md-3 margin-bottom-15">
                                <label class="control-label">Apellido</label>
                                <input type="text" class="form-control" id="txtApellido" name="txtApellido"
                                    value="<?php echo $datos["primerApellido"] ?>">
                            </div>

                            <div class="col-md-3 margin-bottom-15">
                                <label class="control-label">Correo</label>
                                <input type="text" class="form-control" id="txtCorreo" name="txtCorreo"
                                    readonly="readonly" value="<?php echo $datos["correo"] ?>">
                            </div>

                            <div class="col-md-1 margin-bottom-15">
                            </div>
                        </div>

                    </div>


                    <div class="col-md-12">

                        <div class="row form-group">
                            <div class="col-md-1 margin-bottom-15">
                            </div>

                            <div class="col-md-3 margin-bottom-15">
                                <label class="control-label">Telefono</label>
                                <input type="text" class="form-control" id="txtTelefono" name="txtTelefono"
                                    value="<?php echo $datos["telefono"] ?>">
                            </div>

                            <div class="col-md-3 margin-bottom-15">
                                <label class="control-label">Tipo Usuario</label>
                                <select class="form-control" id="cboTipoUsuario" name="cboTipoUsuario">
                                    <?php 
                                ListarTiposUsuario($datos["tipoUsuario"]); 
                                ?>
                                </select>
                            </div>

                            <div class="col-md-3 margin-bottom-15">
                                <label class="control-label">Contraseña</label>
                                <input type="text" class="form-control" id="txtContrasenna" name="txtContrasenna"
                                    value="<?php echo $datos["contrasenna"] ?>">
                            </div>

                            <div class="col-md-1 margin-bottom-15">
                            </div>
                        </div>

                    </div>


                    <div class="col-md-12">
                        <div class="col-md-8 margin-bottom-15">
                        </div>
                        <div class="col-md-3 margin-bottom-15">
                            <input type="submit" value="Guardar" class="btn btn-success" id="btnActualizar"
                                name="btnActualizar">
                            <a href="mantUsuario.php" class="btn btn-info">Cancelar</a>
                        </div>
                        <div class="col-md-1 margin-bottom-15">
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </form>
</body>

<?php
    footer();
    ?>

</html>