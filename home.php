<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home</title>
        <link rel = "icon" href = 
        "images/logo.jpg" 
                type = "image/x-icon">
        <!-- basic -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- mobile metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">
        <!-- site metas -->
        <title>About</title>
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- bootstrap css -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <!-- Responsive-->
        <link rel="stylesheet" href="css/responsive.css"> 
        <!-- Scrollbar Custom CSS -->
        <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
        <!-- Tweaks for older IEs-->
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
        <!-- owl stylesheets --> 
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    

    </head>
    <body>
        <!--start of header-->
      <div class="header_section" style="background-color: #fff2e1;">
        <div class="container-fluid">
              <div class="main">
                 <div class="logo"><a href="#"><img src="images/logo.jpg" style="width: 90px; height: 80px;" ></a></div>
                 <div class="menu_text">
                    <ul>
                       <div class="togle_">
                          <div class="menu_main">
                              <ul>
                                     <li><?php session_start(); if (isset($_SESSION['Name']) && $_SESSION['Name']): ?> 
                                        <?php echo($_SESSION['Name']); ?>
                                    </li>
                                 <?php else: ?>
                                <li><a href="signin_page.php">Login</a></li>
                                <?php endif; ?>
                                <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                            </ul>
                          </div>
                       </div>
                       <div id="myNav" class="overlay">
                          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                          <div class="overlay-content">
                             <a href="home.php">Home</a>
                             <a href="about.php">About</a>
                             <a href="profile.pho">Edit profile</a>
                             <a href="register_of_page.php">Sign up</a>
                             <a href="logout.php">Logout</a>
                          </div>
                       </div>
                       <span class="navbar-toggler-icon"></span>
                       <span onclick="openNav()"><img src="images/toogle-icon.png" class="toggle_menu"></span>
                       <span onclick="openNav()"><img src="images/toogle-icon1.png" class="toggle_menu_1"></span>
                    </ul>
                 </div>
              </div>
           </div>
       </div>
     <!--end of header-->
 <br>
     <!-- teacher info Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Teachers</h6>
                <h1 class="mb-5">Teacher's info</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="images/2.jpg">
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2">Religion</small>
                            <small class="flex-fill text-center border-end py-2">20$</small>
                            <small class="flex-fill text-center py-2">per hour</small>
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-0">Hager Abodeif</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p>Im Certified Quran teacher connected to the Prophet</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="#" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="payment.html" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="images/3.jpg" alt="">
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2">Biology</small>
                            <small class="flex-fill text-center border-end py-2">25$</small>
                            <small class="flex-fill text-center py-2">   per hour</small>
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-0">Farah Nasr</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p>HELLO!! Im Farah Nasr with a masters degree in Biology</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="#" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="payment.html" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="package-item">
                        <div class="overflow-hidden" .img-flui>
                            <img class="img-fluid" style="height: 350px;" src="images/4.jpg" alt="" >
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2">Mechanics</small>
                            <small class="flex-fill text-center border-end py-2">10$</small>
                            <small class="flex-fill text-center py-2">per hour</small>
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-0">Abdalrhman Naser</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p>Mechanical Engineer</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="#" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="payment.html" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" style="height: 350px;" src="images/55.jpg" alt="">
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2">   Arabic</small>
                            <small class="flex-fill text-center border-end py-2">  30$</small>
                            <small class="flex-fill text-center py-2">   per hour</small>
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-0">Gehad Eldeeb</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p>Three years of experience  </p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="#" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="payment.html" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid"  style="height: 350px;" src="images/6.jpg" alt="">  
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2">physics</small>
                            <small class="flex-fill text-center border-end py-2">15$</small>
                            <small class="flex-fill text-center py-2">per hour</small>
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-0">Safaa Muhammed</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p>I have the ability and sufficient experience to raise the academi</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="#" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="payment.html" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid"  style="height: 350px;" src="images/7.jpg" alt="">
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2">   Math</small>
                            <small class="flex-fill text-center border-end py-2">  18$</small>
                            <small class="flex-fill text-center py-2">   Per hour</small>
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-0">Teacher Fatma</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p>Math teacher experience for 4 years</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="#" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="payment.html" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-xxl py-5">
        
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid"  style="height: 350px;" src="images/8.jpg" alt="">
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2">   English</small>
                            <small class="flex-fill text-center border-end py-2">   13$</small>
                            <small class="flex-fill text-center py-2">   Per hour</small>
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-0">Ahmed Alatir</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p>English teacher</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="#" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="payment.html" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            
    <!-- teacher info End -->



    <!-- Template Javascript -->
    <script src="js/main.js"></script>
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
              
         $(".zoom").hover(function(){
              
         $(this).addClass('transition');
         }, function(){
              
         $(this).removeClass('transition');
         });
         });
      </script> 
      <script>
         function openNav() {
         document.getElementById("myNav").style.width = "100%";
         }
         function closeNav() {
         document.getElementById("myNav").style.width = "0%";
         }
      </script> 
    </body>
</html>