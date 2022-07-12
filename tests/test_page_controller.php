<?php
include_once("../controllers/page_controller_class.php");

$page = array ('basic','home','about');
$showPage= new PageController($page);
$showPage->handleRequest();

?>