<?php 

require_once "database_model.php";
class PageModel extends DatabaseModel{
    // properties
    protected $data;

    // methods
    public function __construct($data) {
        $this->data = $data;
    } 
}

?>