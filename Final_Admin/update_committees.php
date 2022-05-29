<?php
    include_once("dbconnect.php");
    session_start();

    if(isset($_POST['save']))
    {
       $UpdatedID = $_GET['id'];
       $UpdatedName = $_POST['name'];
       $UpdatedUniversity = $_POST['university'];
       $UpdatedCountry = $_POST['country'];

       $query = "UPDATE committees SET id = '".$UpdatedID."', name = '".$UpdatedName."', university = '".$UpdatedUniversity."', country = '".$UpdatedCountry."' WHERE id = '".$UpdatedID."' ";
       $result = mysqli_query($conn,$query);

       if($result){
           header("location:view_committees.php");
       }else{
           echo 'CHECK YOUR QUERY';
       }
    }
?>