<?php
include_once("../views/HomeDoc.php");
$data = array ( 'page' => 'basic', 'menu'=> array( 'test_home_doc.php'=>'Home ','test_about_doc.php'=>'About ','contact'=>'Contact ','webshop'=>'Webshop ') /* other fields */ );
$view= new HomeDoc($data);
$view->show();

?>
