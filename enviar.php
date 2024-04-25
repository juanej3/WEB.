<html>
<head>
<title>Contacto</title>
</head>
<body>
<?php
// Recuperar los datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

// Correo electrónico al que se enviará el formulario
$destinatario = 'brendaluceromartinez33@gmail.com';

// Asunto del correo electrónico
$asunto = 'Mensaje de contacto desde la página web';

// Construir el cuerpo del mensaje
$cuerpoMensaje = "Nombre: $nombre\n";
$cuerpoMensaje .= "Email: $email\n";
$cuerpoMensaje .= "Mensaje:\n$mensaje";

// Enviar el correo electrónico
if (mail($destinatario, $asunto, $cuerpoMensaje)) {
    echo '<p>¡Gracias por contactarnos! Tu mensaje ha sido enviado con éxito.</p>';
} else {
    echo '<p>Lo sentimos, ha ocurrido un error al enviar tu mensaje. Por favor, inténtalo de nuevo más tarde.</p>';
}
?>
</body>

</html>