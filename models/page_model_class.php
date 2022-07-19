<?php 

class PageModel {

    // properties
    public $page;
    protected $isPost = false;
    public $menu;
    public $errors = array();
    public $genericError = "";
    protected $sessionManager;

    // methods

    public function getRequestedPage() {
        $this->isPost = ($_SERVER['REQUEST_METHOD'] == 'POST');
        if ($this->isPost) {
            require_once "Util.php";
            $this-> setPage(Util::getPostVar("page","home"));
        } else {
            $this->setPage($this->getUrlVar("page","home"));
        }
    }
    
    public function createMenu() {
        $this->menu['home'] = new MenuItem('home', 'Home');
        $this->menu['about'] = new MenuItem('about', 'About');
    }
}

?>