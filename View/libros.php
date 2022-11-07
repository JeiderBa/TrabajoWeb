<?php
include_once '.\generales.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Libros</title>
</head>

<body>
    <?php
    secondNav();
    ?>
    <style type="text/css">
        .card-img-top{
            height:600px;
        }
       .card{
        width: 2%;
       }
    </style>
    <p>
    <div class="card-group">
        <div class="card">
            <img src="../View/images/Cirujano.jpeg" class="card-img-top" alt="..." name="imagenL">
            <div class="card-body">
                <h5 class="card-title">El buen cirujano</h5>
                <p class="card-text">Descripcion: Novela en la que nos desvela la realidad del quirófano y nos descubre el corazón de estos hombres y 
                    mujeres que viven su profesión al borde la muerte. Una trama apasionante, una lección de vida y un canto de 
                    amor a quienes viven para su vocación. -Autor: Enrique Moreno -Precio: 15000 colones</p>
            </div>

        </div>
        <div class="card">
            <img src="../View/images/Camino.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">El camino de la miseria</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            </div>

        </div>
        <div class="card">
            <img src="../View/images/Palacio.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">El palacio de lilith</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                    content. This card has even longer content than the first to show that equal height action.</p>
            </div>
        </div>
    </div>
    <p>
    
</body>

</html>