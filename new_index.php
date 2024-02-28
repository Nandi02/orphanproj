<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>

     <title>We Connect</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/aos.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-gymso-style.css">
     <style>
        .hero {
            background-image: url('images/kid1.jpg');
            background-size: cover;
            background-position: top;
            background-repeat: no-repeat;
            vertical-align: middle;
            min-height: 100vh;
            position: relative;
           
          }
          .local:hover{
              color:lightblue !important;
              border: 10px;
              border-radius: 10px;
          }
     </style>

</head>
<body data-spy="scroll" data-target="#navbarNav" data-offset="50">

    <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="new_index.php">We Connect</a>
        </div>
    </nav>
     <section class="hero d-flex flex-column justify-content-center align-items-center" id="home">
       
            <div class="bg-overlay"></div>

               <div class="container">
                    <div class="row">

                         <div class="col-lg-8 col-md-10 mx-auto col-12">
                              <div class="hero-text mt-5 text-center">

                                    <h6 data-aos="fade-up" data-aos-delay="300">A new way to connect kids with parents </h6>

                                    <h1 class="text-white" data-aos="fade-up" data-aos-delay="500">Find yourself in we connect</h1>

                                    <a href="#feature" class="btn custom-btn mt-3" data-aos="fade-up" data-aos-delay="600">Get started</a>

                                    <a href="#about" class="btn custom-btn bordered mt-3" data-aos="fade-up" data-aos-delay="700">learn more</a>
                                   
                              </div>
                         </div>

                    </div>
               </div>
     </section>


     <section class="feature" id="feature">
        <div class="container">
            <div class="row">

                <div class="d-flex flex-column justify-content ml-lg-auto mr-lg-4 col-lg-4 col-md-6 col-12">
                    <h2 class="mb-3 text-white" data-aos="fade-up">New to the We Connect</h2>

                    <h6 class="mb-4 text-white" data-aos="fade-up">We are good to have you here</h6>

                    <p data-aos="fade-up" data-aos-delay="200">WeConnect is non profitable organization Where 1000 of kids have gotten there home and so many parents have found their kid in our organization so we welcome you and have a great full day, our team is glad to have you here. </p>

                     </div>
                     <div class="ml-lg-auto col-lg-3 col-md-6 col-12" style="top:0px;" data-aos="fade-up" data-aos-delay="700">
                                <div class="team-thumb">
                                    <img src="images/team/men_in.jpg" class="img-fluid" alt="Trainer" style="height:400px; width:250px">

                                    <div class="team-info d-flex flex-column">

                                        <h3>1RN22MC031 </h3>
                                        <span>CEO</span>

                                        <ul class="social-icon mt-3">
                                            <li><a href="#" class="fa fa-twitter"></a></li>
                                            <li><a href="#" class="fa fa-instagram"></a></li>
                                        </ul>
                                    </div>
                                </div>
        </div>
              
                
               
                     </div>
                </div>

            </div>
        </div>
    </section>

<!--  <div class="d-flex flex-column justify-content ml-lg-auto mr-lg-4 col-lg-4 col-md-6 col-12">
                    <h2 class="mb-3 text-white" data-aos="fade-up"></h2>

                    <h6 class="mb-4 text-white" data-aos="fade-up"></h6>

                    <p data-aos="fade-up" data-aos-delay="200"></p>
-->
     <!-- ABOUT -->
     <section class="about section" id="about">
               <div class="container">
                    <div class="row">

                            <div class="mt-lg-5 mb-lg-0 mb-4 col-lg-5 col-md-10 mx-auto col-12">
                                <h2 class="mb-4" data-aos="fade-up" data-aos-delay="300">Hello, we are Connectors</h2>

                                <p data-aos="fade-up" data-aos-delay="400">This is a socital project which connects kids with parents built by (1RN22MC031) and (1RN22MC034)</p>

                                <p data-aos="fade-up" data-aos-delay="500"> Thank you.</p>
                                <p data-aos="fade-down" data-aos-delay="700"><strong>Mission:</strong> To get details of organizations just click the buttons bellow</p>
                                <a href="main_dash.php"><button value="Show" name="show" class="bg bg-primary local" style="height:80px;width:100px;">Show</button></a>
        </div>
                             
                    </div>
               </div>
     </section>


    


                     

     <!-- SCRIPTS -->
     <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/aos.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>