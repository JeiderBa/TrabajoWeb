<?php
include_once '.\generales.php';
include_once __DIR__ . '\Controller\UsuarioController.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Libros</title>
</head>

<body>
    <?php
    secondNav();
    ?>
    <style type="text/css">
        .card-img-top {
            height: 500px;
        }

        .card {
            width: 2%;
        }
    </style>
    <p>
    <div class="card-group">
        <div class="card">
            <thead>
                <tr>
                
                    <th>Nombre Autor</th>
                    <th>Primer apellido</th>
                    <th>Reconocimientos</th>
                    <th>Obras</th>
             
                </tr>
            </thead>
            <tbody>
                <?php
                ListarAutores();
                ?>
            </tbody>
        </div>

    </div>
    <div class="card">
        <img src="../View/images/marquez.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Gabriel García Márquez</h5>
            <p class="card-text">​​ fue un escritor y periodista colombiano. Reconocido principalmente por sus novelas y cuentos,
                también escribió narrativa de no ficción, discursos, reportajes, críticas cinematográficas y memorias.</p>
        </div>

    </div>
    <div class="card">
        <img src="../View/images/jk.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">J.K. Rowling</h5>
            <p class="card-text">Es una conocida filántropa que apoya instituciones benéficas como Comic Relief,
                One Parent Families y Multiple Sclerosis Society of Great Britain.</p>
        </div>
    </div>
    </div>
    <p>

</body>

</html>