<?php
function navBar()
{
    echo ' <nav class="navbar navbar-expand-lg bg-dark text-white">
    <div class="container-fluid">
        <img src="./View/images/viejito.jpg" class="Logo">
        <div class="titulo">
            <h2><u>El Asilo del Libro</u></h2>

        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav" >
                 <div class="dropdown">
                      <button class="btn btn-dark">Categorias </button>
                     <div class="dropdown-content">
                               <a href="./View/Libros.php">Libros</a>
                               <a href="./View/Comics.php">Comics</a>
                               <a href="./View/Autores.php">Autores</a>
                          </div>
                    </div>
                <a class="nav-link text-white" href="./View/Descuentos.php">Descuentos</a>
                <a class="nav-link text-white" href="./View/socios.php">Socios</a>
                <div class="dropdown">
                     <button class="btn btn-dark">Opciones </button>
                    <div class="dropdown-content">
                         <a href="./View/login.php">Iniciar Sesion</a>
                         <a href="./View/registrar.php"">Registrar</a>
                         <a href="#">Cerrar Sesion</a>
                     </div>
                </div>
            </div>
        </div>
    </div>
</nav>';
}

function footer()
{
    echo '
    <footer class="bg-light text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2022 Copyright
        </div>
        <!-- Copyright -->
    </footer>';
}

function secondNav()
{
    echo '<nav class="navbar bg-dark text-white">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="/trabajoWeb/index.php">El Asilo del Libro </a>      
                <a class="nav-link" href="./Libros.php">Libros</a>
                <a class="nav-link" href="./Comics.php">Comics</a>
                <a class="nav-link" href="./Autores.php">Autores</a>
                <a class="nav-link" href="./Descuentos.php">Descuentos</a>
                <a class="nav-link" href="./socios.php">Socios</a>
                <a class="nav-link" href="./login.php">Iniciar Sesion</a>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>

    </div>
  </nav>';
}
