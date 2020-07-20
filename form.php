<?php

require("src/PHPMailer.php");
require("src/SMTP.php");

// Valores enviados desde el formulario
if ( !isset($_POST["nombre"]) || !isset($_POST["apellido"]) || !isset($_POST["telefono"])  || !isset($_POST["email"]) ) {
    die ("Es necesario completar todos los datos del formulario");
}

$nombre = $_POST["nombre"];

$apellido = $_POST["apellido"];

$telefono = $_POST["telefono"];

$email = $_POST["email"];

$destinatario = ""; // Correo al que llegará la consulta //

// Datos de la cuenta de correo utilizada para enviar vía SMTP
$smtpHost = "";  // Dominio alternativo brindado en el email de alta
$smtpUsuario = "";  // Mi cuenta de correo
$smtpClave = "";  // Mi contraseña

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure       =   "ssl";
$mail->Mailer           =   "smtp";
$mail->Port = 465;
$mail->IsHTML(true);
$mail->CharSet = "utf-8";

$mail->SMTPDebug=0;

// VALORES A MODIFICAR //
$mail->Host = $smtpHost;
$mail->Username = $smtpUsuario;
$mail->Password = $smtpClave;


$mail->From = $smtpUsuario; // Email desde donde envío el correo.
$mail->FromName = $nombre;
$mail->AddAddress($destinatario); // Esta es la dirección a donde enviamos los datos del formulario

$mail->Subject = $nombre . ' ' . $apellido . ' quiere contactarse con CNEO.'; // Este es el titulo del email.

$html = '

	<html>

		<body>

			<h1>Nuevo pedido de contacto</h1>

			<hr>

			<p><b>Nombre: </b> '.$nombre.' </p>

			<p><b>Apellido: </b> '.$apellido.' </p>

			<p><b>Telefono: </b> '.$telefono.' </p>
			
			<p><b>E-mail: </b> '.$email.' </p>

		</body>

	</html>

';

$mail->Body = $html; // Texto del email en formato HTML
$mail->AltBody= "" ; // Texto sin formato HTML
// FIN - VALORES A MODIFICAR //

$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

$estadoEnvio = $mail->Send();
if($estadoEnvio){
    echo "El correo fue enviado correctamente.";
} else {
    echo "Ocurrió un error inesperado.";
}

?>