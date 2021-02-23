<?php

// This is the entry point of your application, all your application must be executed in
// the "index.php", in such a way that you must include the controller passed by the URL
// dynamically so that it ends up including the view.

include_once "config/constants.php";

// TODO Implement the logic to include the controller passed by the URL dynamically
// In the event that the controller passed by URL does not exist, you must show the error view.

if(isset($_GET['controller'])){
  $controller = createPath($_GET['controller']);
  if(file_exists($controller)){
    include $controller;
  }
  else{
    include 'views/main/main.php';
    include 'views/error/error.php';
  }
}
else{
  include 'controllers/employeeController.php';
}

function createPath($controller){
  return 'controllers/'. $controller;
}