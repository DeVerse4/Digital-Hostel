<!--Start of the modal for login-->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title font-weight-bold" id="loginLabel">Login Here</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="font-size: 2.5rem;">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="d-flex justify-content-center w-100">
                    <img src="/Digital-Hostel/images/default.png" height="120" width="120" alt="User">
                </div>
                <form action="/Digital-Hostel/ValidateAction.php" role="form" method="post" class="px-4 py-3">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="exampleDropdownFormEmail1" class="font-weight-bold">College ID</label>
                            <input type="text" name="collegeid" class="form-control" id="exampleDropdownFormEmail1" placeholder="College ID" required>
                        </div>
                        <div class="form-group">
                            <div class="d-flex justify-content-between">
                                <label for="exampleDropdownFormPassword" class="font-weight-bold">Password</label>
                                <a class="text-primary" href="/Digital-Hostel/forgetpassword/forgetrequest.php">Forgot?</a>
                            </div>
                            <input type="password" name="pass" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password" required>
                        </div>
                        <div class="d-flex justify-content-between">
                            <a class="text-primary" href="/Digital-Hostel/Registration/registration.php" class="login btn btn-primary">
                                Not registered?
                            </a>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" data-dismiss="modal" class="btn btn-outline-danger" value="Close">
                        <input type="submit" id="log-in-btn" class="btn btn-primary" value="Sign in">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--End of modal for login-->
