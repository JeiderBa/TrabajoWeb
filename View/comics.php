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
            width: 2%;
        }
    </style>
    <p>
    <div class="card-group">
        <div class="card">
            <img src="../View/images/spider.jpeg" class="card-img-top" alt="..." name="imagenL">
            <div class="card-body">
                <h5 class="card-title">Spider-Man</h5>
                <p class="card-text">Es un personaje creado por los estadounidenses Stan Lee y Steve Ditko,e introducido en el cómic Amazing Fantasy,
                     publicado por Marvel Comics en agosto de 1962.​ Se trata de un superhéroe que emplea sus habilidades 
                     sobrehumanas, reminiscentes de una araña, para combatir a otros supervillanos más peligrosos que persiguen fines siniestros.</p>
            </div>

        </div>
        <div class="card">
            <img src="../View/images/Whiz.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Whiz Comics</h5>
                <p class="card-text">Fue una serie de cómics de antología publicada por la antigua editorial 
                    estadounidense de cómicsFawcett Publications entre febrero de 1940 y junio de 1953 su debut</p>
            </div>

        </div>
        <div class="card">
            <img src="../View/images/one.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">One Piece</h5>
                <p class="card-text">Esta es la gran Era Pirata. Gold Roger, el legendario “Rey de los piratas” ha dejado el “One Piece” - su legendario Tesoro - 
                    escondido en una zona del mundo llamada “GRAND LINE” y los piratas más fuertes compiten por hallarlo. Un niño llamado Luffy idolatraba a los 
                    piratas, en especial a Shanks, el líder de una tripulación que visitó su villa. Un día, por accidente, Luffy comió una “fruta del diablo” del botín de Shanks. Gracias a esa fruta, su cuerpo se ha vuelto de 
                    goma pero nunca podrá nadar. El día que los piratas abandonaron la villa, Shanks le obsequió a Luffy su mas preciada posesión: su sombrero de paja. Diez años han pasado desde ese día y Luffy ha salido al mar 
                    buscando convertirse en el nuevo “Rey de los piratas”. ¡Aquí inicia la gran aventura de Luffy!</p>
            </div>
        </div>
    </div>
    <p>

</body>

</html>