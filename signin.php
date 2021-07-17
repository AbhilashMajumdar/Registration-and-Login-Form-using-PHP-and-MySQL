<?php
    include 'documents/db_connect.php';

    if(isset($_POST['signin']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];

        if($password == $cpassword)
        {
            $s = "SELECT * FROM registration WHERE username = '$username'";
            $result = mysqli_query($conn, $s);
            $numrows = mysqli_num_rows($result);

            if($numrows == 1)
            {
                echo '<script>alert("Account Already exist")</script>';
                header('location: index.html'); 
            }
            else
            {
                $hash = password_hash($password, PASSWORD_DEFAULT);
                $sql = "INSERT INTO `registration` (`rno`, `username`, `password`, `time`) VALUES (NULL, '$username', '$hash', current_timestamp())";
                $res = mysqli_query($conn, $sql);
        
                if($res)
                {
                    echo'<script>alert("Sign up successfull")</script>';
                    header('location:index.html');
                }
            }
        }  
    } 
?>
