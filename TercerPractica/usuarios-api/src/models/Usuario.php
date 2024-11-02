<?php
class Usuario {
    private $conn;

    public function __construct() {
        $host = 'localhost';
        $user = 'root';
        $password = 'admin'; 
        $dbname = 'practica';

        // Crea la conexión
        $this->conn = new mysqli($host, $user, $password, $dbname);

        // Verifica la conexión
        if ($this->conn->connect_error) {
            die("Error de conexión: " . $this->conn->connect_error);
        }
    }

    public function obtenerTodosUsuarios() {
        $resultado = $this->conn->query("SELECT * FROM usuarios");
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }

    public function obtenerUsuarioPorId($id) {
        $stmt = $this->conn->prepare("SELECT * FROM usuarios WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $resultado = $stmt->get_result();
        return $resultado->fetch_assoc();
    }
}
