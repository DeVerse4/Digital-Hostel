<?php

    include_once 'admin.php';
    $collegeid = $_REQUEST["collegeid"];
    $pass = $_REQUEST["pass"];
    $x = checkId($collegeid, $pass);
    $rs = mysqli_fetch_row($x);
    if (isset($rs[0])) {
        session_start();
        $_SESSION["id"] = $collegeid;
        $_SESSION["mode"] = $rs[0];
        header("location:index.php?s=1");
    } else {
        header("location:index.php?k=1");
    }