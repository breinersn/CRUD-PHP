<?php
include 'conexion.php';

$nom = $_POST['nombre'];
$ap1 = $_POST['apellido1'];
$ap2 = $_POST['apellido2'];
$car = $_POST['cargo'];

$ins = $con -> query("INSERT INTO usuario (id,nombre,apellido1,apellido2,cargo) 
                            VALUES ('','$nom','$ap1','$ap2','$car')");

                            if($ins){
                                echo "Datos guardados";
                            }else {
                                echo "Datos no guardados";
                            }
?>