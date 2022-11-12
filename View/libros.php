<?php
include_once '.\generales.php';

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
            width: 1%;
        }
    </style>
    <p>
    <div class="card-group">
        <div class="card">
            <img src="../View/images/lobo.jpg" class="card-img-top" alt="..." name="imagenL">
            <div class="card-body">
                <h5 class="card-title">La Ovejita que Vino a Cenar</h5>
                <p class="card-text">El protagonista del cuento es un lobo que sueña con poner punto y final a su forzosa dieta vegetariana y poder por fin preparar su comida 
                    favorita: un buen estofado. Solo le falta el ingrediente principal: una ovejita. La suerte quiere que justo en aquel instante, una ovejita toca a su puerta.</p>
                <p class="card-text">Autor: Steve Smallman</p>
                <p class="card-text">Precio: 7000 colones</p>
            </div>

        </div>
        <div class="card">
            <img src="../View/images/vaticano.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">El libro Negro del Vaticano</h5>
                <p class="card-text">Recoge el punto de vista de la CIA sobre las posiciones de la Santa Sede en diversos asuntos internacionales que abarcan desde 
                    1944 hasta nuestros días, desde el pontificado de Pío XII al de Francisco.</p>
                <p class="card-text">Autor: Eric Frattini</p>
                <p class="card-text">Precio: 11900 colones</p>
            </div>

        </div>
        <div class="card">
            <img src="../View/images/miedo.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">It</h5>
                <p class="card-text">Tras veintisiete años de tranquilidad y lejanía, una antigua promesa infantil les hace volver al lugar en el que 
                    vivieron su infancia y juventud como una terrible pesadilla. Regresan a Derry para 
                    enfrentarse con su pasado y enterrar definitivamente la amenaza que los amargó durante su niñez.</p>
                <p class="card-text">Autor: Stephen King</p>
                <p class="card-text">Precio: 14800 colones</p>
            </div>
        </div>
    </div>



    <div class="card-group">
        <div class="card">
            <img src="../View/images/estrella.png" class="card-img-top" alt="..." name="imagenL">
            <div class="card-body">
                <h5 class="card-title">Bajo la Misma Estrella</h5>
                <p class="card-text"> A Hazel y a Gus les gustaría tener vidas más corrientes. Algunos 
                    dirían que no han nacido con estrella, que su mundo es injusto.</p>
                <p class="card-text">Autor: John Green</p>
                <p class="card-text">Precio: 10800 colones</p>
            </div>

        </div>
        <div class="card">
            <img src="../View/images/otro.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Uno siempre cambia al amor de su vida</h5>
                <p class="card-text">Este manual para sobrevivir a un corazón roto es una guía llena de amor, ternura, honestidad y verdadera sabiduría 
                    emocional para superar cualquier ruptura y, sobre todo, para asumir que está bien estar mal.</p>
                <p class="card-text">Autor: Amalia Andrade</p>
                <p class="card-text">Precio: 9700 colones</p>
            </div>

        </div>
        <div class="card">
            <img src="../View/images/unica.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Unica Mirando al Mar</h5>
                <p class="card-text">Está escrita en prosa es extensa tiene muchos personajes. Su organización secuencial es 
                    perturbada ya que se cuenta la historia de cómo fue la vida pasada de algunos personajes.</p>
                <p class="card-text">Autor: Fernando Contreras Castro</p>
                <p class="card-text">Precio: 6500 colones</p>
            </div>
        </div>
    </div>

    <p>

</body>

</html>