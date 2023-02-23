<?php
session_start();
$collegeid = $_SESSION["id"];

$name = $_REQUEST['name'];
$dob = $_REQUEST['dob'];
include '../admin.php';
$x = updProfile($collegeid, $name, $dob);
header("location:studentDashboard.php?p=$x");