<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administrador</title>
</head>
<body>

<?php
require "../Connect/connect.php";
$cedula=$_POST['cedula'];
$query="SELECT * FROM Estudiantes WHERE Cedula LIKE '%$cedula%'";
$consulta3=$mysqli->query($query);

if($consulta3->num_rows>=1){
    echo "<table>
		<thead>
			<tr>
				<th>Cedula</th>
				<th>Nombre</th>
				<th>Apellidos</th>
				<th>Seccion</th>
				
			</tr>
		</thead>
		<tbody>";
    while($fila=$consulta3->fetch_array(MYSQLI_ASSOC)){
        echo "<tr>
				<td>".$fila['Cedula']."</td>
				<td>".$fila['Nombre']."</td>
				<td>".$fila['Apellidos']."</td>
				<td>".$fila['Seccion']."</td>
				
			</tr>";

    }
    echo "</tbody>
	</table>";
?>

<form action='./AgregarRegistro.php' method='POST'>
    <input type='hidden' name='cedula' value="<?php $fila['Cedula'] ?>">
    <br>
    <label>Desayuno</label>
    <input type='text'  name='Desayuno' placeholder='SI o NO' >
    <br>
    <label>Almuerzo</label>
    <input type='text'  name='Almuerzo' placeholder='SI o N0' >
    <br>
    <label>Merienda</label>
    <input type='text'  name='Merienda' placeholder='Si o NO'>
    <br>
    <input type='submit' name='registrar' value='Registrar'>

</form>
    <?php
}else{
    echo "No hemos encotrado ningun registro con la cedula ".$cedula;
}
?>
</body>
</html>




