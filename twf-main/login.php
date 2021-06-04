<?php  

require('db.php'); 

?>
<!DOCTYPE html> 
<html lang="en">
<head>
		<meta charset="utf-8">
		<title>Login</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		
		<!-- Favicons -->
		<link href="assets/img/favicon.png" rel="icon">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
		
		<!-- Main CSS -->
		<link rel="stylesheet" href="assets/css/style.css">

	
	</head>
	<?php 
		session_start(); 
		
			
			if (isset($_POST['email'])){
				$name_ret='';
				$email = stripslashes($_REQUEST['email']); // removes backslashes
				$email = mysqli_real_escape_string($con,$email); //escapes special characters in a string
				$password = stripslashes($_REQUEST['pass']);
				$password = mysqli_real_escape_string($con,$password);
				
			//Checking is user existing in the database or not
			$query = "SELECT * FROM `volunteer` WHERE email='$email' and password='".md5($password)."'";
			$result = mysqli_query($con,$query);
			
			$rows = mysqli_num_rows($result);
			$row = mysqli_fetch_array($result);
			$name_ret = $row['name'];
			$vol_id=$row['vol_id'];
			
				if($rows==1){
				//echo '<h1>'.$eng_name_ret.'</h1>';
			$_SESSION['name']=$name_ret;
			$_SESSION['vol_id']=$vol_id;
					$_SESSION['email'] = $email;
					header("Location:admin"); // Redirect user to index.php
					echo'<h1 class="alert alert-primary" role="alert">Sucess</h1>';
					}
					else{
					echo'<h1 class="alert alert-primary" role="alert">INVALID USERNAME OR PASSWORD</h1>';
					}
			}?>
	<body class="account-page">

		<!-- Main Wrapper -->
		<div class="main-wrapper">
		
			<?php include('head_res.php'); ?>

			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">
					
					<div class="row">
						<div class="col-md-8 offset-md-2">
							
							<!-- Login Tab Content -->
							<div class="account-content">
								<div class="row align-items-center justify-content-center">
									<div class="col-md-7 col-lg-6 login-left">
										<img src="assets/img/login-banner.png" class="img-fluid" alt="Doccure Login">	
									</div>
									<div class="col-md-12 col-lg-6 login-right">
										<div class="login-header">
											<h3>Login </h3>
										</div>
										<form action="" method="post">
											<div class="form-group form-focus">
												<input name="email" type="email" class="form-control floating">
												<label class="focus-label">Email</label>
											</div>
											<div class="form-group form-focus">
												<input name="pass" type="password" class="form-control floating">
												<label class="focus-label">Password</label>
											</div>
											<div class="text-right">
												<a class="forgot-link" href="forgot-password.php">Forgot Password ?</a>
											</div>
											<button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Login</button>
											<div class="login-or">
												<span class="or-line"></span>
												<span class="span-or">or</span>
											</div>
										
											<div class="text-center dont-have">Don’t have an account? <a href="register.php">Register</a></div>
										</form>
									</div>
								</div>
							</div>
							<!-- /Login Tab Content -->
								
						</div>
					</div>

				</div>

			</div>		
			<!-- /Page Content -->
			<?php include 'footer.php'; ?> 
		</div>
		<!-- /Main Wrapper -->
	  
		<!-- jQuery -->
		<script src="assets/js/jquery.min.js"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>
		
	</body>

</html>