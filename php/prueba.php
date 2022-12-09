<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Modificar Estudiante</title>
</head>
<header style="width: 100%; display:flex; justify-content: space-between; padding: 50px;" ><img src="../img/logo.png" alt="">  <a href="php/logout.php"><button type="button" class="btn btn-secondary">Cerrar Sesión</button>  </a></header>
<body>
<?php
if(isset($_GET['Cedula'])){
require '../Connect/connect.php';
    $Cedula=$_GET['Cedula'];
    $query="SELECT * FROM Estudiantes WHERE Cedula='$Cedula'";

    $consulta1=$mysqli->query($query);
    $fila=$consulta1->fetch_array(MYSQLI_ASSOC);
    echo '<form action="ModificarEstudiante.php" method="POST">
    <input type="hidden" name="cedula" value="'.$fila['Cedula'].'">
    <label>Nombre</label><input type="text" name="nombre" value="'.$fila['Nombre'].'">
      <label>Apellidos</label><input type="text" name="apellidos" value="'.$fila['Apellidos'].'"><br><br>
    <label>Seccion</label><input type="text" name="seccion" value="'.$fila['Seccion'].'"><br><br>
             <p>Ingresa los nuevos registros: </p>
    <label>Nuevo Nombre</label><input type="text" name="NuevoNombre"><br><br>
     <label>Nuevos Apellidos</label><input type="text" name="NuevoApellidos"><br><br>
      <label>Nueva Sección</label><input type="text" name="NuevoSeccion"><br><br>
      <input type="submit" value="Actualizar">
    </form>';
}else{
    echo "Ocurrio un error inesperado";
}
?>
</body>
</html>
