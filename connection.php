<?php
    $host="localhost";
    $usr="root";
    $pass="";
    $database="project_login";
    $port=3308;
    $conn= new mysqli("$host","$usr","$pass","$database","$port");
    if($conn->connect_error)
    {
        die("Connection Failed".$conn->connect_error);
    }
        echo "";
?>