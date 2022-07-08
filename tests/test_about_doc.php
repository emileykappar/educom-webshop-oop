<?php
include_once("../views/AboutDoc.php");

$data = array ( 'page' => 'basic', 'menu'=> array( 'test_home_doc.php'=>'Home ','test_about_doc.php'=>'About ','contact'=>'Contact ','webshop'=>'Webshop ') /* other fields */ );

/// instance HtmlDoc
$about = new AboutDoc($data);
$about -> show();

?>