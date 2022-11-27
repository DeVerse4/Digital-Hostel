<?php

include_once 'admin.php';
$collegeid = $_REQUEST["collegeid"];
$pass = $_REQUEST["pass"];
$x = checkId($collegeid, $pass);
echo "<pre>";
print_r($x);
$rs = mysqli_fetch_row($x);
if (isset($rs[0])) {
    $verification_code = isVerified($collegeid);
    $vs = mysqli_fetch_row($verification_code);
    $email = $vs[1];
    if ($vs[0] != 'verified') {
        header("location:Registration/email.php?email=$email");
    } else {
        session_start();
        $_SESSION["id"] = $collegeid;
        $_SESSION["mode"] = $rs[0];
        $_SESSION["name"] = $rs[1];
        header("location:index.php?login=1");
    }
} else {
    header("location:index.php?k=1");
}
