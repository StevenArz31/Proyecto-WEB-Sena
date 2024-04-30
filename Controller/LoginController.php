<?php
require("../ConnectionDataBase/QuerysDataBase.php");

// Verifica si se han enviado datos de inicio de sesión
if ($_POST) {

    // Obtiene los datos enviados
    $input_username = $_POST['username'];
    $input_password = $_POST['password'];

    $query = new QuerysDataBase();
    
    $result = $query->doLogin($_POST);

    if ($result==true) {
        $response = array("success" => true, "message" => "Inicio de sesión exitoso");
    } else {
        $response = array("success" => false, "message" => "Credenciales incorrectas");
    }

    // Devolver respuesta como JSON
    header('Content-Type: application/json');
    echo json_encode($response);
}
?>
