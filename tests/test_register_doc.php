<?php
include_once("../views/RegisterDoc.php");

$data = array ( 'page' => 'basic', 'menu'=> array( 'home'=>'Home ','about'=>'About ','contact'=>'Contact ','webshop'=>'Webshop '),
'form' => array('name','email','password','r_password')/* other fields */ );

$view= new RegisterDoc($data);
$view->show();

?>