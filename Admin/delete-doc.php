<?php 
    include '../db.php';

    class deletedoc extends database{
        function del (){
            $sql="delete from `doctors` where id_doctor=".$_GET['id_doctor'];
            $conn = mysqli_connect($this->servername,$this->username, $this->password,$this->db_name);
            if (mysqli_query($conn,$sql)){
                header("Location: doctors.php");
            }else{
                echo("Error");
            }
        }
    }
?>