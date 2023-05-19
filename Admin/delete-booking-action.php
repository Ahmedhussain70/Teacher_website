<?php 
    require '../conn.php';
    include 'delete-booking.php';

    $del = new deletedoc();
    $con = $del->connect();
    $del->del($con);
?>