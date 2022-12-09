<?php
session_start();

if(empty($_POST)){
    header('location: ../index.php');
}
?>

<?php
require '../Connect/connect.php';

$username = $_POST['username'];
$password = $_POST['password'];
$tbname = "Usuario";

if($mysqli->connect_error){
    die("la conexión falló" .$mysqli->connect_error);
}

$sql = "SELECT * FROM $tbname WHERE username = '$username'";

$result = $mysqli->query($sql);

if ($result->num_rows <= 0) {
    echo 'user o contraseña incorrecto <br>';
    echo  '<a href="../index.php">Intentarlo nuevamente</a>';
    exit();
}
$row = $result->fetch_array(MYSQLI_ASSOC);


if ($password==$row['password']) {

    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (15 * 60);


if ($_SESSION['username']=="root"){
    header('location: http://3.91.201.45/Sesiones1/SuperUser.html');
}elseif ($_SESSION['username']=="admin"){
    header('location:http://3.91.201.45/Sesiones1/Admin.php');
}

} else {
    echo "Username o Password estan incorrectos.";

    echo "<br><a href='../index.html'>Volver a Intentarlo</a>";
}
mysqli_close($mysqli);
?>
