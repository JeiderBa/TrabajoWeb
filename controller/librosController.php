<?php
include_once __DIR__ . '\..\model\librosModel.php';

function ListarLibros()
{
    $datos = ListarLibrosModel();   

    if($datos -> num_rows > 0)
    {
        while($fila = mysqli_fetch_array($datos))
        {
            echo '
            <div class="card mx-auto" style="width: 45%;">
            <img src="'. $fila["imagen"] . '" class="card-img-top" alt="...">
            <div class="card-body">
                <h3 class="card-title">Libro</h3>

                <br />

                <h6 class="card-title ">Titulo</h6>
                <td> '. $fila["nombreLibro"] .' </td>
                
                <br /><br />

                 <h6 class="card-title">Descripcion</h6>
                 <td> "'. $fila["descripcion"] .'" </td>
                
                 <br /><br />

                <h6 class="card-title">Precio</h6>
                <td> '. $fila["precio"] .' </td>

                <br /><br />

                <button type="submit" onClick="mostrar()" id="btnComprar" name="btnComprar" class="btn btn-dark">Apartar</button>


            </div>
        </div>';

           
        }
    }
}


?>