<?php
    include 'documents/db_connect.php';

    $login = false;

    if(isset($_POST['login']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM registration WHERE username = '$username'";
        $result = mysqli_query($conn, $sql);
        $numrows = mysqli_num_rows($result);

        if($numrows == 1)
        {
                while($row = mysqli_fetch_assoc($result))
                {
                    if(password_verify($password, $row['password']))
                    {
                        $login = true;
                    }
                    else
                    {
                        echo'<script>alert("Check your password and try again.")</script>';
                        header("location:index.html");
                    }
                }
                if($login == true)
                {
                    session_start();
                    $_SESSION['loggedin'] = true;
                    $_SESSION['username'] = $username;

                    header("location: welcome.php");
                }  
        }
        else
        {
            echo'<script>alert("Check your username and try again.")</script>';
            header("location:index.html");
        }
    }
?>