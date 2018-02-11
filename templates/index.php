<?php
if(isset($_REQUEST['id'])){
	$id = $_REQUEST['id'];
}else{
	$id = 'presentacion';
}
?>
<!-- ?id=url -->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/static.js"></script>
</head>

<body>
	<header id="header" class="">
		<div class="all">
			<div class="logo">RSS</div>
		<nav class="menu">
			<ul>
				<li class="home"><a class="enlace" href='index.php'>Home</a></li>
				<li class="inscribete"><a class="enlace" href='?id=formulario'>Inscríbete</a></li>
				<li class="ver"><a class="enlace" href='?id=list'>Ver todas las suscripciones</a></li>
			</ul>
		</nav>
	</div>
	</header><!-- /header -->
	<?php 
		include_once($id . '.php');
	?>
	<footer>
		<div class="all">
		<div class="madein">
			<p>Alba Martínez Labrador</p>
		</div>
		<div class="social-networks">
			<a href="#" class="fb">Facebook</a>
			<a href="#" class="tw">Twitter</a>
			<a href="#" class="ig">Instagram</a>
			<a href="#" class="lk">LinkedIn</a>
		</div>
	</div>
	</footer>
</body>

</html>
