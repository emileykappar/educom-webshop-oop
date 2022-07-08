<?php 

require_once "BasicDoc.php";
abstract class FormsDoc extends BasicDoc {

    public function __construct($data){
        parent::__construct($data);
    }

    function connectToDatabase() {
        $servername = "localhost";
        $username = "WebShopUser";
        $password = "Emswebshopuser123!";
        $dbname = "emileys_webshop";
    
    
        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
    
        // Check connection
        if (!$conn) {
        throw new Exception("Connection failed: " . mysqli_connect_error());
        }    
        return $conn;
    }

    public function validateForm(){
        $this->connectToDatabase();
    }

}

?>