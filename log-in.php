<?php
    session_start(); 
    include 'db.php';

    class login extends database{
        public function login(){

            if (isset($_POST['email']) && isset($_POST['password'])) {

                function validate($data){

                //    $data = trim($data);

                //    $data = stripslashes($data);

                $data = htmlspecialchars($data);

                return $data;

                }

                $email = validate($_POST['email']);

                $pass = validate($_POST['password']);

                if (empty($email)) {

                    header("Location: signin_page.php?error=Email is required");

                }else if(empty($pass)){

                    header("Location: signin_page.php?error=Password is required");

                }else{

                    $sql = "SELECT * FROM teacher WHERE email='$email' AND password='$pass'";
                    $conn = mysqli_connect($this->servername,$this->username, $this->password,$this->db_name);
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0 ) {

                        $row = mysqli_fetch_assoc($result);

                        if ($row['email'] === $email && $row['password'] === $pass) {
                            
                            $_SESSION['Name'] = $row['Name'];

                            $_SESSION['email'] = $row['email'];

                            $_SESSION['password'] = $row['password'];

                            header("Location: home.php");
                            
                        }else{

                            header("Location: signin_page.php?error=Incorect Username or password");

                        }

                    }else{

                        header("Location:signin_page.php?error=Incorect User name or password");

                    }

                }

            }else{

                header("Location:signin_page.php");

        }
    }
}
?>
