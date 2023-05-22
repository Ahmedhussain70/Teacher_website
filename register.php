<?php

include 'db.php';

class register extends database{
    public function insert(){
            $name = $_POST['Name'];
            $phone = $_POST['Phone'];
            $age = $_POST['age'];
            $city = $_POST['City'];
            $email = $_POST['email'];
            $password = $_POST['password'];
        
            $sql = "INSERT INTO student (Name,Phone,age,City,email,password) VALUES('$name', '$phone','$age','$city','$email','$password')";
            $conn = mysqli_connect($this->servername,$this->username, $this->password,$this->db_name);
            $result = mysqli_query($conn,$sql);
            if ($result){
             header("Location: signin__page.php");
             exit();
            }
            else {
            echo "Invalid Register.";
            header("Location: {$_SERVER['HTTP_REFERER']}");
        }
    }
}

?>