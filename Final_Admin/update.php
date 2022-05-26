<?php
    require_once("connection.php");

    if(isset($_POST['save']))
    {
       $UpdatedID = $_GET['id'];
       $UpdatedName = $_POST['name'];
       $UpdatedPhone = $_POST['phone'];
       $UpdatedEmail = $_POST['email'];
       if(strtolower($_POST['role']) == 'admin')
       {
           $IsAdmin = 1;
       }else{
           $IsAdmin = 0;
       }

       $query = "UPDATE users SET id = '".$UpdatedID."', name = '".$UpdatedName."', phonenum = '".$UpdatedPhone."', email = '".$UpdatedEmail."', Is_Admin = '".$IsAdmin."' WHERE id = '".$UpdatedID."' "
       $result = mysqli_query($conn,$query);

       if($result){
           header("location:view_Users.php");
       }else{
           echo 'CHECK YOUR QUERY U BLOODY BASTARD';
       }
    }
?>