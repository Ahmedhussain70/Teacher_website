<?php 
    include '../db.php';

    class delete extends database{
        function del (){
            $sql="delete from `student` where Stu_id=".$_GET['Stu_id'];
            $conn = mysqli_connect($this->servername,$this->username, $this->password,$this->db_name);
            if (mysqli_query($conn,$sql)){
                header("Location: users.php");
            }else{
                echo("Error");
            }
        }
    }
?>