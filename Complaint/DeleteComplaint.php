<?php

include "../admin.php";
$sno = $_REQUEST["n"];
$x = deleteComplaint($sno);
session_start();
$_SESSION['deleteComp'] = "Complaint deteted ✔";
header("location:complaintReport.php");
?>