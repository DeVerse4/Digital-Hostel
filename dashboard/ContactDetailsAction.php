<?php
include "../admin.php";
$mobile = $_REQUEST["mobile"];
$mailid = $_REQUEST["mailid"];
$hometown = $_REQUEST["hometown"];
$pin = $_REQUEST["pin"];
$address = $_REQUEST["addr"];
$id = $_REQUEST["id"];

$x = addContactInfo($id,$mobile,$mailid ,$hometown,$pin,$address);
header("location:studentDashBoard.php?z=1");

?>