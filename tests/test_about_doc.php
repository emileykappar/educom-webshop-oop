<?php
include_once("../views/AboutDoc.php");

$data = array ( 'page' => 'basic', 'menu'=> array( 'test1' => 'Test 1', 'test2' => 'Test2') /* other fields */ );

/// instance HtmlDoc
$about = new AboutDoc($data);
$about -> show();

?>