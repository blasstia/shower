<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "product";

    $conn = mysqli_connect($servername,$username,$password,$database);

    if(mysqli_connect_error()){
        print "Failed to connect to mysql:" . mysqli_connect_error();
    } else {
        print "Successful connection" . "<br>";
    }

    if(mysqli_select_db($conn,"product")){
        print "database change succeed";
    } else {
        print "database change failed";
    }

    mysqli_query($conn,"SET NAMES utf8");   //chinese code
    $sql = "select * from price where category = '主機板'";

    if ($result = mysqli_query($conn,$sql)){
        print "<br>共有" . mysqli_num_rows($result) . "筆";
        print ".包含" . mysqli_num_fields($result) . "個欄位";
        mysqli_free_result($result);
    }

    mysqli_close($conn);
    ?>
</body>
</htmml>
