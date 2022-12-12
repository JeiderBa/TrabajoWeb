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
    <title>Descuentos</title>
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

        .card span {
            position: absolute;
            top: -10px;
            left: -10px;
            width: 150px;
            height: 150px;
            /*background: #f00;*/
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        .card span::before {
            content: 'DESCUENTOS';
            position: absolute;
            width: 150%;
            height: 40px;
            background: #020303;
            transform: rotate(-45deg) translateY(-20px);
            display: flex;
            justify-content: center;
            align-items: center;
            text-transform: uppercase;
            font-weight: 600;
            color: #fff;
            letter-spacing: 0.1em;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1)
        }

        .card span::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 10px;
            height: 10px;
            background: #a8adad;
            z-index: -1;
            box-shadow: 140px -140px #a8adad;
        }
    </style>
    <p>
    <div class="card-group">
        <div class="card">
            <img src="../View/images/lobo.jpg" class="card-img-top" alt="..." name="imagenL">
            <div class="card-body">
                <h5 class="card-title">La Ovejita que Vino a Cenar</h5>
                <p class="card-text">Aprovecha el descuento de un 25%</p>
                <p class="card-text">Autor: Steve Smallman</p>
                <p class="card-text">Precio Anterior: 7000 colones</p>
                <p class="card-text">Precio Nuevo: 5250 colones</p>
                <button type="button" onClick="mostrar()" class="btn btn-dark">Apartar</button>
            </div>
            <span></span>


        </div>
        <div class="card">
            <img src="../View/images/estrella.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Bajo la Misma Estrella</h5>
                <p class="card-text">Aprovecha el descuento de un 15%</p>
                <p class="card-text">Autor: John Green</p>
                <p class="card-text">Precio anterior: 10800 colones</p>
                <p class="card-text">Precio Nuevo: 9180 colones</p>
                <button type="button" onClick="mostrar()" class="btn btn-dark">Apartar</button>
            </div>
            <span></span>

        </div>
        <div class="card">
            <img src="../View/images/one.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">One Piece</h5>
                <p class="card-text">Aprovecha el descuento de un 25%</p>
                <p class="card-text">Autor: Eiichiro Oda</p>
                <p class="card-text">Precio Anterior: 8000 colones</p>
                <p class="card-text">Precio Nuevo: 6000 colones</p>
                <button type="button" onClick="mostrar()" class="btn btn-dark">Apartar</button>
            </div>
            <span></span>
        </div>
    </div>



    <div class="card-group">
        <div class="card">
            <img src="../View/images/spider.jpeg" class="card-img-top" alt="..." name="imagenL">
            <div class="card-body">
                <h5 class="card-title">Spider-Man</h5>
                <p class="card-text">Aprovecha el descuento de un 20%</p>
                <p class="card-text">Autor: Santiago Garcia</p>
                <p class="card-text">Precio Anterior: 24000 colones</p>
                <p class="card-text">Precio Nuevo: 19200 colones</p>
                <button type="button" onClick="mostrar()" class="btn btn-dark">Apartar</button>
            </div>
            <span></span>

        </div>
        <div class="card">
            <img src="../View/images/miedo.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">It</h5>
                <p class="card-text">Aprovecha el descuento de un 15%</p>
                <p class="card-text">Autor: Stephen King</p>
                <p class="card-text">Precio Anterior: 14800 colones</p>
                <p class="card-text">Precio Nuevo: 12580 colones</p>
                <button type="button" onClick="mostrar()" class="btn btn-dark">Apartar</button>
            </div>
            <span></span>
        </div>
        <div class="card">
            <img src="../View/images/joker.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">BatMan</h5>
                <p class="card-text">Aprovecha el descuento de un 15%</p>
                <p class="card-text">Autor: Jim Starling</p>
                <p class="card-text">Precio: 21000 colones</p>
                <p class="card-text">Precio: 17850 colones</p>
                <button type="button" onClick="mostrar()" class="btn btn-dark">Apartar</button>
            </div>
            <span></span>

        </div>
    </div>

    <p>

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script type="text/javascript">
            function mostrar() {

                Swal.fire({
                    position: 'top-center',
                    icon: 'success',
                    title: '¡Gracias por aprovechar nuestros descuentos! Escribe en la sección de ayuda para proceder',
                    showConfirmButton: false,
                    timer: 5000
                })
            }
        </script>

</body>

<?php
footer();
?>


</html>