<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>TechNote</title>
		<link rel="stylesheet" type="text/css" href="css/Login.css">
		
	</head>
	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 md_6">
					<img class="side_image" src="images/pink_notebook.jpg" ></img>
				</div>
				<div class="col-md-6 login_form_div md_6">
					<h1><span class="hashtag">#</span><u><i>TechNote</i></u></h1>
					<form method="post" class="form-horizontal" action="register_submit.php">
						<h2 class="heading_login"><u>SignUp</u></h2>
						<?php if(isset($_SESSION['register_msg'])) { ?>
							<h6 class="register_msg"><?php $_SESSION['register_msg']= '';?></h6>
						<?php } ?>
                        <div class="row">
							<div class="col-md-4 inputs">First Name:</div>
							<div class="col-md-6  col-9 form-group">
									<input name="first_name" placeholder="Enter First Name" type="text" class="form-control " required>
							</div>
						</div>
                        <div class="row">
							<div class="col-md-4 inputs">Last Name:</div>
							<div class="col-md-6  col-9 form-group">
									<input name="last_name" placeholder="Enter Last Name" type="text" class="form-control " required>
							</div>
						</div>
                        <div class="row">
							<div class="col-md-4 inputs">Mobile:</div>
							<div class="col-md-6  col-9 form-group">
									<input name="mobile" placeholder="Enter Mobile" type="number" class="form-control" required>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 inputs">Email:</div>
							<div class="col-md-6  col-9 form-group">
									<input name="email" placeholder="Enter Email" type="text" class="form-control " required>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 inputs">Password:</div>
							<div class="col-md-6  col-9 form-group">
									<input name="password" placeholder="Enter Password" type="password" class="form-control " required>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4"></div>
							<div class="col-md-6  col-9 form-group">
									<input value="Register"  type="submit" class="form-control submit_button">
							</div>
						</div>
						<div class="btn_register_div">
							For Existing User : <a href="index.php" class="btn_register">SignIn</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
		<!-- Compiled and Minified Bootstrap CSS -->
		<link rel = "stylesheet" 
   		href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
  		 integrity = "sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
  		 crossorigin = "anonymous">

		<!-- jQuery Library -->
		<script src = "https://code.jquery.com/jquery-3.2.1.slim.min.js" 
 		  integrity = "sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" 
		   crossorigin = "anonymous">
		</script>

		<!-- Popper -->
		<script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" 
 		  integrity = "sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" 
 		  crossorigin = "anonymous">
		</script>

		<!-- Compiled and Minified Bootstrap JavaScript -->
		<script src = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" 
		   integrity = "sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" 
		   crossorigin = "anonymous">
		</script>

</html>