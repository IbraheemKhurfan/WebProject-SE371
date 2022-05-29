<?php
    include_once("dbconnect.php");
    if(isset($_GET['Del'])){
        $DeleteID = $_GET['Del'];
        $query = "DELETE FROM sponsors WHERE sponsors_id= '".$DeleteID."'";
        $result = mysqli_query($conn,$query);

        if($result){
            header("location:sponsors_form.php");
        }else{
            echo 'CHECK YOUR QUERY';
        }
    }
?>