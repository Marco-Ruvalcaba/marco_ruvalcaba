<?php
//$nombre = $_POST['nombre'];
//$empresa = $_POST['empresa'];
//$correo = $_POST['correo'];
//$asunto = $_POST['asunto'];
//$mensaje = $_POST['mensaje'];

$nombre = "Marco Ruvalcaba";
$empresa = "Freelancer";
$correo = "marco.ruvalcaba.angel@gmail.com";
$asunto = "Correo de prueba";
$mensaje = "Esto es un correo de prueba";

$destinatario = "marco.ruvalcaba.angel@gmail.com";

$header =  " ---- HEADER ---- ". "<br>";
$header .= "Nombre: " . $nombre . "<br>";
$header .= "Empresa: ". $empresa. "<br>";
$header .= "Correo: " . $correo . "<br>";
$header .= "Asunto: " . $asunto . "<br>";
$header .= "<br>";


//mail($destinatario, $asunto, $mensaje, $header);

echo $header;
echo $mensaje;

//header("Location:index.html");

?>
