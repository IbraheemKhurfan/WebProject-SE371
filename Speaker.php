<?php 
include("var.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CDMA2022</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link rel="stylesheet" href="breakLine-Design.css">

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
                    <h1 class="m-0"></i>CDMA<span class="fs-5 text-danger">2022</span></h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <a href="CAMERA-READY.php" class="nav-item nav-link">CameraReady</a>
                    </div>
                    <button class="btn btn-secondary text-light rounded-pill py-2 px-4 ms-3" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">SignUp</button>
                    <button class="btn btn-secondary text-light rounded-pill py-2 px-4 ms-3" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Login</button>
                    <!--=====================SIGNUP FORM START=====================-->
                <div id="id01" class="modal">
                    <form class="modal-content animate" action="indexAdmin.php "  onSubmit="return validate()"  method="post">
                        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                      <div class="container">
                        <h1>Sign Up</h1>
                        <p>Please fill in this form to create an account.</p>
                        <hr>
                        <!-- Name input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="name">Full Name</label>
                            <input type="text" id="name" name="name" class="form-control form-control-lg" placeholder="Full name" pattern="[A-Z , a-z]*" required/>      
                        </div>
                            
                        <!-- Phone input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="name">Phone No</label>
                            <input type="text" id="number" name="phone" class="form-control form-control-lg" minlength="10" maxlength="10" placeholder="Phone No" pattern="[0-9]*" required/>
                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="email">Email address</label>
                            <input type="email" id="email" name="email" class="form-control form-control-lg"
                            placeholder="Enter a valid email address" required/>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <label class="form-label" for="password">Password</label>
                            <input type="password" id="password" name="password" class="form-control form-control-lg" minlength="4" maxlength="42" placeholder="Enter password" required/>
                        </div>
                        
                        <!-- Repeat Password input--> 
                        <div class="form-outline mb-3">
                            <label class="form-label" for="repassword">Confirm Password</label>
                            <input type="password" id="repassword"name="repassword" class="form-control form-control-lg" minlength="4" maxlength="42" placeholder="Confirm your password" required/>
                        </div>
                        
                      <!--  <label>
                          <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                        </label> -->
                  
                        <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
                  
                        <div class="container">
                          <button id="signup_cancel_btn" type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                          <button id="signup_btn" type="submit" class="signupbtn">Sign Up</button>
                        </div>
                      </div>
                    </form>
                  </div>
                <!--=====================SIGNUP FORM END=====================-->


                <!--=====================LOGIN FORM START=====================-->
                <div id="id02" class="modal">
                    <form class="modal-content animate" action="indexAdmin.php " method="post">
                        <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
                      <div class="container">
                        <h1>Login</h1>
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                          <label class="form-label" for="Email">Email address</label>
                          <input type="email" id="email" class="form-control form-control-lg"placeholder="Enter a valid email address" required/>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                          <label class="form-label" for="password">Password</label>
                          <input type="password" id="password" class="form-control form-control-lg" minlength="4" maxlength="42" placeholder="Enter password" required/>
                        </div>
                          
                        <button id="Login_btn" type="submit">Login</button>
                      <!--  <label>
                          <input type="checkbox" checked="checked" name="remember"> Remember me
                        </label> -->
                      </div>
                  
                      <div class="container" style="background-color:#f1f1f1">
                        <button id="login_cancel_btn" type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
                       <!-- <span class="psw">Forgot <a href="#">password?</a></span> -->
                      </div>
                    </form>
                  </div>
                  <!--=====================LOGIN FORM END=====================-->

                </div>
            </nav>

            <div class="container-xxl py-5 bg-primary hero-header mb-5">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated zoomIn">7<sup>TH</sup> INTERNATIONAL CONFERENCE ON
                                DATA SCIENCE AND MACHINE LEARNING APPLICATIONS</h1>
                            <p class="text-white pb-3 animated zoomIn">01-03 March 2022, Prince Sultan University, Riyadh, KSA</p>
                             </div>
                        <div class="col-lg-6 text-center text-lg-start">
                            <img class="img-fluid bg-transparent animated zoomIn " src="img/cdma2022_logo-removebg-preview.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->



        <!-- Guest Speaker part-->
        <br> <br>
        <!--MAIN SPEAKER-->
        <div class="container text-center  " data-wow-delay="0.5s">

           
          <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="position-relative d-inline text-primary ps-4">Speakers</h6>
            <h2 class="mt-2">MAIN GUEST SPEAKER</h2>
        </div>

      <center class="wow zoomIn" data-wow-delay="0.5s">
            <div class="col-lg-3 col-md-12 justify-content-center row">
                <div class="speaker">
                  <img src="img/Speakers/Altuwaijri.jpg" alt="Main Guest Speaker" class="img-fluid " style="height: 300px; width: 200px;">
                  <div class="details">
                    <h3><a href="info-speaker.php">Majid Altwaijri</a></h3>
                    <p>Chief Executive Officer at the National Center for AI (NCAI) and CEO of Strategy Management Office at Saudi Data &amp; AI Authority (SDAIA), Saudi Arabia</p>
                  </div>
                </div>
              </div>
      </center>
        </div>
      
        <br> <br>
        <!--DISTINGUISHED SPEAKERS-->
        <center>
        <div class="container-fluid justify-content-center text-center row ">
          
        <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
          <h6 class="position-relative d-inline text-primary ps-4">Speakers</h6>
          <h2 class="mt-2">DISTINGUISHED SPEAKERS</h2>
      </div>
            <!-- First -->
            <div class="col-lg-3 col-md-2 wow zoomIn " data-wow-delay="0.5s">
                <div class="speaker">
                  <img src="img/Speakers/Gilbert_Strang.jpg" alt="DISTINGUISHED SPEAKERS" class="img-fluid" style="height: 200px; width: 200px;">
                  <div class="details">
                    <h3><a href="info-speaker.php">Gilbert Strang</a></h3>
                    <p>Professor of Mathematics, MIT, Massachsusets, USA</p>
                  </div>
                </div>
              </div>
            <!-- Second -->
            <div class="col-lg-3 col-md-2 wow zoomIn " data-wow-delay="0.5s">
                <div class="speaker">
                  <img src="img/Speakers/yaser_abu_mostafa.jpeg" alt="DISTINGUISHED SPEAKERS" class="img-fluid" style="height: 200px; width: 200px;">
                  <div class="details">
                    <h3><a href="info-speaker.php">Yaser Abu-Mostafa</a></h3>
                    <p>Professor at Caltech, California, USA</p>
                  </div>
                </div>
              </div>
            <!-- third -->
            <div class="col-lg-3 col-md-2 wow zoomIn " data-wow-delay="0.5s">
                <div class="speaker">
                  <img src="img/Speakers/nizar_habash.jpg" alt="DISTINGUISHED SPEAKERS" class="img-fluid" style="height: 200px; width: 200px;">
                  <div class="details">
                    <h3><a href="info-speaker.php">Nizar Habash</a></h3>
                    <p>Professor at NY University in Abu Dhabi, UAE</p>
                  </div>
                </div>
              </div>
            <!-- forth -->
            <div class="col-lg-3 col-md-2 wow zoomIn " data-wow-delay="0.5s">
                <div class="speaker">
                  <img src="img/Speakers/hafiz_malik.jpg" alt="DISTINGUISHED SPEAKERS" class="img-fluid" style="height: 200px; width: 200px;">
                  <div class="details">
                    <h3><a href="info-speaker.php">Hafiz Malik</a></h3>
                    <p>Professor at Michigan University, Dearborn, USA</p>
                  </div>
                </div>
              </div>
            <!-- fifth -->
            <div class="col-lg-3 col-md-2 wow zoomIn " data-wow-delay="0.5s">
                <div class="speaker">
                  <img src="img/Speakers/hassan_sawaf.jpg" alt="DISTINGUISHED SPEAKERS" class="img-fluid" style="height: 200px; width: 200px;">
                  <div class="details">
                    <h3><a href="info-speaker.php">Hassan Sawaf</a></h3>
                    <p>Founder of aiXplain Inc., California, USA</p>
                  </div>
                </div>
              </div> 
            <!-- sixth -->
            <div class="col-lg-3 col-md-2 wow zoomIn " data-wow-delay="0.5s">
                <div class="speaker">
                  <img src="img/Speakers/kareem_darwish.jpg" alt="DISTINGUISHED SPEAKERS" class="img-fluid" style="height: 200px; width: 200px;">
                  <div class="details">
                    <h3><a href="info-speaker.php">Kareem Darwish</a></h3>
                    <p>Principal Scientist at aiXplain, Inc., California, USA</p>
                  </div>
                </div>
              </div>                                         
        </div>
        </center>
        <br> <br>
        <!--Panel Disscussion -->
        <div class="container-fluid text-center ">
          

          

          <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="position-relative d-inline text-primary ps-4">Speakers</h6>
            <h2 class="mt-2">PANEL DISCUSSIONS</h2>
            <p>Two important panel discussions with honorable experts</p>
            <p>1) Artificial Intelligence: Potentials, Challenges and Ethics</p>
            <p>2) Enabling Education and Research in Artificial Intelligence: Reality vs. Hypes</p>
            
        </div>

            <center>
            <div class="col-lg-4 col-md-6 wow zoomIn " data-wow-delay="0.5s" >
                <div class="speaker wow zoomIn " data-wow-delay="0.5s">
                <img src="img/Speakers/pd1.jpeg" alt="Panel Discussions" class="img-fluid " style="height: 200px; width: 275px; ">
                  <div class="details">
                    <h3><a href="PS.php">Panel Discussions</a></h3>
                   
                  </div>
                </div>
              </div></center>
        </div>
        <br> <br> <br> <br>
        <!-- TUTORIAL SESSION -->
       <div class="container">
        <div class="container-fluid text-center justify-content-center row ">
      

       
        <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
          <h6 class="position-relative d-inline text-primary ps-4">Speakers</h6>
          <h2 class="mt-2">TUTORIAL SESSION</h2>
          <p>Tutorial sessions will be held on <strong style="color: red;">Tuesday 1st of March 2022</strong></p>
      </div>
        </div>
           
           <div class="container-fluid text-center justify-content-center row " >
               <!-- First -->
            <div class="col-lg-3 col-md-2 wow zoomIn " data-wow-delay="0.5s">
              <div class="speaker">
                <img src="img/Speakers/issam.png" alt="DISTINGUISHED SPEAKERS" class="img-fluid" style="height: 200px; width: 200px;">
                <div class="details">
                  <h3><a href="info-speaker.php">Issam Laradji</a></h3>
                  <p>Research Scientist at ServiceNow Company, Vancouver, Canada</p>
                </div>
              </div>
            </div>
          <!-- Second -->
          <div class="col-lg-3 col-md-2 wow zoomIn " data-wow-delay="0.5s">
              <div class="speaker">
                <img src="img/Speakers/Lahouari_Ghouti.jpg" alt="DISTINGUISHED SPEAKERS" class="img-fluid" style="height: 200px; width: 150px;">
                <div class="details">
                  <h3><a href="info-speaker.php">Lahouari Ghouti</a></h3>
                  <p>Associate Professor of Computer Science. Prince Sultan University. Riyadh, Saudi Arabia</p>
                </div>
              </div>
            </div>       
          </div>
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