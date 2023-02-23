<?php

$name = $_REQUEST["name"];
$email = $_REQUEST["email"];
$subject = $_REQUEST["subject"];
$message = $_REQUEST["message"];
include_once 'admin.php';

$x = addMessage($name, $email, $subject, $message);
session_start();
$_SESSION['contactReq'] = "Contact request sent successfully ✅";
header("location:index.php");