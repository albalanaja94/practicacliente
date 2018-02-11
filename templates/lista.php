<?php 
$nombre="";
if (!empty($_REQUEST['nombre'])){
$nombre=$_REQUEST['nombre'];
}
 
$email="";
if (!empty($_REQUEST['email'])){
$email=$_REQUEST['email'];
}
 
$dni="";
if (!empty($_REQUEST['dni'])){
$dni=$_REQUEST['dni'];
}
 
$edad="";
if (!empty($_REQUEST['edad'])){
$edad=$_REQUEST['edad'];
}
 
 
$archivo="../nombre.txt";

     $file=fopen($archivo,"a"); 
     fwrite($file,"<p>".$nombre."</p>"); 
     fclose($file);

$archivo="../email.txt";

     $file=fopen($archivo,"a"); 
     fwrite($file,"<p>".$email."</p>"); 
     fclose($file); 

$archivo="../dni.txt";

     $file=fopen($archivo,"a"); 
     fwrite($file,"<p>".$dni."</p>"); 
     fclose($file); 

$archivo="../edad.txt";

     $file=fopen($archivo,"a"); 
     fwrite($file,"<p>".$edad."</p>"); 
     fclose($file); 

header("Location: http://localhost/practica_cliente/templates/index.php?id=list", true, 301);
exit();

?>

