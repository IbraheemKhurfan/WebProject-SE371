<?php
    include_once("dbconnect.php");
    if(isset($_GET['Del'])){
        $DeleteID = $_GET['Del'];
        $query = "DELETE FROM labs_info WHERE lab_id= '".$DeleteID."'";
        $result = mysqli_query($conn,$query);

        if($result){
            header("location:Lab_form.php");
        }else{
            echo 'CHECK YOUR QUERY';
        }
    }
?>