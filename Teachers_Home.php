<?php 
    include 'conn.php';
?>
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
      <div>
        <nav class="navbar navbar-expand-lg  z-1" id="nav">
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
                  <li class="nav-item"><?php session_start(); if (isset($_SESSION['Name']) && $_SESSION['Name']): ?>
                    <a class="nav-link" aria-current="page" href="./exame/index.html">Exams</a>
                  </li>
                  <?php else: ?>
            <li class="nav-item">
              </li>
              <?php endif; ?>
                </ul>
            </div>
            <!-- <input class="form-control " id="search" name="search"  placeholder="Search" ><i class="fa fa-search home_search_for-i"></i> -->
            <section class="home-sec">
        <div class="form-group">
          <input
            placeholder="Search for Book, Author or Category"
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
 <br>
     <!-- teacher info Start -->
     <div id="display"></div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Teachers</h6>
                <h1 class="mb-5">Teacher's info</h1>
            </div>
            
    <!-- teacher info End -->
    <div class="container">
        <div class="row justify-content-center">
            <?php 
    $query = "select * from `teacher`";
    $query_run=mysqli_query($conn,$query);
    while ($row =mysqli_fetch_array($query_run)) {
        ?>
        <div class="col-12 col-md-6 col-lg-6 mb-5">
        <!-- <div class="row"> -->
                <div class="package-item">
                        <div>
                                <?php echo '<img src="data:image;base64,'.base64_encode($row['img']).'" style="
    width: 1000px;
">' ?>
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2"><?php echo $row['Spaecialization'] ?></small>
                            <small class="flex-fill text-center border-end py-2"><?php echo $row['price'] ?></small>
                            <small class="flex-fill text-center py-2">per hour</small>
                        </div>
                        <div class="text-center p-4">
                            <a href="read_more.php">
                                <h3 class="mb-0"><?php echo ($row['Name']) ?></h3>
                            </a>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="read_more.php?Teach_id=<?php echo $row[0];?>" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="payment.php?Teach_id=<?php echo $row[0];?>" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
                ?>
</div>
</div>
</div>
</div>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="./js/bootstrap.min.js"></script>
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
      <script src="search.js"></script>
      <script src="action.js"></script>
    </body>
</html>