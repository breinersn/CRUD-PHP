<?php


if($_POST['ingresar']){
    header('Location: ./vistas/vista.ingresar.php'); 
}
if($_POST['listar']){
    header('Location: ./vistas/vista.listar.php');
}
if($_POST['modificar']){
    header('Location: ./vistas/vista.modificar.php');
}
if($_POST['eliminar']){
    header('Location: ./vistas/vista.eliminar.php');
}

?>