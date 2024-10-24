<?php 


require_once __DIR__ . '/../../config/config.php';



class user{
    private $conn;
    private $table = 'user';

    public function __construct(){
        $database = new Database();
        $this->conn = $database->connect();
    }

    public function register($userName, $passWord, $email, $fullName, $contactNumber, $age, $dob, $gender, $status, $sitio, $brgyId, $role, $createdAt) {

        $hashedPassword = password_hash($passWord, PASSWORD_DEFAULT);
    
        $checkQuery = "SELECT user_name FROM $this->table WHERE user_name = :userName";
        $checkStmt = $this->conn->prepare($checkQuery);
        $checkStmt->bindParam(':userName', $userName);
        $checkStmt->execute();
    
        if ($checkStmt->rowCount() > 0) {
            return false;
        }
    
       
        $query = "INSERT INTO $this->table (user_name, password, email, full_name, contact_number, age, dob, gender, status, sitio, brgy_id, role, created_at) 
                  VALUES (:userName, :password, :email, :fullName, :contactNumber, :age, :dob, :gender, :status, :sitio, :brgyId, :role, :createdAt)";
    
        $stmt = $this->conn->prepare($query);
    
        $stmt->bindParam(':userName', $userName);
        $stmt->bindParam(':password', $hashedPassword);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':fullName', $fullName);
        $stmt->bindParam(':contactNumber', $contactNumber);
        $stmt->bindParam(':age', $age);
        $stmt->bindParam(':dob', $dob);
        $stmt->bindParam(':gender', $gender);
        $stmt->bindParam(':status', $status);
        $stmt->bindParam(':sitio', $sitio);
        $stmt->bindParam(':brgyId', $brgyId);
        $stmt->bindParam(':role', $role);
        $stmt->bindParam(':createdAt', $createdAt);
    
     
        if ($stmt->execute()) {
            echo 'User registered successfully';
            return true;
        } else {
            echo 'Failed to register user';
            return false;
        }
    }
    

    public function login($username, $password){
        $query = "SELECT * FROM $this->table WHERE user_name = :username";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if($user && password_verify($password, $user['password'])){
            return $user;
        }
            return false;

    }

    public function retrieveData($id) {
        
        $fullName = '';
        $email = '';
        $brgy_id = '';
    
        
        $query = "SELECT * FROM $this->table WHERE user_id = :id";
    
        
        $stmt = $this->conn->prepare($query);
    
        
        $stmt->bindParam(':id', $id);
    
       
        $stmt->execute();
    
        
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
        if ($result) {
           
            $fullName = $result['full_name'];
            $email = $result['email'];
            $brgy_id = $result['brgy_id'];
    
          
            return [
                'full_name' => $fullName,
                'email' => $email,
                'brgy_id' => $brgy_id
            ];
        } else {
            
            return null;
        }
    }
    

}

?>