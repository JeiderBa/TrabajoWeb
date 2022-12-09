<?php
include_once __DIR__ . '\..\controller\usuarioController.php';
?>

<!DOCTYPE html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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
                                            <span style="color: hsl(218, 81%, 75%)">Libreria Virtual</span>
                                        </h1>
                                        <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
                                            Acá podes encontrar todo sobre tus libros favoritos!
                                            Ingresá para conocer más.
                                        </p>
                                    </div>

                                    <div class="col-lg-6 mb-5 mb-lg-15 position-relative">
                                        <div id="radius-shape-1"
                                            class="position-absolute rounded-circle shadow-5-strong"></div>
                                        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                                        <div class="card bg-glass">
                                            <div class="card-body px-19 py-20 px-md-20">
                                                <form>
                                                    <!-- 2 column grid layout with text inputs for the first and last names -->
                                                    <div class="row">
                                                        <div class="col-md-4 mb-15">
                                                            <div class="form-outline">
                                                                <label class="form-label">Nombre</label>
                                                                <input type="text" id="txtNombreR" name="txtNombreR"
                                                                    autocomplete="Off" required class="form-control" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 mb-15">
                                                            <div class="form-outline">
                                                                <label class="form-label">Primer Apellido</label>
                                                                <input type="text" id="txtPApellidoR"
                                                                    name="txtPApellidoR" autocomplete="Off" required
                                                                    class="form-control" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 mb-15">
                                                            <div class="form-outline">
                                                                <label class="form-label">Segundo Apellido</label>
                                                                <input type="text" id="txtSApellidoR"
                                                                    name="txtSApellidoR" autocomplete="Off" required
                                                                    class="form-control" />
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <!-- Email input -->
                                                    <div class="row">
                                                        <div class="col-md-6 mb-4">
                                                            <div class="form-outline">
                                                                <label class="form-label">Correo Electronico</label>
                                                                <input type="email" id="txtCorreoR" name="txtCorreoR"
                                                                    autocomplete="Off" required class="form-control" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb-4">
                                                            <div class="form-outline">
                                                                <label class="form-label">Contraseña</label>
                                                                <input type="password" id="txtContrasennaR"
                                                                    name="txtContrasennaR" autocomplete="Off" required
                                                                    class="form-control" />
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="row">
                                                        <div class="col-md-6 mb-4">
                                                            <div class="form-outline">
                                                                <label class="form-label">Telefono</label>
                                                                <input type="text" id="txtTelefonoR" name="txtTelefonoR"
                                                                    autocomplete="Off" required class="form-control" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb-4">
                                                            <div class="form-outline">
                                                                <label class="form-label">Direccion</label>
                                                                <input type="text" id="txtDireccionR"
                                                                    name="txtDireccionR" autocomplete="Off" required
                                                                    class="form-control" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6 margin-bottom-4">
                                                            <label class="control-label">Tipo Usuario</label>
                                                            <select class="form-control" id="cboTipoUsuario"
                                                                name="cboTipoUsuario" autocomplete="Off" required>
                                                                <?php
                                                                ListarTiposUsuario($datos["tipoUsuario"]);
                                                                ?>
                                                            </select>
                                                        </div>

                                                    </div>


                                                    <!-- Submit button -->
                                                    <br />
                                                    <div class="form-check d-flex justify-content-center mb-4">
                                                        <button onclick="mostrar()" type="submit" id="btnguardar"
                                                            name="btnguardar" class="btn btn-primary btn-block mb-4">
                                                            Guardar
                                                        </button>

                                                    </div>
                                                    <div class="col-md-3 margin-bottom-15">
                                                        <a class="btn btn-secondary" name="btnregistro" id="btnregistro"
                                                            href="/trabajoWeb/index.php"> Cancelar </a>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                </form>
                <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

                <script type="text/javascript">
                function mostrar() {

                    Swal.fire({
                        position: 'top-center',
                        icon: 'success',
                        title: 'Gracias por registrarse!',
                        showConfirmButton: false,
                        timer: 1500
                    })
                }
                </script>
            </body>

            </html>