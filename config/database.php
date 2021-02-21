<?php
$servername = "localhost";
$user = "root";
$pass = "";
$dbName = "mvc";
$conn = new mysqli($servername, $user, $pass, $dbName);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}