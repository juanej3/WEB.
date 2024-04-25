<html>
<head>
<title>Guardar informacion</title>
<body>
<?php
// Verificar si se recibieron datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $mensaje = $_POST["mensaje"];

    // Crear una cadena con los datos formateados
    $info_cliente = "Nombre: $nombre\nCorreo Electrónico: $email\nTeléfono: $telefono\nMensaje: $mensaje\n";

    // Ruta del archivo donde se guardarán los datos
    $archivo = "clientes.txt";

    // Guardar los datos en el archivo
    if (file_put_contents($archivo, $info_cliente, FILE_APPEND | LOCK_EX) !== false) {
        echo "¡Gracias por contactarnos! Tus datos han sido guardados.";
    } else {
        echo "Ocurrió un error al guardar tus datos. Por favor, inténtalo de nuevo más tarde.";
    }
} else {
    // Si no se recibieron datos por el método POST, redirigir al formulario
    header("Location: formulario_contacto.html");
    exit;
}
?>
</body>
</html>
