<?php

include_once 'conn.php';

$sql='update student set Name ="'.$_POST['Name'].'",Phone="'.$_POST['Phone'].'",City="'.$_POST['City'].'",email="'.$_POST['email'].'"where Stu_id='.$_POST['Stu_id'];

if(mysqli_query($conn,$sql)){
    header("Location: profile.php");
}
else{
    echo "error updating record:".mysqli_error($conn);
}
?>