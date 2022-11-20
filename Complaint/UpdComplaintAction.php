<?php

$sno = $_REQUEST["sno"];
$rmsg = $_REQUEST["rmsg"];
include "../admin.php";
$x = updComplaint($sno, $rmsg);
header("location:complaintReport.php?v=1");
?>
