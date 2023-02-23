<?php
session_start();
$collegeid= $_SESSION['id'];

if (isset($_POST['members'])){ 
    $team = $_REQUEST['team'];
    $members = $_REQUEST["members"];
    $eventname = $_REQUEST['eventname'];
    $catagory = $_REQUEST["catagory"];
    $phone = $_REQUEST["phone"];
    include "../admin.php";
    $x =  registerevent($collegeid,$team, $members,$eventname,$catagory, $phone);
    $_SESSION['eveReg'] = "Registered successfully!";
    header("location:index.php?ev=0");
}
else{
    echo "unable to register";
}
?>
