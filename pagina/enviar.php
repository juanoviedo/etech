<?php
	$destino= "admin@etechingenieria.com";
	$nombre = $_POST["nombre"];
	$empresa= $_POST["empresa"];
	$correo= $_POST["correo"];
	$telefono= $_POST["telefono"];
	$contenido= "Nombre: " . $nombre . "\nEmpresa: " . $empresa . "\nCorreo: " . $correo . "\nTelefono: " . $telefono;
	mail($destino, "Mensaje de Pagina Web", $contenido);
	header("Location:gracias.html");
?>

<!-- 
<?php
	$destino= "admin@etechingenieria.com";
	$nombre = $_POST["nombre"];
	$empresa= $_POST["empresa"];
	$correo= $_POST["correo"];
	$telefono= $_POST["telefono"];
	$mensaje= $_POST["mensaje"];
	$contenido= "Nombre: " . $nombre . "\nEmpresa: " . $empresa . "\nCorreo: " . $correo . "\nTelefono: " . $telefono . "\nMensaje: " . $mensaje;
	mail($destino, "Mensaje de Pagina Web", $contenido);
	header("Location:gracias.html");
?> -->