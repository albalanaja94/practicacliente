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
			<th>Arte público</th>
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
<td class="arte">
<?= $fila["arte_publico"] ?>
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
 $("table tbody tr td.arte").each(function() {
  if(this.innerHTML == 1){
  	$(this).addClass('ico');
  }else{
  	$(this).addClass('no-ico');
  }
});
</script>

<?php 
$db->desconectar();

// $url = "http://www.zaragoza.es/ciudad/artepublico/buscar_ArtePublico";
// $xml = file_get_contents($url);
// $prueba = json_decode($xml);
// var_dump ( $prueba);
?>