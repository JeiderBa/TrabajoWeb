<?php
include_once __DIR__ . '\..\controller\usuarioController.php';
?>

<!DOCTYPE html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilosLogin.css" type="text/css" />
    <title>Login</title>
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
                                            <span style="color: hsl(218, 81%, 75%)">Libreria Virtual</span>
                                        </h1>
                                        <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
                                            Acá podes encontrar todo sobre tus libros favoritos!
                                            Ingresá para conocer más.
                                        </p>
                                    </div>

                                    <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                                        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                                        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                                        <div class="card bg-glass">
                                            <div class="card-body px-4 py-5 px-md-5">
                                                <form>
                                                    <!-- 2 column grid layout with text inputs for the first and last names -->
                                                    <div class="row">
                                                        <div class="col-md-6 mb-4">
                                                            <div class="form-outline">
                                                                <input type="text" id="form3Example1" class="form-control" />
                                                                <label class="form-label" for="form3Example1">Nombre</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb-4">
                                                            <div class="form-outline">
                                                                <input type="text" id="form3Example2" class="form-control" />
                                                                <label class="form-label" for="form3Example2">Apellido</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Email input -->
                                                    <div class="form-outline mb-4">
                                                        <input type="text" id="form3Example3" name="form3Example3" class="form-control" onblur="ValidarExisteCedula()" />
                                                        <label class="form-label" for="form3Example3">Correo Electronico</label>
                                                    </div>

                                                    <!-- Password input -->
                                                    <div class="form-outline mb-4">
                                                        <input type="password" id="form3Example4" name="form3Example4" class="form-control" />
                                                        <label class="form-label" for="form3Example4">Contraseña</label>
                                                    </div>

                                                    <!-- Checkbox -->
                                                    <div class="form-check d-flex justify-content-center mb-4">
                                                        <button type="submit" id="btnsesion" name="btnsesion" class="btn btn-primary btn-block mb-4">
                                                            Ingresar
                                                        </button>
                                                    </div>
                                                    <!-- Submit button -->
                                                    <button type="submit" id="btnregistro" name="btnregistro" class="btn btn-primary btn-block mb-4">
                                                        Registrar
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Section: Design Block -->
                        <script src="../View/js/login.js"></script>;
                </form>
            </body>

            </html>