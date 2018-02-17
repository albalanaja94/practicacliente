<?php
header("Location: http://localhost/practica_cliente/templates/index.php");


//MONUMENTOS
//URL JSON
$req = 'http://www.zaragoza.es/georref/json/hilo/ver_Monumento';

//cURL junto con la URL
$cMonumento = curl_init($req);

//Opciones para leer
curl_setopt($cMonumento,CURLOPT_RETURNTRANSFER, TRUE);

//Se captura la url
$gMonumento = curl_exec($cMonumento);

//Descodificar
$getMonumento = json_decode($gMonumento,true);

//ALOJAMIENTOS
$reqA = 'http://www.zaragoza.es/georref/json/hilo/ver_Alojamiento';

$cAlojamiento = curl_init($reqA);

curl_setopt($cAlojamiento,CURLOPT_RETURNTRANSFER, TRUE);

$gAlojamiento = curl_exec($cAlojamiento);

$getAlojamiento = json_decode($gAlojamiento,true);


include('db.php');

$db = new db();

$sql = "INSERT INTO datos (monumentos, alojamientos) VALUES (?,?)";
$resultado = $db->lanzar_consulta($sql, array($gMonumento, $gAlojamiento));


$db->desconectar();

?>