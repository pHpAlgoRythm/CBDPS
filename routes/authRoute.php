<?php 

    require_once '../app/controllers/userAuthController.php';
    require_once '../app/controllers/viewController.php';

    $action = $_GET['action'] ?? '';

    $userController = new userAuthController();
    $viewController = new view();


    switch($action){
        case 'register':
            $userController->register();
            break;
        case 'login':
            $userController->login();
            break;   
        case 'loggedIn':
            $viewController->loggedIn();
            break;
        case 'notLoggedIn':
            $viewController->notLoggedIn();
            break;
        case 'userNameTaken':
            $viewController->userNameTaken();
            break;
        case 'logout':
            $userController->logout();
            break;
        
       
    }



 
?>