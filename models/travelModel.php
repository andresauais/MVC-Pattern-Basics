<?php
function get(){
  include 'config/database.php';
  $emp_id = isset($_GET['emp_id']) ? $_GET['emp_id'] : "" ;
  $sql = "select * from travel where emp_id=" . $emp_id . ";";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);
  return $result;
}