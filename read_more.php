<?php
include 'conn.php';
include 'auth.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>Read more</title>
</head>
<body>
<div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light z-1" id="nav">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"><img src="./images/logo.jpg" style=" border-radius: 50%;" alt="" class="w-50"></a>
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
            <input class="form-control " id="search" name="search"  placeholder="Search" >
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
      <?php 
        // $sql="select * from `teacher` where Teach_id='$_GET[Teach_id]'";
        $rs=mysqli_query($conn, "SELECT * FROM `teacher` where Teach_id='$_GET[Teach_id]'");
          $row = mysqli_fetch_array($rs)
            
            ?>
            <div class="container mt-5">
              <div
          class="row justify-content-lg-between justify-content-center content-sec1"
          >
          <div class="col-lg-4 col-12">
          <?php echo '<img class="img-fluid" src="data:image;base64,'.base64_encode($row['img']).'">' ?>
          </div>
          <div class="mb-5 mt-4 col-lg-7 col-12">
            <h1>About Teacher</h1>
                  <h3><?php echo $row['Name']; ?></h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aliquid aut, omnis laudantium asperiores eum ullam placeat delectus, dolor, officia illum dolorem aliquam ab debitis. Sapiente laudantium at excepturi beatae.</p>
          </div>
</body>
</html>