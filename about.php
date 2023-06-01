<?php 
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>about</title>
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
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> -->
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
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
   </head>
   <body>
     <!--start of header-->
      <!-- <div class="header_section header_bg">
         <div class="container-fluid">
               <div class="main">
                  <div class="logo"><a href="#"><img src="images/logo.jpg" style="width: 90px; height: 90px;" ></a></div>
                  <div class="menu_text">
                     <ul>
                        <div class="togle_">
                           <div class="menu_main">
                              <ul>
                                 <li><a href="file:///C:/Users/pc/Desktop/lastes/register%20of%20page.html">Login</a></li>
                                 <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                              </ul>
                           </div>
                        </div>
                        <div id="myNav" class="overlay">
                           <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                           <div class="overlay-content">
                              <a href="file:///C:/Users/pc/Desktop/lastes/HOMEE.html">Home</a>
                              <a href="file:///C:/Users/pc/Desktop/lastes/about.html">About</a>
                              <a href="file:///C:/Users/pc/Desktop/lastes/signin%20page%20.html">sign up</a>
                             
                          
                           </div>
                        </div>
                        <span class="navbar-toggler-icon"></span>
                        <span onclick="openNav()"><img src="images/toogle-icon.png" class="toggle_menu"></span>
                        <span onclick="openNav()"><img src="images/toogle-icon1.png" class="toggle_menu_1"></span>
                     </ul>
                  </div>
               </div>
            </div> -->
            <div>
        <nav class="navbar navbar-expand-lg z-1" id="nav">
            <div class="container-fluid">
              <a class="navbar-brand" href="Teachers_Home.php"><img src="./images/logo.jpg" style=" border-radius: 50%;" alt="" class="w-50"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse search navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav nave-link ms-auto mb-2 mb-lg-0">
                      <li class="nav-item ">
                          <a class="nav-link m" aria-current="page" href="Teachers_Home.php">Home</a>
                        </li>
                        <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="about.php">About</a>
                  </li>
                  <li class="nav-item"><?php if (isset($_SESSION['Name']) && $_SESSION['Name']): ?>
                    <a class="nav-link" aria-current="page" href="./exame/index.html">Exams</a>
                  </li>
                  <?php else: ?>
            <li class="nav-item">
              </li>
              <?php endif; ?>
                </ul>
            </div>
            <!-- <input class="form-control " id="search" name="search"  placeholder="Search" > -->
            <section class="home-sec">
        <div class="form-group">
          <input
            placeholder="Search for Teachers"
            type="text"
            class="form-control input-lg home_search_for"
            name="search_for"
            id="search"
            autocomplete="off"
          />
<i class="fa fa-search home_search_for-i"></i>
        </div>
      </div>
    </section>
            <li class="nav-item username ms-5"><?php  if (isset($_SESSION['Name']) && $_SESSION['Name']): ?>
                                        <a href="profile.php" class="nav-link username"><?php echo($_SESSION['Name']); ?></a>
                                    </li>
                                 <?php else: ?>
            <li class="nav-item">
                <a class="nav-link fa-solid fa-user me-2" aria-current="page" href="signin__page.php">login</a>
              </li>
              <?php endif; ?>
            </div>
          </nav>
      </div>
           <!--end of header-->
            <div class="container">
               <div class="about_taital_main">
                  <h2 class="about_tag" style="-webkit-text-fill-color: black;">About Teachers Online</h2>
               </div>
            </div>
        
      </div>
    
      <div class="about_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="about_img"><img src="images/img-1.png"></div>
               </div>
               <div class="col-md-6">
                  <h1 class="about_taital">Teachers website what it is?</span></h1>
                  <p class="about_text">when looking at its layout. The point of using website is that find your teacher easliy</p>
                  <div class="read_bt"><a href="#">Read More</a></div>
               </div>
            </div>
         </div>
      </div>
    
      <div class="footer_section layout_padding" style="background-color: rgba(10, 10, 114, 0.342);">
         <div class="container">
            <div class="footer_section_2">
               <div class="row">
                  <div class="col-lg-3 col-sm-6">
                     <h2 class="useful_text">About</h2>
                     <p class="footer_text">Many students find it difficult to choose their suitable teacher </p>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <h2 class="useful_text">Contact Us</h2>
                     <div class="location_text">
                        <ul>
                           <li>
                              <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>
                              <span class="padding_15">Location</span></a>
                           </li>
                           <li>
                              <a href="#"><i class="fa fa-phone" aria-hidden="true"></i>
                              <span class="padding_15">Call +01 ******</span></a>
                           </li>
                           <li>
                              <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>
                              <span class="padding_15">ONteachers@gmail.com</span></a>
                           </li>
                        </ul>
                     </div>
                  </div>
                  
               </div>
            </div>
         </div>
      </div>
     
     
      <div class="copyright_section">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <p class="copyright_text">© 2023 All Rights Reserved.</p>
               </div>
            </div>
         </div>
      </div>
   
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