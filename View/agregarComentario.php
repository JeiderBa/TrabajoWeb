<?php
include_once __DIR__ . '\..\controller\usuarioController.php';
?>

<!DOCTYPE html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilosLogin.css" type="text/css" />
    <title>Registrar</title>
</head>

<body>
    <form role="form" action="" method="post">
        <!-- Section: Design Block -->
        <section class="background-radial-gradient overflow-hidden">

            <body>
                <form role="form" action="" method="post">
                    <!-- Section: Design Block -->
                    <section class="background-radial-gradient overflow-hidden">
                        <section class="background-radial-gradient overflow-hidden">
                            <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
                                <div class="row gx-lg-5 align-items-center mb-5">
                                    <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                                        <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                                            El Asilo del Libro <br />                                           
                                        </h1>
                                        <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                                            <span style="color: hsl(218, 81%, 75%)">¡Deja los siguientes datos para solicitar ayuda!</span>
                                        </h1>                                  
                                    </div>

                                    <div class="col-lg-6 mb-5 mb-lg-15 position-relative">
                                        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                                        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                                        <div class="card bg-glass">
                                            <div class="card-body px-19 py-20 px-md-20">
                                                <form>
                                                    <!-- 2 column grid layout with text inputs for the first and last names -->
                                                    <div class="row">
                                                        <div class="col-md-6 mb-15">
                                                            <div class="form-outline">
                                                                <label class="form-label">Nombre Completo</label>
                                                                <input type="text" id="txtNombreC" name="txtNombreC" autocomplete="Off" required class="form-control" />
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <!-- Email input -->
                                                    <div class="row">
                                                        <div class="col-md-6 mb-15">
                                                            <div class="form-outline">
                                                                <label class="form-label">Correo Electronico</label>
                                                                <input type="email" id="txtCorreoC" name="txtCorreoC" autocomplete="Off" required class="form-control" />
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-15 mb-15">
                                                            <div class="form-outline">
                                                                <label class="form-label">Comentario</label>
                                                                <input type="textarea" id="txtComentario" name="txtComentario" autocomplete="Off" required class="form-control" />
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <!-- Submit button -->
                                                    <br />
                                                    <div class="form-check d-flex justify-content-center mb-4">
                                                    <a class="btn btn-primary" name="btnEnviar" id="btnEnviar" href="/trabajoWeb/index.php"> Enviar </a>


                                                    </div>
                                                    <div class="col-md-3 margin-bottom-15">
                                                        <a class="btn btn-secondary" name="btncancelar" id="btncancelar" href="/trabajoWeb/index.php"> Cancelar </a>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                </form>
               
            </body>

            </html>