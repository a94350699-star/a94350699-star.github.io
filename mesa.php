<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura los datos del formulario
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $tipo = htmlspecialchars($_POST['tipo']);
    $descripcion = htmlspecialchars($_POST['descripcion']);

    // Opciones para enviar por correo electrónico
    $destinatario = "soporte@tudominio.com";
    $asunto = "Nuevo Ticket: " . $tipo;
    $mensaje = "Nombre: $nombre\n";
    $mensaje .= "Correo: $email\n";
    $mensaje .= "Tipo: $tipo\n\n";
    $mensaje .= "Descripción:\n$descripcion";
    
    $cabeceras = "From: " . $email;

    // Envía el correo
    if (mail($destinatario, $asunto, $mensaje, $cabeceras)) {
        echo "¡Ticket enviado con éxito! Nos pondremos en contacto contigo.";
    } else {
        echo "Error al enviar el ticket. Intenta de nuevo.";
    }
} else {
    echo "Acceso no válido.";
}
?>