<?php
include "db.php";

#check email and password Teachers
if (isset($_POST['submit_login'])){
    $email = $_POST['email'];
    $password = $_POST['psw'];

    $sql = "SELECT * FROM teacher WHERE email ='$email' AND password ='$password'";
    $result = mysqli_query($conn,$sql);
    if (mysqli_num_rows($result)==1){
     header("Location: home.php");
    }
    else {
    echo "Invalid email or password.";
    header("Location: {$_SERVER['HTTP_REFERER']}");
    }

}
?>