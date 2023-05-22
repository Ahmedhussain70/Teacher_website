<h1 class="d-flex justify-content-center mt-5">Search Result</h1>
<?php
include "conn.php";
if (isset($_POST['search'])) {
   $Name = $_POST['search'];
//    $Query = "SELECT Stu_id ,Name,Phone,City,Spaecialization,email FROM teacher WHERE Name LIKE '%$Name%' LIMIT 5";
   $Query = "SELECT Teach_id ,img,Name FROM teacher WHERE Name LIKE '%$Name%' LIMIT 1";
   $ExecQuery = MySQLi_query($conn, $Query);
   while ($Result = MySQLi_fetch_array($ExecQuery)) {
      echo '
      <div class="row g-4 justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="package-item">
                        <div class="overflow-hidden">
   ';
   ?>
   <?php echo '<img class="img-fluid" src="data:image;base64,'.base64_encode($Result['img']).'">' ?>
    <?php 
    echo '<div class="d-flex border-bottom">
    <small class="flex-fill text-center border-end py-2">Religion</small>
    <small class="flex-fill text-center border-end py-2">20$</small>
    <small class="flex-fill text-center py-2">per hour</small>
</div>
<div class="text-center p-4">
    <h3 class="mb-0">
    ';
    ?>
    <?php echo $Result['Name'] ?>
    <?php echo '</h3>
    <div class="mb-3">
        <small class="fa fa-star text-primary"></small>
        <small class="fa fa-star text-primary"></small>
        <small class="fa fa-star text-primary"></small>
        <small class="fa fa-star text-primary"></small>
        <small class="fa fa-star text-primary"></small>
    </div>
    <div class="d-flex justify-content-center mb-2">
        <a href="#" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
        <a href="payment.html" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Book Now</a>
    </div>
</div>
</div>
</div>' ?>
   <?php
}}
?>