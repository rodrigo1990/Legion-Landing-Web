<?php 
	error_reporting(0);

	//variables POST
    $nombre_recibido = $_POST['nombre'];
    $telefono_recibido = $_POST['telefono'];
  	$email_recibido = $_POST['email'];
  	$mensaje_recibido = $_POST['mensaje'];
    $autoadmin = $_POST['autoadmin'];
    $cantidadSecciones = $_POST['cantidadSecciones'];
 
	require("class.phpmailer.php");
    $mail = new PHPMailer();

    //Luego tenemos que iniciar la validación por SMTP:
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->Host = "162.255.162.75"; // SMTP a utilizar. Por ej. smtp.elserver.com
    $mail->Username = "rodrigo@legioncreativa.com"; // Correo completo a utilizar
    $mail->Password = "Reynoso123"; // Contraseña
    $mail->Port = "465"; // Puerto a utilizar
    $mail->SMTPSecure = 'ssl'; // instead of tls
			
    $cuerpo = '<table align="center" style="border-color: #666" cellpadding="10">
    <tbody>
        <tr>
            <td colspan="2">
            <h1 align="center" style="font-weight: 100; color: #696969">Nuevo Formulario</h1>
            </td>
            </tr>
            <tr style="background: #eee">
            <td>
            <strong>Nombre:</strong>
            </td>
            <td>'. $nombre_recibido .'</td>
            </tr>
            <tr>
            <td>
            <strong>Tel&eacute;fono:</strong>
            </td>
            <td>'. $telefono_recibido .'</td>
            </tr>
            <tr>
            <td>
            <strong>Mail:</strong>
            </td>
            <td>'. $email_recibido .'</td>
            </tr>
            <tr>
            <td>
            <strong>Mensaje:</strong>
            </td>
            <td>'. $mensaje_recibido .'</td>
            </tr>';

    
    if($autoadmin=="1"){
    $cuerpo .= '
        <tr>
        <td><strong>Es autoadministrable</strong></td>
        <td>SI</td>
    
        </tr>';    
    }else {
        $cuerpo .= '
        <tr>
        <td><strong>Es autoadministrable</strong></td>
        <td>NO</td>
    
        </tr>';
    }

    if($cantidadSecciones!=""){
    
        $cuerpo .= '
        <tr>
        <td><strong>Cantidad de secciones</strong></td>
        <td>'.$cantidadSecciones.'</td>
    
        </tr>';
    }






     $cuerpo.='</tbody></table>';

    $mail->IsHTML(true); // El correo se envía como HTML
    $mail->From = "info@legioncreativa.com";
    $mail->FromName = "" . $nombre_recibido;
    $mail->Subject = "Formulario de contacto";
    $mail->AddAddress("daniela.m@legioncreativa.com","Legion Creativa");
    $mail->Body = $cuerpo;
    $mail->AltBody = "";
    $mail->Send();
 	
 	echo "&iexcl;Gracias por comunicarte con nosotros!<br />Te llamaremos a la brevedad.";
?>