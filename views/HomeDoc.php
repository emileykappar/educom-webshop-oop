<?php 
require_once "BasicDoc.php";
class HomeDoc extends BasicDoc {

    public function __construct($data){
        // this code passes on the data to the parent class
        parent::__construct($data);
    }
    
    protected function showContent(){
        echo '
        <h2>Home pagina</h2>
        <hr>
      
        <p class="text"> <!-- Small welcoming text -->
            Dit is mijn eerste website!<br>
            Kijk gerust rond door op de menu knoppen bovenaan de pagina te klikken.<br>
        </p> ' ;
    }
}