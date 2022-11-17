<?php
    include_once '../admin.php';
    $collegeid = $_REQUEST['collegeid'];
    $mailid = $_REQUEST['mailid'];
    $name = $_REQUEST['name'];
    $pass = $_REQUEST['pass'];
    $confirmPassword = $_REQUEST['confirmPassword'];

    $x = addUser($collegeid, $pass, $wmode, $name, $mailid,);
    if($x == 1)
        header("location:../index.php?t=1");
    else 
        header("location:../Registration/registration.php?t=0");
    
    if($pass != $confirmPassword) {
        echo "Passwords do not match";
    }