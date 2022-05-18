<?php
include_once("dbconnect.php");
if(isset($_POST['submit'])){
    $name=htmlspecialchars($_POST['name']);
    $email=htmlspecialchars($_POST['email']);
    $phoneNum=htmlspecialchars($phoneNum['phone']);
    $password=md5(htmlspecialchars($phoneNum['password']));
    $repassword=md5(htmlspecialchars($phoneNum['repassword']));

    if($password==$repassword){
    $email_query="SELECT * from users where email='$email'";
    $result=mysqli_query($conn,$email_query);
      if($result->fetch_row()>0){
          print("working");
      }else{
          session_start();
          $_SESSION['name'];
          $_SESSION['email'];
          $_SESSION['phoneNum'];
          $_SESSION['password'];
          $_SESSION['repassword'];
      }
    }

}

?>