<?php
include_once("../views/BasicDoc.php");

$data = array ( 'page' => 'basic', 'menu'=> array( 'test_home_doc.php'=>'Home ','test_about_doc.php'=>'About ','contact'=>'Contact ','webshop'=>'Webshop ') /* other fields */ );
$view= new BasicDoc($data);
$view->show();

?>