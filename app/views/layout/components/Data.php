<?php 




class userData {

    public $fullName = '';
    public $email = '';
    public $brgyId = '';
    public $brgyName = '';

    public function retrival() {
        require_once '../../models/userModel.php';  

        if (isset($_SESSION['user']['user_id'])) {
            $id = $_SESSION['user']['user_id'];  
            $user = new user();  

            $data = $user->retrieveData($id); 

            if ($data) {
                
                $this->fullName = htmlspecialchars($data['full_name']);
                $this->email = htmlspecialchars($data['email']);
                $this->brgyId = htmlspecialchars($data['brgy_id']);
            }
        } else {
           
            echo "User not logged in.";
        }
    }

    public function retriveBrgy(){
        require_once '../../models/brgyModel.php';

        $brgyId = $this->brgyId;
        $brgy = new brgy();
        $brgyData = $brgy->retriveBrgy($brgyId);

        if($brgyData){
              $this->brgyName = $brgyData['brgy_name'];
        }else{
            $this->brgyName = '';
        }

    }
}


   

?>