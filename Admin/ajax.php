<table class="table table-hover my-10">
           <th class="bg-light"> #</th>
           <th class="bg-light"> Username</th>
           <th class="bg-light"> Phone</th>
           <th class="bg-light"> City</th>
           <th class="bg-light"> Email</th>
           <th class="bg-light"> Password</th>
           <th class="bg-light"> Action</th>
<?php
include "../conn.php";
if (isset($_POST['search'])) {
   $Name = $_POST['search'];
   $Query = "SELECT Stu_id ,Name,Phone,City,email,password FROM student WHERE Name LIKE '%$Name%' LIMIT 5";
   $ExecQuery = MySQLi_query($conn, $Query);
   while ($Result = MySQLi_fetch_array($ExecQuery)) {
      echo '
<tr>
   ';
       ?>
   <td onclick='fill("<?php echo $Result['Name']; ?>")'>
   <a>
       <?php echo $Result['Stu_id']; ?>
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
       <?php echo $Result['City']; ?>
   </td></a>
   <td onclick='fill("<?php echo $Result['Name']; ?>")'>
   <a>
       <?php echo $Result['email']; ?>
   </td></a>
   <td onclick='fill("<?php echo $Result['Name']; ?>")'>
   <a>
       <?php echo $Result['password']; ?>
   </td></a>
   <td><a class="btn btn-danger  mt-2"  href="delete-action.php?Stu_id=<?php echo $row[0];?>"> Delete</a>
         <a class="btn btn-warning  mt-2" href="Edit.php?Stu_id=<?php echo $row[0];?>"> Edit</a>
   </td>
   <?php
}}
?>
</tr>
