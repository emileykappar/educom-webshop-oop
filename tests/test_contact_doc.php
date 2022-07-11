<?php
include_once("../views/ContactDoc.php");

$data = array ( 'page' => 'basic', 'menu'=> array( 'home'=>'Home ','about'=>'About ','contact'=>'Contact ','webshop'=>'Webshop '),
'form' => array('gender','name','email','tel','communicatievoorkeur','message')/* other fields */ );

$view= new ContactDoc($data);
$view->show();

?>