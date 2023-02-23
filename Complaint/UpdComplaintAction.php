<?php

$sno = $_REQUEST["sno"];
$rmsg = $_REQUEST["rmsg"];
include "../admin.php";
$x = updComplaint($sno, $rmsg);
session_start();
$_SESSION['updCom'] = "Complaint updated 📃";
header("location:complaintReport.php");
?>
