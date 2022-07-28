<?php
include_once("../views/HomeDoc.php");


require_once "../models/page_model_class.php";
$model= new PageModel(NULL);

$model->setPage("Home ");
$model->createMenu();
$view= new HomeDoc($model);
$view->show();

?>
