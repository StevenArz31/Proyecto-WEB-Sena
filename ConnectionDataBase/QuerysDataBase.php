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
        $sql = "SELECT * FROM user WHERE identification_number='$input_username' AND password='$input_password'";
        $result = $conn->Execute($sql);

        return $result->num_rows > 0;
    }

    function recoverPassword($email){
        $conn = new ConnectionDataBase();
        
        if($email==""){
            return false;
        }
        
        // Consulta SQL para verificar las credenciales
        $sql = "SELECT password FROM user WHERE email='$email'";
        $result = $conn->Execute($sql);

        if ($result->num_rows > 0) {
            // obtener el resultado
            $row = $result->fetch_assoc();
            return $row['password'];
        }
        return false;
    }
}
