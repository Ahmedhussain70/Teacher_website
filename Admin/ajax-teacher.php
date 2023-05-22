<table class="table table-hover my-10">
        <th class="bg-light"> #</th>
        <th class="bg-light"> Username</th>
        <th class="bg-light"> Phone</th>
        <th class="bg-light"> Specialization</th>
        <th class="bg-light"> price</th>
        <th class="bg-light"> Email</th>
        <th class="bg-light"> Action</th>
<?php
include "../conn.php";
if (isset($_POST['search'])) {
   $Name = $_POST['search'];
   $Query = "SELECT Teach_id,Name,Phone,Spaecialization,price,email FROM teacher WHERE Name LIKE '%$Name%' LIMIT 5";
   $ExecQuery = MySQLi_query($conn, $Query);
   while ($Result = MySQLi_fetch_array($ExecQuery)) {
      echo '
<tr>
   ';
       ?>
   <td onclick='fill("<?php echo $Result['Name']; ?>")'>
   <a>
       <?php echo $Result['Teach_id']; ?>
   </td></a>
   <td onclick='fill("<?php echo $Result['Name']; ?>")'>
   <a>
       <?php echo $Result['Name']; ?>
   </td></a>
   <td onclick='fill("<?php echo $Result['Name']; ?>")'>
   <a>
       <?php echo $Result['Phone']; ?>
   </td></a>
   <td onclick='fill("<?php echo $Result['Name']; ?>")'>
   <a>
       <?php echo $Result['Spaecialization']; ?>
   </td></a>
   <td onclick='fill("<?php echo $Result['Name']; ?>")'>
   <a>
       <?php echo $Result['price']; ?>
   </td></a>
   <td onclick='fill("<?php echo $Result['Name']; ?>")'>
   <a>
       <?php echo $Result['email']; ?>
   </td></a>
   <td><a class="btn btn-danger  mt-2"  href="delete-action.php?Course_id=<?php echo $row[0];?>"> Delete</a>
         <a class="btn btn-warning  mt-2" href="Edit.php?Course_id=<?php echo $row[0];?>"> Edit</a>
   </td>
   <?php
}}
?>
</tr>
