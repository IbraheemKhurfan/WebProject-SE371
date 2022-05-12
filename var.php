<?php 

//CDMA Name 
$name="CDMA";
$titel="CDMA2022";
$event_year




# Fouad Section Login, SignUp

#SignUp
$name = $_POST['name'];
$name = $_POST['phone'];
$name = $_POST['email'];
$name = $_POST['password'];
$name = $_POST['repassword'];

#Login
$name = $_POST['email'];
$name = $_POST['password'];

#Check the Validality of Password 
<script>
function validate(){

    if(!document.getElementById("password").value==document.getElementById("repassword").value)alert("Passwords do no match");
        return document.getElementById("password").value==document.getElementById("repassword").value;
        return false;
    }
</script>

?>