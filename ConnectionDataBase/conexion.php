<?php
class ConexionBD {
    private $servername;
    private $username;
    private $password;
    private $dbname;
    private $conn;

    // Constructor
    public function __construct() {
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->dbname = "proyectoDB";

        $this->conectar();
    }

    // Método para conectar a la base de datos
    public function conectar() {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        // Verificar la conexión
        if ($this->conn->connect_error) {
            die("Error de conexión: " . $this->conn->connect_error);
        }
    }

    // Método para ejecutar una consulta SQL
    public function consultar($sql) {
        $result = $this->conn->query($sql);
        $this->cerrar();
        return $result;
    }

    // Método para cerrar la conexión
    public function cerrar() {
        $this->conn->close();
    }
}
?>
