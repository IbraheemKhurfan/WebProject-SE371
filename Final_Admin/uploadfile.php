<?php
include_once("dbconnect.php");

$statusMsg = '';

//file upload path

$targetDir = "C:/xampp/htdocs/WebProject-SE371/Program_Files/";
// $fileName = basename($_FILES["file"]["name"]);
$fileName= "ProgramFile.pdf";
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])) {
    //allow certain file formats
    $allowTypes = array('pdf');
    if(in_array($fileType, $allowTypes)){
        //upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            $statusMsg = "The file ".$fileName. " has been uploaded.";
            $sql = "INSERT INTO add_program(Program_Name,Program_file) VALUES ('$fileName','$targetFilePath')"; 
            $query = $conn->query($sql) or die(mysqli_error($conn)); 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}





//display status message
echo $statusMsg;


?>