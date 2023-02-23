<?php
    include_once '../admin.php';
    if (isset($_POST["submit"])) {
        $verification_code = $_POST["verification_code"];
    }
    if(!isset($_SESSION)) {
    session_start();        
    }
    $mailid = $_SESSION['email'];
    echo $mailid;
    $x = checkEmail($mailid);
    if(mysqli_num_rows($x) == 0) {
        echo 'alert("Invalid Email")';
    }
    $rs = mysqli_fetch_row($x);
    echo "<script>$verification_code</script>";
        echo $rs[0];
    if($rs[0] == $verification_code) {
        
        updateVerifyStatus($mailid);
        header("location:../index.php?v=1");
        session_destroy();
    } else {
        header("location:email.php?email=$mailid&i=1");
        session_destroy();
        
    }

