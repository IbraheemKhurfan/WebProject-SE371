<?php 

//CDMA Name 
$name="CDMA";
$titel="CDMA2022";





# Fouad Section Login, SignUp

#SignUp , Login
$name1 = $_POST["name"];
$phone = $_POST["phone"];
$email1 = $_POST["email"];
$password1 = $_POST["password"];
$repassword1 = $_POST["repassword"];





#Check the Validality of Password 
function validate(){
    if($_POST['password'] == $_POST['repassword']){
        return true;
    }else{
      return false;
    } 
}



function IsAdmin(){
     if($_POST['password'] == $_POST['repassword']){
        return "indexAdmin.php";
    }else{
      return "indexUser.php";
    } 
}

?>
