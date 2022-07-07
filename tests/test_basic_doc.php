<?php
include_once("../views/BasicDoc.php");

/// instance BasicDoc
$data = array ( 'page' => 'basic', 'menu'=> array( 'HomeDoc.php'=>'Home ','About'=>'About ','contact'=>'Contact ','webshop'=>'Webshop ') /* other fields */ );

$view= new BasicDoc($data);

$view->show();

?>