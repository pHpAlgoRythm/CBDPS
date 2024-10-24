<?php

require_once __DIR__ . '/../../config/config.php';

    class brgy{
        private $conn;
        private $table = 'brgy_tbl';
       
   

    public function __construct(){
        $database = new Database();
        $this->conn = $database->connect();
    }

    public function retriveBrgy($brgyId){
        
        $query = "SELECT * FROM $this->table WHERE brgy_id = :brgyId";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':brgyId', $brgyId);

        $stmt->execute();
        
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if($result){
            
            return  $result;
        }else{
            echo "can't retrive";
        }
        

    }


    }
?>