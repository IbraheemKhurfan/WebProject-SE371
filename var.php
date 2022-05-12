<?php 

//CDMA Name 
$name="CDMA";
$titel="CDMA2022";
$event_year




# Fouad Section Login, SignUp

#SignUp , Login
$name1 = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];

#Check the Validality of Password 
<script>
function validate(){

    if(!document.getElementById("password").value==document.getElementById("repassword").value)alert("Passwords do no match");
        return document.getElementById("password").value==document.getElementById("repassword").value;
        return false;
    }
</script>

?>