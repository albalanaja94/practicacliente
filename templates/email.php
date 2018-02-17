<?php
include('db.php');

$db = new db();

$sqlM = "SELECT 'monumentos' FROM datos";
$resultadoM = $db->lanzar_consulta($sqlM);
$filaM = $resultadoM->fetch_assoc();
var_dump($filaM);
$db->desconectar();
?>