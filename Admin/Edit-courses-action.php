<?php

include_once '../conn.php';

$sql='update course set Course="'.$_POST['Course'].'",Price="'.$_POST['Price'].'"where Course_id='.$_POST['Course_id'];

if(mysqli_query($conn,$sql)){
    header("Location: corses.php");
}
else{
    echo "error updating record:".mysqli_error($conn);
}
?>