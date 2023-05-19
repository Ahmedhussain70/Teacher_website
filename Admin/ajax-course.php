<table class="table table-hover my-10">
           <th class="bg-light"> #</th>
           <th class="bg-light"> Course</th>
           <th class="bg-light"> Price</th>
           <th class="bg-light"> Action</th>
<?php
include "../conn.php";
if (isset($_POST['search'])) {
   $Name = $_POST['search'];
   $Query = "SELECT Course_id,Course,Price FROM course WHERE Course LIKE '%$Name%' LIMIT 5";
   $ExecQuery = MySQLi_query($conn, $Query);
   while ($Result = MySQLi_fetch_array($ExecQuery)) {
      echo '
<tr>
   ';
       ?>
   <td onclick='fill("<?php echo $Result['Course']; ?>")'>
   <a>
       <?php echo $Result['Course_id']; ?>
   </td></a>
   <td onclick='fill("<?php echo $Result['Course']; ?>")'>
   <a>
       <?php echo $Result['Course']; ?>
   </td></a>
   <td onclick='fill("<?php echo $Result['Course']; ?>")'>
   <a>
       <?php echo $Result['Price']; ?>
   </td></a>
   <td><a class="btn btn-danger  mt-2"  href="delete-action.php?Course_id=<?php echo $row[0];?>"> Delete</a>
         <a class="btn btn-warning  mt-2" href="Edit.php?Course_id=<?php echo $row[0];?>"> Edit</a>
   </td>
   <?php
}}
?>
</tr>
