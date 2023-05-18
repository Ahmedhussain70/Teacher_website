<?php 
    require 'conn.php';
    include 'register.php';
    
    $name = $_POST['Name'];
    $phone = $_POST['Phone'];
    $Spaecialization = $_POST['Spaecialization'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sgin = new register();
    $con = $sgin->connect();
    $sgin->insert($con,$name,$phone,$Spaecialization,$email,$password);
?>