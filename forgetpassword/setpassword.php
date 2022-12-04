<?php
include "../header.php";
include "../admin.php";

if (isset($_GET['email'])) {
    $email = $_REQUEST['email'];
    $otp = $_REQUEST['otp'];

    $dsa = connect();
    $query = "SELECT passotp FROM `tblregistration` WHERE `mailid` = '$email'";
    $result = mysqli_query($dsa, $query);
    $row = mysqli_fetch_row($result);
    // echo $row[0];
}

if ($otp == $row[0]) { ?>
<div class="form-container" style='background: #f1f2f6'>
    <div class="container">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="page-title">
                <h1 class="h1-responsive font-weight">Change Password</h1>
            </div>
        </div>
    </div>
    <div class="reg-form">
        <form class="form-signin" action="changepassword.php" method="post">
            <div class="form-section ">
                <div class="form-elements">
                    <input type="email" id="email" name="email" class="form-control" value="<?php echo $email; ?>"
                        readonly hidden>
                    <div class="form-elements">
                        <label for="newpassword" class="input-label">New Password</label>
                        <input type="password" id="inputPassword" name="newpass" class="form-control"
                            placeholder="New Password" required>
                    </div>
                    <div class="form-elements">
                        <label for="confirmPassword" class="input-label">Confirm Password</label>
                        <input type="password" id="confirmPassword" name="confirmPass" class="form-control"
                            placeholder="Confirm Password" required>
                    </div>
                </div>

                <input name="submit" class="btn btn-md btn-block" name="submit" type="submit" value="Change Password" />
        </form>
    </div>
</div>
<?php
} else {
    echo "OTP is not correct";
}
?>
<?php include '../footer.php'; ?>