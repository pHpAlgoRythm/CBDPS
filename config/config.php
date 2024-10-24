<?php 

 class Database{
    private $host = 'localhost';
    private $dbName = 'KCBDPS';
    private $userName = 'root';
    private $password = '';
    public $conn;

    public function connect(){
        $this->conn = null;
        try{
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbName", $this->userName, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            echo 'connection error: ' . $e->getMessage(); 
           
        }
        return $this->conn;
    }

 }

?>