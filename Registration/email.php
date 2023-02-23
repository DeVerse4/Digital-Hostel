<?php
ob_start();
include("../header.php");
$buffer = ob_get_contents();
ob_end_clean();

$title = "Verify your email | Arya Bhatta Hostel";
$buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);

echo $buffer;

if (isset($_GET["i"])) {
    echo '<script> alert("Invalid Verification Code."); </script>';
}

// Program to display URL of current page.

$url = $_SERVER['REQUEST_URI'];

// Use parse_url() function to parse the URL
// and return an associative array which
// contains its various components
$url_components = parse_url($url);

// Use parse_str() function to parse the string passed via URL
parse_str($url_components['query'], $params);

// Display result
$email = $params['email'];
if (!isset($_SESSION)) {
    session_start();
}
$_SESSION['email'] = $email;
//echo ' Hi '.$email;
?>    

<div class="form-container" style='background: #f1f2f6'>
    <div class="container">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="page-title">
                <h1 class="h1-responsive font-weight">Verify your Email</h1>
            </div>
        </div>
    </div>
    <div class="reg-form">
        <form class="form-signin" action="verifyEmail.php" method="post">
            <div class="form-section ">
                <div class="form-elements">
                    <label for="inputEmail" class="input-label">Email address</label>
                    <input type="email" id="inputEmail" value="<?php echo $email; ?>" name="mailid" class="form-control" disabled required autofocus>
                </div> 
                <div class="form-elements">
                    <label for="verification_code" class="input-label">Verification Code</label>
                    <input type="password" id="verification_code" name="verification_code" class="form-control" placeholder="Enter Verification Code" required autofocus>
                </div> 
            </div>
            <button class="btn btn-md btn-block" name="submit" type="submit">Verify</button>

        </form>
    </div>
</div>
<?php
include("../footer.php");
