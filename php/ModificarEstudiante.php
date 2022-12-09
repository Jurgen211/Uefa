<?php

require '../Connect/connect.php';
$cedula =$_POST ['cedula'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$seccion = $_POST['seccion'];
$nuevoN = $_POST['NuevoNombre'];
$nuevoA =  $_POST['NuevoApellidos'];
$nuevoS =  $_POST['NuevoSeccion'];
if($nuevoN!=""&&$nuevoA!=""&&$nuevoS!=""){
    $cons="SELECT * FROM Estudiantes WHERE Cedula='$cedula'";
    $consulta1=$mysqli->query($cons);
    $fila=$consulta1->fetch_array(MYSQLI_ASSOC);

    $nombre= $nuevoN;
    $apellidos=$nuevoA;
    $seccion=$nuevoS;
    $campos="Nombre='$nombre',Apellidos='$apellidos',Seccion='$seccion'";


}else{
    $campos="Cedula='$cedula' Nombre='$nombre',Apellidos='$apellidos',Seccion='$seccion'";
}
$query="UPDATE Estudiantes SET $campos WHERE Cedula='$cedula'";
if($mysqli->query($query)){
    echo "Datos actualizados";
}else{
    echo "Error no se pudo actualizar los datos";
}