
<?php include "header.php"?>


    <div class="container register">
            <div class="row">
                <div class="col-md-3 register-left">
                    <img src="img/plane.png" alt=""/>
                    <h3>Welcome</h3>
                    <p>You are 30 seconds away from earning your own money!</p>
                    <input type="button" name="" href="login_as_student.php" value="Login"/><br/>
                </div>
                <div class="col-md-9 register-right">
                    <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Employee</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Hirer</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h3  id="form" class="register-heading">Apply as a Employee</h3>
                            <form   class="js-register"  action="asset/register_as_student.php">
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name= "first_name" placeholder="First Name *" value=""
                                            required="required"  />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name= "last_name" placeholder="Last Name *" value="" 
                                            required="required" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name= "password" placeholder="Password *" value="" 
                                            required="required" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control"  name= "psw" placeholder="Confirm Password *" value="" required="required" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="exampleInputEmail1" name= "email" placeholder="Your Email *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" minlength="10" maxlength="10" name="phone_no" class="form-control" placeholder="Your Phone *" value="" required="required" />
                                        </div>
                                        <div><span class="js-error" style="display:none; "></span></div>
                                        <input type="submit" class="btnRegister"  value="register"/>
                                    </div>
                            </form>
                                </div>
                        </div>
                        <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <h3   class="register-heading">Apply as a Hirer</h3>
                            <form method="POST"   action="asset/register_as_employer.php" class="js-register">
                            <div class="row register-form">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control first_name" name="first_name" placeholder="First Name *" value=""  />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control last_name" name="last_name" placeholder="Last Name *" value=""  />
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control email" id="exampleInputEmail2" name="email" placeholder="Email *" value=""  />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" maxlength="10" minlength="10" class="form-control" name= "phone_no" placeholder="Phone *" value="" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="password" class="form-control phone_no" name = "password" placeholder="Password *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name = "psw" placeholder="Confirm Password *" value="" />
                                    </div>
                                    <div><span class="js-error" style="display:none; "></span></div>
                                    <button type="submit" class="btnRegister" >register</button>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
    </div>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/validator.js"></script>
    

  </body>
  </html>
  