<?php 

class DatabaseModel{
    protected $servername = "localhost";
    protected $username = "WebShopUser";
    protected $password = "Emswebshopuser123!";
    protected $dbname = "emileys_webshop";


    // Create connection
    protected function connect(){
        $conn = new mysqli($servername, $username, $password);
        if ($conn->connect_error){
            die("Connection has failed:" . $conn->$connect_error);
        }
        echo "Database connected successfully";
        }
    }

?>