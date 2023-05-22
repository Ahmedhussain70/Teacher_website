<?php
include 'db.php';

class payment extends database{
    public function insert(){
        $card_num = $_POST['card_num'];
        $name_card = $_POST['name_card'];
        $teacher_name = $_POST['teacher_name'];
        $student_name = $_POST['student_name'];
        
            $sql = "INSERT INTO payments (`card_num`,`name_card`,`teacher_name`,`student_name`) VALUES('$card_num', '$name_card','$teacher_name','$student_name')";
            $conn = mysqli_connect($this->servername,$this->username, $this->password,$this->db_name);
            $result = mysqli_query($conn,$sql);
            if ($result){
             header("Location: Teachers_Home.php");
             exit();
            }
            else {
            echo "Invalid Register.";
            header("Location: {$_SERVER['HTTP_REFERER']}");
        }
    }
}
?>