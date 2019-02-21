<?php 
include './conexion.php';

$id = $_POST['id'];
$nomb = $_POST['nombre'];
$apel1 = $_POST['apellido1'];
$apel2 = $_POST['apellido2'];
$car = $_POST['cargo'];

$upd = $con -> query("UPDATE usuario 
SET nombre='$nomb', apellido1='$apel1', apellido2='$apel2', cargo='$car' WHERE id='$id' ");

if($upd){
    echo "<script>
    location.href='../vistas/vista.listar.php';
    </script>";
} else{
    echo "<script>
    location.href='./modificar.php?id=".$id."';
    </script>";
}

?>