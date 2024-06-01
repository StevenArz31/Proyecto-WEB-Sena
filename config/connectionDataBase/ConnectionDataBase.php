<?php
class ConnectionDataBase
{
    private $serverName;
    private $dataBase;
    private $userName;
    private $password;
    private $port;
    private $connection;
    
    public function __construct() {
        $this->serverName = "127.0.0.1";
        $this->dataBase = "proyectoweb";
        $this->userName = "root";
        $this->password = "163131";
        $this->port = 3306;
    }

    // Create connection
    function CreateConnection()
    {
        $this->connection = mysqli_connect($this->serverName, $this->userName, $this->password, $this->dataBase, $this->port);
        if ($this->connection->connect_error) {
            throw new Exception("ERROR DE CONEXIÓN");
        }
        return $this->connection;
    }

    // Close connection
    public function CloseConnection()
    {
        mysqli_close($this->connection);
    }
}
