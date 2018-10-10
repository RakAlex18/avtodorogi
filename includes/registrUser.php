<!--https://bootsnipp.com/snippets/0BVEA-->
<div class="container">
    <form class="form-horizontal" role="form" method="POST" action="/register">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h2>Register New User</h2>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="name">Name</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-user"></i></div>
                        <input type="text" name="name" class="form-control" id="name"
                               placeholder="John Doe" required autofocus>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <!-- Put name validation error messages here -->
                        </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="email">E-Mail Address</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-at"></i></div>
                        <input type="text" name="email" class="form-control" id="email"
                               placeholder="you@example.com" required autofocus>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <!-- Put e-mail validation error messages here -->
                        </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="password">Password</label>
            </div>
            <div class="col-md-6">
                <div class="form-group has-danger">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-key"></i></div>
                        <input type="password" name="password" class="form-control" id="password"
                               placeholder="Password" required>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <i class="fa fa-close"> Example Error Message</i>
                        </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="password">Confirm Password</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem">
                            <i class="fa fa-repeat"></i>
                        </div>
                        <input type="password" name="password-confirmation" class="form-control"
                               id="password-confirm" placeholder="Password" required>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <button type="submit" class="btn btn-success"><i class="fa fa-user-plus"></i> Register</button>
            </div>
        </div>
    </form>
</div>
<!--https://bootsnipp.com/snippets/featured/bootstrap-dual-design-registration-form-->
<div class="container register">
    <div class="row">
        <div class="col-md-3 register-left">
            <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
            <h3>Welcome</h3>
            <p>You are 30 seconds away from earning your own money!</p>
            <input type="submit" name="" value="Login"/><br/>
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
                    <h3 class="register-heading">Apply as a Employee</h3>
                    <div class="row register-form">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="First Name *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Last Name *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control"  placeholder="Confirm Password *" value="" />
                            </div>
                            <div class="form-group">
                                <div class="maxl">
                                    <label class="radio inline">
                                        <input type="radio" name="gender" value="male" checked>
                                        <span> Male </span>
                                    </label>
                                    <label class="radio inline">
                                        <input type="radio" name="gender" value="female">
                                        <span>Female </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Your Email *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" minlength="10" maxlength="10" name="txtEmpPhone" class="form-control" placeholder="Your Phone *" value="" />
                            </div>
                            <div class="form-group">
                                <select class="form-control">
                                    <option class="hidden"  selected disabled>Please select your Sequrity Question</option>
                                    <option>What is your Birthdate?</option>
                                    <option>What is Your old Phone Number</option>
                                    <option>What is your Pet Name?</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter Your Answer *" value="" />
                            </div>
                            <input type="submit" class="btnRegister"  value="Register"/>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <h3  class="register-heading">Apply as a Hirer</h3>
                    <div class="row register-form">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="First Name *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Last Name *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" maxlength="10" minlength="10" class="form-control" placeholder="Phone *" value="" />
                            </div>


                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Confirm Password *" value="" />
                            </div>
                            <div class="form-group">
                                <select class="form-control">
                                    <option class="hidden"  selected disabled>Please select your Sequrity Question</option>
                                    <option>What is your Birthdate?</option>
                                    <option>What is Your old Phone Number</option>
                                    <option>What is your Pet Name?</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="`Answer *" value="" />
                            </div>
                            <input type="submit" class="btnRegister"  value="Register"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!--https://bootsnipp.com/snippets/z8b1X-->
<div class="container">
    <form class="form-horizontal" role="form">
        <h2>Registration</h2>
        <div class="form-group">
            <label for="firstName" class="col-sm-3 control-label">First Name</label>
            <div class="col-sm-9">
                <input type="text" id="firstName" placeholder="First Name" class="form-control" autofocus>
            </div>
        </div>
        <div class="form-group">
            <label for="lastName" class="col-sm-3 control-label">Last Name</label>
            <div class="col-sm-9">
                <input type="text" id="lastName" placeholder="Last Name" class="form-control" autofocus>
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-3 control-label">Email* </label>
            <div class="col-sm-9">
                <input type="email" id="email" placeholder="Email" class="form-control" name= "email">
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="col-sm-3 control-label">Password*</label>
            <div class="col-sm-9">
                <input type="password" id="password" placeholder="Password" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="col-sm-3 control-label">Confirm Password*</label>
            <div class="col-sm-9">
                <input type="password" id="password" placeholder="Password" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="birthDate" class="col-sm-3 control-label">Date of Birth*</label>
            <div class="col-sm-9">
                <input type="date" id="birthDate" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="phoneNumber" class="col-sm-3 control-label">Phone number </label>
            <div class="col-sm-9">
                <input type="phoneNumber" id="phoneNumber" placeholder="Phone number" class="form-control">
                <span class="help-block">Your phone number won't be disclosed anywhere </span>
            </div>
        </div>
        <div class="form-group">
            <label for="Height" class="col-sm-3 control-label">Height* </label>
            <div class="col-sm-9">
                <input type="number" id="height" placeholder="Please write your height in centimetres" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="weight" class="col-sm-3 control-label">Weight* </label>
            <div class="col-sm-9">
                <input type="number" id="weight" placeholder="Please write your weight in kilograms" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3">Gender</label>
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-4">
                        <label class="radio-inline">
                            <input type="radio" id="femaleRadio" value="Female">Female
                        </label>
                    </div>
                    <div class="col-sm-4">
                        <label class="radio-inline">
                            <input type="radio" id="maleRadio" value="Male">Male
                        </label>
                    </div>
                </div>
            </div>
        </div> <!-- /.form-group -->
        <div class="form-group">
            <div class="col-sm-9 col-sm-offset-3">
                <span class="help-block">*Required fields</span>
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Register</button>
    </form> <!-- /form -->
</div> <!-- ./container -->