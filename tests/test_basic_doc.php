<?php
include_once("../views/BasicDoc.php");

$data = array ( 'page' => 'basic','home','about','contact','login','register', 'menu'=> array( 'home'=>'Home ','about'=>'About ','contact'=>'Contact ','webshop'=>'Webshop ') /* other fields */ );
$view= new BasicDoc($data);
$view->show();

?>