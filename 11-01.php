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

    if ($result = mysqli_query($conn,"select database()")){
        $row = mysqli_fetch_row($result);
        print "<br>default database is " . $row[0];
        mysqli_free_result($result);
    }

    mysqli_close($conn);
    ?>
</body>
</htmml>
