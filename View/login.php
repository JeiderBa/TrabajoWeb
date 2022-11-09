<?php
include_once __DIR__ . '..\controller\usuarioController.php';
?>

<!DOCTYPE html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Login</title>
</head>

<body>
    <form role="form" action="" method="post">
        <!-- Section: Design Block -->
        <section class="background-radial-gradient overflow-hidden">
            <style>
                .background-radial-gradient {
                    background-color: hsl(218, 41%, 15%);
                    background-image: radial-gradient(650px circle at 0% 0%,
                            hsl(218, 41%, 35%) 15%,
                            hsl(218, 41%, 30%) 35%,
                            hsl(218, 41%, 20%) 75%,
                            hsl(218, 41%, 19%) 80%,
                            transparent 100%),
                        radial-gradient(1250px circle at 100% 100%,
                            hsl(218, 41%, 45%) 15%,
                            hsl(218, 41%, 30%) 35%,
                            hsl(218, 41%, 20%) 75%,
                            hsl(218, 41%, 19%) 80%,
                            transparent 100%);
                }

                #radius-shape-1 {
                    height: 220px;
                    width: 220px;
                    top: -60px;
                    left: -130px;
                    background: radial-gradient(#44006b, #ad1fff);
                    overflow: hidden;
                }

                #radius-shape-2 {
                    border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
                    bottom: -60px;
                    right: -110px;
                    width: 300px;
                    height: 300px;
                    background: radial-gradient(#44006b, #ad1fff);
                    overflow: hidden;
                }

                .bg-glass {
                    background-color: hsla(0, 0%, 100%, 0.9) !important;
                    backdrop-filter: saturate(200%) blur(25px);
                }
            </style>

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
                                                        <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                                                        <label class="form-check-label" for="form2Example33">
                                                            Acepto
                                                        </label>
                                                    </div>

                                                    <!-- Submit button -->
                                                    <button type="submit" id="btnsesion" name="btnsesion" class="btn btn-primary btn-block mb-4">
                                                        Entrar
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