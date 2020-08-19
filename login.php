<?php

    $conn = mysqli_connect("localhost", "root", "", "magis");

    if(mysqli_connect_errno()){
    	echo "Conn.failed";
    }

    session_start();

    if(isset($_POST['btn_submit'])){

	    $uname = mysqli_real_escape_string($conn,$_POST['username']);
	    $password = mysqli_real_escape_string($conn,$_POST['password']);

	    if ($uname != "" && $password != ""){

	        $sql_query = "select count(*) as cntUser from users where username='".$uname."' and password='".$password."'";
	        $result = mysqli_query($conn,$sql_query);
	        $row = mysqli_fetch_array($result);

	        $count = $row['cntUser'];

	        if($count > 0){
	            $_SESSION['uname'] = $uname;
	            header('Location: components/index.php');
	        }else{
	            echo "Invalid username and password";
	        }

	    }

	}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>MAGIS | Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="stylesheet" type="text/css" href="assets/dist/login/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/dist/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/dist/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="assets/dist/login/vendor/animate/animate.css">	
	<link rel="stylesheet" type="text/css" href="assets/dist/login/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="assets/dist/login/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="assets/dist/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/dist/login/css/main.css">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('assets/dist/login/images/img-01.jpg');">
			<div class="wrap-login100 p-t-190 p-b-30">
				<form class="login100-form validate-form" action="" method="post">
					<div class="login100-form-avatar">
						<img src="assets/dist/login/images/mkti_logo.png" alt="MakatiSeal">
					</div>

					<span class="login100-form-title p-t-20 p-b-45">
						MAGIS Admin
					</span>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>

					<div class="container-login100-form-btn p-t-10">
						<input type="submit" class="login100-form-btn" value="Login" name="btn_submit">
					</div>

					<div class="text-center w-full p-t-25 p-b-230">
						<a href="#" class="txt1">
							Forgot Username / Password?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	
	<script src="assets/dist/login/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="assets/dist/login/vendor/bootstrap/js/popper.js"></script>
	<script src="assets/dist/login/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/dist/login/vendor/select2/select2.min.js"></script>
	<script src="assets/dist/login/js/main.js"></script>

</body>
</html>