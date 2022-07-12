<?php 
require_once "../models/page_model_class.php";
class PageController extends PageModel{

    public function __construct($data){
        parent::__construct($data);
      }

    public function showResponsePage($data) {
        switch ($data['page']) {
            case "home" :
                $this->showHomeDoc();
                break; 
            case "about" :
                $this->showAboutDoc();
                break;  
        }
        $view-> show();
    }
}

?>