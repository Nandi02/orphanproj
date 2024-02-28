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
     </style>

</head>
<body data-spy="scroll" data-target="#navbarNav" data-offset="50">

    <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">

            <a class="navbar-brand" href="index_main.php">We Connect</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-lg-auto">
                    <li class="nav-item">
                        <a href="#home" class="nav-link smoothScroll">Home</a>
                    </li>

                    <li class="nav-item">
                        <a href="#about" class="nav-link smoothScroll">About Us</a>
                    </li>

                    <li class="nav-item">
                        <a href="#schedule" class="nav-link smoothScroll">Our Gatherings</a>
                    </li>

                    <li class="nav-item">
                        <a href="#contact" class="nav-link smoothScroll">Contact</a>
                    </li>
                </ul>

                <ul class="social-icon ml-lg-3">
                    <li><a href="#" class="fa fa-facebook"></a></li>
                    <li><a href="#" class="fa fa-twitter"></a></li>
                    <li><a href="#" class="fa fa-instagram"></a></li>
                </ul>
            </div>

        </div>
    </nav>


     <!-- HERO -->
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

                    <h6 class="mb-4 text-white" data-aos="fade-up">create a (Gurdian) user account</h6>

                    <p data-aos="fade-up" data-aos-delay="200">WeConnect is non profitable organization Where <a rel="nofollow" href="https://www.tooplate.com" target="_parent">We Connect</a> connects kids with their parents</p>

                    <a href="user_login.php" class="btn custom-btn bg-color mt-3" data-aos="fade-up" data-aos-delay="300"  >User Account</a>
                </div>

                <div class="d-flex flex-column justify-content ml-lg-auto mr-lg-4 col-lg-4 col-md-6 col-12">
                    <h2 class="mb-3 text-white" data-aos="fade-up">New to the We Connect</h2>

                    <h6 class="mb-4 text-white" data-aos="fade-up">create a (Administartor) user account</h6>

                    <p data-aos="fade-up" data-aos-delay="200">WeConnect is non profitable organization Where We Connect connects kids with their parents</p>

                    <a href="login.php" class="btn custom-btn bg-color mt-3" data-aos="fade-up" data-aos-delay="300"  >Admin Account</a>
               
                     </div>
                </div>

            </div>
        </div>
    </section>


     <!-- ABOUT -->
     <section class="about section" id="about">
               <div class="container">
                    <div class="row">

                            <div class="mt-lg-5 mb-lg-0 mb-4 col-lg-5 col-md-10 mx-auto col-12">
                                <h2 class="mb-4" data-aos="fade-up" data-aos-delay="300">Hello, we are Connectors</h2>

                                <p data-aos="fade-up" data-aos-delay="400">This is a socital project which connects kids with parents built by (1RN22MC031) and (1RN22MC034)</p>

                                <p data-aos="fade-up" data-aos-delay="500"> Thank you.</p>

                            </div>

                            <div class="ml-lg-auto col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="700">
                                <div class="team-thumb">
                                    <img src="images/team/men_in.jpg" class="img-fluid" alt="Trainer" style="height:400px; width:250px">

                                    <div class="team-info d-flex flex-column">

                                        <h3>1RN22MC031 </h3>
                                        <span></span>

                                        <ul class="social-icon mt-3">
                                            <li><a href="#" class="fa fa-twitter"></a></li>
                                            <li><a href="#" class="fa fa-instagram"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="mr-lg-auto mt-5 mt-lg-0 mt-md-0 col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="800">
                                <div class="team-thumb">
                                    <img src="images/team/woman_in.jpg" class="img-fluid" alt="Trainer" style="height:400px; width:250px">

                                    <div class="team-info d-flex flex-column">

                                        <h3>1RN22MC034</h3>
                                        <span></span>

                                        <ul class="social-icon mt-3">
                                            <li><a href="#" class="fa fa-instagram"></a></li>
                                            <li><a href="#" class="fa fa-facebook"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                    </div>
               </div>
     </section>


     <!-- CLASS -->
     <section class="class section" id="class">
               <div class="container">
                    <div class="row">

                            <div class="col-lg-12 col-12 text-center mb-5">
                                <h6 data-aos="fade-up">Find A Perfect Trusted Party</h6>

                                <h2 data-aos="fade-up" data-aos-delay="200">Our Gatherings</h2>
                             </div>

                            <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                                <div class="class-thumb">
                                    <img src="images/class/mith.jpg " class="img-fluid" alt=" no Class">

                                    <div class="class-info">
                                        <h3 class="mb-1"> Mithun Chakraborty</h3>
    </div>
                                </div>
                            </div>

                            <div class="mt-5 mt-lg-0 mt-md-0 col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="500">
                                <div class="class-thumb">
                                    <img src="images/class/sushmitha.jpg " class="img-fluid" alt="no Class">

                                    <div class="class-info">
                                        <h3 class="mb-1">Sushmita Sen</h3>

                               <!--         <span><strong>Trained by</strong> - Mary</span>

                                        <span class="class-price">$66</span>

                                        <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                               -->     </div>
                                </div>
                            </div>

                            <div class="mt-5 mt-lg-0 col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="600">
                                <div class="class-thumb">
                                    <img src="images/class/mandirbrdi.jpg " class="img-fluid" alt="no image">

                                    <div class="class-info">
                                        <h3 class="mb-1">Mandira Bedi and Raj Kaushal
                                        </h3>

                                      </div>
                                </div>
                            </div>

                    </div>
               </div>
     </section>



     <!-- CONTACT -->
     <section class="contact section" id="contact">
          <div class="container">
               <div class="row">

                    <div class="ml-auto col-lg-5 col-md-6 col-12">
                        <h2 class="mb-4 pb-2" data-aos="fade-up" data-aos-delay="200">Feel free to ask anything</h2>

                        <form action="#" method="post" class="contact-form webform" data-aos="fade-up" data-aos-delay="400" role="form">
                            <input type="text" class="form-control" name="cf-name" placeholder="Name">

                            <input type="email" class="form-control" name="cf-email" placeholder="Email">

                            <textarea class="form-control" rows="5" name="cf-message" placeholder="Message"></textarea>

                            <button type="submit" class="form-control" id="submit-button" name="submit">Send Message</button>
                        </form>
                    </div>

                    <div class="mx-auto mt-4 mt-lg-0 mt-md-0 col-lg-5 col-md-6 col-12">
                        <h2 class="mb-4" data-aos="fade-up" data-aos-delay="600">Where you can <span>find us</span></h2>

                        <p data-aos="fade-up" data-aos-delay="800"><i class="fa fa-map-marker mr-1"></i> #</p>
<!-- How to change your own map point
	1. Go to Google Maps
	2. Click on your location point
	3. Click "Share" and choose "Embed map" tab
	4. Copy only URL and paste it within the src="" field below
-->
                        <div class="google-map" data-aos="fade-up" data-aos-delay="900">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31104.14990398074!2d77.51214274771404!3d12.970652711181508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae3dd95efc3ae7%3A0xc90db791aedd9aad!2sVijayanagar%2C%20Bengaluru%2C%20Karnataka!5e0!3m2!1sen!2sin!4v1707624082273!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
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