<?php
class Database
{

    private $host = "localhost";
    private $db_name = "login";
    private $username = "root";
    private $password = "";
    public $conn;

    // get the database connection
    public function getConnection()
    {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
            // Connected successfully
        } catch (PDOException $exception) {
            // Connection failed
            echo "Connection error: " . $exception->getMessage();
        }
        return $this->conn;
    }
}
?>