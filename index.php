<?php
include_once '.\view\generales.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="estilos.css" type="text/css" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <?php
    navBar();
    ?>
   

    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col-f">
            <div class="card">
                <img src="View/images/Libros.jpg" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Libros</h5>
                    <p class="card-text">Contamos con libros antiguos a los mas nuevos.
                        ¡Busca el libro que necesitas de ficcion, salud, ediciones limitadas, novelas, entre otras
                        categorias!</p>
                </div>

            </div>
        </div>
        <div class="col-f">
            <div class="card">
                <img src="View/images/autor.jpg.png" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Javier Castillo</h5>
                    <p class="card-text">
                        Es un escritor de novelas con obras tales como:
                        -El día que se perdió la cordura
                        -La chica de nieve
                        -El juego del alma.
                        Con premios como del "Mejor escrito del año"</p>
                </div>
            </div>
        </div>
        <div class="col-f">
            <div class="card">
                <img src="View/images/segunda.png" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Hazte Socio</h5>
                    <p class="card-text">¡Obtene nuestro paquete premium para tener acceso privilegeado a nuestros
                        productos y con ello descuen!</p>
                </div>
            </div>
        </div>
        <div class="col-f">
            <div class="card">
                <img src="View/images/cuarta.jpg" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Comics</h5>
                    <p class="card-text">Contamos con comics de acción, horror, romance, entre otros.

                        ¡Encuentra nuestra gran variedad!</p>
                </div>
            </div>
        </div>
    </div>
    <div class="second-titule">
        <h1><u>Libros</u></h1>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-2">
        <div class="col">
            <div class="card-ob">
                <img src="View/images/marvel.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Marvel Comic</h5>
                    <p class="card-text">Descripcion: Cuenta entre sus personajes a superhéroes tan conocidos como
                        Spider-Man, Iron Man, Capitán América y equipos como Los Vengadores, los X-Men, entre otros.
                        Autor:Martin Goodman
                        Precio:24000</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card-ob">
                <img src="View/images/principito.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">El Principito</h5>
                    <p class="card-text">Descripcion: El principito es una novela corta y la obra más famosa del
                        escritor y aviador francés Antoine de Saint-Exupéry.
                        Autor:Antoine de Saint-Exupéry
                        Precio:8000</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card-ob">
                <img src="View/images/iron.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">The Invinsible Iron Man</h5>
                    <p class="card-text">Descripcion: Iron Man es el nombre de varios titulos de cómics que presentan al
                        personaje de Iron Man y publicados por Marvel Comics
                        Autor:Matt Fraction
                        Precio:19000</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card-ob">
                <img src="View/images/harry.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Harry Potter y la piedra filosofal</h5>
                    <p class="card-text">Descripcion: El día de su cumpleaños, Harry Potter descubre que es hijo de dos
                        conocidos hechiceros, de los que ha heredado poderes mágicos
                        Autor:JK Rowling
                        Precio:15000</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card-ob">
                <img src="View/images/antes.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Yo Antes de Ti</h5>
                    <p class="card-text">Descripcion: Yo antes de ti es una novela romántica de la escritora británica
                        Jojo Moyes para jóvenes adultos publicada en 2012.
                        Autor:Jojo Moyes
                        Precio: 11000</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card-ob">
                <img src="View/images/one.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">One Piece</h5>
                    <p class="card-text">Descripcion: Únete a Monkey D. Luffy y su equipo de capa y espada en su
                        búsqueda del tesoro definitivo, One Piece.
                        Autor:EIICHIRO ODA
                        Precio:7000</p>
                </div>
            </div>
        </div>
    </div> 
</body>
    <?php
    footer();
    ?> 

</html>