<?php
error_reporting(E_ALL & ~E_WARNING);

require("../ConnectionDataBase/QuerysDataBase.php");

// Verifica si se han enviado datos de inicio de sesión
if ($_POST) {
    header('Content-Type: application/json');
    // Obtener el correo electrónico enviado desde el formulario
    $data = $_POST;
    $email = $data['email'];

    // Verificar si el correo electrónico está vacío
    if (empty($email)) {
        $response = [
            'success' => false,
            'message' => 'Por favor, introduce un correo electrónico.'
        ];
        echo json_encode($response);
        exit;
    }

    $conn = new QuerysDataBase();

    $password = $conn->recoverPassword($email);

    if(!$password){
        $response = array(
            'success' => false,
            'message' => 'El usuario no existe');
        echo json_encode($response);
        exit;
    }

    // Configuración para enviar correo
    $from = "lbruges1@gmail.com"; // Dirección de correo electrónico del remitente
    $subject = "Recuperación de Contraseña"; // Asunto del correo electrónico
    $headers = "From: $from" . "\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
    $mensaje = "Su contraseña es $password";

    // Envío del correo electrónico
    if (mail($email, $subject, $mensaje, $headers)) {
        $response = array('success' => true, 'message' => 'Se ha enviado un correo electrónico con tu nueva contraseña.');
    } else {
        $response = array('success' => false, 'message' => 'Error al enviar el correo electrónico.');
    }

    echo json_encode($response);
}