<?php
    include 'auth-doc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="dashboard.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <title>Doctors</title>
</head>
<body>
<nav class="nav-1 bg-purple-950 navbar navbar-expand-lg fixed z-10">
      <div class="container">
        <!-- <div class="col-md-6"> -->
        <h1 class="d-flex justify-content-center text-2xl text-white">control panal</h1>
          <h4 class="nav-link-1 mt-1 proflie">
            <?php if (isset($_SESSION['name']) && $_SESSION['name']) ?> 
              <?php echo($_SESSION['name']); ?>
          </h4>
      </div>
    </nav>
    <div class="d-flex justify-content-lg-between justify-content-center">
        <div class="col-lg-1 col-1" id='nav'>
            <nav class="bg-gray-950 h-screen d-none d-lg-block fixed">
              <!-- <h1 class="d-flex justify-content-center text-2xl text-white mt-5">Health medical</h1>
              <h1 class="d-flex justify-content-center text-xl text-white">control panal</h1> -->
              </ul>
                <ul class="nav flex-column d-flex h-screen" style="margin-top: 90px;">
                    <li>
                        <a class="nav-link btn-nav fa-solid fa-chart-line d-flex align-items-center text-white active" aria-current="page" href="Dashboard.php"><span class="ms-1 font-normal font-sans text-base">Dashboard</span></a>
                    </li>
                    <li>
                        <a class="nav-link btn-nav fa-solid fa-hospital-user d-flex align-items-center text-white" aria-current="page" href="users.php"><span class="ms-1 font-normal font-sans text-base">Patients</span></a>
                    </li>
                    <li>
                        <a class="btn-nav fa-solid fa-user-doctor nav-link d-flex align-items-center text-white" aria-current="page" href="doctors.php"><span class="ms-1 font-normal font-sans text-base">Doctors</span></a>
                    </li>
                    <li>
                        <a class="btn-nav fa-solid fa-user nav-link d-flex align-items-center text-white" aria-current="page" href="Trainee.php"><span class="ms-1 font-normal font-sans text-base">Trainee</span></a>
                    </li>
                    <!-- <li>
                        <a class="btn-nav fa-solid fa-gear nav-link d-flex align-items-center text-white" href="Settings.php"><span class="ms-1 font-normal font-sans text-base">Settings</span></a>
                    </li> -->
                    <li>
                        <a class="btn-nav fa-solid fa-file-circle-plus nav-link d-flex align-items-center text-white" aria-current="page" href="Bookings.php"><span class="ms-1 font-normal font-sans text-base">Bookings</span></a>
                    </li>
                    <li>
                        <a class="btn-nav fa-solid fa-arrow-right-from-bracket nav-link d-flex align-items-center text-white" href="logout.php"><span class="ms-1 font-normal font-sans text-base">Logout</span></a>
                    </li>
                </ul>
            </nav>
        </div>

    <nav class="navbar bg-body-tertiary fixed-top d-lg-none d-block h-" >
    <div class="container-fluid">
    <button class="navbar-toggler mt-5" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="col-12">
        <div class="offcanvas offcanvas-start bg-dark" style="width: 530px;" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <h1 class="offcanvas-title text-white"  style="font-size: 30px !important;" id="offcanvasNavbarLabel">Menu</h1>
            <button type="button" class="btn-close fa-solid fa-xmark" style="width:50px; color: white; font-size: 20px" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
          <div class="offcanvas-body">
          <ul class="nav flex-column d-flex align-items-center py-20">
                        <li>
                            <a class="btn-nav-res fa-solid fa-chart-line text-white" style="font-size: 25px !important;" aria-current="page" href="#"><span class="ms-1 font-normal font-sans text-base"  style="font-size: 25px !important;">Dashboard</span></a>
                        </li>
                        <li class="mt-5">
                            <a class="btn-nav-res fa-solid fa-hospital-user text-white" style="font-size: 25px !important;" aria-current="page" href="users.php"><span class="ms-1 font-normal font-sans text-base"  style="font-size: 25px !important;">Patients</span></a>
                        </li>
                        <li class="mt-4">
                            <a class="btn-nav-res fa-solid fa-user-doctor text-white " style="font-size: 25px !important; margin-top: 30px" aria-current="page" href="Doctors.php"><span class="ms-1 font-normal font-sans text-base"  style="font-size: 25px !important;">Doctors</span></a>
                        </li>
                        <li class="mt-4">
                            <a class="btn-nav-res fa-solid fa-user text-white " style="font-size: 25px !important; margin-top: 30px" aria-current="page" href="Trainee.php"><span class="ms-1 font-normal font-sans text-base"  style="font-size: 25px !important;">Trainee</span></a>
                        </li>
                        <!-- <li class="mb-5 mt-5">
                            <a class="btn-nav-res fa-solid fa-gear text-white" style="font-size: 25px !important; margin-top: 30px" href="Settings.php"><span class="ms-1 font-normal font-sans text-base"  style="font-size: 25px !important;">Settings</span></a>
                        </li> -->
                        <li class="mt-5">
                            <a class="btn-nav fa-solid fa-file-circle-plus nav-link d-flex align-items-center text-white" style="font-size: 25px !important; margin-top: 30px" aria-current="page" href="Bookings.php"><span class="ms-1 font-normal font-sans text-base" style="font-size: 25px !important;">Bookings</span></a>
                        </li>
                        <li class="mt-4">
                            <a class="btn-nav-res fa-solid fa-arrow-right-from-bracket text-white" style="font-size: 25px !important; margin-top: 30px" href="logout.php"><span class="ms-1 font-normal font-sans text-base"  style="font-size: 25px !important;">Logout</span></a>
                        </li>
                    </ul>
          </div>
        </div>
    </div>
  </div>
</nav>
<div class="col-12 col-lg-10">
<div class="container dashboard-p mt-5">
                <h1 class="text-3xl">Dashboard</h1>
            </div>
  <div class="card text-bg-primary mt-20 me-2">
      <div class="card-body mt-4">
        <h1 class="text-4xl card-text"><i class="me-5 fa-solid fa-hospital-user"></i><?php 
        $sql = "SELECT count(*) FROM patient ";
        $result = $conn->query($sql);
        while($row = mysqli_fetch_array($result)) {
            echo $row['count(*)'];
            echo "<br />";
        }
        ?></h1><p class="text-base">Patients</p>
      </div>
    </div>
    <div class="card text-bg-secondary mt-20 me-2">
      <div class="card-body mt-4">
        <p class="text-4xl card-text"><i class="me-5 fa-solid fa-user-doctor"></i>
        <?php 
        $sql = "SELECT count(*) FROM doctors ";
        $result = $conn->query($sql);
        while($row = mysqli_fetch_array($result)) {
            echo $row['count(*)'];
            echo "<br />";
        }
        ?></h1><p class="text-base">Doctors</p>
        </p>
      </div>
    </div>
    <div class="card text-bg-success mt-20 me-2 mb-5">
      <div class="card-body mt-4">
        <p class="text-4xl card-text"><i class="me-5 fa-solid fa-user"></i>
        <?php 
        $sql = "SELECT count(*) FROM trainee ";
        $result = $conn->query($sql);
        while($row = mysqli_fetch_array($result)) {
            echo $row['count(*)'];
            echo "<br />";
        }
        ?></h1><p class="text-base">Trainee</p>
        </p>
      </div>
    </div>
</div>
</body>
</html>