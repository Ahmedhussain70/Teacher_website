<?php 
    require 'conn.php';
    include 'register.php';
    
    $name = $_POST['Name'];
    $phone = $_POST['Phone'];
    $age = $_POST['age'];
    $city = $_POST['City'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sgin = new register();
    $con = $sgin->connect();
    $sgin->insert($con,$name,$phone,$city,$city,$email,$password);
?>