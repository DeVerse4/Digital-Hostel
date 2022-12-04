<?php
session_start();
include "../admin.php";
$collegeid = $_SESSION["id"];
$photo = $_FILES["photo"]["tmp_name"];
$x = uploadUserPhoto($collegeid, $photo);
header("location:studentDashboard.php");
?>