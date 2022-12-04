<?php
include "../admin.php";
$id = $_GET["id"];
$x = getPhoto($id);
$rp = mysqli_fetch_row($x);
if (isset($rp[0]))
    echo $rp[0];