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

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="fontawesome-free-6.1.1-web/css/all.min.css" rel="stylesheet">
    

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
                        <a href="indexUser.php" class="nav-item nav-link ">Home</a>
                        <a href="#about" class="nav-item nav-link">About</a>
                        <a href="#Sponsors" class="nav-item nav-link">Sponsors</a>
                        <a href="SpeakerUser.php" class="nav-item nav-link">Speakers</a>
                        <a href="#program" class="nav-item nav-link">Program</a>
                        <a href="#committees" class="nav-item nav-link">Committees</a>
                        <a href="CAMERA-READYUser.php" class="nav-item nav-link">CameraReady</a>
                        <a href="#venue" class="nav-item nav-link">Venue</a>
                        <a href="#hotels" class="nav-item nav-link">Hotels</a>
                        <a href="#F.A.Qs" class="nav-item nav-link">F.A.Q's</a>
                    </div>
                    <!-- Buttons -->
<!--                   <button class="btn btn-secondary text-light rounded-pill py-2 px-4 ms-3" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">SignUp</button> -->
<!--                   <button class="btn btn-secondary text-light rounded-pill py-2 px-4 ms-3" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Login</button>  -->                    <!--=====================SIGNUP FORM START=====================-->
                    <div class="col-sm-1 text-center text-lg-start">
                        <img id="avatar" class="img-fluid rounded-circle bg-transparent animated zoomIn" src="img/avatar.jpg" alt="">
                    </div>
                    <div class="col-sm-3 text-left text-lg-start text-white">
                        <p> Welcome Dear   <?php echo $name1 ?> </p>
                    </div>   
                </div>
            </nav>

            <div class="container-xxl py-5 bg-primary hero-header mb-5">
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


        <!-- Full Screen Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content" style="background: rgba(29, 29, 39, 0.7);">
                    <div class="modal-header border-0">
                        <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center justify-content-center">
                        <div class="input-group" style="max-width: 600px;">
                            <input type="text" class="form-control bg-transparent border-light p-3" placeholder="Type search keyword">
                            <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Full Screen Search End -->


        <!-- About Start -->
        <div class="container-xxl py-5" id="about">
            <div class="container px-lg-5">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="section-title position-relative mb-4 pb-2">
                            <h6 class="position-relative text-primary ps-4">About the Conference</h6>
                            <h5 class="mt-2 text-start justify-content-start"><span class="text-danger">CDMA 2022</span> offers a unique opportunity and exchange platform to academic researchers and industry experts 
                                from a wide range of Data Science and Machine Learning areas including, but not restricted to, data analytics, computational intelligence, 
                                deep learning, pattern recognition, computer vision, multimedia/intelligent databases, big data, visualization, and related ethical issues.</h5>
                        </div>
                        <div class="row">
                            <p class="mb-4 col-lg-6"><i class="fa fa-location-arrow text-primary me-2"></i>WHERE</p>
                            <p class="mb-4 col-lg-6"><i class="fa fa-calendar text-primary me-2"></i>WHEN</p>
                            <p class="mb-4 col-lg-6">Prince Sultan University, Riyadh, Saudi Arabia</p>
                            <p class="mb-4 col-lg-6">Tuesday - Thursday
                                1st - 3rd March, 2022</p>
                        </div>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Topics of Interest</h6>
                                <ul >
                                    <li>Big Data</li>
                                    <li>Data Science</li>
                                    <li>Data Analytics</li>
                                </ul>
                                
                            </div>
                            <div class="col-sm-6">
                                <h6 class="mb-3"><i class="fa fa-calendar text-primary me-2"></i>Important Dates</h6>
                                <ul >
                                    <li>Paper submission deadline: <del>November 1, 2021</del> (extended to): November 30, 2021.</li>
                                    <li>Paper notification: December 31, 2021.</li>
                                    <li>Camera Ready: January 20, 2022.</li>
                                    <li>Program: February 20, 2022.</li>
                                    <li>Conference Dates: March 01-03, 2022</li>
                                </ul>
                            </div>
                        </div>
                       
                        
                       
                        
                       
                    </div>
                    <div class="col-lg-6 img-fluid wow zoomIn " data-wow-delay="0.5s" >
                        <!-- <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="img/GroupPhoto.jpeg"> -->

                        <!-- Carousel -->
                        <div id="about-carousel" class="carousel slide" data-bs-ride="carousel">

                            <!-- Indicators/dots -->
                            <div class="carousel-indicators">
                            <button type="button" data-bs-target="#about-carousel" data-bs-slide-to="0" class="active"></button>
                            <button type="button" data-bs-target="#about-carousel" data-bs-slide-to="1"></button>
                            <button type="button" data-bs-target="#about-carousel" data-bs-slide-to="2"></button>
                            </div>
                        
                            <!-- The slideshow/carousel -->
                            <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img  src="img/GroupPhoto.jpeg" alt="GroupPhoto" class="d-block w-100 " style="height: 400px; border-radius: 50px 20px;">
                            </div>
                            <div class="carousel-item">
                                <img  src="img/Auditorium-3.jpg" alt="Auditorium-1" class="d-block w-100 " style="height: 400px; border-radius: 50px 20px;">
                            </div>
                            <div class="carousel-item">
                                <img  src="img/Auditorium-2.jpg" alt="Auditorium-2" class="d-block w-100 " style="height: 400px; border-radius: 50px 20px;">
                            </div>
                            </div>
                        
                            <!-- Left and right controls/icons -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#about-carousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#about-carousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                            </button>
                        </div>
                        
                    </div>
                </div>
            </div>
            
        </div>
        <!-- About End -->

        <!-- Sponsors Start  -->
        <div class="container-xxl py-5" id="Sponsors">
            <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="position-relative d-inline text-primary ps-4">Parties Involved</h6>
                <h2 class="mt-2">Sponsors</h2>
            </div>
            <div class=" d-flex align-items-center mt-4 " >
                <img width="150" height="100" class="img-fluid wow zoomIn    p-2" data-wow-delay="0.5s" src="img/Ministry-of-education.png">
                <img width="150" height="100"  class="img-fluid wow zoomIn   p-2" data-wow-delay="0.5s" src="img/psu-logo-lightbg.png">
                <img width="150" height="100"  class="img-fluid wow zoomIn   p-2" data-wow-delay="0.5s" src="img/CCIS.png">
                <img width="150" height="100"  class="img-fluid wow zoomIn   p-2" data-wow-delay="0.5s" src="img/riclogo.png">
                <img width="150" height="100"  class="img-fluid wow zoomIn   p-2" data-wow-delay="0.5s" src="img/IEEE-KSA.png">
                <img width="150" height="100"  class="img-fluid wow zoomIn   p-2" data-wow-delay="0.5s" src="img/IEEE-region.png">
                <img width="150" height="100"  class="img-fluid wow zoomIn   p-2" data-wow-delay="0.5s" src="img/IEEE.png">
                <img width="150" height="100"  class="img-fluid wow zoomIn   p-2" data-wow-delay="0.5s" src="img/cps.png">
            </div>
            <div class="wow zoomIn ms-5 me-5 text-center" data-wow-delay="0.5s">
                <h6>The 7th CDMA 2022 is technnically 
                    co-sponsored by IEEE Region 8, IEEE Saudi Arabia Section and IEEE SA Section Computer Chapter with IEEE MCE record #54072. 
                    <br>All accepted papers will be included in the proceedings of the conference and would be 
                    submitted to IEEE CPS and indexed in IEEE Explore Digital Library.</h6>
            </div>
        </div>
        <!-- Sponsors End  -->

        <!--=====================PROGRAM START=====================-->
        <div id="program" class="container-fluid py-3 bg-white mb-3">
            <div class="container-fluid my-3 py-3 px-lg-3 p-3">
                <div class="row g-3 py-3">
                    <div class="col-12 text-center">
                        <div class="container px-lg-5">
                            <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                                <h6 class="position-relative d-inline text-primary ps-4">CDMA2022</h6>
                                <h2 class="mt-2">CDMA2022 PROGRAM</h2>
                            </div>
                        <a href="CDMA2022_Program.pdf" target="_blank"> <button id="Program-btn" type="button" class="btn btn-primary btn-lg rounded-pill wow fadeInUp" data-wow-delay="0.5s"> CDMA Program </button> </a>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!--=====================PROGRAM END=====================-->

        
       <!--=====================COMMITTEES START=====================-->
       <div id="committees" class="container-fluid bg-light mb-5 ">
        <div class="container-fluid px-lg-5 p-3">
            <div class="row g-5 ">
                <div class="col-12 text-center">
                    
                    <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class="position-relative d-inline text-primary ps-4">People Involved</h6>
                        <h2 class="mt-2">COMMITTEES</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 text-lg-start wow fadeInUp" data-wow-delay="0.2s">
                            <h4 id="C_Technical " >Technical Program Committee</h4>
                            <br><br>
                            <p class="text-dark wow fadeInUp" data-wow-delay="0.5s">
                                Aafaque Khan, University of Toronto, Canada  <br>
                                AbdulKarim Doufene, Massachusetts Institute of Technology, USA <br>
                                Abdulrahman Abu Elkhail, Michigan University at Dearborn, USA <br>
                                Adel Ammar, Prince Sultan University, Saudi Arabia <br>
                                Ahmad Taher Azar, Prince Sultan University, Saudi Arabia  <br>
                                Ahmed Reda Mahlous, Prince Sultan University, Saudi Arabia  <br>
                                Alam Noor, Polytechnic of Porto, Portugal <br>
                                Alexander Gelbukh, Instituto Politécnico Nacional, Mexico <br>
                                Ali Hassani, Michigan University at Dearborn, USA <br>
                                Ali Javed, Taxila University, Pakistan <br>
                                Alireza Mohammadi, Michigan University at Dearborn, USA <br>
                                Amjad Rehman, Prince Sultan University, Saudi Arabia  <br>
                                Anis Koubaa, Prince Sultan University, Saudi Arabia  <br>
                                Atif Shah, Oulu University, Finland <br>
                                Aun Irtaza, Taxila University, Pakistan <br>
                                Azzedine Zerguine, King Fahd University of Petroleum and Minerals, Saudi Arabia <br>
                                Basit Qureshi, Prince Sultan University, Saudi Arabia  <br>
                                Bilel Benjdira, Prince Sultan University, Saudi Arabia  <br>
                                Fahad Alruwaili, Shaqra University, Saudi Arabia  <br>
                                Faisal Nawab, University of California at Irvine, USA<br>
                                Fatos Xhafa, Technical University of Catalonia, Spain <br>
                                Fikret Gurgen, BoGhazi Univesrity, Turkey <br>
                                Francesco Folino, ICAR-CNR, Italy <br>
                                Galal Bin Makhashen, KFUPM, Saudi Arabia  <br>
                                Hafiz Malik, University of Michigan-Dearborn, USA <br>
                                Hamdi Aljamimi, King Fahd University of Petroleum and Minerals, Saudi Arabia <br>
                                Hammad Dilpazir, Michigan University at Dearborn, USA <br>
                                Hamzah Luqman, KFUPM, Saudi Arabia  <br>
                                Hashim Ali, Michigan University at Dearborn, USA <br>
                                Hassan Abbas, King Saud University, Saudi Arabia  <br>
                                Imad Rida, Compiegne University, France <br>
                                Imane Boudellioua, King Fahd University of Petroleum and Minerals, Saudi Arabia <br>
                                Ingrid Fischer, University of Konstanz, Germany <br>
                                Iqbal H. Sarker, International AIQT Foundation, Switzerland <br>
                                Irfan Ahmad, KFUPM, Saudi Arabia  <br>
                                Issam H. Laradji, ServiceNow Inc., Canada <br>
                                Junaid Farooq, Michigan University at Dearborn, USA <br>
                                Khaled Alotaibi, King Fahd University of Petroleum and Minerals, Saudi Arabia <br>
                                Khalid Mahmood, Oaklan University, USA
                                Lahouari Ghouti, Prince Sultan University, Saudi Arabia  <br>
                                Liyakathunisa Syed, Taibah University, Saudi Arabia  <br>
                                Louai Al-Awami, King Fahd University of Petroleum and Minerals, Saudi Arabia <br>
                                Majed Aljefri, LearningBranch Inc., Canada <br>
                                Mashaan Alshammari, University of Hail, Saudi Arabia <br>
                                Moataz Ahmed, King Fahd University of Petroleum and Minerals, Saudi Arabia <br>
                                Moayad Alnammi, King Fahd University of Petroleum and Minerals, Saudi Arabia <br>
                                Mohamed Al-Affendi, Prince Sultan University, Saudi Arabia  <br>
                                Mohamed Alkanhal, Prince Sultan University, Saudi Arabia  <br>
                                Mohamed Deriche, King Fahd University of Petroleum and Minerals, Saudi Arabia <br>
                                Mohamed Elbadrashiny, Aixplain Inc., USA <br>
                                Mohamed-Chaker Larabi: Université de Poitiers, France  <br>
                                Mohamed-Rafik Bouguelia, Halmstad University, Sweden. <br>
                                Muazzam Siddiqui, King Abdulaziz University, Saudi Arabia <br>
                                Muhamad Felemban, King Fahd University of Petroleum and Minerals, Saudi Arabia <br>
                                Muhammad Imam, King Fahd University of Petroleum and Minerals, Saudi Arabia <br>
                                Muna Al-Razgan, King Saud University, Saudi Arabia  <br>
                                Nada Lachtar, Michigan University at Dearborn, USA <br>
                                Panos Kalnis, King Abdullah University of Science and Technology, Saudi Arabia  <br>
                                Paul Watta, Michigan University at Dearborn, USA <br>
                                Pedro Henriques Abreu, FCTUC-DEI/CISUC, Portugal <br>
                                Rabeah Alzaidy, King Fahd University of Petroleum and Minerals, Saudi Arabia <br>
                                Raed Seetan, Slippery Rock University of Pennsylvania, USA <br>
                                Rafi Ud Daula Refat, Michigan University at Dearborn, USA <br>
                                Raghavendar Raghu Changalvala, Michigan University at Dearborn, USA <br>
                                Rami S. Alkhawaldeh, University of Jordan, Jordan <br>
                                Rehman Khan, Prince Sultan University, Saudi Arabia  <br>
                                Samir Rawashdeh, Michigan University at Dearborn, USA <br>
                                Sarab Almuhaideb, King Saud University, Saudi Arabia <br>
                                Sergio A Velastin, Universidad Carlos III de Madrid, Spain <br>
                                Tanzila Saba, Prince Sultan University, Saudi Arabia  <br>
                                Turgay Celik, University of the Witwatersand, South Africa <br>
                                Usman Naseem, Sydney University, Australia <br>
                                Uthman Baroudi, KFUPM, Saudi Arabia  <br>
                                Wadii Boulila, Prince Sultan University, Saudi Arabia  <br>
                                Yacine Rebahi, Fraunhofer Fokus, Germany <br>
                                Yousef Elarian, Cambrian College, Canada <br>
                                Zahid Khan, Prince Sultan University, Saudi Arabia  <br>
                                Zaid El-Shair, Michigan University at Dearborn, USA <br>
                            </p>
                        </div>
              
                        <div class="col-lg-4 text-lg-start wow fadeInUp" data-wow-delay="0.2s">
                          <h4 id="C_Chairs">Conference Chairs</h4>
                          <br>
                    <p class="text-dark wow fadeInUp" data-wow-delay="0.5s"> 
                        <b>Steering Committee Chair:</b><br> Mohamed Alkanhal<br>
                        <b>General Chair:</b><br> Lahouari Ghouti<br>
                        <b>Program Co-Chairs:</b><br> Hafiz Malik, University of Michigan-Dearborn, USA and Tanzila Saba, Prince Sultan University, Saudi Arabia<br>
                        <b>Publication Chair:</b><br> Basit Qureshi<br>
                        <b>Panel Chair:</b><br> Sakhar Alkhereyf<br>
                        <b>Keynotes Chair:</b><br> Mohamed Tounsi<br>
                        <b>IEEE Liaison Committee Chair:</b><br> Mohamed Almuhaini<br>
                        <b>Publicity Chair:</b><br> Yasir Javed<br>
                        <b>Local Arrangements Chair:</b><br> Suliman Jaber<br>
                        <b>Local Arrangements Assistant 1:</b><br> Mr. Majed Sagr<br>
                        <b>Local Arrangements Assistant 2:</b><br> Mr. Saud Alhamami<br>
                        <b>Sponsors and Treasurer:</b><br> Mohamed Alkanhal <br>
                        <b>Tutorials/Demos/Posters Chair:</b><br> Mohammad Zarour<br>
                        <b>Travel and Visa arrangements:</b><br> Abdullah Al Hashel
                    </p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
         </div>
      <!--=====================COMMITTEES END=====================-->

      <!-- Venue Start  -->
      <style>
    
        *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }
    ::selection{
      color: #fff;
      background: #007bff;
    }
    body{
      padding: 5px;
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 50vh;
    }
    .wrapper{
      max-width: 1320px;
    }
    .gallery{
      display: flex;
      flex-wrap: wrap;
    }
    .gallery .image{
      padding: 2px;
      width: calc(100% / 3);
    }
    .gallery .image span{
      display: flex;
      width: 100%;
      overflow: hidden;
    }
    .gallery .image img{
      width: 100%;
      vertical-align: middle;
      transition: all 0.3s ease;
    }
    .gallery .image:hover img{
      transform: scale(1.1);
    }
    .preview-box{
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%) scale(0.9);
      background: #fff;
      max-width: 700px;
      width: 100%;
      z-index: 5;
      opacity: 0;
      pointer-events: none;
      border-radius: 3px;
      padding: 0 5px 5px 5px;
      box-shadow: 0px 0px 15px rgba(0,0,0,0.2);
    }
    .preview-box.show{
      opacity: 1;
      pointer-events: auto;
      transform: translate(-50%, -50%) scale(1);
      transition: all 0.3s ease;
    }
    .preview-box .details{
      display: flex;
      align-items: center;
      padding: 12px 15px 12px 10px;
      justify-content: space-between;
    }
    .preview-box .details .title{
      display: flex;
      font-size: 18px;
      font-weight: 400;
    }
    .details .title p{
      margin: 0 5px;
    }
    .details .title p.current-img{
      font-weight: 500;
    }
    .details .icon{
      color: #007bff;
      font-size: 20px;
      cursor: pointer;
    }
    .preview-box .image-box{
      display: flex;
      width: 100%;
      position: relative;
    }
    .image-box .slide{
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      color: #fff;
      font-size: 30px;
      cursor: pointer;
      height: 50px;
      width: 60px;
      line-height: 50px;
      text-align: center;
      border-radius: 3px;
    }
    .slide.prev{
      left: 0px;
    }
    .slide.next{
      right: 0px;
    }
    .image-box img{
      width: 100%;
      border-radius: 0 0 3px 3px;
    }
    .shadow{
      position: fixed;
      top: 0;
      left: 0;
      height: 100%;
      width: 100%;
      z-index: 2;
      display: none;
      background: rgba(0,0,0,0.45);
    }
    @media(max-width: 1000px){
      .gallery .image{
        width: calc(100% / 2);
      }
    }
    @media(max-width: 600px){
      .gallery .image{
        width: 100%;
        padding: 4px;
      }
    }
        .section-header::before {
        content: '';
        position: absolute;
        display: block;
        width: 60px;
        height: 5px;
        background: #f82249;
        bottom: -40px;
        left: calc(50% - 25px);
    }
    *, ::after, ::before {
        box-sizing: border-box;
    }
       .venue-info {
        background: url(venue-info-bg.jpg) top center no-repeat;
        background-size: cover;
        position: relative;
        padding-top: 0px;
        padding-bottom: 0px;
           height: 250px;
    }
            #venue .venue-gallery-container {
        padding-right: 12px;
    }
      
    
    #venue .container-fluid {
        margin-bottom: 3px;
    }
    .container-fluid {
        width: 100%;
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
    }
            
            .fadeInUp {
        animation-name: fadeInUp;
    }
            
            
     
        </style>
      <div id="venue" class="container-xxl py-5 bg-white mb-5 wow fadeInUp" data-wow-delay="0.5s">
        <div class="container-fluied my-5 py-5 px-lg-5">
            <div class="row no-gutters">
                <div class="col-12 text-center">
                    <h2 class="section-header text-black animated zoomIn"> Event Venue</h2>
                    <p>Event venue location info and gallery</p>
                    <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                    
                    <div class="row no-gutters">
  <div class="col-lg-6 venue-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3623.7315764619693!2d46.699132215443264!3d24.736093956321685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f0292c1fb5529%3A0x3fbc5cb308e60dd8!2sPrince%20Sultan%20University!5e0!3m2!1sen!2ssa!4v1575956945982!5m2!1sen!2ssa" width="650" height="250"   allowfullscreen=""></iframe>
  </div>

  <div class="col-lg-6 venue-info text-center">
    <div class="row justify-content-center ">
      <div class="col-11 col-lg-8">
        <h3 class="text-center text-Black">Prince Sultan University, Riyadh, Saudi Arabia</h3>
        <p class="text-center text-white">Conference will be held at PSU premises.</p>
      </div>
    </div>
  </div>
         
                        
                       <div class="wrapper">
<div class="gallery">
<div class="image"><span><img src="img/Venue/1.jpg" alt=""></span></div>
<div class="image"><span><img src="img/Venue/2.jpg" alt=""></span></div>
<div class="image"><span><img src="img/Venue/3.jpg" alt=""></span></div>
<div class="image"><span><img src="img/Venue/4.jpg" alt=""></span></div>
<div class="image"><span><img src="img/Venue/5.jpg" alt=""></span></div>
<div class="image"><span><img src="img/Venue/6.jpg" alt=""></span></div>

</div>
</div>
<div class="preview-box">
<div class="details">
<span class="title">Image <p class="current-img"></p> of <p class="total-img"></p></span>
<span class="icon fas fa-times"></span>
</div>
<div class="image-box">
<div class="slide prev"><i class="fas fa-angle-left"></i></div>
<div class="slide next"><i class="fas fa-angle-right"></i></div>
<img src="" alt="">
</div>
</div>
<div class="shadow"></div>
<script>//getting all required elements
const gallery  = document.querySelectorAll(".image"),
previewBox = document.querySelector(".preview-box"),
previewImg = previewBox.querySelector("img"),
closeIcon = previewBox.querySelector(".icon"),
currentImg = previewBox.querySelector(".current-img"),
totalImg = previewBox.querySelector(".total-img"),
shadow = document.querySelector(".shadow");
window.onload = ()=>{
for (let i = 0; i < gallery.length; i++) {
totalImg.textContent = gallery.length; //passing total img length to totalImg variable
let newIndex = i; //passing i value to newIndex variable
let clickedImgIndex; //creating new variable

gallery[i].onclick = () =>{
    clickedImgIndex = i; //passing cliked image index to created variable (clickedImgIndex)
    function preview(){
        currentImg.textContent = newIndex + 1; //passing current img index to currentImg varible with adding +1
        let imageURL = gallery[newIndex].querySelector("img").src; //getting user clicked img url
        previewImg.src = imageURL; //passing user clicked img url in previewImg src
    }
    preview(); //calling above function

    const prevBtn = document.querySelector(".prev");
    const nextBtn = document.querySelector(".next");
    if(newIndex == 0){ //if index value is equal to 0 then hide prevBtn
        prevBtn.style.display = "none"; 
    }
    if(newIndex >= gallery.length - 1){ //if index value is greater and equal to gallery length by -1 then hide nextBtn
        nextBtn.style.display = "none"; 
    }
    prevBtn.onclick = ()=>{ 
        newIndex--; //decrement index
        if(newIndex == 0){
            preview(); 
            prevBtn.style.display = "none"; 
        }else{
            preview();
            nextBtn.style.display = "block";
        } 
    }
    nextBtn.onclick = ()=>{ 
        newIndex++; //increment index
        if(newIndex >= gallery.length - 1){
            preview(); 
            nextBtn.style.display = "none";
        }else{
            preview(); 
            prevBtn.style.display = "block";
        }
    }
    document.querySelector("body").style.overflow = "hidden";
    previewBox.classList.add("show"); 
    shadow.style.display = "block"; 
    closeIcon.onclick = ()=>{
        newIndex = clickedImgIndex; //assigning user first clicked img index to newIndex
        prevBtn.style.display = "block"; 
        nextBtn.style.display = "block";
        previewBox.classList.remove("show");
        shadow.style.display = "none";
        document.querySelector("body").style.overflow = "scroll";
    }
}

} 
}</script>                          
                        
  
                    
                </div>
            </div>
        </div>
    </div>
        </div>
      <!-- Venue End  -->


        <!-- Newsletter Start -->
        <div class="container-xxl py-5">
            <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="position-relative d-inline text-primary ps-4">Keep Your Slef Updated</h6>
                <h2 class="mt-2">Subscribe to CDMA2022 PROGRAM Newsletter</h2>
            </div>
            <div class="container-xxl bg-primary newsletter my-5 wow fadeInUp" data-wow-delay="0.1s">
                
                <div class="container px-lg-5">
                    <div class="row align-items-center" style="height: 250px;">
                        <div class="col-12 col-md-6">
                            <h3 class="text-white">Subscribe to Our Newsletter</h3>
                            <small class="text-white">CDMA2022</small>
                            <div class="position-relative w-100 mt-3">
                                <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Enter Your Email" style="height: 48px;">
                                <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane pt-2 text-primary fs-4"></i></button>
                            </div>
                        </div>
                        <div class="col-md-6 text-center mb-n5 d-none d-md-block">
                            <img class="img-fluid mt-5" style="height: 250px;" src="img/newsletter.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter End -->


        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="position-relative d-inline text-primary ps-4">Our Labs</h6>
                    <h2 class="mt-2">Prince Sultan University Labs</h2>
                </div>
                <div class="row g-4">
                    <!-- Security Engineering Lab  -->
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <img src="img/Labs/sel-removebg-preview.png" alt="SEL LAB">
                            </div>
                            <h5 class="mb-3">Security Engineering Lab</h5>
                            <p>A research lab at Prince Sultan University. Aims to contribute significantly to providing educational, research, outreach, and partnering security services nationally and internationally.</p>
                            <a class="btn px-3 mt-auto mx-auto" href="https://ric.psu.edu.sa/sel-lab.php">Read More</a>
                        </div>
                    </div>
                    <!-- Artificial Intelligence And Data Analytics Lab  -->
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <img src="img/Labs/aida-lab_1630216442-removebg-preview.png" alt="AIDA LAB">
                            </div>
                            <h5 class="mb-3">Artificial Intelligence And Data Analytics Lab</h5>
                            <p>First Interdisciplinary & Multidisciplinary Research Lab at Prince Sultan University,Riyadh,KSA</p>
                            <a class="btn px-3 mt-auto mx-auto" href="https://ric.psu.edu.sa/aida-lab.php">Read More</a>
                        </div>
                    </div>
                    <!-- EMERGING INTELLIGENT AUTONOMOUS SYSTEMS LAB  -->
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <img src="img/Labs/eias-lab_1630216559-removebg-preview.png" alt="EIAS LAB">
                            </div>
                            <h5 class="mb-3">EMERGING INTELLIGENT AUTONOMOUS SYSTEMS LAB</h5>
                            <p>A research lab at Prince Sultan University. Areas of interest include emerging intelligent autonomous systems data science and blockchain.</p>
                            <a class="btn px-3 mt-auto mx-auto" href="https://ric.psu.edu.sa/eias-lab.php">Read More</a>
                        </div>
                    </div>
                    <!-- ROBOTICS & INTERNET of THINGS LAB -->
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <img src="img/Labs/riotu-lab_1630215836-removebg-preview.png" alt="RIOT LAB">
                            </div>
                            <h5 class="mb-3">ROBOTICS & INTERNET of THINGS LAB</h5>
                            <p>A research lab at Prince Sultan University. Areas of interest include Internet-of-Things, Drones, and Deep Learning.</p>
                            <a class="btn px-3 mt-auto mx-auto" href="https://ric.psu.edu.sa/riotu-lab.php">Read More</a>
                        </div>
                    </div>
                    <!-- AUTOMATED SYSTEMS & SOFT COMPUTING LAB -->
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <img src="img/Labs/asscl7-removebg-preview.png" width="40%" alt="RIOT LAB">
                            </div>
                            <h5 class="mb-1">AUTOMATED SYSTEMS & SOFT COMPUTING LAB</h5>
                            <p>A research lab at Prince Sultan University. Aims to promote applied research on automated systems, as well as providing solutions to any specific problems within its scope.</p>
                            <a class="btn px-3 mt-auto mx-auto" href="https://ric.psu.edu.sa/asscl-lab.php">Read More</a>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- Portfolio Start -->
        <!-- <div class="container-xxl py-5 mb-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="position-relative d-inline text-primary ps-4">Our Projects</h6>
                    <h2 class="mt-2">Recently Launched Projects</h2>
                </div>
                <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="col-12 text-center">
                        <ul class="list-inline mb-5" id="portfolio-flters">
                            <li class="btn px-3 pe-4 active" data-filter="*">All</li>
                            <li class="btn px-3 pe-4" data-filter=".first">Design</li>
                            <li class="btn px-3 pe-4" data-filter=".second">Development</li>
                        </ul>
                    </div>
                </div>
                <div class="row g-4 portfolio-container">
                    <div class="col-lg-4 col-md-6 portfolio-item first wow zoomIn" data-wow-delay="0.1s">
                        <div class="position-relative rounded overflow-hidden">
                            <img class="img-fluid w-100" src="img/portfolio-1.jpg" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-light" href="img/portfolio-1.jpg" data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-primary"></i></a>
                                <div class="mt-auto">
                                    <small class="text-white"><i class="fa fa-folder me-2"></i>Web Design</small>
                                    <a class="h5 d-block text-white mt-1 mb-0" href="">Project Name</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item second wow zoomIn" data-wow-delay="0.3s">
                        <div class="position-relative rounded overflow-hidden">
                            <img class="img-fluid w-100" src="img/portfolio-2.jpg" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-light" href="img/portfolio-2.jpg" data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-primary"></i></a>
                                <div class="mt-auto">
                                    <small class="text-white"><i class="fa fa-folder me-2"></i>Web Design</small>
                                    <a class="h5 d-block text-white mt-1 mb-0" href="">Project Name</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item first wow zoomIn" data-wow-delay="0.6s">
                        <div class="position-relative rounded overflow-hidden">
                            <img class="img-fluid w-100" src="img/portfolio-3.jpg" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-light" href="img/portfolio-3.jpg" data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-primary"></i></a>
                                <div class="mt-auto">
                                    <small class="text-white"><i class="fa fa-folder me-2"></i>Web Design</small>
                                    <a class="h5 d-block text-white mt-1 mb-0" href="">Project Name</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item second wow zoomIn" data-wow-delay="0.1s">
                        <div class="position-relative rounded overflow-hidden">
                            <img class="img-fluid w-100" src="img/portfolio-4.jpg" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-light" href="img/portfolio-4.jpg" data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-primary"></i></a>
                                <div class="mt-auto">
                                    <small class="text-white"><i class="fa fa-folder me-2"></i>Web Design</small>
                                    <a class="h5 d-block text-white mt-1 mb-0" href="">Project Name</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item first wow zoomIn" data-wow-delay="0.3s">
                        <div class="position-relative rounded overflow-hidden">
                            <img class="img-fluid w-100" src="img/portfolio-5.jpg" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-light" href="img/portfolio-5.jpg" data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-primary"></i></a>
                                <div class="mt-auto">
                                    <small class="text-white"><i class="fa fa-folder me-2"></i>Web Design</small>
                                    <a class="h5 d-block text-white mt-1 mb-0" href="">Project Name</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item second wow zoomIn" data-wow-delay="0.6s">
                        <div class="position-relative rounded overflow-hidden">
                            <img class="img-fluid w-100" src="img/portfolio-6.jpg" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-light" href="img/portfolio-6.jpg" data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-primary"></i></a>
                                <div class="mt-auto">
                                    <small class="text-white"><i class="fa fa-folder me-2"></i>Web Design</small>
                                    <a class="h5 d-block text-white mt-1 mb-0" href="">Project Name</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Portfolio End -->
        
         <!-- Gallery Start-->
         <div class="container-fluid mb-5">
            <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="position-relative d-inline text-primary ps-4">GALLERY</h6>
                <h2 class="mt-2">Check our gallery from the recent events</h2>
            </div>
            <!-- Carousel -->
            <div id="GroupPhoto" class="carousel slide col-lg-12 wow fadeInUp" data-wow-delay="0.5s" data-bs-ride="carousel">

                <!-- Indicators/dots -->
                <div class="carousel-indicators">
                <button type="button" data-bs-target="#GroupPhoto" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#GroupPhoto" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#GroupPhoto" data-bs-slide-to="2"></button>
                <button type="button" data-bs-target="#GroupPhoto" data-bs-slide-to="3"></button>
                <button type="button" data-bs-target="#GroupPhoto" data-bs-slide-to="4"></button>
                <button type="button" data-bs-target="#GroupPhoto" data-bs-slide-to="5"></button>
                <button type="button" data-bs-target="#GroupPhoto" data-bs-slide-to="6"></button>
                <button type="button" data-bs-target="#GroupPhoto" data-bs-slide-to="7"></button>
                </div>
            
                <!-- The slideshow/carousel -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img  src="img/Gallery/4.jpg" alt="GroupPhoto" class="d-block w-100 " style="height:450px ;width:150px ; border-radius: 50px 20px;">
                    </div>
                    <div class="carousel-item ">
                        <img  src="img/Gallery/5.jpg" alt="GroupPhoto" class="d-block w-100 " style="height:450px ;width:150px ; border-radius: 50px 20px;">
                    </div>
                    <div class="carousel-item ">
                        <img  src="img/Gallery/6.jpg" alt="GroupPhoto" class="d-block w-100 " style="height:450px ;width:150px ; border-radius: 50px 20px;">
                    </div>
                    <div class="carousel-item ">
                        <img  src="img/Gallery/7.jpg" alt="GroupPhoto" class="d-block w-100 " style="height:450px ;width:150px ; border-radius: 50px 20px;">
                    </div>
                    <div class="carousel-item ">
                        <img  src="img/Gallery/8.jpg" alt="GroupPhoto" class="d-block w-100 " style="height:450px ;width:150px ; border-radius: 50px 20px;">
                    </div>
                    <div class="carousel-item ">
                        <img  src="img/Gallery/9.jpg" alt="GroupPhoto" class="d-block w-100 " style="height:450px ;width:150px ; border-radius: 50px 20px;">
                    </div>
                    <div class="carousel-item ">
                        <img  src="img/Gallery/10.jpg" alt="GroupPhoto" class="d-block w-100 " style="height:450px ;width:150px ; border-radius: 50px 20px;">
                    </div>
                    <div class="carousel-item ">
                        <img  src="img/Gallery/11.jpg" alt="GroupPhoto" class="d-block w-100 " style="height:450px ;width:150px ; border-radius: 50px 20px;">
                    </div>
                </div>
            
                <!-- Left and right controls/icons -->
                <button class="carousel-control-prev" type="button" data-bs-target="#GroupPhoto" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#GroupPhoto" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>
        <!-- Gallery End-->

        <!-- Testimonial Start -->
      <div class="container mt-5">
        <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="position-relative d-inline text-primary ps-4">Our attendees</h6>
            <h2 class="mt-2">Testimonials</h2>
        </div>
        <div class="container-xxl bg-primary testimonial py-5 my-5 wow fadeInUp" data-wow-delay="0.1s">
            
          
            <div class="container py-5 px-lg-5">
                <div class="owl-carousel testimonial-carousel">
                      <!-- Ibrahim  -->
                    <div class="testimonial-item bg-transparent border rounded text-white p-4">
                        <i class="fa fa-quote-left fa-2x mb-3"></i>
                        <p>The event add a positive value to the AI industry in the middle east region </p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/Testimonial/Ibrahim Khurfan.jpeg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h6 class="text-white mb-1">Ibrahim Khurfan</h6>
                                <small>Machine Learning Engineer</small>
                            </div>
                        </div>
                    </div>
                    <!-- Fouad  -->
                    <div class="testimonial-item bg-transparent border rounded text-white p-4">
                        <i class="fa fa-quote-left fa-2x mb-3"></i>
                        <p>Event Was informative and exciting, organizer where kind and helpful</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/Testimonial/Fouad Al Kadri.jpeg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h6 class="text-white mb-1">Fouad Al Kadri </h6>
                                <small>Data Scientist</small>
                            </div>
                        </div>
                    </div>
                    <!-- Moahned  -->
                    <div class="testimonial-item bg-transparent border rounded text-white p-4">
                        <i class="fa fa-quote-left fa-2x mb-3"></i>
                        <p>CDMA provide the a set of useful presentations and technical talks </p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-3.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h6 class="text-white mb-1">Mohanned Rizk</h6>
                                <small>Software Engineer </small>
                            </div>
                        </div>
                    </div>
                    <!-- Buzoon  -->
                    <div class="testimonial-item bg-transparent border rounded text-white p-4">
                        <i class="fa fa-quote-left fa-2x mb-3"></i>
                        <p>The event was amazing, the fact that all expertise gather from all over the world is amazing and give a distinct experience  </p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/Testimonial/Buzoon.png" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h6 class="text-white mb-1">Ibrahim Bazzoun</h6>
                                <small>Student</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
        <!-- Testimonial End -->


        <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="position-relative d-inline text-primary ps-4">Our Team</h6>
                    <h2 class="mt-2">Meet Our Team Members</h2>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5" style="width: 75px;">
                                    <a class="btn btn-square text-primary bg-white my-1" href="https://www.linkedin.com/in/dr-lahouari-ghouti"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                                <img class="img-fluid rounded w-100" src="img/Team/Dr.LahoriGhouti .jpg" alt="">
                            </div>
                            <div class="px-4 py-3">
                                <h5 class="fw-bold m-0">DR. LAHOUARI GHOUTI</h5>
                                <small>Associate Professor</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5" style="width: 75px;">
                                    <a class="btn btn-square text-primary bg-white my-1" href="https://www.linkedin.com/in/dr-yasir-javed-629b72194"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                                <img class="img-fluid rounded w-100" src="img/Team/Dr.yasir javeed.jpg" alt="">
                            </div>
                            <div class="px-4 py-3">
                                <h5 class="fw-bold m-0">Dr. Yasir Javed </h5>
                                <small>Lecturer</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="team-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5" style="width: 75px;">
                                    <a class=" btn btn-square text-primary bg-white my-1" href="https://www.psu.edu.sa/en/faculty-details/809"><i class="fab fa-linkedin-in "></i></a>
                                </div>
                                <img class="img-fluid rounded w-100" src="img/Team/Dr.Suliman jaber.jpg" alt="">
                            </div>
                            <div class="px-4 py-3">
                                <h5 class="fw-bold m-0">DR. SULIMAN MOHAMED FATI</h5>
                                <small>Assistant Professor</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- Hotels Start -->
        <div id="hotels" class="container-fluid p-5">
            <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="position-relative d-inline text-primary ps-4">Hotels</h6>
                <h2 class="mt-2">Hotels</h2>
            </div>
            <div class="row text-center">
                <div class="col-4 ">
                  <div class="hotel wow zoomIn"data-wow-delay="0.5s"> 
                      <img src="img/Hotels/1.jpg" alt="Tiara Hotel" class="img-fluid" style="height: 200px; width: 300px; border-radius: 50px 20px;">
                    <h3><a href="https://www.ihg.com/crowneplaza/hotels/gb/en/riyadh/ruhaw/hoteldetail?cm_mmc=GoogleMaps-_-CP-_-SA-_-RUHAW" target="_blank">Tiara Hotel</a></h3>
                    <div class="stars">
                      <i class="fa fa-star" style="color: yellow;"></i>
                      <i class="fa fa-star" style="color: yellow;"></i>
                      <i class="fa fa-star" style="color: yellow;"></i>
                      <i class="fa fa-star" style="color: yellow;"></i>
      
                    </div>
                    <p>2.2 Miles from the PSU</p>
                  </div>
                </div>
      
                <div class="col-4 ">
                  <div class=" wow zoomIn"data-wow-delay="0.5s" >
                    
                    <img src="img/Hotels/2.jpg" alt="Sheraton Hotel" class="img-fluid" style="height: 200px; width: 300px; border-radius: 50px 20px;">
                    
                    <h3><a href="https://www.marriott.com/en-us/hotels/ruhsi-sheraton-riyadh-hotel-and-towers/overview/?scid=bb1a189a-fec3-4d19-a255-54ba596febe2&y_source=1_Mjc4MTg5NS03MTUtbG9jYXRpb24uZ29vZ2xlX3dlYnNpdGVfb3ZlcnJpZGU%3D" target="_blank">Sheraton Hotel</a></h3>
                    <div class="stars">
                      <i class="fa fa-star" style="color: yellow;"></i>
                      <i class="fa fa-star" style="color: yellow;"></i>
                      <i class="fa fa-star" style="color: yellow;"></i>
                      <i class="fa fa-star" style="color: yellow;"></i>
                      <i class="fa fa-star" style="color: yellow;"></i>
                    </div>
                    <p>4.2 Miles from the PSU</p>
                  </div>
                </div>
      
                <div class="col-4 ">
                  <div class=" wow zoomIn"data-wow-delay="0.5s">
                      <img src="img/Hotels/3.jpg" alt="Holiday Inn Izdihar" class="img-fluid" style="height: 200px; width: 300px; border-radius: 50px 20px;">
                    <h3><a href="https://www.holidayinn.com/hotels/gb/en/riyadh/ruhap/hoteldetail?fromRedirect=true&qSrt=sBR&qIta=99618971&icdv=99618971&glat=SEAR_PDSEA-_-G_F-IMEA_FS-MEA_H-IMEA_HS-KSA_HI_BRI_EXM_HOTEL-RUHAP&qSlH=RUHAP&setPMCookies=true&qSHBrC=HI&qDest=P.O.Box%2034287,%20Riyadh,%20SA&dp=true&gclid=CjwKCAjw6dmSBhBkEiwA_W-EoJ8zJolZt3h9c75GKrSrPQiFECDFoCMSwaYBhvUmv6id6WFeTicS5BoCT1sQAvD_BwE&cm_mmc=PDSEA-_-G_F-IMEA_FS-MEA_H-IMEA_HS-KSA_HI_BRI_EXM_HOTEL-RUHAP&srb_u=1" target="_blank">Holiday Inn Izdihar</a></h3>
                    <div class="stars">
                      <i class="fa fa-star" style="color: yellow;"></i>
                      <i class="fa fa-star" style="color: yellow;"></i>
                      <i class="fa fa-star" style="color: yellow;"></i>
                      <i class="fa fa-star" style="color: yellow;"></i>
                    </div>
                    <p>5.4 Miles from the Venue</p>
                  </div>
                </div>
              </div>
        </div>
        <!-- Hotels End -->
        
         <!-- FQA Start  -->
         <div  class="container-xxl py-5 wow zoomIn " data-wow-delay="0.5s" id="F.A.Qs">
            <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="position-relative d-inline text-primary ps-4">Questions Asked</h6>
                <h2 class="mt-2">F.A.Qs</h2>
            </div>
            <div>
               
                    <!-- Past Events  -->
                    <div class="d-grid m-3">
                        <button class="btn btn-outline-dark " type="button" data-bs-toggle="collapse" data-bs-target="#past-events" aria-expanded="false" aria-controls="past-events"  >
                            Past Events  
                        </button>
                        <div class="collapse" id="past-events">
                            <div class="card card-body ">
                                <div id="faq1" class="collapse show"> 
                                    <p>The CDMA Conferene is a bi-annual event. The first edition was held in 2010. More details about the past conference editions can be found at: </p>
                                        <ul  style="list-style: none;">
                                            <li class="p-2"><a class="text-danger p-3" href="https://ieeexplore.ieee.org/xpl/conhome/9036009/proceeding" target="_blank">CDMA 2020 </a></li>
                                            <li class="p-2"><a class="text-danger p-3" href="https://www.springer.com/gp/book/9783319787527?utm_campaign=3_pier05_buy_print&amp;utm_content=en_08082017&amp;utm_medium=referral&amp;utm_source=google_books#otherversion=9783319787534" target="_blank">SDMA 2018 </a></li>
                                            <li class="p-2"><a class="text-danger p-3" href="https://www.sciencedirect.com/journal/procedia-computer-science/vol/82/suppl/C" target="_blank">SDMA 2016</a></li>
                                            <li class="p-2"><a class="text-danger p-3" href="http://www.psu.edu.sa/en/Research/MEGDAM/Documents/SDMA%25202014%2520Proceedings.pdf" target="_blank">SDMA 2014</a></li>
                                            <li class="p-2"><a class="text-danger p-3" href="http://info.psu.edu.sa/colleges/megdam/SDMA/Default6.aspx" target="_blank">SDMA 2012</a></li>
                                            <li class="p-2"><a class="text-danger p-3" href="http://info.psu.edu.sa/colleges/megdam/SDMA/Default5.aspx" target="_blank">SDMA 2010 </a></li>
                                        </ul>
                                      
                                </div>
                                </div>
                        </div>
                    </div>                                      
                    <!-- Submission of Manuscript -->
                    <div class=" d-grid m-3" >
                        <button class="btn btn-outline-dark" type="button" data-bs-toggle="collapse" data-bs-target="#Submission-of-Manuscript" aria-expanded="false" aria-controls="Submission-of-Manuscript">
                            Submission of Manuscript  
                        </button>
                        <div class="collapse" id="Submission-of-Manuscript">
                            <div class="card card-body">
                                
                                <div id="faq2" class="collapse show"  >

                                    <p>Authors are invited to submit full-length manuscript using the submission Link provided on easychair. <br> <br><a class="text-danger" href="https://easychair.org/conferences/?conf=cdma2022" target="_blank">(Submit Here)</a></p>
                                    
                                    <p>The maximum length of manuscript is 6 pages with IEEE template using double column format including headers, figures, tables and appendices. All submissions would undergo single blind review process prior to acceptance for possible publication in the conference proceedings. The authors should prepare their manuscripts in accordance with the <a class="text-danger" href="https://www.ieee.org/conferences_events/conferences/publishing/templates.html" target="_blank">IEEE Conference Template</a>. <br> <br>Manuscripts should be written in clear English language.</p>
                                    
                                    <p>The submissions should contain original results of research that are related to the theory, design, implementation, application, exploitation, maintenance or evaluation aspects of the conference main topics. Only the papers that have not been published or presented in any way will be accepted for CDMA2022.</p>
                                    
                                    <p>Note: The conference submission system only accepts manuscripts in PDF A4 format (before the revision manuscripts do not have to be checked by IEEE PDFXpress).</p>
                                    
                                    </div>
                             </div>
                        </div>
                    </div>
                    <!-- Camera Ready Papers  -->
                    <div class="d-grid m-3">
                        <button class="btn btn-outline-dark" type="button" data-bs-toggle="collapse" data-bs-target="#Camera-Ready-Papers" aria-expanded="false" aria-controls="Camera-Ready-Papers">
                            Camera Ready Papers  
                        </button>
                        <div class="collapse" id="Camera-Ready-Papers">
                            <div class="card card-body">
                                <div id="faq3" class="collapse show" >
                                    <p>All accepted papers need to be prepared in accordance with the IEEE Conference Template. Final versions of accepted papers must be prepared using IEEE PDF eXpress:</p>
                                    
                                    <ul>
                                        <li><span class="auto-style3">+ Go to the </span> <a class="text-danger" href="http://www.pdf-express.org/plus/" target="_blank">IEEE PDF eXpress</a><span class="auto-style3"> website</span></li>
                                        <li>+ If you never used IEEE PDF eXpress, then click on the link New Users - Click<em> Here and fill</em> in your information.</li>
                                        <li>+ If you have used IEEE PDF eXpress before, then enter your email address and password</li>
                                        <li>+ The Conference ID is:&nbsp; 54072</li>
                                        <li>+ Continue to enter information as prompted.</li>
                                    </ul>
                                    
                                    <p></p>
                                    
                                    <p>All papers will under go a plagiarism and similarity check using <a  class="text-danger" href="https://www.ieee.org/publications/rights/cross-check-main.html" target="_blank"> IEEE CrossCheck</a>, any papers not meeting the minimum standard will be excluded from the proceedings. Only if the check for compliance with <a class="text-danger" href="http://www.pdf-express.org/plus/" target="_blank">PDF eXpress </a>was successful, you can submit your final paper. The final paper submitted at the conference system must have a proof of full compliance generated by the PDF eXpress facility. Papers without the compliance proof will <strong>not</strong> be included in the IEEE Xplore data base.</p>
                                    
                                    <p></p>
                                    
                                    <p><strong>IEEE Copyright form </strong><br>
                                    For each paper, one author has to complete the IEEE Copyright form.<br>
                                    <br>
                                    The copyright form will be an IEEE electronic Copyright Form (eCF) that will be filled online. The official IEEE eCF will be sent to the registered (or first) author's email address from an IEEE registered domain, to fill on behalf of himself and other co-Authors, after the camera-ready submission period is over.<br>
                                    <br>
                                    <strong>Important note:</strong> Manuscripts will be checked for plagiarism and multiple publications using <a class="text-danger" href="https://crosscheck.ieee.org" target="_blank">IEEE CrossCheck Portal</a>. Submitting authors will be checked have they been prohibited from publishing with any or all IEEE publications using The IEEE Prohibited Authors List (PAL) Database.</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Publication of Proceedings -->
                    <div class="d-grid m-3">
                        <button class="btn btn-outline-dark" type="button" data-bs-toggle="collapse" data-bs-target="#Publication-of-Proceedings" aria-expanded="false" aria-controls="Publication-of-Proceedings">
                            Publication of Proceedings  
                        </button>
                        <div class="collapse" id="Publication-of-Proceedings">
                            <div class="card card-body">
                                <div id="faq4" class="collapse show" >
                                    <p>All accepted papers will be included in the proceedings of the conference. The proceedings would be submitted to IEEE Xplore and is expected to be published and indexed by EI.<br></p>
                                  </div></div>
                        </div>
                    </div>
                    <!-- Conference-Registration -->
                    <div class="d-grid m-3">
                        <button class="btn btn-outline-dark" type="button" data-bs-toggle="collapse" data-bs-target="#Conference-Registration" aria-expanded="false" aria-controls="Conference-Registration">
                            Conference Registration  
                        </button>
                        <div class="collapse" id="Conference-Registration">
                            <div class="card card-body">
                                <div id="faq5" class="collapse show">
                                    <p>Thanks to the generous support of Prince Sultan University, the CDMA2022 Conference attendees are waived from paying the registrations fees!
                                      </p>
                
                                  </div>
                                </div>
                        </div>
                    </div>
                    <!-- Hotel and Visa Information  -->
                    <div class="d-grid m-3">
                        <button class="btn btn-outline-dark" type="button" data-bs-toggle="collapse" data-bs-target="#Hotel-and-Visa-Information" aria-expanded="false" aria-controls="Hotel-and-Visa-Information">
                            Hotel and Visa Information 
                        </button>
                        <div class="collapse" id="Hotel-and-Visa-Information">
                            <div class="card card-body">
                                <div id="faq6" class="collapse show" data-parent="#faq-list" >
                                    <p>The conference would be held at Prince Sultan University Campus. The campus is located in North of Riyadh city center and is easily accessible. The conference would be held in Building 105. Two large auditorums would be utilized for presentations and keynote speeches. Parallel sessions would be accomodated in the same building using seminar halls and classrooms. The conference lunches and coffee breaks would be served in atrium C.&nbsp;</p>
                 
                                    <p><strong>Visa</strong></p>
                                    
                                    <p>Authors are required to Register and present their paper in the event. Paper not presented would be removed from the proceedings.
                                    The authors would have to bear all expenses related to visa, travel etc. Support for visa is available, authors of accepted papers are expected to fill a <br> <br> <a class="text-danger" href="assets/Doc/VISA_FORM_CDMA2022.docx" target="_blank">visa request form</a> <br> <br> along with required documents and email to visa liaison office before February 01, 2022 for visa processing.</p>
                                    
                                    <p></p>
                                    
                                    <p>Note:&nbsp; It may take more than 30 days to complete the visa process, urgency from authors in this regard is important.<br>
                                    <br>
                                    <strong>Hotel</strong></p>
                                    
                                    <p>Authors can reserve using the following accomodation at these hotels. A Bus shuttle service free of charge will be provided to and from the hotel to Prince Sultan University Campus.</p>
                                    
                                    <p>Tiara Hotel (4-stars) - <br> <br> <a class="text-danger" href="https://www.booking.com/hotel/sa/tiara-riyadh.html?checkin_monthday=26&amp;checkin_year_month=2019-4&amp;checkout_monthday=27&amp;checkout_year_month=2019-4&amp;tab=1&amp;origin=hp&amp;src=hotel&amp;hp_avform=1&amp;error_url=%2Fhotel%2Fsa%2Ftiara-riyadh.html%3Flabel%3Dgen173nr-1FCAEoggI46AdIM1gEaMQBiAEBmAExuAEXyAEM2AEB6AEB-AECiAIBqAIDuAKW0obmBcACAQ%3Bsid%3De760ee95f89d768e8648485370de340d%3Bsrpvid%3D7013587876c00017%26%3B&amp;do_availability_check=on&amp;label=gen173nr-1FCAEoggI46AdIM1gEaMQBiAEBmAExuAEXyAEM2AEB6AEB-AECiAIBqAIDuAKW0obmBcACAQ&amp;sid=e760ee95f89d768e8648485370de340d&amp;no_rooms=1&amp;group_adults=2&amp;group_children=0" target="_blank"> Booking.com</a></p>
                                    
                                    <p>Holiday Inn - Izdehar (4-stars) - <br> <br> <a class="text-danger" href="https://www.booking.com/hotel/sa/holiday-inn-riyadh-izdihar.html?label=gen173nr-1FCAEoggI46AdIM1gEaMQBiAEBmAExuAEXyAEM2AEB6AEB-AECiAIBqAIDuAKW0obmBcACAQ&amp;sid=e760ee95f89d768e8648485370de340d&amp;all_sr_blocks=4468412_94266283_0_0_0&amp;checkin=2020-03-03&amp;checkout=2020-03-06&amp;dest_id=900040280&amp;dest_type=city&amp;hapos=1&amp;highlighted_blocks=4468412_94266283_0_0_0&amp;hpos=1&amp;sr_order=popularity&amp;srepoch=1556195797&amp;srpvid=130858aa4eac0257&amp;ucfs=1&amp;from=searchresults;highlight_room=#hotelTmpl" target="_blank"> Booking.com</a></p>
                                    
                                    <p>There are many other hotels available in the vicinity of university campus, however the Bus shuttle service will not be available.</p>
                                    
                                    <p></p>
                                   </div>
                                </div>
                        </div>
                    </div>
                    <!-- Important Dates -->
                    <div class="d-grid m-3">
                        <button class="btn btn-outline-dark" type="button" data-bs-toggle="collapse" data-bs-target="#Important-Dates" aria-expanded="false" aria-controls="Important-Dates">
                            Important Dates 
                        </button>
                        <div class="collapse" id="Important-Dates">
                            <div class="card card-body">
                                <div id="faq7" class="collapse show" >
                                    <p>Paper submission deadline: <del>November 1, 2021</del> <strong>November 20, 2021 (extended deadline)</strong>.<br>
                                    Paper notification: <strong>December 31, 2021</strong>.<br>
                                    Camera Ready: <strong>January 20, 2022</strong>.<br>
                                    Program: <strong>February 20, 2022</strong>.<br>
                                    Conference Dates: <strong>March 1-3, 2022</strong>.</p>
                                  </div>
                            </div>
                        </div>
                    </div>     
            </div>    
      </div>   
    <!-- FQA End  -->

    <!-- Author registration Start-->
    <div id="registration" class="container-fluid p-5">
        <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="position-relative d-inline text-primary ps-4">Fees</h6>
            <h2 class="mt-2">AUTHOR REGISTRATION</h2>
        </div>
        <p class="text-center wow fadeInUp" data-wow-delay="0.5s">Thanks to the generous support of Prince Sultan University, all participants are waived from the CDMA2022 Conference registration fees.</p>
    </div>
    <!-- Author registration End-->

    <!-- Contact Us Start-->
    <div id="Contact Us" class="container-fluid p-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="position-relative d-inline text-primary ps-4">Get In Touch</h6>
            <h2 class="mt-2">CONTACT US</h2>
        </div>
        <div class="row contact-info p-4">
            <div class="col-md-4">
                <div class="text-center">
                    <h3>Address</h3>
                    <address>P.O.Box No. 66833 Rafha Street, Riyadh 11586 Saudi Arabia</address>
                </div>
            </div>

            <div class="col-md-4">
                <div class="text-center">
                    <h3>Phone Number</h3>
                    <p><a href="tel:+155895548855">+966 11 4948287</a></p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="text-center">
                    <h3>Email</h3>
                    <p><a href="mailto:cdma2022@psu.edu.sa">cdma2022@psu.edu.sa</a></p>
                </div>
            </div>

        </div>
    </div>
    <!-- Contact Us End-->





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
                                <a href="indexUser.php">Home</a>
                                <a href="#F.A.Qs">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
     </div>
    <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i class="fa fa-arrow-up"></i></a>
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