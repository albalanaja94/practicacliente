<?php
include('db.php');

$db = new db();

$sqlE = "SELECT * FROM persona";
$resultadoE = $db->lanzar_consulta($sqlE);
while($filaE= $resultadoE->fetch_assoc()){
	$email[] = $filaE["email"];
}
// print_r($email);

$sqlN = "SELECT * FROM noticias";
$resultadoN = $db->lanzar_consulta($sqlN);
while($filaN= $resultadoN->fetch_assoc()){
	$title[] = $filaN["title"];
	$description[] = $filaN["description"];
}

print_r($description);

$db->desconectar();
?>