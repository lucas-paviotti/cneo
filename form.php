<?php 
		require("src/PHPMailer.php");
		require("src/SMTP.php");

		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$telefono = $_POST['telefono'];
		$mail = $_POST['mail'];

		$mail = new PHPMailer();

		$mail->IsHTML(true);

		$mail->IsSMTP();

		$mail->SMTPSecure = "ssl";

		//$mail->SMTPDebug=1;

		$mail->SMTPAuth=true;

		$mail->Mailer="";
		
		$mail->Host='';

		$mail->Port=asd;

		$mail->Username = '';

		$mail->Password = '';

		$mail->From = $email;

		$mail->FromName = $nombre;

		$mail->AddAddress('');

		$mail->Subject = $nombre . ' ' . $apellido . 'quiere contactarse con CNEO.';

		$mail->CharSet = 'UTF-8';

		$mail->AltBody= "" ;

		$html = '

			<html>

				<body>

					<h1>Nuevo pedido de contacto</h1>

					<hr>

					<p><b>Nombre: </b> '.$nombre.' </p>

					<p><b>apellido: </b> '.$apellido.' </p>

					<p><b>Telefono: </b> '.$telefono.' </p>
					
					<p><b>E-mail: </b> '.$mail.' </p>

				</body>

			</html>

		';

		$mail->Body = $html;
		$exito = $mail->Send();

		if ($exito){
   			echo "success";
		}else{
		    echo "invalid";
		}
 ?>