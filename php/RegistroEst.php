<?php
$mysqli= new mysqli("jurgendb.cxgmvowr0z4d.us-east-1.rds.amazonaws.com", "Jurgen", "Criatura211", "SchemaColegioHumanistico",3306);
if(mysqli_connect_errno()){
    echo "Este sitio esta presentando problemas";
}
$mysqli->set_charset("utf8");
?>

<?php

$Cedula = $_POST['Cedula'];
$Nombre = $_POST['Nombre'];
$Apellido = $_POST['Apellidos'];
$Seccion = $_POST['Seccion'];

$sql = "SELECT * FROM Estudiantes WHERE Cedula = '$Cedula'";
$result = $mysqli->query($sql);
$row = $result->fetch_array(MYSQLI_ASSOC);


if ($Cedula==$row['Cedula']) {
    echo "El estudiante ya existe en el sistema";
    echo  '<a href="../RegistroEst.html">Intentarlo nuevamente</a>';
}else {
    $query = "INSERT INTO Estudiantes(Cedula,Nombre,Apellidos,Seccion) VALUES('$Cedula','$Nombre','$Apellido','$Seccion')";
}

if($mysqli->query($query)){
    echo "Datos guardados";

}else{
    echo "<br>Ocurrio un error";
}

