<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	<title>CDMA Sign Up</title>
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
function check_if_exist($email,$conn){
	$Query="SELECT email from users where email='$email'";
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
if(isset($_POST['SignUp'])){
	//taking input form user 
	$name=test_input($_POST['fname'])." ".test_input($_POST['lname']);
	$email=test_input($_POST['your-email']);
	$password=md5(test_input($_POST['password']));
	$re_password=md5(test_input($_POST['comfirm-password']));
	$phone=test_input($_POST['phone-number']);
	
	//checking passwords are same
	if($password===$re_password){
		if(!check_if_exist($email,$conn)){
			$_SESSION['name']=$name;
			$_SESSION['LogIn']=True;
			$_SESSION['Is_Admin']='0';
			$_SESSION['email']=$email;
			$_SESSION['phonenum']=$phone;
			$_SESSION['password']=$password;
			$_SESSION['registration']='0';
			$inst_query="INSERT INTO users (name,phonenum,email,password,Is_Admin) values ('$name','$phone','$email','$password',0)";
			$conn->query($inst_query);
			// relocate him to user page 
			header('Location:indexUser.php');
		}else{?>
			<div class="alert alert-danger alert-dismissible">
				<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
				<strong>Account Exist</strong> The account already exist please try another 
			</div>
<?php 
		//else closing
		}
	//closing the if for password checking 
	}else{?>
	<div class="alert alert-warning alert-dismissible">
				<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
				<strong>Password</strong> The passwords are not the same  
	</div>
	<?php
//if isset closing
}
}
?>
<body class="form-v6">
	<div class="page-content">
			
		<div class="form-v6-content">
			<div class="form-left me-5">
				<img src="SignUp-Login/images/hand.jpg"  width="484px" height="99.4%" alt="form">
			</div>
			
			<form class="form-detail" action=""   method="post">
				<h2>Sign Up<br> <br><a href="index.php"><img src="SignUp-Login/images/cdma2022_logo-removebg-preview.png " width="50%"></a></h2>
				<div class="form-row">
					<input type="text" name="fname" id="fname" class="input-text" placeholder="Your First Name" required>
				</div>
				<div class="form-row">
					<input type="text" name="lname" id="lname" class="input-text" placeholder="Your Last Name" required>
				</div>
				<div class="form-row">
					<input type="text" name="your-email" id="your-email" class="input-text" placeholder="Email Address" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
				</div>
				<div class="form-row">
					<input type="tel" name="phone-number" id="phone-number" class="input-text" minlength="3" maxlength="13" pattern="+9[1-9]{2}-[0-9]{3}-[0-9]{4}" value="+966" placeholder="Phone Number"  >
				</div>
				<div class="form-row">
					<input type="password" name="password" id="password" class="input-text" placeholder="Password" minlength="4"  required>
				</div>
				<div class="form-row">
					<input type="password" name="comfirm-password" id="comfirm-password" class="input-text" placeholder="Comfirm Password" minlength="4" required>
				</div>
				<div class="form-row-last">
					<input type="submit" name="SignUp" class="register" value="Sign Up">
				</div>
				<div class="form-row-last">
					<P style="color:blue ;">You already have an account!<br><a href="LogIn.php">Login</a></P>
				</div>
			</form>
		</div>
	</div>
</body>
</html>
