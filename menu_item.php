<?php 

require_once "models/page_model_class.php";
class MenuItem extends PageModel{

    // properties
    private $link;
    private $buttonTxt;

    // methods
    public function __construct($link, $buttonTxt){
        $this->link = $link;
        $this->buttonTxt = $buttonTxt;
    }

    public function showMenuItem(){
        echo '<li> ';
        echo '<a href="index.php?page=' . $this->link . '">' . $this->buttonTxt . '</a>';
        echo '</li>';
    }
}

?>