<?php

include_once __DIR__ . '\generales.php';
include_once __DIR__ . '\Controller\UsuarioController.php';

?>

<!DOCTYPE html>
<head>
    <title>Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>

    <?php
        secondNav();
    ?>

    <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
            

            <div class="templatemo-panels">

                <div class="row">
                    <div class="col-md-12">
                    <br/>
                    <div class="btn-group pull-right"> 
                        <a href="#"><button type="button" class="btn btn-info">Añadir Usuario</button></a>
                    </div>
                    
                    <br/><br/><br/>

                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Correo</th>
                                <th>Telefono</th>
                                <th>Tipo Usuario</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                ListarUsuarios();
                            ?>
                        </tbody>
                    </table>

                    </div>
                </div>

            </div>
        </div>
    </div>


</body>

<?php
    footer();
    ?>


</html>