<?php
require_once "../Connect/connect.php";

$Dia=$_POST['Dia'];
$Comida=$_POST['Comida'];
$Refresco=$_POST['Refresco'];
$Tiempo=$_POST['Tiempo'];

$query="INSERT INTO Menu(Dia,Comida,Refresco,Tiempo) VALUES('$Dia','$Comida','$Refresco','$Tiempo')";
if($mysqli->query($query)){
    echo "Datos guardados";

}else{
    echo "Ocurrio un error";
}