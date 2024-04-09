<?php
class ConnectionDataBase
{
    private $serverName = "127.0.0.1";
    private $dataBase = "actividad";
    private $userName = "root";
    private $password = "1631";

    // Check connection
    function Connection()
    {
        try {
            $connection = $this->CreateConnection();
            echo "Conectado Correctamente.";
            $this->CloseConnection($connection);
        } catch (PDOException $exc) {
            die("No Se Pudo Establecer Conexion: " . $exc->getMessage());
        }
    }

    // Create connection
    function CreateConnection()
    {
        return mysqli_connect($this->serverName, $this->userName, $this->password, $this->dataBase);
    }

    // Close connection
    function CloseConnection($connection)
    {
        mysqli_close($connection);
    }
}
