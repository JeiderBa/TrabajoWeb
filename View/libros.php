<?php
include_once '.\generales.php';
include_once __DIR__ . '\..\controller\librosController.php';

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
    .card-img-top {
        height: 600px;
    }
    </style>


    <?php
            ListarLibros();
            ?>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script type="text/javascript">
    function mostrar() {

        Swal.fire({
            position: 'top-center',
            icon: 'success',
            title: '¡Libro Apartado! Escribe en la sección de ayuda para proceder',
            showConfirmButton: false,
            timer: 3000
        })
    }
    </script>

</body>


<?php
footer();
?>

</html>