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
}
