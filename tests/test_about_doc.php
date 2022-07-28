<?php
include_once("../views/AboutDoc.php");

require_once "../models/page_model_class.php";
$model= new PageModel(NULL);


$model->setPage("About");
$model->createMenu();
$view= new AboutDoc($model);
$view->show();

?>