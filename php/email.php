
<?php



// Verifica el Referer
$referer = $_SERVER['HTTP_REFERER'];



$nombre = $_POST['nombre'];
$mail = $_POST['email'];
$telefono = $_POST['telefono'];
$mensajes = $_POST['mensaje'];



if(empty($nombre)){ 
    alert('El campo nombre no puede estar vacio');
} 
else if(empty($mail)){ 
    alert('El campo correo no puede estar vacio');
} 
else if(empty($telefono)){ 
    alert('El campo telefono no puede estar vacio');
} 
else if(empty($mensajes)){ 
    alert('El campo mensaje no puede estar vacio');
} 



$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . "\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Numero de Telefono: " . $telefono . " \r\n";
$mensaje .= "Mensaje: " . $mensajes. " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'ventas@facemca.com';
$asunto = 'Facemca.com';

mail($para, $asunto, utf8_encode(utf8_decode($mensaje)), $header);

/*echo "<script>window.location.href='Agradecimiento.html';</script>";*/
echo "<script>alert('El formulario ha sido enviado, nos podremos en contacto');window.location.href='Agradecimiento.html';</script>";




?>



