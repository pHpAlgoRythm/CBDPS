<?php


    class view{

        public function loggedIn(){

            
            session_start();
            $role = $_SESSION['user']['role'];

            if($role === 'resident'){
                  
                header('location:../app/views/user/userDashboard.php');
                exit;
            }elseif($role === 'admin'){
                header('location:../app/views/admin/welcome.php');
                exit;
            }
          
        }

        public function notLoggedIn(){
            header('location:../app/views/layout/loginPage.php');
            exit;
        }

        public function userNameTaken(){
            echo '<script> alert("Username is already taken") </script>';
            $this->notLoggedIn();
        }

    }

?>