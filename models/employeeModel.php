<?php

function get(){
  include 'config/database.php';
  $sql = "SELECT employees.emp_id, employees.lastName, employees.firstName, employees.address, employees.city, COUNT(*) AS number FROM employees INNER JOIN travel ON employees.emp_id = travel.emp_id GROUP BY employees.emp_id;";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);
  return $result;
}

function getById($id){
  include 'config/database.php';
  $sql = "SELECT  * FROM employees WHERE emp_id =$id;";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);
  return $result;
}
