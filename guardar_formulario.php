<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = $_POST["nombre"];
  $email = $_POST["email"];
  $mensaje = $_POST["mensaje"];
  
  // Aquí puedes hacer lo que necesites con los datos, como guardarlos en un archivo de texto o enviarlos por correo electrónico
  
  // Ejemplo de guardado en archivo de texto
  $archivo = fopen("datos_formulario.txt", "a");
  fwrite($archivo, "Nombre: " . $nombre . "\n");
  fwrite($archivo, "Email: " . $email . "\n");
  fwrite($archivo, "Mensaje: " . $mensaje . "\n\n");
  fclose($archivo);
  
  // Redireccionar al usuario a una página de confirmación
  header("Location: confirmacion.html");
  exit;
}
?>