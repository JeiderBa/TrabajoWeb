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
    <title>Comics</title>
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
            <img src="../View/images/SuperGirl.png" class="card-img-top" alt="..." name="imagenL">
            <div class="card-body">
                <h5 class="card-title">SuperGirl</h5>
                <p class="card-text">Tras una etapa decepcionante como la que fue Renacimiento, Supergirl regresa en su Primera Temporada al Universo DC 
                    con una historia de investigación intergaláctica que la llevará a 
                    dar rienda suelta a su obsesión por descubrir la verdad acerca de Krypton y la acercará una vez más a su familia.</p>
                <p class="card-text">Autor: Tom King y Bilquis Evely</p>
                <p class="card-text">Precio: 10800 colones</p>
            </div>

        </div>
        <div class="card">
            <img src="../View/images/joker.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">BatMan</h5>
                <p class="card-text">En los albores de su cruzada contra el crimen, el Caballero Oscuro trata de descubrir la identidad de Festivo: misterioso homicida que,
                    aprovechando fechas señaladas del calendario, está perpetrando una serie de asesinatos. Con las familias criminales de Gotham en pie de guerra, Batman tan solo contará con la
                    ayuda de James Gordon y Harvey Dent para resolver este caso.</p>
                <p class="card-text">Autor: Jim Starling</p>
                <p class="card-text">Precio: 21000 colones</p>
            </div>

        </div>
        <div class="card">
            <img src="../View/images/batman.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Joker</h5>
                <p class="card-text">Arthur Fleck es presentado como víctima de una sociedad inmisericorde, indolente, cruel y violenta. Ciudad Gótica es absolutamente hostil, es una sociedad enferma. No
                    se salvan ni los niños ni los adultos. La corrupción ha penetrado el sistema y así, aparentemente,
                    ha construido al Joker.</p>
                <p class="card-text">Autor: DC Comics</p>
                <p class="card-text">Precio: 21000 colones</p>
            </div>
        </div>
    </div>



    <div class="card-group">
        <div class="card">
            <img src="../View/images/spider.jpeg" class="card-img-top" alt="..." name="imagenL">
            <div class="card-body">
                <h5 class="card-title">Spider-Man</h5>
                <p class="card-text">Es un personaje creado por los estadounidenses Stan Lee y Steve Ditko,e introducido en el cómic Amazing Fantasy,
                    publicado por Marvel Comics en agosto de 1962.​ Se trata de un superhéroe que emplea sus habilidades
                    sobrehumanas, reminiscentes de una araña, para combatir a otros supervillanos más peligrosos que persiguen fines siniestros.</p>
                <p class="card-text">Autor: Santiago Garcia</p>
                <p class="card-text">Precio: 24000 colones</p>
            </div>

        </div>
        <div class="card">
            <img src="../View/images/Whiz.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Whiz Comics</h5>
                <p class="card-text">Fue una serie de cómics de antología publicada por la antigua editorial
                    estadounidense de cómicsFawcett Publications entre febrero de 1940 y junio de 1953 su debut</p>
                <p class="card-text">Autor: W H Fawcett</p>
                <p class="card-text">Precio: 9000 colones</p>
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
                <p class="card-text">Autor: Eiichiro Oda</p>
                <p class="card-text">Precio: 8000 colones</p>
            </div>
        </div>
    </div>
    <p>

</body>

<?php
footer();
?>


</html>