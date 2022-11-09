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
            height: 600px;
        }

        .card {
            width: 2%;
        }
    </style>







    <div class="container mt-5">

        <th:block th:each="user : ${autores}">
            <div class="row justify-content-center ">
                <div class="card" style="width: 30rem; margin: 3rem 3rem 3rem 3rem;">
                    <div class="row">
                        <div class="col-md-7 justify-content-center">
                            <?php
                            ListarAutores();
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </th:block>
    </div>


    <p>
    <div class="card-group">
        <div class="card">
            <img src="../View/images/hemingway.jpg" class="card-img-top" alt="..." name="imagenL">
            <div class="card-body">
                <h5 class="card-title">Ernest Hemingway</h5>
                <p class="card-text">Un escritor y periodista estadounidense, uno de los principales novelistas y cuentistas del siglo XX. Su estilo sobrio tuvo una gran influencia
                    sobre la ficción del siglo XX, mientras que su vida de aventuras y su imagen pública dejó huellas en las generaciones posteriores</p>
            </div>

        </div>
        <div class="card">
            <img src="../View/images/marquez.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                
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