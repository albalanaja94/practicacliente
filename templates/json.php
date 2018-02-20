<?php
header("Location: http://localhost/practica_cliente/templates/index.php");
include('db.php');

$db = new db();

$url = "http://datos.santander.es/api/rest/datasets/noticias_economia.xml";
$datos = simplexml_load_file($url);
$resource = $datos->resources->resource;
foreach($resource as $data){
	// echo $data->str[0] . "<br>";
	// echo $data->str[1] . "<br>";
	$sql = "INSERT INTO noticias (title, description) VALUES (?,?)";
	$resultado = $db->lanzar_consulta($sql, array((string)$data->str[0], (string)$data->str[1]));
}

$url2 = "http://xml.tutiempo.net/xml/8410.xml";
$datos2 = simplexml_load_file($url2);
$resource2 = $datos2->pronostico_horas->hora;
foreach($resource2 as $tiempo){
	// echo $tiempo->fecha . "<br>";
	// echo $tiempo->hora_datos . "<br>";
	// echo $tiempo->temperatura . "<br>";
	// echo $tiempo->texto . "<br>";
	// echo $tiempo->viento . "<br>";

	$sql = "INSERT INTO tiempo (fecha, hora_datos, temperatura, texto, viento) VALUES (?,?,?,?,?)";
	$resultado = $db->lanzar_consulta($sql, array((string)$tiempo->fecha, (string)$tiempo->hora_datos, (string)$tiempo->temperatura, (string)$tiempo->texto, (string)$tiempo->viento));
}



$db->desconectar();

?>