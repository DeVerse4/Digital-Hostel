<?php

include "../admin.php";
$sno = $_REQUEST["n"];
$x = deleteComplaint($sno);
header("location:complaintReport.php?s=1");
?>
