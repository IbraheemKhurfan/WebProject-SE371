<?php
session_start();

if($_SESSION['Is_Admin']){
    header('Location:Final_Admin\dashboard.php');
}else{
    header('Location:Final_user\profile_user.php');
}


?>