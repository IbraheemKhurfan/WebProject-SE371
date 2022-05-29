<?php 

    include_once("dbconnect.php");
    $query_view = "SELECT * FROM users";
    $result_view = mysqli_query($conn,$query_view);

?>
<!-- ******************************************************* -->
                         <!-- ******************************************************* --> <!-- ******************************************************* -->

                    <!-- Please make sure to put it above so the message shows up , also make sure it is done on email  -->

                     <!-- ******************************************************* --> <!-- ******************************************************* -->
                    <!-- Checking for Newsletter Subscrivtion  -->
<?php            
    if(isset($_POST['submit'])){
        while($row_view=mysqli_fetch_assoc($result_view)){
            $ID = $row_view['id'];
            $Email = $row_view['email'];
            $Sub = $row_view['news_sub'];
            if($_POST['SubEmail'] == $Email){
                $exists = 1;
                // if($Sub == 0){
                //     $message = '<strong>All Set!</strong> You have successfully subscribed to CDMA News Letter';
                //     Update();
                // }else{
                //     $message = '<strong>Error</strong> You are already Subscribed to CDMA News Letter';
                // }
            }else{
                $exists = 0;
            }
        }
        if($exists){
            echo 'Done';
        }else{
            echo 'YOU CANNOT SUBSCRIBE TO THE NEWS LETTER WITHOUT AN ACCOUNT';
        }
        // header(location:'index.php');
    }

    function Update(){
        include_once("dbconnect.php");
        $query_update="UPDATE users SET news_sub ='1' where email='$Email' ";
        $result_update = mysqli_query($conn,$query_update);
    }
?>