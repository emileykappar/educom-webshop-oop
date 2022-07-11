<?php
include_once("../views/LoginDoc.php");

$data = array ( 'page' => 'basic', 'menu'=> array( 'home'=>'Home ','about'=>'About ','contact'=>'Contact ','webshop'=>'Webshop '),
'form' => array('username','password')/* other fields */ );

$view= new LoginDoc($data);
$view->show();

?>