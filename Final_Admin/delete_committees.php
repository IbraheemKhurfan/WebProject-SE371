<?php
    include_once("dbconnect.php");
    if(isset($_GET['Del'])){
        $DeleteID = $_GET['Del'];
        $query = "DELETE FROM committees WHERE id = '".$DeleteID."'";
        $result = mysqli_query($conn,$query);

        if($result){
            header("location:view_committees.php");
        }else{
            echo 'CHECK YOUR QUERY';
        }
    }
?>