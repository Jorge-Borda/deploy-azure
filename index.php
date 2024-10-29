<?php

  include 'conexion.php';

?>



<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>.: SENATI :.</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>

<body>

  <button class="btn btn-warning"><a href="insertar.php">Agregar +</a></button>

  <table class="table table-bordered">
   
    <tr>

      <th>Id</th>

      <th>Nombre</th>

      <th>Apellidos</th>

      <th>Acción</th>

    </tr>



    <?php

      $sql = "SELECT * FROM Alumno";

      

      $stmt = sqlsrv_query($conn, $sql);



      while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC)){

        echo "<tr>

          <td>$row[id]</td>

          <td>$row[nombre]</td>

          <td>$row[apellidos]</td>

          <td><a href=editar.php?id=$row[id]>Editar</a>  | <a href=eliminar.php?id=$row[id]>Eliminar</a></td>

        </tr>";

      }

    ?>

  </table>

  

</body>

</html>