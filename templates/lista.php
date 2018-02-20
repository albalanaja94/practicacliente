<?php 

include('db.php');


$nombre = $_POST['nombre'];
$email = $_POST['email'];
$dni = $_POST['dni'];
$edad = $_POST['edad'];
if(isset($_POST['noticias'])){
     $noticias = 1;
}else{
     $noticias = 0;
}
if(isset($_POST['tiempo'])){
     $tiempo = 1;
}else{
     $tiempo = 0;
}
$error = '';
$db = new db();

$sql = "INSERT INTO persona (nombre, email, edad, dni, noticias, tiempo) VALUES (?,?,?,?,?,?)";
$resultado = $db->lanzar_consulta($sql, array($nombre, $email, $edad, $dni, $noticias, $tiempo));



$db->desconectar();

header("Location: http://localhost/practica_cliente/templates/index.php?id=list");

?>

