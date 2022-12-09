<?php
require '../Connect/connect.php';

if(isset($_GET['Cedula'])){
    $Cedula=$_GET['Cedula'];
    $query="DELETE FROM Estudiantes WHERE Cedula='$Cedula'";
    if($mysqli->query($query)){
        echo "Registro eliminado";
    }else{
        echo "Error no se pudo eliminar el registro";
    }
}else{
    echo "Error no se pudo procesar la peticion";
}


