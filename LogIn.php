<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	<title>CDMA Login</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="SignUp-Login/css/nunito-font.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="SignUp-Login/css/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<?php
//connecting to DB
include_once("dbconnect.php");
//checking if user account exist 
function check_if_exist($email,$password,$conn){
	//check if account already exits 
	$Query="SELECT * from users where email='$email' and password='$password';";
	$result=$conn->query($Query);
	if($result) {
		if (mysqli_num_rows($result) > 0) {
		  return true;
		} else {
			return false;
		}
	  } else {
		echo 'Error: '.$conn->mysqli_error();
	  }
}
//starting the session
session_start();
//removing all special char
function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
  }



//checking if Sign Up button was pressed
if(isset($_POST['Login'])){
	//taking input form user 
	$email=test_input($_POST['your-email']);
	$password=md5(test_input($_POST['password']));
	//checking passwords are same
		if(check_if_exist($email,$password,$conn)){
			$Query="SELECT * from users where email='$email' and password='$password'";
			$result=$conn->query($Query);
			$result=$result->fetch_array();
			$_SESSION['LogIn']=True;
			$_SESSION['Is_Admin']=$result['Is_Admin'];
			$_SESSION['name']=$result['name'];
			$_SESSION['email']=$result['email'];
			$_SESSION['phonenum']=$result['phonenum'];
			$_SESSION['password']=$result['password'];
			$_SESSION['registration']=$result['registration'];
			// relocate him to user page 
			if($_SESSION['Is_Admin']==1){
			header('Location:indexAdmin.php');
			}else{
			header('Location:indexUser.php');
		}
		}else{?>
			<div class="alert alert-danger alert-dismissible">
				<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
				<strong>Incorrect</strong> Email/Password are incorrect
			</div>
<?php 
		//else closing
		}
//if isset closing
}
?>
<body class="form-v6">
	<div class="page-content">
		
		<div class="form-v6-content">
			<div class="form-left">
				<img src="SignUp-Login/images/nasa-Q1p7bh3SHj8-unsplash.jpg" width="484px" height="575px" alt="form">
			</div>
			<form class="form-detail" action="#" method="post">
				<h2>Login <br> <br><a href="index.php"><img src="SignUp-Login/images/cdma2022_logo-removebg-preview.png " width="50%"></a></h2>
				<div class="form-row">
					<input type="text" name="your-email" id="your-email" class="input-text" placeholder="Email Address" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
				</div>
				<div class="form-row">
					<input type="password" name="password" id="password" class="input-text" placeholder="Password" required>
				</div>
				<div class="form-row-last">
					<input type="submit" name="Login" class="register" value="Login">
				</div>
				<div class="form-row-last">
					<P style="color:blue ;">You don't have an account yet! <br><a href="SignUp.php">Sign Up</a></P>
				</div>
			</form>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>