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



// function IsAdmin(){
//      if($_POST['password'] == $_POST['repassword']){
//         return "indexAdmin.php";
//     }else{
//       return "indexUser.php";
//     } 
// }

?>
<?php 
session_start();

if(isset($_POST['submit'])){
    $name1= $_POST["name"];
    $phone= $_POST["phone"];
    $email= $_POST["email"];
    $password= $_POST["password"];
    $repassword= $_POST["repassword"];

    function validate($password,$repassword){
        if($password == $repassword){
            return true;
        }else{
          return false;
        } 
    }

}else{
    print("Connection Failed");
}





?>