<?php

session_start();
$collegeid = $_SESSION["id"];
$subject = $_REQUEST["subject"];
$msg = $_REQUEST["complaintDesc"];
include "../admin.php";
$x = addComplaint($collegeid, $subject, $msg);
header("location:complaint.php?s=0");
?>
