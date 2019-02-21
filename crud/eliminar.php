<?php 
include './conexion.php';

$id = $_REQUEST['id'];

$del = $con -> query("DELETE FROM usuario WHERE id='$id'");

if($del){
    echo "<script>
    location.href='../vistas/vista.listar.php';
    </script>";
} else{
    echo "<script>
    alert('El usuario no fue eliminado');
    location.href='../vistas/vista.listar.php';
    </script>";
}

?>