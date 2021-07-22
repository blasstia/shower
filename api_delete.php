<?php
    if(isset($_GET["cID"])){
        require_once("connmysql.php");
        $sql = "DELETE FROM students WHERE cID = " . $_GET["cID"];
        mysqli_query($conn,$sql);
        mysqli_close($conn);
    }
    if(isset($_POST["cID"])){
        require_once("connmysql.php");
        $sql = "DELETE FROM students WHERE cID = " . $_POST["cID"];
        mysqli_query($conn,$sql);
        mysqli_close($conn);
    }
?>