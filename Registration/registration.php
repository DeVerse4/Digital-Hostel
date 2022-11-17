<?php include 'header.php'; ?>

<div class="form-container mt-3">
    <div class="container">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-title">
                <h1 class="h1-responsive font-weight">Register</h1>
            </div>
        </div>
    </div>
    <div class="form">
        <form class="form-signin" action="registrationAction.php" method="post">
            <div class="form-section ">
                <div class="form-elements">
                    <label for="inputEmail" class="input-label">Email address</label>
                    <input type="email" id="inputEmail" name="mailid" class="form-control" placeholder="Email address" required autofocus>
                </div>
                <div class="form-elements">
                    <label for="collegeID" class="input-label">College ID</label>
                    <input type="text" id="inputcollegeid" name="collegeid" class="form-control" placeholder="College ID" required autofocus>
                </div>
                <div class="form-elements">
                    <label for="inputName" class="input-label">Full Name</label>
                    <input type="text" id="inputName" name="name" class="form-control" placeholder="Full Name" required autofocus>
                </div>
                <div class="form-elements">
                    <label for="inputPassword" class="input-label">Password</label>
                    <input type="password" id="inputPassword" name="pass" class="form-control" placeholder="Password" required>
                </div>
                <div class="form-elements">
                    <label for="confirmPassword" class="input-label">Confirm Password</label>
                    <input type="password" id="confirmPassword" name="confirmPassword" class="form-control" placeholder="Confirm Password" required>
                </div>
            </div>
            <div class="links">
                <a class="link" role="button" href="#loginModal" data-toggle="modal" data-target="#loginModal">Already
                    Registered? Click here.</a>
                <a class="link" href="#">Forgot password?</a>
            </div>
            <button class="btn btn-md btn-block" type="submit">Register</button>
        </form>
    </div>
</div>



<?php include '../footer.php'; ?>