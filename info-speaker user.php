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
                    <h1 class="m-0"></i>CDMA<span class="fs-5 text-danger">2022</span></h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="index.html" class="nav-item nav-link ">Home</a>
                        <a href="Speaker.html" class="nav-item nav-link">Speakers</a>
                        <a href="CAMERA-READY.html" class="nav-item nav-link">CameraReady</a>
                    </div>
                    <!-- login and sign up button -->
                    <button class="btn btn-secondary text-light rounded-pill py-2 px-4 ms-3" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">SignUp</button>
                    <button class="btn btn-secondary text-light rounded-pill py-2 px-4 ms-3" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Login</button>
                    <!--=====================SIGNUP FORM START=====================-->
                <div id="id01" class="modal">
                    <form class="modal-content animate" action="/action_page.php">
                        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                      <div class="container">
                        <h1>Sign Up</h1>
                        <p>Please fill in this form to create an account.</p>
                        <hr>
                        <label for="email"><b>Email</b></label>
                        <input type="text" placeholder="Enter Email" name="email" required>
                  
                        <label for="psw"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="psw" required>
                  
                        <label for="psw-repeat"><b>Repeat Password</b></label>
                        <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
                        
                        <label>
                          <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                        </label>
                  
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
                    <form class="modal-content animate" action="/action_page.php" method="post">
                        <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
                      <div class="container">
                        <h1>Login</h1>
                        <label for="uname"><b>Username</b></label>
                        <input type="text" placeholder="Enter Username" name="uname" required>
                  
                        <label for="psw"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="psw" required>
                          
                        <button id="Login_btn" type="submit">Login</button>
                        <label>
                          <input type="checkbox" checked="checked" name="remember"> Remember me
                        </label>
                      </div>
                  
                      <div class="container" style="background-color:#f1f1f1">
                        <button id="login_cancel_btn" type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
                        <span class="psw">Forgot <a href="#">password?</a></span>
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
        <!-- Speakers info -->
       <div class="container">
        
            <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="position-relative d-inline text-primary ps-4">Speakers Information</h6>
                <h2 class="mt-2">MAIN GUEST, DISTINGUISHED SPEAKERS AND TUTORIALS, PRESENTERS</h2>
            </div>
        <!-- First-->
        <br>        <br>        
        <div class="container-fluid row  wow zoomIn" data-wow-delay="0.5s">
            <div class="col-md-2 ">
                <img src="img/Speakers/Altuwaijri.jpg" alt="Main Guest Speaker" class="img-fluid" style="height: 200px; width: 150px;">
            </div>
            <div class=" col-md-10">
            <h2 style="color:darkblue;"><strong>Prof. Majid Altwaijri</strong></h2>
            <h3 style="color:darkblue;">The Potential Impact of Data Science and AI Applications Across Economic Sectors</h3>
            <p>Data Science and artificial intelligence (AI) are no longer theoretical fields of research, and we have started to see successful real-world applications for these fields. These applications have a huge potential impact on economic sectors, from the quality and availability of Healthcare to addressing climate and sustainability challenges. Technologies like Natural Language Processing and Computer Vision are slowly removing the need for mundane repetitive tasks, making people focus on more creative and value-creating tasks. To reap the benefits of these applications, the right policies, infrastructure, and talent need to be developed, and academic institutions must work alongside the public and private sector to secure maximum benefit from these applications.</p>
            <h5 style="color:darkblue;"><strong>About Prof. Majid Altwaijri</strong></h5>
            <p>Prof. Majid Altwaijri is the Chief Executive Officer (CEO) at the National Center for AI (NCAI) and CEO of Strategy Management Office at Saudi Data & AI Authority (SDAIA). He has worked for 7 years as the Managing Director of Health & Public Services in the Middle East, North Africa & Turkey at Accenture. He spent 9 years at King Saud bin Abdulaziz University for Health Sciences as a Professor and vice-president (VP) for Technology and a board member. He has been the Chief Informationa Officer (CIO) at the National Guard Health Affairs for 16 years. Dr. Altuwaijri is the Co-Founder of the Saudi Association for Health Informatics (SAHI), established in 2005. He has been appointed as the SAHI President for two terms. Prof. Altwaijri has received his Master of Science (M.S.) and Doctor of Philosophy (Ph.D.) degrees from the University of Louisiana at Lafayette, USA (1990-1995). He holds a MCPM Master’s Certificate in Project Management from the University of Houston-Clear Lake, USA since 2006. In 2012, he enrolled in the General Management Program (GMP) at the Harvard Business School (HBS), Harvard University, USA.</p>
            </div>
         </div>
         <!-- Second-->
         <br>        <br>        
         <div class="container-fluid row wow zoomIn" data-wow-delay="0.5s">
             <div class="col-md-2 ">
                 <img src="img/Speakers/Gilbert_Strang.jpg" alt="Main Guest Speaker" class="img-fluid" style="height: 150px; width: 200px;">
             </div>
             <div class=" col-md-10">
             <h2 style="color:darkblue;"><strong>Prof. Gil Strang</strong></h2>
             <h3 style="color:darkblue;">Linear Algebra and Deep Learning: Connections and Insights</h3>
             <p>Linear algebra has joined calculus as an essential subject in understanding modern science and engineering. Universities need to teach the high points of the subject in a constructive way : not proofs but ideas and useful factorizations . Those include the classical applications of eigenvalues and the modern applications of singular values in data science. Deep learning creates matrix weights from the training data. Those weights are chosen so that a sequence of steps from the input layer to the output will model the data. Each step is a matrix multiplication followed by a simple nonlinear operation like ReLU: keep the positive part and zero out the negative part of each layer. The resulting model has been highly successful when applied to new data. Understanding this success is essential to improving and accelerating deep learning. We will identify key ideas in linear algebra that are part of the understanding.</p>
             <h5 style="color:darkblue;"><strong>About Prof. Gil Strang</strong></h5>
             <p>Prof. Gil Strang is a professor of Mathematics at the Massachsusets Institute of Technology (MIT), USA. He has published 12 mathematics textbooks and recording his MIT lectures for Math18.06 -- 18.065 - 18.085 on the MIT OpenCourseWare (ocw.mit.edu). Those lectures have had more than twelve million viewers (also on youtube/mitocw). His lectures are freely available through MIT OpenCourseWare.</p>
             </div>
          </div>
        <!-- Third speaker -->
        <br>        <br>        
        <div class="container-fluid row wow zoomIn" data-wow-delay="0.5s">
            <div class="col-md-2 ">
                <img src="img/Speakers/yaser_abu_mostafa.jpeg" alt="Main Guest Speaker" class="img-fluid" style="height: 150px; width: 200px;">
            </div>
            <div class=" col-md-10">
            <h2 style="color:darkblue;"><strong>Prof. Yaser Abu-Mostafa</strong></h2>
            <h3 style="color:darkblue;">Artificial Intelligence and Machine Learning: The Role of Research and Education</h3>
            <p>Artificial Intelligence (AI) and Machine Learning have evolved into a mature technology that touches on every aspect of our life. Every country and every corporation must keep up with this technology to maintain its competitive advantage. To do this, what are the roles of research, development, and education? What is the right mix and the right emphasis that would enable us to make the most of the AI revolution? I will address these questions based on my experience as a researcher, educator, AI practitioner, and scientific advisor.</p>
            <h5 style="color:darkblue;"><strong>About Prof. Yaser Abu-Mostafa</strong></h5>
            <p>Prof. Yaser Abu-Mostafa is Professor of Electrical Engineering and Computer Science at the California Institute of Technology, USA, Chairman of Paraconic Technologies Ltd, and Chairman of Machine Learning Consultants LLC. He is known for his research and educational activities in the area of machine learning. Prof. Abu-Mostafa studied at Cairo University, where he earned the BSc degree in 1979. He earned the MS degree at the Georgia Institute of Technology in 1981 and the PhD degree at the California Institute of Technology in 1983. He has been on the faculty of the California Institute of Technology since 1983. In 1987, Prof. Abu-Mostafa cofounded the Conference on Neural Information Processing Systems (NIPS), a major machine learning meeting. He is known for his recent textbook on machine learning. He has also developed an online course about machine learning.</p>
            </div>
         </div>
        <!-- forth speaker -->
        <br>        <br>        
        <div class="container-fluid row wow zoomIn" data-wow-delay="0.5s">
            <div class="col-md-2 ">
                <img src="img/Speakers/nizar_habash.jpg" alt="Main Guest Speaker" class="img-fluid" style="height: 150px; width: 200px;">
            </div>
            <div class=" col-md-10">
            <h2 style="color:darkblue;"><strong>Prof. Nizar Habash</strong></h2>
            <h3 style="color:darkblue;">Arabic Natural Language Processing: Challenges, Solutions and Outlook</h3>
            <p>Natural language processing (NLP), from document search to machine translation and question answering, has become an important part of our daily lives. The quality of such technologies for Arabic continues to lag behind those for English and other languages. In this talk, we present the main challenges to Arabic NLP. First, Arabic is a complex language – it has a high degree of orthographic ambiguity and variety, morphological richness, and dialectal variants. Secondly, research and development for Arabic language technologies also suffer from limited human and data resources, as well as collaborations. We present several efforts addressing these challenges situated in a bigger vision for the future of Arabic and Artificial Intelligence.</p>
            <h5 style="color:darkblue;"><strong>About Prof. Nizar Habash</strong></h5>
            <p>Prof. Nizar Habash is a Professor of Computer Science at New York University Abu Dhabi (NYUAD). He is also the director of the Computational Approaches to Modeling Language (CAMeL) Lab. Prof. Habash specializes in natural language processing and computational linguistics. Before joining NYUAD in 2014, he was a research scientist at Columbia University's Center for Computational Learning Systems. He received is PhD in Computer Science from the University of Maryland College Park in 2003. He has two bachelors degrees, one in Computer Engineering and one in Linguistics and Languages. His research includes extensive work on machine translation, morphological analysis, and computational modeling of Arabic and its dialects. Prof. Habash has been a principal investigator or co-investigator on over 25 research grants. And he has over 200 publications including a book entitled "Introduction to Arabic Natural Language Processing". His website is www.nizarhabash.com.</p>
            </div>
         </div>
        <!-- fifth speaker -->
        <br>        <br>        
        <div class="container-fluid row wow zoomIn" data-wow-delay="0.5s">
            <div class="col-md-2 ">
                <img src="img/Speakers/hafiz_malik.jpg" alt="Main Guest Speaker" class="img-fluid" style="height: 150px; width: 150px;">
            </div>
            <div class=" col-md-10">
            <h2 style="color:darkblue;"><strong>Prof. Hafiz Malik</strong></h2>
            <h3 style="color:darkblue;">Fighting AI with AI: Countermeasures to Debunk Deepfakes and Shallowfakes</h3>
            <p>Advances in artificial intelligence and multimedia (audio, video, and image) synthesis and generation technologies are the main driver behind exponential growth of deepfakes and shallowfakes. The deepfake technology manipulates audio and video of a real people saying or doing things they never said or did. Deepfake technology is weaponizing information and social media platforms are adding fuel to the fire by spreading it instantaneously. Bad actors are taking advantage of deepfake technology to spread disinformation, disrupt elections, distort facts and introducing alternate realities, exploit vulnerabilities in biometric based access control systems and smart cities. Stung by bad actors interference in elections in the United States and throughout Europe, governments have made progress in investigating past intrusions, counteracting ongoing influence, and preparing for future malign operations. However, even as Western democracies work to construct responses and build resilience, the bad actors continue to develop new tools and re-tooling emerging technologies to spread false narratives and manipulate the political discourse. This talk will discuss trajectory of deepfake and shallowfake technologies and associated threats to national security, financial institutions, and smart devices. This talk will present a framework to debunk deepfake attacks in real-time. This talk will also present findings of our-on-going research on detecting fake audios and videos.</p>
            <h5 style="color:darkblue;"><strong>About Prof. Hafiz Malik</strong></h5>
            <p>Hafiz Malik is Professor of Electrical and Computer Engineering (ECE) at the University of Michigan – Dearborn. Leading national and international sponsors have funded his research in the areas of automotive cybersecurity, cyber-physical system security, deepfake detection, multimedia forensics, steganography/steganalysis, information hiding, pattern recognition, and information fusion. He has published over 100 articles in leading peer-reviewed journals, conferences, and workshops. He is a founding member and chief operating officer (COO) of the Global Foundation for Cyber Studies and Research, a founding member of the Cybersecurity Center for Research, Education, and Outreach at UM-Dearborn and member of leadership circle for the Dearborn Artificial Intelligence Research Center at UM-Dearborn. He is also a member of the Scientific and Industrial Advisory Board (SIAB) of the National Center of Cyber Security Pakistan. He is a member of MCity Working Group on Cybersecurity, since 2015.</p>
            </div>
         </div>
         <!-- sixth speaker -->
         <br>        <br>        
         <div class="container-fluid row wow zoomIn" data-wow-delay="0.5s">
             <div class="col-md-2 ">
                 <img src="img/Speakers/hassan_sawaf.jpg" alt="Main Guest Speaker" class="img-fluid" style="height: 150px; width: 150px;">
             </div>
             <div class=" col-md-10">
             <h2 style="color:darkblue;"><strong> Dr. Hassan Sawaf</strong></h2>
             <h3 style="color:darkblue;">Authority in Artificial Intelligence Science</h3>
             <p>How can we create a healthy and responsible vision for artificial intelligence (AI) and prevent it from becoming monopolized? How do we create a diverse playing field to let people and organizations come together to exchange AI while still owning their data and decentralizing the authority of AI? What are the benefits of doing this and how can we handle AI in the most responsible way for our future?</p>
             <h5 style="color:darkblue;"><strong>About Dr. Hassan Sawaf</strong></h5>
             <p>Hassan Sawaf has 25+ years of experience in employing cutting-edge technologies for mission-critical business operations. He founded several machine learning organizations in small and large tech companies including AppTek, eBay, Amazon, and Facebook. Hassan has always had a passion for entrepreneurial endeavors, learning, building and sharing his knowledge with others since the genesis of his career. In the University, he had a role as a Senior Researcher at RWTH Aachen, researching in MT and Speech Recognition, statistical parsing and language modeling. Upon receiving his diploma, he started his first company in 2001 in Germany and sold it in 2004 to a US-based company, which brought him to the Washington, DC area. Hassan then moved on to become Chief Scientist and HLT Director at SAIC for 2 years. He was responsible for R&D and technology development in the SAIC HLT division, supporting the team with deeper understanding of HLT and the business surrounding the technology. When relocating to the San Francisco Bay Area, he joined eBay as Director of Machine Translation, Human Language Technology and Head of AI for several years, and transitioned to external roles as an Advisor, equity partner and member of the board of numerous start-up and smaller established tech companies in the past 5 years. Currently, as Founder of aiXplain, he’s on a mission to deeply democratize AI. aiXplain will make AI accessible to businesses and individuals alike, and ensure equitable and fair benefit to everyone involved. Hassan is also a founding board member of the PI Campus School headquartered in Rome, Italy, and investor, board member, and/or advisor to a handful of promising startups and established companies in the US, Canada, Germany, and UAE among them Tarjama, AppTek, and Embodied. In his spare time, he likes to read up on research, experience speed through skiing, one-wheeling, car racing, and flying and he also likes to build vehicles and little houses. During the pandemic, he rediscovered his passion for camping, tenting, and watching the sunrise and set, as he did not travel as usual.</p>
             </div>
          </div>
        <!-- seventh speaker -->
        <br>        <br>        
        <div class="container-fluid row wow zoomIn" data-wow-delay="0.5s">
            <div class="col-md-2 ">
                <img src="img/Speakers/kareem_darwish.jpg" alt="Main Guest Speaker" class="img-fluid" style="height: 150px; width: 200px;">
            </div>
            <div class=" col-md-10">
            <h2 style="color:darkblue;"><strong> Dr. Kareem Darwish</strong></h2>
            <h3 style="color:darkblue;">Computer Science Meets Social Sciences</h3>
            <p>Stance Detection from Supervised to Unsupervised Learning: What can computational methods inform us about peoples and societies? This talk presents state-of-the-art methods for performing stance detection using supervised, semi-supervised, and unsupervised methods. Stance detection aims to automatically identify the positions of people towards a particular issue or entity. Further, the talk delves into real life examples highlighting how stance detection can be used to understand societal trends, measure societal discord, and advise public policy.</p>
            <h5 style="color:darkblue;"><strong>About Dr. Kareem Darwish</strong></h5>
            <p>Kareem Darwish is a principal scientist at aiXplain Inc. working in the areas of natural language processing, computational social science, and machine learning. Previously, he was the acting research director of the Arabic Language Technologies group (ALT) at the Qatar Computing Research Institute (QCRI) and a researcher at the Cairo Microsoft Innovation Lab and the IBM Human Language Technologies group in Cairo. He also taught at the German University in Cairo and Cairo University. His research on natural language processing has led to state-of-the-art tools for Arabic processing that perform several tasks such as part-of-speech tagging, named entity recognition, automatic diacritic recovery, sentiment analysis, and parsing. His work on social computing focused on predictive stance detection to predict how users feel about an issue now or perhaps in the future, and on detecting malicious behavior on social media platforms, particularly propaganda accounts. His innovative work on social computing has received much media coverage from international news outlets such as CNN, Newsweek, Washington Post, the Mirror, and many others. Aside from the many research papers that he authored, he also authored books in both English and Arabic on a variety of subjects including Arabic processing, politics, and social psychology. He also has a YouTube channel on social psychology.</p>
            </div>
         </div>
         <!-- eight speaker -->
         <br>        <br>        
         <div class="container-fluid row wow zoomIn" data-wow-delay="0.5s">
             <div class="col-md-2 ">
                 <img src="img/Speakers/issam.png" alt="Main Guest Speaker" class="img-fluid" style="height: 150px; width: 150px;">
             </div>
             <div class=" col-md-10">
             <h2 style="color:darkblue;"><strong> Dr. Issam Laradji, Research Scientist at ServiceNow Company, Vancouver, Canada</strong></h2>
             <h3 style="color:darkblue;">Build End-to-End Machine Deep Projects and Manage Large-Scale Experiments <strong>(Tuesday 01st of March 2022 --Afternoon Session--)</strong></h3>
             <p>In this tutorial, I will briefly describe best practices for building large-scale reproducible deep learning projects, and for defining, launching and visualizing a large set of experiments. On Google Colab, starting from an empty project, I will show how to compare between 4 optimizers on two datasets and obtain visualizations that are ready to be presented in a research paper or project report. By the end of the tutorial, you will be able to build a deep learning benchmark, launch large-scale experiments, visualize them, debug failed experiments, and generate publishable results for a final deep learning report.</p>
             <h5 style="color:darkblue;"><strong>About Dr. Issam Laradji</strong></h5>
             <p>Issam Laradji is currently a Research Scientist at ServiceNow company. He is interested at developing methods that require weaker supervision in order to reduce the amount of effort humans need for acquiring training sets. His current focus is on 3D computer vision that touch on rendering, synthesizing novel scenes, and learning to infer physical properties of objects. On the side, he occasionally works on new optimization methods for deep learning. He also continuously works on and maintains Haven-AI (https://github.com/haven-ai/haven-ai) which is a library for running, managing and visualizing large scale experiments in the hopes to make machine learning research accessible and reproducible to people.</p>
             </div>
          </div>
          <!-- Tenth speaker -->
          <br>        <br>        
          <div class="container-fluid row wow zoomIn" data-wow-delay="0.5s">
              <div class="col-md-2 ">
                  <img src="img/Speakers/Lahouari_Ghouti.jpg" alt="Main Guest Speaker" class="img-fluid" style="height: 200px; width: 150px;">
              </div>
              <div class=" col-md-10">
              <h2 style="color:darkblue;"><strong> Dr. Lahouari Ghouti, Associate Professor of Computer Science. Prince Sultan University. Riyadh, Saudi Arabia</strong></h2>
              <h3 style="color:darkblue;">Machine Learning Pipelines Using Scikit-learn and Pandas <strong>(Tuesday 01st of March 2022 --Morning Session--)</strong></h3>
              <p>Machine learning pipeline consists of multiple steps to train a model covering data extraction, preprocessing, and model training. In this tutorial we will learn how to write clean, well-organized machine learning pipelines using pandas and scikit-learn. We will cover the design principles of scikit-learn, how to use pandas with scikit-learn, writing custom transformers, dealing with heterogeneous data (numerical, categorical, text, and dates), debugging your pipeline, and ways to deploy the model after the training.</p>
              <h5 style="color:darkblue;"><strong>About Dr. Lahouari Ghouti</strong></h5>
              <p>Dr. Lahouari Ghouti is an Associate Professor of Computer Science at Prince Sultan University, Riyadh, Saudi Arabia. Dr. Ghouti has an extensive experience in academia and consultancy with more than 80 publications and 28 US patents. The research interests of Dr. Ghouti are centered around machine and deep learning.</p>
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
                            <a href="index.html">Home</a>
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