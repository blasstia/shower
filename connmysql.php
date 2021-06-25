<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "class";

    $conn = mysqli_connect($servername,$username,$password,$database);
    if(mysqli_connect_error()){
        print "Failed to connect to mysql:" . mysqli_connect_error();
    } else {
        //print "Successful connection" . "<br>";
    }

?>