<?php
    include_once("dbconnect.php");
    if(isset($_GET['Del'])){
        $DeleteID = $_GET['Del'];
        $query = "DELETE FROM team_members WHERE member_id= '".$DeleteID."'";
        $result = mysqli_query($conn,$query);

        if($result){
            header("location:team_members.php");
        }else{
            echo 'CHECK YOUR QUERY';
        }
    }
?>