<?php
    include_once("dbconnect.php");
    include_once('checkExstension.php');
    session_start();



    # to keep track of errors we have these two variables: 

    $error= false; 
    $msg= "";
if (isset($_POST['submit'])){

    #mysqli_real_escape_string --> prevents sql injection attacks 
    $member_name = mysqli_real_escape_string($conn, $_POST['name']);
    $member_desc = mysqli_real_escape_string($conn, $_POST['member_desc']);
    $member_link =$_POST['link'];
    #getting the image data
    $member_image = mysqli_real_escape_string($conn, file_get_contents($_FILES["image"]["tmp_name"]));
    $path = mysqli_real_escape_string($conn, $_FILES["image"]["name"]); 
    $msg = "";   
    #check if the ducome already exist
    if(!exist($path,$member_name)){
        #we check if there is less than 5 reviews already
           
           #we check if the extension was valid or not
           if (substr_compare(checkExtension ($path),"valid",0)===0){
            $sql = "INSERT INTO team_members (member_path, member_name,member_desc,member_link, member_image) VALUES ('$path', '$member_name','$member_desc','$member_link', '$member_image')";
            $query = $conn->query($sql) or die(mysqli_error($conn)); 
            $msg="Inserted Correctly! "; 
        }
        #if the extension is not valid
        else{
            $error = true; 
            $msg =  checkExtension ($path); 
        } 
        
        


    }
    # if the recrd already exist we say an error. 
    else {
        $error = true; 
        $msg="The photo already exists";
    }
    
}


function exist($path,$member_name){
    $sql = "select * from team_members where member_path ='$path' AND member_name='$member_name'"; 
    $query = $GLOBALS['conn']->query($sql) or die(mysqli_error($GLOBALS['conn']));
    $msg = ""; 
    if (mysqli_num_rows($query)>0){
        return true;  
    }
    else{
        return false;
    }

}


    // $ID = $_GET['GetID'];
    // $query = "SELECT * FROM users WHERE id ='".$ID."'";
    // $result = mysqli_query($conn,$query);
    
    // while($row=mysqli_fetch_assoc($result))
    // {
    //     $ID = $row['id'];
    //     $Name = $row['name'];
    //     $Phone = $row['phonenum'];
    //     $Email = $row['email'];
    //     if($row['registration'] == 1){
    //         $Registered = "Registered";
    //     }else{
    //         $Registered = "Not Registered";
    //     }
    //     if($row['Is_Admin'] == 1){
    //         $Role = 'Admin';
    //     }else{
    //         $Role = 'User';
    //     }
    // }


    
?>
<?php 


$query1 = "select * from team_members";
$result1 = mysqli_query($conn, $query1) or die(mysqli_error($conn));

?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Edit User</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <!-- Custom CSS -->
   <link href="css/style.min.css" rel="stylesheet">


  <!--Search Script --> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar " data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="/WebProject-SE371/">
                        <!-- Logo icon -->
                        <b class="image-icon">
                            <!-- Dark Logo icon -->
                            <img src="plugins/images/cdma2022_logo-removebg-preview.png" width="200px" alt="homepage" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                       
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                   
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav ms-auto d-flex align-items-center">
                        <!-- ============================================================== -->
                        <!-- Search Script --> 
                        <!-- ============================================================== -->
                        <script>
                            $(document).ready(function(){
                            $("#myInput").on("keyup", function() {
                                var value = $(this).val().toLowerCase();
                                $("#myTable tr").filter(function() {
                                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                                });
                            });
                            });
                        </script>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class=" in">
                            <form role="search" class="app-search d-none d-md-block me-3">
                                <input type="text" placeholder="Search..." id="myInput" class="form-control mt-0">
                                <a href="" class="active">
                                    <i class="fa fa-search"></i>
                                </a>
                            </form>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li>
                            <li class="nav-item dropdown ">
                                <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" ><?php echo $_SESSION['name'] ?></a>
                                <ul class="dropdown-menu">
                                     <li><a class="dropdown-item" href="\WebProject-SE371\index.php">Home</a></li>
                                     <li><a class="dropdown-item" href="\WebProject-SE371\logout.php">Logout</a></li>
                                </ul>
                            </li>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="dashboard.php"
                                aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="profile.php"
                                aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Profile</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="view_Users.php"
                                aria-expanded="false">
                                <i class="fa fa-columns" aria-hidden="true"></i>
                                <span class="hide-menu">Users</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="view_Carousel.php"
                                aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">Carousel</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="Lab_form.php"
                                aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">Labs</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="fontawesome.php"
                                aria-expanded="false">
                                <i class="fa fa-font" aria-hidden="true"></i>
                                <span class="hide-menu">Icon</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="team_members.php"
                                aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Team Members</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="sponsors_form.php"
                                aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">Sponsors</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="404.php"
                                aria-expanded="false">
                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                                <span class="hide-menu">Error 404</span>
                            </a>
                        </li>
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        
        <div class="page-wrapper" style="min-height: 250px;">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Add Member</h4>
                    </div>
   
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                    <!-- ============================================================== -->
                    <!-- Start Page Content -->
                    <!-- ============================================================== -->
        
                    <div class="container-fluid">
                    <!-- ============================================================== -->
                    <!-- Start Page Content -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="white-box">
                                <h3 class="box-title">Member Table</h3>
                                <div class="table table-responsive table-hover ">
                                    <table class="table text-nowrap">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0"><strong>ID</strong></th>
                                                <th class="border-top-0"><strong>Name</strong></th>
                                                <th class="border-top-0"><strong>Description</strong></th>
                                                <th class="border-top-0"><strong>Linkedin Link</strong></th>
                                                <th class="border-top-0"><strong>Image</strong></th>
                                                <th class="border-top-0"><strong>Edit</strong></th>
                                                <th class="border-top-0"><strong>Delete</strong></th>
                                            </tr>
                                        </thead>
        
                                        
                                        <?php 
                                        while($row=mysqli_fetch_assoc($result1))
                                        {
                                            $ID = $row['member_id'];
                                            $Name = $row['member_name'];
                                            $Description = $row['member_desc'];
                                            $Link = $row['member_link'];
                                            $Path = $row['member_path'];
                                        ?>
    
                                        <tbody id="myTable">
                                            <tr style="height:200px">
                                                <td><?php echo $ID ?></td>
                                                <td ><?php echo $Name ?></td>
                                                <td ><textarea name="" id="" disabled cols="30" rows="6"><?php echo $Description?></textarea></td>
                                                <td><?php echo $Link ?></td>
                                                <td><?php echo '<img style=" height: 150px; width: 150px; " class="d-block" src="data:image/'.';base64,'.base64_encode($row['member_image']).'"/>'?> </td>
                                                <td><a href="Team_members_update.php?GetID=<?php echo $ID ?>">Edit</a></td>
                                                <td><a href="delete_member.php?Del=<?php echo $ID ?>">Delete</a></td>
                                            </tr>  
                                        </tbody>
                                        
                                        <?php 
                                        }  //Closing the Loop
                                        ?>
                                        
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End PAge Content -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Right sidebar -->
                    <!-- ============================================================== -->
                    <!-- .right-sidebar -->
                    <!-- ============================================================== -->
                    <!-- End Right sidebar -->
                    <!-- ============================================================== -->
            </div>


                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="mb-3 mt-3">
                                  <label for="name">Member Name:</label>
                                  <input type="name" class="form-control" id="name" name="name" placeholder="Please provide the Member name" value ="">
                                </div>
                                <div class="mb-3 mt-3">
                                  <label for="member_desc">Member brief description:</label>
                                  <textarea class="form-control" rows="5" id="member_desc" name="member_desc" placeholder="Please provide a brief description" value =""></textarea>
                                  </div>
                                <div class="mb-3 mt-3">
                                  <label for="link">Member Linkedin link</label>
                                  <input type="url" class="form-control" id="link" name="link" placeholder="Please provide the link for the Member Linkedin " value ="https://www.psu.edu.sa/en">
                                </div>
                                <div class="mb-3 mt-3">
                                  <label for="image">Member Image:</label>
                                  <p for="image">Please make sure the name of file has no (<span class="text-danger display-5">.</span>) <br> <span class="text-danger">Allowed types: "png", "jpeg", "svg", "webp", "jpg","jfif"</span></p>
                                  <br>
                                  <input type="file" id="image" name="image" required>
                                  <br>
                                  <br>
                                </div>
                                <button type="submit" class="btn btn-primary" name="submit" value="save" id="submit">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center"><img src="\WebProject-SE371\img\cdma2022_logo-removebg-preview.png" width="10%" alt="CDMA"><br> All rights are preserved for 2022 © CDMA  
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
</body>

</html>