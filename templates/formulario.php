<div class="cuerpo">
<img class="cabecera" src="../images/social-media.jpg" alt="">
<div class="body">
<h1>Introduce tus datos</h1>
<form id="formulario" method="post" action="?id=lista">
	<div class="nombre">
		<label>Nombre:</label>
		<input id="nombre" type="text" name="nombre" placeholder="Introduce tu nombre">
	</div>
	<div class="email">
		<label>Email:</label>
		<input id="email" type="email" name="email" placeholder="Introduce tu email">
	</div>
	<div class="dni">
		<label>DNI:</label>
		<input id="dni" type="text" name="dni" placeholder="Introduce tu dni">
	</div>
	<div class="edad">
		<label>Edad:</label>
		<input id="edad" type="text" name="edad" placeholder="Introduce tu edad">
	</div>
	<input type="button" value="Enviar" id="enviar" onclick="validar()">
</form>
</div>
</div>
<script>
	function validar() {
    var dni = /^\d{8}[A-Z]{1}$/;
    if (dni.test(document.getElementById("dni").value)) {
        if (confirm("¿Desea enviar el formulario?")) {
            document.getElementById("formulario").submit();
        }
    } else {
        alert("Error: campo DNI incorrecto");
    }
}
</script>
