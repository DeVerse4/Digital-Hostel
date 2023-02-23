<?php
include "../header.php";
// include "../admin.php";  

?>

<div class="form-container" style='background: #f1f2f6'>
    <div class="container">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="page-title">
                <h1 class="h1-responsive font-weight">Change Password</h1>
            </div>
        </div>
    </div>
    <div class="reg-form">

        <?php
        if (isset($_GET['otp']) && isset($_GET['id'])) {
            $otp = $_GET['otp'];
            $email = $_GET['id'];
            if ($otp == 1) {
                ?>
                    <form class="form-signin" action="setpassword.php" method="get">
                    <div class="form-elements">
                        <label for="email" class="input-label">Change Password Request</label>
                        <input type="email" id="email" name="email" class="form-control" value ="<?php echo $email; ?>" readonly required>
                    </div>
                    <div class="form-elements">
                    <label for="otp" class="input-label">OTP</label>
                    <input type="text" id="sendOTP" name="otp" class="form-control" placeholder="Enter Your OTP" required>
                    </div>
                  <button class="btn btn-md btn-block mt-3" type="submit">Validate OTP</button>
                  </form>
                  <?php
            }
        } else {


            echo '<form class="form-signin" action="changeforgetpsw.php" method="post">
                <div class="form-elements">
                    <label for="send mail" class="input-label">Change Password Request</label>
                    <input type="email" id="send mail" name="email" class="form-control" placeholder="Enter your Registered Email" required>
                </div>
            <button class="btn btn-md btn-block mt-4" name="submit" type="submit">Request OTP</button>
            </form>';
        }

        ?>
    </div>

    </form>
</div>
</div>

<?php include "../footer.php"; ?>