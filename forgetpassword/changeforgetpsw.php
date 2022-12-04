<?php
include "../pass_system/mail.php";
include "../admin.php";

if (isset($_POST['submit'])) {
    if (isset($_GET['otp'])) {
        $otp = $_GET['otp'];
        echo "$otp";
    } else {
        $email = $_REQUEST['email'];
        $dsn = connect();
        $otp = rand(10000, 99999);
        $query = "UPDATE `tblregistration` SET `passotp` = '$otp' WHERE `mailid` = '$email'";
        $subject = "Forget Password";
        $message = "Your OTP for forget password: .$otp";
        $result = mysqli_query($dsn, $query);
        send_mail($subject, $message, $email);
        header("Location:forgetrequest.php?otp=1&id=$email");
    }
}
