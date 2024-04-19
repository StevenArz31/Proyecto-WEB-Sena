<?php
require("../ConnectionDataBase/ConnectionDataBase.php");

class QuerysDataBase
{
    function doLogin($var){
        $conn = new ConnectionDataBase();
        
        if(!isset($var["username"])){
            return false;
        }
        if(!isset($var["password"])){
            return false;
        }
        $input_username = $var["username"];
        $input_password = $var["password"];
        // Consulta SQL para verificar las credenciales
        $sql = "SELECT * FROM usuarios WHERE num_identificacion='$input_username' AND contraseña='$input_password'";
        $result = $conn->Execute($sql);

        return $result->num_rows > 0;
    }
    
    function recoverPassword($email){
        $conn = new ConnectionDataBase();
        
        if($email==""){
            return false;
        }
        
        // Consulta SQL para verificar las credenciales
        $sql = "SELECT contraseña as contrasena FROM usuarios WHERE correo='$email' ";
        $result = $conn->Execute($sql);

        if ($result->num_rows > 0) {
            // obtener el resultado
            $row = $result->fetch_assoc();
            return $row['contrasena'];
        }
        return false;
    }
}
