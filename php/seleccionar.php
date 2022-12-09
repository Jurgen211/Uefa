
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Modificar-eliminar</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<header style="width: 100%; display:flex; justify-content: space-between; padding: 50px;" ><img src="../img/logo.png" alt="">  <a href="logout.php"><button type="button" class="btn btn-secondary">Cerrar Sesión</button>  </a></header>
<body>
<br><br>
<div style="justify-content: center; display: flex">
<table style="border-collapse: collapse;">
    <thead>
    <tr>
        <th>Cedula</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Seccion</th>
        <th>Actualizar</th>
        <th>Eliminar</th>
    </tr>
    </thead>
    <tbody>
    <?php
    require '../Connect/connect.php';
    $query="SELECT * FROM Estudiantes";
    $consulta1=$mysqli->query($query);
    while($fila=$consulta1->fetch_array(MYSQLI_ASSOC)){
        echo "<tr>
						<td>".$fila['Cedula']."</td>
						<td>".$fila['Nombre']."</td>
						<td>".$fila['Apellidos']."</td>
						<td>".$fila['Seccion']."</td>
						<td><a href='prueba.php?Cedula=".$fila['Cedula']."'>Modificar</a></td>
						<td><a href='EliminarEst.php?Cedula=".$fila['Cedula']."'>Eliminar</a></td>
					</tr>";
    }
    ?>
    </tbody>
</table>

</div>
</body>
</html>
