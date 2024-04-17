<?php
class ConnectionDataBase
{
    private $serverName = "127.0.0.1";
    private $dataBase = "proyectoDB";
    private $userName = "root";
    private $password = "";
    private $conn;

    function __construct(){
        $this->conn = $this->CreateConnection();
    }

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
    function CloseConnection()
    {
        mysqli_close($this->conn);
    }

    public function Execute($sql) {
        $result = $this->conn->query($sql);
        $this->CloseConnection();
        return $result;
    }
}
