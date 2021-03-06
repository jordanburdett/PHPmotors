<?php
require_once 'library/connections.php';
require_once "model/main-model.php";

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL){
 $action = filter_input(INPUT_GET, 'action');

 if ($action == NULL) {
   $action = "home";
 }
}

$classifications = getClassifications();
$navList = "<li class='navItem'><a href='/phpMotors/index.php' title='View the PHP Motors home page'>Home</a></li>";
foreach ($classifications as $classification) {
  $navList .= "<li class='navItem'><a href='/phpMotors/index.php?action=".urlencode($classification['classificationName'])."' title='View our $classification[classificationName] product line'>$classification[classificationName]</a></li>";
}

switch ($action){
    case 'something':
    break;
    case $action === "template":
      include 'view/template.php';
    break;

    // Test the navbar
    case $action === "navListTest":
      echo $navList;
    break;
    case $action === "home":
    default:
     include 'view/home.php';
  break;
   }