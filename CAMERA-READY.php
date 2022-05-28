<?php 
//include("var.php");
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CDMA2022</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">


    
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <?php $name="CDMA" ?>
                    <h1 class="m-0"></i>CDMA<span class="fs-5 text-danger">2022</span></h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="index.php" class="nav-item nav-link ">Home</a>
                        <a href="index.php #about" class="nav-item nav-link">About</a>
                        <a href="#Sponsors" class="nav-item nav-link">Sponsors</a>
                        <a href="Speaker.php" class="nav-item nav-link">Speakers</a>
                        <a href="#program" class="nav-item nav-link">Program</a>
                        <a href="#committees" class="nav-item nav-link">Committees</a>
                        <a href="CAMERA-READY.php" class="nav-item nav-link">CameraReady</a>
                        <a href="#venue" class="nav-item nav-link">Venue</a>
                        <a href="#hotels" class="nav-item nav-link">Hotels</a>
                        <a href="#F.A.Qs" class="nav-item nav-link">F.A.Q's</a>
                        <?php
                           if(isset($_SESSION['LogIn'])){?>
                    
                            <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"><?php echo $_SESSION['name'] ?></a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="settings_redirector.php">Settings</a></li>
                                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                                    </ul>
                              </li>
                              <?php }?>
                       </div>
                       <?php
                     if(!isset($_SESSION['LogIn'])){?>            
                    <button class="btn btn-secondary text-light rounded-pill py-2 px-4 ms-3" onclick="window.open('SignUp.php','_self');" style="width:auto;">SignUp</button>
                    <button class="btn btn-secondary text-light rounded-pill py-2 px-4 ms-3"onclick="window.open('Login.php','_self');" style="width:auto;">Login</button>  
                    <?php }?>                  
                </div>
            </nav>

            <div class="container-xxl py-5 bg-primary hero-header mb-5">

            <!-- Checking for registration  -->
            <?php

                if(isset($_POST['Register'])){
                //checking passwords are registration
                if(isset($_SESSION['LogIn'])){
                    if($_SESSION['registration']!='1'){
                        $email=$_SESSION['email'];
                        $Query="UPDATE users SET registration ='1' where email='$email' ";
                        $result=$conn->query($Query);
                        $_SESSION['registration']='1';?>
                        <div class="alert  alert-success alert-dismissible mt-5">
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            <strong>All Set!</strong> You are have been registered successfully to CDMA 2022
                        </div>
                        <?php
                    }else{?>
                        <div class="alert  alert-danger alert-dismissible mt-5">
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            <strong>Error</strong> You are already register in the evnt
                        </div>
                <?php 
                    //else closing
                    }
                    }
                    else{
                        header('Location:LogIn.php');
                    }
                }
                
                ?>
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated zoomIn">7<sup>TH</sup> INTERNATIONAL CONFERENCE ON
                                DATA SCIENCE AND MACHINE LEARNING APPLICATIONS</h1>
                            <p class="text-white pb-3 animated zoomIn">01-03 March 2022, Prince Sultan University, Riyadh, KSA</p>
                            <a href="#registration" class="btn btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Register</a>
                            <a href="#Contact Us" class="btn btn-outline-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Contact Us</a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-start">
                            <img class="img-fluid bg-transparent animated zoomIn " src="img/cdma2022_logo-removebg-preview.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->
        <!-- Camera Ready Start  -->
        
        
        <div class="container">
            
            <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="position-relative d-inline text-primary ps-4">Camera Ready Submission</h6>
                <h2 class="mt-2">Submission Details.</h2>
            </div>
            <div class="row">
                <div class="float-start ps-5 col-md-8 wow zoomIn" data-wow-delay="0.5s">
                    <h4 style="color: darkblue;">Camera Ready</h4> 
                    <p>All accepted papers need to be prepared in accordance with the IEEE Conference Template. Please follow the steps to complete your camera-ready submission.</p>
                    <p> For your paper to be indexed in IEEExplore, you need to proceed with:</p>
                <ol>
                    <li>PDF-Express compatible pdf file of the camera-ready paper</li>
                    <li>Signing the electronic Copyright Form.</li>
                </ol>
                    <p>To complete this, please create an account with IEEE CPS and follow the submission guidelines available here:</p>
                    <a href="https://ieeecps.org/#!/auth/login?ak=1&pid=4e9CBRd8p5K1wvr8zatUCd" target="_blank"><strong style="color: red;">Camera Ready submission link</strong> </a> 
                </div>
    
            <div class="float-start ps-5 col-md-4 wow zoomIn" data-wow-delay="0.5s">
                    <h4 style="color: darkblue;">Indexing</h4> 
                    <p>All accepted papers will be included in the proceedings of the conference. The proceedings would be submitted to IEEE Xplore and is expected to be published and indexed by EI.</p>
    
                <h4 style="color: darkblue;">Important Dates</h4> 
                <p>Camera Ready: <strong style="color: darkblue;"> January 20, 2022.</strong> <br>
                Conference Program: <strong style="color: darkblue;">  February 20, 2022.</strong> <br>
                Conference Dates:  <strong style="color: darkblue;"> March 1-3, 2022.</strong></p>
            </div>
    
    
    
    
      <!-- Footer Start -->
      <div class="container-fluid bg-primary text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
            
            
        <div class=" col-md-3 ps-5">
            <img class="img-fluid bg-transparent rounded " src="img/cdma2022_logo-removebg-preview.png" alt="CDMA2022" style="height: 100px; width: 300px;"> 
        </div>
        <div class="container py-5 px-lg-5">
            <div class="row g-5">
                <div class="col-md-6 ">
                   <p style="font-size: small;">
                    CDMA2022 offers a unique opprtunity and exchange platform to academic researchers and industry experts from a wide range of Data Science and Machine Learning areas including, but not restricted to, data analytics, computational intelligence, deep learning, pattern recognition, computer vision, multimedia/intelligent databases, big data, visualization, and related ethical issues. 
                    The Conference provides a well-established network for technical collaboration among data science and machine learning researchers, industry experts and practitioners in Saudi Arabia and abroad. Acceptance will be based primarily on originality, significance and quality of contribution.
                     All submissions with undergo a blind peer review process before acceptance and possible inclusion in the proceedings of the conference.  
                   </p>
                   
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href="https://twitter.com/PSU_RUH"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.youtube.com/user/PSUofficial"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/psu_ruh/"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.linkedin.com/school/prince-sultan-university/mycompany/"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <h5 class="text-white mb-4">USEFUL LINKS</h5>
                    <a class="btn btn-link" href="#registration" style="font-size: small;"> Register for CDMA2022</a>
                    <a class="btn btn-link" href="#about" style="font-size: small;"> About us</a>
                </div>
                <div class="col-md-3 ">
                    <h5 class="text-white mb-4">CONTACT US</h5>
                    <a class="btn btn-link" href="https://goo.gl/maps/PmFYR1dbztPTByTH8" target="_blank" style="font-size: small;">P.O.Box No.66833 Rafha Street</a>
                    <a class="btn btn-link" href="" style="font-size: small;">Riyadh 11586</a>
                    <a class="btn btn-link" href="" style="font-size: small;">Saudi Arabia</a>
                    <a class="btn btn-link" href="tel:+966114948000" style="font-size: small;">Phone: +966114948000</a>
                    <a class="btn btn-link" href = "mailto: cdma2022@psu.edu.sa" style="font-size: small;">Email: cdma2022@psu.edu.sa</a>
                </div>
            
         
            </div>
        </div>
        <div class="container px-lg-5">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Copyright CDMA2022 - PSU.</a>, All Right Reserved. 	
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="index.php">Home</a>
                            <a href="#F.A.Qs">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 </div>
<!-- Footer End -->
    
                <!-- Back to Top -->
                <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>
            </div>
        </div>
        <!-- Camera Ready End  -->
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>