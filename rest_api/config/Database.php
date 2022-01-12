<?php 
class Database {
    private $host = "localhost";
    private $username = "arslan";
    private $password = "arslan";
    private $database = "rest_api";

    private $conn;

    public function connect()
    {
        $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host=". $this->host .";dbname=". $this->database ,$this->username,$this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);            
        } catch (PDOException $e) {
            echo "Connection Error".$e;
        }

        return $this->conn;
    }

}


?>