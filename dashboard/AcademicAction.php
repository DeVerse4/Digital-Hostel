<?php
include "../admin.php";
$course = $_REQUEST["course"];
$branch = $_REQUEST["branch"];
$uni = $_REQUEST["uni"];
$roll = $_REQUEST["roll"];
$year = $_REQUEST["year"];
$id = $_REQUEST["id"];

$x = addAcademic($id,$course,$branch ,$uni,$roll,$year);
header("location:studentDashBoard.php?y=1");

?>