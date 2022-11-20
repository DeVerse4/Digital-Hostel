 <!--Start of the modal for login-->
 <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="loginLabel">Login</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <form action="/Digital-Hostel/ValidateAction.php" role="form" method="post" class="px-4 py-3">
                 <div class="modal-body">
                     <div class="form-group">
                         <label for="exampleDropdownFormEmail1">College ID</label>
                         <input type="text" name="collegeid" class="form-control" id="exampleDropdownFormEmail1" placeholder="College ID">
                     </div>
                     <div class="form-group">
                         <label for="exampleDropdownFormPassword1">Password</label>
                         <input type="password" name="pass" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
                     </div>
                     <div class="form-group">
                         <div class="form-check">
                             <input type="checkbox" class="form-check-input" id="dropdownCheck">
                             <label class="form-check-label" for="dropdownCheck">
                                 Remember me
                             </label>
                         </div>
                     </div>
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item" href="/Digital-Hostel/Registration/registration.php" class="login btn btn-primary">New around here?
                         Sign up</a>
                     <a class="dropdown-item" href="#">Forgot password?</a>
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                     <input type="submit" id="log-in-btn" class="btn btn-primary" value="Sign in">
                 </div>
             </form>
         </div>
     </div>
 </div>
 <!--End of modal for login-->