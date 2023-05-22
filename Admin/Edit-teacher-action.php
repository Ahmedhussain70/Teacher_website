<?php

include_once '../conn.php';

$sql='update teacher set Name ="'.$_POST['Name'].'",Phone="'.$_POST['Phone'].'",Spaecialization="'.$_POST['Spaecialization'].'",price="'.$_POST['price'].'",email="'.$_POST['email'].'"where Teach_id='.$_POST['Teach_id'];
if(mysqli_query($conn,$sql)){
    header("Location: teachers.php");
}
else{
    echo "error updating record:".mysqli_error($conn);
}
?>