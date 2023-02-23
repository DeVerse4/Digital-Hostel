<?php
function getPhoto($uid)
{
    $dsn = connect();
    $x = mysqli_query($dsn, "SELECT `photo` FROM tblPhoto where userid = '$uid'");
    return $x;
}

$id = $_GET["id"];
$x = getPhoto($id);
$rp = mysqli_fetch_row($x);
if (isset($rp[0]))
    echo $rp[0];