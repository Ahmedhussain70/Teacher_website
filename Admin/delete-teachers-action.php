<?php 
    require '../conn.php';
    include 'delete-teachers.php';

    $del = new deletetranee();
    $con = $del->connect();
    $del->del($con);
?>