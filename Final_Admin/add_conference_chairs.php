<?php
    include_once("dbconnect.php");

    if(isset($_POST['submit']))
    {
       $Name = $_POST['name'];
       $University = $_POST['university'];
       $Country = $_POST['country'];
       $Position = $_POST['position'];

       $query = "INSERT INTO `conference_chairs` (`id`, `name`, `university`, `country`, `position`) VALUES (NULL, '$Name', '$University', '$Country', '$Position');";
       $result = mysqli_query($conn,$query);

       if($result){
           header("location:view_conference_chairs.php");
       }else{
           echo 'CHECK YOUR QUERY';
       }
    }
?>