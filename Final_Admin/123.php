<!DOCTYPE html>
<?php
session_start();
#to get a fuinction to check existance. 
include('checkExist.php');
#THis function check if the extension is an image extension 
include ('checkExstension.php');
include_once('dbconnect.php');
# to keep track of errors we have these two variables: 

$error= false; 
$msg= "";
if (isset($_POST['submit'])){

    #mysqli_real_escape_string --> prevents sql injection attacks 
    $menuPath = mysqli_real_escape_string($conn, $_FILES["image"]["name"]);
    #$_files[''images]['tmp_name] --> gets u the path for the file in the temprary place where the file is stored.
    #then the function file_get_contents gets the actual data of the image ( not sure but probably binary code of image)
    $menuData = mysqli_real_escape_string($conn, file_get_contents($_FILES["image"]["tmp_name"]));
    $menuName = mysqli_real_escape_string($conn, $_POST['menuName']);
    $discPrice = mysqli_real_escape_string($conn, $_POST['discPrice']);
    $orgPriece = mysqli_real_escape_string($conn, $_POST['orgPrice']);
    $msg = "";  
    #check if the ducome already exist
    if(!exist($menuName)){
        #we check if the extension was valid or not
        if (substr_compare(checkExtension ($menuPath),"valid",0)===0){
            $sql = "INSERT INTO menu (menu_name, menu_path, disc_price, org_price, menu_image) VALUES ('$menuName', '$menuPath', '$discPrice', '$orgPriece', '$menuData')";
            $query = $conn->query($sql) or die(mysqli_error($conn)); 
            $msg="Inserted Correctly! "; 
        }
        #if the extension is not valid
        else{
            $error = true; 
            $msg =  checkExtension ($menuName); 
        }


    }
    # if the recrd already exist we say an error. 
    else {
        $error = true; 
        $msg="The record already exist";
    }
}




?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title lang="es">ELENA CafÃ©</title>
        <link rel="icon" type="image/x-icon" href="ELENA Cafe.jpg">

        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        <!-- custom css file link  -->
        <link rel="stylesheet" href="css/style.css">

        <style>
            a{
                text-decoration: none;
            }
            .sections{
                font-size: 5vw;
                color: whitesmoke;
            }
            .links {

                transition-duration: 0.4s;
                transition-timing-function: ease-in;
                color: whitesmoke;
            }
            .colorMain{
                color: #d3ad7f;
            }
            label.colorSecond{
                color: #edd9c7;
                font-size: 100px:
            }          




        </style>   

    </head>

    <body>

        <!-- header section starts  -->

        <header class="header">
            <!-- FA: (Changing the Logo style and border and height = 8 rem) -->
            <a href="#" class="logo">
                <img src="ELENA Cafe.jpg" alt="" style="border-radius: 50% 20% / 10% 40%; border: 2px solid var(--main-color); height: 8rem;">
            </a>

            <!-- FA: (Changing font-size to 2rem) -->
            <nav class="navbar">
                <a href="#home" style="font-size: 3rem;">home</a>
                <a href="#about" style="font-size: 3rem;">about</a>
                <a href="#menu" style="font-size: 3rem;">menu</a>
                <!-- <a href="#products" style="font-size: 2rem;">products</a>         Will be deleted  -->
                <a href="#gallery" style="font-size: 3rem;">gallery</a>
                <a href="#review" style="font-size: 3rem;">review</a>
                <a href="#contact" style="font-size: 3rem;">contact</a>
            </nav>




            <div class="icons">
                <!-- Start of : (login / register section) -->
                <a href="index.php" id="Login-btn" class="Login-btn" onclick="<?php session_destroy();?>">Logout</a>
                <a href="index.php" id="Register-btn" class="Register-btn">preview</a>
                <!-- End of : (login / register section) -->
            </div>



            <div class="search-form">
                <input type="search" id="search-box" placeholder="search here...">
                <label for="search-box" class="fas fa-search"></label>
            </div>

        </header>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <!-------------------------------------------------- new_code---------------->

        <section class="menu" id="menu">
            <div class="box-container">
                <?php
                $sqlMenu = "SELECT * FROM menu";
                $result = $conn->query($sqlMenu) or die(mysqli_error($conn));
                while ($record = mysqli_fetch_array($result)) {
                ?>


                <div class="box">

                    <?php echo '<img src="data:image/'.';base64,'.base64_encode($record['menu_image']).'"/>'?>;
                    <h3><?php echo $record['menu_name']; ?></h3>
                    <div class="price"><?php echo "$". $record['disc_price']; ?><span><?php echo $record['org_price']; ?></span></div>
                    <h3 style="font-size: 20px;">Quantity</h3>
                    <input type="number" name=<?php echo $record['menu_id']; ?> id=<?php echo $record['menu_id']; ?> class="btn" style="width:80%;  
                                                                                                                                        text-align: center;" placeholder="Quantatiy" min="0" max="30" form="checkout" value="0">

                </div>
                <?php } ?>
                <!-------------------------------------------------- end of new_code---------------->

                </section>
            <!--        Starting of the Form---------------------------------->
            <div class="container mt-5 text-white">
                <h2 style="font-size: 2vw;" class="colorMain">Adding an Menu</h2>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="mb-5 mt-3">
                        <label for="text" class="colorSecond" style="font-size: 1vw;">Menu Item name:</label>
                        <input type="text" class="form-control colorSecond" id="menuName" name="menuName" placeholder="Menu Item name" required>
                    </div>
                    <div class="mb-5 mt-3">
                        <label for="text" class="colorSecond" style="font-size: 1vw;">Orginal Price:</label>
                        <input type="text" class="form-control colorSecond" id="orgPrice" name="orgPrice" placeholder="Enter Original Price" required>
                    </div>
                    <div class="mb-5 mt-3">
                        <label for="text" class="colorSecond" style="font-size: 1vw;">Discounted Price:</label>
                        <input type="text" class="form-control colorSecond" id="discPrice" name="discPrice" placeholder="Enter Discounted Price" required>
                    </div>
                    <div class="mb-5 mt-3">
                        <label for="myfile">Select a file:</label>
                        <input type="file" id="image" name="image" required>
                    </div>

                    <div class="mb-5 mt-3">
                        <p style="font-size: 0.8vw; color: red;"> <?php if($error) echo $msg ?></p>
                        <p style="font-size: 0.8vw; color: whitesmoke;"> <?php if(!$error) echo $msg ?></p>
                    </div>

                    <button type="submit" class="btn btn-primary" name="submit" value="submit" id="submit">Submit</button>
                </form>
            </div>




            </body>

        </html>