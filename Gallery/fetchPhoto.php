<?php
include "../admin.php";
$n = $_GET["n"];
$x = fetchPhoto($n);
$rs = mysqli_fetch_row($x);
if (isset($rs[0]))
    echo $rs[0];
?>