<?php
include_once __DIR__ . '\..\model\autoresModel.php';

function ListarAutores()
{
    $datos = ListarAutoresModel();   

    if($datos -> num_rows > 0)
    {
        while($fila = mysqli_fetch_array($datos))
        {
            echo '
            <div class="card mx-auto" style="width: 45%;">
            <img src="'. $fila["imagen"] . '" class="card-img-top" alt="...">
            <div class="card-body">
                <h3 class="card-title">Autor</h3>
                <p class="card-text">Aquí podrás encontrar la información principal de nuestros distintos autores.</p>

                <h6 class="card-title">Nombre</h6>
                 <input type="text" class="form-control" id="txtNombre" name="txtNombre" value="'. $fila["nombreAutor"] . '">
                 <h6 class="card-title">Apellido</h6>
                 <input type="text" class="form-control" id="txtNombre" name="txtNombre" value="'. $fila["primerApellido"] . '">
                 <h6 class="card-title">Reconocimientos</h6>
                <input type="text" class="form-control" id="txtNombre" name="txtNombre" value="'. $fila["reconocimientos"] . '">
                <h6 class="card-title">Categoria en que trabaja</h6>
                 <input type="text" class="form-control" id="txtNombre" name="txtNombre" value="'. $fila["obras"] . '">


            </div>
        </div>';

           
        }
    }
}


?>