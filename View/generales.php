<?php
function navBar()
{
    echo' <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <img src="images/Logo.jpg" class="Logo">
        <div class="titulo">
            <h2><u>El Asilo del Libro</u></h2>

        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link" aria-current="page" href="#">Home</a>
                <a class="nav-link" href="./View/Libros.php">Libros</a>
                <a class="nav-link" href="./View/Comics.php">Comics</a>
                <a class="nav-link" href="./View/Descuentos.php">Promociones</a>
                <a class="nav-link" href="./View/login.php">Log In</a>
            </div>
        </div>
    </div>
</nav>';
}

function footer(){
    echo'
    <footer class="bg-light text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright:
            <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
    </footer>';
}

function secondNav(){
    echo'<nav class="navbar bg-light">
    <div class="container-fluid">
      <a class="navbar-brand">El Asilo del Libro</a>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </nav>';
}