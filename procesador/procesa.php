<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8" collation utf8-spanish-ci>
 <title>Cristian Tileria | Albañileria General</title>
</head>
<body>
<?php 
$destino = "tu@email.com";
$asunto = "Formulario de contacto de www.tuweb.com.ar";
$message = "Hola webmaster, este mensaje viene del formulario del sitio web";
$web = utf8_decode("\nRegresar a página principal: www.tuweb.com.ar");
$nombre = utf8_decode($_POST["nombre"]);//utf8_encode() pasa a utf los caracteres recibidos.(error, en realidad decode los decodifica y pasa a utf8 para que los reciba con las ñ y acentos) 
$apellido = utf8_decode($_POST["apellido"]);
$provincia = utf8_decode($_POST["provincia"]);
$localidad = utf8_decode($_POST["localidad"]);
$email = utf8_decode($_POST["email"]);
$domicilio = utf8_decode($_POST["domicilio"]);
$consulta = utf8_decode($_POST["message"]);
$contenido = "Nombre: " . $nombre . "\nApellido: " . $apellido . "\nProvincia: " . $provincia . "\nLocalidad: " . $localidad . "\nEmail: " . $email ."\nConsulta:" . $consulta  . $web;
mail($destino, $asunto, $contenido , $message);
/*mail($to, $subject, $message);*/
header("Location:gracias.php");
 ?>
</body>
</html>


