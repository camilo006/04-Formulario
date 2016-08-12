<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
</head>
<body>

<!--Crear Formulario 
	Envia los datos a procesar.php 
	metodo: post
	nombre del formulario: frm
-->
<form action="procesar.php" method="post" name="frm">

<!--campos de texto -->

<input type="text" name="nombre"
/>
<input type="text" name="apellido"/>
<input type="password" name="contraseña">
<!--Boton-->
<input type="submit" value="Enviar">
</form>
</body>
</html>