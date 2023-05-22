<?php 
    require 'conn.php';
    include 'pay-ment.php';
    
    $card_num = $_POST['card_num'];
    $name_card = $_POST['name_card'];
    $teacher_name = $_POST['teacher_name'];
    $student_name = $_POST['student_name'];

    $pay = new payment();
    $con = $pay->connect();
    $pay->insert($con,$card_num,$name_card,$teacher_name,$student_name);
?>