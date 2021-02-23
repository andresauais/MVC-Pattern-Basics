<?php

require_once "models/employeeModel.php";

//OBTAIN THE ACCION PASSED IN THE URL AND EXECUTE IT AS A FUNCTION

//Keep in mind that the function to be executed has to be one of the ones declared in this controller
// TODO Implement the logic
$action = "";

if(isset($_REQUEST['action'])){
    $action = $_REQUEST['action'];
}
else{
    $action = "getAllEmployees";
}

if (function_exists($action)) {
    call_user_func($action, $_REQUEST);
}
else{
    error('Not found');
}

/* ~~~ CONTROLLER FUNCTIONS ~~~ */
/**
 * This function calls the corresponding model function and includes the corresponding view
 */
function getAllEmployees()
{
    $result = get();
    include 'views/main/main.php';
    if(isset($_GET['delete']) && $_GET['delete']== "success"){
        success();
    }
    include 'views/employee/employeeDashboard.php';
}

/**
 * This function calls the corresponding model function and includes the corresponding view
 */
function getEmployee($request)
{
    $result = getById($request["emp_id"]);
    include 'views/main/main.php';
    include 'views/employee/employee.php';
}

function delete($request){
    $result = deleteEmployee($request['emp_id']);
    if($result != 1){
        error($result);
    }else{
        header("Location: index.php?controller=employeeController.php&action=getAllEmployees&delete=success");
    }
}
function update($request){
    include 'views/main/main.php';
    include 'views/employee/employeeUpdate.php';
}

function success(){
    echo    '<div class="alert alert-success alert-dismissible fade show">
                <strong>Delete!</strong> Employee deleted.
                <button type="button" class="close" data-dismiss="alert">&times;</button>
            </div>';
}

/**
 * This function includes the error view with a message
 */
function error($errorMsg)
{
    include 'views/main/main.php';
    include "views/error/error.php";
}
