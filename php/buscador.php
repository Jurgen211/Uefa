
<?php
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
}else{
    echo "No hemos encotrado ningun registro con la cedula ".$cedula;
}
