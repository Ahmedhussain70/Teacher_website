<?php
include '../conn.php'; 
$sql="select * from `teacher` where Teach_id=".$_GET['Teach_id'];
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_array($result)){
        $id=$row['Teach_id'];
        $name=$row['Name'];
        $phone=$row['Phone'];
        $Spaecialization=$row['Spaecialization'];
        $price=$row['price'];
        $email=$row['email'];
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
    <title>Update data</title>
</head>
<body>
<form method="post" action="Edit-teacher-action.php">
<div class="mt-4 col-lg-12 mb-4 login">
      <h1>Update Data</h1>
  <div class="mb-3">
    <label for="in1" class="form-label">Name</label>
    <!-- ba7ot goa el value php 3ashen el variable el goa dah fel php fa lazem ahoto gowa php. -->
    <input type="text" class="form-control" id="in1" aria-describedby="emailHelp" name="Name" value="<?php echo $name;?>">
  </div>
  <div class="mb-3">
    <label for="in2" class="form-label">Phone</label>
    <input type="text" class="form-control" id="in2" name="Phone" value="<?php echo $phone;?>">
  </div>
  <div class="mb-3">
    <label for="in3" class="form-label">Spaecialization</label>
    <input type="text" class="form-control" id="in2" name="Spaecialization" value="<?php echo $Spaecialization;?>">
  </div>
  <div class="mb-3">
    <label for="in4" class="form-label">Price</label>
    <input type="text" class="form-control" id="in4" name="price" value="<?php echo $price;?>">
  </div>
  <div class="mb-3">
    <label for="in4" class="form-label">Email</label>
    <input type="text" class="form-control" id="in4" name="email" value="<?php echo $email;?>">
  </div>
  <div class="mb-3">
    <input type="hidden" class="form-control" name="Teach_id" value="<?php echo $id;?>">
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</div>
</form>
</body>
</html>