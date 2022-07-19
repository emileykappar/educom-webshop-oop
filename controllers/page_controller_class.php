<?php 
require_once "../models/page_model_class.php";
class PageController {

    // properties
    private $model;

    // methods
    public function __construct() {
        $this->model = new PageModel(NULL);
    } 

    public function handleRequest(){
        $this->getRequest();
        // $this->validateRequest();
        $this->showResponsePage();
    }

    private getRequest() { 
        $this->model->getRequestedPage(); // from the page model class
    }

    ///// dit hoeft nog niet voor 4.2b /////
    //private validateRequest() {
    //    switch ($this->model->page) {
    //        case "Login":
    //            $this->model = new UserModel;
    //            if ($model->checkLogin()) {
    //                $this->model->doLoginUser();
    //                $this->model->setPage("home");
    //            }
    //            break;
    //
    //
    //    }
    //}

    public function showResponsePage() {
        $this->model->createMenu();

        switch ($this->model->page) {
            case "Home" :
                require_once "../HomeDoc.php";
                $view = new HomeDoc($this->model);
                break; 
            case "About" :
                require_once "../AboutDoc.php";
                $view = new AboutDoc($this->model);
                break;        
        }
        $view-> show();
    }

    
    


    
}


?>