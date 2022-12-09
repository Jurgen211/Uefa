<?php
$mysqli= new mysqli("jurgendb.cxgmvowr0z4d.us-east-1.rds.amazonaws.com", "Jurgen", "Criatura211", "SchemaColegioHumanistico",3306);
if(mysqli_connect_errno()){
    echo "Este sitio esta presentando problemas";
}
$mysqli->set_charset("utf8");
?>