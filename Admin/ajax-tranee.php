<table class="table table-hover my-10">
           <!-- <th class="bg-light">id </th> -->
           <th class="bg-light"> #</th>
           <th class="bg-light"> Username</th>
           <th class="bg-light"> Phone</th>
           <th class="bg-light"> Spaecialization</th>
           <th class="bg-light"> email</th>
           <th class="bg-light"> Action</th>
<?php
//Including Database configuration file.
include "../conn.php";
//Getting value of "search" variable from "script.js".
if (isset($_POST['search'])) {
//Search box value assigning to $Name variable.
   $Name = $_POST['search'];
//Search query.
   $Query = "SELECT Teach_id,Name,Phone,Spaecialization,email FROM teacher WHERE Name LIKE '%$Name%' LIMIT 5";
//Query execution
// $conn = mysqli_connect($this->servername,$this->username, $this->password,$this->db_name);
   $ExecQuery = MySQLi_query($conn, $Query);
//Creating unordered list to display result.

   //Fetching result from database.
   while ($Result = MySQLi_fetch_array($ExecQuery)) {
      echo '
<tr>
   ';
       ?>
   <!-- Creating unordered list items.
        Calling javascript function named as "fill" found in "script.js" file.
        By passing fetched result as parameter. -->
   <td onclick='fill("<?php echo $Result['Name']; ?>")'>
   <a>
   <!-- Assigning searched result in "Search box" in "search.php" file. -->
       <?php echo $Result['Teach_id']; ?>
   </td></a>
   <td onclick='fill("<?php echo $Result['Name']; ?>")'>
   <a>
   <!-- Assigning searched result in "Search box" in "search.php" file. -->
       <?php echo $Result['Name']; ?>
   </td></a>
   <td onclick='fill("<?php echo $Result['Name']; ?>")'>
   <a>
   <!-- Assigning searched result in "Search box" in "search.php" file. -->
       <?php echo $Result['Phone']; ?>
   </td></a>
   <td onclick='fill("<?php echo $Result['Name']; ?>")'>
   <a>
   <!-- Assigning searched result in "Search box" in "search.php" file. -->
       <?php echo $Result['Spaecialization']; ?>
   </td></a>
   <td onclick='fill("<?php echo $Result['Name']; ?>")'>
   <a>
   <!-- Assigning searched result in "Search box" in "search.php" file. -->
       <?php echo $Result['email']; ?>
   </td></a>
   <td><a class="btn btn-danger  mt-2"  href="delete-action.php?id_trainee=<?php echo $row[0];?>"> Delete</a>
         <a class="btn btn-warning  mt-2" href="Edit.php?id_trainee=<?php echo $row[0];?>"> Edit</a>
   </td>
   <!-- Below php code is just for closing parenthesis. Don't be confused. -->
   <?php
}}
?>
</tr>
