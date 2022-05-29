<?php
    include_once("dbconnect.php");

    if(isset($_POST['submit']))
    {
       $Name = $_POST['name'];
       $University = $_POST['university'];
       $Country = $_POST['country'];

       $query = "INSERT INTO `committees` (`id`, `name`, `university`, `country`) VALUES (NULL, '$Name', '$University', '$Country');";
       $result = mysqli_query($conn,$query);

       if($result){
           header("location:view_committees.php");
       }else{
           echo 'CHECK YOUR QUERY';
       }
    }
?>