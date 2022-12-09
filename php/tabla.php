<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <meta charset="UTF-8">
    <title>Menu</title>
</head>
<header style="width: 100%; display:flex; justify-content: space-between; padding: 50px;" ><img src="../img/logo.png" alt="">  <a href="logout.php"><button type="button" class="btn btn-secondary">Cerrar Sesión</button>  </a></header>
<body>
<br><br>
<div style="justify-content: center;display: flex; align-content: center">

<table>
    <thead>
    <tr>
        <th>Dia</th>
        <th>Comida</th>
        <th>Bebida</th>
        <th>Horario</th>
    </tr>
    </thead>
    <tbody>
    <?php
    require '../Connect/connect.php';
    $query="SELECT * FROM Menu";
    $consulta1=$mysqli->query($query);
    while($fila=$consulta1->fetch_array(MYSQLI_ASSOC)){
        echo "<tr>
						<td>".$fila['Dia']."</td>
						<td>".$fila['Comida']."</td>
						<td>".$fila['Refresco']."</td>
						<td>".$fila['Tiempo']."</td>
					</tr>";
    }
    ?>
    </tbody>
</table>
</div>
</body>
</html>
