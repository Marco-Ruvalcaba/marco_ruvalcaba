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

mail($para, $asunto, utf8_decode($message), $header);

header("Location:index.html");
?>
