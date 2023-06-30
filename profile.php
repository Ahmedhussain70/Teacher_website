<?php 
    include 'conn.php';
    session_start();
    $id=$_SESSION['Stu_id'];
    $query = "SELECT * FROM `student` WHERE Stu_id = '$id'";
    $query_run=mysqli_query($conn,$query);
    while ($row = mysqli_fetch_array($query_run)) {
         $name=$row['Name'];
         $Phone=$row['Phone'];
         $City=$row['City'];
         $email=$row['email'];
         $password=$row['password'];
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Profile</title>
        <link rel = "icon" href = 
        "file:///C:/Users/DELL/Desktop/lastes/images/logo.jpg" 
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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
        <link rel="stylesheet" href="style.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <style>
        body {
    background: rgb(190, 171, 196)
}

.form-control:focus {
    box-shadow: none;
    border-color: #a992ae
}

.profile-button {
    background: rgb(170, 140, 181);
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #dab7e0
}

.profile-button:focus {
    background: #b769c4;
    box-shadow: none
}

.profile-button:active {
    background: #9a8670;
    box-shadow: none
}

.back:hover {
    color: #837386;
    cursor: pointer
}

.labels {
    font-size: 11px
}

.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
}

    </style>
    </head>
  <body>
      <div class="container rounded bg-white mt-5 mb-5">
          <div class="row">
              <div class="col-md-3 border-right">
            <a href="Teachers_Home.php"><i class="fa-solid fa-arrow-left mt-4"></i></a>
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold"><?php echo $_SESSION['Name'];?></span><span class="text-black-50"><?php  echo $_SESSION['email']; ?></span><span> </span></div>
        </div>
        <div class="col-md-7 ">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <form action="Edit-action.php" method="post">
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Name</label><input name="Name" type="text" class="form-control" placeholder="Username" value="<?php echo  $name;?>"></div>
                    <div class="col-md-6"><label class="labels">Mobile Number</label><input class="form-control" name="Phone" placeholder="Enter phone number" value="<?php echo $Phone; ?>"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Country</label><input type="text" name="City" class="form-control" placeholder="Country" value="<?php echo $City; ?>"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Email</label><input type="text" name="email" class="form-control" placeholder="Enter email" value="<?php echo $email; ?>"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Password</label><input type="text" name="password" class="form-control" placeholder="Enter password" value="<?php echo $password; ?>"></div>
                </div>
                <input type="hidden" name="Stu_id" value="<?php echo $_SESSION['Stu_id'];?>">
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Save Profile</button>
            </div>
</form>
            <div class="mt-5 text-center">
                <button class="btn btn-danger" onclick="location.href='logout.php'">Logout</button>
            </div>
            </div>
        </div>
        <!-- <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span>Edit Experience</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                <div class="col-md-12"><label class="labels">Experience in teaching</label><input type="text" class="form-control" placeholder="experience" value=""></div> <br>
                <div class="col-md-12"><label class="labels">bio</label><input type="text" class="form-control" placeholder="additional details" value=""></div>
            </div>
        </div>
    </div> -->
</div>
</div>
</div>
  </body>
</html>