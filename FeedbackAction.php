<?php
include_once "admin.php";
session_start();
if (isset($_REQUEST["id"]))
    $userid = $_SESSION["id"];
else
    $userid = "GUEST";
$name = $_REQUEST["name"];
$mailid = $_REQUEST["mailid"];
$mobile = $_REQUEST["mobile"];
$msg = $_REQUEST["msg"];
$x = addFeedback($name, $userid, $mailid, $mobile, $msg);
$_SESSION['status'] = "Feedback submited successfully!!";
header("location:Feedback.php");
?>