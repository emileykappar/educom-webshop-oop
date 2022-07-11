<?php 

class PageController extends PageModel{

    function showResponsePage($data) {
        switch ($data['page']) {
            case "home" :
                $this->showHomeDoc();
                break; 
            
            case "login" :
                require_once 'user_controller.php';
                $userController = new UserController($this->model);
                $userController->login();
                break;
        }
        $view-> show();
    }
}

?>