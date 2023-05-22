<?php 
include 'conn.php';

session_start();

if(isset ($_SESSION['Name'])){

  }else{
        header('Location: signin__page.php');
      }

      $sql = "SELECT * FROM student";
      $result = mysqli_query($conn, $sql);
?>