<div class="cuerpo">
<img class="cabecera" src="../images/social-media.jpg" alt="">
<div class="body">
<h1>Lista de suscripciones</h1>
<table>
	<thead>
		<tr>
			<th>Nombre</th>
			<th>Email</th>
			<th>DNI</th>
			<th>Edad</th>
			<th>Monumentos</th>
			<th>Alojamientos</th>
		</tr>
	</thead>
<?php 

include('db.php');

$db = new db();

$sql = "SELECT * FROM persona";
$resultado = $db->lanzar_consulta($sql);
while($fila= $resultado->fetch_assoc()){
?>
<tr>
<td class="nombre">
<?= $fila["nombre"] ?>
</td>
<td class="email">
<?= $fila["email"] ?>
</td>
<td class="dni">
<?= $fila["dni"] ?>
</td>
<td class="edad">
<?= $fila["edad"] ?>
</td>
<td class="monumentos">
<?= $fila["monumentos"] ?>
</td>
<td class="alojamientos">
<?= $fila["alojamientos"] ?>
</td>
</tr>
<?php 
}
 ?>
</table>
</div>
</div>
<script>
 $("table tbody tr td.monumentos").each(function() {
  if(this.innerHTML == 1){
  	$(this).addClass('ico');
  }else{
  	$(this).addClass('no-ico');
  }
});
 $("table tbody tr td.alojamientos").each(function() {
  if(this.innerHTML == 1){
  	$(this).addClass('ico');
  }else{
  	$(this).addClass('no-ico');
  }
});
</script>

<?php 
$db->desconectar();
?>