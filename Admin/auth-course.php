<?php 
include '../conn.php';

session_start();

if(isset ($_SESSION['name'])){

  }else{
        header('Location: login.php');
      }

      $sql = "SELECT * FROM course";
      $result = mysqli_query($conn, $sql);
?>