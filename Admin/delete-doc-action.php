<?php 
    require '../conn.php';
    include 'delete-doc.php';

    $del = new deletedoc();
    $con = $del->connect();
    $del->del($con);
?>