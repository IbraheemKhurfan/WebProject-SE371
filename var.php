<?php 

//CDMA Name 
$name="CDMA";
$titel="CDMA2022";





# Fouad Section Login, SignUp

#SignUp , Login
$name1 = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];



#Hased Password
$HashedPass= md5("$password");



#Check the Validality of Password 
function validate(){
    if($_POST[$password] == $_POST[$repassword]){
        return true;
    }else{
      return false;
    }  
    }


#Choosed Password
$SecretPassword = "IamAdminGiveMeAccessToThisWebsiteCDMA2022";
$Hash= echo md5($password);

function IsAdmin(){
     if($_POST["$HashedPass"] == $Hash){
        return "indexAdmin.php";
    }else{
      return "indexUser.php";
    } 
    }
?>
