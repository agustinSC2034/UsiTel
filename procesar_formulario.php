<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtener los datos del formulario
  $name = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $message = $_POST["message"];

  // Validar los datos (opcional) 

  // Procesar los datos (por ejemplo, enviar un correo electrónico) usittel.fibra@gmail.com
  $to = "agustin.scutari@it-tel.com.ar";
  $subject = "Nuevo mensaje de contacto"; // Probar borrar esta linea
  $body = "Nombre: " . $name . "\n";
  $body .= "Correo electrónico: " . $email . "\n";
  $body .= "Asunto: " . $subject . "\n";
  $body .= "Mensaje: " . $message . "\n";

  if (mail($to, $subject, $body)) {
    echo "<script>alert("¡Gracias por tu mensaje! Nos pondremos en contacto contigo pronto.")</script>";
    echo "<script>setTimeout(\"location.href='index.html'\",1000)</script>";
  } else {
    echo "Hubo un error al enviar el mensaje. Por favor, inténtalo de nuevo más tarde.";
  }
}
?>