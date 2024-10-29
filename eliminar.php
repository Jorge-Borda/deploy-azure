<?php

  include 'conexion.php';

?>
<?php

if ($_SERVER ["REQUEST_METHOD"]== "GET") {
    $id =$_GET['id'];

    $sql = "DELETE FROM Alumno WHERE id = $id";
    $stmt = sqlsrv_query($conn,$sql);

    if($stmt) {
        echo "Eliminado Correctamente";
    } else {
        echo "No se pudo eliminar";
    }
    
}

?>
<button class="btn btn-warning"><a href="index.php">Regresar</a></button>