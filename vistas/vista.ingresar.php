
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ingresar Usuario</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/main.css">
    </head>
<body>

  <div style="text-align:center;">
    <form action="../crud/guardar.php" method="POST">
    <h1>Ingreso de Usuarios</h1>
    <table  style="margin: 0 auto;">
    <tr>
       <td><input type="text" name="nombre" value="" placeholder="Nombre" required></td> 
    </tr>
    <tr>
       <td><input type="text" name="apellido1" value="" placeholder="Primer Apellido" required></td> 
    </tr>
    <tr>
       <td><input type="text" name="apellido2" value="" placeholder="Segundo Apellido" required></td> 
    </tr>
    <tr>
       <td><input type="text" name="cargo" value="" placeholder="Cargo" required></td> 
    </tr>
    </table><br>
             <input type="submit" value="Guardar">
             <input type="reset" value="Limpiar">
    </form>
    </div>
</body>
</html>

