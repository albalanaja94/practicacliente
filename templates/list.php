<div class="cuerpo">
<img class="cabecera" src="../images/social-media.jpg" alt="">
<div class="body">
<h1>Lista de suscripciones</h1>
<div class="content">
	<div class="nombre">
		<label>Nombre</label>
		<div class="datos" "><?php  include("../nombre.txt"); ?></div>
	</div>
	<div class="email">
		<label>Email</label>
		<div class="datos" "><?php  include("../email.txt"); ?></div>
	</div>
	<div class="dni">
		<label>DNI</label>
		<div class="datos" "><?php  include("../dni.txt"); ?></div>
	</div>
	<div class="edad">
		<label>Edad</label>
		<div class="datos" "><?php  include("../edad.txt"); ?></div>
	</div>
</div>
</div>
</div>
<script>
 $('.datos > p').each(function() {
 	if(this.innerHTML == ""){
 		this.remove();
 	}
});
</script>

