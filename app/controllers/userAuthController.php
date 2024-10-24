<?php 

    require_once __DIR__ . '/../models/userModel.php';
    session_start();

    class userAuthController{

        public function register(){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){

                
                $userName = $_POST['userName'];
                $passWord = $_POST['passWord'];
                $email = $_POST['email'];
                $fullName = $_POST['fullName'];
                $contactNumber = $_POST['contactNum'];
                $age = $_POST['age'];
                $dob = $_POST['dateOfBirth'];
                $gender = $_POST['gender'];
                $status = $_POST['status'];
                $sitio = $_POST['sitio'];
                $brgyId = $_POST['brgy'];
                 $role = $_POST['role']; 
                $createdAt = date("y:m:d h:i:s");

                $user = new user();

                if($user->register($userName, $passWord, $email, $fullName, $contactNumber, $age, $dob, $gender, $status, $sitio, $brgyId, $role, $createdAt)){
                    
                    header('location:authRoute.php?action=notLoggedIn');
                    exit;
                }else{
                    echo '<script>alert("Registration Failed") </script>';
                    ob_start();
                    header('location:authRoute.php?action=userNameTaken');
                    ob_end_flush();
                    exit;
                }
            }
        }

        public function login(){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $username = $_POST['username'];
                $password = $_POST['password'];

                $user = new user();
                $loggedInUser = $user->login($username, $password);

                if($loggedInUser){
                    session_regenerate_id(true);
                    $_SESSION['user'] = $loggedInUser;
                    header('location:authRoute.php?action=loggedIn');
                    exit;
                }else{
                    header('location:authRoute.php?action=notLoggedIn');
                    exit;
                }

            }else{
                echo 'sala ';
            }
        }

        public function logout() {
            session_destroy();  
            header('location:authRoute.php?action=notLoggedIn');
            exit;
        }

    }

?>