<?

$nombre = $_POST['nombre'];
$mail = $_POST['email'];
$empresa = $_POST['empresa'];
$telefono = $_POST['telefono'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ", de la empresa " . $empresa . " \r\n";
$mensaje .= "Su e-mail es: " . $email . " \r\n";
$mensaje .= "Su telefono de contacto es: " . $telefono . " \r\n";
$mensaje .= "Mensaje: " . $_POST['cuerpo'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'ventas@kontrol-mza.com.ar';
$asunto = 'Contacto desde kontrol-mza.com.ar';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:gracias.html")

?>