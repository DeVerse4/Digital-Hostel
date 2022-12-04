<?php
include '../admin.php';
if(isset($_POST['submit'])){

    $newpassword = $_REQUEST['newpass'];
    $confirmnewpassword = $_REQUEST['confirmPass'];
    echo $newpassword;
    if ($newpassword == $confirmnewpassword) {
        $email = $_REQUEST['email'];
        echo $email;
        $dsn = connect();
        $query = "select collegeid from tblregistration WHERE mailid = '$email'";
        $result = mysqli_query($dsn, $query);
        $row = mysqli_fetch_row($result);
        $collegeid = $row[0];
        $query1 = "update tbllogin SET `pass` = '$newpassword' WHERE `collegeid` = '$collegeid'";
        $x = mysqli_query($dsn, $query1);
        if ($x) {
            echo "<script>alert('Password Changed Successfully')</script>";
            echo "<script>window.location.href='/Digital-Hostel/index.php'</script>";
        } else {
            echo "<script>alert('Password Change Failed')</script>";
            echo "<script>window.location.href='changepassword.php'</script>";
        }
    } else {
        echo "<script>alert('Password Mismatch')</script>";
        echo "<script>window.location.href='changepassword.php'</script>";
    }


}

//  include '../footer.php' ?>