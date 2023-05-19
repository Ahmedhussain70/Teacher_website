<?php 
include '../conn.php';

session_start();

if(isset ($_SESSION['name']) || ($_SESSION['name_doctor'])){

  }else{
        header('Location: login.php');
      }

      $sql = "SELECT * FROM bookings";
      $result = mysqli_query($conn, $sql);
?>