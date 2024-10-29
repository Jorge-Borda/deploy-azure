<?php

  include 'conexion.php';

?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.:EDITAR:.</title>
</head>
<body>
    <form method="post">
        <div>
            <label for="">Id</label>
            <input type="text" name ="id">
        </div>
        <div>
            <label for="">Nombre</label>
            <input type="text" name ="nombre">
        </div>
        <div>
            <label for="">Apellidos</label>
            <input type="text" name ="apellidos">
        </div>
        <div>
            <input type="submit" value="Actualizar Registro" name="actualizar">
            <button class="btn btn-warning"><a href="index.php">Cancelar</a></button>
        </div>
    </form>
    
</body>
</html>

<?php 

if ($_SERVER ["REQUEST_METHOD"]== "POST") {
    if ($_POST["actualizar"]) {
        $id = $_GET['id'];
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];

        
$sql ="UPDATE Alumno set nombre= "."'"."$nombre"."'".",apellidos=" ."'". " $apellidos" ."'". " WHERE id= $id ";
        $stmt = sqlsrv_query($conn,$sql);

        if($stmt) {
            echo "Actualizado Correctamente";
        } else {
            echo "No se pudo actualizar";
        }
    }

}else {
    echo "Ocurrio un error";
}

?>