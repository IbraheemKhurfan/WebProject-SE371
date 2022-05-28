<?php
    include_once("dbconnect.php");
    if(isset($_GET['Del'])){
        $DeleteID = $_GET['Del'];
        $query = "DELETE FROM carousel WHERE carousel_id = '".$DeleteID."'";
        $result = mysqli_query($conn,$query);

        if($result){
            header("location:view_Carousel.php");
        }else{
            echo 'CHECK YOUR QUERY';
        }
    }
?>