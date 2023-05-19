<?php 
    include '../db.php';

    class deletetranee extends database{
        function del (){
            $sql="delete from `teacher` where Teach_id=".$_GET['Teach_id'];
            $conn = mysqli_connect($this->servername,$this->username, $this->password,$this->db_name);
            if (mysqli_query($conn,$sql)){
                header("Location: teachers.php");
            }else{
                echo("Error");
            }
        }
    }
?>