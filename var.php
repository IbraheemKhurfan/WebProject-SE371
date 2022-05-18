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





#Check the Validality of Password 
function validate(){
    if($_POST["$password"] == _POST["$repassword"]){
        return true;
    }else{
      return false;
    } 
}



function IsAdmin(){
     if($_POST["$password"] == $repassword){
        return "indexAdmin.php";
    }else{
      return "indexUser.php";
    } 
}
?>
