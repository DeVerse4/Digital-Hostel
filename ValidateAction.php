<?php
include_once 'admin.php';
$collegeid = $_REQUEST["collegeid"];
$pass = $_REQUEST["pass"];
$x = checkId($collegeid, $pass);
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
        $_SESSION["login"] = "You are Logged in now 😁";
        header("location:index.php?login=1");
    }
} else {
    session_start();
    $_SESSION['status'] = "Invalid Login Details 😥";
    header("location:index.php?k=1");
}