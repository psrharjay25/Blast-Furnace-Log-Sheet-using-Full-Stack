<?php
    include("connection.php");
    if(isset($_POST['submit']))
    {
        $username=$_POST['user'];
        $password=$_POST['pass'];

        $sql="select * from admin_login_details where username='$username' and password='$password';";
        $result=mysqli_query($conn,$sql);
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
        $count=mysqli_num_rows($result);
        echo "adfaw";
        if($count==1)
        {
            header("Location:loginpage1.html");
        }   
        else
        {
            echo '<script> 
                    window.location.href="index_1.php"; 
                    alert("Login Failed. Invalid Username or Password!!")
                    </script>';
        }
    }
?>