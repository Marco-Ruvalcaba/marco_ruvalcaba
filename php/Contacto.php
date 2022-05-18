<?php
$nombre  = $_POST['nombre'];
$empresa = $_POST['empresa'];
$correo  = $_POST['correo'];
$asunto  = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

$header =  "From: " . $mail . "\r\n";
$header .= "X-mailer: PHP/" . phpversion() . "\r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message =  "Este mensaje fue enviado por:" . $nombre . "\r\n";


$para = "marco.ruvalcaba.angel@gmail.com";

mail($para, $asunto, $message, $header);
echo "<script> ('correo enviado exitosamente') </script>";
echo "<script> setTimeout(\"location.href='index.html'\",100) </script>";

?>
