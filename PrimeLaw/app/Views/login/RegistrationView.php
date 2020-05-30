<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Sign Up Form</title>

  
    <style type="text/css">
    
display-flex, .display-flex, .display-flex-center {
  display: flex;
  display: -webkit-flex; 
}

list-type-ulli {
  list-style-type: none;
  margin: 0;
  padding: 0; 
}

@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 300;
  src: url("../fonts/montserrat/Montserrat-Light.ttf");
}

figure {
  margin: 0; 
}

p {
  margin-bottom: 0px;
  font-size: 15px;
  color: #777; 
}

h2 {
  line-height: 1.66;
  margin: 0;
  padding: 0;
  font-weight: 900;
  color: #222;
  font-family: 'Montserrat';
  font-size: 24px;
  text-transform: uppercase;
  text-align: center;
  margin-bottom: 40px; 
}

.clear {
  clear: both; 
}

body {
  font-size: 14px;
  line-height: 1.8;
  color: #222;
  font-weight: 400;
  font-family: 'Montserrat';
  background-image:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)), url("img/8.jpg");
  background-repeat: no-repeat;
  background-size: 100% 100%;
  background-position: center;
  padding: 115px 0; 
  width: 100%;
  height: auto;
  background-attachment: fixed;
}

.container {
  width: 660px;
  position: relative;
  margin: 0 auto;

}

.position-center {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.signup-content {
  background: #fff;
  border-radius: 10px;
  padding: 50px 85px; 
  background-color: transparent;
}

.form-title{
	color: white;
	font-family: 'Century Gothic'; 
	font-size: 30px;
    font-weight: bold;
}

.form-group {
  overflow: hidden;
  margin-bottom: 20px; 
}

.form-input, select {
  width: 100%;
  height:40px;
  border: 1px solid #ebebeb;
  border-radius: 5px;
  padding: 12px 15px;
  box-sizing: border-box;
  font-size: 13px;
  font-weight: 500;
  color: #222; 
  background-color:lavender;
}

select{
	height:45px;
}

.form-input:focus {
    border: 1px solid transparent;
    border-image-slice: 1;
    border-radius: 5px;
    background-origin: border-box;
    background-clip:border-box;
}

.form-submit {
  width: 100%;
  border-radius: 5px;
  padding: 13px 20px;
  box-sizing: border-box;
  font-size: 14px;
  font-weight: 700;
  color: black;
  text-transform: uppercase;
  border: none; 
  background-image: linear-gradient(to left, #74ebd5, #9face6);
}

.form-submit:hover{
	text-decoration:underline;
	color:blue;
}

.loginhere {
  font-size: 20px;
  color: #fff;
  font-weight: 700;
  text-align: center;
  margin-top: 70px;
  margin-bottom: 5px; 
}

.loginhere-link {
  font-weight: 700;
  color: white;
  text-decoration: none; 
}

a:focus, a:active, a:hover {
  text-decoration: underline;
  outline: none;
  color: yellow;
}

.field-icon {
  float: right;
  margin-right: 17px;
  margin-top: -32px;
  position: relative;
  z-index: 2;
  color: #555; 
}

#ifYes{
		display:none;
}

#ifYes2{
		display:none;
}

label{
	color:white;
	font-size:16px;
	font-family:sans-serif;
}

.option{
	height:50px;
	font-size:20px;
}

#gender{
	color:white;
	font-size:16px;
}

#fmale{
	margin-left:200px;
	margin-top:0px;
}

@media screen and (max-width: 768px) {
  .container {
    width: calc(100% - 30px);
    max-width: 100%; } 
}
@media screen and (max-width: 480px) {
  .signup-content {
    padding: 40px 25px; } 
}

    </style>



</head>
<body>

    <div class="main">

        <section class="signup">
            
            <div class="container">
                <div class="signup-content">
                <div class="left-box">
      

      <form class="form-horizontal" method="post" action="/registeruser">
                        
        <h2 class="form-title">Create Your Account</h2>
						
            <div class="form-group">
							<label>First Name</label>
                            <input type="text" class="form-input" name="first_name"/>
                            <p class='required'>
                            <?php
                                if(\Config\Services::validation()->hasError('first_name'))
                                {
                                    echo $validation->showError('first_name');
                                }
                            ?>
                            </p>
                        </div>
						<div class="form-group">
							<label>Last Name</label>
                            <input type="text" class="form-input" name="last_name"/>
                            <p class='required'>
                            <?php
                                if(\Config\Services::validation()->hasError('last_name'))
                                {
                                    echo $validation->showError('last_name');
                                }
                            ?>
                            </p>
                        </div>
                        <div class="form-group">
							<label>Address line 1</label>
                            <input type="text" class="form-input" name="no" placeholder="Home number"/>
                            <p class='required'>
                            <?php
                                if(\Config\Services::validation()->hasError('no'))
                                {
                                    echo $validation->showError('no');
                                }
                            ?>
                            </p>
                        </div>
                        <div class="form-group">
							<label>Address Line 2</label> 
                            <input type="text" class="form-input" name="street" placeholder="Street"/>
                            <p class='required'>
                            <?php
                                if(\Config\Services::validation()->hasError('street'))
                                {
                                    echo $validation->showError('street');
                                }
                            ?>
                            </p>
                        </div>
                        <div class="form-group">
							<label>Address Line 3</label>
                            <input type="text" class="form-input" name="city"/>
                            <p class='required'>
                            <?php
                                if(\Config\Services::validation()->hasError('city'))
                                {
                                    echo $validation->showError('city');
                                }
                            ?>
                            </p>
                        </div>
                        <div class="form-group" >
							<label>Date Of Birth</label>
                            <input type="Date" class="form-input" name="dob" style="color: gray"/>
                            <p class='required'>
                            <?php
                                if(\Config\Services::validation()->hasError('dob'))
                                {
                                    echo $validation->showError('dob');
                                }
                            ?>
                            </p>
                        </div>
                        <div class="form-group">
							<label>NIC</label>
                            <input type="text" class="form-input" name="nic"/>
                            <p class='required'>
                            <?php
                                if(\Config\Services::validation()->hasError('nic'))
                                {
                                    echo $validation->showError('nic');
                                }
                            ?>
                            </p>
                        </div>
                        
						<div>
						<label>Gender</label>
						<div id="gender">
						<input type="radio" name="gender" value="male"> Male
						<input id="fmale" type="radio" name="gender" value="female"> Female<br>
            <p class='required'>
                            <?php
                                if(\Config\Services::validation()->hasError('gender'))
                                {
                                    echo $validation->showError('gender');
                                }
                            ?>
                            </p>
						</div>
						</div><br/>
						
						<div class="form-group">
							<label>E-mail</label>
                            <input type="email" class="form-input" name="email" placeholder="example@gmail.com"/>
                            <p class='required'>
                            <?php
                                if(\Config\Services::validation()->hasError('email'))
                                {
                                    echo $validation->showError('email');
                                }
                            ?>
                            </p>
                        </div>
                        <div class="form-group">
							<label>Contact Number</label>
                            <input type="text" class="form-input" name="phone"/>
                            <p class='required'>
                            <?php
                                if(\Config\Services::validation()->hasError('phone'))
                                {
                                    echo $validation->showError('phone');
                                }
                            ?>
                            </p>
                        </div>

						<div class="form-group">
							<label>Registration Number</label>
							<input type="text" class="form-input" name="regno"/><br/>
              <p class='required'>
                            <?php
                                if(\Config\Services::validation()->hasError('regno'))
                                {
                                    echo $validation->showError('regno');
                                }
                            ?>
                            </p>
						</div>
						
                        <div class="form-group">
							<label>Username</label>
                            <input type="text" class="form-input" name="user_name"/>
                            <p class='required'>
                            <?php
                                if(\Config\Services::validation()->hasError('user_name'))
                                {
                                    echo $validation->showError('user_name');
                                }
                            ?>
                            </p>
                        </div>
                        <div class="form-group">
							<label>Password</label>
                            <input type="password" class="form-input" name="password"/>
                            <p class='required'>
                            <?php
                                if(\Config\Services::validation()->hasError('password'))
                                {
                                    echo $validation->showError('password');
                                }
                            ?>
                            </p>
                        </div>
						<div class="form-group">
							<label>Confirm Password</label>
                            <input type="password" class="form-input" name="c_password"/>
                            <p class='required'>
                            <?php
                                if(\Config\Services::validation()->hasError('c_password'))
                                {
                                    echo $validation->showError('c_password');
                                }
                            ?>
                            </p>
                        </div>
                       
						<div class="form-group">
							<label>Description</label>
                            <input type="textarea" class="form-input" name="details"/>
                            <p class='required'>
                            <?php
                                if(\Config\Services::validation()->hasError('details'))
                                {
                                    echo $validation->showError('details');
                                }
                            ?>
                            </p>
						</div>

                        <br/>
                        <div class="form-group">
                            <input type="submit" name="submit" class="form-submit" value="Sign up"/>
                        </div>
                    </form>
                    <p class="loginhere">
                        Have already an account ? <br/><a href="/" class="loginhere-link">Login here</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

  </body>
</html>