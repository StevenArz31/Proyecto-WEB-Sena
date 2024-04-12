<?php
class ConnectionDataBase
{
    private $serverName = "127.0.0.1";
    private $dataBase = "maifag";
    private $userName = "steven";
    private $password = "163131";
    private $port = "3308";

    // Check connection
    function Connection()
    {
        try {
            return $this->CreateConnection();
        } catch (PDOException $exc) {
            die("No Se Pudo Establecer Conexion: " . $exc->getMessage());
        }
        return null;
    }

    // Create connection
    function CreateConnection()
    {
        return mysqli_connect($this->serverName, $this->userName, $this->password, $this->dataBase, $this->port);
    }

    // Close connection
    function CloseConnection($connection)
    {
        mysqli_close($connection);
    }
}
