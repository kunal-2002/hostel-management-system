<div class="modal fade" id="signup-modal" tabindex="-1" role="dialog" aria-labelledby="signup-heading" aria-hidden="true" >
    <div class="modal-dialog modal-dialog-centered" role="document" >
        <div class="modal-content" >
            <div  class="modal-header">
                <h5 class="modal-title" id="signup-heading">Register on HMS, CRSSIET, Jhajjar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" >
                    <span aria-hidden="true" >&times;</span>
                </button>
            </div>

            <div class="modal-body" >
                <form id="signup-form" class="form" role="form" method="post" action="api/signup_submit.php" >
                    <div class="input-group form-group" >
                        <div  class="input-group-prepend">
                            <span class="input-group-text" >
                                  <i class="fas fa-user"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" name="full_name"  placeholder="Full Name" maxlength="30" required >
                    </div>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-id-card"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" name="roll_no" placeholder="Roll Number/Employee ID" maxlength="20" minlength="5" required>
                    </div>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-envelope"></i>
                            </span>
                        </div>
                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                    </div>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-lock"></i>
                            </span>
                        </div>
                        <input type="password" class="form-control" name="password" placeholder="Password" minlength="8" required>
                    </div>

                    <div class="form-group">
                        <span>I'm a</span>
                        <input type="radio" class="ml-3" id="gender-male" name="gender" value="male" /> 
                        <label for="gender-male">
                            Male
                        </label>
                        <input type="radio" class="ml-3" id="gender-female" name="gender" value="female" />
                        <label for="gender-female">
                            Female
                        </label>
                    </div>

                    <div class="form-group">
                        <span>Register as:</span>
                        <input type="radio" class="ml-3" id="register-staff" name="registered_as" value="staff" /> 
                        <label for="register-staff">
                            Staff Member
                        </label>
                        <input type="radio" class="ml-3" id="register-student" name="registered_as" value="student" />
                        <label for="register-student">
                            Student
                        </label>
                    </div>

                    <div  class="form-group">
                        <button type="submit" class="btn btn-block btn-primary">Create Account</button>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <span>Already have an account?
                    <a href="#" data-dismiss="modal">Login</a>
                </span>
            </div>
        </div>
    </div>
</div>