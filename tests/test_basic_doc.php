<?php
include_once("../views/BasicDoc.php");

require_once "../models/page_model_class.php";
//create new object "model" > $model is een nieuwe instantie van PageModel
$model= new PageModel(NULL);
$model->setPage("Basic"); // "sets" the page for Basic
$model->createMenu(); // creates a menu for the $model object

//create new object "view" als nieuwe instantie van BasicDoc
$view= new BasicDoc($model);
$view->show();

?>