<?php
function get(){
  include 'config/database.php';
  $emp_id = isset($_GET['travel']) ? $_GET['travel'] : "" ;
  $sql = "select * from travel where emp_id=" . $emp_id . ";";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);
  return $result;
}