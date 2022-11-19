<?php

include "../admin.php";
$sno = $_REQUEST["n"];
$x = deleteComplaint($sno);
header("location:complaint.php?s=1");
