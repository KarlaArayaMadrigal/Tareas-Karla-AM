<?php
namespace src\db;

use PDO;
use PDOException;

class Database {
    private $host = "localhost";
    private $db_name = "practica";
    private $username = "root";  // Cambia esto si tienes otro usuario
    private $password = "";      // Añade la contraseña si tienes una
    public $conn;

    public function getConnection() {
        $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        } catch (PDOException $exception) {
            echo "Error de conexión: " . $exception->getMessage();
        }

        return $this->conn;
    }
}
?>
