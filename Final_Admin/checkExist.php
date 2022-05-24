<?php
include_once('dbconnect.php'); 
function exist($menuName){
    $sql = "select * from menu where menu_name ='$menuName'"; 
    $query = $GLOBALS['conn']->query($sql) or die(mysqli_error($GLOBALS['conn']));
    $msg = ""; 
    if (mysqli_num_rows($query)>0){
        return true;  
    }
    else{
        return false;
    }

}