<?php

include "../admin.php";
$sno = $_REQUEST["n"];
$x = deleteComplaint($sno);
session_start();
$_SESSION['deleteComp'] = "You complaint deteted ✔";
header("location:complaint.php");