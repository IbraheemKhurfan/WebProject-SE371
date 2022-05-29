<?php
    include_once("dbconnect.php");
    if(isset($_GET['Del'])){
        $DeleteID = $_GET['Del'];
        $query = "DELETE FROM conference_chairs WHERE id = '".$DeleteID."'";
        $result = mysqli_query($conn,$query);

        if($result){
            header("location:view_conference_chairs.php");
        }else{
            echo 'CHECK YOUR QUERY';
        }
    }
?>