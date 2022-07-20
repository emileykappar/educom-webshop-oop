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
    public function __construct($copy) { 
        if (empty($copy)) {
            // create the first instance of  the Page Model
            require_once "session_manager.php";
            $this->sessionManager = new SessionManager(); // link to session manager file
        } else {
            // or called  from the constructor of an extended class
            $this->page = $copy->page;
            $this->isPost = $copy->isPost;
            $this->menu = $copy->menu;
            $this->genericError = $copy->genericError;
            $this->sessionManager = $copy->sessionManager;
        }
    }

    public function getRequestedPage() {
        $this->isPost = ($_SERVER['REQUEST_METHOD'] == 'POST');
        if ($this->isPost) {
            $this->setPage($this->getPostVar("page","home"));
        } else {
           $this->setPage($this->getUrlVar("page","home"));
        }
    }

    protected function setPage($newPage) {
        $this->page = $newPage;
    }

    private function getUrlVar($key, $default ='') {
    }
    
    
    public function createMenu() {
        require_once "menu_item.php";
        $this->menu['home'] = new MenuItem('home', 'Home');
        $this->menu['about'] = new MenuItem('about', 'About');
        //$this->menu['contact'] =  new ContactDoc('contact', 'Contact');
        //$this->menu['webshop'] =  new WebshopDoc('webshop', 'Webshop');
        //$this->menu['register'] =  new RegisterDoc('register', 'Register');
        //$this->menu['login'] =  new LoginDoc('login', 'Login');
        if($this->sessionManager->isUserLoggedIn()) {
            require_once "menu_item.php";
        $this->menu['logout'] = new MenuItem('logout', 'LogOut');
        $this->sessionManager->getLoggedInUser()['name'];
        }
    }
}
?>