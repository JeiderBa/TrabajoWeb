<?php
if (session_status() == PHP_SESSION_NONE)
{
    session_start();
}
include_once '.\generales.php';
include_once __DIR__ . '\..\controller\usuarioController.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="./css/estilos.css" type="text/css" />
    <link rel="stylesheet" href="./css/estilosIndex.css" type="text/css" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <?php
    navBarAdmin();
    ?>
    <style type="text/css">
    .dropdown {
        display: inline-block;
        position: relative;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        width: 100%;
        overflow: auto;
        box-shadow: 0px 10px 10px 0px rgba(0, 0, 0, 0.4);
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown-content a {
        display: block;
        color: #ffffff;
        padding: 5px;
        text-decoration: none;
    }

    .dropdown-content a:hover {
        color: #ffffff;
        background-color: #000000;
    }

    .dropdown-content {
        z-index: 3;
    }
    </style>

    <div class="row row-cols-1 row-cols-md-2 g-4">

        <div class="col-f">
            <div class="card">
                <img src="./images/Libros.jpg" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Libros</h5>
                    <p class="card-text">Contamos con libros antiguos a los mas nuevos.
                        ¡Busca el libro que necesitas de ficción, salud, ediciones limitadas, novelas, entre otras
                        categorías!</p>
                    <div class="col-md-3 margin-bottom-15">
                        <a class="btn btn-dark" name="btnVerMas" id="btnVerMas" href="./Libros.php"> Ver más </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-f">
            <div class="card">
                <img src="./images/autor.jpg" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Javier Castillo</h5>
                    <p class="card-text">
                        Es un escritor de novelas con obras tales como:
                        -El día que se perdió la cordura
                        -La chica de nieve
                        -El juego del alma.
                        Con premios como del "Mejor escrito del año"</p>
                    <div class="col-md-3 margin-bottom-15">
                        <a class="btn btn-dark" name="btnVerMas" id="btnVerMas" href="./Autores.php"> Ver más </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-f">
            <div class="card">
                <img src="./images/descu.png" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Descuentos</h5>
                    <p class="card-text">¡Aprovecha los descuentos que El Asilo del Libro tiene para vos!</p>
                    <div class="col-md-3 margin-bottom-15">
                        <a class="btn btn-dark" name="btnVerMas" id="btnVerMas" href="./descuentos.php"> Ver más </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-f">
            <div class="card">
                <img src="./images/cuarta.jpg" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Cómics</h5>
                    <p class="card-text">Contamos con cómics de acción, horror, romance, entre otros.
                        ¡Encuentra nuestra gran variedad!</p>
                    <div class="col-md-3 margin-bottom-15">
                        <a class="btn btn-dark" name="btnVerMas" id="btnVerMas" href="./Comics.php"> Ver más </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="second-titule">
        <h1><u>Próximas llegadas</u></h1>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-2">

        <div class="col">
            <div class="card-ob">
                <img src="./images/marvel.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Marvel Comic</h5>
                    <p class="card-text">Descripción: Cuenta entre sus personajes a superhéroes tan conocidos como
                        Spider-Man, Iron Man, Capitán América y equipos como Los Vengadores, los X-Men, entre otros.
                    <p class="card-text">Autor: Martin Goodman</p>
                    <div class="col-md-3 margin-bottom-15">
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card-ob">
                <img src="./images/principito.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title">El Principito</h4>
                    <p class="card-text">Descripción: El principito es una novela corta y la obra más famosa del
                        escritor y aviador francés Antoine de Saint-Exupéry.
                    <p class="card-text">Autor: Antoine de Saint-Exupéry</p>
                    <div class="col-md-3 margin-bottom-15">
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card-ob">
                <img src="./images/iron.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">The Invinsible Iron Man</h5>
                    <p class="card-text">Descripción: Iron Man es el nombre de varios títulos de cómics que presentan al
                        personaje de Iron Man y publicados por Marvel Comics.
                    <p class="card-text">Autor: Matt Fraction</p>
                    <div class="col-md-3 margin-bottom-15">
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card-ob">
                <img src="./images/harry.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Harry Potter y la piedra filosofal</h5>
                    <p class="card-text">Descripción: El día de su cumpleaños, Harry Potter descubre que es hijo de dos
                        conocidos hechiceros, de los que ha heredado poderes mágicos.
                    <p class="card-text">Autor: JK Rowling</p>
                    <div class="col-md-3 margin-bottom-15">
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card-ob">
                <img src="./images/antes.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Yo Antes de Ti</h5>
                    <p class="card-text">Descripción: Yo antes de ti es una novela romántica de la escritora británica
                        de
                        Jojo Moyes para jóvenes adultos publicada en 2012.
                    <p class="card-text">Autor: Jojo Moyes</p>
                    <div class="col-md-3 margin-bottom-15">
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card-ob">
                <img src="./images/one.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">One Piece</h5>
                    <p class="card-text">Descripción: Únete a Monkey D. Luffy y su equipo de capa y espada en su
                        búsqueda del tesoro definitivo, One Piece.
                    <p class="card-text">Autor: EIICHIRO ODA</p>
                    <div class="col-md-3 margin-bottom-15">
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