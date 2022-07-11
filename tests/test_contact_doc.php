<?php
include_once("../views/ContactDoc.php");

$data = array ( 'page' => 'basic', 'menu'=> array( 'home'=>'Home ','about'=>'About ','contact'=>'Contact ','webshop'=>'Webshop ') /* other fields */ );

$view= new ContactDoc($data, $_POST);
$errors = $view->validateForm();
$view->show();

?>