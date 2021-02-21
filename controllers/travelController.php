<?php
require_once "models/travelModel.php";
function getAllTravels()
{
    $result = get();
    include 'views/main/main.php';
    include 'views/travel/travelDashboard.php';
}

