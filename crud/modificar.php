<?php 
include '../crud/conexion.php';

$id = $_REQUEST['id'];

$sel = $con -> query("SELECT * FROM usuario WHERE id='$id'");

if($fila = $sel -> fetch_assoc()){
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/main.css">
    </head>
<body>

  <div style="text-align:center;">
    <form action="../crud/update.php" method="POST">
    <h1>Actualizando Usuario</h1>
    <table  style="margin: 0 auto;">
      <input type="hidden" name="id" value="<?php echo $id ?> ">
    <tr>
       <td><input type="text" name="nombre" value="<?php echo $fila['nombre']; ?>" required></td> 
    </tr>
    <tr>
       <td><input type="text" name="apellido1" value="<?php echo $fila['apellido1']; ?>" required></td> 
    </tr>
    <tr>
       <td><input type="text" name="apellido2" value="<?php echo $fila['apellido2']; ?>" required></td> 
    </tr>
    <tr>
       <td><input type="text" name="cargo" value="<?php echo $fila['cargo']; ?>" required></td> 
    </tr>
    </table><br>
             <input type="submit" value="Actualizar">
    </form>
    </div>
</body>
</html>