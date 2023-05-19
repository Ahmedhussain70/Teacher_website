<?php 
    include '../db.php';

    class deletedoc extends database{
        function del (){
            $sql="delete from `bookings` where id_order=".$_GET['id_order'];
            $conn = mysqli_connect($this->servername,$this->username, $this->password,$this->db_name);
            if (mysqli_query($conn,$sql)){
                header("Location: Bookings.php");
            }else{
                echo("Error");
            }
        }
    }
?>