<?php

  include 'conexion.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.:INSERTAR:.</title>
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
            <input type="submit" value="Guardar Registro" name="Guardar">
            <button class="btn btn-warning"><a href="index.php">Cancelar</a></button>
        </div>
    </form>
    
</body>
</html>

<?php 
if ($_SERVER ["REQUEST_METHOD"]== "POST") {
    if ($_POST["Guardar"]) {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];

        //echo "$id | $nombre | $apellidos";
        
        
        $sql ="INSERT INTO Alumno(id,nombre,apellidos) VALUES (?,?,?)";
        $params = array($id,$nombre,$apellidos);

        $stmt = sqlsrv_query($conn,$sql,$params);

        if($stmt) {
            echo "Registrado Correctamente";
        } else {
            echo "No se pudo insertar el registro";
        }
    }

}else {
    echo "No se hizo nada";
}
?>