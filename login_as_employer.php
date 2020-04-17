<?php
     
     require_once "header.php"; 
     if(isset($_SESSION['is_logged_in']))
     {header("location:internship.php");}     
?>
    <div class="row" style="background-color:black">
      <div class="col-sm-8"><img src="img/hire.jpg" alt="Image" height="100%" width="100%">
      </div>
      <div class="col-sm-4"><!-- Material form login -->
        <div class="card">
        
          <h5 class="card-header info-color white-text text-center py-4">
            <strong>Sign in as Employer</strong>
          </h5>
        
          <!--Card content-->
          <div class="card-body px-lg-5 pt-0">
        
            <!-- Form -->
            <form class="text-center js-login" style="color: #757575;" method="post" action="assets/login_as_employer.php">
        
              <!-- Email -->
              <div class="md-form">
                <input type="email" id="materialLoginFormEmail" class="form-control" name = "email">
                <label for="materialLoginFormEmail">E-mail</label>
              </div>
        
              <!-- Password -->
              <div class="md-form">
                <input type="password" id="materialLoginFormPassword" class="form-control" name = "password">
                <label for="materialLoginFormPassword">Password</label>
              </div>
        
              <div class="d-flex justify-content-around">
                <div>
                  <!-- Remember me -->
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="materialLoginFormRemember">
                    <label class="form-check-label" for="materialLoginFormRemember">Remember me</label>
                  </div>
                </div>
                <div>
                  <!-- Forgot password -->
                  <a href="">Forgot password?</a>
                </div>
              </div>
              <div><span class="js-error" style="display: none;"></span></div>
        
              <!-- Sign in button -->
              <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Sign in</button>
        
              <!-- Register -->
              <p>Not a member?
                <a href="register_as_student.html">Register</a>
              </p>
        
              <!-- Social login -->
              <p>or sign in with:</p>
              <a type="button" class="btn-floating btn-fb btn-sm" href = "https://www.facebook.com/Internshala/">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a type="button" class="btn-floating btn-tw btn-sm" href = "https://twitter.com/internshala?lang=en">
                <i class="fab fa-twitter"></i>
              </a>
              <a type="button" class="btn-floating btn-li btn-sm" href = "https://in.linkedin.com/company/internshala">
                <i class="fab fa-linkedin-in"></i>
              </a>
              <a type="button" class="btn-floating btn-git btn-sm" href = "https://github.com/internshala">
                <i class="fab fa-github"></i>
              </a>
        
            </form>
            <!-- Form -->
        
          </div>
        
        </div>
        <!-- Material form login --></div>
    </div>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>  
    <script src="js/validator.js"></script>  
  </body>
</html>
