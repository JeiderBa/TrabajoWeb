<?php
include_once '.\generales.php';
include_once __DIR__ . '\..\controller\autoresController.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Autores</title>
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
            display:flex;
            align-items:center; 
            justify-content:center;
        }
    </style>


<?php
            ListarAutores();
            ?>
    






</body>

<?php
footer();
?>

</html>