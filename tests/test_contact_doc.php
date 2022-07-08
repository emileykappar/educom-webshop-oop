<?php
include_once("../views/ContactDoc.php");

$data = array ( 'page' => 'basic', 'menu'=> array( 'home'=>'Home ','about'=>'About ','contact'=>'Contact ','webshop'=>'Webshop '), array("gender" => $gender, "genderError" => $genderError, "name" => $name, "nameError" => $nameError,
"email" => $email, "emailError" => $emailError, "tel" => $tel, "telError" => $telError,"communicatievoorkeur" => $commPref, 
"communicatievoorkeurError" => $commPrefError, "message" => $message, "messageError" => $messageError, "valid" => $valid) /* other fields */ );

$view= new ContactDoc($data);
$view->show();

?>