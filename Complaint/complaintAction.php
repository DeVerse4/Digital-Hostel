<?php

session_start();
$collegeid = $_SESSION["id"];
$subject = $_REQUEST["subject"];
$msg = $_REQUEST["complaintDesc"];
include "../admin.php";
$x = addComplaint($collegeid, $subject, $msg);
if ($x == 1) {
    $_SESSION['addComp'] = "Complaint added ✔";
    header("location:complaint.php");
} else {
    $_SESSION['addComp'] = "Complaint not added ✖";
    header("location:complaint.php");
}
?>