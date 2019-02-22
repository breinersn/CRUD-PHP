<?php
include '../crud/conexion.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cosultar Usuario</title>
    <link rel="stylesheet" type="text/css" media="screen" href="../css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div style="text-align:center;">
    <h1>Lista De Usuarios</h1>
    <table id="t01"  style="margin: 0 auto;">
        <tr>
           <th>ID</th>
           <th>NOMBRE</th>
           <th>PRIMER APELLIDO</th>
           <th>SEGUNDO APELLIDO</th>
           <th>CARGO</th>
           <th></th>
           <th></th>
           <th></th>
        </tr>

        <?php

    $sel = $con -> query("SELECT * FROM usuario");

        while ($fila = $sel -> fetch_assoc()) {
            ?>
            <tr>
                <td><?php echo $fila['id'] ?></td>
                <td><?php echo $fila['nombre'] ?></td>
                <td><?php echo $fila['apellido1'] ?></td>
                <td><?php echo $fila['apellido2'] ?></td>
                <td><?php echo $fila['cargo'] ?></td>
                
                <td><a title="Modificar" href="../crud/modificar.php?id=<?php echo $fila['id'] ?>">&#10004;</a></td>
                <td><a title="Agregar" href="./vista.ingresar.php">&#10133;</a></td>
                <td><a title="Eliminar" href="../crud/eliminar.php?id=<?php echo $fila['id'] ?>">&#10006;</a></td>
            </tr>
        <?php } ?>

    </table>
    </div>
</body>
</html>