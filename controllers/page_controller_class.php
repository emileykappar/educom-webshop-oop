<?php 
require_once "../models/page_model_class.php";
class PageController extends PageModel{

    // properties
    protected $page;

    // methods
    public function __construct($page) {
        $this->page = $page;
    } 

    public function showResponsePage($page) {
        switch ($page) {
            case "home" :
                $this->showHomeDoc();
                break; 
            case "about" :
                $this->showAboutDoc();
                break;        
        }
        $view-> show();
    }
    
    public function handleRequest(){
        $this->showResponsePage($page);
    }

    
}


?>