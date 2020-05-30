<!DOCTYPE html>
<html lang="en">

	<head>

		<title>Login</title>
		<link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">   
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
		<meta charset="UTF-8">
    	<meta name="description" content="">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    	<!--bootsrap-->
    	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    	<!--font-->
    	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    	<!--CSS-->
   			<style>
    		
    		@import url('https://fonts.googleapis.com/css?family=Numans');

    			body{
    				background-image: url(img/65.jpg); 
    				background-size: cover;
    				background-repeat: no-repeat;    				
    				font-family:'Numans', sans-serif;
    				background-attachment: fixed;
    			}

    			background-image{
    				width: 100%;
    				height: auto;
    			}
				
    			.container{
				height: 100%;
				
				}

				.card{
				height: 5%;
				margin-top: 14%;
				margin-left: 60%;
				margin-bottom: auto;
				width: 35%;
				background-color: rgba(0,0,0,0.5) !important;
				font-size: 1.1vw;
				
				}
				p{
					color:white;
				}
				label{
					color:white;
				}

				.social_icon span{
				font-size: 60px;
				margin-left: 10px;
				color: #FFC312;
				}

				.social_icon span:hover{
				color: white;
				cursor: pointer;
				}

				.card-header h3{
				font-size: 1.7vw;
				color: white;
				}

				.card-footer{
				font-size: 1.0vw;	
				}

				.social_icon{
				position: absolute;
				right: 20px;
				top: -45px;
				}

				.input-group-prepend span{
				width: 100%;
				background-color: #FFC312;
				color: black;
				border:0 !important;
				}

				input:focus{
				outline: 0 0 0 0;
				box-shadow: 0 0 0 0 !important;

				}

				.remember{
				color: white;
				}

				.remember input
				{
				width: 20px;
				height: 20px;
				margin-left: 15px;
				margin-right: 5px;
				}

				.login_btn{
				color: black;
				background-color: #FFC312;
				width: 100px;
				font-size:20px;
				}

				.login_btn:hover{
				color: black;
				background-color: white;
				}

				.links{
				color: white;
				}

				.links a{
				margin-left: 4px;
				}

				span{
					width: 4vw;
				}

				

    	</style>



	</head>

	<body>
		
		<div class="container">
			<div class="d-flex justify-content-center h-100">
				<div class="card">
					<div class="card-header">
						<h3>Sign In</h3>
						<!--<div class="d-flex justify-content-end social_icon">
						
				</div>-->
					</div>
				<!--</div>-->
			<!--</div>-->
		<!--</div>-->

		<div class="card-body">

<form action="/loginuser" method="post" class="form-horizontal">

            <div class="login-box">
                    <p>Email</p>
					<input type="text" name="email" placeholder="Enter Email">

                    <?php
         if(\Config\Services::validation()->hasError('email'))
          {
         echo $validation->showError('email');
           }
     ?>

			    	<p>Password</p>
					<input type="password" name="password" placeholder="Enter Password">
                    <?php
        if(\Config\Services::validation()->hasError('password'))
     {
          echo $validation->showError('password');
     }
     ?>
				    <input type="submit"  value="Login" class="btn float-right login_btn">		
</form>

</div>

<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account?<a href="/register">Sign Up</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#">Forgot your password?</a>
				</div>
			</div>
		</div>
		<!--</form>-->
		</div>
	</div>







</body>
</html>