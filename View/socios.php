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
    <title>Socios</title>
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

    <div class="card-group">
        <div class="card">
            <img src="../View/images/BRONCE.png" class="card-img-top" alt="..." name="imagenL">
            <div class="card-body">
                <h5 class="card-title">Socio de Bronce</h5>
                <p class="card-text">Dentro de las ventajas que obtienen los usuarios al poseer Socio de Bronce se encuentran:</p>
                <p class="card-text">Descuentos de un 5% en compras de dos libros o comics</p>
                <p class="card-text">Descuentos de un 10% en el día de cumpleaños</p>
                <p class="card-text">Precio: 3500 colones anuales</p>
                <a class="btn btn-dark" name="btnObtener" id="btnObtener" href="#"> Obtener </a>
            </div>



        </div>
        <div class="card">
            <img src="../View/images/PLATA.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Socio de Plata</h5>
                <p class="card-text">Dentro de las ventajas que obtienen los usuarios al poseer Socio de Plata se encuentran:</p>
                <p class="card-text">Descuentos de un 10% en compras de libros o comics</p>
                <p class="card-text">Por la compra de un total de 50000 colones o mas se le realizará un cashback de 15%</p>
                <p class="card-text">Descuentos de un 10% en el día de cumpleaños</p>
                <p class="card-text">Precio: 8000 colones anuales</p>
                <a class="btn btn-dark" name="btnObtener" id="btnObtener" href="#"> Obtener </a>
            </div>


        </div>
        <div class="card">
            <img src="../View/images/ORO.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Socio de Oro</h5>
                <p class="card-text">Dentro de las ventajas que obtienen los usuarios al poseer Socio de Plata se encuentran:</p>
                <p class="card-text">Descuentos de un 20% en compras de libros o comics</p>
                <p class="card-text">Por la compra de un total de 40000 colones o mas se le realizará un cashback de 20%</p>
                <p class="card-text">Obtencion de sellos, en el cual al acumular un total de 10, se le obsequiara un libro o comic a eleccion</p>
                <p class="card-text">Descuentos de un 15% en el mes de cumpleaños</p>
                <p class="card-text">Precio: 12000 colones anuales</p>
                <a class="btn btn-dark" name="btnObtener" id="btnObtener" href="#"> Obtener </a>
            </div>

        </div>
    </div>

</body>

<?php
footer();
?>

</html>