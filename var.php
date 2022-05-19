<?php 

//CDMA Name 
$name="CDMA";
$titel="CDMA2022";





# Fouad Section Login, SignUp

#SignUp , Login
// $name1= $_POST["name"];
// $phone= $_POST["phone"];
// $email= $_POST["email"];
// $password= $_POST["password"];
// $repassword= $_POST["repassword"];





#Check the Validality of Password 





?>
<?php 
session_start();

if(isset($_POST['submit'])){
    $name1= $_POST["name"];
    $phone= $_POST["phone"];
    $email= $_POST["email"];
    $password= $_POST["password"];
    $repassword= $_POST["repassword"];



}else{
    print("Connection Failed");
}





?>
<script>
    function validate(){

       if(!document.getElementById("password").value==document.getElementById("repassword").value)alert("Passwords do no match");
       return document.getElementById("password").value==document.getElementById("repassword").value;
       return false;
    }

    // function IsAdmin(){
    //  if( $_POST["password"] == 'Hello' ){
    //   return header(location: "indexAdmin.php");
    // }else{
    //   return window.location.href ="indexUser.php";
    // } 
    // }
</script>