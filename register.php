<?php

include 'db.php';

class register extends database{
    public function insert(){
            $name = $_POST['Name'];
            $phone = $_POST['Phone'];
            $Spaecialization = $_POST['Spaecialization'];
            $email = $_POST['email'];
            $password = $_POST['password'];
        
            $sql = "INSERT INTO teacher (Name,Phone,Spaecialization,email,password) VALUES('$name', '$phone', '$Spaecialization','$email','$password')";
            $conn = mysqli_connect($this->servername,$this->username, $this->password,$this->db_name);
            $result = mysqli_query($conn,$sql);
            if ($result){
             header("Location: signin_page.php");
             exit();
            }
            else {
            echo "Invalid Register.";
            header("Location: {$_SERVER['HTTP_REFERER']}");
        }
    }
}

?>