<?php
    include 'auth-teachers.php';
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
    <title>Teachers</title>
</head>
<body>
<nav class="nav-1 bg-red-950 navbar navbar-expand-lg fixed z-10">
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
                        <a class="nav-link btn-nav fa-solid fa-chart-line d-flex align-items-center text-white" aria-current="page" href="Dashboard.php"><span class="ms-1 font-normal font-sans text-base">Dashboard</span></a>
                    </li>
                    <li>
                        <a class="nav-link btn-nav fa-solid fa-graduation-cap d-flex align-items-center text-white" aria-current="page" href="users.php"><span class="ms-1 font-normal font-sans text-base">Students</span></a>
                    </li>
                    <li>
                        <a class="nav-link btn-nav fa-solid fa-chalkboard-user d-flex align-items-center text-white active" aria-current="page" href="teachers.php"><span class="ms-1 font-normal font-sans text-base">Teachers</span></a>
                    </li>
                    <li>
                        <a class="btn-nav fa-solid fa-book nav-link d-flex align-items-center text-white" aria-current="page" href="corses.php"><span class="ms-1 font-normal font-sans text-base">Courses</span></a>
                    </li>
                    <li>
                        <a class="btn-nav fa-solid fa-file-circle-plus nav-link d-flex align-items-center text-white" aria-current="page" href="Bookings.php"><span class="ms-1 font-normal font-sans text-base">Bookings</span></a>
                    </li>
                    <!-- <li>
                        <a class="btn-nav fa-solid fa-gear nav-link d-flex align-items-center text-white" href="Settings.php"><span class="ms-1 font-normal font-sans text-base">Settings</span></a>
                    </li> -->
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
                            <a class="btn-nav-res fa-solid fa-chart-line text-white" style="font-size: 25px !important;" aria-current="page" href="Dashboard.php"><span class="ms-1 font-normal font-sans text-base"  style="font-size: 25px !important;">Dashboard</span></a>
                        </li>
                        <li class="mt-5">
                            <a class="btn-nav-res fa-solid fa-graduation-cap text-white" style="font-size: 25px !important;" aria-current="page" href="users.php"><span class="ms-1 font-normal font-sans text-base"  style="font-size: 25px !important;">Students</span></a>
                        </li>
                        <li class="mt-4">
                            <a class="btn-nav-res fa-solid fa-chalkboard-user text-white " style="font-size: 25px !important; margin-top: 30px" aria-current="page" href="teachers.php"><span class="ms-1 font-normal font-sans text-base"  style="font-size: 25px !important;">Teachers</span></a>
                        </li>
                        <li class="mt-4">
                            <a class="btn-nav-res fa-solid fa-book text-white " style="font-size: 25px !important; margin-top: 30px" aria-current="page" href="corses.php"><span class="ms-1 font-normal font-sans text-base"  style="font-size: 25px !important;">Courses</span></a>
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

    <div class="col-lg-10 col-12">
    <button class="btn d-lg-block d-none" id='open-nav'>Close</button>
    <div class="container data-table dash mb-5">
                <h1 class="text-3xl">Teachers</h1>
                <input class="mt-2 search-input" type="text" id="search" placeholder="Search" />
   <br>
   <div id="display"></div>
   <!-- Suggestions will be displayed in below div. -->
                            
                    <table class="table table-hover my-10">
                        <!-- <th class="bg-light">id </th> -->
                        <th class="bg-light"> #</th>
                        <th class="bg-light"> Username</th>
                        <th class="bg-light"> Phone</th>
                        <th class="bg-light"> Specialization</th>
                        <th class="bg-light"> Email</th>
                        <th class="bg-light"> Action</th>
                            
                            <?php
                            while($row = mysqli_fetch_array($result)) {
                            echo "<tr>";
                            ?>
                        <td><?php echo $row[0];?></td>
                        <td><?php echo $row[1];?></td>
                        <td><?php echo $row[2];?></td>
                        <td><?php echo $row[3];?></td>
                        <td><?php echo $row[4];?></td>
                        <td>
                    <!-- hena el row[0] ma3naha awl column fel db el hoa el id fana bab3to ma3 el click 3ashen a3raf amyz  -->
                    <a class="btn btn-warning  mt-2" href="Edit-teacher.php?Teach_id=<?php echo $row[0];?>"> Edit</a>
                        <a class="btn btn-danger  mt-2" href="delete-teachers-action.php?Teach_id=<?php echo $row[0];?>"> Delete</a>
                    </td>
                <?php  echo "</tr>";
            }
        ?>
    </div>
</div>
</div>
<script src="./search-tranee.js"></script>
</body>
</html>