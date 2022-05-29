<?php
    include_once("dbconnect.php");
    session_start();

    if(isset($_POST['save']))
    {
       $UpdatedID = $_GET['id'];
       $UpdatedName = $_POST['name'];
       $UpdatedUniversity = $_POST['university'];
       $UpdatedCountry = $_POST['country'];
       $Position = $_POST['position'];

       $query = "UPDATE conference_chairs SET id = '".$UpdatedID."', name = '".$UpdatedName."', university = '".$UpdatedUniversity."', country = '".$UpdatedCountry."' ,position='".$Position."'  WHERE id = '".$UpdatedID."' ";
       $result = mysqli_query($conn,$query);

       if($result){
           header("location:view_conference_chairs.php");
       }else{
           echo 'CHECK YOUR QUERY';
       }
    }
?>