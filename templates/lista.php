<?php 

include('db.php');


$nombre = $_POST['nombre'];
$email = $_POST['email'];
$dni = $_POST['dni'];
$edad = $_POST['edad'];
if(isset($_POST['monumentos'])){
     $monumentos = 1;
}else{
     $monumentos = 0;
}
if(isset($_POST['alojamientos'])){
     $alojamientos = 1;
}else{
     $alojamientos = 0;
}
$error = '';
$db = new db();

$sql = "INSERT INTO persona (nombre, email, edad, dni, monumentos, alojamientos) VALUES (?,?,?,?,?,?)";
$resultado = $db->lanzar_consulta($sql, array($nombre, $email, $edad, $dni, $monumentos, $alojamientos));



$db->desconectar();

header("Location: http://localhost/practica_cliente/templates/index.php?id=list");

?>

