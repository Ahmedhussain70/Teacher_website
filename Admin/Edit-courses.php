<?php
include '../conn.php'; 
$sql="select * from `course` where Course_id=".$_GET['Course_id'];
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_array($result)){
        $id=$row['Course_id'];
        $name=$row['Course'];
        $Price=$row['Price'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard.css">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
      crossorigin="anonymous"
    ></script>
    <title>update</title>
</head>
<body>
<form method="post" action="Edit-courses-action.php">
<div class="mt-4 col-lg-12 mb-4 login">
      <h1>Update Data</h1>
  <div class="mb-3">
    <label for="in1" class="form-label">Course</label>
    <!-- ba7ot goa el value php 3ashen el variable el goa dah fel php fa lazem ahoto gowa php. -->
    <input type="text" class="form-control" id="in1" aria-describedby="emailHelp" name="Course" value="<?php echo $name;?>">
  </div>
  <div class="mb-3">
    <label for="in2" class="form-label">Price</label>
    <input type="text" class="form-control" id="in2" name="Price" value="<?php echo $Price;?>">
  </div>
  <div class="mb-3">
    <input type="hidden" class="form-control" name="Course_id" value="<?php echo $id;?>">
  </div>

  <button type="submit" class="btn btn-primary">Update</button>
  </div>
</form>
</body>
</html>