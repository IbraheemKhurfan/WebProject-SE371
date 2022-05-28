<!DOCTYPE html>
<html dir="ltr" lang="en">
<?php
include_once("dbconnect.php");
session_start();
function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
  }
  ?>
  

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <!-- Custom CSS -->
   <link href="css/style.min.css" rel="stylesheet">
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
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="/WebProject-SE371/">
                        <!-- Logo icon -->
                        <b class="logo-icon">
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
                    <ul class="navbar-nav d-none d-md-block d-lg-none">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white"
                                href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav ms-auto d-flex align-items-center">
                        
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class=" in">
                            <form role="search" class="app-search d-none d-md-block me-3">
                                <input type="text" placeholder="Search..." class="form-control mt-0">
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
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="basic-table.php"
                                aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">Basic Table</span>
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
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="view_Users.php"
                                aria-expanded="false">
                                <i class="fa fa-columns" aria-hidden="true"></i>
                                <span class="hide-menu">Edit Users</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="AddCorusel&Lab.php"
                                aria-expanded="false">
                                <i class="fa fa-columns" aria-hidden="true"></i>
                                <span class="hide-menu">Add Carousel & Lab</span>
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
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Profile page</h4>
                    </div>
                 
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- checking for the input and updating it   -->
            <?php
            if(isset($_POST['update_information_button'])){
                $name=test_input($_POST['name']);
                $org_email=$_SESSION['email'];
                $email=test_input($_POST['email']);
                $phone=test_input($_POST['phone-number']);
                $Query="UPDATE users SET name='$name', email='$email', phonenum='$phone' where email='$org_email' ";
                if($result=$conn->query($Query)){?>
                    <div class="alert  alert-success alert-dismissible " style="width: 50%; margin-left: 20%; margin-top: 2%;" >
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        <strong>All Set!</strong> Profile Updated!
                    </div>
                
                <?php
                $_SESSION['name']=$name;
                $_SESSION['email']=$email;
                $_SESSION['phonenum']=$phone;
                //end of if statement 
                }
                
                else{?>
                
                <div class="alert  alert-danger alert-dismissible mt-5">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" style="width: 50%; margin-left: 20%; margin-top: 2%;"></button>
                    <strong>Error</strong> Something Went Wrong,please check your connection! 
                </div>
                
                <?php
                //end of else statement 
                }
                //end of if statement 
            }

            if(isset($_POST['update_password_button'])){
                $old_password=md5(test_input($_POST['old_password']));
                $new_password=md5(test_input($_POST['new_password']));
                $new_password_repeat=md5(test_input($_POST['new_password_repeat']));
                if($old_password==$_SESSION['password']){
                    if($new_password==$new_password_repeat){
                        // update password 
                        $org_email=$_SESSION['email'];
                        $Query="UPDATE users SET password='$new_password' where email='$org_email' ";
                        if($result=$conn->query($Query)){?>
                            <div class="alert  alert-success alert-dismissible " style="width: 50%; margin-left: 20%; margin-top: 2%;" >
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                <strong>All Set!</strong> Password Updated!
                            </div>
                        
                            <?php
                            $_SESSION['password']=$new_password;
                            //end of if statement 
                            }
                            
                        else{?>
                            
                            <div class="alert  alert-danger alert-dismissible" style="width: 50%; margin-left: 20%; margin-top: 2%;">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" ></button>
                                <strong>Error</strong> Something Went Wrong,please check your connection! 
                            </div>
                            
                            <?php
                            //end of else statement 
                        }

                    }else{?>
                    
                    <div class="alert  alert-danger alert-dismissible " style="width: 50%; margin-left: 20%; margin-top: 2%;">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" > </button>
                    <strong>Mismatch</strong> Please repeat same password correctly  
                    </div>
                    
                    <?php

                    }

                }else{?>
                
                <div class="alert  alert-danger alert-dismissible " style="width: 50%; margin-left: 20%; margin-top: 2%;">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" > </button>
                    <strong>Mismatch</strong> Old password is wrong  
                </div>
                
                <?php

                }

            }
            ?>
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
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-12">
                        <div class="white-box">
                            <div class="user-bg"> <img width="100%" alt="user" src="plugins/images/large/background.jpg">
                                <div class="overlay-box">
                                    <div class="user-content">
                                        <!-- Admin info -->
                                        <a href="javascript:void(0)"><img src="plugins/images/users/user.jpg"
                                                class="thumb-lg img-circle" alt="img"></a>
                                        <h4 class="text-white mt-2"><?php echo $_SESSION['name'] ?></h4>  
                                        <h5 class="text-white mt-2"><?php echo $_SESSION['email'] ?></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material" method="post">
                                    <div class="form-group mb-4">
                                        <!-- put full name  -->
                                        <label class="col-md-12 p-0">Full Name</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="name" value="<?php echo $_SESSION['name'] ?>"
                                                class="form-control p-0 border-0"> </div>
                                    </div>
                                    <!-- put email  -->
                                    <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">Email</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="email" name="email" value="<?php echo $_SESSION['email'] ?>"
                                                class="form-control p-0 border-0" name="example-email"
                                                id="example-email">
                                        </div>
                                    </div>
                                    <!-- put phone number  -->
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Phone No</label>
                                        <div class="col-md-12 border-bottom p-0">
                                        <input type="tel" name="phone-number" id="phone-number" class="input-text" minlength="3"
                                         maxlength="13" pattern="+9[1-9]{2}-[0-9]{3}-[0-9]{4}" value="+966" placeholder="Phone Number"  >
                                        </div>
                                    </div>
                                    <!-- button for submitting  -->
                                    <div class="form-group mb-4">
                                        <div class="col-sm-12" >
                                            <!-- Update Button -->
                                            <input type="submit" name="update_information_button" class="btn btn-success" value="Update Profile">
                                            
                                        </div>
                                    </div>




                                    <!-- old password  -->
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Your Old Password</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="password" name="old_password" class="form-control p-0 border-0">
                                        </div>
                                    </div>
                                    <!-- new password  -->
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">New Password</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="password" name="new_password" class="form-control p-0 border-0">
                                        </div>
                                    </div>
                                    <!-- new password repeat  -->
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Repeat New Password</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="password"  name="new_password_repeat" class="form-control p-0 border-0">
                                        </div>
                                    </div>
                                   
                                    <div class="form-group mb-4">
                                        <div class="col-sm-12" method="post">
                                            <!-- Update Button -->
                                            <button type="submit" name="update_password_button" class="btn btn-success">Update Password</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
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