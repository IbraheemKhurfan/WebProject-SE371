<?php
$serveName="localhost:3306";
$user="root";
$password="";
$database="cdma";

$conn=new mysqli($serveName,$user,$password,$database);

if($conn->connect_error){
    die("connection error").$conn->connect_error;
}



?>