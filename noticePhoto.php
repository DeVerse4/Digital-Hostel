<?php
include "../admin.php";
$n = $_GET["n"];
$x = fetchNotice($n);
$rs = mysqli_fetch_row($x);
if (isset($rs[0]))
    echo $rs[0];
?>